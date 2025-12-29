<h1>Categories</h1>

<a href="<?= BASE_URL ?>/index.php?url=category/create">Add Category</a>

<ul>
<?php foreach ($categories as $cat): ?>
    <li><?= $cat['name'] ?></li>
<?php endforeach; ?>
</ul>
