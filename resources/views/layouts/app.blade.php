
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>@yield('title', 'UKMFT-ITC')</title>
        <link rel="icon" type="image/png" href="{{ url('/') }}/assets/img/favicon.ico" />

        <!--Core CSS -->
        <link rel="stylesheet" href="{{ url('/') }}/assets/css/bulma.css">
        <link rel="stylesheet" type="text/css" href="{{ url('/') }}/assets/css/core.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap" rel="stylesheet">
        @stack('css')
    </head>
    <body>
        <div id="preloader">
            <div id="status"></div>
        </div>        
        <section class="hero is-default is-bold">
        
            <nav class="navbar is-fresh is-transparent no-shadow" role="navigation" aria-label="main navigation">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="{{ url('/') }}">
                            <img src="{{ url('/') }}/assets/img/logo.png" alt="">
                        </a>
            
                        <a class="navbar-item is-hidden-desktop is-hidden-tablet">
                            <div id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: visible;">
                                <svg width="1000px" height="1000px">
                                    <path class="path1" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                                    <path class="path2" d="M 300 500 L 700 500"></path>
                                    <path class="path3" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                                </svg>
                                <button id="menu-icon-trigger" class="menu-icon-trigger"></button>
                            </div>
                        </a>
            
                        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbar-menu">
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>
            
                    <div id="navbar-menu" class="navbar-menu is-static">
            
                        <div class="navbar-start">
                            
                        </div>
            
                        <div class="navbar-end">
                            <a href="{{ route('index.page.tentang') }}" class="navbar-item is-secondary">
                                Tentang Kami
                            </a>
                            <a href="{{ route('index.karya') }}" class="navbar-item is-secondary">
                                Karya Anggota
                            </a>
                            <a href="#" class="navbar-item is-secondary">
                                Blog
                            </a>
                            {{-- <a href="{{ route('index.pengurus') }}" class="navbar-item is-secondary">
                                Pengurus
                            </a> --}}
                            <a class="navbar-item">
                                <span class="button signup-button rounded secondary-btn raised">
                                    Daftar Sekarang
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            <nav id="navbar-clone" class="navbar is-fresh is-transparent" role="navigation" aria-label="main navigation">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="{{ url('/') }}">
                            <img src="{{ url('/') }}/assets/img/logo.png" alt="">
                        </a>
            
                        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="cloned-navbar-menu">
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>
            
                    <div id="cloned-navbar-menu" class="navbar-menu is-fixed">
            
                        <div class="navbar-start">
                        </div>
            
                        <div class="navbar-end">
                            <a href="{{ route('index.page.tentang') }}" class="navbar-item is-secondary">
                                Tentang Kami
                            </a>
                            <a href="{{ route('index.karya') }}" class="navbar-item is-secondary">
                                Karya Anggota
                            </a>
                            <a href="#" class="navbar-item is-secondary">
                                Blog
                            </a>
                            {{-- <a href="{{ route('index.pengurus') }}" class="navbar-item is-secondary">
                                Pengurus
                            </a> --}}
                            <a class="navbar-item">
                                <span class="button signup-button rounded secondary-btn raised">
                                    Daftar Sekarang
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            @stack('hero')
        </section>
        
        @yield('body')

        <div id="auth-modal" class="modal">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="flex-card auth-card">
                    <div class="tabs-wrapper">
                        <div class="tabs">
                            <ul>
                                <li class="is-active" data-tab="login-tab"><a>Login</a></li>
                                <li data-tab="register-tab"><a>Register</a></li>
                            </ul>
                        </div>
                        <div id="login-tab" class="tab-content is-active">
                            <form  method="POST" action="{{ route('login') }}">
                                <div class="field">
                                    <label>Username</label>
                                    <div class="control">
                                        <input type="text" class="input is-medium" placeholder="Enter username">
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Password</label>
                                    <div class="control">
                                        <input type="password" class="input is-medium" placeholder="Enter password">
                                    </div>
                                </div>
                            </form>
                            <a class="button is-fullwidth secondary-btn is-rounded raised">Log in</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="modal-close is-large" aria-label="close"></button>
        </div>
        
        <footer class="footer footer-dark">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="footer-logo">
                            <img src="{{ url('/') }}/assets/img/logo.png" alt="">
                        </div>
                    </div>
                    <div class="column">
                        <div class="footer-column">
                            <div class="footer-header">
                                <h3>SEKRETARIAT</h3>
                            </div>
                            <p style="color: #98a9c3;">
                                Home Base : Sekretariat Bersama BEM Fakultas Teknik Universitas Trunojoyo Madura <br>
                                Jl. Raya Telang PO. BOX. 02 <br>
                                Kamal – Bangkalan – Madura – Jawa Timur <br>
                            </p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="footer-column">
                            <div class="footer-header">
                                <h3>Kontak Kami</h3>
                                <ul class="link-list">
                                    <li><a href="#">Telp</a></li>
                                    <li><a href="#">Instagram</a></li>
                                    <li><a href="#">Facebook</a></li>
                                    <li><a href="#">Email</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Back To Top Button -->
        <div id="backtotop"><a href="#"></a></div>   
             
        <!-- Concatenated JS -->
        <script src="{{ url('/') }}/assets/js/app.js"></script>
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

        <!-- Fresh JS -->
        <script src="{{ url('/') }}/assets/js/functions.js"></script>
        <script src="{{ url('/') }}/assets/js/main.js"></script>
        @stack('js')
    </body>  
</html>
