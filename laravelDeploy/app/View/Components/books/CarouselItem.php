<?php

namespace App\View\Components\books;

use Illuminate\View\Component;

class CarouselItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $banner;
    public function __construct($banner)
    {
        $this->banner = $banner;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.books.carousel-item');
    }
}
