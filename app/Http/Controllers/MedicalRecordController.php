<?php
namespace App\Http\Controllers;

use App\Models\MedicalRecord;
use App\Models\Patient;
use App\Models\Doctor;
use Illuminate\Http\Request;

class MedicalRecordController extends Controller
{
    public function index()
    {
        $records = MedicalRecord::with('patient', 'doctor')->get();
        return view('medical_records.index', compact('records'));
    }

    public function create()
    {
        $patients = Patient::all();
        $doctors = Doctor::all();
        return view('medical_records.create', compact('patients', 'doctors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required',
            'doctor_id' => 'required',
            'details' => 'required',
            'prescriptions' => 'required',
        ]);

        MedicalRecord::create($request->all());
        return redirect()->route('medical_records.index')->with('success', 'Medical record added successfully.');
    }
}
