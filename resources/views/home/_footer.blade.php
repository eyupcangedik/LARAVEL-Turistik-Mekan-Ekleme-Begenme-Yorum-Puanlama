<footer>
        <div class="container">
  
          <div class="row">
            <div class="col-sm-8">
              <a class="footer-brand" href="index.html">PROJE</a>
              <p>Server Side Programming dersi için Eyüp Can Gedik tarafından hazırlanmıştır.</p>
              <ul class="list-inline list-unstyled social-networks">
              
              @if($data->facebook != NULL)
                <li>  
                  <a href="{{$data->facebook}}">
                    <div class="icon-social icon-social-facebook normal">
                      <i class="fa fa-facebook"></i>
                    </div>
                    <div class="icon-social hover">
                      <i class="fa fa-facebook"></i>
                    </div>
                  </a>
                </li>
                @endif

                @if($data->twitter != NULL)
                <li>
                  <a href="{{$data->twitter}}">
                    <div class="icon-social icon-social-twitter normal">
                      <i class="fa fa-twitter"></i>
                    </div>
                    <div class="icon-social hover">
                      <i class="fa fa-twitter"></i>
                    </div>
                  </a>
                </li>
                @endif
               
                @if($data->youtube != NULL)
                <li>
                  <a href="{{$data->youtube}}">
                    <div class="icon-social icon-social-youtube normal">
                      <i class="fa fa-youtube-play"></i>
                    </div>
                    <div class="icon-social hover">
                      <i class="fa fa-youtube-play"></i>
                    </div>
                  </a>
                </li>
                @endif
  
                @if($data->instagram != NULL)
                <li>
                  <a href="{{$data->instagram}}">
                    <div class="icon-social icon-social-instagram normal">
                      <i class="fa fa-instagram"></i>
                    </div>
                    <div class="icon-social hover">
                      <i class="fa fa-instagram"></i>
                    </div>
                  </a>
                </li>
                @endif
                
              </ul>
            </div>
            <div class="col-lg-3 col-md-3">
              <h3>İLETİŞİM</h3>
              <address>
                <i class="fa fa-map-marker"></i> {{$data->address}}<br>
                <i class="fa fa-phone"></i> {{$data->phone}}<br>
                <i class="fa fa-envelope"></i> {{$data->email}}
              </address>
            </div>
            
        </div><!-- /.container -->
      </footer>
  
      <div class="footer-after">
        <div class="container">
          <div class="row">
            <p class="col-md-10 text-center">©2021 Eyüp Can GEDİK</p>
          </div><!-- /.row -->
        </div>
      </div>