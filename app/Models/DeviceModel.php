<?php
namespace App\Models;
use CodeIgniter\Model;

class DeviceModel extends Model {
    protected $table = 'devices';

    protected $allowedFields = [
        'deviceid',
        'name',
        'type',
        'ip',
        'status',
        'brand',
        'brandlogo',
    ];
}