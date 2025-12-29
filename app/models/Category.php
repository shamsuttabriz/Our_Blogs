<?php

class Category extends Model
{

    public function all()
    {
        return $this->db
            ->query("SELECT * FROM categories")
            ->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($name)
    {
        $stmt = $this->db->prepare(
            "INSERT INTO categories (name) VALUES (?)"
        );
        return $stmt->execute([$name]);
    }
}
