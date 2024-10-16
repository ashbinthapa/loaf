<!-- resources/views/partials/header.blade.php -->
<div class="container">
    {{ $formattedDate }}

    Latest:
    <a href="https://www.facebook.com/isernepalofficial/?ref=aymt_homepage_panel&eid=ARCZ8VyOFfG6ZEJl7hyyqg7-0wlTGyxtRQQwQU2psMbjH59aUSY-HQ5o-YnV3JiVR1NXkPDdzVzzR-06">
        <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
    </a>

</div>

<div class="website-header-main-title">
    <p>
        Labor Outmigration, Agricultural Productivity and Food Services
    </p>
</div>

<!-- <div class="header-image-container">
    <img src="{{ asset('uploads/idea header image.jpg') }}" alt="Idea-Iser">
</div> -->

<div class="container-fluid ashbin-sticky-top website-header-main-title">
    <div class="container">
        <nav class="navbar navbar-expand-lg ashbin-padding">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ashbin-active" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="/"><i class="fa fa-home"></i> HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('data') ? 'active' : '' }}" href="/data">DATA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('publication') ? 'active' : '' }}" href="/publication">PUBLICATIONS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('people') ? 'active' : '' }}" href="/people">PEOPLE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle {{ request()->is('capacitybuilding/*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                CAPACITY BUILDING
                            </a>
                            <ul class="dropdown-menu website-header-main-title">
                                <li><a class="dropdown-item" href="/capacitybuilding/trainings">General Interviewing Techniques (GIT) Training</a></li>
                                <li><a class="dropdown-item" href="/capacitybuilding/study-specific-training">Study Specific Training</a></li>
                                <li><a class="dropdown-item" href="/capacitybuilding/supervisors-trainings">Supervisors Training</a></li>
                                <li><a class="dropdown-item" href="/capacitybuilding/crop-cutting-training">Crop Cutting Training</a></li>
                                <li><a class="dropdown-item" href="/capacitybuilding/survey-data-analysis-training">Survey Data Analysis Training</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle {{ request()->is('products/*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                PRODUCTS
                            </a>
                            <ul class="dropdown-menu website-header-main-title">
                                <li><a class="dropdown-item" href="/products/presentations">Presentations</a></li>
                                <li><a class="dropdown-item" href="/policy-brief">Policy Brief</a></li>
                                <li><a class="dropdown-item" href="/products/dissemination">Dissemination</a></li>
                                <li><a class="dropdown-item" href="/working-paper">Working Paper</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('events') ? 'active' : '' }}" href="/events">EVENTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('gallery') ? 'active' : '' }}" href="/gallery">GALLERY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="/contact">CONTACT</a>
                        </li>
                    </ul>
                    <form class="d-flex ashbin-header-search" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="query">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</div>