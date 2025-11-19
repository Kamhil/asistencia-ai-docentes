<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Models\Docente;

class ImportarExcelManual extends Command
{
    protected $signature = 'importar:excel-manual';
    protected $description = 'Importa docentes desde Excel usando PhpSpreadsheet';

    public function handle()
    {
        $filePath = storage_path('app/asistencia.xlsx');

        if (!file_exists($filePath)) {
            $this->error('❌ Archivo no encontrado: asistencia.xlsx');
            return;
        }

        $spreadsheet = IOFactory::load($filePath);
        $sheet = $spreadsheet->getSheetByName('Consolidado_Final');
        $data = $sheet->toArray();

        $fechas = [
            '10 de octubre', '11 de octubre', '17 de octubre',
            '18 de octubre', '24 de octubre', '25 de octubre',
            '31 de octubre',
        ];

        // Datos reales comienzan en la fila 10 (índice 9+1 = 10)
        for ($i = 10; $i < count($data); $i++) {
            $row = $data[$i];

            if (empty($row[2])) continue;

            $nombre = $row[0];
            $correo = $row[1];
            $dni = $row[2];

            $asistencias = [];

            foreach (range(0, 6) as $j) {
                $valor = isset($row[4 + $j]) ? trim($row[4 + $j]) : '';
                $asistencias[$fechas[$j]] = $valor === '✅';
            }

            Docente::updateOrCreate(
                ['dni' => $dni],
                [
                    'nombre_completo' => $nombre,
                    'correo' => $correo,
                    'asistencias' => $asistencias,
                ]
            );
        }

        $this->info('✅ Importación completada exitosamente.');
    }
}
