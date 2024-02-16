<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Affiliate extends Model
{
    use HasFactory;

    use SoftDeletes;

    public $table = 'affiliates';

    protected $fillable = [
        'name',
        'affiliate_number',
        'logo',
        'file_contract',
        'about',
        'address',
        'email',
        'contact',
        'leader',
        'leader_contact',
        'pic',
        'pic_contact',
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
