@extends('layouts.master')

@section('title')FirstViewAgency - Agence de Communication Digitale @endsection

@section('content')
    {{--<div class="container-fluid">--}}
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">
            <!-- Slide 1  -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animated fadeInDown">{{ __('accueil.1_slide_h2') }}</h2>
                    <p class="animated fadeInUp">{{ __('accueil.1_slide_text') }}</p>
                    <a href="/nos-services" class="btn-fv animated fadeInUp">{{ __('accueil.b_decouvrir') }}</a>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animated fadeInDown">{{ __('accueil.2_slide_h2') }}</h2>
                    <p class="animated fadeInUp">{{ __('accueil.2_slide_text') }}</p>
                    <a href="/contact" class="btn-fv animated fadeInUp">{{ __('accueil.b_contactez_nous') }}</a>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animated fadeInDown">{{ __('accueil.3_slide_h2') }}</h2>
                    <p class="animated fadeInUp">{{ __('accueil.3_slide_text') }}</p>
                    <a href="/nos-profils" class="btn-fv animated fadeInUp">{{ __('accueil.nos_profils') }}</a>
                </div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </section>
    <section class="services">
        <div class="container">
            <section class="section-title pb-0">
                <h2 class="text-center">{{ __('accueil.nos_domaines_expertise') }}</h2>
            </section>
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up">
                    <div class="icon-box icon-box-violet">
                        <div class="icon"><i class="flaticon-computer-graphic"></i></div>
                        <h4 class="title">
                            <a href="/nos-services#integration">{{ __('accueil.studio_design') }}</a>
                        </h4>
                        <p class="description">{{__('accueil.description_studio_design')}}</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up"
                     data-aos-delay="100">
                    <div class="icon-box icon-box-violet">
                        <div class="icon"><i class="flaticon-programming"></i></div>
                        <h4 class="title"><a href="/nos-services#creation-web">{{__('accueil.création_web')}}</a></h4>
                        <p class="description">{{__('accueil.description_création_web')}}
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up"
                     data-aos-delay="200">
                    <div class="icon-box icon-box-violet">
                        <div class="icon"><i class="flaticon-facebook"></i></div>
                        <h4 class="title"><a href="/nos-services#reseaux-sociaux">{{__('accueil.réseaux_sociaux')}}</a>
                        </h4>
                        <p class="description">{{__('accueil.description_réseaux_sociaux')}}</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up"
                     data-aos-delay="200">
                    <div class="icon-box icon-box-violet">
                        <div class="icon"><i class="flaticon-programming-1"></i></div>
                        <h4 class="title"><a
                                href="/nos-services#referencement">{{__('accueil.référencement_marketing')}}</a></h4>
                        <p class="description">{{__('accueil.description_référencement_marketing')}}</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <div class="container-fluid">
        <section class="why-us section-bg aos-init aos-animate" data-aos="fade-up" date-aos-delay="200">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 video-box">
                        <img src="{{asset("storage/accueil/equipe.jpg")}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-fingerprint"></i></div>
                            <h4 class="title"><a href="">{{__('accueil.title_qui_somme_nous')}} ?</a></h4>
                            <p class="description">{{__('accueil.description_qui_somme_nous')}}</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-group"></i></div>
                            <h4 class="title"><a href="">{{__('accueil.title_équipe')}}</a></h4>
                            <p class="description">{{__('accueil.description_équipe')}}</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-book"></i></div>
                            <h4 class="title"><a href="">{{__('accueil.title_centre_formation')}}</a></h4>
                            <p class="description">{{__('accueil.description_centre_formation')}}</p>
                        </div>

                    </div>
                </div>

            </div>
        </section>
    </div>

    <section class="cta bg-overlay bg-overlay-dark text--center bg-section mt-5"
             style="background-image: url({{asset('storage/accueil/vos-a-project.png')}});">
        <div class="container-fluid p-0">
            <div class="row text-center text-white">
                <div class="col-xs-3 col-sm-3 col-md-3">
                </div>
                <div class="col-xs-9 col-sm-9 col-md-9">
                    <h3>{{__('accueil.Vous_avez_projet')}}</h3>
                    <p>{{__('accueil.nous_fournissons_des_solutions')}} <br>{{__('accueil.pour_tout_le_monde')}}</p>
                    <div class="clearfix pt-20"></div>
                    <a class="btn-fv"
                       href="https://www.firstviewagency.com/devenir-partenaire">{{__('accueil.parlons_en')}}</a>
                    <div class="clearfix pt-28"></div>
                </div>
            </div>
        </div>
    </section>


    <section class="container-fluid p-5 justify-content-center">
        <section class="section-title pb-0">
            <h2 class="text-center">{{__('accueil.ils_nous_font_confiance')}}</h2>
        </section>
        <div class="container">
            <section class="customer-logos slider pt-0">
                <div class="slide"><img alt="logo nos-references" src="{{asset('storage/nos-references/abroun.png')}}"></div>
                <div class="slide"><img alt="logo nos-references" src="{{asset('storage/nos-references/cogemil.png')}}"></div>
                <div class="slide"><img alt="logo nos-references" src="{{asset('storage/nos-references/arabbest1.png')}}"></div>
                <div class="slide"><img alt="logo nos-references" src="{{asset('storage/nos-references/arganhaus.png')}}"></div>
                <div class="slide"><img alt="logo nos-references" src="{{asset('storage/nos-references/atlas-kasbah.png')}}"></div>
                <div class="slide"><img alt="logo nos-references" src="{{asset('storage/nos-references/beautiful-morocco.png')}}"></div>
                <div class="slide"><img alt="logo nos-references" src="{{asset('storage/nos-references/caceed.png')}}"></div>
                <div class="slide"><img alt="logo nos-references" src="{{asset('storage/nos-references/chadia.png')}}"></div>
                <div class="slide"><img alt="logo nos-references" src="{{asset('storage/nos-references/chronopost.png')}}"></div>
                <div class="slide"><img alt="logo nos-references" src="{{asset('storage/nos-references/cogemat.png')}}"></div>
                <div class="slide"><img alt="logo nos-references" src="{{asset('storage/nos-references/dolce&caffe.png')}}"></div>
                <div class="slide"><img alt="logo nos-references" src="{{asset('storage/nos-references/ec.png')}}"></div>
                <div class="slide"><img alt="logo nos-references" src="{{asset('storage/nos-references/fiat.png')}}"></div>
                <div class="slide"><img alt="logo nos-references" src="{{asset('storage/nos-references/gl-events.png')}}"></div>
                <div class="slide"><img alt="logo nos-references" src="{{asset('storage/nos-references/le-saxo.png')}}"></div>
                <div class="slide"><img alt="logo nos-references" src="{{asset('storage/nos-references/lila-luxe.png')}}"></div>
                <div class="slide"><img alt="logo nos-references" src="{{asset('storage/nos-references/Linguaplatinum.png')}}"></div>
                <div class="slide"><img alt="logo nos-references" src="{{asset('storage/nos-references/logicom.png')}}"></div>
                <div class="slide"><img alt="logo nos-references" src="{{asset('storage/nos-references/marrakech-dental.png')}}"></div>
                <div class="slide"><img alt="logo nos-references" src="{{asset('storage/nos-references/mustang.png')}}"></div>
                {{--                <div class="slide"><img src="{{asset('storage/nos-references/nour bougie.png')}}"></div>--}}
                <div class="slide"><img alt="logo nos-references" src="{{asset('storage/nos-references/oxylite.png')}}"></div>
                {{--                <div class="slide"><img src="{{asset('storage/nos-references/Palace-conseils.png')}}"></div>--}}
                <div class="slide"><img alt="logo nos-references" src="{{asset('storage/nos-references/poolhouse.png')}}"></div>
                <div class="slide"><img alt="logo nos-references" src="{{asset('storage/nos-references/royal-atlas.png')}}"></div>
                <div class="slide"><img alt="logo nos-references" src="{{asset('storage/nos-references/sfiabeauty.png')}}"></div>
                <div class="slide"><img alt="logo nos-references" src="{{asset('storage/nos-references/Universal-Maroc.png')}}"></div>

            </section>
        </div>

    </section>

@endsection

