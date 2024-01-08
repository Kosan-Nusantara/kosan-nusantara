<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;
    use Uuid;
    use HasUuids;

     protected $guarded = ['id'];
    protected $table = 'facility';
    public $timestamps = true;
}