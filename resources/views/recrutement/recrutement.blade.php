@extends('layouts.master')
@section('title')Recrutement - FirstViewAgency @endsection
@section('content')

@section('page-head')
    <div class="bg-overlay bg-overlay-gradient bg-section"
         style="background-image:url({{asset('storage/head-page/bg2.jpg')}});">
        <h1>recrutement</h1>
    </div>
@endsection

<div class="container pt-4">
    <div class="row">

        @foreach ($myrecrutements as $recrutements)
            <div class="col-xs-12 col-sm-12 col-md-12 pb-3 aos-init" data-aos="fade-up">
                <div class="shadow p-2 mb-2 bg-white rounded rec">
                    <div class="card text-center">
                        <div class="card-header">
                            <h3 class="card-title pt-2">{{ $recrutements->title }}</h3>
                        </div>
                        <div class="card-body">
                            <strong>
                                <p class="card-text">{{$recrutements->excerpt}}</p>
                            </strong>
                            <h6 class="text-muted py-3">{{$recrutements->created_at->format('M d ,yy')}}</h6>
                        </div>
                        <div class="card-footer p-3">
                            <a href="{{url('/offre/'.$recrutements->slug)}}" class="btn-fv">Postuler</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
@endsection
