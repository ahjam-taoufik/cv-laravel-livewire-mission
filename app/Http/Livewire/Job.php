<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Job extends Component
{
    public $job;


    public function addlike(){

        if(auth()->check()){

            auth()->user()->likes()->toggle($this->job->id);
        }else{
            $this->emit('flash','connecter vous pour liker','error');
        }

    }



    public function render()
    {
        return view('livewire.job');
    }
}
