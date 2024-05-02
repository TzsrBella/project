<?php
require_once("../../admin/Helpers/db_connect.php");

foreach ($_POST as $key => $value) {
    // Vérifier si la clé commence par "title_" pour identifier les champs de titre
    if (strpos($key, 'title_') === 0) {
        $id = substr($key, strlen('title_'));
        $title = $_POST['title_'.$id];
        $description = $_POST['description_'.$id];
        $price = $_POST['price_'.$id];
        $salon = $_POST['salon_'.$id];
        $prestation = $_POST['prestation_'.$id];
        $duration = $_POST['duration_'.$id];

        // Mettre à jour la ligne correspondante dans la base de données
        $sql = "UPDATE PrestationsList SET title='$title', description='$description', price='$price', salon='$salon', prestation='$prestation', duration='$duration' WHERE id='$id'";
        $conn->query($sql);
    }
}

// Rediriger vers la page précédente
header("Location: /admin/dashboard", true, 303);
exit();
?>
