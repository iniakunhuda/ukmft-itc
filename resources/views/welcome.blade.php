@extends('layouts.app')

@push('hero')
<div class="hero-body bg-itc-primary">
    <div class="container">
        <div class="columns is-vcentered">
            <div class="column is-5 is-offset-1 landing-caption">
                <h1 class="title is-1 is-bold is-spaced has-text-white">
                    UKMFT-ITC
                </h1>
                <h2 class="subtitle is-5 is-muted has-text-white">
                    UKMFT-ITC adalah salah satu Unit Kegiatan Mahasiswa Fakultas Teknik (UKM-FT) yang fokus mengembangkan teknologi
                </h2>
                <br>
                {{-- <div class="button-wrap">
                    <a href="{{ route('index.page.tentang') }}" class="button cta is-rounded secondary-btn raised">
                        Tentang Kami
                    </a>
                </div> --}}
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
            <h2 class="title is-2">Profil UKMFT-ITC</h2>
            <h3 class="subtitle is-5 is-muted">Apa sih itu UKMFT-ITC?</h3>
            <div class="divider is-centered"></div>
        </div>

        <div class="content-wrapper">
            <div class="container" style="padding: 0 3rem;">
                <div class="columns">
                    <div class="column is-6">
                        <p class="subtitle is-5 is-muted">
                            {{ $SETTING['PROFIL_SINGKAT'] }}
                        </p>
                    </div>
                    <div class="column">
                    <iframe style="width:100%;height:315px" src="{{ $SETTING['EMBED_YT'] }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                            <p>Masa penerimaan anggota baru</p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="feature-card is-bordered has-text-centered is-feature-reveal">
                        <div class="card-title">
                            <h4>Belajar Bersama <br> Teknologi Terbaru</h4>
                        </div>
                        <div class="card-icon">
                            <img src="{{ url('/') }}/assets/img/icons/rocket.svg">
                        </div>
                        <div class="card-text">
                            <p>Mulai dari web development, android, game, design, dsb</p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="feature-card is-bordered has-text-centered is-feature-reveal">
                        <div class="card-title">
                            <h4>Belajar Organisasi <br> menjadi Panitia Event</h4>
                        </div>
                        <div class="card-icon">
                            <img src="{{ url('/') }}/assets/img/icons/light-bulb.svg">
                        </div>
                        <div class="card-text">
                            <p>Banyak event-event yang dapat diikuti dengan menjadi panitia</p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section is-medium section-light-grey">
    <div class="container">
        <div class="title-wrapper has-text-centered">
            <h2 class="title is-2">Budaya dalam UKMFT-ITC</h2>
            <h3 class="subtitle is-5 is-muted">Bagaimana UKMFT-ITC membantu kamu berkembang?</h3>
            <div class="divider is-centered"></div>
        </div>

        <div class="columns is-vcentered side-feature mt-60 mb-5">
            <div class="column is-4 is-offset-2">
                <h3 class="title is-3 mb-10 is-title-reveal">Kolaborasi & Inovasi</h2>
                <p class="subtitle is-5 is-muted">
                    UKM-FT ITC tidak hanya berfokus pada satu program studi saja, namun merupakan kolaborasi antar berbagai program studi di Fakultas Teknik
                    untuk belajar hal baru di luar jam kuliah serta mengembangkan sebuah produk yang bermanfaat untuk kemudian dipakai oleh masyarakat.
                </p>
            </div>
            <div class="column is-5">
                <img src="{{ url('/') }}/assets/img/colab2.png" alt="">
            </div>
        </div>

        <div class="columns is-vcentered side-feature mt-60">
            <div class="column is-5 is-offset-1">
                <img src="{{ url('/') }}/assets/img/colab1.png" alt="">
            </div>
            <div class="column is-4 is-offset-1">
                <h3 class="title is-3 mb-10 is-title-reveal">Tidak Berhenti Belajar</h2>
                <p class="subtitle is-5 is-muted">Dalam menghadapi Teknologi yang semakin berkembang, UKMFT-ITC berkomitmen untuk selalu memberikan edukasi baik 
                    itu berupa seminar, diskusi, pelatihan, workshop dengan berbagai ilmu di bidang Teknologi</p>
            </div>
        </div>
    </div>
</section>

{{-- <section class="section section-feature-grey is-medium">
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
</section> --}}

<section class="section is-medium">
    <div class="container">
        <div class="title-wrapper has-text-centered">
            <h2 class="title is-2">Topik yang dipelajari di UKMFT-ITC</h2>
            <h3 class="subtitle is-5 is-muted">Kamu bisa memilih mempelajari bidang yang kamu sukai</h3>
            <div class="divider is-centered"></div>
        </div>

        <div class="content-wrapper">
            <div class="columns is-multiline icon-list">
                <div class="column is-4">
                    <div class="feature-icon has-text-centered">
                        <div class="icon-wrap is-icon-reveal">
                            <ion-icon name="logo-buffer" size="large"></ion-icon>
                        </div>
                        <h4>Materi Kuliah</h4>
                        <p>Pembahasan mengenai salah satu topik materi kuliah</p>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="feature-icon has-text-centered">
                        <div class="icon-wrap is-icon-reveal">
                            <ion-icon name="logo-laravel" size="large"></ion-icon>
                        </div>
                        <h4>Web Development</h4>
                        <p>Belajar dasar pemrograman web dan framework terbaru</p>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="feature-icon has-text-centered">
                        <div class="icon-wrap is-icon-reveal">
                            <ion-icon name="game-controller-outline" size="large"></ion-icon>
                        </div>
                        <h4>Game Development</h4>
                        <p>Belajar membuat game 2D dan 3D</p>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="feature-icon has-text-centered">
                        <div class="icon-wrap is-icon-reveal">
                            <ion-icon name="logo-android" size="large"></ion-icon>
                        </div>
                        <h4>Android</h4>
                        <p>Belajar membuat aplikasi android dengan bahasa Java / Kotlin</p>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="feature-icon has-text-centered">
                        <div class="icon-wrap is-icon-reveal">
                            <ion-icon name="brush-outline" size="large"></ion-icon>
                        </div>
                        <h4>Design</h4>
                        <p>Belajar design poster, ilustrator, 2D, 3D, dsb</p>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="feature-icon has-text-centered">
                        <div class="icon-wrap is-icon-reveal">
                            <ion-icon name="videocam-outline" size="large"></ion-icon>
                        </div>
                        <h4>Videografi</h4>
                        <p>Belajar mengenai teknik videografi sampai editing video</p>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="feature-icon has-text-centered">
                        <div class="icon-wrap is-icon-reveal">
                            <ion-icon name="key" size="large"></ion-icon>
                        </div>
                        <h4>Security</h4>
                        <p>Belajar tentang keamanan jaringan dan enkripsi data</p>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="feature-icon has-text-centered">
                        <div class="icon-wrap is-icon-reveal">
                            <ion-icon name="git-merge-outline" size="large"></ion-icon>
                        </div>
                        <h4>Artificial Intelligence</h4>
                        <p>Pembahasan mengenai perkembangan dan ilmu dalam kecerdasan buatan</p>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="feature-icon has-text-centered">
                        <div class="icon-wrap is-icon-reveal">
                            <ion-icon name="infinite-outline" size="large"></ion-icon>
                        </div>
                        <h4>Data Science</h4>
                        <p>Pembahasan mengenai analisa data</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section is-medium  has-background-image" data-background="{{ asset('assets/img/foto/cakra.jpg') }}" data-color="#4FC1EA" data-color-opacity=".6">
    <div class="overlay"></div>
    <div class="container">

        <div class="title-wrapper has-text-centered">
            <h2 class="title is-2 light-text is-spaced">UKMFT-ITC menurut Beliau</h2>
            <h3 class="subtitle is-5 light-text">Apa yang dikatakan orang-orang mengenai ITC</h3>
        </div>

        <div class="content-wrapper is-hidden-mobile">
            <div class="columns is-vcentered">
                <div class="column is-3">
                    <figure class="testimonial">
                        <blockquote>
                            Lorem ipsum dolor sit amet, elit deleniti dissentias quo eu, hinc minim appetere te usu, ea case duis scribentur has. Duo te consequat elaboraret, has quando suavitate at.
                        </blockquote>
                        <div class="author">
                            <img src="{{ url('/') }}/assets/img/foto/rahmat_hidayat.jpg" alt=""/>
                            <h5>Dr. H. Rachmad Hidayat, M.T.</h5><span>Dekan Fakultas Teknik</span>
                        </div>
                    </figure>
                </div>
                <div class="column is-3">
                    <figure class="testimonial">
                        <blockquote>
                            Lorem ipsum dolor sit amet, elit deleniti dissentias quo eu, hinc minim appetere te usu, ea case duis scribentur has. Duo te consequat elaboraret, has quando suavitate at.
                        </blockquote>
                        <div class="author">
                            <img src="{{ url('/') }}/assets/img/foto/ach_khozaimi.jpg" alt="Achmad Khozaimi, S.Kom., M.Kom"/>
                            <h5>Achmad Khozaimi, S.Kom., M.Kom </h5><span>Pembina ITC</span>
                        </div>
                    </figure>
                </div>
                <div class="column is-3">
                    <figure class="testimonial">
                        <blockquote>
                            Lorem ipsum dolor sit amet, elit deleniti dissentias quo eu, hinc minim appetere te usu, ea case duis scribentur has. Duo te consequat elaboraret, has quando suavitate at.
                        </blockquote>
                        <div class="author">
                            <img src="{{ url('/') }}/assets/img/illustrations/faces/3.png" alt=""/>
                            <h5>Gary Blackman</h5><span>Alumni, CTO Bukalapak</span>
                        </div>
                    </figure>
                </div>
                <div class="column is-3">
                    <figure class="testimonial">
                        <blockquote>
                            Lorem ipsum dolor sit amet, elit deleniti dissentias quo eu, hinc minim appetere te usu, ea case duis scribentur has. Duo te consequat elaboraret, has quando suavitate at.
                        </blockquote>
                        <div class="author">
                            <img src="{{ url('/') }}/assets/img/illustrations/faces/3.png" alt=""/>
                            <h5>Gary Blackman</h5><span>, Mahasiswa Baru</span>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
        
        <div class="content-wrapper is-flex-mobile is-hidden-desktop is-hidden-tablet is-hidden-widescreen">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <figure class="testimonial">
                        <blockquote>
                            Lorem ipsum dolor sit amet, elit deleniti dissentias quo eu, hinc minim appetere te usu, ea case duis scribentur has. Duo te consequat elaboraret, has quando suavitate at.
                        </blockquote>
                        <div class="author">
                            <img src="{{ url('/') }}/assets/img/foto/rahmat_hidayat.jpg" alt=""/>
                            <h5>Dr. H. Rachmad Hidayat, M.T.</h5><span>Dekan Fakultas Teknik</span>
                        </div>
                    </figure>
                </div>
                <div class="item">
                    <figure class="testimonial">
                        <blockquote>
                            Lorem ipsum dolor sit amet, elit deleniti dissentias quo eu, hinc minim appetere te usu, ea case duis scribentur has. Duo te consequat elaboraret, has quando suavitate at.
                        </blockquote>
                        <div class="author">
                            <img src="{{ url('/') }}/assets/img/foto/ach_khozaimi.jpg" alt="Achmad Khozaimi, S.Kom., M.Kom"/>
                            <h5>Achmad Khozaimi, S.Kom., M.Kom </h5><span>Pembina ITC</span>
                        </div>
                    </figure>
                </div>
                <div class="item">
                    <figure class="testimonial">
                        <blockquote>
                            Lorem ipsum dolor sit amet, elit deleniti dissentias quo eu, hinc minim appetere te usu, ea case duis scribentur has. Duo te consequat elaboraret, has quando suavitate at.
                        </blockquote>
                        <div class="author">
                            <img src="{{ url('/') }}/assets/img/illustrations/faces/3.png" alt=""/>
                            <h5>Gary Blackman</h5><span>Alumni, CTO Bukalapak</span>
                        </div>
                    </figure>
                </div>
                <div class="item">
                    <figure class="testimonial">
                        <blockquote>
                            Lorem ipsum dolor sit amet, elit deleniti dissentias quo eu, hinc minim appetere te usu, ea case duis scribentur has. Duo te consequat elaboraret, has quando suavitate at.
                        </blockquote>
                        <div class="author">
                            <img src="{{ url('/') }}/assets/img/illustrations/faces/3.png" alt=""/>
                            <h5>Gary Blackman</h5><span>, Mahasiswa Baru</span>
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
            <h2 class="title is-2">Karya</h2>
            <h3 class="subtitle is-5 is-muted">Beragam karya mahasiswa Fakultas Teknik</h3>
            <div class="divider is-centered"></div>
        </div>

        <br><br>

        <div class="columns is-centered">
            <div class="field is-grouped">
                <p class="control">
                  <button class="button is-link" data-button-mansory="*">
                    Semua
                  </button>
                </p>
                @foreach ($karya_kategories as $item)
                <p class="control">
                    <button class="button" data-button-mansory=".karya-{{ $item->id }}">
                      {{ $item->kategori }}
                    </button>
                </p>    
                @endforeach
            </div>
        </div>

        <br><br>

        <div class="grid">
            @foreach ($karyas as $item)
            <div class="grid-item karya-{{ $item->kategori->id }}">
                <div class="card">
                    <div class="card-image">
                      <figure class="image is-4by3">
                      <img src="{{ $item->gambar_url }}" alt="" srcset="">
                      </figure>
                    </div>
                    <div class="card-content">
                      <div class="content">
                      <strong><a class="text-black" href="{{ route('index.karya.detail', ['id' => $item->id, 'slug' => $item->slug]) }}">{{ $item->judul }}</a></strong>
                        <p>
                            {{ $item->desc_singkat }}
                        </p>
                        <br>
                        <div id="meta" class="field is-grouped is-grouped-multiline">
                            <div class="control">
                              <div class="tags has-addons">
                              <a class="tag is-success" href="javascript:;">{{ $item->kategori->kategori }}</a>
                              </div>
                            </div>
                            
                          </div>
                      </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <br><br>

        <div class="content-wrapper">
            <div class="columns">
                <div class="column has-text-centered">
                    <a href="{{ route('index.karya') }}" class="button btn-primary rounded is-medium raised">
                        Selengkapnya
                    </a>    
                </div>
            </div>
        </div>
        
    </div>
</section>

<section>
    <div class="container">
        <div class="title-wrapper has-text-centered">
            <h2 class="title is-2">Instagram Feed</h2>
            <h3 class="subtitle is-5 is-muted">Berita Terbaru dari ITC</h3>
            <div class="divider is-centered"></div>
        </div>
        <br><br>
    </div>
    <!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/a3d8ebc75b2057ddb6f49c16c1f831df.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
</section>
@endsection

@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" />
<style>
    .grid-item { width: 25%;padding:10px; }
    @media(max-width:767px){
        .grid-item { width: 50%;padding:10px; }
    }
    .owl-carousel .owl-item img { width: auto !important; }
</style>
@endpush

@push('js')
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>    
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        let $grid = $('.grid').isotope({
            // options
            itemSelector: '.grid-item',
        });

        $('button[data-button-mansory]').click(function(){
            let target_class = $(this).data('buttonMansory');
            $grid.isotope({ filter: target_class });
            $(this).addClass("is-link");

            $('button[data-button-mansory]').each(function(){
                if($(this).data('buttonMansory') != target_class) $(this).removeClass('is-link');
            });
        });

        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            items: 1
        });
    })
</script>
@endpush