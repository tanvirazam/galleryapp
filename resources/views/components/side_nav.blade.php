 <div class="app-menu navbar-menu">
     <!-- LOGO -->
     <div class="navbar-brand-box">
         <!-- Dark Logo-->
         <a href="index.html" class="logo logo-dark">
             <span class="logo-sm">
                 <img src="assets/images/logo-sm.png" alt="" height="22" />
             </span>
             <span class="logo-lg">
                 <img src="assets/images/logo-dark.png" alt="" height="17" />
             </span>
         </a>
         <!-- Light Logo-->
         <a href="index.html" class="logo logo-light">
             <span class="logo-sm">
                 <img src="assets/images/logo-sm.png" alt="" height="22" />
             </span>
             <span class="logo-lg">
                 <img src="assets/images/logo-light.png" alt="" height="17" />
             </span>
         </a>
         <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
             id="vertical-hover">
             <i class="ri-record-circle-line"></i>
         </button>
     </div>

     <div id="scrollbar">
         <div class="container-fluid">
             <div id="two-column-menu"></div>
             <ul class="navbar-nav" id="navbar-nav">
                 <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                 <li class="nav-item">
                     <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                         aria-expanded="false" aria-controls="sidebarDashboards">
                         <i data-feather="home" class="icon-dual"></i>
                         <span data-key="t-dashboards">Dashboards</span>
                     </a>
                     <div class="collapse menu-dropdown" id="sidebarDashboards">
                         <ul class="nav nav-sm flex-column">
                             <li class="nav-item">
                                 <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics">
                                     Analytics
                                 </a>
                             </li>

                         </ul>
                     </div>
                 </li>
                 <!-- end Dashboard Menu -->
                 <li class="nav-item">
                     <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button"
                         aria-expanded="false" aria-controls="sidebarApps">
                         <i data-feather="grid" class="icon-dual"></i>
                         <span data-key="t-apps">Upload Image</span>
                     </a>
                     <div class="collapse menu-dropdown" id="sidebarApps">
                         <ul class="nav nav-sm flex-column">
                             <li class="nav-item">
                                 <a href="{{ route('single.image') }}" class="nav-link" data-key="t-chat">
                                     Single image
                                 </a>

                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('multiple.image') }}" class="nav-link" data-key="t-chat">
                                     Multiple image
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 {{--                 gallery app start --}}


                 <li class="nav-item">
                     <a class="nav-link menu-link active collapsed" href="#sidebarAdvanceUI" data-bs-toggle="collapse"
                         role="button" aria-expanded="false" aria-controls="sidebarAdvanceUI">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" class="feather feather-layers icon-dual">
                             <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                             <polyline points="2 17 12 22 22 17"></polyline>
                             <polyline points="2 12 12 17 22 12"></polyline>
                         </svg> <span data-key="t-advance-ui">Gallery App</span>
                     </a>
                     <div class="menu-dropdown collapse" id="sidebarAdvanceUI" style="">
                         <ul class="nav nav-sm flex-column">
                             <li class="nav-item">
                                 <a href="{{ route('album.index') }}" class="nav-link" data-key="t-sweet-alerts">All
                                     Albums</a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ route('photo.create') }}" class="nav-link"
                                     data-key="t-nestable-list">All
                                     Photo</a>
                             </li>

                         </ul>
                     </div>
                 </li>

             </ul>
         </div>

         <!-- Sidebar -->
     </div>

     <div class="sidebar-background"></div>
 </div>
