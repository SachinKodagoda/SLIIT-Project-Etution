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

    // ADMIN PAGE -----------------------------------------------
    public function index()
    {
        $data = [];
        $this->view('admin/index', $data);
    }

    // MEMBER PAGE------------------------------------------------------------------------
    public function member()
    {
        $users = $this->adminModel->get_users('member');
        $data = [
            'members' => $users
        ];
        $this->view('admin/member', $data);
    }

    public function member_delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->adminModel->delete_a_user($id)) {
                flash('delete_message', 'User Succesfully Deleted');
                redirect('admin/member');
            } else {
                flash('delete_message', 'User is not Deleted');
                redirect('admin/member');
            }
        } else {
            redirect('admin/member');
        }
    }

    public function member_edit($id)
    {
        $users = $this->adminModel->get_a_user($id, 'member');
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

                    if ($this->adminModel->update_a_user($data)) {
                        flash('update_success', 'Successfully Member Updated');
                        $this->member();
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

    public function member_change_state($id)
    {
        $user = $this->adminModel->get_a_user($id, 'member');
        $newStatus = $user->status == 1 ? 0 : 1;
        if ($this->adminModel->activate_a_user($id, $newStatus)) {
            flash('update_success', 'Successfully Member Status Changed');
            $this->member();
        } else {
            die('Something went wrong');
        }
    }
    // LECTURER PAGE------------------------------------------------------------------------

    public function lecturer()
    {
        $lecturers = $this->adminModel->get_users('lecturer');
        $data = [
            'lecturers' => $lecturers
        ];
        $this->view('admin/lecturer', $data);
    }
    public function lecturer_delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->adminModel->delete_a_user($id)) {
                flash('delete_message', 'User Succesfully Deleted');
                redirect('admin/lecturer');
            } else {
                flash('delete_message', 'User is not Deleted');
                redirect('admin/lecturer');
            }
        } else {
            redirect('admin/lecturer');
        }
    }
    public function lecturer_change_state($id)
    {
        $user = $this->adminModel->get_a_user($id, 'lecturer');
        $newStatus = $user->status == 1 ? 0 : 1;
        if ($this->adminModel->activate_a_user($id, $newStatus)) {
            flash('update_success', 'Successfully Lecturer Status Changed');
            $this->lecturer();
        } else {
            die('Something went wrong');
        }
    }
    // AGENT PAGE------------------------------------------------------------------------
    public function agent()
    {
        $users = $this->adminModel->get_users('customer_agent');
        $data = [
            'agent' => $users
        ];
        $this->view('admin/agent', $data);
    }
    public function agent_delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->adminModel->delete_a_user($id)) {
                flash('delete_message', 'User Succesfully Deleted');
                redirect('admin/agent');
            } else {
                flash('delete_message', 'User is not Deleted');
                redirect('admin/agent');
            }
        } else {
            redirect('admin/agent');
        }
    }

    public function agent_change_state($id)
    {
        $user = $this->adminModel->get_a_user($id, 'customer_agent');
        $newStatus = $user->status == 1 ? 0 : 1;
        if ($this->adminModel->activate_a_user($id, $newStatus)) {
            flash('update_success', 'Successfully Agent Status Changed');
            $this->lecturer();
        } else {
            die('Something went wrong');
        }
    }

    // REPORT PAGE------------------------------------------------------------------------
    public function report()
    {
        $users = $this->adminModel->get_users('member');
        $data = [
            'data' => $users
        ];
        $this->view('admin/report', $data);
    }
}
