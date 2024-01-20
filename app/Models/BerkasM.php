<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BerkasM extends Model
{
    use HasFactory;

    protected $table = 'berkas';

    protected $fillable = ['no_box','kode_kecamatan','tanggal_pelayanan','tanggal_cetak','nop','catatan'];
}
