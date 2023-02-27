<?php
$page = "home";

if (isset($_GET["page"])) {
    $page = $_GET["page"];
};

$pages = array(
    "home" => array(
        "model" => "HomeModel",
        "view" => "HomeView",
        "controller" => "HomeController"
    ),
    "form" => array(
        "model" => "formModel",
        "view" => "formView",
        "controller" => "formController"
    )
);

$find = false;
foreach ($pages as $key => $value) {
    if ($page === $key) {
        $find = true;

        $model = $value["model"];
        $view = $value["view"];
        $controller = $value["controller"];
    }
}

// echo "nous allons générer la page {$page}";
require("../config/index.php");

$dsn = "mysql:host=" . DB_HOSTNAME . ";dbname=" . DB_DATABASE;
$db = new PDO($dsn, DB_USERNAME, DB_PASSWORD);

if ($find) {
    require(DIR_MODEL . $page . ".php");
    require(DIR_CONTROLLER . $page . ".php");
    require(DIR_VIEW . $page . ".php");

    $pageModel = new $model($db);
    $pageController = new $controller($pageModel);
    $pageView = new $view($pageController);

    $pageView->render();
} else {
    echo "Error 404";
}
