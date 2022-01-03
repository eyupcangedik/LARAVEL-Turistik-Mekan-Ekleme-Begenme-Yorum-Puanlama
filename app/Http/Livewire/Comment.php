<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Place;
use Illuminate\Support\Facades\Auth;

class Comment extends Component

{

    public $record, $comment, $place_id, $rate;

    public function mount($id){
        $this->record = Place::findOrFail($id);
        $this->place_id = $this->record->id;
    }

    public function render()
    {
        return view('livewire.comment');
    }

    private function resetInput(){
        $this->subject = null;
        $this->comment = null;
        $this->rate = null;
        $this->place_id = null;
        $this->ip = null;
    }

    public function store(){

        $this->validate([
            'comment' => 'required|min:10',
            'rate' => 'required'
        ]);

        \App\Models\Comment::create([
            'place_id' => $this->place_id,
            'user_id' => Auth::id(),
            'ip' => $_SERVER['REMOTE_ADDR'],
            'rate' => $this->rate,
            'comment' => $this->comment,
        ]);
        
        session()->flash('message', 'Comment Send Successfully');
        $this->resetInput();
    }

}

