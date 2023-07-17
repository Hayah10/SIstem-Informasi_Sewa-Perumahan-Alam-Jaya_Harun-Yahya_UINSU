<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = "tb_pelanggan";
    protected $primaryKey = 'pel_id';
    protected $guarded = [];

public function golongan()
{
    return $this->belongsTo(Golongan::class);
}

public function user()
{
    return $this->belongsTo(User::class);
}

}
