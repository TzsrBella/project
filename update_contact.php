<?php
require_once("../../admin/Helpers/db_connect.php");

foreach ($_POST as $key => $value) {
    if (strpos($key, 'tel') === 0) {
        $id = substr($key, strlen('tel'));
        $telnumber = $_POST['tel'.$id];
        $address = $_POST['address'.$id];

        $sql = "UPDATE ContactInformations SET telnumber='$telnumber', address='$address' WHERE id='$id'";
        $conn->query($sql);
    }
}

        header("Location: /admin/dashboard", true, 303);
exit();
?>
