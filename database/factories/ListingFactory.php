<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Strings;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $tags = ['laravel,php,REST', 'Backend,Python,Javascript', 'Strike,Web Dev,api', 'Java,Kotlin,ViewModel', 'Dart,Flutter,Mobile'];
        $ridx = array_rand($tags);
        return [
            'title' => $this->faker->sentence(),
            'tags' => $tags[$ridx],
            'company' => $this->faker->company(),
            'location' => $this->faker->streetAddress(),
            'email' => $this->faker->companyEmail(),
            'website' => $this->faker->url(),
            'description' => $this->faker->paragraph(5)
        ];
    }
}
