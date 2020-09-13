@extends('layouts.app')

@section('body')
<section class="section is-medium">
    <div class="container">
        <div class="title-wrapper has-text-centered">
            <h2 class="title is-2">{{ $karya->judul }}</h2>
            <br>
            <h3 class="subtitle is-5 is-muted">{{ $karya->kategori->kategori }}</h3>
            <div class="divider is-centered"></div>
        </div>

        <br><br>

        <div class="columns">
          <div class="column is-6">
            <ul id="lightSlider">
              <li data-sub-html="<p>{{ $karya->desc_singkat }}</p>" data-thumb="{{ $karya->gambar_url }}" data-src="{{ $karya->gambar_url }}">
                <img src="{{ $karya->gambar_url }}" alt="" srcset="">
              </li>
              @foreach ($karya->photos as $item)
              <li data-sub-html="<p>{{ $item->judul }}</p>" data-thumb="{{ $item->gambar_url }}" data-src="{{ $item->gambar_url }}">
                <img src="{{ $item->gambar_url }}" alt="" srcset="">
              </li>  
              @endforeach
            </ul>
          </div>
          <div class="column">
            <div>
              <strong>Judul</strong>
              <p>{{ $karya->judul }}</p>
              <br>
            </div>
            <div>
              <strong>Deskripsi</strong>
              <p>{!! $karya->desc !!}</p>
              <br>
            </div>
            @if($karya->juara)
            <div>
              <strong>Juara</strong>
              <p>{{ $karya->juara ?? '-' }}</p>
              <br>
            </div>  
            @endif
            <div>
              <strong>Mahasiswa</strong>
              <p>{{ $karya->mhs_nama ?? '-' }}</p>
              <br>
            </div>  
            @if (!is_null($karya->url))
            <div>
              <br>
              <a href="{{ $karya->url }}" class="button primary-btn">
                Lihat Aplikasi
              </a>
            </div> 
            @endif 
          </div>
        </div>
    </div>
</section>
@endsection

@push('css')
<style>
  .lSSlideOuter .lSPager.lSGallery li {
    height: 70px;
  }
  .lSSlideOuter .lSPager.lSGallery img {
    min-height: 100%;
  }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css" integrity="sha512-yJHCxhu8pTR7P2UgXFrHvLMniOAL5ET1f5Cj+/dzl+JIlGTh5Cz+IeklcXzMavKvXP8vXqKMQyZjscjf3ZDfGA==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.7.2/css/lightgallery.min.css" integrity="sha512-qPE3vKZNMU6bIOsds+KXztmNoUjlgPN+bvYKXNNg0TFac+Q81tUP/bM5e6qBqj0nXa6Tz6Vigxqzapd5d+xvOg==" crossorigin="anonymous" />
@endpush

@push('js')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js" integrity="sha512-Gfrxsz93rxFuB7KSYlln3wFqBaXUc1jtt3dGCp+2jTb563qYvnUBM/GP2ZUtRC27STN/zUamFtVFAIsRFoT6/w==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.7.2/js/lightgallery.min.js" integrity="sha512-FwPCRtavKaa33tKgIxKgfsTMXHE5M1ABFNpH3MoI7NrVJo4mkI0toTtxh3d49TP0cgmPIvYiIpuSRfH8hYDcSw==" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
      $("#lightSlider").lightSlider({
        item: 1,
        gallery: true,
        adaptiveHeight: true,
        loop: true,
        thumbItem:5,
        enableDrag: false,
        onSliderLoad: function(el) {
            el.lightGallery({
                selector: '#lightSlider .lslide'
            });
        }   
      });
    })
</script>
@endpush