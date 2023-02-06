<?php

namespace SalimHosen\Core\View\Components;

use Illuminate\View\Component;
use Auth;
use SalimHosen\Core\Http\Resources\NotificationResource;

class Notification extends Component
{

    public $notifications;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $notifications = Auth::user()->notifications()->where('is_sent', true)->where("is_seen", false)->get();
        $this->notifications = NotificationResource::collection($notifications);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('core::components.notification');
    }
}
