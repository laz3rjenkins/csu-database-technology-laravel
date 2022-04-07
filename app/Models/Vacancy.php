<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;

    protected $table = 'vacancies';

    protected $fillable = [
        'name', 'salary', 'company_name', 'expirience', 'description', 'author_id'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'author_id', 'id');
    }
}
