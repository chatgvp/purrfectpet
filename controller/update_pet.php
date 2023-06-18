<?php
require_once('database.php');

$petId = $_POST['petId'];
$petName = $_POST['petName'];
$petType = $_POST['petType'];
$petBreed = $_POST['petBreed'];
$petBdate = $_POST['petBdate'];
$petGender = $_POST['petGender'];
$petNotes = $_POST['petNotes'];
$petOwnerID = $_POST['petOwnerID'];


$sql = "UPDATE tbl_pet SET
            PetName = '$petName',
            PetType = '$petType',
            PetBreed = '$petBreed',
            PetBdate = '$petBdate',
            PetGender = '$petGender',
            PetNotes = '$petNotes',
            PetOwnerID = '$petOwnerID'";

if (!empty($_FILES['FpetImage']['tmp_name'])) {
    $FpetImage = addslashes(file_get_contents($_FILES['FpetImage']['tmp_name']));
    $sql .= ", PetImage = '$FpetImage'";
}

$sql .= " WHERE PetID = '$petId'";

$query = mysqli_query($connection, $sql);

if ($query) {
    echo isset($FpetImage) ? $FpetImage : '';
} else {
    echo "Error updating pet details: " . mysqli_error($connection);
}
?>
