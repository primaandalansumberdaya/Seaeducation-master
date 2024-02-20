<?php

namespace App\Models\profile;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class DetailUser extends Model
{
    use HasFactory;

    public $table = 'detail_users';

    protected $fillable = [
        'photo',
        'user_id',
        'birthPlace',
        'birthDate',
        'gender',
        'marital',
        'aboutMe',
        'phoneNumber',
        'phoneNumber2',
        'address',
        'regency',
        'province',
        'zip_code',
        'country'
    ];

    protected $casts = [
        'created_at' => 'datetime::d-m-Y H:m:s',
        'updated_at' => 'datetime::d-m-Y H:m:s',
        'deleted_at' => 'datetime::d-m-Y H:m:s',
    ];

    protected $hidden = ['deleted_at', 'created_at', 'updated_at'];

    public function User()
    {
        // return $this->belongsTo('App\Models\User', 'users_id', 'id');
        return $this->belongsTo(Auth::user());
    }

    //one to many
    public function experience_user()
    {
        return $this->hasMany(Experience::class);
    }

    public function education_user()
    {
        return $this->hasMany(Education::class);
    }

    public function skill_user()
    {
        return $this->hasMany(Skill::class);
    }

    public function language_user()
    {
        return $this->hasMany(Language::class);
    }
}
