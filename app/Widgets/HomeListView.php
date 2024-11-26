<?php

namespace App\Widgets;

use App\Models\Vehicle;
use Arrilot\Widgets\AbstractWidget;

class HomeListView extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [
        'make'=>null,
    ];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $data = [
          'vehicles'=>  Vehicle::where('make_id',$this->config['make'])->get()
        ];

        return view('widgets.home_list_view', $data);
    }
}
