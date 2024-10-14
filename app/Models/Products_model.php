<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\Products_model;

class Products_model extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'product_id';
    protected $allowedFields = [
        'product_name', 
        'product_price', 
        'stock_quantity', 
        'date_created', 
        'date_updated'
    ];
}