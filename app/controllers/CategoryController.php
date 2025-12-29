<?php

class CategoryController extends Controller {

    public function index() {
        $categories = $this->model('Category')->all();
        $this->view('layout/header');
        $this->view('categories/index', compact('categories'));
        $this->view('layout/footer');
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model('Category')->create($_POST['name']);
            header("Location: " . BASE_URL . "/index.php?url=category/index");
            exit;
        }

        $this->view('layout/header');
        $this->view('categories/create');
        $this->view('layout/footer');
    }
}
