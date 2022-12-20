<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dog extends Model
{
    use HasFactory;

    protected $table = 'dogs';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'name',
        'img',
        'description',
    ];
    public function interactions()
    {
        return $this->hasMany(dog::class);
    }
}
