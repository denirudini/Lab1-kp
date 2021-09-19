<?php

namespace App\Controllers;

class Login extends BaseController
{
    /**
	 * Instance of the main Request object.
	 *
	 * @var HTTP\IncomingRequest
	 */
	protected $request;

    public function index()
    {
        return view('login');
    }
 
    public function process()
    {
        // $users = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        // $dataUser = $users->where([
        //     'username' => $username,
        // ])->first();
        // if ($dataUser) {
        //     if (password_verify($password, $dataUser->password)) {
        //         session()->set([
        //             'username' => $dataUser->username,
        //             'name' => $dataUser->name,
        //             'logged_in' => TRUE
        //         ]);
        //         return redirect()->to(base_url('home'));
        //     } else {
        //         session()->setFlashdata('error', 'Username & Password Salah');
        //         return redirect()->back();
        //     }
        // } else {
        //     session()->setFlashdata('error', 'Username & Password Salah');
        //     return redirect()->back();
        // }
    }
}
