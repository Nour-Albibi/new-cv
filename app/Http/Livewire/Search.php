<?php

namespace App\Http\Livewire;

use App\Models\JobTitle;
use App\Models\Skill;
use Livewire\Component;

class Search extends Component
{
    public $counter;
    public $jobtitle;
    public $jobs;
    public $jobid;
    public $skills;
    public $skillid;

    public function mount()
    {
        $jobs=array();
        // $this->jobs= JobTitle::orderBy('name_en')->get();
        if ($this->jobtitle)
        {

            $this->jobs=JobTitle::where('name_en','like','%'.$jobtitle.'%')->get();        }

    }



    public function updatedjobtitle()
    {
        if ($this->jobtitle)
        {

            $this->jobs=JobTitle::where('name_en','like','%'.$this->jobtitle.'%')->take(5)->get();
        }
    }

    public function updatedjobid()
    {
        if($this->jobid)
        {
            $this->skills= Skill::where('job_title_id',$this->jobid)->take(5)->get();
        // dd($this->skills);
    }
    }
    public function increment()
    {
        $this->counter++;
    }


    public function render()
    {
        return view('livewire.search');
    }
}
