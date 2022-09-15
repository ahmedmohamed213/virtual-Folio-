@include('Admin.assets.header')
@include('Admin.assets.navbar')


<div class="container ">
    <div class="row">
        <!-- left column -->
        <div class="col-12 col-lg-12 m-5">



            <form method="post" action="{{ route('admin.experience.update') }}">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $experiences->id }}">

                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" value="{{ $experiences->title }}" name="title" class="form-control"
                            id="exampleInputtitle">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Location</label>
                        <input type="text" value="{{ $experiences->location }}" name="location" class="form-control"
                            id="exampleInputlocation">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Body</label>
                        <input type="text" value="{{ $experiences->body }}" name="body" class="form-control"
                            id="exampleInputbody">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Year</label>
                        <input type="text" value="{{ $experiences->year }}" name="year" class="form-control"
                            id="exampleInputYear">
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
