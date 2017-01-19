<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Invoice;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function listing(Invoice $invoice)
    {
        return view('invoices.payments.listing', [
            'invoice' => $invoice,
        ]);
    }

    public function create(Invoice $invoice)
    {
        return view('invoices.payments.create', [
            'payment' => new Payment,
            'invoice' => $invoice,
        ]);
    }

    public function store(Request $request, Invoice $invoice)
    {
        // validate our amount
        $this->validate($request, ['amount' => 'required']);

        $invoice->payments()->create(['amount' => $request->input('amount')]);

        // return
        return redirect()->route('invoice')->with('success', ['The payment has been added to the invoice']);
    }

    public function edit(\App\Models\Payment $payment)
    {
        return view('invoices.payments.edit', [
            'payment' => $payment
        ]);
    }

    public function update(Request $request)
    {
        // validate
        $this->validate($request, ['amount' => 'required']);

        // find the payment
        $payment = Payment::find($request->input('id'));

        // update the payment
        $payment->amount = $request->input('amount');
        $payment->save();

        // return
        return redirect()->route('invoice.payments.listing', $payment->invoice->id)->with('success', ['The payment was updated successfully']);
    }

    public function destroy(\App\Models\Payment $payment)
    {
        $payment->delete();

        return redirect()->route('invoice.payments.listing', $payment->invoice->id)->with('success', ['The payment was delete successfully']);
    }

}