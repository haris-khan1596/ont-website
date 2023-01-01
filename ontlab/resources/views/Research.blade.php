@extends('layouts.main')

<head>
    <title>Research Domains</title>
</head>
@section('main-section')
<section id="rsrchtxt" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Research Domains</h2>
        </div>

        <div class="row gy-3">
            <div class="col-lg-4">
                <h3>ONT is one of the leading research laboratories in networking domain</h3>
            </div>
            <div class="col-lg-6">
                <div class="content ps-0 ps-lg-5">
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore
                        magna aliqua. Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                        in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="services" class="services sections-bg">
    <div class="container" data-aos="fade-up">
        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
            @php
            $domains=DB::table('domains')->select('*')->get();
            @endphp
            @foreach ($domains as $domain)
            <x-domain-badge
            title="{{$domain->name}}"
            description="{{$domain->description}}"
            url="/research/{{$domain->d_id}}"
            ></x-domain-badge>                
            @endforeach
        </div>
    </div>
</section>
@endsection