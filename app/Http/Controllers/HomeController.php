<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class HomeController extends BaseController
{
    private const COOKIE_NAME = '_ymab_param';
    private const METRIKA_ID = '99885577';

    private function processFlags($splitterFlags)
    {
        $flags = [];
        foreach ($splitterFlags as $flagInfo) {
            if ($flagInfo['t'] === 'flag') {
                $key = $flagInfo['n'];
                $value = $flagInfo['v'];
                $flags[$key][] = $value;
            }
        }
        return $flags;
    }

    private function splitUser(Request $request, $icookie = '')
    {
        try {
            $response = Http::timeout(2)->get('https://uaas.yandex.ru/v1/exps', [
                'client_id' => 'metrika.' . self::METRIKA_ID,
                'url' => $request->fullUrl(),
                'i' => $icookie,
                'client_feature' => (object)[]
            ]);

            if ($response->successful()) {
                $splitterData = $response->json();
            } else {
                throw new \Exception('UAAS request failed');
            }
        } catch (\Exception $e) {
            Log::error('UAAS error: ' . $e->getMessage());
            $splitterData = [
                'flags' => [],
                'i' => $icookie,
                'experiments' => '',
            ];
        }

        $flags = $this->processFlags($splitterData['flags']);
        $newIcookie = $splitterData['i'];
        $experiments = $splitterData['experiments'];

        return [$experiments, $newIcookie, $flags];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Генерируем уникальный токен доступа к форме
        $request->session()->put('form_access_token', Str::random(40));
        $request->session()->put('form_access_time', now());
        
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Content $content)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Content $content)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Content $content)
    {
        //
    }
}
