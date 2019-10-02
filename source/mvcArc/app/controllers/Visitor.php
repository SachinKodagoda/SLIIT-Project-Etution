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
            'mailer_success' => ''
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

    public function mailer()
    {

        $data = [
            'mailer_success' => ''
        ];
        $this->view('visitor/mailer', $data);
    }

    public function success_mailer()
    {

        $data = [
            'mailer_success' => 'Successfully send'
        ];
        $this->view('visitor/index', $data);
    }

    public function fail_mailer()
    {
        $data = [
            'mailer_success' => 'Failed to send the email'
        ];
        $this->view('visitor/index', $data);
    }
}
