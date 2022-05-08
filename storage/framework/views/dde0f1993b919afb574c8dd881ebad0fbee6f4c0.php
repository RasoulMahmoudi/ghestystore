<nav class="navbar navbar-expand-lg navbar-dark bg-gradient">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"> ghestystore</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo e(url('/dashboard')); ?>">پنل مدیریت</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="login">ورود مدیر</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register">ثبت نام</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link</a>
                        </li>

                    <?php endif; ?>
                <?php endif; ?>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="جستوجوی مشترک" aria-label="جستوجو">
                <button class="btn btn-outline-success" type="submit">جستوجو</button>
            </form>
        </div>
    </div>
</nav>
<?php /**PATH /var/www/cearts.ir/resources/views/layouts/navbar.blade.php ENDPATH**/ ?>