<?php

namespace App\Http\Controllers;

use App\Models\Table1Controller;
use Illuminate\Http\Request;

class Table1Controller extends Controller
{
    public function index()
    {
        // Retrieve all table1Controllers from the database
        $table1Controllers = Table1Controller::all();

        // Return a view with the table1Controllers data
        return view('table1controllers.index', ['table1Controllers' => $table1Controllers]);
    }

    public function create()
    {
        // Return a view with a form to create a new Table1Controller
        return view('table1controllers.create');
    }

    public function store(Request $request)
    {
        // Create a new Table1Controller with the data from the request
        $Table1Controller = new Table1Controller();

        foreach($fields as $field) {
            $Table1Controller->{$field} = $request->input($field);
        }

        $Table1Controller->save();

        // Redirect to the index page with a success message
        return redirect()->route('table1controllers.index')->with('success', 'Table1Controller created successfully!');
    }

    public function show($id)
    {
        // Retrieve the Table1Controller with the given ID from the database
        $Table1Controller = Table1Controller::find($id);

        // Return a view with the Table1Controller data
        return view('table1controllers.show', ['Table1Controller' => $Table1Controller]);
    }

    public function edit($id)
    {
        // Retrieve the Table1Controller with the given ID from the database
        $Table1Controller = Table1Controller::find($id);

        // Return a view with a form to edit the Table1Controller
        return view('table1controllers.edit', ['Table1Controller' => $Table1Controller]);
    }

    public function update(Request $request, $id)
    {
        // Retrieve the Table1Controller with the given ID from the database
        $Table1Controller = Table1Controller::find($id);

        // Update the Table1Controller with the data from the request
        foreach($fields as $field) {
            $Table1Controller->{$field} = $request->input($field);
        }

        $Table1Controller->save();

        // Redirect to the index page with a success message
        return redirect()->route('table1controllers.index')->with('success', 'Table1Controller updated successfully!');
    }

    public function destroy($id)
    {
        // Retrieve the Table1Controller with the given ID from the database
        $Table1Controller = Table1Controller::find($id);

        // Delete the Table1Controller from the database
        $Table1Controller->delete();

        // Redirect to the index page with a success message
        return redirect()->route('table1controllers.index')->with('success', 'Table1Controller deleted successfully!');
    }
}
