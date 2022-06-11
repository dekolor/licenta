<?php
namespace App\Controllers;
use App\Models\DeviceModel;
use CodeIgniter\Controller;
use App\Models\AutoModel;

class AutoController extends Controller
{
    public function index()
    {
        $automodel = new AutoModel();
        $session = session();
        $data = [
            'username' => $session->get('name'),
            'autos' => $automodel->findAll()
        ];
        echo view('header2');
        echo view('nav', $data);
        echo view('autolist', $data);
        echo view('footer2');
    }

    public function adauga($tip = null)
    {
        $automodel = new AutoModel();
        $devicemodel = new DeviceModel();
        $session = session();
        $data = [
            'username' => $session->get('name'),
            'autos' => $automodel->findAll(),
            'devices' => $devicemodel->findAll(),
        ];

        echo view('header2');
        echo view('nav', $data);

        switch ($tip) {
            case 'time':
                echo view('addauto_time', $data);
                break;
            case 'sunset':
                echo view('addauto_sunset', $data);
                break;
            case 'temp':
                echo view('addauto_temp', $data);
                break;
            case 'device':
                echo view('addauto_device', $data);
                break;
            default:
                echo view('addauto', $data);
        }

        echo view('footer2');
    }
}
