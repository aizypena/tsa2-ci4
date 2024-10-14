<?php
namespace App\Models;

use CodeIgniter\Model;
use App\Models\Users_model;

class Users_model extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'username', 
        'fullname', 
        'email', 
        'password', 
        'date_created'
    ];
}
?>