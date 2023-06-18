<?php
require_once('database.php');

$petName = $_POST['petName'];
$petType = $_POST['petType'];
$petBreed = $_POST['petBreed'];
$petBdate = $_POST['petBdate'];
$petGender = $_POST['petGender'];
$petNotes = $_POST['petNotes'];
$petOwnerID = $_POST['petOwnerID'];
$petImage = !empty($_FILES['petImage']['tmp_name']) ? addslashes(file_get_contents($_FILES['petImage']['tmp_name'])) : addslashes(file_get_contents('../image/default.png'));

// Generate a random 6-digit PetID
$petID = mt_rand(100000, 999999);

$sql = "INSERT INTO tbl_pet (PetID, PetName, PetType, PetBreed, PetBdate, PetGender, PetNotes, PetOwnerID, PetImage)
        VALUES ('$petID', '$petName', '$petType', '$petBreed', '$petBdate', '$petGender', '$petNotes', '$petOwnerID', '$petImage')";

$query = mysqli_query($connection, $sql);

if ($query) {
    echo "Pet inserted successfully.";
} else {
    echo "Failed to insert pet.";
}
?>
