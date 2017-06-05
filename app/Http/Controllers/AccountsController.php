<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Account;
#use App\Country;
use Helper;

use App\Http\Requests\StoreAccountRequest; //https://laracasts.com/discuss/channels/laravel/form-request-validation-class-apphttpcontrollersstoreblogpost-does-not-exist

use Session;

class AccountsController extends Controller
{
    //
    public function index(){
    	$accounts = Account::all();
    	return view('accounts.index', compact('accounts'));
    }

    public function show(Account $account){

   
    	return view('accounts.show', compact('account'));
    }

    public function create(Request $request){

        #$eu_countries = Country::where('is_eu', '1')->get();
        
        #$non_eu_countries = Country::where('is_eu', '0')->get();
        //dd($eu_countries); #- dump & die - testing purpose

        $eu_countries = Helper::eu_countries();

        $non_eu_countries =  Helper::non_eu_countries();

    	return view('accounts.create', compact('eu_countries', 'non_eu_countries'));
    }

    public function store(StoreAccountRequest $request){

        #dd(request()->all());
/*
        $account = new Account;

        $account->name = request('name');
        $account->tel = request('tel');
        $account->email = request('email');
        $account->is_stu = request('is_stu');
        $account->notes = request('notes');

        $account->save();
/*
        Account::create([
            'name' => request('name'),
            'tel' => request('tel'),
            'email' => request('email'),
            'is_stu' => request('is_stu'),
            'notes' => request('notes')
            ]);*/
            /*
        $this->validate(request(),[
                'name' => 'required',
                'tel' => 'required',
                'email' => 'required', 
                'is_over_10k' => 'required'#,
                #'who_credit_check' => 'required'

            ]);*/

        Account::create(request(['staff_name', 'staff_tel', 'staff_email', 'is_over_10k', 'who_credit_check', 'company_type', 'is_student', 'student_reg_no', 'is_subsidiary', 'subsidiary_info', 'company_name', 
            'company_address_1', 'company_address_2', 'company_address_3', 'company_town', 
            'company_postcode', 'company_reg_number', 'company_telephone', 
            'company_fax', 'company_email', 'company_contact_name', 'company_is_eu',        
            'company_country_id', 'company_vat_reg_no', 'is_charity_or_eligible_body', 
            'company_eligibility', 'company_eligibility_other', 'company_notes', 
            'status' => 'N'])); 

        #Session::flash('flash_message', 'Account successfully added!');

        return redirect('/')->with('success','Item created successfully!'); 
        #return redirect()->back();
    }

    public function edit(Account $account){

        $eu_countries = Helper::eu_countries();

        $non_eu_countries =  Helper::non_eu_countries();
        //dd($eu_countries); #- dump & die - testing purpose

        return view('accounts.edit', compact('account', 'eu_countries', 'non_eu_countries'));

    }

    public function update($id, StoreAccountRequest $request){

        $account = Account::findOrFail($id);

        /*
        $this->validate(request(),[
            'name' => 'required',
            'tel' => 'required',
            'email' => 'required',
            'is_over_10k' => 'required'
            ]);*/
        /*
        $account->staff_name = request('staff_name');
        $account->staff_tel = request('staff_tel');
        $account->staff_email = request('staff_email');
        $account->is_over_10k = request('is_over_10k');
        $account->who_credit_check = request('who_credit_check');
        $account->is_student = request('is_student');
        $account->student_reg_no = request('student_reg_no');
        $account->is_subsidiary = request('is_subsidiary');
        $account->subsidiary_info = request('subsidiary_info');
        $account->company_notes = request('company_notes');

        $account -> save();*/

        $account->update(request(['staff_name', 'staff_tel', 'staff_email', 'is_over_10k', 'who_credit_check', 'company_type', 'is_student', 'student_reg_no', 'is_subsidiary', 'subsidiary_info', 'company_name', 
            'company_address_1', 'company_address_2', 'company_address_3', 'company_town', 
            'company_postcode', 'company_reg_number', 'company_telephone', 
            'company_fax', 'company_email', 'company_contact_name', 'company_is_eu', 
            'company_country_id', 'company_vat_reg_no', 'is_charity_or_eligible_body', 
            'company_eligibility', 'company_eligibility_other', 'company_notes']));

  
        return view('accounts.show', compact('account'));

    }


    public function destroy($id, Request $request){        

        $account = Account::findOrFail($id);

        $account->delete();

        //return redirect('/')->with('success','Item delete successfully!'); 
        #return Response::json($account);
        return response()->json($account);

    }


}
