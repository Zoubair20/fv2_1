@extends('layouts.master')
@section('title'){{ $recrutements->title }} - FirstViewAgency @endsection
@section('content')
    <section class="blog aos-init aos-animate" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 entries">
                    <article class="entry entry-single">
                        <h2 class="entry-title text-center">
                            <a href="#">{{ $recrutements->title }}</a>
                        </h2>
                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="#">John
                                        Doe</a>
                                </li>
                                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#">
                                        <time
                                            datetime="2020-01-01">Jan 1, 2020
                                        </time>
                                    </a></li>
                                <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="#">12
                                        Comments</a></li>
                            </ul>
                        </div>

                        <div class="entry-content">{!! $recrutements->body !!}
                        </div>

                        <div class="entry-footer clearfix">
                            <div class="float-right share">
                                <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                                <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                                <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
                            </div>

                        </div>

                    </article><!-- End offre entry -->

                </div><!-- End blog entries list -->
            </div>

            <div class="row justify-content-center m-2">
                <div class="col-lg-8 entries bg-white shadow">
                    <div class="section-title pb-1">
                        <h2 class="pt-5 ">POSTULER À CETTE OFFRE</h2>
                    </div>
                    <form action="/recrutement" method="POST" class="p-3">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input name="nom" type="text" class="form-control" placeholder="VOTRE NOM">
                            </div>
                            <div class="form-group col-md-6">
                                <input name="prenom" type="text" class="form-control" placeholder="VOTRE PRÉNOM">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input name="email" type="text" class="form-control" placeholder="VOTRE EMAIL">
                            </div>
                            <div class="form-group col-md-6">
                                <input name="telephone" type="text" class="form-control" placeholder="TÉLÉPHONE">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <select name="niveau" class="form-control">
                                    <option selected>NIVEAU D'ÉTUDE</option>
                                    <option>Bac</option>
                                    <option>Bac+1</option>
                                    <option>Bac+2</option>
                                    <option>Bac+3</option>
                                    <option>Bac+4</option>
                                    <option>Bac+5</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="annee" class="form-control">
                                    <option selected>ANNEES D'EXPÉRIENCES</option>
                                    <option>Débutant(e)</option>
                                    <option>Moins de 1 an</option>
                                    <option>De 1 à 3 ans</option>
                                    <option>De 3 à 5 ans</option>
                                    <option>De 5 à 10 ans</option>
                                    <option>Plus de 10</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <textarea rows="5" name="message" class="form-control" placeholder="MESSAGE"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="g-recaptcha" data-sitekey="6LcxaakZAAAAAESGMyWTwxupTcj-rqHMKgsVM1SJ"></div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-fv">envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
