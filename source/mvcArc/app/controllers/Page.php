<?php
class Page extends BaseController
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = [
            'title' => 'WDA',
        ];

        $this->view('page/index', $data);
    }

    public function contact()
    {
        $data = [
            'version' => '1.0.0'
        ];
        $this->view('page/contact', $data);
    }

    public function faq()
    {
        $data = [
            'version' => '1.0.0'
        ];
        $this->view('page/faq', $data);
    }

    public function tutorials()
    {
        $data = [
            'version' => '1.0.0'
        ];
        $this->view('page/tutorials', $data);
    }
}
