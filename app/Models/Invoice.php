<?php

namespace App\Models;

use App\Traits\CurrencyTrait;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use CurrencyTrait;

    protected $table = 'invoices';

    protected $fillable = [
        'project_id', 'amount', 'due_at', 'paid_at'
    ];

    protected $dates = [
        'due_at', 'paid_at'
    ];

    // relationships
    public function project()
    {
        return $this->hasOne(\App\Models\Project::class, 'id', 'project_id');
    }

    public function payments()
    {
        return $this->hasMany(\App\Models\Payment::class, 'invoice_id', 'id');
    }

    // attributes
    public function setAmountAttribute($value)
    {
        $this->attributes['amount'] = $value * 100;
    }

    // helpers

    public function isPaid()
    {
        return ! empty($this->paid_at);
    }

    public function amountOwing()
    {
        return $this->amount - $this->payments->sum('amount');
    }

}
