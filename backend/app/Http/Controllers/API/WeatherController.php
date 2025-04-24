<?php 

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\OpenWeatherService;

class WeatherController extends Controller
{
    protected $weather;

    public function __construct(OpenWeatherService $weather)
    {
        $this->weather = $weather;
    }

    public function show($city)
    {
        return response()->json($this->weather->getWeather($city));
    }
}
