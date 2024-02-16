<?php

namespace App\Models\Department;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Position extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'positions';

    protected $fillable = [
        'user_id',
        'department_id',
        'name',
        'slug',
        'description',
        'is_active'
    ];

    protected $casts = [
        'created_at' => 'datetime::d-m-Y H:m:s',
        'updated_at' => 'datetime::d-m-Y H:m:s',
        'deleted_at' => 'datetime::d-m-Y H:m:s',
    ];

    protected $hidden = ['deleted_at', 'created_at', 'updated_at'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function positionThumbnails()
    {
        return $this->hasMany(PositionThumbnail::class);
    }
}
