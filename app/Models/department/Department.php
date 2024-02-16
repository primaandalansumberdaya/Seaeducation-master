<?php

namespace App\Models\Department;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Department extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'departments';

    protected $fillable = ['name', 'user_id', 'slug', 'description', 'is_active'];

    protected $casts = [
        'created_at' => 'datetime::d-m-Y H:m:s',
        'updated_at' => 'datetime::d-m-Y H:m:s',
        'deleted_at' => 'datetime::d-m-Y H:m:s',
    ];

    protected $hidden = ['deleted_at', 'created_at', 'updated_at'];

    public function positions()
    {
        return $this->hasMany(Position::class);
    }

    public function departmentThumbnails()
    {
        return $this->hasMany(DepartmentThumbnail::class);
    }
}
