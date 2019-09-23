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
        $users = $this->adminModel->get_users('admin');
        $user = $this->adminModel->get_a_user($_SESSION['user_id'], 'admin');
        $data = [
            'admins' => $users,
            'admin' => $user,
        ];
        $this->view('admin/index', $data);
    }

    public function index_file()
    {

        if (isset($_FILES["fileToUpload"]["name"])) {
            $target_dir = PUBROOT . "\\public\\img\\uploads\\";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $errorMsg = '';
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image (0 byte images)
            // following both ways can be used exif_imagetype is faster than getimagesize
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            // $passedval = exif_imagetype($_FILES["fileToUpload"]["tmp_name"]);
            // if($passedval == 1){
            //     // 1	IMAGETYPE_GIF
            //     // 2	IMAGETYPE_JPEG
            //     // 3	IMAGETYPE_PNG
            //     // 4	IMAGETYPE_SWF
            //     // 5	IMAGETYPE_PSD
            //     // 6	IMAGETYPE_BMP
            //     // 7	IMAGETYPE_TIFF_II (intel byte order)
            //     // 8	IMAGETYPE_TIFF_MM (motorola byte order)
            //     // 9	IMAGETYPE_JPC
            //     // 10	IMAGETYPE_JP2
            //     // 11	IMAGETYPE_JPX
            //     // 12	IMAGETYPE_JB2
            //     // 13	IMAGETYPE_SWC
            //     // 14	IMAGETYPE_IFF
            //     // 15	IMAGETYPE_WBMP
            //     // 16	IMAGETYPE_XBM
            //     // 17	IMAGETYPE_ICO
            //     // 18	IMAGETYPE_WEBP
            // }
            if ($check !== false) {
                $uploadOk = 1;
            } else {
                $errorMsg = $errorMsg . "File is not an image." . "<br/> ";
                $uploadOk = 0;
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                $errorMsg = $errorMsg . "Sorry, file already exists." . "<br/> ";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                $errorMsg = $errorMsg . "Sorry, your file is too large." . "<br/> ";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
            ) {
                $errorMsg = $errorMsg . "Sorry, only JPG, JPEG, PNG & GIF files are allowed." . "<br/> ";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                flash('update_success', $errorMsg);
                $this->index();

                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $errorMsg = $errorMsg . "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded." . "<br/> ";

                    if ($this->adminModel->update_a_user_img_path($_SESSION['user_id'], basename($_FILES["fileToUpload"]["name"]))) {
                        $_SESSION['user_img'] = basename($_FILES["fileToUpload"]["name"]);
                        flash('update_success', $errorMsg);
                        $this->index();
                    } else {
                        $errorMsg = $errorMsg . "Sorry, Something went wrong" . "<br/> ";
                        flash('update_success', $errorMsg);
                        $this->index();
                    }
                } else {
                    $errorMsg = $errorMsg . "Sorry, Something went wrong" . "<br/> ";
                    flash('update_success', $errorMsg);
                    $this->index();
                }
            }
        } else {
            $this->index();
        }
    }
    // ONLINE STATUS CHANGER ------------------------------------------------------------------------
    public function status_change()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if($this->adminModel->update_a_user_onlineStatus($_SESSION['user_id'],$_POST['onlineStatus'])){
                $this->index();
            }else{
                $this->index();
            }
        }
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
                // $this->member();
            } else {
                flash('delete_message', 'User is not Deleted');
                redirect('admin/member');
                // $this->member();
            }
        } else {
            redirect('admin/member');
            // $this->member();
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
                    'country' => trim($_POST['country']),
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
                    'country' => $users->country,
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
        $newStatus = $user->active_status == 1 ? 0 : 1;
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
        $newStatus = $user->active_status == 1 ? 0 : 1;
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
        $newStatus = $user->active_status == 1 ? 0 : 1;
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
