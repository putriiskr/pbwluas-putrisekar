<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Obat extends Model
{
    use HasFactory;
    protected $table = 'tb_obat';
    protected $primaryKey = 'obat_id';
    protected $guarded = '[]';
    protected $fillable = [
        'obat_id',
        'obat_id_jenisobat',
        'obat_nama',
        'obat_harga',
        'obat_stock'
    ];
    public function jenisobat() :BelongsTo
    {
        return $this->belongsTo(Jenisobat::class, 'obat_id_jenisobat');    
    }
    public function pelanggan() :HasMany
    {
        return $this->hasMany(Pelanggan::class, 'pelanggan_id_obat', 'obat_id');    
    }
}
