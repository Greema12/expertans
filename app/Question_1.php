<?php

namespace App;
use App\DB;
use Illuminate\Database\Eloquent\Model;

class Question_1 extends Model
{
    //

       protected $table = 'questions_1';

    protected $primaryKey = 'id';

    protected $guarded = ['id'];
}
