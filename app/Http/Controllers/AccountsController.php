<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Account;

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

    public function create(){
    	return view('accounts.create');
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

        Account::create(request(['staff_name', 'staff_tel', 'staff_email', 'is_over_10k', 'who_credit_check', 'is_student', 'company_notes'])); 

        #Session::flash('flash_message', 'Account successfully added!');

        return redirect('/')->with('success','Item created successfully!'); 
        #return redirect()->back();
    }

    public function edit(Account $account){


        return view('accounts.edit', compact('account'));

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
        
        $account->staff_name = request('staff_name');
        $account->staff_tel = request('staff_tel');
        $account->staff_email = request('staff_email');
        $account->is_over_10k = request('is_over_10k');
        $account->who_credit_check = request('who_credit_check');
        $account->is_student = request('is_student');
        $account->company_notes = request('company_notes');

        $account -> save();

        #Account::update(request(['name', 'tel', 'email','is_stu', 'notes'])); 
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
