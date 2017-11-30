<?php

namespace App;

#use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    // protected $guarded = []; opisite $fillable
    //protected $fillable = [];

 	public function country()
    {
    	return $this -> belongsTo(Country::class, 'company_country_id');
    }

    public function notes(){

        return $this -> hasMany(Note::class);
    }

    public function logs(){

        return $this -> hasMany(Log::class);
    }

    public function scopeAllStatus($query, $val) {

    	#$val = 'N', 'P', 'A', 'Y', 'R'
    	#Call App\Account::allStatus('P')->get();

    	return $query->where('status', $val);

    }   

    public function addNote($content){

            /*
            Note::create([

                'content' => $content,
                'account_id' => $this->id

            ]);*/
            #$user_id = auth()->id();

            #$this->notes()->create(compact('content','user_id'));

            $this->notes()->create(compact('content'));

    }

    public function scopeAllNotes(){

        return $this->notes()->orderBy('created_at', 'desc');
    }

    public function addLog($content){

            /*
            Log::create([

                'content' => $content,
                'account_id' => $this->id

            ]);*/

            $this->logs()->create(compact('content'));

    }

    public function scopeAllLogs(){

        return $this->logs()->orderBy('created_at', 'desc');
    }

        
    
}
