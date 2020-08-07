@extends('layouts.app')

@push('hero')
<div class="hero-body">
    <div class="container">
        <div class="columns is-vcentered">
            <div class="column is-5 is-offset-1 landing-caption">
                <h1 class="title is-1 is-bold is-spaced">
                    Tentang Kami
                </h1>
                <h2 class="subtitle is-5 is-muted">
                    Sejarah singkat UKMFT-ITC
                </h2>
                <p>
                    Pada mulanya UKMFT-ITC adalah sebuah kelompok mahasiswa yang berkumpul&nbsp; untuk mempelajari mengenai komputer sehingga kelompok itu menyebut dirinya dengan “Kelompok Pengguna Komputer (KPK)”. Mereka sering berkumpul untuk bersama-sama belajar tentang komputer. Karena mereka merasa perlu adanya status yang jelas mengenai kedudukan perkumpulan tersebut di dalam kampus, terutama dalam menampung bakat minat mahasiswa fakultas teknik tentang teknologi informasi, akhirnya mahasiswa yang tergabung dalam KPK tadi sepakat membentuk sebuah wadah resmi yang kemudian berkibar dengan nama “Information Technology Center (ITC)” yang lahir tepat tanggal 05 Oktober 2002. Hingga saat ini jumlah mahasiswa yang tergabung dalam ITC sudah mencapai kurang lebih 565 orang.
                </p>
                <br>
                <br>
                <br>
                <h2 class="subtitle is-5 is-muted">
                    Tujuan didirikan UKMFT-ITC
                </h2>
                <p>
                    Sebagaimana telah dibahas sebelumnya, UKMFT-ITC berdiri  dengan tujuan untuk menampung bakat minat mahasiswa fakultas teknik mengenai teknologi informasi, terutama sekali dalam bidang hardware maupun software komputer, sehingga nantinya mahasiswa yang merasa masih kurang mengerti tentang dunia komputer, kami tampung dan kami fasilitasi untuk lebih memahami dunia software dan hardware komputer, sehingga nantinya tercetak mahasiswa yang tidak “canggung” lagi terhadap teknologi.
                </p>
                <br>
                <br>
                <br>
                <h2 class="subtitle is-5 is-muted">
                    Slogan
                </h2>
                <h3 class="title is-3">
                    Don't Be Gaptek
                </h3>
            </div>
            <div class="column is-5">
                <figure class="image is-4by3">
                    <img src="{{ url('/') }}/assets/img/logo.png" style="object-fit:cover" alt="Logo">
                </figure>
            </div>

        </div>
    </div>
</div>
@endpush

@section('body')
@endsection

@push('css')
<style>
    .grid-item { width: 25%;padding:10px; }
</style>
@endpush

@push('js')
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>    
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
        })
    })
</script>
@endpush