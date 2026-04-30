<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    // memberi tahu kolom boleh diisi
    protected $fillable = [
        'nama_prodi',
        'singkatan',
        'Kaprodi',
        'fakultas_id',
    ];

    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }
}
