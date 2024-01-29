<?php

namespace App\View\Components;

use App\Models\Order;
use Illuminate\View\Component;
use Illuminate\View\View;

class DashboardLayout extends Component
{

    public $links;
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        $this->links   = [
            'orders',
            'downloads',
            'addresses',
            'account',
        ];


        return view('layouts.dashboard');
    }
}
