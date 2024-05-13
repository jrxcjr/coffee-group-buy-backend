<?php

namespace Database\Factories;

use App\Models\UserProfile;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Database\Factories\UserProfilesFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => fake()->userName,
            'email' => fake()->unique()->safeEmail(),
            'password' => static::$password ??= Hash::make('password'),
            'user_profile_id' => 1,
            /*
                this should be used instead =>  'user_profile_id'   => function () {
            return factory(App\User::class)->create()->id;
        }
            */
            'remember_token' => Str::random(10),
            'public_id' => Str::uuid(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    /**
     * Indicate that the model's email address is created as a verified
     */
    public function verified():static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => now(),
        ]);
    }

    // public function withProfile():static
    // {
    //     return $this->afterCreating(fn(User $user) => [
    //         $user->profile()->create(UserProfile::factory()->create()->toArray())]);
    // }
}
