<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "Galería" ?></title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin: 0; padding: 20px; }
        nav { background: #007BFF; padding: 10px; }
        nav a { color: white; text-decoration: none; margin: 0 15px; }
        .gallery-container { display: flex; flex-direction: column; align-items: center; }
        .image-box { margin: 20px; padding: 10px; border: 2px solid #ddd; border-radius: 8px; }
        img { max-width: 300px; border-radius: 8px; }
        button { background: #28a745; color: white; padding: 10px; border: none; cursor: pointer; }
        .nav-buttons { margin-top: 10px; }
        .nav-buttons a { margin: 0 10px; padding: 10px; background: #007BFF; color: white; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
<nav>
    <a href="?url=gallery">🏠 Galería</a>
    <a href="?url=comments">💬 Comentarios</a>
</nav>
