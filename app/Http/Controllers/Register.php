<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class Register extends Controller
{
    public function index()
    {
        $title = 'Create Customer';
        $url = url('/');
        $data = compact('title', 'url');
        return view('register')->with($data);
    }

    public function register(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->password = $request['password'];
        $customer->save();

        return redirect('/view');
    }

    public function view(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search !== "") {
            $customer = Customer::where('name', "LIKE", "$search%")->get();
        } else {
            $customer = Customer::all();
        }


        $data = compact('customer', 'search');
        return view('customer-view')->with($data);
    }

    public function delete($id)
    {
        $customer = Customer::find($id);
        if (!is_null($customer)) {
            $customer->delete();
        }
        return redirect('/view');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        $title = 'Update Customer';
        $url = url('/update') . '/' . $id;
        $data = compact('title', 'url', 'customer');
        return view('register')->with($data);
    }

    public function update($id, Request $request)
    {
        $customer = Customer::find($id);
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->password = $request['password'];
        $customer->save();
        return redirect('/view');
    }
}
