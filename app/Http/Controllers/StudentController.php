<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Group;
use Illuminate\Http\Request;
use Nette\Schema\Elements\Structure;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        $groups = Group::all();
        return view('students.index')->with('students', $students)->with('groups', $groups);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groups = Group::all();
        return view('students.create')->with('groups', $groups);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'group_id' => 'required'
        ]);
        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Student was created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        $group = Group::find($student->group_id);
        return view('students.show', compact('student', 'group'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $groups = Group::all();
        $student_group = Group::find($student->group_id);
        return view('students.edit', compact('student', 'student_group'))->with('groups', $groups);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'group_id' => 'required'
        ]);
        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Your student was successfuly edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Your student was deleted');
    }
}
