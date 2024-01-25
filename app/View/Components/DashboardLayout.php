<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class DashboardLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        $links   = [
            'orders',
            'downloads',
            'addresses',
            'account',
        ];
        return view('layouts.dashboard', compact('links'));
    }
}
