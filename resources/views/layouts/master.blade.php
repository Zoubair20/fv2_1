<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>

    <meta name="descriptison" content="FirstViewAgency Agence web à Marrakech et Casablanca spécialisée dans le développement web et mobile, la création de site internet, E-commerce, webmarketing et conseil web.">
    <meta name="keywords" content="firstviewagency, Website, Creation website, Digital marketing agency Marrakesh Maroc,Digital marketing agencies Morocco,Digital marketing companies,Creative digital marketing agency,Best Digital marketing agency Morocco,Top Digital marketing agency Morocco,Digital agency in Marrakesh,Digital marketing agency in Marrakesh,marketing,seo,digital marketing,affiliate marketing,social media marketing,marketing strategy,email marketing,marketing plan,advertising agency,internet marketing,seo services,seo company,marketing agency,web marketing,social marketing,agence de communication,agence de communication Marrakech,agence de communication Maroc,agence de communication et publicité,agence web maroc,branding,events marrakesh,agence événementielle marrakech,agence événementielle maroc,agence evenementiel a marrakech,agence evenementielle,agence communication evenementiel marrakech ,agence de communication marrakech gueliz,agences de communication marrakech,integration,reation web,solutions mobiles,référencement,referencement,website designe, web designe, designe site web,équipe,team">

    <script src='https://www.google.com/recaptcha/api.js' async defer></script>

    <!-- Favicons -->
    <link href="{{asset('/')}}assets/img/favicon3.png" rel="icon">
    <link href="{{asset('/')}}assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
{{--    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"  rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('/')}}assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('/')}}assets/css/style.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/vendor/flaticon/flaticon.css" rel="stylesheet">

</head>
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent text-dark">

        <div class="container text-dark">

            <div class="logo float-left">
                {{-- <h1 class="bg-danger"><a href="index.html"><span>First View</span></a></h1> --}}
                <!-- Uncomment below if you prefer to use an image logo -->
                <a class="pr-5" href="/"><img src="{{asset('/')}}storage/logos/logo-black-150.png" alt="logo firstviewagency" class="img-fluid"></a>
            </div>

            <nav class=" h2 nav-menu d-none d-lg-block">
                <ul>
                    <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/">{{__('master.nav_accueil')}}</a></li>
                    <li class="drop-down {{ request()->is('nos-services*') ? 'active' : '' }}"><a href="/nos-services">{{__('master.nav_nos_Services')}}</a>
                        <ul>
                            <li><a href="/nos-services#integration">{{__('master.nav_intégration')}}</a></li>
                            <li><a href="/nos-services#creation-web">{{__('master.nav_création_web')}}</a></li>
                            <li><a href="/nos-services#solution-mobiles">{{__('master.nav_solution_mobiles')}}</a></li>
                            <li><a href="/nos-services#reseaux-sociaux">{{__('master.nav_réseaux_sociaux')}}</a></li>
                            <li><a href="/nos-services#referencement">{{__('master.nav_référencement')}}</a></li>
                        </ul>
                    </li>


                    <li class="drop-down  {{ request()->is('nos-profils*') ? 'active' : '' }}"><a href="/nos-profils">{{__('master.nav_nos_profils')}}</a>
                        <ul>
                            <li><a href="/nos-profils#integration">{{__('master.nav_intégrateur')}}</a></li>
                            <li><a href="/nos-profils#creation-web">{{__('master.nav_développeur_web')}}</a></li>
                            <li><a href="/nos-profils#solution-mobiles">{{__('master.nav_web_master')}}</a></li>
                            <li><a href="/nos-profils#reseaux-sociaux">{{__('master.nav_community_manager')}}</a></li>
                        </ul>
                    </li>
                    <li class=" {{ request()->is('contact') ? 'active' : '' }}"><a href="/contact">{{__('master.nav_contact')}}</a></li>
                    <li class="pl-5 {{ request()->is('demander-un-devis') ? 'active' : '' }}"><a href="/demander-un-devis">{{__('master.nav_online_quote')}}</a></li>


                </ul>
                <table class="table table-bordered d-sm-none d-xs-block">
                    <tr>
                        <td><a href="#">FR</a></td>
                    </tr><tr>
                        <td><a href="#">EN</a></td>
                    </tr>
                </table>

            </nav><!-- .nav-menu -->
        </div>
        <table class="px-3 table-bordered d-none d-lg-inline-block">
            <tr>
                <td><a href="#">FR</a></td>
            </tr><tr>
                <td><a href="#">EN</a></td>
            </tr>
        </table>

    </header>
    <!-- End Header -->

    <main id="main">
        <div class="container-fluid">
            <div class="row text-center">
                @yield('page-head')
            </div>
        </div>

        @yield('content')

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
{{--        <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">--}}
        <button type="submit" onclick="window.open('{{asset("black.pdf")}}')">Download111</button>

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-links">
                        <img class="pb-3" src="{{asset('/')}}storage/logos/logo-white-230.png" alt="" class="img-fluid">
                        <p>{{__('master.footer_description')}}</p>
                        <div class="social-links mt-3">
                            <h4 class="footer-heading">{{__('master.footer_suivez_nous')}}</h4>
                            <a target="_blank" href="https://twitter.com/firstview14" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a target="_blank" href="https://www.facebook.com/firstviewagency/" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a target="_blank" href="https://www.instagram.com/firstviewagency/" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a target="_blank" href="https://www.linkedin.com/company/firstviewagency-marrakech" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-info">

                        <table class="footer-info">
                            <tbody>
                            <tr>
                                <td colspan="2"><h4>Marrakech</h4></td>
                            </tr>
                            <tr>
                                <td><i class="bx bx-md bx-map"></i></td>
                                <td>1 Rue Baqal, C1 Résidence Koutoubia, 2 Etage,Gueliz-Marrakech</td>
                            </tr>
                            <tr>
                                <td><i class="bx bx-md bx-phone-call"></i></td>
                                <td><a class="text-white" target="_blank" href="tel:+212524422327">+(212) 524 422 327</a></td>
                            </tr>
                            <tr>
                                <td><i class="bx bx-md bxl-whatsapp"></i></td>
                                <td><a class="text-white" target="_blank" href="https://wa.me/0033758872302">+(33) 758 872 302</a></td>
                            </tr>

                            <tr>
                                <td><i class="bx bx-md bx-envelope"></i></td>
                                <td><a class="text-white" target="_blank" href="mailto: contact@firstviewagency.com">contact@firstviewagency.com</a></td>
                            </tr>
                            <tr>
                                <td><i class="bx bx-md bxl-skype"></i></td>
                                <td><a class="text-white" target="_blank" href="callto:firstview">first-view</a></td>
                            </tr>
                            </tbody>
                        </table>

                    </div>

                    <div class="col-lg-4 col-md-6 footer-info">
                        <table class="footer-info">
                            <tbody>
                            <tr>
                                <td colspan="2"><h4>Casablanca</h4></td>
                            </tr>
                            <tr>
                                <td><i class="bx bx-md bx-map"></i></td>
                                <td>Rue Ahmed Touki, Rés Ourok, 3ème Etage N13, Casablanca</td>
                            </tr>
                            <tr>
                                <td><i class="bx bx-md bx-phone-call"></i></td>
                                <td><a class="text-white" target="_blank" href="tel:+212661101564">+(212) 661 101 564</a></td>
                            </tr>
                            <tr>
                                <td><i class="bx bx-md bx-envelope"></i></td>
                                <td><a class="text-white" target="_blank" href="mailto: contact@firstviewagency.com">contact@firstviewagency.com</a></td>
                            </tr>
                            <tr>
                                <td><i class="bx bx-md bxl-skype"></i></td>
                                <td><a class="text-white" target="_blank" href="callto:firstview">first-view</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

                <nav class="border border-secondary navbar navbar-expand-sm  navbar-dark justify-content-center p-0">
                    <!-- Links -->
                    <ul class="navbar-nav ">
                        <li  class="border-right border-left border-secondary nav-item  px-3 {{ request()->is('blog') ? 'active' : '' }}"><a class="nav-link" href="/blog">{{__('master.nav_blog')}}</a></li>
                        <li class="border-right border-secondary nav-item px-3 {{ request()->is('recrutement') ? 'active' : '' }}"><a class="nav-link" href="/recrutement">{{__('master.nav_recrutement')}}</a></li>
{{--                    <li class="nav-item pl-3 {{ request()->is('') ? 'active' : '' }}"><a class="nav-link" href="/">CONDITIONS GÉNÉRALES DE VENTES</a></li>--}}
                    </ul>
                </nav>

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                <a  href="https://www.firstviewagency.com/"><b>FirstViewAgency</b></a><span> Copyright &copy;  2018-{{now()->year}}.</span> All Rights Reserved
            </div>
        </div>

    </footer>
    <!-- End Footer -->
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <!-- Vendor JS Files -->
    <script src="{{asset('/')}}assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('/')}}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/')}}assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="{{asset('/')}}assets/vendor/php-email-form/validate.js"></script>
    <script src="{{asset('/')}}assets/vendor/venobox/venobox.min.js"></script>
    <script src="{{asset('/')}}assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="{{asset('/')}}assets/vendor/counterup/counterup.min.js"></script>
    <script src="{{asset('/')}}assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="{{asset('/')}}assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{asset('/')}}assets/vendor/aos/aos.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('/')}}assets/js/main.js"></script>

</body>
</html>
