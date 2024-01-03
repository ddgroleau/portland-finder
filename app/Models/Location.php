<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected string $name = '';
    protected string $streetAddress = '';
    protected string $city = '';
    protected string $state = '';
    protected string $zipCode = '';
    protected string $phoneNumber = '';
    protected float $latitude = 0.0;
    protected float $longitude = 0.0;
    protected ?float $distance = null;
}
