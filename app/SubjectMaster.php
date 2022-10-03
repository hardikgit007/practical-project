<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectMaster extends Model
{
    public $fillable = ['id', 'subject_name', 'term_id'];
}
