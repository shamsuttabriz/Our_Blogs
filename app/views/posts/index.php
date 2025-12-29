<h1>All Posts</h1>

<?php foreach ($posts as $post): ?>
<div class="card">
    <h2><?= htmlspecialchars($post['title']) ?></h2>
    <small>Category: <?= $post['category'] ?></small>
    <p><?= nl2br(htmlspecialchars($post['content'])) ?></p>

    <a href="<?= BASE_URL ?>/index.php?url=post/edit/<?= $post['id'] ?>">Edit</a>
    <a class="danger"
       href="<?= BASE_URL ?>/index.php?url=post/delete/<?= $post['id'] ?>">
       Delete
    </a>
</div>
<?php endforeach; ?>
