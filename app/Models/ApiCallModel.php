<?php
namespace App\Models;
use CodeIgniter\Model;

class ApiCallModel extends Model {
    protected $table = 'apicalls';

    protected $allowedFields = [
        'source',
        'payload',
    ];
}