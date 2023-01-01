<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $privateKey = 'proj_id';
    public function publications () {
        return $this->hasMany(Publication::class);
    }
}
