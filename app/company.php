<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Report;

class Company extends Model
{

    protected $table = 'companies';
    public $timestamps = true;


    protected $fillable = [
        'c_name',
        'website',
        'country',
        'user_id',
        'contact_id',
        'tags',
        'stage',
        'status',
        'lead',
        'analyst',
    ];




    public function user()
    {
        return $this->belongsTo('User');
    }

    public function efiles()
    {
        return $this->hasMany('Efile');
    }


    public function reports()
    {
        return $this->hasOne(Report::class);
    }

    public static function getAllCompanyData()
    {
        return self::all();
    }
}
