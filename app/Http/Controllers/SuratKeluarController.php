<?php
namespace App\Http\Controllers;

class SuratKeluarController extends Controller
{
    private function dataSurat(): array
    {
        return [
            1 => [
                'id' => 1,
                'nomor' => '001/FT/X/2026',
                'tanggal' => '05-10-2026',
                'tujuan' => 'Universitas Muhammadiyah Jember',
                'perihal' => 'Surat Undangan',
            ],
            2 => [
                'id' => 2,
                'nomor' => '002/FT/X/2026',
                'tanggal' => '06-10-2026',
                'tujuan' => 'Fakultas Teknik',
                'perihal' => 'Surat Pemberitahuan',
            ],
            3 => [
                'id' => 3,
                'nomor' => '003/FT/X/2026',
                'tanggal' => '07-10-2026',
                'tujuan' => 'LPPM',
                'perihal' => 'Surat Permohonan',
            ],
        ];
    }

    public function index()
    {
        $surat = array_values($this->dataSurat());
        return view('surat-keluar.index', compact('surat'));
    }

    public function show($id)
    {
        $data = $this->dataSurat();

        if (!isset($data[$id])) {
            abort(404);
        }

        $surat = $data[$id];
        return view('surat-keluar.show', compact('surat'));
    }
}
