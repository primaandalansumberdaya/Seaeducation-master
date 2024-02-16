<?php

namespace App\Models\Profile;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Education extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'educations_user';

    protected $fillable = [
        'edu_institution_name',
        'slug',
        'detail_user_id',
        'course',
        'degree',
        'start_date',
        'graduate_date',
        'address',
        'city',
        'province',
        'country',
        'zip_code',
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
