 <!-- Sidebar Start -->
 <aside class="left-sidebar">
     <!-- Sidebar scroll-->
     <div>
         <div class="brand-logo d-flex align-items-center d-flex justify-content-center">
             <div class="d-flex justify-content-center">

                 <a href="/" class="">
                     <img class="img-fluid" src="{{ asset('image/logo prolintas.png') }}" alt="">
                 </a>
             </div>
             <div data-bs-toggle="modal" data-bs-target="#exampleModal"
                 class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                 <i class="ti ti-x fs-8"></i>
             </div>

         </div>
         <!-- Sidebar navigation-->
         <nav class="sidebar-nav scroll-sidebar " data-simplebar="">
             <ul id="sidebarnav " class="ps-0 pt-3">

                 <li class="sidebar-item mb-2">
                     <a class="sidebar-link text-decoration-none {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
                         href="{{ route('admin.dashboard') }}" aria-expanded="false">
                         <span>
                             <i class="ti ti-mountain"></i>
                         </span>
                         <span class="hide-menu">Home</span>
                     </a>
                 </li>
                 <li class="sidebar-item mb-2">
                     <a class="sidebar-link text-decoration-none {{ request()->routeIs('admin.services') ? 'active' : '' }}"
                         href="{{ route('admin.services') }}" aria-expanded="false">
                         <span>
                             <i class="ti ti-mountain"></i>
                         </span>
                         <span class="hide-menu">Our Services</span>
                     </a>
                 </li>
                 <li class="sidebar-item mb-2">
                     <a class="sidebar-link text-decoration-none {{ request()->routeIs('admin.news') ? 'active' : '' }}"
                         href="{{ route('admin.news') }}" aria-expanded="false">
                         <span>
                             <i class="ti ti-mountain"></i>
                         </span>
                         <span class="hide-menu">NEWS</span>
                     </a>
                 </li>
                 <li class="sidebar-item mb-2">
                     <a class="sidebar-link text-decoration-none {{ request()->routeIs('admin.faq') ? 'active' : '' }}"
                         href="{{ route('admin.faq') }}" aria-expanded="false">
                         <span>
                             <i class="ti ti-mountain"></i>
                         </span>
                         <span class="hide-menu">FAQ</span>
                     </a>
                 </li>
                 <li class="sidebar-item mb-2">
                     <a class="sidebar-link text-decoration-none {{ request()->routeIs('admin.contact') ? 'active' : '' }}"
                         href="{{ route('admin.contact') }}" aria-expanded="false">
                         <span>
                             <i class="ti ti-mountain"></i>
                         </span>
                         <span class="hide-menu">Contact</span>
                     </a>
                 </li>
                 <li class="sidebar-item mb-2">
                     <a class="sidebar-link text-decoration-none {{ request()->routeIs('admin.messages') ? 'active' : '' }}"
                         href="{{ route('admin.messages') }}" aria-expanded="false">
                         <span>
                             <i class="ti ti-mountain"></i>
                         </span>
                         <span class="hide-menu">Messages</span>
                     </a>
                 </li>
                 <li class="sidebar-item mb-2">
                     <a class="sidebar-link text-decoration-none {{ request()->routeIs('admin.account') ? 'active' : '' }}"
                         href="{{ route('admin.account') }}" aria-expanded="false">
                         <span>
                             <i class="ti ti-mountain"></i>
                         </span>
                         <span class="hide-menu">Account</span>
                     </a>
                 </li>



             </ul>

         </nav>
         <!-- End Sidebar navigation -->
     </div>


     <!-- End Sidebar scroll-->
 </aside>
 <!--  Sidebar End -->
