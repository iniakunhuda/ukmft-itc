@extends('layouts.app')

@push('hero')
<div class="hero-body">
    <div class="container">
        <div class="columns is-vcentered">
            <div class="column is-offset-1 landing-caption">
                <h1 class="title is-1 is-bold is-spaced">
                    {{ $page->judul }}
                </h1>
                <br>
                <br>
                <br>
                {!! $page->isi !!}
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
    p {
        margin: 15px 0;
    }
    h1 {
        font-size: 1.5rem;
    }

    h2 {
        font-size: 1.25rem;
    }

    h3 {
        font-size: 1rem;
    }

    h4 {
        font-size: 0.75rem;
    }
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