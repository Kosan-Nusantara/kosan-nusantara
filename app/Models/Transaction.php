<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    use HasUuids;
    use Uuid;

    protected $guarded = ['id'];
    protected $table = 'transaction';
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function boarding()
    {
        return $this->belongsTo(Boarding::class, 'boarding_id', 'id');
    }
}