<?php

namespace App\Controllers;
use App\Models\DeviceModel;
use App\Models\LogsModel;

class LicentaHome extends BaseController
{
	public function index()
	{
	    $devicemodel = new DeviceModel();
	    $logsmodel = new LogsModel();
	    $tempcurenta = json_decode(file_get_contents("https://api.openweathermap.org/data/2.5/weather?lat=44.4361414&lon=26.1027202&appid=159c84b4542588917ba1849a924eaff2&units=metric"), TRUE);
	    $session = session();
        $data = [
            'username' => $session->get('name'),
            'onlinedevices' => count($devicemodel->asArray()->where('status', 1)->findAll()),
            'temperatura' => $tempcurenta,
            'logs' => $logsmodel->orderBy('id', 'desc')->findAll(5),
        ];
        echo view('header2');
        echo view('nav', $data);
        echo view('homepage', $data);
        echo view('footer2');
        //return redirect()->to('/profile');
	}
}