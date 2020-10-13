<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'max_students', 'teacher_id'
    ];


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'classes';



    public function students(){
        return $this->belongsToMany(User::class,'user_clasess')
            ->withPivot('class_id');
    }


}
