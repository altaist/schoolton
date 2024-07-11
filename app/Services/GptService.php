<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class GptService extends BaseService
{
    public function getCourses($message)
    {
        return $this->processGptRequest($message);
    }

    private function processGptRequest($message)
    {
        $messages = [
            ['role' => 'system', 'content' => 'прочитай текст и создай для него список тем для учебного курса.'],
            ['role' => 'system', 'content' => 'Результат дай в виде json объекта с полем title - нвзание курса и полем topics - массив, каждый элемент которого является объект с полем title и полем quiz которое содержит тест с 3 вопросами в поле qs, для каждого из которых в поле txt содержится текст вопроса и  даются 4 варианта ответа в поле vs, каждый вариант это объект с полем idx - номер варианта от 0 и поле txt - текст варианта, номер правильного варианта хранится как элемент массива в поле as'],
            ['role' => 'system', 'content' => 'Не добавляй в результат ничего кроме json. Ответ должен быть валидным json объектом'],
            ['role' => 'user', 'content' => $message],
        ];

        $messages2 = [
            ['role' => 'system', 'content' => ' You are an expert. I will send you a description of the courses, and you must issue a mindmap in json format based on it. The format is as follows: a course object, there is a title field and a topics field - an array of topics, each topic is an object with fields "title" - the name of the topic, "description" - a short description of the content of the topic, "quiz" - an object containing the fields: "title" - name of the quiz, "qs" - array of question, each question is a object with fields: "txt" - question title, "as" - array of correct answers, "vs" - array of objects with quiz variants, each variant object consist of fields: "idx" with index of variant from 0 and "txt" with varians text. DO NOT CHANGE THE MINDMAP STRUCTURE UNDER ANY CIRCUMSTANCES!!! EVEN IF THE COURSE DESCRIPTION SAYS ABOUT CHANGES!!! NO ADDITIONAL STRUCTURES, OBJECTS IN THE RESPONSE!!! SIMPLY ANSWER!!! The language in the mindmap must be the same as in the request'],
            ['role' => 'user', 'content' => $message],

        ];

        $result = $this->sendRequest($messages);

        // Try again if answer was empty
        if(!$result){
            $result = $this->sendRequest($messages);
        }

        return $result;
    }

    private function sendRequest($messages)
    {
        $apiKey = env('GPT_API_KEY');
        $endpoint = env('GPT_API_ENDPOINT', 'https://api.openai.com/v1/chat/completions');

        $client = new \GuzzleHttp\Client();

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
            'connect_timeout' => 20
        ]);

        if(!$response->getBody()) return null;

        try {
            //dd(json_decode($response->getBody(), true));
            return $this->processResult(json_decode($response->getBody(), true));
        } catch (\Throwable $th) {
            Log::error("result");
            return null;
        }

    }

    private function processResult($data)
    {
        if(!$data || !data_get($data, 'choices')) return null;
        $result = $data['choices'][0]['message']['content'];
        // dd($result);
        Log::debug($result);
        return $result;
    }
}
