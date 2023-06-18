<?php
require_once('database.php');

$ownerId = $_POST['ownerId'];
$ownerIsActive = $_POST['ownerIsActive'];

$sql = "UPDATE tbl_petowner SET IsActive = '$ownerIsActive' WHERE OwnerID = '$ownerId'";

$query = mysqli_query($connection, $sql);

if ($query) {
    echo "Owner status updated successfully.";
} else {
    echo "Error updating owner status: " . mysqli_error($connection);
}
?>
