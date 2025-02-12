<?php
require_once 'templates/CompositeView.php';


$page = $_GET['url'] ?? 'gallery';
$viewPath = "views/{$page}.php";

$view = new CompositeView();

$view->addView('views/header.php', ['title' => ucfirst($page)]);
if (file_exists($viewPath)) {
    $view->addView($viewPath);
} else {
    http_response_code(404);
    $view->addView('views/gallery.php', ['title' => 'Página No Encontrada']);
}
$view->addView('views/footer.php');

$view->render();
