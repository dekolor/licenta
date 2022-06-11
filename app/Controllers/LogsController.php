<?php
namespace App\Controllers;

use App\Models\LogsModel;

class LogsController extends BaseController
{
    public function listlogs()
    {
        $logsmodel = new LogsModel();
        $session = session();
        $data = [
            'username' => $session->get('name'),
            'logs' => $logsmodel->orderBy('id', 'desc')->findAll(10)
        ];
        echo view('header2');
        echo view('nav', $data);
        echo view('listlogs', $data);
        echo view('footer2');
    }
}