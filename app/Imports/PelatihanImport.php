<?php

namespace App\Imports;

use App\Models\Pelatihan;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;

class PelatihanImport implements ToCollection
{
    protected $imagePath;

    public function __construct($imagePath)
    {
        $this->imagePath = $imagePath;
    }

    public function collection(Collection $rows)
    {
        unset($rows[0]); // hapus header

        foreach ($rows as $row) {

            Pelatihan::create([
                'nama' => 'pelatihan/' . $row[0],
                'universitas' => $row[1],
                'jurusan' => $row[2],
                'tahun' => $row[3],
                'kategori' => $row[4],
            ]);
        
        }
    }
}