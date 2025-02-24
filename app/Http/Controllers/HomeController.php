<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

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
        $icookie = $request->cookie(self::COOKIE_NAME, '');
        [$experiments, $newIcookie, $flags] = $this->splitUser($request, $icookie);

        // Получаем последнее значение флага price_block более безопасным способом
        $priceBlockVariant = 'default';
        if (isset($flags['price_block']) && is_array($flags['price_block']) && !empty($flags['price_block'])) {
            $priceBlockVariant = $flags['price_block'][array_key_last($flags['price_block'])];
        }

        $response = response()->view('astro2', [
            'experiments' => $experiments,
            'flags' => [
                'price_block' => [
                    'main' => 'main',
                    'separate' => 'separate'
                ],
                'redir' => $priceBlockVariant
            ]
        ]);

        if ($icookie !== $newIcookie) {
            $response->cookie(
                self::COOKIE_NAME,
                $newIcookie,
                60 * 24 * 365,
                '/',
                null,
                false,
                false
            );
        }

        return $response;
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
