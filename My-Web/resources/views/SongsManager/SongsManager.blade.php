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
        <h1>Add Songs</h1>
        <div class="Content-display">
            <form action="{{ route('SongsManager.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row1">
                    <div class="col-md-3 mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Song name">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="artist">Artist</label>
                        <input type="text" class="form-control @error('artist') is-invalid @enderror" name="artist" placeholder="Artist name">
                        @error('artist')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="category">Category</label>
                        <select class="form-control @error('category') is-invalid @enderror" name="category">
                            <option value="">Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->name }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row1">
                    <div class="col-md-3 mb-3">
                        <label for="song">Insert song here</label>
                        <input type="file" class="form-control-file @error('song') is-invalid @enderror" name="song">
                        @error('song')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="image">Insert image here</label>
                        <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image">
                        @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary Centerbtt">Submit</button>
            </form>
        </div>
        <h1>List of Songs</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Song Name</th>
                    <th>Artist</th>
                    <th>Category</th>
                    <th>Song</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($songs as $song)
                    <tr>
                        <td>{{ $song->id }}</td>
                        <td>{{ $song->name }}</td>
                        <td>{{ $song->artist }}</td>
                        <td>{{ $song->category }}</td>
                        <td>
                            <audio controls>
                                <source src="{{ asset('storage/' . $song->song) }}" type="audio/mpeg">
                            </audio>
                        </td>
                        <td>
                            <img src="{{ asset('storage/' . $song->image) }}" alt="{{ $song->name }}" width="100">
                        </td>
                        <td>
                            <form action="{{ route('SongsManager.destroy',$song->id) }}" method="Post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
    </main>
@include('Users.footer')