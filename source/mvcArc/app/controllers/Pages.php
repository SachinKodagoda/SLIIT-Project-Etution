<?php
class Pages extends Controller
{
    public function __construct()
    {
        $this -> postModel = $this -> model('Post');
    }

    public function index()
    {
        $posts = $this -> postModel -> getPosts();
        $data = [
            'title' => 'WDA',
            'posts' => $posts
        ];

        $this->view('pages/index', $data);
    }

    public function about()
    {
        $data = [
            'version' => '1.0.0'
        ];
        $this->view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'version' => '1.0.0'
        ];
        $this->view('pages/contact', $data);
    }
}
