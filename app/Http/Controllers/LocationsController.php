<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class LocationsController extends Controller
{
    public function show(string $coords) : Response
    {
        if(!isset($coords)) {
            return new Response(json_encode(["message"=>"invalid coordinates"]),400);
        }

        try {
            $lat = floatval(explode(",",$coords)[0]);
            $lng = floatval(explode(",",$coords)[1]);
        } catch(Exception $e) {
            return new Response(json_encode(["message"=>$e->getMessage()]),400);
        }

        $locations = Location::all()->map(function(Location $location) use($lat,$lng)
        {
            $location->distance = $location->calculateDistance($lat, $lng);
            return collect($location)->mapWithKeys(function ($value, $key) {
                return [Str::camel($key) => $value];
            });
        })->toArray();

        usort($locations, function ($a, $b) {
            return $a['distance'] <=> $b['distance'];
        });

        return new Response($locations,200);
    }
}
