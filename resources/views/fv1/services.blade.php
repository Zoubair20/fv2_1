@extends('layouts.master')
@section('title')Nos Services - FirstViewAgency @endsection
@section('content')

@section('page-head')
    <div class="bg-overlay bg-overlay-gradient bg-section" style="background-image:url({{asset('storage/head-page/bg1.jpg')}});">
        <h1>{{__('services.nos_services')}}</h1>
    </div>
@endsection
<section class="features">
    <div class="container">

        <div id="integration" class="row aos-init shadow rounded" data-aos="fade-up">
            <div class="col-md-6">
                <img src="{{asset('storage/services/integration.png')}}" class="img-fluid" alt="integration">
            </div>
            <div class="col-md-6 text-muted">
                <div class="section-title">
                    <h2>{{__('services.title_intégration')}}</h2>
                </div>

                <p>{{__('services.description_intégration_p1')}}</p>
                <p>{{__('services.description_intégration_p2')}}</p>
                <ul>
                    <li><i class="icofont-check"></i>{{__('services.emailing')}}</li>
                    <li><i class="icofont-check"></i>{{__('services.pages_sites')}}</li>
                    <li><i class="icofont-check"></i>{{__('services.web_responsive')}}</li>
                    <li><i class="icofont-check"></i>{{__('services.integration_cms')}}</li>
                </ul>
            </div>
        </div>

        <div id="creation-web" class="row aos-init shadow rounded" data-aos="fade-up">
            <div class="col-md-6 order-1 order-md-2">
                <img src="{{asset('storage/services/creation-web.png')}}" class="img-fluid" alt="CRÉATION WEB">
            </div>
            <div class="col-md-6 text-muted order-2 order-md-1">
                <div class="section-title">
                    <h2>{{__('services.création_web_title')}}</h2>
                </div>
                <p>{{__('services.création_web_description_p1')}}</p>
                <p>{{__('services.création_web_description_p2')}}</p>
                <ul>
                    <table style="width: 100%;" >
                        <tbody>
                        <tr>
                            <td><li><i class="icofont-check"></i>{{__('services.création_web_réalisation_vitrine')}}</li></td>
                            <td><li><i class="icofont-check"></i>{{__('services.création_web_Outils_pilotage')}}</li></td>
                        </tr>
                        <tr>
                            <td><li><i class="icofont-check"></i>{{__('services.création_web_site_ecommerce')}}</li></td>
                            <td><li><i class="icofont-check"></i>{{__('services.création_web_réalisation_intranet')}}</li></td>
                        </tr>
                        </tbody>
                    </table>
                </ul>
            </div>
        </div>

        <div id="solution-mobiles" class="row aos-init shadow rounded" data-aos="fade-up">
            <div class="col-md-6">
                <img src="{{asset('storage/services/solutions-mobiles.png')}}" class="img-fluid" alt="SOLUTIONS MOBILES">
            </div>
            <div class="col-md-6 text-muted">
                <div class="section-title">
                    <h2>{{__('services.solutions_mobiles_title')}}</h2>
                </div>
                <p>{{__('services.solutions_mobiles_description_p1')}}</p>
                <p>{{__('services.solutions_mobiles_description_p2')}}</p>
            </div>
        </div>

        <div id="reseaux-sociaux" class="row aos-init shadow rounded" data-aos="fade-up">
            <div class="col-md-6 order-1 order-md-2">
                <img src="{{asset('storage/services/social-media.png')}}" class="img-fluid" alt="RÉSEAUX SOCIAUX">
            </div>
            <div class="col-md-6 text-muted order-2 order-md-1">
                <div class="section-title">
                    <h2>{{__('services.réseaux_sociaux_title')}}</h2>
                </div>
                <p>{{__('services.réseaux_sociaux_description_p1')}}</p>
                <p>{{__('services.réseaux_sociaux_description_p2')}}</p>
            </div>
        </div>

        <div id="referencement" class="row aos-init aos-animate shadow rounded" data-aos="fade-up">
            <div class="col-md-6">
                <img src="{{asset('storage/services/seo.png')}}" class="img-fluid" alt="RÉFÉRENCEMENT">
            </div>
            <div class="col-md-6 text-muted">
                <div class="section-title">
                    <h2>{{__('services.référencement_title')}}</h2>
                </div>
                <p>{{__('services.référencement_description_p1')}}</p>
                <p>{{__('services.référencement_description_p2')}}</p>
            </div>
        </div>
    </div>
</section>
@endsection
