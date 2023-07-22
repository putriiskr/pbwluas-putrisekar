<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'tb_pelanggan';
    protected $primaryKey = 'pelanggan_id';
    protected $guarded = '[]';
    protected $fillable = [
        'pelanggan_id',
        'pelanggan_id_obat',
        'pelanggan_nama',
        'pelanggan_alamat',
        'pelanggan_hp'
    ];
    public function transaksi() :HasMany
    {
        return $this->hasMany(Transaksi::class, 'transaksi_id_pelanggan', 'pelanggan_id');    
    }
    public function obat() : BelongsTo
    {
        return $this->belongsTo(Obat::class, 'pelanggan_id_obat');
    }
}
