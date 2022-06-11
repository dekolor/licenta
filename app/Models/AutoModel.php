<?php
namespace App\Models;
use CodeIgniter\Model;

class AutoModel extends Model {
    protected $table = 'automatizari';

    protected $allowedFields = [
        'trigger_setting',
        'time_from',
        'time_to',
        'devices',
    ];
}