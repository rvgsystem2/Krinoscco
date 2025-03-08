<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingConfirmation;
use App\Mail\NewBookingNotification;
use Illuminate\Validation\ValidationException;
use App\Models\Booking;

class BookingController extends Controller
{
    public function sendBookingEmail(Request $request)
    {
        try {
            // Validate form input
            $validatedData = $request->validate([
                'contact' => 'required|email', // Ensures valid email format
                'checkin' => 'required|date|after_or_equal:today', // Check-in must be today or later
                'checkout' => 'required|date|after:checkin', // Checkout must be after check-in
                'adults' => 'required|integer|min:1',
                'children' => 'required|integer|min:0',
                'rooms' => 'required|integer|min:1',
            ]);

            // Save booking to the database
            $booking = Booking::create($validatedData);

            // Send confirmation email to user
            Mail::to($booking->contact)->send(new BookingConfirmation($booking->toArray()));

            // Send booking notification to owner
            Mail::to("owner@example.com")->send(new NewBookingNotification($booking->toArray()));

            // Redirect to Thank You page
            return redirect()->route('thankyou');

        } catch (ValidationException $e) {
            return back()->withErrors($e->validator->errors())->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Something went wrong. Please try again.');
        }
    }

    public function thankyou()
    {
        return view('frontend.thankyou');
    }
}
