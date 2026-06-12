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
                'features' => [
                    'Real-time telemetry processing',
                    'Fault-tolerant event handling',
                    'Microgravity resource scheduling',
                    'Secure OTA update protocol',
                ],
            ],
            (object) [
                'name' => 'OrbitLang',
                'description' => 'Een taal voor baanberekeningen en baanoptimalisatie, speciaal gebouwd voor het plannen van lanceringen en het berekenen van gravitationele assist.',
                'icon' => 'orbitlang.svg',
                'features' => [
                    'Gravitational assist calculator',
                    'Launch window optimizer',
                    'Delta-v budget analysis',
                    'Multi-body trajectory simulation',
                ],
            ],
            (object) [
                'name' => 'AstroPyxis',
                'description' => 'Een navigatie-gerichte taal voor het bepalen van sterposities en richtingen in diepe ruimte, gebaseerd op pulsarreferenties.',
                'icon' => 'astropyxis.svg',
                'features' => [
                    'Pulsar-based positioning system',
                    'Deep space inertial navigation',
                    'Stellar cartography mapping',
                    'Interstellar trajectory correction',
                ],
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
