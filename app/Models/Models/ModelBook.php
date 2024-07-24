<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    protected $table='book';
    protected $fillable=['title','author','pages','price'];

    public function relBooks()
    {
        return $this->hasOne('App\Models\Models\ModelBook','id');
    }
}
