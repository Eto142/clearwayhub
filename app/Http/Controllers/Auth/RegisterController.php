<?php



namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'full_name' => 'required|string|max:255',
            'ssn' => 'required|string|max:20|unique:users,ssn',
            'dob' => 'required|date',
            'mailing_address' => 'required|string|max:255',
            'physical_address' => 'nullable|string|max:255',
            'filing_status' => 'required|string',
            'dependents' => 'nullable|string',
            'income_amount' => 'required|numeric|min:0',
            'id_upload' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'purpose' => 'required|string',
            'employment_status' => 'required|string',
            'source_income' => 'required|string',
        ]);

        // Handle file upload
        if ($request->hasFile('id_upload')) {
            $filePath = $request->file('id_upload')->store('uploads/ids', 'public');
            $data['id_upload'] = $filePath;
        }

        $user = User::create($data);

        // return back()->with('success', 'Tax information submitted successfully!');
            // Redirect to a new page with the user's details
    return redirect()->route('tax.show', ['user' => $user->id]);
    }


    public function show(User $user)
{
    return view('tax.tax-details', compact('user'));
}

}
