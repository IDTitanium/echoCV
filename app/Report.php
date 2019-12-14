<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model 
{

    protected $table = 'reports';
    public $timestamps = true;

    protected $fillable = [
    'report_title', 'content'
    ];


    public function user()
    {
        return $this->belongsTo('User', 'user_id');
    }

    public function company()
    {
        return $this->belongsTo('Company', 'company_id');
    }

    public function forms()
    {
        return $this->hasMany('Form');
    }

}
