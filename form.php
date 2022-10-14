<?php

class form extends CI_Controller {

        public function index()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

                $this->form_validation->set_rules('nik', 'Nik', 'required|min_length[16]|numeric', [
                        'required' => 'NIK harus diisi', 'min_length' => 'NIK Harus berisi 16 digit angka', 'numeric' => 'NIK harus berupa 16 digit angka']);
                $this->form_validation->set_rules('nama', 'Nama', 'required|min_length[3]|alpha', [
                        'required' => 'Nama harus diisi', 'min_length' => 'Nama terlalu pendek', 'alpha' => 'Nama tidak boleh mengandung angka']);
                $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
                        'required' => 'Alamat harus diisi']);
                $this->form_validation->set_rules('kel[]', 'Kel', 'required',[
                        'required' => 'Jenis kelamin harus diisi']);
                $this->form_validation->set_rules('no_hp', 'No_hp', 'required|min_length[6]|numeric',[
                        'required' => 'Nomer Hp harus diisi', 'min_length' => 'Nomer hp terlalu pendek', 'numeric' => 'Nomer hp harus berupa angka']);

                if ($this->form_validation->run() == FALSE)
                {$this->load->view('viewdata');}
                else {$data = [
                        'nik' => $this->input->post('nik'),
                        'nama' => $this->input->post('nama'),
                        'alamat' => $this->input->post('alamat'),
                        'kel' => $this->input->post('kel'),
                        'no_hp' => $this->input->post('no_hp')];
                        $this->load->view('formberhasil',$data);
                }
        }
}