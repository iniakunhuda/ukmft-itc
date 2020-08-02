@extends('layouts.app')

@push('hero')
<div class="hero-body">
    <div class="container">
        <div class="columns is-vcentered">
            <div class="column is-5 is-offset-1 landing-caption">
                <h1 class="title is-1 is-bold is-spaced">
                    UKMFT-ITC
                </h1>
                <h2 class="subtitle is-5 is-muted">
                    UKMFT-ITC adalah salah satu Unit Kegiatan Mahasiswa Fakultas Teknik (UKM-FT) Universitas Trunojoyo Madura. Berawal dari kelompok yang diberi nama "Kelompok Penguna Komputer" dan akhirnya mendeklarasikan dirinya dengan nama "Information Technology Center" pada tanggal 05 Oktober 2002
                </h2>
                <div class="button-wrap">
                    <a href="http://ukmft-itc.trunojoyo.ac.id/2007/12/tentang-itc.html" class="button cta is-rounded primary-btn raised">
                        Tentang Kami
                    </a>
                    <a href="http://ukmft-itc.trunojoyo.ac.id/2010/08/contact.html" class="button cta is-rounded">
                        Kontak
                    </a>
                </div>
            </div>
            <div class="column is-5">
                <figure class="image is-4by3">
                    <img src="{{ url('/') }}/assets/img/logo.png" style="object-fit:cover" alt="Logo">
                </figure>
            </div>

        </div>
    </div>
</div>

{{-- <div class="hero-foot mb-20">
    <div class="container">
        <div class="tabs is-centered">
            <ul>
                <li><a><img class="partner-logo" src="{{ url('/') }}/assets/img/logos/clients/systek.svg"></a></li>
                <li><a><img class="partner-logo" src="{{ url('/') }}/assets/img/logos/clients/tribe.svg"></a></li>
                <li><a><img class="partner-logo" src="{{ url('/') }}/assets/img/logos/clients/kromo.svg"></a></li>
                <li><a><img class="partner-logo" src="{{ url('/') }}/assets/img/logos/clients/infinite.svg"></a></li>
                <li><a><img class="partner-logo" src="{{ url('/') }}/assets/img/logos/clients/gutwork.svg"></a></li>
            </ul>
        </div>
    </div>
</div> --}}
@endpush

@section('body')
<section class="section section-feature-grey is-medium">
    <div class="container">
        <div class="title-wrapper has-text-centered">
            <h2 class="title is-2">Kegiatan Seru di ITC</h2>
            <h3 class="subtitle is-5 is-muted">Apa saja kegiatan utama di ITC?</h3>
            <div class="divider is-centered"></div>
        </div>

        <div class="content-wrapper">
            <div class="columns">
                <div class="column is-one-third">
                    <div class="feature-card is-bordered has-text-centered is-feature-reveal">
                        <div class="card-title">
                            <h4>MPAB <br>(Masa Penerimaan Anggota Baru)</h4>
                        </div>
                        <div class="card-icon">
                            <img src="{{ url('/') }}/assets/img/icons/web.svg">
                        </div>
                        <div class="card-text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, iure?</p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="feature-card is-bordered has-text-centered is-feature-reveal">
                        <div class="card-title">
                            <h4>Cloud integration</h4>
                        </div>
                        <div class="card-icon">
                            <img src="{{ url('/') }}/assets/img/icons/rocket.svg">
                        </div>
                        <div class="card-text">
                            <p>This is some explanatory text that is on two rows</p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="feature-card is-bordered has-text-centered is-feature-reveal">
                        <div class="card-title">
                            <h4>Addons & Plugins</h4>
                        </div>
                        <div class="card-icon">
                            <img src="{{ url('/') }}/assets/img/icons/light-bulb.svg">
                        </div>
                        <div class="card-text">
                            <p>This is some explanatory text that is on two rows</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section is-medium">
    <div class="container">
        <div class="title-wrapper has-text-centered">
            <h2 class="title is-2">Awesome Features</h2>
            <h3 class="subtitle is-5 is-muted">To make you super happy</h3>
            <div class="divider is-centered"></div>
        </div>

        <div class="columns is-vcentered side-feature mt-60">
            <div class="column is-4 is-offset-2">
                <h3 class="title is-3 mb-10 is-title-reveal">Connect with people</h2>
                <p class="subtitle is-5 is-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum audissem Antiochum, Brute, ut solebam, cum M. Quae diligentissime contra Aristonem dicuntur a Chryippo.</p>
            </div>
            <div class="column is-5">
                <img src="{{ url('/') }}/assets/img/illustrations/features/feature-1.png" alt="">
            </div>
        </div>

        <div class="columns is-vcentered side-feature mt-60">
            <div class="column is-5 is-offset-1">
                <img src="{{ url('/') }}/assets/img/illustrations/features/feature-2.png" alt="">
            </div>
            <div class="column is-4 is-offset-1">
                <h3 class="title is-3 mb-10 is-title-reveal">Collaborate easily</h2>
                <p class="subtitle is-5 is-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum audissem Antiochum, Brute, ut solebam, cum M. Quae diligentissime contra Aristonem dicuntur a Chryippo.</p>
            </div>
        </div>
    </div>
</section>

<section class="section section-feature-grey is-medium">
    <div class="container">

        <div class="columns is-vcentered app-side">
            <div class="column is-5 is-offset-1">
                <h3 class="title is-3 is-spaced is-title-reveal">An intuitive app</h2>
                <p class="subtitle is-5 is-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum audissem Antiochum, Brute, ut solebam, cum M. Quae diligentissime contra Aristonem dicuntur a Chryippo.</p>
            </div>
            <div class="column is-10">
                <div class="has-text-centered">
                    <img class="pushed-image" src="{{ url('/') }}/assets/img/illustrations/mockups/app-mockup.png">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section is-medium">
    <div class="container">
        <div class="title-wrapper has-text-centered">
            <h2 class="title is-2">Wait, there's more</h2>
            <h3 class="subtitle is-5 is-muted">To make you super happy</h3>
            <div class="divider is-centered"></div>
        </div>

        <div class="content-wrapper">
            <div class="columns is-multiline icon-list">
                <div class="column is-3">
                    <div class="feature-icon has-text-centered">
                        <div class="icon-wrap is-icon-reveal">
                            <ion-icon name="logo-github" size="large"></ion-icon>
                        </div>
                        <h4>Github</h4>
                        <p>Some feature text</p>
                    </div>
                </div>
                <div class="column is-3">
                    <div class="feature-icon has-text-centered">
                        <div class="icon-wrap is-icon-reveal">
                            <ion-icon name="logo-bitbucket" size="large"></ion-icon>
                        </div>
                        <h4>Bitbucket</h4>
                        <p>Some feature text</p>
                    </div>
                </div>
                <div class="column is-3">
                    <div class="feature-icon has-text-centered">
                        <div class="icon-wrap is-icon-reveal">
                            <ion-icon name="logo-slack" size="large"></ion-icon>
                        </div>
                        <h4>Slack</h4>
                        <p>Some feature text</p>
                    </div>
                </div>
                <div class="column is-3">
                    <div class="feature-icon has-text-centered">
                        <div class="icon-wrap is-icon-reveal">
                            <ion-icon name="logo-npm" size="large"></ion-icon>
                        </div>
                        <h4>Npm</h4>
                        <p>Some feature text</p>
                    </div>
                </div>
                <div class="column is-3">
                    <div class="feature-icon has-text-centered">
                        <div class="icon-wrap is-icon-reveal">
                            <ion-icon name="logo-javascript" size="large"></ion-icon>
                        </div>
                        <h4>Javascript</h4>
                        <p>Some feature text</p>
                    </div>
                </div>
                <div class="column is-3">
                    <div class="feature-icon has-text-centered">
                        <div class="icon-wrap is-icon-reveal">
                            <ion-icon name="logo-nodejs" size="large"></ion-icon>
                        </div>
                        <h4>Nodejs</h4>
                        <p>Some feature text</p>
                    </div>
                </div>
                <div class="column is-3">
                    <div class="feature-icon has-text-centered">
                        <div class="icon-wrap is-icon-reveal">
                            <ion-icon name="logo-angular" size="large"></ion-icon>
                        </div>
                        <h4>Angular</h4>
                        <p>Some feature text</p>
                    </div>
                </div>
                <div class="column is-3">
                    <div class="feature-icon has-text-centered">
                        <div class="icon-wrap is-icon-reveal">
                            <ion-icon name="logo-google" size="large"></ion-icon>
                        </div>
                        <h4>Google</h4>
                        <p>Some feature text</p>
                    </div>
                </div>
                <div class="column is-3">
                    <div class="feature-icon has-text-centered">
                        <div class="icon-wrap is-icon-reveal">
                            <ion-icon name="logo-python" size="large"></ion-icon>
                        </div>
                        <h4>Python</h4>
                        <p>Some feature text</p>
                    </div>
                </div>
                <div class="column is-3">
                    <div class="feature-icon has-text-centered">
                        <div class="icon-wrap is-icon-reveal">
                            <ion-icon name="logo-polymer" size="large"></ion-icon>
                        </div>
                        <h4>Polymer</h4>
                        <p>Some feature text</p>
                    </div>
                </div>
                <div class="column is-3">
                    <div class="feature-icon has-text-centered">
                        <div class="icon-wrap is-icon-reveal">
                            <ion-icon name="logo-android" size="large"></ion-icon>
                        </div>
                        <h4>Android</h4>
                        <p>Some feature text</p>
                    </div>
                </div>
                <div class="column is-3">
                    <div class="feature-icon has-text-centered">
                        <div class="icon-wrap is-icon-reveal">
                            <ion-icon name="logo-apple" size="large"></ion-icon>
                        </div>
                        <h4>Apple</h4>
                        <p>Some feature text</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section is-medium  has-background-image" data-background="https://source.unsplash.com/g30P1zcOzXo/1600x900" data-color="#4FC1EA" data-color-opacity=".6">
    <div class="overlay"></div>
    <div class="container">

        <div class="title-wrapper has-text-centered">
            <h2 class="title is-2 light-text is-spaced">Our clients love us</h2>
            <h3 class="subtitle is-5 light-text">Look at what they say about us</h3>
        </div>

        <div class="content-wrapper">
            <div class="columns is-vcentered">
                <div class="column is-4">
                    <figure class="testimonial">
                        <blockquote>
                            Lorem ipsum dolor sit amet, elit deleniti dissentias quo eu, hinc minim appetere te usu, ea case duis scribentur has. Duo te consequat elaboraret, has quando suavitate at.
                        </blockquote>
                        <div class="author">
                            <img src="{{ url('/') }}/assets/img/illustrations/faces/1.png" alt=""/>
                            <h5>Irma Walters</h5><span>Accountant</span>
                        </div>
                    </figure>
                </div>
                <div class="column is-4">
                    <figure class="testimonial">
                        <blockquote>
                            Lorem ipsum dolor sit amet, elit deleniti dissentias quo eu, hinc minim appetere te usu, ea case duis scribentur has. Duo te consequat elaboraret, has quando suavitate at.
                        </blockquote>
                        <div class="author">
                            <img src="{{ url('/') }}/assets/img/illustrations/faces/2.png" alt=""/>
                            <h5>John Bradley</h5><span>Financial Analyst</span>
                        </div>
                    </figure>
                </div>
                <div class="column is-4">
                    <figure class="testimonial">
                        <blockquote>
                            Lorem ipsum dolor sit amet, elit deleniti dissentias quo eu, hinc minim appetere te usu, ea case duis scribentur has. Duo te consequat elaboraret, has quando suavitate at.
                        </blockquote>
                        <div class="author">
                            <img src="{{ url('/') }}/assets/img/illustrations/faces/3.png" alt=""/>
                            <h5>Gary Blackman</h5><span>HR Manager</span>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section is-medium">
    <div class="container">
        <div class="title-wrapper has-text-centered">
            <h2 class="title is-2">Get Started</h2>
            <h3 class="subtitle is-5 is-muted">Choose one of our plans</h3>
            <div class="divider is-centered"></div>
        </div>

        <div class="pricing-wrap">
            <div class="feature-card is-pricing has-text-centered">
                <h3 class="plan-name">Starter</h3>
                <img src="{{ url('/') }}/assets/img/illustrations/pricing/1.svg" alt=""/>
                <div class="price">
                    0
                </div>
                <p>Sign up, get some awesome features and get started now</p>
                <a class="button is-fullwidth is-bold">Get Started</a>
            </div>
            <div class="feature-card is-pricing has-text-centered">
                <h3 class="plan-name">Pro</h3>
                <img src="{{ url('/') }}/assets/img/illustrations/pricing/2.svg" alt=""/>
                <div class="price">
                    15
                </div>
                <p>Sign up, get some awesome features and get started now</p>
                <a class="button is-fullwidth primary-btn raised is-bold">Get Started</a>
            </div>
            <div class="feature-card is-pricing has-text-centered">
                <h3 class="plan-name">Business</h3>
                <img src="{{ url('/') }}/assets/img/illustrations/pricing/3.svg" alt=""/>
                <div class="price">
                    30
                </div>
                <p>Sign up, get some awesome features and get started now</p>
                <a class="button is-fullwidth is-bold">Get Started</a>
            </div>
        </div>
    </div>
</section>

<section class="section section-light-grey is-medium">
    <div class="container">
        <div class="title-wrapper has-text-centered">
            <h2 class="title is-2 is-spaced">Drop us a line or two </h2>
            <h3 class="subtitle is-5 is-muted">We'd love to hear from You</h3>
            <div class="divider is-centered"></div>
        </div>

        <div class="content-wrapper">
            <div class="columns">
                <div class="column is-6 is-offset-3">
                    <form>
                        <div class="columns is-multiline">
                            <div class="column is-6">
                                <input class="input is-medium" type="text" placeholder="First Name *">
                            </div>
                            <div class="column is-6">
                                <input class="input is-medium" type="text" placeholder="Last Name *">
                            </div>
                            <div class="column is-6">
                                <input class="input is-medium" type="text" placeholder="Email *">
                            </div>
                            <div class="column is-6">
                                <input class="input is-medium" type="email" placeholder="Company">
                            </div>
                            <div class="column is-12">
                                <textarea class="textarea" rows="6" placeholder=""></textarea>
                            </div>
                            <div class="column is-12">
                                <div class="form-footer has-text-right mt-10">
                                    <button class="button cta is-large primary-btn form-button raised is-clear">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection