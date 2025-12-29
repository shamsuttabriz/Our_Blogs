<?php

class Post extends Model
{

    public function all()
    {
        $sql = "SELECT posts.*, categories.name AS category
                FROM posts
                LEFT JOIN categories ON posts.category_id = categories.id
                ORDER BY posts.id DESC";
        return $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($title, $content, $category_id)
    {
        $stmt = $this->db->prepare(
            "INSERT INTO posts (title, content, category_id) VALUES (?, ?, ?)"
        );
        return $stmt->execute([$title, $content, $category_id]);
    }

    public function find($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM posts WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $title, $content, $category_id)
    {
        $stmt = $this->db->prepare(
            "UPDATE posts SET title=?, content=?, category_id=? WHERE id=?"
        );
        return $stmt->execute([$title, $content, $category_id, $id]);
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM posts WHERE id=?");
        return $stmt->execute([$id]);
    }
}
