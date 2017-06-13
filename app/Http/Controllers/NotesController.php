<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Account;

use App\Note;

use Session;


class NotesController extends Controller
{
   

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Account $account)
    {
        //

        $this->validate(request(), ['content' => 'required|min:2']);

        $account->addNote(request('content'));
    

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $note = Note::findOrFail($id);

        $note->delete();
    }
}
