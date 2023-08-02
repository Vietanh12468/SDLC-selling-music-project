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
        <h1> Recent Upload </h1>
        <div class="row" >
            @foreach ($songs as $song)
                <div class="col-md-3 mb-4 song">
                    <a href="SongShow/{{ $song->id }}">
                        <div class="card h-100">
                            <div style="height: 60%;">
                                <img class="card-img-top Max_fit" src="{{ asset('storage/' . $song->image) }}" alt="{{ $song->name }}">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $song->name }}</h5>
                                <p class="card-text">{{ $song->artist }}</p>
                                <p class="card-text">{{ $song->album }}</p>
                                <p class="card-text">{{ $song->created_at }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        
        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
    </main>
@include('Users.footer')