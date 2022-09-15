@include('Admin.assets.header')
@include('Admin.assets.navbar')


<div class="container ">
    <div class="row">
        <!-- left column -->
        <div class="col-12 col-lg-12 m-5">



            <form method="post" action="{{ route('admin.about.update') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $about->id }}">

                <div class="card-body">

                    <div style="font-size: 24px"
                        class="form-group m-3  d-flex justify-content-center align-content-center"> Edit About</div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" value="{{ $about->name }}" name="name" class="form-control"
                            id="exampleInputName">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" value="{{ $about->title }}" name="title" class="form-control"
                            id="exampleInputtext">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Body</label>
                        <input type="text" value="{{ $about->body }}" name="body" class="form-control"
                            id="exampleInputbody">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">From</label>
                        <input type="text" value="{{ $about->from }}" name="from" class="form-control"
                            id="exampleInputfrom">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Lives in</label>
                        <input type="text" value="{{ $about->lives_in }}" name="lives_in" class="form-control"
                            id="exampleInputlives_in">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Age</label>
                        <input type="text" value="{{ $about->age }}" name="age" class="form-control"
                            id="exampleInputage">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Gender</label>
                        <input type="text" value="{{ $about->gender }}" name="gender" class="form-control"
                            id="exampleInputgender">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" name="image" class="form-control" id="exampleInputimage">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">CV</label>
                        <input type="file" name="cv" class="form-control" id="exampleInputcv">
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
