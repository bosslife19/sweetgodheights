<head>
   
<link rel="stylesheet" href="{{ asset('public/backEnd/vendors/css/jquery-ui.css') }}" />
<link rel="stylesheet" href="{{ asset('public/backEnd/vendors/css/bootstrap-datepicker.min.css') }}" />
<link rel="stylesheet" href="{{ asset('public/backEnd/vendors/font_awesome/css/all.min.css') }}" />
<link rel="stylesheet" href="{{asset('public/backEnd/vendors/themefy_icon/themify-icons.css')}}" />
<link rel="stylesheet" href="{{ asset('public/backEnd/vendors/css/flaticon.css') }}" />
<link rel="stylesheet" href="{{ asset('public/backEnd/vendors/css/fnt.min.css') }}" />
<link rel="stylesheet" href="{{ asset('public/backEnd/vendors/css/nice-select.css') }}" />
<link rel="stylesheet" href="{{ asset('public/backEnd/vendors/css/toastr.min.css') }}" />
@if(userRtlLtl() ==1)
    <link rel="stylesheet" href="{{ asset('public/backEnd/assets/css/rtl/bootstrap.rtl.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/backEnd/assets/css/global_rtl.css') }}">
@else
    <link rel="stylesheet" href="{{ asset('public/backEnd/vendors/css/bootstrap.min.css') }}" />
@endif
<link rel="stylesheet" href="{{ asset('public/backEnd/assets/css/style.css')}}" />
@if(moduleStatusCheck('WhatsappSupport'))
<link rel="stylesheet" href="{{ asset('public/whatsapp-support/style.css') }}">
@endif 
@if(\Request::route()->getName() == "fees.fees-invoice-settings")
<link rel="stylesheet" href="{{ asset('public/backEnd/vendors/select2/css/select2.min.css')}}" />
@endif 
@include('backEnd.partials.css')
@if(userRtlLtl() ==1)
    <style>
        .demo_addons{
            float: left!important;
            margin-left: 30px!important;
        } 
    </style>
@endif
    <x-root-css/>
    @stack('css')

</head>
<h1 style="display:none;">Hello</h1>
@section('title')
    @lang('reports.mark_sheet_report_student')
@endsection

    <style>
        th {
            border: 1px solid black;
            text-align: center;
        }

        td {
            text-align: center;
        }

        td.subject-name {
            text-align: left;
            padding-left: 10px !important;
        }

        table.marksheet {
            width: 100%;
            border: 1px solid var(--border_color) !important;
        }

        table.marksheet th {
            border: 1px solid var(--border_color) !important;
        }

        table.marksheet td {
            border: 1px solid var(--border_color) !important;
        }

        table.marksheet thead tr {
            border: 1px solid var(--border_color) !important;
        }

        table.marksheet tbody tr {
            border: 1px solid var(--border_color) !important;
        }

        .studentInfoTable {
            width: 100%;
            padding: 0px !important;
        }

        .studentInfoTable td {
            padding: 0px !important;
            text-align: left;
            padding-left: 15px !important;
        }

        h4 {
            text-align: left !important;
        }

        hr {
            margin: 0px;
        }

        #grade_table th {
            border: 1px solid black;
            text-align: center;
            background: #351681;
            color: white;
        }

        #grade_table td {
            color: black;
            text-align: center !important;
            border: 1px solid black;
        }

        .single-report-admit table tr:last-child td {
            border-bottom: 0 !important ;
        }

        .single-report-admit table tr td {
            border-color: #dee2e6 !important;
        }

        .custom_table tbody tr th{
            border-color: #dee2e6 !important;
        }
        .spacing tr th{
            padding: 3px 10px !important;
            vertical-align: middle;
            border: 1px solid #dee2e6 !important;
        }

        .spacing tr td{
            padding: 0px 40px !important;
            vertical-align: middle;
        }
        @media (max-width: 576px){
            .single-report-admit .report-admit-img{
                position: initial;
                margin: auto;
                margin-top: 20px;
            }
        }

    </style>
    



    @if(isset($mark_sheet))
    
        <style>
            * {
                margin: 0;
                padding: 0;
            }

            body {
                font-size: 12px;
                font-family: 'Poppins', sans-serif;
            }

            .student_marks_table {
                width: 100%;
                margin: 0;
                padding: 30px;
            }

            .text_center {
                text-align: center;
            }

            p {
                margin: 0;
                font-size: 12px;
                text-transform: capitalize;
            }

            ul {
                margin: 0;
                padding: 0;
            }

            li {
                list-style: none;
            }

            td {
                border: 1px solid var(--border_color);
                padding: .3rem;
                text-align: center;
            }

            th {
                border: 1px solid var(--border_color);
                text-transform: capitalize;
                text-align: center;
                padding: .5rem;
                white-space: nowrap;
            }

            thead {
                font-weight: bold;
                text-align: center;
                color: var(--base_color);
                font-size: 10px
            }

            .custom_table {
                width: 100%;
            }

            table.custom_table thead th {
                padding-right: 0;
                padding-left: 0;
            }

            table.custom_table thead tr > th {
                border: 0;
                padding: 0;
            }

            /* tr:last-child td {
                border: 0 !important;
            }
            tr:nth-last-child(2) td {
                border: 0 !important;
            }
            tr:nth-last-child(3) td {
                border: 0 !important;
            } */

            table.custom_table thead tr th .fees_title {
                font-size: 12px;
                font-weight: 600;
                border-top: 1px solid #726E6D;
                padding-top: 10px;
                margin-top: 10px;
            }

            .border-top {
                border-top: 0 !important;
            }

            .border_full {
                border: 1px solid black !important;
            }

            .border_bottom {
                border-bottom: 1px solid black !important;
            }

            .border_top {
                border-top: 1px solid black !important;
            }

            .custom_table th ul li {
            }

            .custom_table th ul li p {
                margin-bottom: 10px;
                font-weight: 500;
                font-size: 14px;
            }

            /* tbody td p{
              text-align: right;
            } */
            tbody td {
                padding: 0.8rem;
            }

            table {
                border-spacing: 10px;
                width: 65%;
                margin: auto;
            }

            .fees_pay {
                text-align: center;
            }

            .border-0 {
                border: 0 !important;
            }

            .copy_collect {
                text-align: center;
                font-weight: 500;
                color: #000;
            }

            .copyies_text {
                display: flex;
                justify-content: space-between;
                margin: 30px 0;
            }

            .copyies_text li {
                text-transform: capitalize;
                color: #000;
                font-weight: 500;
                border-top: 1px dashed #ddd;
            }

            .text_left {
                text-align: left;
            }

            .italic_text {
            }

            .student_info {

            }

            .student_info li {
                display: flex;
            }

            .info_details {
                display: flex;
                flex-wrap: wrap;
                margin-top: 30px;
                margin-bottom: 30px;
            }

            .info_details li > p {
                flex-basis: 20%;
            }

            .info_details li {
                display: flex;
                flex-basis: 50%;
            }

            .school_name {
                text-align: center;
            }

            .numbered_table_row {
                display: flex;
                justify-content: space-between;
                margin-top: 40px;
                align-items: center;
            }

            .numbered_table_row thead {
                border: 1px solid var(--base_color)
            }

            .numbered_table_row h3 {
                font-size: 24px;
                text-transform: uppercase;
                margin-top: 15px;
                font-weight: 500;
                display: inline-block;
                border-bottom: 2px solid var(--base_color);
            }

            .ingle-report-admit .numbered_table_row td {
                border: 1px solid var(--border_color);
                padding: .4rem;
                font-weight: 400;
                color: var(--base_color);
            }

            .table#grade_table_new th {
                border: 1px solid #726E6D !important;
                padding: .6rem !important;
                font-weight: 600;
                color: var(--base_color);
                font-size: 10px;
            }

            td.border-top.border_left_hide {
                border-left: 0;
                text-align: left;
                font-weight: 600;
            }

            .devide_td {
                padding: 0;
            }

            .devide_td p {
                border-bottom: 1px solid var(--base_color);
            }

            .ssc_text {
                font-size: 20px;
                font-weight: 500;
                color: var(--base_color);
                margin-bottom: 20px;
            }

            table#grade_table_new td {
                padding: 0 !important;
                font-size: 8px;
            }

            table#grade_table_new {
                border-bottom: 1px solid #726E6D !important;
            }



            .marks_wrap_area {
                display: flex;
                align-items: center;
            }

            .numbered_table_row {
                display: flex;
                justify-content: center;
                margin-top: 40px;
                align-items: center;
            }

            #grade_table th {
                border: 1px solid #dee2e6;
                border-top-style: solid;
                border-top-width: 1px;
                text-align: left;
                background: #351681;
                color: white;
                background: #f2f2f2;
                color: var(--base_color);
                font-size: 12px;
                font-weight: 500;
                text-transform: uppercase;
                border-top: 0px;
                padding: 5px 4px;
                background: transparent;
                border-bottom: 1px solid rgba(130, 139, 178, 0.15) !important;
            }

            #grade_table td {
                color: #828bb2;
                padding: 0 7px;
                font-weight: 400;
                background-color: transparent;
                border-right: 0;
                border-left: 0;
                text-align: left !important;
                border-bottom: 1px solid rgba(130, 139, 178, 0.15) !important;
            }
            .single-report-admit table tr th {
                border: 0;
                border-bottom: 1px solid rgba(67, 89, 187, 0.15) !important;
                text-align: left
            }
            .single-report-admit table thead tr th {
                border: 0 !important;
            }
            .single-report-admit table tbody tr:last-of-type td {
                border-bottom: 1px solid rgba(67, 89, 187, 0.15) !important;
            }
            .single-report-admit table tr td {
                vertical-align: middle;
                font-size: 12px;
                color: #828BB2;
                font-weight: 400;
                border: 0;
                border-bottom: 1px solid rgba(130, 139, 178, 0.15) !important;
                text-align: left
            }

            .single-report-admit table.summeryTable tbody tr:first-of-type td,
            .single-report-admit table.comment_table tbody tr:first-of-type td {
                border-top:0 !important;
            }
            /* new  style  */
            .single-report-admit{}
            .single-report-admit .student_marks_table{
                background: -webkit-linear-gradient(
                        90deg
                        , #d8e6ff 0%, #ecd0f4 100%);
                background: -moz-linear-gradient(90deg, #d8e6ff 0%, #ecd0f4 100%);
                background: -o-linear-gradient(90deg, #d8e6ff 0%, #ecd0f4 100%);
                background: linear-gradient(
                        90deg
                        , #d8e6ff 0%, #ecd0f4 100%);
            }

            .profile_100{
                width: 100px;
                height: 100px;
                background-size: cover;
                background-position: center center;
                border-radius: 5px;
                background-repeat: no-repeat;
            }
        </style>
        @if(resultPrintStatus('vertical_boarder'))
            <style>
                .single-report-admit table tr td {
                    border: 1px solid rgba(130, 139, 178, 0.15) !important;
                }
                .single-report-admit table thead tr th{
                    border: 1px solid rgba(130, 139, 178, 0.15) !important;
                }

                .gray_header_table thead tr:first-child th {
                    border: 1px solid rgba(130, 139, 178, 0.15) !important;
                }
                .gray_header_table thead th{
                    padding-left: 10px !important;
                }
                .single-report-admit table tr td{
                    padding-left: 8px !important;
                }
                .single-report-admit table tr th{
                    border: 1px solid rgba(130, 139, 178, 0.15) !important;
                    padding: 8px !important;
                }
                .custom_table thead th{
                    text-align: center !important;
                }
                .custom_table tbody td{
                    text-align: center !important;
                }
                .custom_table thead tr:first-child th:first-child {
                    text-align: left !important;
                }
                .custom_table thead tr:first-child td:first-child {
                    text-align: center !important;
                }
                .custom_table tbody tr td:last-child{
                    text-align: left !important;
                }
            </style>
        @endif
       
            <section class="student-details">
                <div class="container-fluid p-0">
                    <div class="white-box mt-40">
                        <div class="row">
                            <div class="col-sm-6 no-gutters">
                                <div class="main-title">
                                    <h3 class="mb-15">@lang('reports.mark_sheet_report')</h3>
                                </div>
                            </div>
                            
                            {{-- <div class="col-sm-6 pull-sm-right text-sm-right mb-3 mb-sm-0">
                                <a href="{{route('mark_sheet_report_print', [$exam_details->id, $class_id, $section_id, $studentDetails->id])}}"
                                   class="primary-btn small fix-gr-bg pull-sm-right" target="_blank">
                                    <i class="ti-printer"> </i>
                                    @lang('reports.print')
                                </a>
                            </div> --}}
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="single-report-admit">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div class="row">
                                                            <div class="col-xl-2 col-sm-8 text-center text-xl-left mb-3 mb-xl-0">
                                                                <img class="logo-img" src="{{ generalSetting()->logo }}" alt="{{generalSetting()->school_name }}">
                                                            </div>
                                                            <div class="col-xl-8  col-sm-8 text-center">
                                                                <h3 class="text-white" style="font-size: 30px;margin-bottom: 0px;"> {{isset(generalSetting()->school_name)?generalSetting()->school_name:'Infix School Management ERP'}} </h3>
                                                                <p class="text-white mb-0" style="font-size: 16px;">  {{isset(generalSetting()->address)?generalSetting()->address:'Infix School Address'}} </p>
                                                                <p class="text-white mb-0" style="font-size: 16px;">
                                                                    @lang('common.email'): <span class="text-lowercase">{{isset(generalSetting()->email)?generalSetting()->email:'hello@aorasoft.com'}}</span>,
                                                                    @lang('common.phone'): {{isset(generalSetting()->phone)?generalSetting()->phone:'+96897002784'}} </p>
                                                            </div>
    
                                                        </div>
                                                        <div class="report-admit-img profile_100" style="background-image: url({{ file_exists(@$studentDetails->studentDetail->student_photo) ? asset($studentDetails->studentDetail->student_photo) : asset('public/uploads/staff/demo/staff.jpg') }})"></div>
    
                                                    </div>
                                                    {{--Start  Result Table --}}
                                                    <div class="student_marks_table">
                                                        <table class="custom_table" >
                                                            <thead>
                                                            <tr>
                                                                <th colspan="1" class="text_left" style="border: 0px !important;">
                                                                    <div class="main-title">
                                                                        <h2 class="mb-20">
                                                                            {{$student_detail->studentDetail->full_name}}
                                                                        </h2>
                                                                    </div>
                                                                    <div class="marks_wrap_area d-block">
                                                                        <div class="row">
                                                                            <div class="col-lg-8">
                                                                                <div class="d-flex flex-wrap" style="grid-gap: 30px;">
                                                                                    <ul class="student_info">
                                                                                        <li>
                                                                                            <p>
                                                                                                @lang('common.academic_year')
                                                                                            </p>
                                                                                            <p>
                                                                                                <strong>
                                                                                                    : {{ @$student_detail->academic->year }}
                                                                                                </strong>
                                                                                            </p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <p>
                                                                                                @lang('common.class')
                                                                                            </p>
                                                                                            <p class="italic_text">
                                                                                                <strong>
                                                                                                    : {{$student_detail->class->class_name}}
                                                                                                </strong>
                                                                                            </p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <p>
                                                                                                @lang('common.section')
                                                                                            </p>
                                                                                            <p class="italic_text">
                                                                                                <strong>
                                                                                                    : {{$student_detail->section->section_name}}
                                                                                                </strong>
                                                                                            </p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <p>
                                                                                                @lang('student.admission_no')
                                                                                            </p>
                                                                                            <p class="italic_text">
                                                                                                <strong>
                                                                                                    : {{@$student_detail->student->admission_no}}
                                                                                                </strong>
                                                                                            </p>
                                                                                        </li>
    
                                                                                        <li>
                                                                                            <p>
                                                                                                @lang('student.roll_no')
                                                                                            </p>
                                                                                            <p>
                                                                                                <strong>
                                                                                                    : {{$student_detail->studentDetail->roll_no}}
                                                                                                </strong>
                                                                                            </p>
                                                                                        </li>
    
                                                                                        <li>
                                                                                            <p>
                                                                                                @lang('common.date_of_birth')
                                                                                            </p>
                                                                                            <p>
                                                                                                <strong>
                                                                                                    : {{$student_detail->studentDetail->date_of_birth != ""? dateConvert($student_detail->studentDetail->date_of_birth):''}}
                                                                                                </strong>
                                                                                            </p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4 text-black">
                                                                                @php
                                                                                    $generalsettingsResultType = generalSetting()->result_type;
                                                                                @endphp
                                                                                @if(@$grades)
                                                                                    <div class="table-responsive">
                                                                                    <table class="table " id="grade_table">
                                                                                        <thead>
                                                                                        <tr>
                                                                                            <th>@lang('reports.staring')</th>
                                                                                            <th>@lang('reports.ending')</th>
                                                                                            @if (@$generalsettingsResultType != 'mark')
                                                                                                <th>@lang('exam.gpa')</th>
                                                                                                <th>@lang('exam.grade')</th>
                                                                                            @endif
                                                                                            <th>@lang('homework.evalution')</th>
                                                                                        </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                        @foreach($grades as $grade_d)
                                                                                            <tr>
                                                                                                <td>{{$grade_d->percent_from}}</td>
                                                                                                <td>{{$grade_d->percent_upto}}</td>
                                                                                                @if (@$generalsettingsResultType != 'mark')
                                                                                                    <td>{{$grade_d->gpa}}</td>
                                                                                                    <td>{{$grade_d->grade_name}}</td>
                                                                                                @endif
                                                                                                <td class="text-left">{{$grade_d->description}}</td>
                                                                                            </tr>
                                                                                        @endforeach
                                                                                        </tbody>
                                                                                    </table>
                                                                                    </div>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        {{--end sm_marks_grades --}}
                                                                    </div>
                                                                </th>
                                                            </tr>
                                                            </thead>
                                                        </table>
                                                        <div class="student_name_highlight" style="text-align: center; margin-bottom: 20px;">
                                                            <h3>{{$exam_details->title}}</h3>
                                                            <h4 style="text-align: center !important;"> <span style="border-bottom: 3px double;">@lang('reports.mark_sheet')</span></h4>
                                                        </div>
    
    
    
                                                        <div class="table-responsive">
                                                        <table class="custom_table">
                                                           
                                                            <thead>
                                                            <!--                                                            <tr>
    
                                                                    <th colspan="5">{{$exam_details->title}}</th>
                                                                </tr>-->
                                                            <tr>
                                                                                                                                <th>@lang('reports.subject_name')</th>
                                                                <th>1st C.A</th>
                                                                <th>2ND C.A</th>
                                                                <th>3RD C.A</th>
                                                                <th>EXAM</th>
                                                                <th>TOTAL</th>
                                                                @if ($exam_details->title =='Third Term')
                                                             <th>Cummulative</th>
                                                            @endif
                                                                @if (@$generalsettingsResultType != 'mark')
                                                                    <th>@lang('reports.letter_grade')</th>
                                                                @endif
                                                                <th>@lang('reports.remarks')</th>
                                                                @if (@$generalsettingsResultType == 'mark')
                                                                    <th>@lang('homework.evaluation')</th>
                                                                    <th>@lang('exam.pass_fail')</th>
                                                                @endif
    
                                                            </tr>
                                                            </thead>
                                                            <tbody>
    
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
                                                                $total_mark=0;
                                                                $temp_grade=[];
                                                                $average_passing_mark = averagePassingMark($exam_type_id);
                                                            @endphp
                                                            @foreach($mark_sheet as $data)
                                                                @php
                                                                    $temp_grade[]=$data->total_gpa_grade;
                                                                    if ($data->subject_id==$optional_subject) {
                                                                        continue;
                                                                    }
                                                                @endphp
                                                                <tr>
                                                                    <th>
                                                                        {{$data->subject->subject_name}}
                                                                    </th>
                                                                    @php
    $ca = collect($caScores)->firstWhere('subject_id', $data->subject_id);
    
@endphp
<td>{{ $ca['Ist CA'] ?? '-' }}</td>
<td>{{ $ca['2nd CA'] ?? '-' }}</td>
<td>{{ $ca['3rd CA'] ?? '-' }}</td>
<td>{{ $ca['Exam'] ?? '-' }}</td>

@if ($exam_details->title =='Third Term')
    <td>{{ $ca['cummulative'] ?? '-' }}</td>
@endif
                                                                    {{-- <td>
                                                                        <p>
                                                                            @if (@$generalsettingsResultType == 'mark')
                                                                                {{subject100PercentMark()}}
                                                                            @else
                                                                                {{@subjectFullMark($exam_details->id, $data->subject->id, $class_id, $section_id )}}
                                                                            @endif
                                                                        </p>
                                                                    </td> --}}
                                                                    {{-- <td>
                                                                        <p>
                                                                            @if (@$generalsettingsResultType == 'mark')
                                                                                {{subjectPercentageMark(@subjectHighestMark($exam_type_id, $data->subject->id, $class_id, $section_id), @subjectFullMark($exam_details->id, $data->subject->id, $class_id, $section_id))}}
                                                                            @else
                                                                                {{@subjectHighestMark($exam_type_id, $data->subject->id, $class_id, $section_id)}}
                                                                            @endif
                                                                        </p>
                                                                    </td> --}}
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
                                                                            {{@$data->teacher_remarks}}
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
                                                            @if(@$optional_subject_setup->gpa_above)
                                                                <tr>
                                                                    <td class="nowrap">@lang('reports.average_mark')</td>
                                                                    <td class="nowrap">
                                                                        <p>{{number_format($average_passing_mark, 2, '.', '')}}</p>
                                                                    </td>
                                                                </tr>
                                                                @foreach($mark_sheet as $data)
                                                                    @php
                                                                        if ($data->subject_id!=$optional_subject) {
                                                                            continue;
                                                                        }
                                                                    @endphp
                                                                    <tr>
                                                                        <th>
                                                                            {{$data->subject->subject_name}}
                                                                        </th>
                                                                        <td>
                                                                            <p>
                                                                                {{@subjectFullMark($exam_details->id, $data->subject->id, $class_id, $section_id )}}
                                                                            </p>
                                                                        </td>
                                                                        <td>
                                                                            <p>{{@subjectHighestMark($exam_type_id, $data->subject->id, $class_id, $section_id)}}</p>
                                                                        </td>
                                                                        <td>
                                                                            <p>
                                                                                {{@$data->total_marks}}
                                                                                @php
                                                                                    if(@$generalsettingsResultType == 'mark'){
                                                                                        $total_mark+=subjectPercentageMark(@$data->total_marks, @subjectFullMark($exam_details->id, $data->subject->id, $class_id, $section_id));
                                                                                    }else{
                                                                                        $total_mark+=@$data->total_marks;
                                                                                    }
                                                                                @endphp
                                                                            </p>
                                                                        </td>
                                                                        @if (@$generalsettingsResultType != 'mark')
                                                                            <td>
                                                                                <p>
                                                                                    {{@$data->total_gpa_grade}}
                                                                                </p>
                                                                            </td>
                                                                        @endif
                                                                        <td>
                                                                            <span>
                                                                                @php
                                                                                    if($data->total_gpa_point > @$optional_subject_setup->gpa_above){
                                                                                        $optional_countable_gpa= $data->total_gpa_point - @$optional_subject_setup->gpa_above;
                                                                                    }else{
                                                                                        $optional_countable_gpa=0;
                                                                                    }
                                                                                @endphp
                                                                            </span>
                                                                            <p>
                                                                                {{@$data->teacher_remarks}}
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
                                                                    </tr>
                                                                @endforeach
                                                            @endif
                                                            </tbody>
                                                        </table>
                                                        </div>
                                                        <div class="col-md-6 offset-md-3">
                                                            <div class="table-responsive">
                                                            <table class="table @if(resultPrintStatus('vertical_boarder')) mt-5 @endif">
                                                                <tbody class="spacing">
                                                                <tr>
                                                                    {{-- <td>@lang('reports.attendance')</td>
                                                                    @if(isset($exam_content))
                                                                        <td class="nowrap">
                                                                            <p>{{@$student_attendance}} @lang('reports.of') {{@$total_class_days}}</p>
                                                                        </td>
                                                                    @else
                                                                        <td class="nowrap">
                                                                            <p>@lang('reports.no_data_found')</p>
                                                                        </td>
                                                                    @endif --}}
                                                                    <td>@lang('exam.total_mark')</td>
                                                                    <td>{{$total_mark}}</td>
                                                                </tr>
                                                                @if ($average_passing_mark)
                                                                    <tr>
                                                                        <td class="nowrap">@lang('reports.average_passing_mark')</td>
                                                                        <td class="nowrap">
                                                                            <p>{{number_format($average_passing_mark, 2, '.', '')}}</p>
                                                                        </td>
                                                                        <td>@lang('common.status')</td>
                                                                        <td class="nowrap">
                                                                            @php
                                                                                $average_mark = 0;
                                                                                if($Optional_subject_count){
                                                                                $average_mark = $total_mark/($Optional_subject_count);
                                                                                }
    
                                                                            @endphp
                                                                            <p><strong>{{$average_passing_mark <= $average_mark ? __('exam.pass') : __('exam.fail')}}</strong></p>
                                                                        </td>
                                                                    </tr>
                                                                @endif
                                                                <tr>
                                                                    <td class="nowrap {{$generalsettingsResultType == 'mark' ? 'text-center' : ''}}" colspan="{{$generalsettingsResultType == 'mark' ? '2' : ''}}">@lang('reports.average_mark')</td>
                                                                    <td colspan="{{$generalsettingsResultType == 'mark' ? '2' : ''}}">
                                                                        @php
                                                                            $average_mark = 0;
                                                                            if($Optional_subject_count){
                                                                            $average_mark = $total_mark/($Optional_subject_count);
                                                                            }
                                                                        @endphp
                                                                        {{number_format(@$average_mark, 2, '.', '')}}
                                                                    </td>
    
                                                                    @if (@$generalsettingsResultType != 'mark')
                                                                        {{-- <td class="nowrap">@lang('reports.gpa_above') ( {{@$optional_subject_setup->gpa_above}} )</td>
                                                                        <td>
                                                                            <p>
                                                                                {{$optional_countable_gpa}}
                                                                            </p>
                                                                        </td> --}}
                                                                    @endif
                                                                </tr>
                                                                @if(@$generalsettingsResultType != 'mark')
                                                                    <tr>
                                                                        {{-- <td class="nowrap">@lang('reports.without_optional')</td>
                                                                        <td>
                                                                            @php
                                                                                $without_optional = 0;
                                                                                if($Optional_subject_count){
                                                                                $without_optional=$main_subject_total_gpa/$Optional_subject_count;
                                                                                }
    
                                                                            @endphp
                                                                            {{number_format($without_optional, 2,'.','')}}
                                                                        </td> --}}
                                                                        <td>@lang('exam.gpa')</td>
                                                                        <td>
                                                                            @php
                                                                                $final_result= 0;
                                                                                if($Optional_subject_count){
                                                                                 $final_result = ($main_subject_total_gpa + $optional_countable_gpa) /$Optional_subject_count;
                                                                                }
    
                                                                                    if($final_result >= $maxGrade){
                                                                                        echo number_format($maxGrade, 2,'.','');
                                                                                    } else {
                                                                                        echo number_format($final_result, 2,'.','');
                                                                                    }
                                                                            @endphp
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>@lang('exam.grade')</td>
                                                                        <td>
                                                                            @php
                                                                                if(in_array($failgpaname->grade_name,$temp_grade)){
                                                                                    echo $failgpaname->grade_name;
                                                                                }else{
                                                                                    if($final_result >= $maxGrade){
                                                                                        $grade_details= App\SmResultStore::remarks($maxGrade);
                                                                                    } else {
                                                                                        $grade_details= App\SmResultStore::remarks($final_result);
                                                                                    }
                                                                                }
                                                                            @endphp
                                                                            {{@$grade_details->grade_name}}
                                                                        </td>
                                                                        <td>@lang('homework.evaluation')</td>
                                                                        <td class="nowrap">
                                                                            @php
                                                                                if(in_array($failgpaname->grade_name,$temp_grade)){
                                                                                    echo $failgpaname->description;
                                                                                }else{
                                                                                    if($final_result >= $maxGrade){
                                                                                        $grade_details= App\SmResultStore::remarks($maxGrade);
                                                                                    } else {
                                                                                        $grade_details= App\SmResultStore::remarks($final_result);
                                                                                    }
                                                                                }
                                                                            @endphp
                                                                            <p>{{@$grade_details->description}}</p>
                                                                        </td>
                                                                    </tr>
                                                                    {{-- <tr>
                                                                        <td colspan="2" style="text-align: center !important;">
                                                                            @lang('exam.position')
                                                                        </td>
                                                                        <td colspan="2" style="text-align: center !important;">{{getStudentMeritPosition($class_id, $section_id, $exam_type_id, $student_detail->id)}}</td>
    
                                                                    </tr> --}}
                                                                @endif
    
                                                                </tbody>
                                                            </table>
                                                            </div>
                                                        </div>
    
                                                        <script>
                                                            function myFunction(value, subject) {
                                                                if (value != "") {
                                                                    var res = Number(value / subject).toFixed(2);
                                                                } else {
                                                                    var res = 0;
                                                                }
                                                                // document.getElementById("main_subject_total_gpa").innerHTML = res;
                                                            }
                                                            function myFunction2(value, subject , maxGrade) {
                                                                if (value != "") {
                                                                    var totalGrade = Number(value / subject).toFixed(2);
                                                                    if(totalGrade >= maxGrade){
                                                                        var res = Number(maxGrade).toFixed(2);
                                                                    } else {
                                                                        var res = totalGrade;
                                                                    }
                                                                } else {
                                                                    var res = 0;
                                                                }
                                                                // document.getElementById("final_result").innerHTML = res;
                                                            }
                                                            myFunction({{ $main_subject_total_gpa }}, {{ $Optional_subject_count }});
                                                            myFunction2( {{ $main_subject_total_gpa +$optional_countable_gpa  }}, {{ $Optional_subject_count }}, {{$maxGrade}});
                                                        </script>
    
                                                        @if(isset($exam_content))
                                                            <table style="width:100%" class="border-0 mark_sheet_footer">
                                                                <tbody>
                                                                <tr>
                                                                    <td class="border-0" style="border: 0 !important;">
                                                                        <p class="result-date" style="text-align:left; float:left; display:inline-block; margin-top:50px; padding-left: 0;">
                                                                            @lang('reports.date_of_publication_of_result') :
                                                                            <strong>
                                                                                {{dateConvert(@$exam_content->publish_date)}}
                                                                            </strong>
                                                                        </p>
                                                                    </td>
                                                                    <td class="border-0" style="border: 0 !important;">
                                                                        <div class="text-right d-flex flex-column justify-content-end">
                                                                            <div class="thumb text-right">
                                                                                <img src="{{@$exam_content->file}}" width="100px">
                                                                            </div>
                                                                            <p style="text-align:right; float:right; display:inline-block; margin-top:5px;">
                                                                                ({{@$exam_content->title}})
                                                                            </p>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

    @endif


