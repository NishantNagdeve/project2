<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\MasterAdmin;
use App\Models\Vehicle;
use Session;
use Crypt;
// use Illuminate\Support\Fcades\Hash;
use Illuminate\Support\Facades\DB;

class NewController extends Controller
{
    function home(){
        $customer = DB::table('tblmastercustomer')->count();
        $vehicle =  DB::table('tblmastervehicle')->count();

        return view('/home', compact('customer', 'vehicle'));
    }

    function register(Request $req){
        $req->validate([
            "username" => "min:3 | max:10",
            "password" => "min:3 | max:10"
        ]);
        
        $user = new MasterAdmin;
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->username = $req->input('username');
        $user->password = Crypt::encrypt($req->input('password'));
        $user->save();
        $req->session()->flash('status', 'You are Registered Succcessfuly');
        return redirect('/login');
    }

    function login(Request $req){
        $req->validate([
            // "username" => "min:3 | max:10",
            "password" => "min:3 | max:10"
        ]);
        $user = MasterAdmin::where("email", $req->input('email'))->get();
        $password = Crypt::decrypt($user[0]->password) == $req->input('password');
        if($password){
            $req->session()->put("user", $user[0]->name);
            return redirect('/');
        }else{
            $req->session()->flash('status', 'Please Enter Valid Email And Password');
            return redirect('/login');
        }
    }

    function customeradd(Request $req){
        // return $req->input();
        $user = new Customer;
        $user->customer_name = $req->input('customer_name');
        $user->email = $req->input('email');
        $user->ph_no = $req->input('ph_no');
        $user->gender = $req->input('gender');
        $user->dob = $req->input('dob');
        $user->address = $req->input('address');
        $user->save();

        $req->session()->flash('status', 'New Customer Added Successfully');
        return redirect('/customer');
    }

    function customerList(){
        // return Customer::all();
        $data = DB::table('tblmastercustomer')->paginate(5);
        return view('customer', ["data"=>$data]);
    }

    function editCustomer($id){
        //    return $id;
        $data = Customer::find($id);
        return view('editcustomer',['data'=>$data]);
    }

    function updateCustomer(Request $req){
        $user = Customer::find($req->input('id'));
        $user->customer_name = $req->input('customer_name');
        $user->ph_no = $req->input('ph_no');
        $user->gender = $req->input('gender');
        $user->dob = $req->input('dob');
        $user->address = $req->input('address');
        $user->save();
        // $user->session()->flash('status', 'Customer Updated Successfully');
        $req->session()->flash('status', 'Customer Updated Successfully');
        return redirect('/customer');
    }

    function deleteCustomer($id){
        // return $id;
        Customer::find($id)->delete();
        Session::flash('status', 'Restaurant Deleted Successfully');
        return redirect('/customer');
    }

    function vehicleadd(Request $req){
        // return $req->input();
        $req->validate([
            'model_no' => 'required',
            'chasis_no' => 'required',
            'img' => 'required | max:5000 | mimes:jpg,jpeg,png',
            'price' => 'required'
        ]);

        $user = new Vehicle;
        $user->model_no = $req->input('model_no');
        $user->chasis_no = $req->input('chasis_no');
        $user->variant = $req->input('variant');
        $user->color = $req->input('color');
        $user->img = $req->file('img')->store('public/vehicle-img');
        $user->price = $req->input('price');
        $user->save();

        $req->session()->flash('status', 'New Vehicle Added Successfully');
        return redirect('/vehicle');
    }

    function vehicleList(){
        // return Customer::all();
        $data = DB::table('tblmastervehicle')->paginate(5);
        return view('vehicle', ["data"=>$data]);
    }

    function editVehicle($id){
        $data = Vehicle::find($id);
        return view('editvehicle',['data'=>$data]);
    }

    function updateVehicle(Request $req){
        $req->validate([
            'model_no' => 'required',
            'chasis_no' => 'required',
            // 'img' => 'required | max:5000 | mimes:jpg,jpeg,png',
            'price' => 'required'
        ]);

        $user = Vehicle::find($req->input('id'));
        $user->model_no = $req->input('model_no');
        $user->chasis_no = $req->input('chasis_no');
        $user->variant = $req->input('variant');
        $user->color = $req->input('color');
        // $user->img = $req->input('img');
        if($req->hasFile('img')){
            $user->img = $req->file('img')->store('public');
        }
        $user->price = $req->input('price');
        $user->save();
        $req->session()->flash('status', 'Vehicle Updated Successfully');
        return redirect('/vehicle');
    }

    function deleteVehicle($id){
        Vehicle::find($id)->delete();
        Session::flash('status', 'Vehicle Deleted Successfully');
        return redirect('/vehicle');
    }
}
