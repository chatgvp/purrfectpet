<?php
    require_once('database.php');
    $petId = $_GET['petId'];
    $sql = "SELECT * FROM tbl_pet WHERE PetID = $petId";
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
