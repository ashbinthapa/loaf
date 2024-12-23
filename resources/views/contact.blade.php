<!-- resources/views/contact.blade.php -->
@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<div class="container ashbin-padding-top">
    <div class="row">
        <div class="col-lg-8 col-12">
            <div class="ashbin-section">
                <div class="card">
                    <div class="card-body">
                        <p class="ashbin-title">Contact</p>

                        <!-- Display data from the Contact model -->
                        @if(!empty($data['contacts_all']) && $data['contacts_all']->isNotEmpty())
                        @foreach ($data['contacts_all'] as $contact)
                        <p class="card-text ashbin-contact-content">
                            {!! $contact->content !!}
                        </p>
                        @break <!-- Assuming you want to show only the first item -->
                        @endforeach
                        @else
                        <p>No contact data available.</p>
                        @endif

                        <!-- Display data from the ContactForm model 
            @if(!empty($data['contact_forms_all']) && $data['contact_forms_all']->isNotEmpty())
            @foreach ($data['contact_forms_all'] as $contactForm)
            <p class="card-text ashbin-contact-content">
                {!! $contactForm->message !!}
            </p>
            @endforeach
            @else
            <p>No contact form submissions available.</p>
            @endif
            -->

                        <!-- Contact form -->
                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label fw-bold">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label fw-bold">Subject</label>
                                <input type="subject" name="subject" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label fw-bold">Message</label>
                                <textarea name="message" class="form-control" required rows="5"></textarea>
                            </div>
                            <button type="submit" class="btn btn-outline-success">Submit</button>
                        </form>
                    </div>
                </div>
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
                <div class="ashbin-download-alingment">
                    <a href="/images/index/Household_Agriculture_and_Migration_Survey_Questionnaire_English.pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                        Household Agriculture Survey Questionnaire </a></br>
                    <a href="/images/index/LOAF_SST_July2015_Gallery-1.pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                        LOAF Specific Training</a>
                </div>
                </br>


                <h3 class="ashbin-widget-title"><span>Recent Activities</span></h3>
                <ul>
                    <li><a href="/trainings">
                            <div class="item">General Interviewing Techniques (GIT) Training</div>
                        </a>
                    </li>
                    <li><a href="/study specific training">
                            <div class="item">Study Specific Training</div>
                        </a></li>
                    <li><a href="/supervisors training">
                            <div class="item">Supervisors Training</div>
                        </a>
                    </li>
                    <li><a href="/crop cutting training">
                            <div class="item">Crop Cutting Training</div>
                        </a></li>
                    <li><a href="/survey data analysis training">
                            <div class="item">Survey Data Analysis Training</div>
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection