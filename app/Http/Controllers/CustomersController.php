<?php

namespace App\Http\Controllers;

use App\Company;
use App\Events\NewCustomerHasRegisteredEvent;
use App\Mail\WelcomeNewUserMail;
use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\Mail;

class CustomersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')/*->except(['index'])*/;
    }

    public function index(){


//        $activeCustomers = Customer::where('active','1')->get();
//        $activeCustomers = Customer::active()->get();


//        $inactiveCustomers = Customer::where('active','0')->get();
//        $inactiveCustomers = Customer::inactive()->get();



//        $companies = Company::all();
        $customers = Customer::all();
//        return view('internals.customers',[
//            'activeCustomers'=>$activeCustomers,
//            'inactiveCustomers'=>$inactiveCustomers
//        ]);
        return view('customers.index',compact('customers'/*,'activeCustomers','inactiveCustomers', 'companies'*/));

    }

    public function create(){
        $companies = Company::all();

        $customer = new Customer();

        return view('customers.create', compact('companies','customer'));
    }

    public function store(){

//        $data = \request()->validate([
//            'name'=>'required|min:3',
//            'email'=>'required|email',
//            'active'=>'required',
//            'company_id'=>'required'
//        ]);
//
//        $customer = new Customer();
//        $customer->name = \request('name');
//        $customer->email = \request('email');
//        $customer->active = \request('active');
//        $customer->save();

//        Mass Asignment
        $customer =  Customer::create($this->validateRequest());

        event(new NewCustomerHasRegisteredEvent($customer));


//        Register to Newsletter

        // Slack notification to Admin

        return redirect('customers');

    }

    // route binding, jika route name sama dengan nama model maka cukup dengan deklar nama Model didepan parameter baru
    public function show(Customer $customer){

        return view('customers.show',compact('customer'));
    }

    public function edit(Customer $customer){
        $companies = Company::all();
        return view('customers.edit',compact('customer','companies'));
    }

    public function update(Customer $customer){
//        $data = \request()->validate([
//            'name'=>'required|min:3',
//            'email'=>'required|email',
//            'active'=>'required',
//            'company_id'=>'required'
//        ]);
        $customer->update($this->validateRequest());

        return redirect('customers/'.$customer->id);
    }

    public function destroy(Customer $customer){
        $customer->delete();
        return redirect('customers');
    }

    private function validateRequest(){
        return request()->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
            'active'=>'required',
            'company_id'=>'required'
        ]);

    }

}
