<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable = ['firstname', 'lastname', 'fullname'];

    public function fullname()
    {
        return $this->firstname . ' ' . $this->lastname;
    }

    public function definitions()
    {
        return $this->hasMany(Definition::class);
    }
}
