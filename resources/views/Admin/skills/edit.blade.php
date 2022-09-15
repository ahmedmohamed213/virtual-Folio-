@include('Admin.assets.header')
@include('Admin.assets.navbar')


<div class="container ">
    <div class="row">
        <!-- left column -->
        <div class="col-12 col-lg-12 m-5">
            

            
            <form method="post" action="{{route('admin.skill.update')}}">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{$skill->id}}">

                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Edit Skill </label>
                        <input type="text" value="{{$skill->name}}" name="name" class="form-control" id="exampleInputEmail1">
                           
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Skill Number</label>
                        <input type="number" value="{{$skill->number}}" name="number" class="form-control" id="exampleInputNumber"
                            placeholder="Enter Skill Number">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Skill Category</label>
                        <input type="number"  name="skill_category_id" class="form-control" id="exampleInputId"
                            placeholder="Enter Skill Category">

                       <select name="skill_category_id" id="">
                          @foreach ($skillCategories as $skillCategory)
                          <option @if($skillCategory->id == $skill->skill_Category_id)selected @endif value="{{$skillCategory->id}}">{{$skillCategory->name}}</option>
                            
                          @endforeach
                        
                        
                       </select>     
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