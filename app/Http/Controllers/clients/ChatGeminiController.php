<?php

namespace App\Http\Controllers\Clients;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

class ChatGeminiController extends Controller
{
    public function chat(Request $request)
    {
        $request->validate([
            'message' => 'required|string'
        ]);

        $client = new Client();

        try {
            $response = $client->post(
                'https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=' . env('GEMINI_API_KEY'),
                [
                    'headers' => [
                        'Content-Type' => 'application/json',
                    ],
                    'json' => [
                        'contents' => [
                            [
                                'role' => 'user',
                                'parts' => [
                                    [
                                        'text' =>
                                            "Bạn là chatbot tư vấn du lịch cho website Ecotour. 
                                            Trả lời ngắn gọn, thân thiện, bằng tiếng Việt.\n\n" .
                                            $request->message
                                    ]
                                ]
                            ]
                        ]
                    ],
                    'timeout' => 20,
                ]
            );

            $data = json_decode($response->getBody(), true);

            return response()->json([
                'reply' => $data['candidates'][0]['content']['parts'][0]['text']
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'reply' => 'Xin lỗi, chatbot đang bận. Vui lòng thử lại sau.'
            ], 500);
        }
    }
}
