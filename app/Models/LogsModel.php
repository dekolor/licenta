<?php
namespace App\Models;
use CodeIgniter\Model;

class LogsModel extends Model {
    protected $table = 'logs';

    protected $allowedFields = [
        'action',
        'device',
        'message',
    ];
}