@extends('layouts.master')

@section('title')Demander Un Devis - FirstViewAgency @endsection

@section('content')

@section('page-head')
    <div class="bg-overlay bg-overlay-gradient bg-section"
         style="background-image:url({{asset('storage/head-page/bg5.jpg')}});">
        <h1>{{__('quote.demander_un_devis')}}</h1>
    </div>
@endsection
<div class="row justify-content-center m-2 mt-5">
    <div class="col-lg-10 entries bg-white shadow">
        <div class="section-title pb-1">
            <h2 class="pt-5 ">{{__('quote.vous_avez_projet')}}</h2>
        </div>
    </div>
</div>

<div class="row justify-content-center m-2 mt-4 mb-5 aos-init" data-aos="fade-up">
    <div class="col-lg-10 entries bg-white shadow">
        <div class="section-title pb-1">
            <h4 class="pt-4 ">{{__('quote.parlons_en')}}</h4>
        </div>
        <p class="text-center">{{__('quote.merci_de_nous')}}</p>

        <form action="/demander-un-devis" method="POST" class="p-3">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input required name="nom" type="text" class="form-control" placeholder="{{__('quote.placeholder_nom')}}">
                </div>
                <div class="form-group col-md-6">
                    <input required name="prenom" type="text" class="form-control"
                           placeholder="{{__('quote.placeholder_societe')}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input required name="email" type="email" class="form-control"
                           placeholder="{{__('quote.placeholder_email')}}">
                </div>
                <div class="form-group col-md-6">
                    <input required name="telephone" type="tel" class="form-control"
                           placeholder="{{__('quote.placeholder_tel')}}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                </div>
                <div class="form-group col-md-3">
                    <div class="form-check form-check-inline d-block">
                        <input class="form-check-input" name="services[]" type="checkbox" id="inlineCheckbox1"
                               value="Intégration">
                        <label class="form-check-label" for="inlineCheckbox1">{{__('quote.check_intégration')}}</label>
                    </div>
                    <div class="form-check form-check-inline d-block">
                        <input class="form-check-input" name="services[]" type="checkbox" id="inlineCheckbox2"
                               value="Création WEB">
                        <label class="form-check-label" for="inlineCheckbox2">{{__('quote.check_création_web')}}</label>
                    </div>
                    <div class="form-check form-check-inline d-block">
                        <input class="form-check-input" name="services[]" type="checkbox" id="inlineCheckbox3"
                               value="Solutions mobiles">
                        <label class="form-check-label"
                               for="inlineCheckbox3">{{__('quote.check_solutions_mobiles')}}</label>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <div class="form-check form-check-inline d-block">
                        <input class="form-check-input" name="services[]" type="checkbox" id="inlineCheckbox4"
                               value="Réseaux sociaux">
                        <label class="form-check-label"
                               for="inlineCheckbox4">{{__('quote.check_réseaux_sociaux')}}</label>
                    </div>
                    <div class="form-check form-check-inline d-block">
                        <input class="form-check-input" name="services[]" type="checkbox" id="inlineCheckbox5"
                               value="Référencement">
                        <label class="form-check-label"
                               for="inlineCheckbox5">{{__('quote.check_référencement')}}</label>
                    </div>
                    <div class="form-check form-check-inline d-block">
                        <input class="form-check-input" name="services[]" type="checkbox" id="inlineCheckbox6"
                               value="Événementiel">
                        <label class="form-check-label" for="inlineCheckbox6">{{__('quote.check_evénementiel')}}</label>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <div class="form-check form-check-inline d-block">
                        <input class="form-check-input" name="services[]" type="checkbox" id="inlineCheckbox7"
                               value="Design">
                        <label class="form-check-label" for="inlineCheckbox7">{{__('quote.check_design')}}</label>
                    </div>
                    <div class="form-check form-check-inline d-block">
                        <input class="form-check-input" name="services[]" type="checkbox" id="inlineCheckbox8"
                               value="Branding">
                        <label class="form-check-label" for="inlineCheckbox8">{{__('quote.check_branding')}}</label>
                    </div>
                    <div class="form-check form-check-inline d-block">
                        <input class="form-check-input" name="services[]" type="checkbox" id="inlineCheckbox9"
                               value="Autre">
                        <label class="form-check-label" for="inlineCheckbox9">{{__('quote.check_autre')}}</label>
                    </div>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <textarea required name="message" class="form-control"
                              placeholder="{{__('quote.placeholder_message')}}"></textarea>
                </div>
                <div class="form-group col-md-4">
                    <div class="g-recaptcha" data-sitekey="6LcxaakZAAAAAESGMyWTwxupTcj-rqHMKgsVM1SJ"></div>
                </div>
            </div>
            <button type="submit" class="btn-fv">{{__('quote.b_envoyer')}}</button>
        </form>
    </div>
</div>

@endsection
