<?php

namespace App\Controllers;

class PickupController extends BaseController
{
    public function pickIndex()
    {
        echo view('pickup/index');
    }
}
