<?php

namespace App\Controllers;

use App\Models\OrderModel;
use CodeIgniter\Controller;

class OrderController extends Controller
{
    public function index()
    {
        $orderModel = new OrderModel();
        $data['orders'] = $orderModel->findAll(); // Fetch all orders

        return view('orders/index', $data);
    }
}
