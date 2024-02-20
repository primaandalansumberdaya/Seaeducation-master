<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partnership extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo',
        'about',
        'address',
        'email',
        'contact',
        'leader',
        'leader_contact',
        'pic',
        'pic_contact',
        'file_contract',
        'start_date',
        'end_date'
    ];

    protected $casts = [
        'created_at' => 'datetime::d-m-Y H:m:s',
        'updated_at' => 'datetime::d-m-Y H:m:s',
        'deleted_at' => 'datetime::d-m-Y H:m:s',
    ];

    protected $hidden = ['deleted_at', 'created_at', 'updated_at'];
}
