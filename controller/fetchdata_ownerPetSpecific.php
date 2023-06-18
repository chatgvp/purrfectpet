<?php
    require_once('database.php');
    $ownerID = $_POST['ownerId'];
    $sql = "SELECT * FROM tbl_pet WHERE PetOwnerID = $ownerID";
    $query = mysqli_query($connection, $sql);
    $pets = array();

    while ($row = $query->fetch_assoc()) {
        $pet = array(
            "PetID" => $row["PetID"],
            "PetName" => $row["PetName"],
        );
        array_push($pets, $pet);
    }
    echo json_encode($pets);
?>