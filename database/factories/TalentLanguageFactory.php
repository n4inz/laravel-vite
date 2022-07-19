<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TalentLanguage>
 */
class TalentLanguageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $lang = [
            'Indonesia',
            'China',
            'English',
            'Hindi',
            'Rusia',
            'Turky',
            'Arab',
            'Spanyol',
            'Italy',
            'Germany',
            'Belgia'
        ];

        $LangRand = $lang[Rand(0, count($lang) - 1)];
        return [
            'languages' => $LangRand,
            'talents_id' => mt_rand(1,10),
            'users_id' => mt_rand(1,10)
            
            // 'users_id' => mt_rand(1,10)
        ];
    }
}
