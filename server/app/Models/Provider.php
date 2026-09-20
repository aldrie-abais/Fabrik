<?php

namespace App\Models;

use Database\Factories\ProviderFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Provider extends Authenticatable
{
    /** @use HasFactory<ProviderFactory> */
    use HasFactory;

    /**
     * Attributes that may be assigned through mass assignment.
     *
     * @var list<string>
     */
    protected $fillable = [
        'shop_name',
        'email',
        'phone',
        'password',
    ];

    /**
     * Attributes hidden from JSON responses.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Attribute casts.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
            'is_active' => 'boolean',
        ];
    }
}