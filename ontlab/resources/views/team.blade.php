@extends('layouts.main')
<head>
    <title>Team</title>
</head>
@section('main-section')

    <section id="team" class="team">
        <div  class="section-header">
            <h2>Faculty</h2>
        </div>

        <div class="container" data-aos="fade-up">
        <div class="row gy-4">
            @php
                $faculty_members=DB::table('member')->select('*')->where("desgination", "=", "Faculty")->get();
            @endphp
            @foreach ($faculty_members as $faculty)
            <x-tm-badge 
            level="{{$faculty->desgination}}"
            username="{{$faculty->name}}" 
            img="{{$faculty->img}}"
            uid="{{$faculty->m_id}}"
            ></x-tm-badge>
            @endforeach
        </div>
        </div>

        <br id = "PhD">
        <div  class="section-header">
            <h2>PhD Students</h2>
        </div>
        <div class="container" data-aos="fade-up">
        <div class="row gy-4">
            @php
                $phd_students=DB::table('member')->select('*')->where("desgination", "=", "PhD and Post Doc")->get();
            @endphp
            @foreach ($phd_students as $phd)
            <x-tm-badge 
            level="{{$phd->desgination}}"
            username="{{$phd->name}}" 
            img="{{$phd->img}}"
            uid="{{$phd->m_id}}"
            ></x-tm-badge>
            @endforeach

        </div>
        
            </div>
            <br  id = "Master">
            <div class="section-header">
                <h2>Masters Students</h2>
            </div>
            <div class="container" data-aos="fade-up">
            <div class="row gy-4">
                @php
                $ms_students=DB::table('member')->select('*')->where("desgination", "=", "Masters")->get();
                @endphp
                @foreach ($ms_students as $ms)
                <x-tm-badge 
                level="{{$ms->desgination}}"
                username="{{$ms->name}}" 
                img="{{$ms->img}}"
                uid="{{$ms->m_id}}"
                ></x-tm-badge>
                @endforeach
            </div>
        
            </div>
            <br id = "UG">
            <div  class="section-header">
            <h2>UG Students</h2>
            </div>
            <div class="container" data-aos="fade-up">
            <div class="row gy-4">
                @php
                $ug_students=DB::table('member')->select('*')->where("desgination", "=", "Bachelors")->get();
                @endphp
                @foreach ($ug_students as $ug)
                <x-tm-badge 
                level="{{$ug->desgination}}"
                username="{{$ug->name}}" 
                img="{{$ug->img}}"
                uid="{{$ug->m_id}}"
                ></x-tm-badge>
                @endforeach
            </div>
            
            <br id = "">
            <div  class="section-header">
            <h2>Interns</h2>
            </div>
            <div class="container" data-aos="fade-up">
            <div class="row gy-4">
                @php
                $interns=DB::table('member')->select('*')->where("desgination", "=", "Intern")->get();
                @endphp
                @foreach ($interns as $intern)
                <x-tm-badge 
                level="{{$intern->desgination}}"
                username="{{$intern->name}}" 
                img="{{$intern->img}}"
                uid="{{$intern->m_id}}"
                ></x-tm-badge>
                @endforeach
            </div>

            </div>
    </section>
@endsection