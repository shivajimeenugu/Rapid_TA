<?php

namespace App\Exports;

use App\Models\bill;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Color;
use \PhpOffice\PhpSpreadsheet\Style\Alignment;
class billExport implements FromCollection,WithHeadings,ShouldAutoSize,WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $cid="";
    public function __construct($CID)
    {
        // $this->middleware('auth');
        $this->cid=$CID;
    }

    public function styles(Worksheet $sheet)
    {


        $data=DB::select(DB::raw('
        SELECT
            `id`,
            `bdate`,
            `bfrompincode`,
            `bfromplace`,
            `btopincode`,
            `btoplace`,
            `bmode`,
            `bkm`,
            `bda`,
            `bamount`,
            `bcid`,
            `created_at`
        FROM
            `bills`
        WHERE
            bcid='.$this->cid.'
        '));

        $count=count($data);
        $sheet->getStyle('A1:L'.($count+1))->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('A1:L'.($count+1))->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN)->setColor(new Color('00000000'));
        $sheet->getStyle('A1:L'.($count+1))->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);

        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true ,'color' => ['argb'=>'FFFF0000']]],
            // 1 => ['font' => ['color'=>'#FF0000']],
            // 1 => ['fill' => ['color'=>'FFFF0000']],
            'A1:L'.($count+1) =>['borders'=>['allborders'=>true]]
            // // Styling a specific cell by coordinate.
            // 'B2' => ['font' => ['italic' => true]]

            // // Styling an entire column.
            // 'C'  => ['font' => ['size' => 16]],
        ];
    }

    public function headings(): array
    {
        return [
            'BILL ID',
            'BILL DATE',
            'FROM PINCODE',
            'FROM PLACE',
            'TO PINCODE',
            'TO PLACE',
            'MODE OF TRAVEL',
            'DISTANCE TRAVELED',
            'DA',
            'TA',
            'CLAIM ID',
            'BILL CREATED AT'
        ];
    }



    public function collection()
    {
        $data=DB::select(DB::raw('
        SELECT
            `id`,
            `bdate`,
            `bfrompincode`,
            `bfromplace`,
            `btopincode`,
            `btoplace`,
            `bmode`,
            `bkm`,
            `bda`,
            `bamount`,
            `bcid`,
            `created_at`
        FROM
            `bills`
        WHERE
            bcid='.$this->cid.'
        '));
        // dd($data);
        return collect( $data);

        // return bill::all();
    }
}
