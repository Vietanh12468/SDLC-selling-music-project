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
        <form action="{{ route('Admin.SearchUser') }}" method="GET">
            <div class="form-group">
                <input type="text" name="search" class="form-control" placeholder="Input full name to search">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Money</th>
                        <th>VIP</th>
                        <th>Type</th>
                        <th>Created date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->money }}</td>
                            <td>{{ $user->VIP ? 'yes' : 'no' }}</td>
                            <td>{{ $user->type }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                            <form action="{{ route('Admin.ChangeAccType', $user->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="type" value="customer">
                                <button type="submit" class="btn btn-danger">Set Customer</button>
                            </form>

                            <form action="{{ route('Admin.ChangeAccType', $user->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="type" value="producer">
                                <button type="submit" class="btn btn-danger">Set Producer</button>
                            </form>

                            <form action="{{ route('Admin.ChangeAccType', $user->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="type" value="admin">
                                <button type="submit" class="btn btn-danger">Set Admin</button>
                            </form>

                            <form action="{{ route('Admin.ChangeAccType', $user->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="type" value="ban">
                                <button type="submit" class="btn btn-danger">Ban Acc</button>
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