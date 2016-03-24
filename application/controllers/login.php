<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('login');
    }


    function __encrip_password($password)
    {
        return md5($password);
    }

    /**
     * check the username and the password with the database
     * @return void
     */
    function validate()
    {
        $this->load->model('user_model');
        $email = $this->input->post('email');
        $password = $this->__encrip_password($this->input->post('password'));
        $is_valid = $this->user_model->validate($email, $password);

        $role = $is_valid[0]['role'];

        if ($role == 1 && $is_valid) {
            $role = $is_valid[0]['role'];
            $user_id = $is_valid[0]['user_id'];
            $f_name = $is_valid[0]['f_name'];
            $photo = $is_valid[0]['photo'];
            //print_r($is_valid);
            $data = array(
                'email' => $email,
                'user_id' => $user_id,
                'is_logged_in' => true,
                'role' => $role,
                'f_name' => $f_name,
                'photo' => $photo,  
                'other_names'=>$other_names

            );
            $this->session->set_userdata($data);
            redirect(base_url().'index.php/profile');
        }

        else if ($role == 0 && $is_valid) {
            $role = $is_valid[0]['role'];
            $user_id = $is_valid[0]['user_id'];
            $f_name = $is_valid[0]['f_name'];
            $photo = $is_valid[0]['photo'];
            //print_r($is_valid);
            $data = array(
                'email' => $email,
                'user_id' => $user_id,
                'is_logged_in' => true,
                'role' => $role,
                'f_name' => $f_name,
                'photo' => $photo,
                'other_names'=>$other_names

            );
            $this->session->set_userdata($data);
            redirect(base_url().'index.php/housesearch');
        }
        else if ($role == -1 && $is_valid) {
            $role = $is_valid[0]['role'];
            $user_id = $is_valid[0]['user_id'];
            $f_name = $is_valid[0]['f_name'];
            $photo = $is_valid[0]['photo'];
            //print_r($is_valid);
            $data = array(
                'email' => $email,
                'user_id' => $user_id,
                'is_logged_in' => true,
                'role' => $role,
                'f_name' => $f_name,
                'photo' => $photo,
                'other_names'=>$other_names
            );
            $this->session->set_userdata($data);
            redirect(base_url().'index.php/users');
        }

        else // incorrect username or password
        {
            redirect(base_url());
            //$data['error_message'] = TRUE;
            //$this->load->view('login', $data);
        }
    }


    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */