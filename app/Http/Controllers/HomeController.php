<?php

namespace App\Http\Controllers;

use App\Models\Farmer_Details;
use App\Models\HR_Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function create()
    {

       return view('create');
    }
    public function store(Request $request)

    {
Farmer_Details::create($request->all());
return redirect('Index');

    }
    public function Index()
    {
$data=Farmer_Details::all();
        return view('Index',compact('data'));
    }
    public function edit($id)
    {
        $data=Farmer_Details::find($id);
        return view('edit',compact('data'));
    }
    public function update(Request $request,Farmer_Details $Farmer_Details)
    {
        $Farmer_Details->update($request->all());
        return redirect('Index');

    }
    public function delete( Farmer_Details $Farmer_Details)
    {

        $Farmer_Details->delete();
        return redirect('Index');
    }
}
