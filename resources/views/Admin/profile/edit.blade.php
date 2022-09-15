@include('Admin.assets.header')
@include('Admin.assets.navbar')


<div class="container ">
    <div class="row">
        <!-- left column -->
        <div class="col-12 col-lg-12 m-5">



            <form method="post" action="{{ route('admin.profile.update') }}">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $profiles->id }}">

                <div class="card-body">
                    <div style="font-size: 24px"
                        class="form-group m-3  d-flex justify-content-center align-content-center"> Edit Profile</div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title </label>
                        <input type="text" value="{{ $profiles->title }}" name="title" class="form-control"
                            id="exampleInputEmail1">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Body</label>
                        <input type="text" value="{{ $profiles->body }}" name="body" class="form-control"
                            id="exampleInputEmail1">

                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Year</label>
                        <input type="text" value="{{ $profiles->year }}" name="year" class="form-control"
                            id="exampleInputYear">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Type </label>

                        <select type="text" class="form-control" name="type" id="">
                            <option value="experience" @if ($profiles->type == 'experience') selected @endif>experience
                            </option>
                            <option value="education" @if ($profiles->type == 'education') selected @endif>education
                            </option>


                        </select>
                    </div>

                </div>
                <!-- /.card-body  -->
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
