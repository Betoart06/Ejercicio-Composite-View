<?php
$images = require __DIR__ . '/../data/images.php';
$current = $_GET['img'] ?? 0;
$current = max(0, min($current, count($images) - 1));

$image = $images[$current];
?>

<div class="gallery-container">
    <h2><?= htmlspecialchars($image['title']) ?></h2>
    <div class="image-box">
        <img src="<?= htmlspecialchars($image['src']) ?>" alt="<?= htmlspecialchars($image['title']) ?>">
        <br>
        <button onclick="alert('¡Te gusta esta imagen!')">❤️ Me Gusta</button>
    </div>
    <div class="nav-buttons">
        <?php if ($current > 0): ?>
            <a href="?url=gallery&img=<?= $current - 1 ?>">⬅ Anterior</a>
        <?php endif; ?>
        <?php if ($current < count($images) - 1): ?>
            <a href="?url=gallery&img=<?= $current + 1 ?>">Siguiente ➡</a>
        <?php endif; ?>
    </div>
</div>
