<?php
class Admin extends BaseController
{
    public function __construct()
    {
        if (!isset($_SESSION['user_id']) || ($_SESSION['user_type'] != 'admin')) {
            flash('access_denied', 'You do not have <b>Access rights</b>', 'alert alert-danger');
            redirect('user/login');
        } else {
            $this->adminModel = $this->model('AdminModel');
        }
    }

    public function index()
    {
        $users = $this->adminModel->getUserDetails();
        $data = [
            'test' => $users
        ];
        $this->view('admin/index', $data);
    }

    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->adminModel->deletePost($id)) {
                flash('delete_message', 'User Succesfully Deleted');
                redirect('admin');
            } else {
                flash('delete_message', 'User is not Deleted');
                redirect('admin');
                // die();
            }
        } else {
            redirect('posts');
        }
    }

    public function lecturer()
    {
        $data = [];
        $this->view('admin/lecturer', $data);
    }

    public function agent()
    {
        $data = [];
        $this->view('admin/agent', $data);
    }

    public function report()
    {
        $data = [];
        $this->view('admin/report', $data);
    }
}
