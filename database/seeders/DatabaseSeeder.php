<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();

        Listing::factory(6)->create();

        // Listing::create(
        //     [
        //         'title' => 'Full-Stack Engineer',
        //         'tags' => 'laravel, backend ,api',
        //         'company' => 'Stark Industries',
        //         'location' => 'New York, NY',
        //         'email' => 'email2@email.com',
        //         'website' => 'https://www.starkindustries.com',
        //         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        //     ]
        // );
        // Listing::create(
        //     [
        //         'title' => 'Laravel Developer',
        //         'tags' => 'laravel, vue, javascript',
        //         'company' => 'Wayne Enterprises',
        //         'location' => 'Gotham, NY',
        //         'email' => 'email3@email.com',
        //         'website' => 'https://www.wayneenterprises.com',
        //         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        //     ]
        // );
        // Listing::create(
        //     [
        //         'title' => 'Backend Developer',
        //         'tags' => 'laravel, php, api',
        //         'company' => 'Skynet Systems',
        //         'location' => 'Newark, NJ',
        //         'email' => 'email4@email.com',
        //         'website' => 'https://www.skynet.com',
        //         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        //     ]
        // );
    }
}
