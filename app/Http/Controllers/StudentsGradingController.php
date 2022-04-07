<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsGradingController extends Controller
{
    public function begin()
    {
        return view('firstform');
    }

    public function enterGrades(Request $request)
    {
        $student_1 = $request->name_1;
        $student_2 = $request->name_2;
        $student_3 = $request->name_3;
        $student_4 = $request->name_4;
        $student_5 = $request->name_5;

        return view('secondform', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5,
        ]);
    }

    protected function computeAverage($score1, $score2)
    {
        $average = ($score1 + $score2) / 2;
        return round($average, 2);
    }

    protected function getRemarks($studentAverage)
    {
        if ($studentAverage > 75) {
            return "PASSED";
        } else {
            return "FAILED";
        }
    }

    public function computeGrades(Request $request)
    {
        $student_1 = $request->student_1;
        $student_2 = $request->student_2;
        $student_3 = $request->student_3;
        $student_4 = $request->student_4;
        $student_5 = $request->student_5;


        $s1_average = $this->computeAverage($request->s1_midtermGrade, $request->s1_finalsGrade);
        $s2_average = $this->computeAverage($request->s2_midtermGrade, $request->s2_finalsGrade);
        $s3_average = $this->computeAverage($request->s3_midtermGrade, $request->s3_finalsGrade);
        $s4_average = $this->computeAverage($request->s4_midtermGrade, $request->s4_finalsGrade);
        $s5_average = $this->computeAverage($request->s5_midtermGrade, $request->s5_finalsGrade);

        $s1_remarks = $this->getRemarks($s1_average);
        $s2_remarks = $this->getRemarks($s2_average);
        $s3_remarks = $this->getRemarks($s3_average);
        $s4_remarks = $this->getRemarks($s4_average);
        $s5_remarks = $this->getRemarks($s5_average);

        return view('resultspage', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5,
            // STUDENT 1 GRADES, AVERAGE, & REMARKS
            's1_midtermGrade' => $request->s1_midtermGrade,
            's1_finalsGrade' => $request->s1_finalsGrade,
            's1_average' => $s1_average,
            's1_remarks' => $s1_remarks,
            // STUDENT 2 GRADES, AVERAGE, & REMARKS
            's2_midtermGrade' => $request->s2_midtermGrade,
            's2_finalsGrade' => $request->s2_finalsGrade,
            's2_average' => $s2_average,
            's2_remarks' => $s2_remarks,
            // STUDENT 3 GRADES, AVERAGE, & REMARKS
            's3_midtermGrade' => $request->s3_midtermGrade,
            's3_finalsGrade' => $request->s3_finalsGrade,
            's3_average' => $s3_average,
            's3_remarks' => $s3_remarks,
            // STUDENT 4 GRADES, AVERAGE, & REMARKS
            's4_midtermGrade' => $request->s3_midtermGrade,
            's4_finalsGrade' => $request->s3_finalsGrade,
            's4_average' => $s4_average,
            's4_remarks' => $s4_remarks,
            // STUDENT 5 GRADES, AVERAGE, & REMARKS
            's5_midtermGrade' => $request->s5_midtermGrade,
            's5_finalsGrade' => $request->s5_finalsGrade,
            's5_average' => $s5_average,
            's5_remarks' => $s5_remarks
        ]);
    }
}