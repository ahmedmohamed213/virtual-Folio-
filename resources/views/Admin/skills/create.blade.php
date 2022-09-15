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

            <form method="post" action="{{ route('admin.skill.store') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Skill Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName"
                            placeholder="Enter Skill Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Skill Number</label>
                        <input type="number" name="number" class="form-control" id="exampleInputNumber"
                            placeholder="Enter Skill Number">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Skill Category</label>


                        <select type="text" name="skill_category_id" class="form-control" id="exampleInputId">
                            @foreach ($skillCategories as $skillCategory)
                                <option value="{{ $skillCategory->id }}">{{ $skillCategory->name }}</option>
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
