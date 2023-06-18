<?php
    require_once('database.php');

    $petId = $_POST['petId'];

    $sql = "DELETE FROM tbl_pet WHERE PetID = '$petId'";

    $query = mysqli_query($connection, $sql);

    if ($query) {
        echo "Pet deleted successfully.";
    } else {
        echo "Error deleting pet: " . mysqli_error($connection);
    }
?>
