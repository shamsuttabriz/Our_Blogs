<h1>Create Post</h1>

<form method="POST">
    <input name="title" placeholder="Title" required>
    <textarea name="content" placeholder="Content" required></textarea>

    <select name="category_id">
        <?php foreach ($categories as $cat): ?>
            <option value="<?= $cat['id'] ?>">
                <?= $cat['name'] ?>
            </option>
        <?php endforeach; ?>
    </select>

    <button>Create</button>
</form>
