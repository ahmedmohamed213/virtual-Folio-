@include('Admin.assets.header')
@include('Admin.assets.navbar')


<div class="container">
    <div class="row">
        <!-- left column -->
        <div class="col-12 col-lg-12  m-5">

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif


            @if (Session::has('done'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('done') }}
                </div>
            @endif

            <form method="post" action="{{ route('admin.education.store') }}">
                @csrf
                <div class="card-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputtitle">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Location</label>
                        <input type="text" name="location" class="form-control" id="exampleInputlocation">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Body</label>
                        <input type="text" name="body" class="form-control" id="exampleInputbody">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Year</label>
                        <input type="text" name="year" class="form-control" id="exampleInputYear">
                    </div>


                </div>
                <!-- /.card-body -->


                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>
@include('Admin.assets.footer')
