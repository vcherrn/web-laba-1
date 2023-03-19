<?php

namespace App\Imports;

use Carbon\Carbon;
use Carbon\Traits\Date;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Group;
use App\Models\Journal;
use App\User;
use Maatwebsite\Excel\Row;
use PhpOffice\PhpSpreadsheet\Calculation\TextData\Format;

class JournalImport implements OnEachRow
{
    public function onRow(Row $row)
    {
        $rowIndex = $row->getIndex();
        $row      = $row->toArray();
            
        if($rowIndex<4 || is_null($row[0]))
            return;

 
        Journal::query()->create([
            "date"=>Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[0])),
            "course"=>$row[1],
            "group"=>$row[2],
            "title"=>$row[3],
            "lectures"=>$row[4],
            "practical"=>$row[5] ?? 0,
            "laboratory"=>$row[6] ?? 0,
            "modular_control"=>$row[7] ?? 0,
            "consultations_semester"=>$row[8] ?? 0,
            "consultations_exam"=>$row[9] ?? 0,
            "credits"=>$row[10] ?? 0,
            "exams"=>$row[11] ?? 0,
            "term_papers"=>$row[12] ?? 0,
            "bachelor_wrc"=>$row[13] ?? 0,
            "speciallist_wrc"=>$row[14] ?? 0,
            "masters_wrc"=>$row[15] ?? 0,
            "practice_management"=>$row[16] ?? 0,
            "state_examinations"=>$row[17] ?? 0,
            "wrc_rewiew"=>$row[18] ?? 0,
            "wrc_defence"=>$row[19] ?? 0,
            "graduate_student_management"=>$row[20] ?? 0,
            "other"=>$row[21] ?? 0,
            
        ]);
        // $group->users()->create([
        //     'name' => $row[0],
        // ]);
    }
}
