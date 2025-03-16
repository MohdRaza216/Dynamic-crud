<?php

namespace App\Models;
use CodeIgniter\Model;

class PickupModel extends Model
{
    protected $table = 'pickup';
    protected $primaryKey = 'id';
    protected $allowedFields = ['Fname', 'Fage'];
}
