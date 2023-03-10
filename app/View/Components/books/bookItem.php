<?php

namespace App\View\Components\books;

use Illuminate\View\Component;

class BookItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $book;
    public function __construct($book)
    {
        $this->book = $book;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.books.book-item');
    }
}
