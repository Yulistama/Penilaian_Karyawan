<?php

class MasterUser extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('atasan/m_master_user');
	}
        public function index()
        {
            $data['user'] = $this->m_master_user->users()->result();
            
            $title['title'] = 'Web Penilaian Kinerja Karyawan';
            $this->load->view('template/v_header' , $title);
            $this->load->view('template/v_sidebar');
            $this->load->view('pages/atasan/master_user/index', $data);
            $this->load->view('template/v_footer');
        }

        public function add_user()
        {
            $data['role'] = $this->m_master_user->roles()->result();
            $data['jabatan'] = $this->m_master_user->jabatan()->result();
            $data['golongan'] = $this->m_master_user->golongan()->result();

            $title['title'] = 'Web Penilaian Kinerja Karyawan';
            $this->load->view('template/v_header' , $title);
            $this->load->view('template/v_sidebar');
            $this->load->view('pages/atasan/master_user/tambah_user', $data);
            $this->load->view('template/v_footer');
        }

        public function v_add_user()
        {
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $password = $this->input->post('pass');
            $nip = $this->input->post('nip');
            $jabatan = $this->input->post('jabatan');
            $golongan = $this->input->post('golongan');
            $no_hp = $this->input->post('no_hp');
            $email = $this->input->post('email');
            $role = $this->input->post('golongan');

            $data = array(
                'name' => $nama,
                'username' => $username,
                'password' => sha1($password),
                'nip' => $nip,
                'id_jabatan' => $jabatan,
                'id_golongan' => $golongan,
                'no_hp' => $no_hp,
                'email' => $email,
                'role' => $role,
                'is_active' => 1,
            );

            $this->m_master_user->input_user($data,'users');
		    redirect('atasan/masteruser');
        }

        public function edit_user($id)
        {
            $where = array('id' => $id);
		    $data['user'] = $this->m_master_user->user_by_id($where,'id')->result();
            $data['role'] = $this->m_master_user->roles()->result();
            $data['jabatan'] = $this->m_master_user->jabatan()->result();
            $data['golongan'] = $this->m_master_user->golongan()->result();
            $data['id'] = $id;

            $title['title'] = 'Web Penilaian Kinerja Karyawan';
            $this->load->view('template/v_header' , $title);
            $this->load->view('template/v_sidebar', $data);
            $this->load->view('pages/atasan/master_user/edit_user', $data);
            $this->load->view('template/v_footer');
        }

        public function update()
        {
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $username = $this->input->post('username');
            $password = $this->input->post('pass');
            $nip = $this->input->post('nip');
            $jabatan = $this->input->post('jabatan');
            $golongan = $this->input->post('golongan');
            $no_hp = $this->input->post('no_hp');
            $email = $this->input->post('email');
            $role = $this->input->post('golongan');

            if($password == null)
            {
                $data = array(
                    'name' => $nama,
                    'username' => $username,
                    'nip' => $nip,
                    'id_jabatan' => $jabatan,
                    'id_golongan' => $golongan,
                    'no_hp' => $no_hp,
                    'email' => $email,
                    'role' => $role,
                    'is_active' => 1,
                );
                
            }else{

                $data = array(
                    'name' => $nama,
                    'username' => $username,
                    'password' => sha1($password),
                    'nip' => $nip,
                    'id_jabatan' => $jabatan,
                    'id_golongan' => $golongan,
                    'no_hp' => $no_hp,
                    'email' => $email,
                    'role' => $role,
                    'is_active' => 1,
                );
            }

            $where = array(
                'id' => $id
            );

            $this->m_master_user->update_user($where,$data,'users');
		    redirect('atasan/masteruser');
        }

        function hapus($id){
            $where = array('id' => $id);
            $this->m_master_user->hapus_user($where,'users');
            redirect('atasan/masteruser');
        }
}