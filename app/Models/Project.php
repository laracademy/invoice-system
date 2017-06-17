<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'client_id','name','notes','url'
    ];

    // relationships
    public function client()
    {
        return $this->hasOne(\App\Models\Client::class, 'id', 'client_id');
    }

    // helpers
    public static function getSelectbox()
    {
        return Project::orderBy('name')->get()->pluck('name', 'id');
    }

}
