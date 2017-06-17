<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Invoice;
use App\Models\Project;
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

    /**
     *
     */
    public function create()
    {
        return view('invoices.create', [
            'invoice' => new Invoice(),
            'projects' => Project::getSelectbox(),
        ]);
    }

    public function store(Request $request)
    {
        // rules
        $rules = [
            'project_id' => 'required|exists:projects,id',
            'amount' => 'required',
        ];

        // validate
        $this->validate($request, $rules);

        // validation passed
        Invoice::create($request->only(['project_id', 'amount', 'due_at']));

        // return
        return redirect()->route('invoice')->with('success', ['The invoice was created']);
    }

}
