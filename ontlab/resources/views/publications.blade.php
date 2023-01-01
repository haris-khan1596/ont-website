@extends('layouts.main')

<head>
    <title>{{$type}}</title>
</head>
@section('main-section')

<section class="pubs">

    <div class="container-lg">

        <div class="section-header">
            <h2>{{$type}}</h2>
        </div>

        <table class="table">
        <thead>
            <tr>
                <th scope="col">Sr. no</th>
                <th scope="col">Author(s)</th>
                <th scope="col">Paper Title</th>
                <th scope="col">Link</th>
                <th scope="col">Bibtex</th>
            </tr>
        </thead>

        <tbody class="table-group-divider">

            @foreach ($years as $year)
                <tr>
                <th class="text-center" colspan="5">{{$year->year}}</th>
                </tr>
                @php
                    $count=0
                @endphp
                @foreach ($publications as $pubs)
                    @if ($pubs->year < $year->year)
                        @break
                    @endif
                    @if ($pubs->year == $year->year)

                    <tr>
                        <th scope="row">{{++$count}}</th>
                        <td>{{$pubs->author}}</td>
                        <td>{{$pubs->title}}</td>
                        <td><a href="{{$pubs->link}}" target="_blank" rel="noopener noreferrer">link</a></td>
                        <td>
                            <div class="dropdown show">
                                <a  href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown">
                                    Bibtex
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <pre class="bib-dropdown" style="width:100%; overflow-x: hidden;">
                                        @inproceedings{
                                        {{$pubs->bibtex}}
                                        }
                                    </pre>
                                </div>
                            </div>
                        </td>
                        </tr>
                    @endif
                @endforeach
            @endforeach

            

        </tbody>
        </table>

    </div>

</section>
@endsection


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
