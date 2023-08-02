@include('Users.navbar')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <form action="{{ route('Users.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                @error('email')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="Fullname">Fullname</label>
                <input type="text" class="form-control" name="name" placeholder="Fullname">
                @error('name')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
                @error('password')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="repassword">RePassword</label>
                <input type="password" class="form-control" name="repassword" placeholder="RePassword">
                @error('password')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </main>
@include('Users.footer')