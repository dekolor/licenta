<?php
namespace App\Controllers;

use App\Models\DeviceModel;
use App\Models\ApiCallModel;
use App\Models\LogsModel;

class ApiController extends BaseController
{
    public function update()
    {
        $devicemodel = new DeviceModel();
        $currentdevice = $devicemodel->asArray()->where('deviceid', $this->request->getVar('deviceid'))->findAll();
        $currentdevice=$currentdevice[0];
        $logsmodel = new LogsModel();
        $data = [
            'device' => $currentdevice['name']
        ];
        $devicemodel->where('deviceid', $this->request->getVar('deviceid'))->set('status', $this->request->getVar('status'))->update();
        if($this->request->getVar('status')==1)
        {
            $data['action'] = "turnon";
            $data['message'] = "Device-ul \"" . $currentdevice['name'] . "\" a fost pornit.";
        } elseif($this->request->getVar('status')==0)
        {
            $data['action'] = "turnoff";
            $data['message'] = "Device-ul \"" . $currentdevice['name'] . "\" a fost oprit.";
        }
        print_r($data);
        $logsmodel->insert($data);
        print_r($this->request->getBody());
        $data = [];
    }

    public function call()
    {
        $apicallmodel = new ApiCallModel();

        if($this->request->getVar("payload")!='"pong"') {
            $apicallmodel->insert(['source' => $this->request->getIPAddress(), 'payload' => $this->request->getVar('payload')]);
        }

        return 'OK';
    }

    public function listcalls()
    {
        $apicallmodel = new ApiCallModel();
        $session = session();
        $data = [
            'username' => $session->get('name'),
            'apicalls' => $apicallmodel->orderBy('id', 'desc')->findAll(10)
        ];
        echo view('header2');
        echo view('nav', $data);
        echo view('listapicalls', $data);
        echo view('footer2');
    }
}