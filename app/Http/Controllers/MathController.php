<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MathController extends Controller
{
    public function showForm()
    {
        return view('math');
    }

    public function solve(Request $request)
    {
        $problem = $request->input('problem');

        $response = Http::withToken(env('OPENAI_API_KEY'))
            ->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-4o',
                'messages' => [
                    [
                      'role' => 'system',
                      'content' => "Anda adalah tutor matematika yang ringkas dan akurat. Berikan solusi langkah demi langkah yang jelas dan bernomor serta jawaban akhir. Pastikan langkah-langkahnya ringkas. JANGAN mengungkapkan rangkaian pemikiran atau pertimbangan internal."
                    ],
                    [
                      'role' => 'user',
                      'content' => "Selesaikan soal matematika ini dan tunjukkan solusi langkah demi langkah. Soal:\n\n" . $problem
                    ]
                ],
                'temperature' => 0.0,
                'max_tokens' => 800,
            ]);

        $answer = $response->json()['choices'][0]['message']['content'] ?? 'Error: no response';

        return view('math_result', compact('problem', 'answer'));
    }
}
