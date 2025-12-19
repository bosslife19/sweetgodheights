<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Result Sheet</title>
<style>
    body {
        font-family: "Times New Roman", serif;
        margin: 20px;
        color: #000;
        font-size: 13px;
    }

    .container {
        max-width: 900px;
        margin: auto;
        border: 2px solid #000;
        padding: 15px;
    }

    h1, h2, h3 {
        text-align: center;
        margin: 4px 0;
    }

    h1 {
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
    }

    h2 {
        font-size: 15px;
        font-weight: bold;
        text-transform: uppercase;
    }

    h3 {
        font-size: 14px;
        font-weight: bold;
    }

    .school-name {
        font-weight: bold;
        text-transform: uppercase;
    }

    .info-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
        font-size: 13px;
    }

    .info-table td {
        padding: 4px;
        vertical-align: top;
    }

    .info-table .label {
        font-weight: bold;
        width: 20%;
    }

    .info-table .value {
        width: 30%;
    }

    table.result-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 12px;
        font-size: 12px;
    }

    .result-table th,
    .result-table td {
        border: 1px solid #000;
        padding: 4px;
        text-align: center;
    }

    .result-table th {
        font-weight: bold;
    }

    .result-table td.subject {
        text-align: left;
        font-weight: bold;
    }

    .grades {
        margin-top: 10px;
        font-size: 12px;
    }

    .behavior-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
        font-size: 12px;
    }

    .behavior-table td {
        padding: 3px;
    }

    .comments {
        margin-top: 15px;
        font-size: 13px;
    }

    .signature {
        margin-top: 20px;
        font-size: 13px;
    }

    .signature div {
        margin-bottom: 6px;
    }

    @media print {
        body {
            margin: 0;
        }
        .container {
            border: none;
        }
    }
</style>
</head>
<body>

<div class="container">
    @php
    $total_mark = 0;
    $totalObtainable = 0;

    foreach ($mark_sheet as $data) {

        if ($data->subject_id == $optional_subject) {
            continue;
        }

        $fullMark = subjectFullMark(
            $exam_details->id,
            $data->subject->id,
            $class_id,
            $section_id
        );

        $totalObtainable += $fullMark;

        if (@$generalsettingsResultType == 'mark') {
            $total_mark += subjectPercentageMark($data->total_marks, $fullMark);
        } else {
            $total_mark += $data->total_marks;
        }
    }
@endphp

                                                                    @php
                                                                $optional_countable_gpa = 0;
                                                                $main_subject_total_gpa=0;
                                                                $Optional_subject_count=0;
                                                                    if($optional_subject!=''){
                                                                        $Optional_subject_count=$subjects->count()-1;
                                                                    }else{
                                                                        $Optional_subject_count=$subjects->count();
                                                                    }
                                                                $sum_gpa= 0;
                                                                $resultCount=1;
                                                                $subject_count=1;
                                                                $tota_grade_point=0;
                                                                $this_student_failed=0;
                                                                $count=1;
                                                                
                                                                $temp_grade=[];
                                                                $average_passing_mark = averagePassingMark($exam_type_id);
                                                            @endphp
     @php
                                                                   $targetStudentId = $student_detail->id;

$studentScore = $positionedScores->firstWhere('student_id', $targetStudentId);

if ($studentScore) {
    $position = $studentScore['position'];
    // You can now use $position as needed
    
} else {
    $position = 'Not found'; // or handle appropriately
}

                                                                @endphp
             @php
                                                                            $average_mark = 0;
                                                                            if($Optional_subject_count){
                                                                            $average_mark = $total_mark/($Optional_subject_count);
                                                                            }
                                                                        @endphp

    <h1>Report Sheet for {{$exam_details->title}} : {{ @$student_detail->academic->year }} Session</h1>
    <h2 class="school-name">{{generalSetting()->school_name}}</h2>
    <h3>{{generalSetting()->address}}</h3>

    <table class="info-table">
        <tr>
            <td class="label">NAME</td>
            <td class="value">{{$student_detail->studentDetail->full_name}}</td>
            <td class="label">SERIAL NO</td>
            <td class="value">: {{@$student_detail->student->admission_no}}</td>
        </tr>
        <tr>
            <td class="label">GENDER</td>
            <td class="value">FEMALE</td>
            <td class="label">CLASS</td>
            <td class="value">{{$student_detail->class->class_name}}</td>
        </tr>

        <tr>
            <td class="label">TOTAL OBTAINED</td>
            <td class="value">{{ number_format($total_mark, 2) }}</td>
            <td class="label">TOTAL OBTAINABLE</td>
            <td class="value">{{$totalObtainable}}</td>
        </tr>
        <tr>
            <td class="label">AVERAGE</td>
            <td class="value">{{$average_mark}}</td>
            <td class="label">NEXT TERM BEGINS</td>
            <td class="value">13th Jan, 2025</td>
        </tr>
        <tr>
            <td class="label">POSITION IN CLASS</td>
            <td class="value">{{$position}} OUT OF {{$totalStudentsInClass}}</td>
            <td class="label">POSITION IN SUBCLASS</td>
            <td class="value">33RD OUT OF 48</td>
        </tr>
    </table>

    <table class="result-table">
        <thead>
            <tr>
                <th rowspan="2">SUBJECT</th>
                <th>1ST CA<br>(10)</th>
                <th>2ND CA<br>(10)</th>
                <th>3RD CA<br>(10)</th>
                <th>EXAM<br>(70)</th>
                
                <th>TOTAL <br>(100)</th>
                <th>MAX <br>SCORE</th>
<th>MIN <br>SCORE</th>
<th>CLASS <br> AVE.</th>
                <th>POSITION</th>
                <th>GRADE</th>
                <th>REMARK</th>
            </tr>
        </thead>
        <tbody>
             @foreach($mark_sheet as $data)
             @php
    $subjectPosition = $studentSubjectPositions->get($data->subject_id);
@endphp
               @php
                                                            $skills = [];
@endphp
                                                           
                                 @php
                        $temp_grade[]=$data->total_gpa_grade;
                 if ($data->subject_id==$optional_subject) {
                 continue;
 }
                                                                     // collect affective skills if available
        if ($data->Honesty !== null) {
            $skills['Honesty'] = $data->Honesty;
        }
        if ($data->Punctuality !== null) {
            $skills['Punctuality'] = $data->Punctuality;
        }
        if ($data->Attentiveness !== null) {
            $skills['Attentiveness'] = $data->Attentiveness;
        }
         if ($data->Politeness !== null) {
            $skills['Politeness'] = $data->Politeness;
        }
         if ($data['Leadership Skill'] !== null) {
            $skills['Leadership Skill'] = $data['Leadership Skill'];
        }
         if ($data->Cooperation !== null) {
            $skills['Cooperation'] = $data->Cooperation;
        }
         if ($data->Handwriting !== null) {
            $skills['Handwriting'] = $data->Handwriting;
        }
         if ($data['Verbal Fluency'] !== null) {
            $skills['Verbal Fluency'] = $data['Verbal Fluency'];
        }
         if ($data->Sports !== null) {
            $skills['Sports'] = $data->Sports;
        }
         if ($data['Handling Tools'] !== null) {
            $skills['Handling Tools'] = $data['Handling Tools'];
        }
                                                                @endphp
                                                                            <tr>
                <td class="subject">{{$data->subject->subject_name}}</td>
                 @php
                                                                     $ca = collect($caScores)->firstWhere('subject_id', $data->subject_id);
    $normalizedCa = collect($ca)->keyBy(fn($value, $key) => strtolower($key));

    
    $cumulative = collect($cumulate)->firstWhere('subject_id', $data->subject_id);
    
@endphp
@if (!isset($ca['CA']))

<td>{{ $normalizedCa['1st ca'] ?? '-' }}</td>
<td>{{ $normalizedCa['2nd ca'] ?? '-' }}</td>
<td>{{ $normalizedCa['3rd ca'] ?? '-' }}</td>
<td>{{ $normalizedCa['exam'] ?? '-' }}</td>
@endif
 <td>
    
                                                                        <p>
                                                                            @if (@$generalsettingsResultType == 'mark')
                                                                                {{@singleSubjectMark($data->student_record_id,$data->subject_id,$data->exam_type_id)[0]}}
                                                                            @else
                                                                                {{@$data->total_marks}}
                                                                            @endif
    
                                                                            @php
                                                                                if(@$generalsettingsResultType == 'mark'){
                                                                                    $total_mark+=subjectPercentageMark(@$data->total_marks, @subjectFullMark($exam_details->id, $data->subject->id, $class_id, $section_id));
                                                                                }else{
                                                                                    $total_mark+=@$data->total_marks;
                                                                                }
                                                                            @endphp
                                                                        </p>
                                                                    </td>
                                                                    <td>{{ $subjectStats[$data->subject_id]['max'] ?? '-' }}</td>
<td>{{ $subjectStats[$data->subject_id]['min'] ?? '-' }}</td>
<td>{{ $subjectStats[$data->subject_id]['average'] ?? '-' }}</td>

                                                                    <td>
    {{ $subjectPosition['position'] ?? '-' }}
</td>
                                                                    @if (@$generalsettingsResultType != 'mark')
                                                                        <td>
                                                                            <p>
                                                                                @php
                                                                                    $result = markGpa(@subjectPercentageMark(@$data->total_marks , @subjectFullMark($exam_details->id, $data->subject->id, $class_id, $section_id)));
                                                                                    $main_subject_total_gpa += $result->gpa;
                                                                                @endphp
                                                                                {{@$data->total_gpa_grade}}
                                                                            </p>
                                                                        </td>
                                                                    @endif
                                                                    <td>

                                                                        <p>
                                                                            @php 
                                                                                if($data->total_marks >= 70){
                                                                                    echo 'Excellent';
                                                                                }else if($data->total_marks >= 60){
                                                                                    echo 'Very Good';
                                                                                }else if($data->total_marks >= 50){
                                                                                    echo 'Good';
                                                                                }else if($data->total_marks >= 45){
                                                                                    echo 'Fair';    
                                                                                }else if($data->total_marks >= 40){
                                                                                    echo 'Pass';    
                                                                                }else{
                                                                                    echo 'Fail';    

                                                                                }
                                                                            @endphp
                                                                        </p>
                                                                    </td>
                                                                     @if (@$generalsettingsResultType == 'mark')
    
                                                                        <td>
                                                                            <p>
                                                                                @php
                                                                                    $evaluation= markGpa(subjectPercentageMark(@$data->total_marks, @subjectFullMark($exam_details->id, $data->subject->id, $class_id, $section_id)));
                                                                                @endphp
                                                                                {{@$evaluation->description}}
                                                                            </p>
                                                                        </td>
                                                                        <td>
                                                                            <p>
                                                                                @php
                                                                                    $totalMark = subjectPercentageMark(@$data->total_marks, @subjectFullMark($exam_details->id, $data->subject->id, $class_id, $section_id));
                                                                                    $passMark = $data->subject->pass_mark;
                                                                                @endphp
                                                                                @if ($passMark <= $totalMark)
                                                                                    @lang('exam.pass')
                                                                                @else
                                                                                    @lang('exam.fail')
                                                                                @endif
                                                                            </p>
                                                                        </td>
                                                                    @endif
    
                                                                    @php
                                                                        $count++
                                                                    @endphp

                
            </tr>

             @endforeach
           
        </tbody>
    </table>

    <div class="grades">
        <strong>GRADES:</strong>
        A1* [90-100] &nbsp;
        A1 [80-89] &nbsp;
        B2* [75-79] &nbsp;
        B2 [70-74] &nbsp;
        B3 [65-69] &nbsp;
        C4 [60-64] &nbsp;
        C5 [55-59] &nbsp;
        C6 [50-54] &nbsp;
        D7 [45-49] &nbsp;
        E8 [35-44] &nbsp;
        F9 [0-34]
    </div>

    @if (!empty($skills))
         <table class="behavior-table">

       
        <tr>
             @foreach($skills as $skillName => $value)
                    
                    <td><strong>{{ $skillName }}</strong>{{$value}}</td>
                @endforeach
            
        </tr>
       
    </table>
    @endif
   
    @php
    // Determine the school head comment based on overall average
    if ($average_mark >= 75) {
        $headComment = "Excellent performance! Keep up the outstanding work and continue striving for excellence.";
    } elseif ($average_mark >= 60) {
        $headComment = "Good job! There is room for improvement, so continue to work hard to reach even higher levels.";
    } elseif ($average_mark >= 45) {
        $headComment = "Fair performance. With consistent effort and focus, you can significantly improve next term.";
    } else {
        $headComment = "Needs improvement. We encourage you to focus on your studies, seek guidance, and work diligently to achieve better results.";
    }
@endphp


    <div class="comments">
        <p><strong>School Head Name:</strong> PST (MRS) HELEN UWAZIEREM (B.Ed)</p>
<p><strong>School Head Comment:</strong> {{ $headComment }}</p>


        <p><strong>Class Teacher Name:</strong> MR SOJAH GIDEON</p>
        <p><strong>Class Teacher Comment:</strong> WE WILL WORK TOWARDS IMPROVING ON THIS NEXT TERM</p>
    </div>

</div>

</body>
</html>
