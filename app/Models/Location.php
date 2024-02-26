<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected function getLatitude(): float
    {
        return $this->attributes["latitude"];
    }

    protected function getLongitude(): float
    {
        return $this->attributes["longitude"];
    }

    public function calculateDistance(float $originLatitude, float $originLongitude): float
    {
        $EARTH_RADIUS_MILES = 3959;

        $originLatitude *= M_PI / 180;
        $originLongitude *= M_PI / 180;
        $destLat = $this->getLatitude() * M_PI / 180;
        $destLng = $this->getLongitude() * M_PI / 180;

        $distance = 2 * asin(sqrt(
                pow(sin(($originLatitude - $destLat) / 2), 2) +
                cos($originLatitude) * cos($destLat) * pow(sin(($originLongitude - $destLng) / 2), 2)
            ));

        return round($distance * $EARTH_RADIUS_MILES,2);
    }
}
