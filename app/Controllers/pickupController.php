<?php

namespace App\Controllers;

use CodeIgniter\Database\Exceptions\DatabaseException;
use App\Models\PickupModel;

class PickupController extends BaseController
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->pickup = $this->db->table('pickup');
    }
    public function pickIndex()
    {
        return view('pickup/index');
    }

    public function pickAdd()
    {
        return view('pickup/addModal');
    }

    public function pickSave()
    {
        // Fetch form data
        $input = $this->request->getPost();

        // Validate required fields
        if (!isset($input['Fname']) || !isset($input['Fage'])) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Missing required fields!',
                'received_data' => $input // Debugging output
            ]);
        }
        $result = $this->pickup->insert($input);
        return json_encode($result);

    }




    public function checkDatabase()
    {
        try {
            $db = \Config\Database::connect();
            $db->query("SELECT 1"); // Execute a simple query to check connection
            echo "Database is connected successfully!";
        } catch (\Exception $e) {
            echo "Database connection failed: " . $e->getMessage();
        }
    }


    public function fetchData()
    {
        $userModel = new PickupModel(); // Load the model
        $users = $userModel->findAll(); // Fetch all user records

        return $this->response->setJSON($users);
    }

    public function pickTable()
    {
        $data = $this->pickup->orderBy('id', 'desc')->get()->getResult();
        $table = '';
        $id = 1;
        foreach ($data as $row) {
            $table .= '
            <tr>
            <td>' . $row->Fname . '</td>
            <td>' . $row->Fage . '</td>
            <td><button class="editpenbtn" type="button" onclick="showComModal(\'' . base_url() . 'editPickup/' . $row->id . '\', \'Edit pickup\')"><i class="fas fa-edit "></i></button>
            <button class="editpenbtn" type="button" onclick="showComModal(`' . base_url() . 'deletePickup/' . $row->id . '`,`Delete pickup`)"><i class="fa-regular fa-trash-can "></i></button>
            </td>
            </tr>';
            $id++;
        }
        return json_encode($table);
    }
    public function pickEdit($id)
    {
        $data['edit'] = $this->pickup->where('id', $id)->get()->getRow();
        return view('pickup/editModal',  $data);
    }
    public function pickUpdate($id)
    {
        // Fetch form data (use getPost instead of getVar for security)
        $input = $this->request->getPost();
        $result = $this->pickup->where('id', $id)->update($input);
        return json_encode($result);
    }
    public function pickDelete($id)
    {
        $data['edit'] = $this->pickup->where('id', $id)->get()->getRow();
        return view('pickup/delModal',  $data);
    }
    public function pickDelData($id)
    {
        $result = $this->pickup->where('id', $id)->delete();
        return json_encode($result);
    }
}
