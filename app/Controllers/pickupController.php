<?php

namespace App\Controllers;

use CodeIgniter\Database\Exceptions\DatabaseException;

class PickupController extends BaseController
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->pickup = $this->db->table('pickup');
    }
    public function pickIndex()
    {
        echo view('pickup/index');
    }

    public function pickAdd()
    {
        echo view('pickup/addModal');
    }

    public function pickSave()
    {
        $input = $this->request->getVar();
        $result = $this->pickup->insert($input);
        return json_encode($result);
    }

    public function checkDatabase()
    {
        $db = \Config\Database::connect();

        try {
            if ($db->connect()) {
                echo "Database is connected successfully!";
            }
        } catch (DatabaseException $e) {
            echo "Database connection failed: " . $e->getMessage();
        }
    }
}
