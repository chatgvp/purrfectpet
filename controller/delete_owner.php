<?php
    require_once('database.php');

    $ownerId = $_POST['ownerId'];

    // Check if there is a foreign key connection
    $checkSql = "SELECT * FROM tbl_pet WHERE PetOwnerID = '$ownerId'";
    $checkQuery = mysqli_query($connection, $checkSql);

    if (mysqli_num_rows($checkQuery) > 0) {
        // There is a foreign key connection, cannot delete
        echo "Cannot delete the owner because there are associated pets.";
    } else {
        // No foreign key connection, proceed with deletion
        $deleteSql = "DELETE FROM tbl_petowner WHERE OwnerID = '$ownerId'";
        $deleteQuery = mysqli_query($connection, $deleteSql);

        if ($deleteQuery) {
            echo "success";
        } else {
            echo "Error deleting owner: " . mysqli_error($connection);
        }
    }
?>
