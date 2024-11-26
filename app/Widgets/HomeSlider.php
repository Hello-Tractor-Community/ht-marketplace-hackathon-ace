<?php

namespace App\Widgets;

use App\Models\Vehicle;
use Arrilot\Widgets\AbstractWidget;

class HomeSlider extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $vehicles = Vehicle::latest()->limit(5)->get();

        return view('widgets.home_slider', [
            'vehicles' => $vehicles,
        ]);
    }
}
