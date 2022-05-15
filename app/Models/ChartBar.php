<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChartBar extends Model
{
    use HasFactory;
    protected $table = "chart_bars";
    protected $fillable = [
      "jumlahWarga",
      "jumlahKepalaKeluarga",
      "rt"
    ];

}
