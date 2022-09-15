@include('Admin.assets.header')
@include('Admin.assets.navbar')


<div class="container mt-5">
    <div class="row">
        <!-- left column -->
        <div class="col-12 col-lg-12">



            <form method="post" action="{{ route('admin.portfolio.category.update') }}">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $portfolioCategory->id }}">

                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Edit portfolio Category</label>
                        <input type="text" value="{{ $portfolioCategory->name }}" name="name" class="form-control"
                            id="exampleInputEmail1">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Filter name</label>
                        <input type="text" value="{{ $portfolioCategory->data_filter_name }}" name="data_filter_name"
                            class="form-control" id="exampleInputFilterName">
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
