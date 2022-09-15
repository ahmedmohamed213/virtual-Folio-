@include('Admin.assets.header')
@include('Admin.assets.navbar')


<div class="container mt-5">
    <div class="row">
        <!-- left column -->
        <div class="col-12 col-lg-12">
            

            
            <form method="post" action="{{route('admin.skill.category.update')}}">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{$skillCategory->id}}">

                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Edit Skill Category</label>
                        <input type="text" value="{{$skillCategory->name}}" name="name" class="form-control" id="exampleInputEmail1">
                           
                    </div>

                </div>
                <!-- /.card-body -->
                @if($errors->any())
                @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
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