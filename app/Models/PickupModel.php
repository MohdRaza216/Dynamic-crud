<?php

namespace App\Models;
use CodeIgniter\Model;

class PickupModel extends Model
{
    protected $table = 'pickups';
    protected $primaryKey = 'id';
    protected $allowedFields = ['order_type_title', 'status', 'assigned_to', 'created_at'];
}
