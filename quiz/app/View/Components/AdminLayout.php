<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Http\Controllers\Admin\HomeController;

class AdminLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('admin.layouts.app');
    }
}
