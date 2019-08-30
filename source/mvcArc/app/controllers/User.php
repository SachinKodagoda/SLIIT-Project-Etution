<?php
class User extends BaseController
{
    public function __construct()
    {
        $this->userModel = $this->model('UsersModel');
    }



    public function isAuthorized($view, $data)
    {
        if (!isset($_SESSION['user_id']) || !(($_SESSION['user_type'] == 'member') || ($_SESSION['user_type'] == 'admin'))) {
            flash('access_denied', 'You do not have <b>Access rights</b>', 'alert alert-danger');
            redirect('user/login');
        } else {
            $this->view($view, $data);
        }
    }

    public function index()
    {

        $data = [
            'title' => 'WDA',
        ];
        $this->isAuthorized('user/index', $data);
    }


    public function contact()
    {
        $data = [
            'title' => 'WDA',
        ];
        $this->isAuthorized('user/contact', $data);
    }

    public function faq()
    {
        $data = [
            'title' => 'WDA',
        ];
        $this->isAuthorized('user/faq', $data);
    }

    public function tutorials()
    {
        $data = [
            'title' => 'WDA',
        ];
        $this->isAuthorized('user/tutorials', $data);
    }



    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];

            if (empty($data['email'])) {
                $data['email_err'] = 'Pleae enter email';
            } else {

                if ($this->userModel->findUserByEmail($data['email'])) {
                    $data['email_err'] = 'Email is already taken';
                }
            }

            if (empty($data['name'])) {
                $data['name_err'] = 'Pleae enter name';
            }

            if (empty($data['password'])) {
                $data['password_err'] = 'Pleae enter password';
            } elseif (strlen($data['password']) < 6) {
                $data['password_err'] = 'Password must be at least 6 characters';
            }

            if (empty($data['confirm_password'])) {
                $data['confirm_password_err'] = 'Pleae confirm password';
            } else {
                if ($data['password'] != $data['confirm_password']) {
                    $data['confirm_password_err'] = 'Passwords do not match';
                }
            }

            if (empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                if ($this->userModel->register($data)) {
                    flash('register_success', 'You are registered and can log in');
                    redirect('user/login');
                } else {
                    die('Something went wrong');
                }
            } else {
                $this->view('user/register', $data);
            }
        } else {
            $data = [
                'name' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];

            $this->view('user/register', $data);
        }
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => '',
            ];

            if (empty($data['email'])) {
                $data['email_err'] = 'Pleae enter email';
            }

            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter password';
            }

            if ($this->userModel->findUserByEmail($data['email'])) { } else {
                $data['email_err'] = 'No user found';
            }

            if (empty($data['email_err']) && empty($data['password_err'])) {
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);

                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['password_err'] = 'Password incorrect';

                    $this->view('user/login', $data);
                }
            } else {
                $this->view('user/login', $data);
            }
        } else {
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
            ];

            $this->view('user/login', $data);
        }
    }

    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_email'] = $user->email;
        $_SESSION['user_name'] = $user->name;
        $_SESSION['user_type'] = $user->userType;
        switch ($user->userType) {
            case 'member':
                redirect('user/index');
                break;
            case 'admin':
                redirect('admin');
                break;
            case 'lecturer':
                redirect('user/index');
                break;
            case 'customer_agent':
                redirect('user/index');
                break;
            case 'advertiser_agent':
                redirect('user/index');
                break;
            case 'visitor':
                redirect('user/index');
                break;
            case 'developer':
                redirect('user/index');
                break;
            default:
                redirect('user/index');
                break;
        }
    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        unset($_SESSION['user_type']);
        session_destroy();
        redirect('user/login');
    }

    public function isLoggedIn()
    {
        if (isset($_SESSION['user_id'])) {
            return true;
        } else {
            return false;
        }
    }
}
