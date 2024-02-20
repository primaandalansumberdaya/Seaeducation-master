<?php

namespace App\Models\Program;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Program extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'programs';

    protected $fillable = [
        'title',
        'user_id',
        'category_id',
        'slug',
        'type',
        'description',
        'duration',
        'price',
        'status',
        'registerDate',
        'programStart',
    ];

    protected $casts = [
        'created_at' => 'datetime::d-m-Y H:m:s',
        'updated_at' => 'datetime::d-m-Y H:m:s',
        'deleted_at' => 'datetime::d-m-Y H:m:s',
    ];

    protected $hidden = ['deleted_at', 'created_at', 'updated_at'];

    public function benefits()
    {
        return $this->hasMany(ProgramBenefit::class);
    }

    public function steps()
    {
        return $this->hasMany(ProgramStep::class);
    }

    public function requirements()
    {
        return $this->hasMany(ProgramRequirement::class);
    }

    public function locations()
    {
        return $this->hasMany(ProgramLocation::class);
    }

    public function thumbnails()
    {
        return $this->hasMany(ProgramThumbnail::class);
    }
}
