<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoProfileModel extends Model
{
    use HasFactory;

    protected $table = 'foto_profile';

    protected $fillable = [
      'user_id',
      'foto_profile'
    ];

    // Relation
    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
