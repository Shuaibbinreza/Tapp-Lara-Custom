<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserExperience;
use App\Models\UserPersonalDetail;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UserProfile extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the incoming request data
        // $validatedData = $request->validate([
        //     'firstnameInput' => 'required|string|max:255',
        //     'lastnameInput' => 'required|string|max:255',
        //     'phonenumberInput' => 'required|string|max:255',
        //     'emailInput' => 'required|email|max:255',
        //     'JoiningdatInput' => 'required|date',
        //     'skillsInput' => 'required|array',
        //     'designationInput' => 'required|string|max:255',
        //     'websiteInput1' => 'required|string|max:255',
        //     'cityInput' => 'required|string|max:255',
        //     'countryInput' => 'required|string|max:255',
        //     'zipcodeInput' => 'required|string|max:10',
        //     'description' => 'required|string', // Updated to match the new field name
        // ]);
        // dd($request->input('JoiningdatInput'));
        $firstnameInput = $request->input('firstnameInput');
        $lastnameInput = $request->input('lastnameInput');
        $phonenumberInput = $request->input('phonenumberInput');
        $emailInput = $request->input('emailInput');
        $joiningdatInput = $request->input('JoiningdatInput');
        $skillsInput = $request->input('skillsInput', []); // Default to an empty array if not present
        $designationInput = $request->input('designationInput');
        $websiteInput1 = $request->input('websiteInput1');
        $cityInput = $request->input('cityInput');
        $countryInput = $request->input('countryInput');
        $zipcodeInput = $request->input('zipcodeInput');
        $description = $request->input('descriptionInput');

        // Convert the Joining Date format from 'd M, Y' to 'Y-m-d'
        $formattedDate = Carbon::createFromFormat('d M, Y', $joiningdatInput)->format('Y-m-d');
        // dd($formattedDate);

        // Use updateOrCreate to either update an existing record or create a new one
        $userPersonalDetail = UserPersonalDetail::updateOrCreate(
            ['user_id' => auth()->id()], // Conditions to find the record
            [
                'firstnameInput' => $firstnameInput,
                'lastnameInput' => $lastnameInput,
                'phonenumberInput' => $phonenumberInput,
                'emailInput' => $emailInput,
                'JoiningdatInput' => $formattedDate, // Use the formatted date
                'skillsInput' => json_encode($skillsInput), // Store as JSON
                'designationInput' => $designationInput,
                'websiteInput1' => $websiteInput1,
                'cityInput' => $cityInput,
                'countryInput' => $countryInput,
                'zipcodeInput' => $zipcodeInput,
                'description' => $description,
            ]
        );

        // Redirect or return response as needed
        return redirect()->back()->with('success', 'User personal details saved successfully!');
    }

    public function experienceForm(Request $request)
    {
        // dd($request->all());
        $userId = auth()->id(); // Get the authenticated user's ID

        foreach ($request->job_title as $index => $jobTitle) {
            // Prepare attributes to search for existing records
            $attributes = [
                'user_id' => $userId,
                'job_title' => $jobTitle,
                'company_name' => $request->company_name[$index],
                // Add other fields if necessary to uniquely identify the experience
            ];

            // Prepare values to be updated or created
            $values = [
                'experience_start_year' => $request->experience_start_year[$index],
                'experience_end_year' => $request->experience_end_year[$index],
                'job_description' => $request->job_description[$index],
            ];

            // Perform update or create
            UserExperience::updateOrCreate($attributes, $values);
        }

        // Redirect back or return a response
        return redirect()->back()->with('success', 'Experiences saved successfully!');
    }

    public function updateAvatar(Request $request)
    {
        // $request->validate([
        //     'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate the uploaded image
        // ]);

        $user = Auth::user();

        // Check if the request has a file
        if ($request->hasFile('avatar')) {
            // Generate a unique filename
            $imageName = time() . '.' . $request->avatar->extension();

            // Move the uploaded file to the public/images directory
            $request->avatar->move(public_path('images'), $imageName);

            // Update the user's avatar column in the database
            $user->avatar = $imageName;
            $user->save();
        }

        // Redirect back with a success message (optional)
        return redirect()->back()->with('success', 'Avatar updated successfully!');
    }


}
