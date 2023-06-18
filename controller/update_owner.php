<?php
    require_once('database.php');

    $ownerId = $_POST['ownerId'];
    $ownerName = $_POST['ownerName'];
    $ownerAddress = $_POST['ownerAddress'];
    $ownerCity = $_POST['ownerCity'];
    $ownerZip = $_POST['ownerZip'];
    $ownerMobileNo = $_POST['ownerMobileNo'];
    $ownerEmail = $_POST['ownerEmail'];
    $ownerIsActive = $_POST['ownerIsActive'];

    $sql = "UPDATE tbl_petowner SET
                OwnerName = '$ownerName',
                OwnerAddress = '$ownerAddress',
                OwnerCity = '$ownerCity',
                OwnerZip = '$ownerZip',
                OwnerMobileNo = '$ownerMobileNo',
                OwnerEmail = '$ownerEmail',
                IsActive = '$ownerIsActive'
            WHERE OwnerID = '$ownerId'";

    $query = mysqli_query($connection, $sql);

    if ($query) {
        echo "success";
    } else {
        echo "Error updating owner details: " . mysqli_error($connection);
    }
?>
