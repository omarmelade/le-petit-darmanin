<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DefinitonExample extends Model
{
    use HasFactory;

    protected $fillable = ['definition_id', 'example'];

    public function definition()
    {
        return $this->belongsTo(Definition::class);
    }

}
