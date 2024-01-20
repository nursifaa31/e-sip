<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class SPPTM extends Model
{
    use HasFactory, Searchable;
    protected $table = 'sppt';
    protected $fillable =
    [
        'kode_kecamatan','tanggal_cetak','nop','nama_wp','pengambil','tanggal_ambil'
    ];


    // public function searchableAs()
    // {
    //     return 'sppt';
    // }

    public function toSearchableArray()
    {

        return [
            'nop' =>$this->nop,
            'nama_wp' =>$this->nama_wp,
        ];
    }
}
