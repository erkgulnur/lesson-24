<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDocument extends Model
{
    use HasFactory;
    protected $fillable = [
        'document_name',
        'document_number',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
