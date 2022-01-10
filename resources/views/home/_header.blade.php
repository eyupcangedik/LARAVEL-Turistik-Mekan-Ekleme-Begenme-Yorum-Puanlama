<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation" >
        <div class="container">
          

          @php 
            $parentCategories = \App\Http\Controllers\HomeController::categoryList()
          @endphp

          <div class="navbar-header" style="float:left">
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
  
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse" style="float:left">

            <ul class="nav navbar-nav navbar-right">
              <li class="passive"><a href="/home">ANASAYFA</a></li>
              
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">GEZİ REHBERİ <i class="fa fa-angle-down"></i></a>
                  <ul class="dropdown-menu">
                    <div class="acilirmenu">
                      <ul>
                        @foreach($parentCategories as $rs)

                          <li><a style="cursor:pointer">{{$rs->title}}</a>

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

              
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">HAKKIMIZDA <i class="fa fa-angle-down"></i></a>
                  <ul class="dropdown-menu">
                    <div class="acilirmenu">
                      <ul>
                      <li class="passive"><a href="{{route('aboutus')}}">HAKKIMIZDA</a></li>
                      <li class="passive"><a href="{{route('faq')}}">SSS</a></li>
                      <li class="passive"><a href="/references">REFERANSLARIMIZ</a></li>
                      </ul>
                    </div>
                </ul>
              </li>


              
              <li class="dropdown">
                <a style="cursor:pointer" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Giriş Yap/ Kayıt Ol <i class="fa fa-angle-down"></i></a>
                  <ul class="dropdown-menu">
                    <div class="acilirmenu">
                        <ul>
                          @auth
                            @if(Auth::user()->name != NULL)
                              <li><a style="cursor:pointer">{{Auth::user()->name}}</a></li>
                              <li><a href="{{route('myprofile')}}">Profilim</a></li>  
                              <li><a href="{{route('mycomments')}}">Yorumlarım</a></li>
                              <li><a href="{{route('user_place')}}">Eklediğim Mekanlar</a></li>
                              <li><a href="{{route('home_logout')}}">Çıkış Yap</a></li>

                            @php
                              $userRoles = Auth::user()->roles->pluck('name');
                            @endphp
                            
                            @if($userRoles->contains('admin'))
                              <li><a href="{{route('admin_home')}}">Admin Panel</a></li>
                            @endif

                          @endauth
                          
                            @else
                              <li><a href="{{route('home_login')}}">Giriş Yap</a></li>
                              <li><a href="{{route('user_register')}}">Kayıt Ol</a></li>
                            @endif

                        </ul>
                   </div>
                  </ul>
              </li>

          </ul>
          </div><!-- /.navbar-collapse -->


          
        </div><!-- /.container -->
      </nav>