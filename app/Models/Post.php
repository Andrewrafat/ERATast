<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $fillable =
    [
        'title',
        'description',
        'contact_phone',
        'user_id'
    ];

    public static $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:2048',
        'contact_phone' => 'required|string|max:20',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
