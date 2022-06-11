<?php
namespace App\Controllers;

class LogoutController extends BaseController
{
    public function index()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}