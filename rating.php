

<?php 

session_start();
require_once 'connect.php';
$id=$_POST['id'];
$rate=$_POST['rate'];
$logged_id=$_SESSION['logged']['id'];
$value_of_rate=0;


$sql = "SELECT rating , quantity FROM items WHERE id='$id'";
    
$result = $conn->query($sql);
    while ($items = $result->fetch_assoc()) {
     $quantity=$items['quantity'];
    $rating=$items['rating'];}





$sql1 = "SELECT * FROM rating WHERE user_id='$logged_id' AND item_id='$id'";
    
$result1 = $conn->query($sql1);
$num_rows = mysqli_num_rows($result1);

    while ($rating1 = $result1->fetch_assoc()) {
        $xd=$rating1['rate'];
        
    }


if($num_rows==1){
    if($rate>$xd){
        $value_of_rate=$rate-$xd;
        $rating+=$value_of_rate;
        $sql = "UPDATE items SET rating=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("di", $rating, $id); 
        $stmt->execute();
}
if($xd>$rate){
    $value_of_rate=$xd-$rate;
    $rating-=$value_of_rate;
    $sql = "UPDATE items SET rating=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("di", $rating, $id); 
    $stmt->execute();
}

$sql = "UPDATE rating SET rate=? WHERE user_id=? and item_id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iii", $rate, $logged_id, $id); 
$stmt->execute();

}else{

$quantity++;
$rating+=$rate;


$sql = "UPDATE items SET rating=?, quantity=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("dii", $rating, $quantity,$id);  
$stmt->execute();

$sql = "INSERT INTO `rating`(`item_id`, `user_id`,`rate`) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iii", $id, $_SESSION['logged']['id'], $rate);  
$stmt->execute();

}
header('location: menu.php');
?>