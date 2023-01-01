<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    use HasFactory;
    protected $table = 'collaborators';
    protected $primarKey = 'colab_id';
    public function events(){
        return $this->belongsToMany(Events::class,'collabs_event','event_id','colab_id');
    }
    public function projects(){
        return $this->belongsToMany(Projects::class,'collabs_project','proj_id','colab_id');
    }
}
