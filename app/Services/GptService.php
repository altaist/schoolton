<?php

namespace App\Services;


class GptService extends BaseService
{
    public function getCourses($message)
    {
        return $this->sendGptRequest($message);
    }

    private function sendGptRequest($message)
    {
        $apiKey = env('GPT_API_KEY');
        $endpoint = env('GPT_API_ENDPOINT', 'https://api.openai.com/v1/chat/completions');

        $client = new \GuzzleHttp\Client();

        $messages = [
            ['role' => 'system', 'content' => 'прочитай текст и создай для него список тем для учебного курса.'],
            ['role' => 'system', 'content' => 'Результат дай в виде json объекта с полем title - нвзание курса и полем topics - массив, каждый элемент которого является объект с полем title и полем quiz которое содержит тест с 3 вопросами в поле questions, для каждого из которых в поле txt содержится текст вопроса и  даются 4 варианта ответа в поле vs, номер правильного варианта помечается в поле as'],
            ['role' => 'system', 'content' => 'Не добавляй в результат ничего кроме json'],
            ['role' => 'user', 'content' => $message],
            // ['role' => 'user', 'content' => 'Ардуино - это микроконтроллер. У него есть 13 портов: четыре аналоговых и 14 цифровых'],
            //['role' => 'user', 'content' => 'Напиши для квадратных уравнений mindmap в формате графов в json с полями name, children. Не нужно узел Приложения. Обязательно узел примеры. Объясни подробно, на русском. Перед и после json не нужно объяснять текст'],
            //['role' => 'user', 'content' => 'Напиши для квадратных уравнений mindmap в формате графов в json. Объясни подробно, на русском, дай примеры. Перед и после json не нужно объяснять текст'],
        ];

        // Make a POST request to the API
        $response = $client->post($endpoint, [
            'headers' => [
                'Authorization' => "Bearer $apiKey",
            ],
            'json' => [
                'model' => 'gpt-4o',
                'max_tokens' => 1000, // Adjust the max tokens as needed
                'messages' => $messages,
            ],
            'proxy' => 'http://user156811:eb49hn@45.159.182.77:5442/',
            'connect_timeout' => 10
        ]);


        $data = $this->processResult(json_decode($response->getBody(), true));
        // dd($data);
        return $data;
    }

    private function processResult($data)
    {
        //dd($data);
        return $data['choices'][0]['message']['content'];
    }
}
