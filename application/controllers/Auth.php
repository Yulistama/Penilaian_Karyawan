<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
	public function __construct()
    {

    	parent :: __construct();

        $this->load->model('m_login');
    } 
	public function index()
	{
		$this->load->view('auth/login' );
		
	}
	public function process()
	{
		$post = $this->input->post(null, TRUE);

        if (isset($post['login']))
        {
            $query = $this->m_login->login($post);
		
		    if ($query->num_rows() > 0)
            {
                $row = $query->row();
                $params = array(
                    'id' => $row->id,
                    'role' => $row->role
                );

                if($params['role'] == 'atasan'){
                    $this->session->set_userdata($params);
                    redirect('atasan/dashboard');
                }else if($params['role'] == 'penilai'){
                    $this->session->set_userdata($params);
                    redirect('penilai/dashboard');
                }else if($params['role'] == 'pegawai'){
                    $this->session->set_userdata($params);
                    redirect('pegawai/dashboard');
                }else{
                    $this->session->set_flashdata('message',' <div class="alert alert-success" role="alert"> gagal login !!</div>');
                    redirect('auth');
                }
            }else {
                $this->session->set_flashdata('message',' <div class="alert alert-danger" role="alert">   Incorrect username or password  !!</div>');
                redirect('auth');
			}
		}

	}
    public function logout()
              {
                $this->session->set_flashdata('message',' <div class="alert alert-success" role="alert"> Account has been successfully logout !!</div>');
                $params = array('role' );
                $this->session->unset_userdata($params);
                redirect('auth');

              }
}

            

            



