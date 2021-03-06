<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavVacs extends Model
{
    use HasFactory;
    protected $table = "favorite_vacancies";
    protected $fillable = [
        'user_id',
        'vac_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
