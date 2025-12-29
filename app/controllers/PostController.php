<?php

class PostController extends Controller
{

    public function index()
    {
        $posts = $this->model('Post')->all();
        $this->view('layout/header');
        $this->view('posts/index', compact('posts'));
        $this->view('layout/footer');
    }

    public function create()
    {
        $categoryModel = $this->model('Category');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model('Post')->create(
                $_POST['title'],
                $_POST['content'],
                $_POST['category_id']
            );
            header("Location: " . BASE_URL . "/index.php");
            exit;
        }

        $categories = $categoryModel->all();
        $this->view('layout/header');
        $this->view('posts/create', compact('categories'));
        $this->view('layout/footer');
    }

    public function edit($id)
    {
        $postModel = $this->model('Post');
        $categoryModel = $this->model('Category');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $postModel->update(
                $id,
                $_POST['title'],
                $_POST['content'],
                $_POST['category_id']
            );
            header("Location: " . BASE_URL . "/index.php");
            exit;
        }

        $post = $postModel->find($id);
        $categories = $categoryModel->all();

        $this->view('layout/header');
        $this->view('posts/edit', compact('post', 'categories'));
        $this->view('layout/footer');
    }

    public function delete($id)
    {
        $this->model('Post')->delete($id);
        header("Location: " . BASE_URL . "/index.php");
        exit;
    }
}
