<!-- resources/views/contact.blade.php -->
@extends('layouts.app')

@section('title', 'Contact')

@section('content')
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
@endsection