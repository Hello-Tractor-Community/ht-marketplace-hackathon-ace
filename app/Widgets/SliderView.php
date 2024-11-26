<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class SliderView extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [
        'vehicle'=>null
    ];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        //

        return view('widgets.slider_view', $this->config);
    }
}
