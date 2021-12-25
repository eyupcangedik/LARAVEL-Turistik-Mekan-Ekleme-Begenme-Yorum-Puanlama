<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
  
            <a class="navbar-brand" href="/home">Turistik Mekan</a>
          </div>

          @php 
            $parentCategories = \App\Http\Controllers\HomeController::categoryList()
          @endphp
  
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
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
             
              <li class="passive"><a href="index.html">SENİN HİKAYEN</a></li>

              <li class="passive"><a href="/contact">İLETİŞİM</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>