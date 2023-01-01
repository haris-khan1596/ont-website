<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Contracts\EventDispatcher\Event;

class Domain extends Model
{
    use HasFactory;
    protected $table = 'domains';
    protected $primaryKey = 'd_id';
    public function publications(){
        return $this->belongsToMany(Publication::class,'domain_publication','pub_id','d_id');
    }
    public function projects(){
        return $this->belongsToMany(Projects::class,'domain_project','proj_id','d_id');
    }
    public function events(){
        return $this->belongsToMany(Events::class,'domain_event','event_id','d_id');
    }
    
}
