<?php
session_start();
require("../admin/Helpers/Router.php");

$URI_path = $_SERVER["REQUEST_URI"];

if ($URI_path === "/" || substr($URI_path, 0, strlen("/?")) === "/?") {
    Router::page_loader("Tőzsér Éva", "Description", "index.php");
}
elseif ($URI_path === "/index.php" || $URI_path === "/index.html") {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: /");
    die();
}
elseif (substr($URI_path, 0, strlen("/contact?")) === "/contact?" || $URI_path === "/contact") {
    Router::page_loader(
        "Tőzsér Éva - Contact Us",
        "Description",
        "contact.php"
    );
} 
elseif (substr($URI_path, 0, strlen("/about?")) === "/about?" || $URI_path === "/about") {
    Router::page_loader(
        "Tőzsér Éva - About Us",
        "Description",
        "about.php"
    );
} 
elseif (substr($URI_path, 0, strlen("/prestation/eyelash-lift?")) === "/prestation/eyelash-lift?" || $URI_path === "/prestation/eyelash-lift") {
    Router::page_loader(
        "Tőzsér Éva - Eyelash Lift",
        "Description",
        "eyelash_lift.php"
    );
} 
elseif (substr($URI_path, 0, strlen("/prestation/eyelash-extension?")) === "/prestation/eyelash-extension?" || $URI_path === "/prestation/eyelash-extension") {
    Router::page_loader(
        "Tőzsér Éva - Eyelash Extension",
        "Description",
        "eyelash_extensions.php"
    );
} 
elseif (substr($URI_path, 0, strlen("/prestation/eyelash-tint?")) === "/prestation/eyelash-tint?" || $URI_path === "/prestation/eyelash-tint") {
    Router::page_loader(
        "Tőzsér Éva - Eyelash Tint",
        "Description",
        "eyelash_tinting.php"
    );
} 
elseif (substr($URI_path, 0, strlen("/admin/dashboard?")) === "/admin/dashboard?" || $URI_path === "/admin/dashboard") {
    if(!isset($_SESSION["admin_connect"])){
        header("Location: /admin/login", true, 303);
        die();
    }

    Router::page_loader(
        "Tőzsér Éva - Admin Dashboard",
        "Description",
        "admin_dashboard.php"
    );
} 
elseif (substr($URI_path, 0, strlen("/admin/login?")) === "/admin/login?" || $URI_path === "/admin/login") {

    Router::page_loader(
        "Tőzsér Éva - Admin Login",
        "Description",
        "login.php"
    );
} 
else {
    header("HTTP/1.0 404 Not Found");
    Router::page_loader("Page not found", "The requested page does not exist. The URL may contain a spelling mistake.", "404.php");
    exit();
}
