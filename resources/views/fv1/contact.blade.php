@extends('layouts.master')

@section('title')Contact - FirstViewAgency @endsection

@section('content')
@section('page-head')
    <div class="bg-overlay bg-overlay-gradient bg-section"
         style="background-image:url({{asset('storage/head-page/bg4.jpg')}});">
        <h1>{{__('contact.contactez_nous')}}</h1>
    </div>
@endsection

<section class="contact aos-init aos-animate" data-aos="fade-up" data-aos-easing="ease-in-out"
         data-aos-duration="500">
    <div class="container">
        <div class="row bg-white shadow rounded">
            <div class="col-lg-6 order-2 order-md-1 ">
                <div class="section-title pt-2 pb-0">
                    <h2>{{__('contact.trouvez_nous')}}</h2>
                </div>
                <div class="row">
                    <iframe class="p-3"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13587.805749353993!2d-8.015918!3d31.63518!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd0db7895af949bfb!2sFirst%20View%20Agency!5e0!3m2!1sfr!2sma!4v1585927309457!5m2!1sfr!2sma"
                            width="600" height="425" frameborder="0" allowfullscreen="" aria-hidden="false"
                            tabindex="0">
                    </iframe>
                    <div class="sui-fv align-content-center ">
                        <a target="_blank" href="https://twitter.com/firstview14" class="twitter"><i
                                class="bx bxl-twitter"></i></a>
                        <a target="_blank" href="https://www.facebook.com/firstviewagency/" class="facebook"><i
                                class="bx bxl-facebook"></i></a>
                        <a target="_blank" href="https://www.instagram.com/firstviewagency/" class="instagram"><i
                                class="bx bxl-instagram"></i></a>
                        <a target="_blank" href="https://www.linkedin.com/company/firstviewagency-marrakech"
                           class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 order-1 order-md-2">
                <div class="section-title pt-2 pb-0">
                    <h2>Contactez-Nous</h2>
                </div>
                <form action="{{url('/contact')}}" method="POST" role="form" class="php-email-form shadow-none">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="nom" class="form-control" id="name"
                                   placeholder="{{__('contact.placeholder_nom')}}" data-rule="minlen:4"
                                   data-msg="Veuillez saisir au moins 4 caractères">
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" class="form-control" name="email" id="email"
                                   placeholder="{{__('contact.placeholder_email')}}" data-rule="email"
                                   data-msg="Veuillez saisir un e-mail valide">
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" name="tel" id="tel"
                               placeholder="{{__('contact.placeholder_tel')}}"
                               data-rule="minlen:10" data-msg="Veuillez saisir au moins 10">
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="objet" id="subject"
                               placeholder="{{__('contact.placeholder_objet')}}"
                               data-rule="minlen:4" data-msg="Veuillez saisir au moins 8 caractères du sujet">
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                      data-msg="S'il vous plaît écrivez quelque chose pour nous"
                                      placeholder="{{__('contact.placeholder_message')}}"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6LcxaakZAAAAAESGMyWTwxupTcj-rqHMKgsVM1SJ"></div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <!-- <div class="error-message"></div> -->
                        <!-- <div class="sent-message">Votre message a été envoyé. Je vous remercie!</div> -->
                    </div>
                    <div class="text-center">
                        <button class="btn-fv" type="submit">{{__('contact.b_envoyer')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="contact aos-init aos-animate" data-aos="fade-up" data-aos-easing="ease-in-out"
         data-aos-duration="500">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-1 order-2 order-md-1">
                <div class="br-fv">
                    <div class="row mx-2">
                        <div class="col-md-12">
                            <div class="info-box mt-4">
                                <i class="bx bx-map"></i>
                                <h3>CASABLANCA</h3>
                                <p>Rue Ahmed Touki, Rés Ourok, 3ème Etage N13, Casablanca</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-envelope"></i>
                                <h3>{{__('contact.a_email')}}</h3>
                                <p>contact@firstviewagency.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-phone-call"></i>
                                <h3>{{__('contact.a_téléphone')}}</h3>
                                <p>+(212) 661 101 564</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pt-1 order-1 order-md-2">
                <div class="br-fv">
                    <div class="row mx-2">
                        <div class="col-md-12 ">
                            <div class="info-box mt-4">
                                <i class="bx bx-map"></i>
                                <h3>MARRAKECH</h3>
                                <p>1 Rue Baqal, C1 Résidence Koutoubia, 2 Etage, Gueliz-Marrakech</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-envelope"></i>
                                <h3>{{__('contact.a_email')}}</h3>
                                <p>contact@firstviewagency.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-phone-call"></i>
                                <h3>{{__('contact.a_téléphone')}}</h3>
                                <p>+(212) 661 101 340</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


