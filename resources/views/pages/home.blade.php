@extends('app')

@section('content')
    <section class="hero-section">
        <div class="container">
            <h2>Get rewards when you signup to new services</h2>
            <a class="btn btn-default call-to-action" href="{{ url('/services') }}">Get a signup code</a>
            <ul class="list-unstyled services-list">
                <li>Digital Ocean</li>
                <li>Treehouse</li>
                <li>Dropbox</li>
                <li>Uber</li>
                <li>Evernote</li>
                <li>Airbnb</li>
            </ul>
        </div>
    </section>
    <section class="signup-section">
        <div class="container">
            <h2>Get rewards when people sign up to services using your referall code</h2>
            <a class="btn btn-default call-to-action" href="{{ url('/auth/register') }}">Add your signup code</a>
        </div>
    </section>
    <section class="info-section">
        <h2>How does it work?</h2>
        <p></p>
    </section>

@endsection