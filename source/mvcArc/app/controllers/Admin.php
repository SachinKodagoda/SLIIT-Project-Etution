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
        $data = [];
        $this->view('admin/index', $data);
    }

    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->adminModel->deletePost($id)) {
                flash('delete_message', 'User Succesfully Deleted');
                redirect('admin/member');
            } else {
                flash('delete_message', 'User is not Deleted');
                redirect('admin/member');
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

    public function member_edit($id)
    {
        $users = $this->adminModel->getAuser($id);
        // CHECK THE POST METHOD OR GET METHOD
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            // CHECK WHETHER THE REQUEST IS SENT FROM THE EDIT FORM
            if (isset($_POST['name'])) {

                $data = [
                    'name' => trim($_POST['name']),
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'type' => trim($_POST['type']),
                    'member_id' => $id,
                    'member_name' => $users->name,
                    'member_email' => $users->email,
                    'member_userType' => $users->userType,
                    'member_password' => '',
                    'member_name_err' => '',
                    'member_email_err' => '',
                    'member_password_err' => '',
                ];

                if (empty($data['email'])) {
                    $data['member_email_err'] = 'email cannot be a empty value';
                }

                if (empty($data['name'])) {
                    $data['member_name_err'] = 'Name cannot be a empty value';
                }

                if (empty($data['member_email_err']) && empty($data['member_name_err'])) {
                    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                    if ($this->adminModel->updateAuser($data)) {
                        // flash('update_success', 'Successfully Registered');
                        $this ->member();
                    } else {
                        die('Something went wrong');
                    }
                } else {
                    $this->view('admin/member_edit', $data);
                }
            } else {
                $data = [
                    'member_id' => $id,
                    'member_name' => $users->name,
                    'member_email' => $users->email,
                    'member_userType' => $users->userType,
                    'member_password' => '',
                    'member_name_err' => '',
                    'member_email_err' => '',
                    'member_password_err' => '',
                ];
                $this->view('admin/member_edit', $data);
            }
        }
    }

    public function member()
    {
        $users = $this->adminModel->getUserDetails();
        $data = [
            'test' => $users
        ];
        $this->view('admin/member', $data);
    }
}
