@extends('layouts.master')

@section('title')Nos Profils - FirstViewAgency @endsection

@section('content')
@section('page-head')
    <div class="bg-overlay bg-overlay-gradient bg-section" style="background-image:url({{asset('storage/head-page/bg3.jpg')}});">
        <h1>{{__('profils.nos_Profils')}}</h1>
    </div>
@endsection
<section class="features">
    <div class="container">

        <div id="integration" class="row aos-init shadow rounded" data-aos="fade-up">
            <div class="col-md-6">
                <img src="{{asset('storage/profils/integrateur.png')}}" class="img-fluid" alt="Intégrateur-web">
            </div>
            <div class="col-md-6 text-muted">
                <div class="section-title">
                    <h2>{{__('profils.intégrateur_web')}}</h2>
                </div>

                <p>{{__('profils.intégrateur_web_p1')}}</p>
                <p>{{__('profils.intégrateur_web_p2')}}</p>
            </div>
        </div>

        <div id="creation-web" class="row aos-init shadow rounded" data-aos="fade-up">
            <div class="col-md-6 order-1 order-md-2">
                <img src="{{asset('storage/profils/web-master.png')}}" class="img-fluid" alt="web master">
            </div>
            <div class="col-md-6 text-muted order-2 order-md-1">
                <div class="section-title">
                    <h2>{{__('profils.webmaster')}}</h2>
                </div>
                <p>{{__('profils.webmaster_p1')}}</p>
                <p>{{__('profils.webmaster_p2')}}</p>
            </div>
        </div>

        <div id="solution-mobiles" class="row aos-init shadow rounded" data-aos="fade-up">
            <div class="col-md-6">
                <img src="{{asset('storage/profils/developpeur.png')}}" class="img-fluid" alt="developpeur">
            </div>
            <div class="col-md-6 text-muted">
                <div class="section-title">
                    <h2>{{__('profils.développeur_web')}}</h2>
                </div>
                <p>{{__('profils.développeur_web_p1')}}</p>
                <p>{{__('profils.développeur_web_p2')}}</p>
            </div>
        </div>

        <div id="reseaux-sociaux" class="row aos-init shadow rounded" data-aos="fade-up">
            <div class="col-md-6 order-1 order-md-2">
                <img src="{{asset('storage/profils/community.png')}}" class="img-fluid" alt="community manager">
            </div>
            <div class="col-md-6 text-muted order-2 order-md-1">
                <div class="section-title">
                    <h2>{{__('profils.community_manager')}}</h2>
                </div>
                <p>{{__('profils.community_manager_p1')}}</p>
                <p>{{__('profils.community_manager_p2')}}</p>
            </div>
        </div>
    </div>
</section>
@endsection
