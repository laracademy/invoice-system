<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Http\Requests\Projects\ProjectStore;
use App\Http\Requests\Projects\ProjectUpdate;

class InvoiceController extends Controller
{

    /**
     *
     */
    public function index()
    {
        return view('invoices.index', [
            'invoices' => Invoice::all(),
        ]);
    }

}
