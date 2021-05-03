<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentStoreRequest;
use App\Http\Requests\StudentUpdateRequest;
use App\Models\Group;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $paginator = Student::all()->join('groups', 'students.group_id', '=', 'groups.id as group_id')->paginate(5);
        return view("students.index", compact('paginator'));
    }

    public function create()
    {
        $groups = Group::all();

        if (!$groups) {
            return back();
        }

        return view('students.create', compact('groups'));
    }

    public function store(StudentStoreRequest $request)
    {
        $student = new Student();

        $student->first_name = $request->first_name;
        $student->second_name = $request->second_name;
        $student->group_id = $request->group_id;
        $student->save();

        return redirect()->route('student.index');
    }

    public function show(int $id)
    {
        $student = Student::find($id);

        if (empty($student)) {
            return back();
        }

        return view('students.show', compact('student'));
    }

    public function edit(int $id)
    {
        $student = Student::find($id);

        if (empty($student)) {
            return back();
        }

        return view('students.edit', compact('student'));
    }

    public function update(StudentUpdateRequest $request, int $id)
    {
        $student = Student::find($id);

        if (empty($student)) {
            return back()->withInput();
        }

        $data = [
            'first_name' => $request->first_name,
            'second_name' => $request->second_name
        ];
        $result = $student->update($data);

        if ($result) {
            return redirect()->route('student.index');
        } else {
            return back()->withInput();
        }
    }

    public function delete(int $id)
    {
        $student = Student::find($id)->delete();

        if (empty($student)) {
            return back()->withInput();
        }

        return redirect(route('student.index'));
    }
}
