<?php
namespace App\Controllers;
use App\Models\AutoModel;
use App\Models\DeviceModel;
use App\Models\LogsModel;
use CodeIgniter\Controller;

class CronController extends Controller
{
    public function run()
    {
        // rulam toate automatizarile
        $automodel = new AutoModel();
        $autos = $automodel->findAll();
        foreach ($autos as $auto)
        {
            if($auto['trigger_setting']=="time") {
                $time_trigger = date('H:i', strtotime($auto['time_trigger']));
                $devices = json_decode($auto['devices'], TRUE);
                if($auto['zilnic']) {
                    //ruleaza zilnic, verificam doar ora
                    if($time_trigger == date('H:i')) {
                        //run auto
                        foreach($devices as $device) {
                            file_get_contents('https://aws.dekolor.ro:8443/set/' . $device['deviceid'] . '/' . $device['setting']);
                        }
                    }
                }
            }
            if($auto['trigger_setting']=="sunset") {
                //todo
            }
            if($auto['trigger_setting']=="sunrise") {
                //todo
            }
            if($auto['trigger_setting']=="temperature") {
                //todo
            }
            if($auto['trigger_setting']=="device") {
                //todo
            }
        }
    }
}