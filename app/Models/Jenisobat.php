<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jenisobat extends Model
{
    use HasFactory;
    protected $table = 'tb_jenisobat';
    protected $primaryKey = 'jenisobat_id';
    protected $guarded = '[]';
    protected $fillable = [
        'jenisobat_id',
        'jenisobat_nama'
    ];
    public function obat() :HasMany
    {
        return $this->hasMany(Obat::class, 'obat_id_jenisobat', 'obat_id');    
    }
}
