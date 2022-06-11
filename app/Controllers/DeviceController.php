<?php
namespace App\Controllers;

use App\Models\DeviceModel;

class DeviceController extends BaseController
{
    public function index()
    {
        $devicemodel = new DeviceModel();
        $devicedata = $devicemodel->findAll();

        $session = session();
        $data = [
            'username' => $session->get('name'),
            'devices' => $devicedata,
        ];

        echo view('header2');
        echo view('nav', $data);
        echo view('devicelist');
        echo view('footer2');
    }

    public function tvlist()
    {
        $devicemodel = new DeviceModel();
        $devicedata = $devicemodel->where('type', 'tv')->findAll();

        $session = session();
        $data = [
            'username' => $session->get('name'),
            'devices' => $devicedata,
        ];

        echo view('header2');
        echo view('nav', $data);
        echo view('tvlist');
        echo view('footer2');
    }

    public function listaprize()
    {
        $devicemodel = new DeviceModel();
        $devicedata = $devicemodel->where('type', 'priza')->findAll();

        $session = session();
        $data = [
            'username' => $session->get('name'),
            'devices' => $devicedata,
        ];

        echo view('header2');
        echo view('nav', $data);
        echo view('listaprize');
        echo view('footer2');
    }

    public function listalumini()
    {
        $devicemodel = new DeviceModel();
        $devicedata = $devicemodel->where('type', 'lumini')->findAll();

        $session = session();
        $data = [
            'username' => $session->get('name'),
            'devices' => $devicedata,
        ];

        echo view('header2');
        echo view('nav', $data);
        echo view('listalumini');
        echo view('footer2');
    }

    public function listaflori()
    {
        $devicemodel = new DeviceModel();
        $devicedata = $devicemodel->where('type', 'flori')->findAll();

        $session = session();
        $data = [
            'username' => $session->get('name'),
            'devices' => $devicedata,
        ];

        echo view('header2');
        echo view('nav', $data);
        echo view('listaflori');
        echo view('footer2');
    }

    public function toggle($device)
    {
        $session = session();

        $devicemodel = new DeviceModel();
        $devicedata = $devicemodel->where('deviceid', $device)->findAll()[0];

        if($session->get('email')=="stefan@dekolor.ro") {
            if($devicedata['source']=="ewelink") {
                $response = json_decode(file_get_contents("https://aws.dekolor.ro:8443/toggle/" . $device));
                sleep(1);
            }
        }

        return redirect()->to('/devices');
    }
}