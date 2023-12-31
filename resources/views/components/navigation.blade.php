<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ $pagetitle == 'Library' ? 'active' : '' }}" aria-current="page"
                        href="/">Welcome</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $pagetitle == 'About Us' ? 'active' : '' }}" href="/aboutus">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $pagetitle == 'Contact Us' ? 'active' : '' }}" href="/contactus">Contact
                        Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $pagetitle == 'Projects' ? 'active' : '' }}" href="/projects">My Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $pagetitle == 'View Contacts' ? 'active' : '' }}" href="/viewcontacts">View
                        Contacts</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
