<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;
    public $fillable = [
        "date",
             "course",
            "group",
            "title",
            "lectures",
             "practical",
             "laboratory",
             "modular_control",
            "consultations_semester",
             "consultations_exam",
             "credits",
             "exams",
             "term_papers",
             "bachelor_wrc",
            "speciallist_wrc",
             "masters_wrc",
             "practice_management",
            "state_examinations",
             "wrc_rewiew",
             "wrc_defence",
            "graduate_student_management",
             "other",
     ];
}
