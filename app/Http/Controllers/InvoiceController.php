<?php
namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Appointment;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::with('appointment')->get();
        return view('invoices.index', compact('invoices'));
    }

    public function create()
    {
        $appointments = Appointment::all();
        return view('invoices.create', compact('appointments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'appointment_id' => 'required|exists:appointments,id',
            'amount' => 'required|numeric',
            'status' => 'required|in:Pending,Paid,Failed',
        ]);

        Invoice::create($request->all());
        return redirect()->route('invoices.index')->with('success', 'Invoice created successfully.');
    }

    public function edit(Invoice $invoice)
    {
        $appointments = Appointment::all();
        return view('invoices.edit', compact('invoice', 'appointments'));
    }

    public function update(Request $request, Invoice $invoice)
    {
        $request->validate([
            'appointment_id' => 'required|exists:appointments,id',
            'amount' => 'required|numeric',
            'status' => 'required|in:Pending,Paid,Failed',
        ]);

        $invoice->update($request->all());
        return redirect()->route('invoices.index')->with('success', 'Invoice updated successfully.');
    }

    public function destroy(Invoice $invoice)
    {
        $invoice->delete();
        return redirect()->route('invoices.index')->with('success', 'Invoice deleted successfully.');
    }
}
