@extends('layouts.app')

@section('body')
<section class="section is-medium">
    <div class="container">
        <div class="title-wrapper has-text-centered">
            <h2 class="title is-2">Game BOS (Battle of Surabaya)</h2>
            <h3 class="subtitle is-5 is-muted">Game</h3>
            <div class="divider is-centered"></div>
        </div>

        <br><br>

        <div class="columns">
          <div class="column is-6">
            <ul id="lightSlider">
              <li data-sub-html="<h1>Judul</h1><p>lorem50</p>" data-thumb="https://cdn.playtoko.com/img/files/2014/10/14/playtokocom_-bos-1.png" data-src="https://cdn.playtoko.com/img/files/2014/10/14/playtokocom_-bos-1.png">
                <img src="https://cdn.playtoko.com/img/files/2014/10/14/playtokocom_-bos-1.png" alt="" srcset="">
              </li>
              <li data-thumb="https://cdn.playtoko.com/img/files/2014/10/14/playtokocom_-bos-1.png" data-src="https://cdn.playtoko.com/img/files/2014/10/14/playtokocom_-bos-1.png">
                <img src="https://cdn.playtoko.com/img/files/2014/10/14/playtokocom_-bos-1.png" alt="" srcset="">
              </li>
              <li data-thumb="https://cdn.playtoko.com/img/files/2014/10/14/playtokocom_-bos-1.png" data-src="https://cdn.playtoko.com/img/files/2014/10/14/playtokocom_-bos-1.png">
                <img src="https://cdn.playtoko.com/img/files/2014/10/14/playtokocom_-bos-1.png" alt="" srcset="">
              </li>
              <li data-thumb="https://cdn.playtoko.com/img/files/2014/10/14/playtokocom_-bos-1.png" data-src="https://cdn.playtoko.com/img/files/2014/10/14/playtokocom_-bos-1.png">
                <img src="https://cdn.playtoko.com/img/files/2014/10/14/playtokocom_-bos-1.png" alt="" srcset="">
              </li>
              <li data-thumb="https://cdn.playtoko.com/img/files/2014/10/14/playtokocom_-bos-1.png" data-src="https://cdn.playtoko.com/img/files/2014/10/14/playtokocom_-bos-1.png">
                <img src="https://cdn.playtoko.com/img/files/2014/10/14/playtokocom_-bos-1.png" alt="" srcset="">
              </li>
            </ul>
          </div>
          <div class="column">
            <div>
              <strong>Judul</strong>
              <p>Game BOS (Battle of Surabaya)</p>
              <br>
            </div>
            <div>
              <strong>Deskripsi</strong>
              <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas ipsum maxime, dignissimos in ad obcaecati quo, voluptate sit doloribus numquam nihil labore natus reprehenderit libero iste quae quod quibusdam? Nostrum quaerat mollitia, rerum sed illo, ipsam, deserunt nisi omnis quia dolore quo! Cupiditate error ex eum optio facilis, dicta exercitationem. Numquam veritatis et debitis minus quo omnis excepturi beatae suscipit repellat assumenda laboriosam fugiat cum modi, perferendis, delectus quasi placeat ad, non explicabo consectetur quas aut quidem. Repudiandae delectus eligendi officia, eos odio, quaerat enim molestiae architecto saepe excepturi quas placeat alias quo aut, aliquam ut qui est eaque beatae.</p>
              <br>
            </div>
            <div>
              <strong>Juara</strong>
              <p>Juara 1 - Game Dev Indonesia</p>
              <br>
            </div>  
            <div>
              <strong>Mahasiswa</strong>
              <p>Tim Hore - Fakultas Teknik </p>
              <br>
            </div>  
            <div>
              <br>
              <a href="" class="button primary-btn">
                Lihat Aplikasi
              </a>
            </div>  
          </div>
        </div>
    </div>
</section>

<section class="section section-light-grey is-medium">
    <div class="container">
        <div class="title-wrapper has-text-centered">
            <h2 class="title is-2 is-spaced">Tertarik untuk bergabung bersama UKMFT-ITC?</h2>
            <h3 class="subtitle is-5 is-muted">Kami membuka pendaftaran anggota baru tahun 2020/2021</h3>
            <div class="divider is-centered"></div>
        </div>

        <div class="content-wrapper">
            <div class="columns">
                <div class="column has-text-centered">
                    <button class="button cta is-large primary-btn form-button raised is-clear">GABUNG SEKARANG, GRATIS!</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('css')
<style>
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