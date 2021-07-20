<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-sm-start fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand order-1 order-lg-0 ml-lg-0 ml-2 mr-auto" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" width="80px" height="40px" alt="Delta Broadband Services">
        </a>
        <button class="navbar-toggler align-self-start" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse bg-light p-3 p-lg-0 mt-5 mt-lg-0 d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end mobileMenu"
            id="navbarNav">
            <ul class="navbar-nav mr-auto ml-3 align-self-stretch">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('plans') }}">Plans</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('services') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">IPTV<img src="{{ asset('images/coming-soon.png') }}" width="70px" height="auto" alt="Coming Soon"></a>
                </li>
            </ul>
            <a class="btn btn-dark text-white nav-link" href="{{ route('login') }}"><i class="fa fa-sign-in"></i> Login</a>
        </div>
    </div>
</nav>

