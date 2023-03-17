<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return
     */
    public function index()
    {
        $customer = Customer::all();
        return response()->json($customer);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return mixed
     */
    public function create()
    {
//        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $request->validate([

            'username' => 'required',
            'title' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'address1' => 'required',
            'address2',
            'county' => 'required',
            'towncity' => 'required',
            'postcode' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);
        try {
            //Create customer from react Jason
            Customer::create($request->all());

            return response()->json([
                'message' => 'Customer Added Successfully!!'
            ]);
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return response()->json([
                'message' => 'Something went wrong while adding a customer!!'
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return mixed
     */
    public function show(Customer $customer)
    {
        return response()->json([
            'customer'=>$customer
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return mixed
     */
    public function edit(Customer $customer)
    {
//        return view('customer.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([

            'username' => 'required',
            'title' => 'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'address1' => 'required',
            'address2',
            'county' => 'required',
            'towncity' => 'required',
            'postcode' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        $customer->update($request->all());

        return response()->json([
            'customer'=>$customer
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return mixed
     */
    public function destroy(Customer $customer)
    {
        try {
            $customer->delete();

            return response()->json([
                'message' => 'Customer Deleted Successfully!!'
            ]);
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return response()->json([
                'message'=>'Something went wrong while deleting a customer!!'
            ]);
        }
    }
}
