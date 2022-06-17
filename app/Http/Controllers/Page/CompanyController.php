<?php

namespace App\Http\Controllers\Page;

use App\Models\Companies;
use Illuminate\Http\Request;
use App\Http\Traits\CompanyTrait;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    use CompanyTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Companies::latest()->paginate(10);
        $data = [
            $title = "Company",
            $paths = [
                "Home",
                "Company",
                "Index"  
            ]
        ];

        return view("admin.company.index", compact("companies", "data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            $title = "Company",
            $paths = [
                "Home",
                "Company",
                "Add" 
            ]
        ];

        return view("admin.company.add", compact("data"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAboutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|max:255|unique:companies",
            "email" => "required|max:255|email:dns",
            "logo" => "required|image|mimes:jpg,png,jpeg,svg|max:4092|dimensions:min_width=100,min_height=100",
            "website" => "required|max:255"
        ]);

        $input = $request->only("name", "email", "logo", "website");

        if ($request->file("logo")) {
            $path_dir = "public/images";
            $file = $request->file("logo");

            $input["logo"] = $this->save_file(
                $path_dir,
                $file->getClientOriginalName(),
            );

            $file->storeAs($path_dir, $input["logo"]);
        }

        Companies::create($input)->save();

        return redirect()->route("company.index")->with("status", "Data berhasil ditambahkan");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Companies::findOrFail($id);
        $data = [
            $title = "Company",
            $paths = [
                "Home",
                "Company",
                "Edit" 
            ],
            $uid = $id
        ];

        return view("admin.company.edit", compact("company", "data"));
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
            "name" => "required|max:255",
            "email" => "required|max:255|email:dns",
            "logo" => "image|mimes:jpg,png,jpeg,svg|max:4092",
            "website" => "required|max:255"
        ]);

        $input = $request->only("name", "email", "logo", "website");

        if($request->file("logo")) {
            $old_path = public_path("storage/images/".$request->old_logo);

            if(File::exists($old_path)) {
                File::delete($old_path);
            };

            $path_dir = "public/images";

            $input["logo"] = $this->save_file(
                $path_dir,
                $request->file("logo")->getClientOriginalName(),
            );

            $request->file("logo")->storeAs($path_dir, $input["logo"]);
        }

        Companies::findOrFail($id)->update($input)->save();
        
        return redirect()->route("company.index")->with("status", "Data berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Companies::findOrFail($id)->delete();

        File::delete(public_path("storage/images/".$company->logo));

        return redirect()->route("company.index");
    }
}