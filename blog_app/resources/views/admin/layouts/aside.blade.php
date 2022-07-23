<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
           aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('admin_home') }}">
            <img src="{{asset('admin/img/logo-ct.png')}}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Admin Panel</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mb-2 mt-0">
                <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white" aria-controls="ProfileNav"
                   role="button" aria-expanded="false">
                    <img src="{{asset('admin/img/team-3.jpg')}}" class="avatar">
                    <span class="nav-link-text ms-2 ps-1">Brooklyn Alice</span>
                </a>
                <div class="collapse" id="ProfileNav" style="">
                    <ul class="nav ">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="pages/pages/profile/overview.html">
                                <span class="sidenav-mini-icon"> MP </span>
                                <span class="sidenav-normal  ms-3  ps-1"> My Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white " href="pages/pages/account/settings.html">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal  ms-3  ps-1"> Settings </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <form class="nav-link text-white " action="{{route('logout')}}" method="POST">
                                @csrf
                                <span class="sidenav-mini-icon"> L </span>
                                <button type="submit" class="nav-link text-white border-0 p-0 ms-3  ps-1"> Logout </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </li>
            <hr class="horizontal light mt-0">
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#dashboardsExamples" class="nav-link text-white
                @if(Route::is('settings.edit') || Route::is('about.index')) active @endif"
                   aria-controls="dashboardsExamples" role="button" aria-expanded="false">
                    <i class="material-icons-round opacity-10">dashboard</i>
                    <span class="nav-link-text ms-2 ps-1">Ümumi</span>
                </a>
                <div class="collapse  " id="dashboardsExamples">
                    <ul class="nav ">
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="{{ route('settings.edit',$common_settings->id) }}">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Settings </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="{{ route('about.index') }}">
                                <span class="sidenav-mini-icon"> H </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Haqqımızda </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a  href="{{ route('categories.index') }}" class="nav-link text-white
                 @if(Route::is('categories.index')) active @endif"
                   aria-controls="dashboardsExamples" role="button" aria-expanded="false">
                    <i class="material-icons-round opacity-10">receipt_long</i>
                    <span class="nav-link-text ms-2 ps-1">Kateqoriyalar</span>
                </a>
            </li>
            <li class="nav-item">
                <a  href="{{ route('subcategories.index') }}" class="nav-link text-white
                 @if(Route::is('subcategories.index')) active @endif"
                    aria-controls="dashboardsExamples" role="button" aria-expanded="false">
                    <i class="material-icons-round opacity-10">receipt_long</i>
                    <span class="nav-link-text ms-2 ps-1">SubKateqoriyalar</span>
                </a>
            </li>
            <li class="nav-item">
                <a  href="{{ route('announcement.index') }}" class="nav-link text-white
                  @if(Route::is('announcement.index')) active @endif"
                    aria-controls="dashboardsExamples" role="button" aria-expanded="false">
                    <i class="material-icons-round opacity-10">shopping_basket</i>
                    <span class="nav-link-text ms-2 ps-1">Elanlar</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
