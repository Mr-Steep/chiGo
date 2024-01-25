<?php

// app\Models\Notification.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'type', 'text'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function addNotification($user_id, $type, $text)
    {
        // Check if a notification with the given user_id and type already exists
        $notification = self::firstOrNew([
            'user_id' => $user_id,
            'type' => $type,
        ]);

        // If the notification is new, set its text and save it
        if (!$notification->exists) {
            $notification->text = $text;
            $notification->save();
        }

        return $notification;
    }

    public static function removeNotification($notification_id)
    {
        $notification = self::find($notification_id);

        if ($notification) {
            $notification->delete();
        }
    }
}
