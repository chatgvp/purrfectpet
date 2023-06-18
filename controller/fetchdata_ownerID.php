<?php
require_once('database.php');
$sql = "SELECT OwnerID, OwnerName FROM tbl_petowner";
$query = mysqli_query($connection, $sql);
$owners = array();

while ($row = $query->fetch_assoc()) {
    $owner = array(
        "OwnerID" => $row["OwnerID"],
        "OwnerName" => $row["OwnerName"],
    );
    array_push($owners, $owner);
}
 echo json_encode($owners);
?>