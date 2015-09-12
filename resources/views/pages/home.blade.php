@extends('app')

@section('content')
    <section class="hero-section">
        <div class="container text-center">
            <h2>Get rewards when you signup to new services</h2>
            <a class="btn btn-default call-to-action" href="{{ url('/services') }}">Give me a signup code</a>
            {{--<ul class="list-unstyled services-list">--}}
                {{--<li>Digital Ocean</li>--}}
                {{--<li>Treehouse</li>--}}
                {{--<li>Dropbox</li>--}}
                {{--<li>Uber</li>--}}
                {{--<li>Evernote</li>--}}
                {{--<li>Airbnb</li>--}}
            {{--</ul>--}}
        </div>
        <div class="row no-pad service-grid">
            <div class="col-xs-6">
                <img src="https://unsplash.it/600/400/" class="img-responsive">
                <img src="https://unsplash.it/600/400/" class="img-responsive">
                <img src="https://unsplash.it/600/400/" class="img-responsive">
            </div>
            <div class="col-xs-6">
                <img src="https://unsplash.it/600/400/" class="img-responsive">
                <img src="https://unsplash.it/600/400/" class="img-responsive">
                <img src="https://unsplash.it/600/400/" class="img-responsive">
            </div>
        </div>
    </section>
    <section class="signup-section">
        <div class="container text-center">
            <h2>Get rewards when people sign up to services using your referall code</h2>
            <a class="btn btn-default call-to-action-signup" href="{{ url('/auth/register') }}">Add your signup code</a>
            <div class="container">
                <div class="word-cloud" id="cloud">
                    {{--<span>20% DISCOUNT</span>--}}
                    {{--<span>FREE STORAGE</span>--}}
                    {{--<span>STORE CREDIT</span>--}}
                    {{--<span>FREE EDUCATION</span>--}}
                    {{--<span>BONUSES</span>--}}
                    {{--<span>PREMIUM TRIALS</span>--}}
                </div>
            </div>


        </div>
    </section>
    <section class="info-section">
        <div class="container">
            <h2>How does it work?</h2>
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <h3>1.Sign Up</h3>
                    <p>Make an account in seconds with just an email and password required OR log in with an existing
                        service like Google or Facebook.</p>
                </div>
                <div class="col-xs-12 col-md-4">
                    <h3>2.Add your referall codes</h3>
                    <p>Easily add your referall codes to the pool with just a few clicks. You can delete a code at any
                        time and add new ones as you sign up to more services with a referall scheme. </p>
                </div>
                <div class="col-xs-12 col-md-4">
                    <h3>3.Get benefits when your code is used</h3>
                    <p>When someone requests a signup code for a service, one is randomly picked from the pool. If your
                    code appears then you will receive the relevant referall scheme's benefits with no effort required
                    on your part.</p>
                </div>
            </div>
        </div>

    </section>
    <footer>
        <span>Woah! What are you doing all the way down here?</span></br>
        <span>^^^ All the good stuff's up there ^^^</span>
    </footer>

@endsection