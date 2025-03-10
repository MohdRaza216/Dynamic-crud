<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table      = 'orders';
    protected $primaryKey = 'id';
    protected $allowedFields = ['customer_name', 'product_name', 'quantity', 'total_price', 'created_at'];
}
