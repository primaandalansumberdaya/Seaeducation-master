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
        'companyName',
        'base',
        'detail_user_id',
        'position',
        'jobTitle',
        'startDate',
        'endDate',
        'address',
        'city',
        'province',
        'country',
        'zipCode',
        'spvName',
        'companyPhone',
        'jobDescriptions',
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
