<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Doctor extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'medico';

    protected $fillable = ['nome', 'especialidade', 'cidade_id'];

    public function patient(): HasMany
    {
        return $this->hasMany(DoctorPatient::class);
    }
}
