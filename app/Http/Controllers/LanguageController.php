<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * Dil değiştirme fonksiyonu
     *
     * @param string $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function switchLang($locale)
    {
        // Desteklenen dilleri kontrol et
        if (!in_array($locale, ['en', 'tr', 'az'])) {
            $locale = 'tr'; // Varsayılan dil
        }

        // Dil tercihini session'a kaydet
        Session::put('locale', $locale);

        // Uygulama dilini değiştir
        App::setLocale($locale);

        // Kullanıcıyı geldiği sayfaya yönlendir
        return redirect()->back();
    }
}
