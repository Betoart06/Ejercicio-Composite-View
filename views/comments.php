<h2>Comentarios</h2>
<form method="post" action="?url=comments">
    <textarea name="comment" placeholder="Escribe tu comentario..." required></textarea>
    <br>
    <button type="submit">Enviar</button>
</form>
<ul>
    <?php
    $comments = require __DIR__ . '/../data/comments.php';
    foreach ($comments as $comment) {
        echo "<li>" . htmlspecialchars($comment) . "</li>";
    }
    ?>
</ul>

