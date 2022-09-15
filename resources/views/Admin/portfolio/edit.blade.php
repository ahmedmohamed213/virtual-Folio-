@include('Admin.assets.header')
@include('Admin.assets.navbar')


<div class="container ">
    <div class="row">
        <!-- left column -->
        <div class="col-12 col-lg-12 m-5">



            <form method="post" action="{{ route('admin.portfolio.update') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $portfolio->id }}">

                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" value="{{ $portfolio->title }}" name="title" class="form-control"
                            id="exampleInputEmail1">

                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1"> Image </label>
                        <input type="file" value="{{ $portfolio->image }}" name="image" class="form-control"
                            id="exampleInputEmail1">

                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Tags</label>
                        <input type="text" value="{{ $portfolio->tags }}" name="tags" class="form-control"
                            id="exampleInputEmail1">

                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">portfolio Category</label>


                        <select type="number" name="portfolio_category_id" class="form-control" id="exampleInputId">
                            @foreach ($portfolioCategories as $portfolioCategory)
                                <option @if ($portfolioCategory->id == $portfolio->portfolio_Category_id) selected @endif
                                    value="{{ $portfolioCategory->id }}">{{ $portfolioCategory->name }}</option>
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
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>
@include('Admin.assets.footer')
