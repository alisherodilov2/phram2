<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
class Vacancy extends Model implements HasMedia
{
    use HasFactory;
    use SoftDeletes;
    use InteractsWithMedia;
    protected $fillable = [
        'title',
        'title_ru',
        'title_en',
        'description',
        'description_ru',
        'description_en'
    ];
    public function resumes(){
        return $this->hasMany(Resume::class , 'vacancy_id');
    }
}
