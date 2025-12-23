<?php

namespace App\Http\Controllers\clients;
use App\Models\clients\Tours;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatbotController extends Controller
{


    private $tours;


    public function __construct()
    {
        $this->tours = new Tours();
    }

    public function reply(Request $request)
    {
        $message = strtolower(trim($request->input('message')));

        $toursList = $this->tours->getToursStartedBeforeToday();
        if (!$message) {
            return response()->json([
                'reply' => 'Bạn vui lòng nhập câu hỏi nhé 😊'
            ]);
        }

        $apiKey = 'AoeBC5D3gpHaLhetHWEmnkhEZ618PrPGTm3UvbtT3zR7jz5oYi06JQQJ99BJACYeBjFXJ3w3AAABACOGsJtP';
        $endpoint = 'https://rg-openai-move-agent-nonprod.cognitiveservices.azure.com'; // https://xxx.openai.azure.com
        $deployment = 'gpt-4.1'; // deployment name đã tạo sẵn
        $apiVersion = '2025-01-01-preview';

        if (!$apiKey || !$endpoint || !$deployment) {
            return response()->json([
                'reply' => 'Hệ thống chatbot chưa được cấu hình Azure OpenAI.'
            ]);
        }

        $payload = [
            'messages' => [
                [
                    'role' => 'system',
                    'content' => "Bạn là chatbot tư vấn du lịch, trả lời ngắn gọn, thân thiện, bằng tiếng Việt và các câu trả lời thêm vào các tag html để đẹp hơn.
                    Danh sách tour hiện có sử dụng để tư vấn tour:
                    $toursList
                    "
                ],
                [
                    'role' => 'user',
                    'content' => $message
                ]
            ],
            'temperature' => 0.7
        ];

        $url = rtrim($endpoint, '/') .
            '/openai/deployments/' . $deployment .
            '/chat/completions?api-version=' . $apiVersion;

        $response = Http::withHeaders([
                'api-key' => $apiKey,
                'Content-Type' => 'application/json',
            ])
            ->timeout(30)
            ->post($url, $payload);

        if (!$response->successful()) {
            return response()->json([
                'error' => true,
                'status' => $response->status(),
                'body' => $response->json(),
            ], 500);
        }

        $responseData = $response->json();

        $reply = $responseData['choices'][0]['message']['content']
            ?? 'Xin lỗi 😅 tôi chưa hiểu câu hỏi. Bạn có thể hỏi lại rõ hơn không?';

        return response()->json([
            'reply' => $reply
        ]);
    }
}
