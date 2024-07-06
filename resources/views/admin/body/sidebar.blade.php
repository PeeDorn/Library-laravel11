<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary">AI Library</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset(Auth::user()->image) }}" alt=""
                    style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border-border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ Auth::user()->name }}</h6>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('home') }}" class="nav-item nav-link active"><i
                    class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-laptop me-2"></i>Elements</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="button.html" class="dropdown-item">Buttons</a>
                    <a href="typography.html" class="dropdown-item">Typography</a>
                    <a href="element.html" class="dropdown-item">Other Elements</a>
                </div>
            </div> --}}

                <a href="{{ route('users') }}" class="nav-item nav-link"><i class="fas fa-user me-2"></i>Users</a>

            <div class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="far fa-file-alt me-2"></i>Client</a>
                <div class="dropdown-menu bg-transparent border-0 me-3">
                    <a href="{{ route('books') }}" class="dropdown-item me-3"><i class="fa-solid fa-book me-2"></i>Manage Book</a>
                    <a href="{{ route('librarians') }}" class="dropdown-item me-3"><i class="fa-solid fa-users me-2"></i>Manage Librarian</a>
                </div>
            </div>
             <div class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fas fa-shop me-2"></i>Shopping</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="" class="dropdown-item me-3"><i class="fa-brands fa-shopify me-2"></i>Phone</a>
                    <a href="" class="dropdown-item"><i class="fa-solid fa-laptop me-2"></i>Computer</a>

                </div>
            </div>
        </div>
    </nav>
</div>
