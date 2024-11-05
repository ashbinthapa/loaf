<!-- resources/views/index.blade.php -->
@extends('layouts.app')

@section('title', 'LOAF - Labor Outmigration, Agricultural Productivity and Food Services')

@section('content')

<div class="container ashbin-padding-top">
    <div class="row">
        <div class="col-lg-8 col-12">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="ashbin-section">
                        <p class="ashbin-title">Labor Outmigration, Agricultural Productivity and Food Services</p>
                    </div>
                    <div class="carousel-item active">
                        <img src="{{ asset('images/slider/1.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slider/2.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slider/3.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slider/4.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slider/5.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slider/6.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slider/7.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slider/8.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
            <div>
                <p>
                    @foreach ($data['posts_all'] as $post)
                    {!! $post->content !!}
                    @endforeach
                </p>
            </div>
        </div>
        <div class="col-lg-4 col-12">
            <form class="d-flex ashbin-header-search" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="query">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </br>

            <div class="container ashbin-a-tag ashbin-widget-image">


                <h3 class="ashbin-widget-title"><span>Important Links</span></h3>
                <ul>
                    <li><a href="https://isernepal.org.np/"> ISER-N</a></li>
                    <li><a href="https://spe.psc.isr.umich.edu/"> Program in Society, Population, and Environment</a></li>
                    <li><a href="https://www.psc.isr.umich.edu/"> Population Studies Center</a></li>
                    <li><a href="https://umich.edu/"> University of Michigan</a></li>
                    <li><a href="https://www.gov.uk/government/organisations/department-for-international-development">DFID-Uk</a></li>
                    <li><a href="https://idea.isernepal.org/">IDEA</a></li>
                </ul>
                <h3 class="ashbin-widget-title"><span>Downloads</span></h3>
                <a href="/images/index/Household_Agriculture_and_Migration_Survey_Questionnaire_English.pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                    Household Agriculture Survey Questionnaire </a></br>
                <a href="/images/index/LOAF_SST_July2015_Gallery-1.pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                    LOAF Specific Training</a>
                </br> </br>


                <h3 class="ashbin-widget-title"><span>Recent Activities</span></h3>


            </div>
        </div>
    </div>
</div>


@endsection