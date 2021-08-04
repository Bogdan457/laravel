<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'description','user_id'];
    protected $fillable = [
      'title',
      'description',
      'user_id'
    ];

    public function user() {
      return $this->belongsTo(User::class);
    }

    public function getHistoryUser()
    {
      if ($this->user !== null) {
        return $this->user->name;
      } else {
        return 'не указано';
      }
    }
}
