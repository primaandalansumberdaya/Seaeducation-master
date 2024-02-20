<?php

namespace App\Models\Program;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class ProgramBenefit extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'program_benefits';

    protected $fillable = ['program_id', 'title'];

    protected $casts = [
        'created_at' => 'datetime::d-m-Y H:m:s',
        'updated_at' => 'datetime::d-m-Y H:m:s',
        'deleted_at' => 'datetime::d-m-Y H:m:s',
    ];

    protected $hidden = ['deleted_at', 'created_at', 'updated_at'];

    public function Programs()
    {
        return $this->belongsTo(Program::class);
    }
}
