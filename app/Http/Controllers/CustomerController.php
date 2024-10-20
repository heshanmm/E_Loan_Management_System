<?php

namespace App\Http\Controllers;

use App\Models\Customers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer_form()
    {
        return view('customer_form');
    }
    public function store(Request $request)
    {
         $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'title' => 'required|string|max:10',
            'name' => 'required|string|max:255',
            'nic' => 'required|string|unique:customers,nic',
            'gender' => 'required|in:male,female',
            'dob' => 'required|date',
            'citizenship' => 'required|in:srilankan,other',
            'civil_status' => 'required|in:married,unmarried,other',
            'email' => 'required|email|unique:customers,email',
            'contact' => 'required|string|max:20',
            'address_line_1' => 'required|string|max:255',
            'address_line_2' => 'nullable|string|max:255',
            'address_line_3' => 'nullable|string|max:255',
            'postal_code' => 'required|string|max:10',
            'district' => 'required|string|max:255',
            'province' => 'required|string|max:255',
        ]);

        $customer = Customers::create([
            'first_name' => $request->input('first_name'),
            'middle_name' => $request->input('middle_name'),
            'last_name' => $request->input('last_name'),
            'title' => $request->input('title'),
            'name' => $request->input('name'),
            'nic' => $request->input('nic'),
            'gender' => $request->input('gender'),
            'dob' => $request->input('dob'),
            'citizenship' => $request->input('citizenship'),
            'civil_status' => $request->input('civil_status'),
            'email' => $request->input('email'),
            'contact' => $request->input('contact'),
            'address_line_1' => $request->input('address_line_1'),
            'address_line_2' => $request->input('address_line_2'),
            'address_line_3' => $request->input('address_line_3'),
            'postal_code' => $request->input('postal_code'),
            'district' => $request->input('district'),
            'province' => $request->input('province'),
        ]);


        return redirect()->route('customer_list')->with('success', 'New loan officer added successfully');
    }
    
    public function customer_list()
    {
        $customers = Customers::all();
        return view('customer_list', compact('customers'));
    }


    public function index()
    {
        $customer = Customers::all();
        return view('customers.index', compact('customers'));
    }

    public function view($id)
    {
        $customer = Customers::findOrFail($id);
        return view('customer_view', compact('customer'));
    }


    public function edit($id)
    {
        $customer = Customers::findOrFail($id);
        return view('customer_edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'title' => 'required|string|max:10',
            'name' => 'required|string|max:255',
            'nic' => 'required|string|unique:customers,nic,' . $id,
            'gender' => 'required|in:male,female',
            'dob' => 'required|date',
            'citizenship' => 'required|in:srilankan,other',
            'civil_status' => 'required|in:married,unmarried,other',
            'email' => 'required|email|unique:customers,email,' . $id,
            'contact' => 'required|string|max:20',
            'address_line_1' => 'required|string|max:255',
            'address_line_2' => 'nullable|string|max:255',
            'address_line_3' => 'nullable|string|max:255',
            'postal_code' => 'required|string|max:10',
            'district' => 'required|string|max:255',
            'province' => 'required|string|max:255',
        ]);

        $customer = Customers::findOrFail($id);
        $customer->update($request->all());

        return redirect()->route('customer.view', $id)->with('success', 'Customer updated successfully');
    }
}
