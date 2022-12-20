<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class interaction extends Model
{
    use HasFactory;
    protected  $table = 'interactions';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'id_interested_dog',
        'id_candidate_dog',
        'preference',
    ];
    public function dog()
    {
        return $this->belongsTo(dog::class, 'id_interested_dog', 'id_candidate_dog');
    }
}
