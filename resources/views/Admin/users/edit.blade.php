@include('Admin.assets.header')
@include('Admin.assets.navbar')


<div class="container ">
    <div class="row">
        <!-- left column -->
        <div class="col-12 col-lg-12 m-5">



            <form method="post" action="{{ route('admin.user.update') }}">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $user->id }}">

                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Edit User Name</label>
                        <input type="text" value="{{ $user->name }}" name="name" class="form-control"
                            id="exampleInputname">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Edit Email </label>
                        <input type="text" value="{{ $user->email }}" name="email" class="form-control"
                            id="exampleInputEmail">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Edit Password </label>
                        <input type="text" value="{{ $user->password }}" name="password" class="form-control"
                            id="exampleInputpassword">

                    </div>

                </div>
                <!-- /.card-body -->
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>
@include('Admin.assets.footer')
