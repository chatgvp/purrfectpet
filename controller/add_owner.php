<?php
    require_once('database.php');

    $ownerName = $_POST['ownerName'];
    $ownerAddress = $_POST['ownerAddress'];
    $ownerCity = $_POST['ownerCity'];
    $ownerZip = $_POST['ownerZip'];
    $ownerMobileNo = $_POST['ownerMobileNo'];
    $ownerEmail = $_POST['ownerEmail'];
    // $isActive = $_POST['isActive'];

    $randomNumber = rand(100000, 999999);

    $sql = "INSERT INTO tbl_petowner (OwnerID, OwnerName, OwnerAddress, OwnerCity, OwnerZip, OwnerMobileNo, OwnerEmail)
            VALUES ('$randomNumber', '$ownerName', '$ownerAddress', '$ownerCity', '$ownerZip', '$ownerMobileNo', '$ownerEmail')";

    $query = mysqli_query($connection, $sql);

    if ($query) {
        echo $randomNumber;
    }
?>
