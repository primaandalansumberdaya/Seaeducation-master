<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public $table = 'programpayments';

    protected $fillable = [
        'regist_id',
        'external_id',
        'email',
        'payment_url',
        'status',
        'metadata'
    ];

    protected $casts = [
        'created_at' => 'datetime::d-m-Y H:m:s',
        'updated_at' => 'datetime::d-m-Y H:m:s',
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function registerprogram()
    {
        return $this->belongsTo(RegisterProgram::class);
    }
}
