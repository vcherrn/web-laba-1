<?php

namespace App\Http\Controllers;

use App\Http\Resources\journalresource;
use App\Imports\JournalImport;
use App\Models\Journal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $journals  =Journal::query()->get();

        return journalresource::collection($journals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        journal::create([
        "date"=> $request['p0'],
             "course"=> $request['p1'],
            "group"=> $request['p2'],
            "title"=> $request['p3'],
            "lectures"=> $request['p4'],
             "practical"=> $request['p5'],
             "laboratory"=> $request['p6'],
             "modular_control"=> $request['p7'],
            "consultations_semester"=> $request['p8'],
             "consultations_exam"=> $request['p9'],
             "credits"=> $request['p10'],
             "exams"=> $request['p11'],
             "term_papers"=> $request['p12'],
             "bachelor_wrc"=> $request['p13'],
            "speciallist_wrc"=> $request['p14'],
             "masters_wrc"=> $request['p15'],
             "practice_management"=> $request['p16'],
            "state_examinations"=> $request['p17'],
             "wrc_rewiew"=> $request['p18'],
             "wrc_defence"=> $request['p19'],
            "graduate_student_management"=> $request['p20'],
             "other"=> $request['p21'],
        ]);
    }
    public function excelUpload(Request $request)
    {
        Storage::disk('local')->put($request->file('file')->getClientOriginalName(),
            file_get_contents($request->file('file')));
        Excel::import(new JournalImport(),
            storage_path("app\\{$request->file('file')->getClientOriginalName()}"));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function show(Journal $journal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function edit(Journal $journal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        journal::where('id', $request['p0'])->update([
            "date"=> $request['p0'],
             "course"=> $request['p1'],
            "group"=> $request['p2'],
            "title"=> $request['p3'],
            "lectures"=> $request['p4'],
             "practical"=> $request['p5'],
             "laboratory"=> $request['p6'],
             "modular_control"=> $request['p7'],
            "consultations_semester"=> $request['p8'],
             "consultations_exam"=> $request['p9'],
             "credits"=> $request['p10'],
             "exams"=> $request['p11'],
             "term_papers"=> $request['p12'],
             "bachelor_wrc"=> $request['p13'],
            "speciallist_wrc"=> $request['p14'],
             "masters_wrc"=> $request['p15'],
             "practice_management"=> $request['p16'],
            "state_examinations"=> $request['p17'],
             "wrc_rewiew"=> $request['p18'],
             "wrc_defence"=> $request['p19'],
            "graduate_student_management"=> $request['p20'],
             "other"=> $request['p21'],
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        journal::query()->where('id','=',$id)->delete();
    }
}
