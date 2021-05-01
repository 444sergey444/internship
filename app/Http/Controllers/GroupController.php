<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupStoreRequest;
use App\Http\Requests\GroupUpdateRequest;
use App\Models\Group;

class GroupController extends Controller
{
    public function index()
    {
        $paginator = Group::paginate(5);

        return view("groups.index", compact('paginator'));
    }

    public function create()
    {
        return view('groups.create');
    }

    public function store(GroupStoreRequest $request)
    {
        $group = new Group;

        $group->name = $request->name;
        $group->save();

        return redirect()->route('group.index');
    }

    public function show(int $id)
    {
        $group = Group::find($id);

        if (empty($group)) {
            return back();
        }

        return view('groups.show', compact('group'));
    }

    public function edit(int $id)
    {
        $group = Group::find($id);

        if (empty($group)) {
            return back();
        }

        return view('groups.edit', compact('group'));
    }

    public function update(GroupUpdateRequest $request, int $id)
    {
        $group = Group::find($id);

        if (empty($group)) {
            return back()->withInput();
        }

        $data = ['name' => $request->name];
        $result = $group
            ->update($data);

        if ($result) {
            return redirect()
                ->route('group.index');
        } else {
            return back()
                ->withInput();
        }
    }

    public function delete(int $id)
    {
        $group = Group::find($id)->delete();

        if (empty($group)) {
            return back()->withInput();
        }

        return redirect(route('group.index'));
    }
}
