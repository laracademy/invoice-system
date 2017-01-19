<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'email_address',
        'website_url',
        'phone_number',
    ];

    // relationships
    public function projects()
    {
        return $this->hasMany(\App\Models\Project::class, 'client_id');
    }
}
