<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        $session = session();
        $data = [
            'username' => $session->get('name')
        ];
        echo view('header2');
        echo view('nav2', $data);
        echo view('profile', $data);
        echo view('footer2');
    }
}   