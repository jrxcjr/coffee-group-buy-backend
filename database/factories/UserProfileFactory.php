<?php

namespace Database\Factories;

use App\Models\UserProfile;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserProfileFactory extends Factory
{
    protected $model = UserProfile::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'address' => fake()->streetAddress(),
            'address_complement' => fake()->secondaryAddress(),
            'cellphone' => fake()->e164PhoneNumber(),
            'public_id' => Str::uuid(),
        ];
    }
}
