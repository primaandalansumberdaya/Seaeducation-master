<?php

namespace App\Models\Profile;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Experience extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'experiences_user';

    protected $fillable = [
        'work_institution_name',
        'base',
        'detail_user_id',
        'position',
        'job_title',
        'start_date',
        'end_date',
        'address',
        'city',
        'province',
        'country',
        'zip_code',
        'spv_name',
        'institution_phone',
        'job_descriptions',
        'certificate',
    ];

    protected $casts = [
        'created_at' => 'datetime::d-m-Y H:m:s',
        'updated_at' => 'datetime::d-m-Y H:m:s',
        'deleted_at' => 'datetime::d-m-Y H:m:s',
    ];

    protected $hidden = ['deleted_at', 'created_at', 'updated_at'];

    public function DetailUser()
    {
        return $this->belongsTo(DetailUser::class);
    }
}
