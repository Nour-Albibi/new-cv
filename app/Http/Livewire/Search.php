<?php

namespace App\Http\Livewire;

use App\Models\JobTitle;
use App\Models\Skill;
use Livewire\Component;

class Search extends Component
{

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

            $this->jobs=JobTitle::where('name_en','like','%'.$this->jobtitle.'%')->take(25)->get();
        }
    }

    public function updatedjobid()
    {
        if($this->jobid)
        {
            $this->skills= Skill::where('job_title_id',$this->jobid)->take(25)->get();
        // dd($this->skills);
    }
    }



    public function render()
    {  $skills=Skill::where('is_general',1)->get();
        $jobs=JobTitle::where('name_en','like','%software%')->take(8)->get();
        return view('livewire.search',compact('skills','jobs'));
    }
}
