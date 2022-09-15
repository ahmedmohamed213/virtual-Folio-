@include('Admin.assets.header')
@include('Admin.assets.navbar')


<div class="container">
    <div class="row">
        <!-- left column -->
        <div class="col-12 col-lg-12 mt-5">

            <form method="post" action="{{ route('admin.portfolio.category.store') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Add portfolio Category</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Filter name</label>
                        <input type="text" name="data_filter_name" class="form-control" id="exampleInputFilterName">
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
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>
@include('Admin.assets.footer')
