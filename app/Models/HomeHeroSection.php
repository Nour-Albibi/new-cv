<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeHeroSection extends Model
{
    use HasFactory;
    protected $table='home_hero_section';
    public function images(){
        return $this->hasMany('App\Models\HighlightSectionImage','hero_section_id');
    }
}
