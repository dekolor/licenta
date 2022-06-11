<?php
namespace App\Controllers;

use App\Models\UserModel;

class UsersController extends BaseController
{
    public function index()
    {
        $usermodel = new UserModel();
        $userdata = $usermodel->findAll();

        $session = session();
        $data = [
            'username' => $session->get('name'),
            'users' => $usermodel->findAll(),
        ];

        echo view('header2');
        echo view('nav', $data);
        echo view('userlist');
        echo view('footer2');
    }
}