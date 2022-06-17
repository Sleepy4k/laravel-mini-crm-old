<?php

namespace App\Http\Controllers\Page;

use App\Models\Employees;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Companies;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employees::latest()->paginate(10);
        $data = [
            $title = "Employee",
            $paths = [
                "Home",
                "Employee",
                "Index"  
            ]
        ];

        return view('admin.employee.index', compact("employees","data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Companies::get();
        $data = [
            $title = "Employee",
            $paths = [
                "Home",
                "Employee",
                "Add" 
            ]
        ];

        return view('admin.employee.add', compact("companies","data"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAboutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, )
    {
        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'company' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:255'
        ]);

        $input = $request->only("first_name", "last_name", "company", "email", "phone");
        
        $Employee = Employees::create($input);
        $Employee->save();

        return redirect()->route('employee.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companies = Companies::get();
        $employee = Employees::findOrFail($id);
        $data = [
            $title = "Employee",
            $paths = [
                "Home",
                "Employee",
                "Edit" 
            ],
            $uid = $id
        ];

        return view('admin.employee.edit', compact("companies","employee","data"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAboutRequest  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'company' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:255'
        ]);

        $input = $request->only("first_name", "last_name", "company", "email", "phone");
        
        $Employee = Employees::findOrFail($id);
        $Employee->update($input);
        $Employee->save();

        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Employee = Employees::findOrFail($id);
        $Employee->delete();

        return redirect()->route('employee.index');
    }
}