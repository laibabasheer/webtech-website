<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class JobSeeder extends Seeder
{
    public function run()
    {
        Job::create([
            'title' => 'Software Developer',
            'location' => 'New York',
            'salary' => '60000',
            'description' => 'Developing software applications.'
        ]);

        Job::create([
            'title' => 'Web Developer',
            'location' => 'San Francisco',
            'salary' => '70000',
            'description' => 'Building websites and web applications.'
        ]);

        Job::create([
            'title' => 'Software Developer',
            'location' => 'New York',
            'salary' => '60000',
            'description' => 'Developing software applications.'
        ]);

        Job::create([
            'title' => 'Web Developer',
            'location' => 'San Francisco',
            'salary' => '70000',
            'description' => 'Building websites and web applications.'
        ]);
    }
}
