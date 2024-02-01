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

    public static function create(?float $latitude, ?float $longitude)
    {
        $ip = !isset($_SERVER['HTTP_X_FORWARDED_FOR']) 
            ? filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP) 
            : filter_var($_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP);

        $clientRequest = ClientRequest::factory()->make([
            'ip_address' => !$ip ? null : $ip,
            'user_agent' => isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : null,
            'referer' => isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null,
            'latitude' => $latitude,
            'longitude' => $longitude
        ]);

        $clientRequest->saveQuietly();
    }

}