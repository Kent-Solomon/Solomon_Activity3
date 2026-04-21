<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // 1. LISTING
    public function index()
    {
        // Fetch everyone so Kent and Keezya both appear in the table
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    // 2. CREATE FORM
    public function create()
    {
        if (!session()->has('user_logged_in')) return redirect('/');
        return view('customers.create');
    }

    // 3. STORE
    public function store(Request $request)
    {
        Customer::create($request->all());
        return redirect()->route('customers.index');
    }

    // 4. EDIT FORM
    public function edit(Customer $customer)
    {
        if (!session()->has('user_logged_in')) return redirect('/');
        return view('customers.edit', compact('customer'));
    }

    // 5. UPDATE
    public function update(Request $request, Customer $customer)
    {
        $customer->update($request->all());
        return redirect()->route('customers.index');
    }

    // 6. DELETE
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index');
    }

    // Add this to your CustomerController.php
    public function switchOperator()
    {
        // If it's Kent (1), change to Keezya (2). If it's Keezya, change to Kent.
        $current = session('user_num', 1);
        $newNum = ($current == 1) ? 2 : 1;
        $newName = ($newNum == 1) ? 'K. Solomon' : 'K. Noay';

        session([
            'user_num' => $newNum,
            'user_name' => $newName,
            'user_logged_in' => true
        ]);

        return redirect()->back();
    }
}
