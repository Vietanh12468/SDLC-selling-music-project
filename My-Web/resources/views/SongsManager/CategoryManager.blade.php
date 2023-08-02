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
      <form action="{{ route('SongsManager.store') }}" method="POST" class="" enctype="multipart/form-data" >
        @csrf
        <div class="form-group">
          <label for="name">Category name</label>
          <input type="text" class="form-control" name="name" placeholder="Category name" />
          @error('name')
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
        <button type="submit" class="btn btn-primary Centerbtt">  Submit  </button>
      </form>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Category</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
            <tr>
              <td>{{ $category->name }}</td>
              <td>
                  <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" width="100">
              </td>
              <td>
                <form action="{{ route('Admin.DestroyCategory', $category->name) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
      </table>
    </div>
    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
  </main>
@include('Users.footer')