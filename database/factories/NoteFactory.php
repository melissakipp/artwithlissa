<?php

// $ sail artisan db:seed

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => $this->faker->numberBetween(5, 16),
            'uuid' => $this->faker->unique()->uuid(),
            'user_id' => $this->faker->numberBetween(1, 12),
            'title' => $this->faker->word,
            'text' => $this->faker->text(200),
            'created_at' => $this->faker->dateTimeBetween('-0 days', '+1 month', null),
            'updated_at' => $this->faker->dateTimeBetween('-0 days', '+1 month', null)
        ];
    }
}


//public function definition()
//{
//    return [
//        'name' => fake()->name(),
//        'email' => fake()->unique()->safeEmail(),
//        'email_verified_at' => now(),
//        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//        'remember_token' => Str::random(10),
//    ];
//}
