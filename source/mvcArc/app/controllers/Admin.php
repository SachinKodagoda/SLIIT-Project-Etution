<?php
class Admin extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION['user_id']) || ($_SESSION['user_type'] != 'admin')) {
            flash('access_denied', 'You do not have <b>Access rights</b>' , 'alert alert-danger');
            redirect('users/login');
        }
    }

    public function index()
    {
        $data = [
            'version' => '1.0.0'
        ];
        $this->view('admin/index', $data);
    }
}
