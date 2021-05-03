<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubjectStoreRequest;
use App\Http\Requests\SubjectUpdateRequest;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function index()
    {
        $paginator = Subject::paginate(5);

        return view("subjects.index", compact('paginator'));
    }

    public function create()
    {
        return view('subjects.create');
    }

    public function store(SubjectStoreRequest $request)
    {
        $subject = new Subject();

        $subject->name = $request->name;
        $subject->save();

        return redirect()->route('subject.index');
    }

    public function show(int $id)
    {
        $subject = Subject::find($id);

        if (empty($subject)) {
            return back();
        }

        return view('subjects.show', compact('subject'));
    }

    public function edit(int $id)
    {
        $subject = Subject::find($id);

        if (empty($subject)) {
            return back();
        }

        return view('subjects.edit', compact('subject'));
    }

    public function update(SubjectUpdateRequest $request, int $id)
    {
        $subject = Subject::find($id);

        if (empty($subject)) {
            return back()->withInput();
        }

        $data = ['name' => $request->name];
        $result = $subject
            ->update($data);

        if ($result) {
            return redirect()->route('subject.index');
        } else {
            return back()->withInput();
        }
    }

    public function delete(int $id)
    {
        $subject = Subject::find($id)->delete();

        if (empty($subject)) {
            return back()->withInput();
        }

        return redirect(route('subject.index'));
    }
}
