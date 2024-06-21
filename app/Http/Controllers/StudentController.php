<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request){
        Student::create($request->all());
        return redirect()->route('dashboard.datasiswa');
    }

    public function update(Request $request, $id)
    {
        $data = Student::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('dashboard.datasiswa');
    }

    public function delete($id)
    {
        $data = Student::findOrFail($id);
        $data->delete();
        return redirect()->route('dashboard.datasiswa');
    }
}
