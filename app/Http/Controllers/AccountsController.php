<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Account;

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

    public function store(){

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
        $this->validate(request(),[
                'name' => 'required',
                'tel' => 'required',
                'email' => 'required'

            ]);

        Account::create(request(['name', 'tel', 'email','is_stu', 'notes'])); 

        #Session::flash('flash_message', 'Account successfully added!');

        return redirect('/')->with('success','Item created successfully!'); 
        #return redirect()->back();
    }

    public function edit(Account $account){


        return view('accounts.edit', compact('account'));

    }

    public function update($id, Request $request){

        $account = Account::findOrFail($id);

        $this->validate(request(),[
            'name' => 'required',
            'tel' => 'required',
            'email' => 'required'
            ]);
        
        $account->name = request('name');
        $account->tel = request('tel');
        $account->email = request('email');
        $account->is_stu = request('is_stu');
        $account->notes = request('notes');

        $account -> save();

        #Account::update(request(['name', 'tel', 'email','is_stu', 'notes'])); 
        return view('accounts.show', compact('account'));

    }

    public function destroy($id, Request $request){

        $account = Account::find($id);

        $account->delete();

        return redirect('/');

    }


}
