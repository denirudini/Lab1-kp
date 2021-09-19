<?php
 
namespace App\Controllers;
 
use App\Models\UserModel;

class Register extends BaseController
{
    /**
	 * Instance of the main Request object.
	 *
	 * @var HTTP\IncomingRequest
	 */
	protected $request;

    public function index()
    {
        return view('register');
        
    }

    public function process(){
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|min_length[4]|max_length[20]|is_unique[tb_users.nama]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 20 Karakter',
                    'is_unique' => 'Username sudah digunakan sebelumnya'
                ]
            ],
            'no_hp' => [
                'rules' => 'required|min_length[4]|max_length[20]|is_unique[tb_users.no_hp]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 20 Karakter',
                    'is_unique' => 'Username sudah digunakan sebelumnya'
                ]
            ],
            'email' => [
                'rules' => 'required|min_length[4]|max_length[100]|is_unique[tb_users.email]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 20 Karakter',
                    'is_unique' => 'Username sudah digunakan sebelumnya'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[4]|max_length[50]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }


        $tb_users = new UserModel();
        $tb_users->insert([
            'nama' => $_POST['nama'],
            'no_hp' => $_POST['no_hp'],
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'], PASSWORD_BCRYPT)
        ]);
        return redirect()->to('/login');
        
    }

}

