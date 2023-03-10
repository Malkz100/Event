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
     * @return mixed
     */
//    public function index()
//    {
//        $customers = Customer::latest()->paginate(5);
//        return view('customer.index',compact('customers'))
//            ->with('i', (request()->input('page', 1) - 1) * 5);
//    }


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
        return view('customer.create');
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
                'message' => 'Product Created Successfully!!'
            ]);
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return response()->json([
                'message' => 'Something went wrong while creating a product!!'
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
        return view('customer.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return mixed
     */
    public function edit(Customer $customer)
    {
        return view('customer.edit',compact('customer'));
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

//        $customer->update($request->all());
        $customer = Customer::create($request->all());

        return redirect()->route('customer.index')
            ->with('success','Customer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return mixed
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customer.index')
            ->with('success','Customer deleted successfully');
    }
}
