<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\ScratchCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScratchCardController extends Controller
{
    public function showPinForm()
{
    return view('student.enter_pin');
}

public function verifyPin(Request $request)
{
    $request->validate([
        'pin' => 'required|string',
    ]);

    $card = ScratchCard::where('pin', $request->pin)->first();

    if (!$card) {
        return back()->withErrors(['pin' => 'Invalid PIN']);
    }

    if ($card->is_used) {
        return back()->withErrors(['pin' => 'This PIN has already been used.']);
    }

    // Mark as used
    $card->update([
        'is_used' => true,
        'used_by' => Auth::id(),
        'used_at' => now(),
    ]);

    // Store access in session
    session(['result_access_granted' => true]);

    return redirect()->route('student_result');
}
}
