<?php
require_once('database.php');

// Check if the search term is set
$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';

$sql = "SELECT * FROM tbl_pet WHERE PetName LIKE '%$searchTerm%' or PetID LIKE '%$searchTerm%' or PetType LIKE '%$searchTerm%' or PetBreed LIKE '%$searchTerm%'";
$query = mysqli_query($connection, $sql);
$pets = array();

while ($row = $query->fetch_assoc()) {
    $pet = array(
        "PetID" => $row["PetID"],
        "PetImage" => base64_encode($row['PetImage']),
        "PetName" => $row["PetName"],
        "PetType" => $row["PetType"],
        "PetBreed" => $row["PetBreed"],
        "PetBdate" => $row["PetBdate"],
        "PetGender" => $row["PetGender"],
        "PetNotes" => $row["PetNotes"],
        "PetOwnerID" => $row["PetOwnerID"],
        "IsActive" => $row["IsActive"]
    );
    array_push($pets, $pet);
}

echo json_encode($pets);
?>
