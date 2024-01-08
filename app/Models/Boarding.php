<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Boarding extends Model
{
    use HasFactory;
    use HasUuids;
    use Uuid;

    protected $guarded = ['id'];
    protected $table = 'boarding';
    public $timestamps = true;

    public function facility()
    {
        return $this->hasMany(BoardingFacility::class, 'boarding_id', 'id');
    }
    public function gallery()
    {
        return $this->hasMany(BoardingFacility::class, 'boarding_id', 'id');
    }
}
