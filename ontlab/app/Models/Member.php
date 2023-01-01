<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table = "member";
    protected $primaryKey = 'm_id';
    public function educations(){
        return $this->hasMany(Education::class,'m_id');
    }
    public function awards(){
        return $this->hasMany(Awards::class,'m_id');
    }
    public function prof_exps(){
        return $this->hasMany(Experience::class,'m_id');
    }
}
