<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Modules\CMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Validation\ValidationException;

class MainController extends Controller
{
    public function index()
    {
        $currentLocale = App::getLocale() ?? app()->getLocale() ?? app()->getFallbackLocale();

        $arParams = [
            'currentLang' => $currentLocale,
            'languageList' => [
                'en' => ['name' => 'EN', 'flag' => '🇺🇸'],
                'am' => ['name' => 'AM', 'flag' => '🇦🇲'],
            ],
        ];

        foreach ($arParams['languageList'] as $code => $arLang) {

            if ($code == $currentLocale) {
                $arParams['activeLang'] = array_merge($arLang, ['code' => $code]);;
                continue;
            }

            $arParams['switchTo'] = array_merge($arLang, ['code' => $code]);
        }

        return view('main', $arParams);
    }

    public function store(Request $request): RedirectResponse
    {
        try {

            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'message' => 'string',
            ]);

            Message::create($validated);

            (new CMail())
                ->setBody($validated)
                ->send();

        } catch (ValidationException $exception) {
            return redirect(url()->previous() . '#contact-us')
                ->withInput()
                ->withErrors($exception->errors());
        }

        return redirect(url()->previous() . '#contact-us')
            ->with('success', true);
    }

    public function privacy()
    {        
        return view('privacy');
    }
}
