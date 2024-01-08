<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardingFacility extends Model
{
    use HasFactory;
    use HasUuids;
    use Uuid;

    protected $guarded = ['id'];
    protected $table = 'boarding_facility';
    public $timestamps = true;

    public function boarding()
    {
        return $this->belongsTo(Boarding::class, 'boarding_id', 'id');
    }
}
