<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';

    protected $primarykey = 'id_transaksi';

    protected $fillable = [
        'durasi_sewa',
        'nama_pemegang_kartu',
        'nomor_kartu',
        'bukti_pembayaran',
        'total_bayar',
        'id_customer',
        'id_pengembalian',
        'id_sewa',
        'id_mobil'
    ];
}
