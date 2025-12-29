<h1>Edit Post</h1>

<form method="POST">
    <input name="title" value="<?= $post['title'] ?>">
    <textarea name="content"><?= $post['content'] ?></textarea>

    <select name="category_id">
        <?php foreach ($categories as $cat): ?>
            <option value="<?= $cat['id'] ?>"
                <?= $post['category_id'] == $cat['id'] ? 'selected' : '' ?>>
                <?= $cat['name'] ?>
            </option>
        <?php endforeach; ?>
    </select>

    <button>Update</button>
</form>
