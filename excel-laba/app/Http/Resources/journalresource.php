<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class journalresource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,

            "date" => $this->date,
            "course" => $this->course,
           "group" => $this->group,
           "title" => $this->title,
           "lectures" => $this->lectures,
            "practical" => $this->practical,
            "laboratory" => $this->laboratory,
            "modular_control" => $this->modular_control,
           "consultations_semester" => $this->consultations_semester,
            "consultations_exam" => $this->consultations_exam,
            "credits" => $this->credits,
            "exams" => $this->exams,
            "term_papers" => $this->term_papers,
            "bachelor_wrc" => $this->bachelor_wrc,
           "speciallist_wrc" => $this->speciallist_wrc,
            "masters_wrc" => $this->masters_wrc,
            "practice_management" => $this->practice_management,
           "state_examinations" => $this->state_examinations,
            "wrc_rewiew" => $this->wrc_rewiew,
            "wrc_defence" => $this->wrc_defence,
           "graduate_student_management" => $this->graduate_student_management,
            "other" => $this->other,

            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
