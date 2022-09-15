@include('Admin.assets.header')
@include('Admin.assets.navbar')


<div class="container ">
    <div class="row">
        <!-- left column -->
        <div class="col-12 col-lg-12 m-5">



            <form method="post" action="{{ route('admin.service.update') }}">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $services->id }}">

                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Icon</label>
                        <input type="text" value="{{ $services->icon }}" name="icon" class="form-control"
                            id="exampleInputIcon">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" value="{{ $services->title }}" name="title" class="form-control"
                            id="exampleInputtitle">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Body</label>
                        <input type="text" value="{{ $services->body }}" name="body" class="form-control"
                            id="exampleInputEmail1">

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
