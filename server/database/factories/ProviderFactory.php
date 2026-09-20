<?php

namespace Database\Factories;

use App\Models\Provider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends Factory<Provider>
 */
class ProviderFactory extends Factory
{
    /**
     * The model represented by this factory.
     *
     * @var class-string<Provider>
     */
    protected $model = Provider::class;

    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'shop_name' => fake()->company(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->optional()->numerify('09#########'),
            'password' => static::$password ??= Hash::make('password'),
            'is_active' => true,
        ];
    }
}