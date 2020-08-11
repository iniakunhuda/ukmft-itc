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
                <p class="control">
                  <button class="button" data-button-mansory=".website">
                    Website
                  </button>
                </p>
                <p class="control">
                  <button class="button" data-button-mansory=".game">
                    Game
                  </button>
                </p>
                <p class="control">
                  <button class="button" data-button-mansory=".aplikasi">
                    Aplikasi
                  </button>
                </p>
            </div>
        </div>

        <br><br>

        <div class="grid">
          <div class="grid-item website">
            <div class="card">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="https://cdn.pixabay.com/photo/2015/01/09/02/45/laptop-593673_1280.jpg" alt="" srcset="">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="content">
                    <strong><a class="text-black" href="{{ route('index.karya.detail') }}">Aplikasi Manajemen Kampus</a></strong>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, doloribus?
                    </p>
                    <br>
                    <div id="meta" class="field is-grouped is-grouped-multiline">
                        <div class="control">
                          <div class="tags has-addons">
                              <a class="tag is-success" href="#colors">Website</a>
                          </div>
                        </div>
                        
                      </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="grid-item game">
            <div class="card">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="https://cdn.pixabay.com/photo/2016/11/21/15/08/computer-1845880_1280.jpg" alt="" srcset="">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="content">
                    <strong><a class="text-black" href="{{ route('index.karya.detail') }}">Aplikasi Manajemen Kampus</a></strong>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, doloribus?
                    </p>
                    <br>
                    <div id="meta" class="field is-grouped is-grouped-multiline">
                        <div class="control">
                          <div class="tags has-addons">
                              <a class="tag is-success" href="#colors">Game</a>
                          </div>
                        </div>
                        
                      </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="grid-item website">
            <div class="card">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="https://cdn.pixabay.com/photo/2016/11/30/20/58/programming-1873854__480.png" alt="" srcset="">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="content">
                    <strong><a class="text-black" href="{{ route('index.karya.detail') }}">Aplikasi Manajemen Kampus</a></strong>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, doloribus?
                    </p>
                    <br>
                    <div id="meta" class="field is-grouped is-grouped-multiline">
                        <div class="control">
                          <div class="tags has-addons">
                              <a class="tag is-success" href="#colors">Website</a>
                          </div>
                        </div>
                        
                      </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="grid-item website">
            <div class="card">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="https://cdn.pixabay.com/photo/2016/08/27/12/06/website-1624028_1280.png" alt="" srcset="">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="content">
                    <strong><a class="text-black" href="{{ route('index.karya.detail') }}">Aplikasi Manajemen Kampus</a></strong>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, doloribus?
                    </p>
                    <br>
                    <div id="meta" class="field is-grouped is-grouped-multiline">
                        <div class="control">
                          <div class="tags has-addons">
                              <a class="tag is-success" href="#colors">Website</a>
                          </div>
                        </div>
                        
                      </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="grid-item game">
            <div class="card">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="https://www.kaorinusantara.or.id/wp-content/uploads/2016/11/battle-of-surabaya-1.jpg" alt="" srcset="">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="content">
                    <strong><a class="text-black" href="{{ route('index.karya.detail') }}">Aplikasi Manajemen Kampus</a></strong>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, doloribus?
                    </p>
                    <br>
                    <div id="meta" class="field is-grouped is-grouped-multiline">
                        <div class="control">
                          <div class="tags has-addons">
                              <a class="tag is-success" href="#colors">Game</a>
                          </div>
                        </div>
                        
                      </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="grid-item game">
            <div class="card">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="https://cdn.playtoko.com/img/files/2014/10/14/playtokocom_-bos-1.png" alt="" srcset="">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="content">
                    <strong><a class="text-black" href="{{ route('index.karya.detail') }}">Aplikasi Manajemen Kampus</a></strong>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, doloribus?
                    </p>
                    <br>
                    <div id="meta" class="field is-grouped is-grouped-multiline">
                        <div class="control">
                          <div class="tags has-addons">
                              <a class="tag is-success" href="#colors">Game</a>
                          </div>
                        </div>
                        
                      </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="grid-item aplikasi">
            <div class="card">
                <div class="card-image">
                  <figure class="image is-4by3">
                    <img src="https://img.okezone.com/content/2016/08/30/207/1476687/lima-aplikasi-chat-karya-anak-bangsa-8shDSUzj2H.jpg" alt="" srcset="">
                  </figure>
                </div>
                <div class="card-content">
                  <div class="content">
                    <strong><a class="text-black" href="{{ route('index.karya.detail') }}">Aplikasi Manajemen Kampus</a></strong>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, doloribus?
                    </p>
                    <br>
                    <div id="meta" class="field is-grouped is-grouped-multiline">
                        <div class="control">
                          <div class="tags has-addons">
                              <a class="tag is-success" href="#colors">Aplikasi</a>
                          </div>
                        </div>
                        
                      </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="grid-item website">
          <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="https://cdn.pixabay.com/photo/2015/01/09/02/45/laptop-593673_1280.jpg" alt="" srcset="">
                </figure>
              </div>
              <div class="card-content">
                <div class="content">
                  <strong><a class="text-black" href="{{ route('index.karya.detail') }}">Aplikasi Manajemen Kampus</a></strong>
                  <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, doloribus?
                  </p>
                  <br>
                  <div id="meta" class="field is-grouped is-grouped-multiline">
                      <div class="control">
                        <div class="tags has-addons">
                            <a class="tag is-success" href="#colors">Website</a>
                        </div>
                      </div>
                      
                    </div>
                </div>
              </div>
          </div>
      </div>
      <div class="grid-item game">
          <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="https://cdn.pixabay.com/photo/2016/11/21/15/08/computer-1845880_1280.jpg" alt="" srcset="">
                </figure>
              </div>
              <div class="card-content">
                <div class="content">
                  <strong><a class="text-black" href="{{ route('index.karya.detail') }}">Aplikasi Manajemen Kampus</a></strong>
                  <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, doloribus?
                  </p>
                  <br>
                  <div id="meta" class="field is-grouped is-grouped-multiline">
                      <div class="control">
                        <div class="tags has-addons">
                            <a class="tag is-success" href="#colors">Game</a>
                        </div>
                      </div>
                      
                    </div>
                </div>
              </div>
          </div>
      </div>
      <div class="grid-item website">
          <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="https://cdn.pixabay.com/photo/2016/11/30/20/58/programming-1873854__480.png" alt="" srcset="">
                </figure>
              </div>
              <div class="card-content">
                <div class="content">
                  <strong><a class="text-black" href="{{ route('index.karya.detail') }}">Aplikasi Manajemen Kampus</a></strong>
                  <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, doloribus?
                  </p>
                  <br>
                  <div id="meta" class="field is-grouped is-grouped-multiline">
                      <div class="control">
                        <div class="tags has-addons">
                            <a class="tag is-success" href="#colors">Website</a>
                        </div>
                      </div>
                      
                    </div>
                </div>
              </div>
          </div>
      </div>
      <div class="grid-item website">
          <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="https://cdn.pixabay.com/photo/2016/08/27/12/06/website-1624028_1280.png" alt="" srcset="">
                </figure>
              </div>
              <div class="card-content">
                <div class="content">
                  <strong><a class="text-black" href="{{ route('index.karya.detail') }}">Aplikasi Manajemen Kampus</a></strong>
                  <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, doloribus?
                  </p>
                  <br>
                  <div id="meta" class="field is-grouped is-grouped-multiline">
                      <div class="control">
                        <div class="tags has-addons">
                            <a class="tag is-success" href="#colors">Website</a>
                        </div>
                      </div>
                      
                    </div>
                </div>
              </div>
          </div>
      </div>
      <div class="grid-item game">
          <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="https://www.kaorinusantara.or.id/wp-content/uploads/2016/11/battle-of-surabaya-1.jpg" alt="" srcset="">
                </figure>
              </div>
              <div class="card-content">
                <div class="content">
                  <strong><a class="text-black" href="{{ route('index.karya.detail') }}">Aplikasi Manajemen Kampus</a></strong>
                  <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, doloribus?
                  </p>
                  <br>
                  <div id="meta" class="field is-grouped is-grouped-multiline">
                      <div class="control">
                        <div class="tags has-addons">
                            <a class="tag is-success" href="#colors">Game</a>
                        </div>
                      </div>
                      
                    </div>
                </div>
              </div>
          </div>
      </div>
      <div class="grid-item game">
          <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="https://cdn.playtoko.com/img/files/2014/10/14/playtokocom_-bos-1.png" alt="" srcset="">
                </figure>
              </div>
              <div class="card-content">
                <div class="content">
                  <strong><a class="text-black" href="{{ route('index.karya.detail') }}">Aplikasi Manajemen Kampus</a></strong>
                  <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, doloribus?
                  </p>
                  <br>
                  <div id="meta" class="field is-grouped is-grouped-multiline">
                      <div class="control">
                        <div class="tags has-addons">
                            <a class="tag is-success" href="#colors">Game</a>
                        </div>
                      </div>
                      
                    </div>
                </div>
              </div>
          </div>
      </div>
      <div class="grid-item aplikasi">
          <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="https://img.okezone.com/content/2016/08/30/207/1476687/lima-aplikasi-chat-karya-anak-bangsa-8shDSUzj2H.jpg" alt="" srcset="">
                </figure>
              </div>
              <div class="card-content">
                <div class="content">
                  <strong><a class="text-black" href="{{ route('index.karya.detail') }}">Aplikasi Manajemen Kampus</a></strong>
                  <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, doloribus?
                  </p>
                  <br>
                  <div id="meta" class="field is-grouped is-grouped-multiline">
                      <div class="control">
                        <div class="tags has-addons">
                            <a class="tag is-success" href="#colors">Aplikasi</a>
                        </div>
                      </div>
                      
                    </div>
                </div>
              </div>
          </div>
      </div>
        </div>
        
        <br><br>

        <div class="columns is-centered">
            <nav class="pagination" role="navigation" aria-label="pagination">
                <ul class="pagination-list">
                  <li>
                    <a class="pagination-link is-current" aria-label="Page 1" aria-current="page">1</a>
                  </li>
                  <li>
                    <a class="pagination-link" aria-label="Goto page 2">2</a>
                  </li>
                  <li>
                    <a class="pagination-link" aria-label="Goto page 3">3</a>
                  </li>
                </ul>
            </nav>
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
                    <button class="button cta is-large secondary-btn form-button raised is-clear">GABUNG SEKARANG, GRATIS!</button>
                </div>
            </div>
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