<?php
require_once("../../admin/Helpers/db_connect.php");

// Préparer la requête
$sql = "UPDATE AboutDescription SET title=?, description=?, imgSource=? WHERE id=?";
$stmt = $conn->prepare($sql);

foreach ($_POST as $key => $value) {
    if (strpos($key, 'title_') === 0) {
        $id = substr($key, strlen('title_'));
        $title = $_POST['title_'.$id];
        $description = $_POST['description_'.$id];
        $imgSource = $_POST['imgSource_'.$id];

        // Binder les paramètres
        $stmt->bind_param("sssi", $title, $description, $imgSource, $id);
        
        // Exécuter la requête
        $stmt->execute();
    }
}

// Fermer la requête
$stmt->close();

// Rediriger vers la page précédente
header("Location: /admin/dashboard", true, 303);
exit();
?>
