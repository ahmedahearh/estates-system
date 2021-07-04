<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
            <i class="bi bi-search"></i>
        </button>

        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
            <ul class="navbar-nav">



                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">تسجيل الدخول</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item " href="{{url('/login')}}">تسجيل الدخول</a>
                        <a class="dropdown-item " href="{{url('/register')}}">تسجيل جديد</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{url('/contact')}}">تواصل معنا </a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">الممتلكات</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item " href="{{url('/property')}}">الشقق</a>
                        <a class="dropdown-item " href="{{url('/apartment2')}}">الاراضي</a>
                        <a class="dropdown-item " href="{{url('/apartment3')}}">الشاليهات</a>
                        <a class="dropdown-item " href="{{url('/apartment4')}}">المتاجر</a>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link " href="{{url('/blog')}}">المدونة</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{url('/about')}}">حول</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{url('/')}}">الرئيسية</a>
                </li>







            </ul>
        </div>
        <a class="navbar-brand text-brand" href="{{url('/')}}">موقع عقارات<span class="color-b">  غزة </span></a>


    </div>
</nav>
