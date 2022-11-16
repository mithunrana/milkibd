<?php

namespace App\Http\Controllers\FrontEnd;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return view('frontend.customer.dashboard');
    }


    public function register(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:customers,email',
            'password' => 'min:6|required_with:retype_password|same:retype_password',
            'retype_password' => 'min:6',
        ]);

        $CustomerObj = new Customer();
        $CustomerObj->name = $request->name;
        $CustomerObj->email = $request->email;
        $CustomerObj->password = Hash::make($request->password);
        $CustomerObj->save();

        return redirect('admin/customer')->with('message', 'Customer Information Successfully Added');
    }

}
