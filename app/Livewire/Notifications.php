<?php

namespace App\Livewire;

use App\Models\Notification;
use App\Services\AppService;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Notifications extends Component
{

    public $notifications;

    public function mount()
    {
       $this->notifications = Auth::check()?Auth::user()->notifications:collect();
    }


    public function removeNotification($notification_id)
    {
        Notification::removeNotification($notification_id);
        $this->mount();
    }

    public function go($notification_id)
    {
        $this->removeNotification($notification_id);
        return redirect()->route('order.index');
    }

    public function render()
    {
        return view("livewire.notifications");
    }
}
