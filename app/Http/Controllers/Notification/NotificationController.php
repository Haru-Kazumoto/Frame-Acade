<?php

namespace App\Http\Controllers\Notification;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller {
    public function notifications(){

        $notifications = Notification::all();

        $countNotif = $notifications->count();
        return view('notifications')
            ->with('notification', $notifications)
            ->with('countNotif', $countNotif);
    }
}
