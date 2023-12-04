<?php

namespace App\Listeners;

use App\Events\AddEmployee;
use App\Models\Admin;
use App\Notifications\AddEmployerNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AlertAdmin
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(AddEmployee $event): void
    {
        $employer = $event->employer; 
        $admin = Admin::first();
       if ($admin) {
          $admin->notify(new AddEmployerNotification($employer));
      }
  
    }
}
