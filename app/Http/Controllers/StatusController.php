<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;


class StatusController extends Controller
{
    public function index(){
        if(!empty(Status::orderBy('created_at','asc')->paginate(10))){
            $statuses = Status::orderBy('created_at','desc')->paginate(10);
        }
        else{
            $statuses = null;
        }
        
        return view('admin.statuses.index', compact('statuses'));
    }

    public function create(){
        return view('admin.statuses.create');
    }

    public function store(Request $request){
        $incomingFields = $request->validate([
            'name' => 'required',
            'slug' => 'required'
        ]);

        $status = Status::create($incomingFields);

        return redirect()->route('admin.status.edit', ['status' => $status->id])->with('success', 'Статусът беше създаден успешно!');
    }

    public function edit(Status $status){
        return view('admin.statuses.edit', compact('status'));
    }

    public function update(Status $status, Request $request){
        $incomingFields = $request->validate([
            'name' => 'required',
            'slug' => 'required'
        ]);

        $status->update($incomingFields);

        return redirect()->route('admin.status.edit', ['status' => $status->id])->with('success', 'Статусът беше обновен успешно!');
    }

    public function delete(Status $status){
        $status->delete();

        return redirect()->route('admin.statuses.index')->with('success', 'Статусът беше изтрит успешно!');
    }
}
