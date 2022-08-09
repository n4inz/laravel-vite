<?php

namespace Database\Factories;

use App\Models\Talents;
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

        // $talents = Talents::inRandomOrder()->first();
        return [
            'languages' => $LangRand,
            // 'talents_id' => $talents->id,
            // 'users_id' => $talents->users_id
        ];
    }
}
