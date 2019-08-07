<?php
class Pages extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = [
            'title' => 'WDA',
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
