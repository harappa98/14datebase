<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $guarded = array('id');

    
    public static $rules = array(
        '氏名' => 'required',
        '性別' => 'required',
        '趣味' => 'required',
        '自己紹介' => 'required',
    );
    
    
}
