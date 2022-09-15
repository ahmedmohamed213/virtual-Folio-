@include('Admin.assets.header')
@include('Admin.assets.navbar')


<div class="container ">
    <div class="row">
        <!-- left column -->
        <div class="col-12 col-lg-12 m-5">



            <form method="post" action="{{ route('admin.firstPage.update') }}">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $firstPages->id }}">

                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" value="{{ $firstPages->name }}" name="name" class="form-control"
                            id="exampleInputName">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" value="{{ $firstPages->title }}" name="title" class="form-control"
                            id="exampleInputtitle">
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
