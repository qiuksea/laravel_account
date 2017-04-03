<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Account;

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

        return redirect('/');
    }

    public function edit(Account $account){


        return view('accounts.edit', compact('account'));

    }

    public function update(Account $account){


        return view('accounts.show', compact('account'));

    }

    public function destroy(Account $account){

        return redirect('/');

    }


}
