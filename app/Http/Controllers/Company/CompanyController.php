<?php

namespace App\Http\Controllers\Company;

use App\Company;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile    ;
use App\Http\Requests\CompanyRequest;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campanies = Company::all();
      return  view('Company.index',compact('campanies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('Company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {

        $formInput=$request->except('logo');

        $image=$request->logo;
       // dd($image);
        if($image)
        {
            /* in PUBLIC FOLDER*/ 

           // $random = rand(0, 999999);
          //  $imageName=$image->getClientOriginalName();
          //  $image->move('images',$random . "_" .  date("d-m-Y") ."_".$imageName);
          // $img = Image::make($image->getRealPath());

             /* in STORAGE FOLDER*/ 
          $formInput['logo']=Storage::disk('local')->put('public', $image);
        }

        Company::create($formInput);
        return back()->with('success', 'You have just created one item');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::findOrFail($id);
        // return to the edit views
        return view('Company.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $companyEdit = Company::find($id);

        $image=$request->logo;
    if($image){
       // $file = request()->file('logo');
      // dd($image);
       Storage::delete($companyEdit->logo);
       $companyEdit->logo = Storage::disk('local')->put('public', $image);
        
        
    } 
    $companyEdit->name = $request->name;
    $companyEdit->email = $request->email;
    $companyEdit->website = $request->website;
    $companyEdit->save();
    return redirect()->route('companies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company  $company)
    {
        Storage::delete($company->logo);
        $company->delete();
        return redirect()->route('companies.index');
    }
}
