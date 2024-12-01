<?php
namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        return Doctor::all(); // Return all doctors
    }

    public function show($id)
    {
        return Doctor::findOrFail($id); // Find a doctor by ID
    }

    public function store(Request $request)
    {
        $doctor = Doctor::create($request->all()); // Create a new doctor
        return response()->json($doctor, 201); // Return the newly created doctor
    }

    public function update(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->update($request->all()); // Update the doctor
        return response()->json($doctor);
    }

    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete(); // Delete the doctor
        return response()->json(null, 204); // Return no content after deletion
    }
}
