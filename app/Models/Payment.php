<?php

namespace App\Models;

use App\Traits\CurrencyTrait;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

    use CurrencyTrait;

    protected $fillable = [
        'invoice_id', 'amount'
    ];

    // events
    public static function boot()
    {
        parent::boot();

        static::saved(function($payment) {
            // check amount versus paid
            if($payment->invoice->amount <= $payment->invoice->payments->sum('amount')) {
                $payment->invoice->paid_at = \Carbon\Carbon::now();
                $payment->invoice->save();
            }
        });
    }

    // relationship

    public function invoice()
    {
        return $this->belongsTo(\App\Models\Invoice::class, 'invoice_id', 'id');
    }

    // accessor mutator
    public function setAmountAttribute($value)
    {
        // remove everything except for digits and periods
        $value = preg_replace('/[^0-9.]/', '', $value);

        // ensure that the value is not empty
        if(strlen($value) <= 0) {
            $value = '0.00';
        }

        // finally set the value to the attribute
        $this->attributes['amount'] = number_format($value, 2, '', '');
    }
}
