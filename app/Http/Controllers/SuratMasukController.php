<?php
namespace App\Http\Controllers;

class SuratMasukController extends Controller
{
    private function dataSurat(): array
    {
        return [
            1 => [
                'id' => 1,
                'nomor' => '001/FT/X/2026',
                'tanggal' => '01-10-2026',
                'pengirim' => 'Fakultas Teknik',
                'perihal' => 'Undangan Rapat',
            ],
            2 => [
                'id' => 2,
                'nomor' => '002/BAA/X/2026',
                'tanggal' => '02-10-2026',
                'pengirim' => 'BAA',
                'perihal' => 'Pemberitahuan Akademik',
            ],
            3 => [
                'id' => 3,
                'nomor' => '003/LPPM/X/2026',
                'tanggal' => '03-10-2026',
                'pengirim' => 'LPPM',
                'perihal' => 'Undangan Sosialisasi',
            ],
        ];
    }

    public function index()
    {
        $surat = array_values($this->dataSurat());
        return view('surat-masuk.index', compact('surat'));
    }

    public function show($id)
    {
        $data = $this->dataSurat();

        if (!isset($data[$id])) {
            abort(404);
        }

        $surat = $data[$id];
        return view('surat-masuk.show', compact('surat'));
    }
}
