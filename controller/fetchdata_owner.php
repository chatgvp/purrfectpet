<?php
require_once('database.php');
$sql = "SELECT * FROM tbl_petowner";
$query = mysqli_query($connection, $sql);
$owners = array();

while ($row = $query->fetch_assoc()) {
    $owner = array(
        "OwnerID" => $row["OwnerID"],
        "OwnerName" => $row["OwnerName"],
        "OwnerAddress" => $row["OwnerAddress"],
        "OwnerCity" => $row["OwnerCity"],
        "OwnerZip" => $row["OwnerZip"],
        "OwnerMobileNo" => $row["OwnerMobileNo"],
        "OwnerEmail" => $row["OwnerEmail"],
        "IsActive" => $row["IsActive"]
    );
    array_push($owners, $owner);
    //$owners[] = $owner;
}
 echo json_encode($owners);
?>