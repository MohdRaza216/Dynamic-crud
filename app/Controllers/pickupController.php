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
        $this->tax = $this->db->table('tax');
    }
    public function pickIndex()
    {
        return view('pickup/index');
    }

    public function pickAdd()
    {
        $data['tax'] = $this->tax->where('status', 1)->get()->getResult();
        return view('pickup/addModal', $data);
    }

    public function pickSave()
    {
        // Fetch form data
        $input = $this->request->getPost();

        $file = $this->request->getFile('file');
        if (!empty($file) && $file->isValid()) {
            $file->move('uploads/pickup');
            $input['file_name'] = $file->getName();
            $input['file_location'] = 'uploads/pickup/' . $file->getName();
        } else {
            unset($input['file']);
        }
        $input['tax_new'] = isset($input['tax_new']) ? implode(',', $input['tax_new']) : '';
        $input['status'] = isset($input['status']) ? 1 : 0;

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
            $profileImage = !empty($row->file_location) ? base_url($row->file_location) : base_url('assets/img/user.png');

            $taxs = $this->tax->where('id', $row->tax)->get()->getRow();
            $tax = '';
            if ($taxs) {
                $tax = $taxs->name;
            }

            $tax_newdata = '';
            if (!empty($row->tax_new)) {
                $taxes = explode(',', $row->tax_new);
                foreach ($taxes as $tax_data) {
                    $tax_name = $this->tax->where('id', $tax_data)->get()->getRow();
                    $tax_newdata .= '<span class="tag">' . trim($tax_name?->name) . '</span> ';
                }
            }

            $checked = $row->status == 1 ? 'checked' : '';

            $table .= '
            <tr>
            <td><img src="' . $profileImage . '" class="staff-profile-image-small"> ' . $row->Fname . '</td>
            <td>' . $row->Fage . '</td>
            <td>' . $row->unit . '</td>
            <td>' . $tax . '</td>
            <td>' . $tax_newdata . '</td>
            <td><a class="editpenbtn" onclick="window.location.href = \'' . base_url() . 'viewPickup/' . $row->id . '\'"><img src="' . base_url() . '/assets/img/view.svg" height="15px" width="15px" alt=""></a>
            <button class="editpenbtn" type="button" onclick="showComModal(`' . base_url() . 'editPickup/' . $row->id . '`,`Edit pickup`)" ><i class="fa fa-edit"></i></button>
            <button class="editpenbtn" type="button" onclick="showComModal(`' . base_url() . 'deletePickup/' . $row->id . '`,`Delete pickup`)"><i class="fa-regular fa-trash-can "></i></button>
            </td>
            <td><label class="switchslider">
                        <input type="checkbox" class="myButton earningsstatus-toggle" class=" myButton earningsstatus-toggle" data-earningsid="' . $row->id . '" ' . $checked . ' />
                        <span class="slider round"></span>
                    </label></td>
            </tr>';
            $id++;
        }
        return json_encode($table);
    }
    public function pickEdit($id)
    {
        $data['edit'] = $this->pickup->where('id', $id)->get()->getRow();
        $data['tax'] = $this->tax->where('status', 1)->get()->getResult();
        return view('pickup/editModal', $data);
    }
    public function pickUpdate($id)
    {
        // Fetch form data (use getPost instead of getVar for security)
        $input = $this->request->getPost();
        $file = $this->request->getFile('file');
        if (!empty($file) && $file->isValid()) {
            $file->move('uploads/pickup');
            $input['file_name'] = $file->getName();
            $input['file_location'] = 'uploads/pickup/' . $file->getName();
        } else {
            unset($input['file']);
        }
        $input['tax_new'] = isset($input['tax_new']) ? implode(',', $input['tax_new']) : '';
        $input['status'] = isset($input['status']) ? 1 : 0;
        $result = $this->pickup->where('id', $id)->update($input);
        return json_encode($result);
    }
    public function pickDelete($id)
    {
        $data['edit'] = $this->pickup->where('id', $id)->get()->getRow();
        return view('pickup/delModal', $data);
    }
    public function pickDelData($id)
    {
        $result = $this->pickup->where('id', $id)->delete();
        return json_encode($result);
    }
    public function removeFile()
    {
        $fileLocation = $this->request->getPost('file_location');
        if (unlink($fileLocation)) {
            if ($this->pickup->update(['file_location' => null, 'file_name' => null], ['file_location' => $fileLocation])) {
                return $this->response->setJSON(['message' => 'File deleted successfully'])->setStatusCode(200);
            }
        } else {
            return $this->response->setJSON(['error' => 'Failed to delete the file'])->setStatusCode(500);
        }
    }
    public function pickupStatus()
    {
        $EarningTypeid = $this->request->getPost('earningTypeId');
        $newStatus = $this->request->getPost('newStatus');

        $this->pickup->set('status', $newStatus)->where('id', $EarningTypeid)->update();
        $result = 1;
        return json_encode($result);
    }
    public function viewPickup($id)
    {
        $data['edit'] = $this->pickup->where('id', $id)->get()->getRow();
        return view('pickup/viewPickup', $data);
    }
}
