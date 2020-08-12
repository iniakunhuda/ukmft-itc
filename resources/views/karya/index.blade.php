@extends('layouts.app')

@section('body')
<section class="section is-medium">
    <div class="container">
        <div class="title-wrapper has-text-centered">
            <h2 class="title is-2">Karya</h2>
            <h3 class="subtitle is-5 is-muted">Hasil karya mahasiswa Fakultas Teknik</h3>
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

        <div class="columns is-centered">
          {{ $karyas->links() }}
        </div>

    </div>
</section>
@endsection

@push('css')
<style>
    .grid-item { width: 25%;padding:10px; }
    @media(max-width:767px){
        .grid-item { width: 50%;padding:10px; }
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