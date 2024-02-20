<?php

namespace App\Models\Profile;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Emergency extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'emergency_contact_user';

    protected $fillable = [
        'name',
        'relations',
        'detail_user_id',
        'contact1',
        'contact2',
        'email',
        'address',
        'city',
        'province',
        'country',
        'zipCode',
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
