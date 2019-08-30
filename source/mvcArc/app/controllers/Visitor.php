<?php
class Visitor extends BaseController
{
    public function __construct()
    {
        if (isset($_SESSION['user_id']) && ($_SESSION['user_type'] == 'member')) {
            // $data = [
            //     'title' => 'WDA',
            // ];
            // $this->view('user/index', $data);
            redirect('user');
        }
    }

    public function index()
    {
        $data = [
            'title' => 'WDA',
        ];

        $this->view('visitor/index', $data);
    }

    public function contact()
    {
        $data = [
            'version' => '1.0.0'
        ];
        $this->view('visitor/contact', $data);
    }

    public function faq()
    {
        $data = [
            'version' => '1.0.0'
        ];
        $this->view('visitor/faq', $data);
    }

    public function tutorials()
    {
        $data = [
            'version' => '1.0.0'
        ];
        $this->view('visitor/tutorials', $data);
    }
}
