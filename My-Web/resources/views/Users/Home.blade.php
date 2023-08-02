@include('Users.navbar')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        @if ($message = Session::get('fail'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="row Introduct">
            <div class="col-md-4" style="margin-right: 20px;">
                <h1>Welcome to Tune Source</h1>
                <h3>The largest hard-to-find music website in the world</h3>
            </div>
            <div class="col-md-7">
                <img src="{{ asset('storage/Banner.png') }}" class="img-fluid Banner">
            </div>
        </div>
        <div class="row Introduct">
            <div class="col-md-12" style="margin-right: 20px;">
                <h1>Why should you use us</h1>
            </div>
            <div class="col-md-3" style="margin-right: 20px;">
                <h3>Top rarest song in the world </h3>
                <p>We collect all the songs from 1000 BC and all the music is make sure that they are copyright</p>
            </div> 
            <div class="col-md-3" style="margin-right: 20px;">
                <h3>Listen to music while offline </h3>
                <p>Enjoy your music without connect to wifi like Walking, Cooking, Swiming, ... with your friend and family </p>
            </div>
            <div class="col-md-3" style="margin-right: 20px;">
                <h3>Your privacy is secure </h3>
                <p>We always make sure your data is using for right purpose and not share for anyone else</p>
            </div>
        </div>
    </main>
@include('Users.footer')