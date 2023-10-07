<?php

namespace App\Controllers;

use App\Models\StudentModel;

class Student_info extends BaseController
{
    public function index()
    {
        $student = new StudentModel();
        $data['students'] = $student->findAll();
        return view('students/index.php', $data);
    }
    public function create()
    {
        return view('students/create');
    }
    public function store()
    {
        $validation = \Config\Services::validation();
        $check = $this->validate([
            'name' => 'required',
            'email' => 'required|is_unique[students_detail.email]',
            'phone' => 'required|is_unique[students_detail.phone]',
            'course' => 'required',
        ]);
        if (!$check) {
            return redirect('students/create')->with('status', $validation->listErrors());
        } else {
        }
        $students = new StudentModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'course' => $this->request->getPost('course'),
        ];
        $students->save($data);
        return redirect('students')->with('status', 'Student details added successfully');
    }
    public function edit($id = null)
    {
        $student = new StudentModel();
        $data['student'] = $student->find($id);
        return view('students/edit', $data);
    }
    public function update($id = null)
    {
        $student = new StudentModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'course' => $this->request->getPost('course'),

        ];
        $student->update($id, $data);
        return redirect('students')->with('status', 'Student Details Updated Successfully!');
    }
    public function delete($id = null)
    {
        $student = new StudentModel();
        $student->delete($id);
        return redirect()->back()->with('status', 'Student Data Deleted');
    }
}
