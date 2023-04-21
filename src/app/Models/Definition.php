<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Definition extends Model
{
    use HasFactory;
    protected $fillable = ['definition', 'word_id' ,'author_id'];

    public function word()
    {
        return $this->belongsTo(Word::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function examples()
    {
        return $this->hasMany(DefinitionExample::class);
    }

}
