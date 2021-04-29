<?php

namespace Database\Factories;

use App\Models\Announcement;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

// php artisan make:factory AnnouncementFactory

class AnnouncementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Announcement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->text,
            'start_date' => date('Y-m-d'),
            'end_date' => date('Y-m-d', strtotime(date('Y-m-d'). ' + ' . rand(1, 10) . ' days')),
            'created_by' => 0,
            'is_active' => 1
        ];
    }
}