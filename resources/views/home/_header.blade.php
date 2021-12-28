<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
          

          @php 
            $parentCategories = \App\Http\Controllers\HomeController::categoryList()
          @endphp
  
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse" style="float:left">

            <ul class="nav navbar-nav navbar-right">
              <li class="passive"><a href="/home">ANASAYFA</a></li>
              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">GEZİ REHBERİ <i class="fa fa-angle-down"></i></a>
                  <ul class="dropdown-menu">
                    <div class="acilirmenu">
                      <ul>
                        @foreach($parentCategories as $rs)

                          <li><a href="#">{{$rs->title}}</a>

                          @if(count($rs->children))
                            @include('home.categorytree',['children' => $rs->children])
                          @endif

                          </li>

                        @endforeach
                      
                      </ul>
                    </div>
                </ul>
              </li>
             

              <li class="passive"><a href="/contact">İLETİŞİM</a></li>

              <li class="passive"><a href="/aboutus">HAKKIMIZDA</a></li>

              <li class="passive"><a href="/references">REFERANSLARIMIZ</a></li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Giriş Yap/ Kayıt Ol <i class="fa fa-angle-down"></i></a>
                  <ul class="dropdown-menu">
                    <div class="acilirmenu">
                        <ul>
                          @auth
                            @if(Auth::user()->name != NULL)
                              <li><a href="/myaccount">{{Auth::user()->name}}</a></li>
                              <li><a href="{{route('home_logout')}}">Çıkış Yap</a></li>
                          @endauth
                          
                            @else
                              <li><a href="{{route('home_login')}}">Giriş Yap</a></li>
                              <li><a href="#">Kayıt Ol</a></li>
                             @endif

                        </ul>
                   </div>
                  </ul>
              </li>

          </ul>
          </div><!-- /.navbar-collapse -->


          <div class="navbar-header" style="float:right">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
  
            @if($data->company != NULL)
            <a class="navbar-brand" href="/home">{{$data->company}}</a>

            @else
            <a class="navbar-brand" href="/home">Turistik Mekan</a>

            @endif
          </div>
        </div><!-- /.container -->
      </nav>