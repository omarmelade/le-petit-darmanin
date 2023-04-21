<?php

namespace App\Models;

use App\Enums\GenderEnum;
use App\Enums\WordClassEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;

    protected $fillable = ['word', 'word_class', 'gender'];

    protected $casts = [
        'word_class' => WordClassEnum::class,
        'gender' => GenderEnum::class,
    ];

    public function definitions()
    {
        return $this->hasMany(Definition::class);
    }
}
