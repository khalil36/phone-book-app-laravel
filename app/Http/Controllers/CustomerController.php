<?php


namespace App\Http\Controllers\Front;
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateCustomer;
use App\Models\Customer;

class CustomerController extends Controller
{
   

   public function index() {
      $customers = Customer::orderBy('id', 'DESC')->get();
      return view('customer.index',  compact('customers'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create() {
      return view('customer.create');
   }

   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(ValidateCustomer $request) {
      $result = Customer::create($request->all());
      if ($result) {
         return back()->with('customer_created','Customer has been created successfully!');
      } else {
         return back()->with('failed','Error! Customer data has not been saved.');
      }
   }

   /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function edit($id) {

     $customer = Customer::find($id);
     return view('customer.edit', compact('customer'));
   }

   /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function update(ValidateCustomer $request, $id) {

      $customer = Customer::find($id);
      $customer->first_name   = $request->first_name;
      $customer->last_name = $request->last_name;
      $customer->phone   = $request->phone;
      $customer->email  = $request->email;
      $customer->updated_at   = date('Y-m-d h:i:s');
      
      if ($customer->save())
         return back()->with('customer_updated','Customer data has been updated successfully!');
      else
         return back()->with('failed','Error: customer data not updated!');
      
   }

   /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function delete($id) {
      $result = Customer::where('id',$id)->delete();
      if ($result) {
         return back()->with('customer_deleted','Customer has been deleted!');
      } else {
         return back()->with('failed','Error! failed to delete this customer.');
      }
   }
}
