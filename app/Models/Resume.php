<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class Resume extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    protected $fillable = [
        'name',
        'email',
        'description',
        'number',
        'vacancy_id',
    ];
    public function vacancy(){
        return $this->belongsTo(Vacancy::class , 'vacancy_id');
    }

}
