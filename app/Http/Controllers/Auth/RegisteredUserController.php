<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // Validate form input including the profile_picture field
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'age' => 'required|integer|min:18',
            'gender' => 'required|in:male,female,other',
            'phone' => 'required|string|max:20',
            'country' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ensure profile_picture is an image file
        ]);

        // Handle file upload (profile picture) and create new user
        if ($request->hasFile('profile_picture')) {
            $profilePicture = $request->file('profile_picture');
            $profilePicturePath = $profilePicture->store('profile_pictures', 'public'); // Store the file in 'storage/app/public/profile_pictures'

            // Create a new user record in the database
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
                'age' => $request->input('age'),
                'gender' => $request->input('gender'),
                'phone' => $request->input('phone'),
                'country' => $request->input('country'),
                'date_of_birth' => $request->input('date_of_birth'),
                'profile_picture' => $profilePicturePath,
            ]);

            // Redirect to a success page or route
            return redirect()->route('home')->with('success', 'User registered successfully!');
        }

        // If file upload fails or profile_picture field is missing, handle accordingly
        return back()->withErrors(['profile_picture' => 'Failed to upload profile picture. Please try again.']);
    }

}
