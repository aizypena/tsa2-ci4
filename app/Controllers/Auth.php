<?php 
namespace App\Controllers;

use App\Models\Users_model;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        $session = session();
        $usermodel = new Users_model();

        // get the input values
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // fetch user data from database
        $user = $usermodel->where('email', $email)->first();

        if ($user) {
            if (password_verify($password, $user['password'])) { 
                $session->set([
                    'user_id' => $user['user_id'],
                    'username' => $user['username'],
                    'logged_in' => true,
                ]);
                return redirect()->to('/dashboard');
            } else {
                return redirect()->back()->with('error', 'Invalid password');
            }
        } else {
            return redirect()->back()->with('error', 'User not found');
        }
    }

    public function signup() {
        $usermodel = new Users_model();

        $data = [
            'username' => $this->request->getPost('username'),
            'fullname' => $this->request->getPost('fullname'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];

        $usermodel->save($data);
        return redirect()->to('/login');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
