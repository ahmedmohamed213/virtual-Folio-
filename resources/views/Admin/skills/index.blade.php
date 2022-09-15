@include('Admin.assets.header')
@include('Admin.assets.navbar')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-12 ">
            <div class="card  m-5">
                <a class="btn btn-primary mt-3" href="{{route('admin.skill.craete')}}">Add Skill</a>

                <div class="card-header">
                    <h3 class="card-title ">Skills</h3>


                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right"
                                placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
               
                @if($errors->any())
                @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
                @endforeach
                @endif


                @if(Session::has('done'))
               
                <div class="alert alert-success" role="alert">
                    {{Session::get('done')}}
                </div>
                
                @endif
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Number</th>
                                <th>Category Name</th>
                                <th>Delete</th>
                                <th>Edit</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($skills as $skill)
                            <tr>
                                <td>{{$skill->name}}</td>
                                <td>{{$skill->number}}</td>
                                <td>{{$skill->category->name}}</td>
                                <td>
                                    <form method="post" action="{{route('admin.skill.delete')}}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{$skill->id}}">
                                        <button class="btn btn-danger" type="submit">delete</button>
                                    </form>
                                </td>
                                <td>
                                    <a href="{{route('admin.skill.edit',[$skill->id])}}">
                                        <button class="btn btn-success" type="submit">update</button>
                                       
                                    </a>
                                </td>
                            </tr>


                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card - ->
        </div>
    </div>
</div>

@include('Admin.assets.footer')