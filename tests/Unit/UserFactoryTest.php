<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserFactoryTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    /**
     * A basic test that checks if the UserFactory is programmed correctly
     */
    public function test_user_factory_is_working(): void
    {
        // Arrange
        $user = User::factory()->create();


        // Act
        $createdUser = User::find($user->id);

        // Assert
        $this->assertDatabaseHas('users', [
            'email' => $createdUser->email,
        ]);

        $this->assertSame($user->email, $createdUser->email);
    }
}
