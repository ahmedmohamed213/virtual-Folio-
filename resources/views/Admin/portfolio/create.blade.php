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

            <form method="post" action="{{ route('admin.portfolio.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Portfolio Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputName">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Tags</label>
                        <input type="text" name="tags" class="form-control" id="exampleInputtag">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" name="image" class="form-control" id="exampleInputimage">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">portfolio Category</label>

                        <select type="text" name="portfolio_category_id" class="form-control" id="exampleInputId">
                            @foreach ($portfolioCategories as $portfolioCategory)
                                <option value="{{ $portfolioCategory->id }}">{{ $portfolioCategory->name }}</option>
                            @endforeach


                        </select>
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
