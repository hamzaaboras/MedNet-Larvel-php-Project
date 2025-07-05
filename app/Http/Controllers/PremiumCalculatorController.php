<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PremiumCalculatorController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function calculate(Request $request)
    {


        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'age' => 'required|integer|min:0|max:120',
            'gender' => 'required|in:male,female',
            'plan_type' => 'required|in:basic,family,senior',
            'has_conditions' => 'boolean',
            'is_smoker' => 'boolean',
        ]);

        $basePremium = match ($validated['plan_type']) {
            'basic' => 100,
            'family' => 150,
            'senior' => 200,
            default => 100,
        };

        $premium = $basePremium;
        $premium += $validated['age'] * 1.5;
        if ($validated['has_conditions']??false) $premium += 75;
        if ($validated['is_smoker']??false) $premium += 100;

        $quote = Quote::create([
            ...$validated,
            'calculated_premium' => $premium,
        ]);

        return redirect()->route('quote.show', $quote->id);
    }

    public function downloadPDF($id)
    {
        $quote = Quote::findOrFail($id);
        $pdf = Pdf::loadView('pdf', compact('quote'));
        return $pdf->download('insurance-quote.pdf');
    }

    public function dashboard()
    {
        $quotes = Quote::latest()->get();
        return view('dashboard', compact('quotes'));
    }

    public function show($id)
    {
        $quote = Quote::findOrFail($id);
        return view('result', compact('quote'));
    }
}
