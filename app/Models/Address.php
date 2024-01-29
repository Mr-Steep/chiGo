<?php

namespace App\Models;

use App\Services\AppService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['country', 'city', 'street', 'house',  'flat', 'zip_code', 'user_id', 'session_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public static function getAddresses()
    {
        $session_id = session()->getId();
        $user_id    = auth()->id();

        $query = static::where('session_id', $session_id);

        if ($user_id) {
            $query->orWhere('user_id', $user_id);
        }

        return $query->get();
    }

    public function getFullAddressAttribute()
    {
        return "{$this->country}, {$this->city}, {$this->street}, {$this->house}, {$this->flat}, {$this->zip_code}";
    }

}
