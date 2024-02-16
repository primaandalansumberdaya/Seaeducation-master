<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class RegisterProgram extends Model
{
    use HasFactory;

    public $table = 'register_program';

    protected $fillable = [
        'register_number',
        'student_number',
        'referral',
        'location',
        'price',
        'user_id',
        'program_id',
        'status',
        'progress',
        'is_ojt',
        'hotel_name',
        'address',
        'country',
        'position',
        'start_date',
        'end_date',
    ];

    protected $casts = [
        'created_at' => 'datetime::d-m-Y H:m:s',
        'updated_at' => 'datetime::d-m-Y H:m:s',
    ];

    protected $hidden = ['created_at', 'updated_at'];

    #set Expired
    public function setExpiredAttribute($value)
    {
        $this->attributes['expired'] = date('Y-m-d', ($value));
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
