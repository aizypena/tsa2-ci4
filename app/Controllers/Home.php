<?php

namespace App\Controllers;

class Home extends BaseController
{
    function index() {
        $data ['title'] = 'Products Management - Landing Page';
        return view('include/header', $data)
        .view('include/navbar')
        .view('landing_page')
        .view('include/footer');
    }

    function about() {
        $data ['title'] = 'About Us';
        return view('include/header', $data)
        .view('include/navbar')
        .view('about')
        .view('include/footer');
    }

    function contact() {
        $data ['title'] = 'Contact Us';
        return view('include/header', $data)
        .view('include/navbar')
        .view('contact_us')
        .view('include/footer');
    }

    function login() {
        if($this->request->is('POST')) {
            $usermodel = model('Users_model');

            //retrieve data from
            $logindata = $this->request->getPost([
                'email',
                'password'
            ]);

            //check the db for account credential
            $user = $usermodel->where('username', $logindata['username'])->where('password', $logindata['password'])->first();

            //check if user account found
            if(!$user) {
            } else {
                return redirect()->to('dashboard');
            }
        }

        //load the data
        $data ['title'] = 'Login Account';
        return view('include/header', $data)
        .view('login');
    }

    function signup() {
        $data ['title'] = 'Creat an Account';
        return view('include/header', $data)
        .view('signup');
    }
}
