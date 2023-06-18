<?php
require_once('database.php');

$petId = $_POST['petId'];
$petIsActive = $_POST['petIsActive'];

$sql = "UPDATE tbl_pet SET IsActive = '$petIsActive' WHERE PetID = '$petId'";

$query = mysqli_query($connection, $sql);

if ($query) {
    echo "Pet status updated successfully.";
} else {
    echo "Error updating pet status: " . mysqli_error($connection);
}
?>
