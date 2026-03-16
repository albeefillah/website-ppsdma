<?php

namespace App\Imports;

use App\Models\Pendidikan;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class PendidikanImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        unset($rows[0]); // hapus header

        foreach ($rows as $row) {

            if (!$row[1]) {
                continue; // skip jika nama kosong
            }

            Pendidikan::create([
                'banner' => isset($row[0]) ? 'pendidikan/' . $row[0] : null,
                'nama_pendidikan' => $row[1],
                'tanggal_mulai' => is_numeric($row[2]) 
                    ? Date::excelToDateTimeObject($row[2]) 
                    : $row[2],
                'tanggal_selesai' => is_numeric($row[3]) 
                    ? Date::excelToDateTimeObject($row[3]) 
                    : $row[3],
                'lokasi' => $row[4] ?? null,
                'jumlah_peserta' => $row[5] ?? 0,
            ]);
        }
    }
}