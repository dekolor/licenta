<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class SceneController extends Controller
{
    public function index()
    {
        $session = session();
        $data = [
            'username' => $session->get('name')
        ];
        echo view('header2');
        echo view('nav', $data);
        echo view('scenelist', $data);
        echo view('footer2');
    }
}