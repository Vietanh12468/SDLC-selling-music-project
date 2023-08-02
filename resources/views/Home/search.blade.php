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
        <h1> Search Song here </h1>
        <form action="{{ route('SongShow.Search') }}" method="GET">
            <div class="row d-flex justify-content-center">
                <div class="form-group col-md-6 h-100">
                    <input type="text" name="search" class="form-control" placeholder="Input full name to search">
                </div>
                <button type="submit" class="btn btn-primary h-100">Search</button>
            </div>
        </form>
        @foreach($songs as $song)
        <a href="SongShow/{{ $song->id }}">
            <div class="row d-flex justify-content-center align-items-center Songrow text-center">
                <div class="col-md-2">
                    <img src="{{ asset('storage/' . $song->image) }}" alt="{{ $song->name }}" width="100">
                </div>
                <div class="col-md-3">
                    <h5>{{ $song->name }}</h5>
                    <p>{{ $song->artist }}</p>
                </div>
                <div class="col-md-4">
                    <audio controls style="width: 100%;">
                        <source src="{{ asset('storage/' . $song->song) }}" type="audio/mpeg">
                    </audio>
                </div>
            </div>
        </a>
        @endforeach
        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
    </main>
@include('Users.footer')