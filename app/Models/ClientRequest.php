<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'ip_address',
        'user_agent',
        'referer',
        'latitude',
        'longitude',
    ];

    public static function capture(?float $latitude, ?float $longitude)
    {
        $ip = !isset($_SERVER['HTTP_X_FORWARDED_FOR'])
            ? filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP)
            : filter_var($_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP);

        $clientRequest = ClientRequest::factory()->make([
            'ip_address' => !$ip ? null : $ip,
            'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? null,
            'referer' => $_SERVER['HTTP_REFERER'] ?? null,
            'latitude' => $latitude,
            'longitude' => $longitude
        ]);

        $clientRequest->saveQuietly();
    }

}