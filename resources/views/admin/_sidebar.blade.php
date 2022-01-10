       <!-- partial:partials/_sidebar.html -->
       <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin_category')}}">
                <span class="icon-bg"><i class="bi bi-list-stars"></i></span>
                <span class="menu-title">Categories</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin_place')}}">
                <span class="icon-bg"><i class="bi bi-cursor-fill"></i></span>
                <span class="menu-title">Places</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin_editor')}}">
                <span class="icon-bg"><i class="bi bi-pencil"></i></span>
                <span class="menu-title">Editor</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin_comment')}}">
                <span class="icon-bg"><i class="bi bi-chat-left-text-fill"></i></span>
                <span class="menu-title">Comments</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin_faq')}}">
                <span class="icon-bg"><i class="bi bi-patch-question-fill"></i></span>
                <span class="menu-title">FAQ</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin_users')}}">
                <span class="icon-bg"><i class="bi bi-people-fill"></i></span>
                <span class="menu-title">Users</span>
              </a>
            </li>
            
        
            <li class="nav-item sidebar-user-actions">
              <div class="user-details">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <div class="d-flex align-items-center">
                      <div class="sidebar-profile-img">
                        @if(Auth::user()->profile_photo_path)
                          <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" height="40" alt="image" style="border-radius:5px">
                        @endif
                      </div>
                      <div class="sidebar-profile-text">
                        <p class="mb-1">{{Auth::user()->name}}</p>
                      </div>
                    </div>
                  </div>
                  <div class="badge badge-danger"></div>
                </div>
              </div>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="{{route('admin_setting')}}" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
                  <span class="menu-title">Settings</span>
                </a>
              </div>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="{{route('admin_message')}}" class="nav-link"><i class="mdi mdi-email-outline"></i>
                  <span class="menu-title">Messages</span></a>
              </div>
            </li>
            <li class="nav-item sidebar-user-actions">
              <div class="sidebar-user-menu">
                <a href="{{route('admin_logout')}}" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                  <span class="menu-title">Log Out</span></a>
              </div>
            </li>
          </ul>
        </nav>