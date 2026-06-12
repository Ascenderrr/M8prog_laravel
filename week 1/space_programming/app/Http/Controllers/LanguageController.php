<?php

namespace App\Http\Controllers;

class LanguageController extends Controller
{
    private function getLanguages()
    {
        return [
            (object) [
                'name' => 'NebulaScript',
                'description' => 'Een event-gedreven taal voor autonome satellieten en ruimtestations, ontworpen voor veilige remote updates en microgravity-coördinatie.',
                'icon' => 'nebulascript.svg',
            ],
            (object) [
                'name' => 'OrbitLang',
                'description' => 'Een taal voor baanberekeningen en baanoptimalisatie, speciaal gebouwd voor het plannen van lanceringen en het berekenen van gravitationele assist.',
                'icon' => 'orbitlang.svg',
            ],
            (object) [
                'name' => 'AstroPyxis',
                'description' => 'Een navigatie-gerichte taal voor het bepalen van sterposities en richtingen in diepe ruimte, gebaseerd op pulsarreferenties.',
                'icon' => 'astropyxis.svg',
            ],
        ];
    }

    public function index()
    {
        $languages = $this->getLanguages();
        return view('languages', compact('languages'));
    }

    public function details($lang)
    {
        $languages = $this->getLanguages();

        $filtered = array_filter($languages, function ($language) use ($lang) {
            return $language->name === $lang;
        });

        $filtered = array_values($filtered);

        if (empty($filtered)) {
            abort(404);
        }

        $language = $filtered[0];

        return view('language-details', compact('language'));
    }
}
