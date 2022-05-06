<nav class="navbar navbar-expand-lg navbar-dark bg-gradient">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"> ghestystore</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                @if(Route::has('login'))
                    @auth()
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ url('/dashboard') }}">پنل مدیریت</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="login">ورود مدیر</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register">ثبت نام</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link</a>
                        </li>

                    @endauth
                @endif
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="جستوجوی مشترک" aria-label="جستوجو">
                <button class="btn btn-outline-success" type="submit">جستوجو</button>
            </form>
        </div>
    </div>
</nav>
