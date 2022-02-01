@extends('layouts.app')
@section('content')
<section class="container">
     <div class="card ">
          <div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Update Why Choose Us Section</li>
						</ul><!-- /.breadcrumb -->


					</div>
     <div class="card-body">
          
          <form action="{{ url('postService') }}" method="POST" >
               @csrf
               <div class="form-group">
                    <label for="description"><h5 class="text-center">Choose Description</h5></label>
                    <textarea name="description" id="description" cols="30" rows="5" class="form-control">{{ $description }}</textarea>
               </div>
               
                <div class="form-group">
                    
                    <label for="service1" ><h5 class="text-center">choose Title</h5></label>
                    <input type="text" name="title" class="form-control" value="{{ $chooseTitle }}"> 
                    <label for="service3" ><h5 class="text-center"> Content</h5></label>
                    <textarea name="service" id="service3" cols="30" rows="5" class="form-control">{{ $choose }}</textarea>
               </div>
              

             
               @method('put')
               <div>
                    <input type="submit" value="Update" class="btn btn-primary">
               </div>
          </form>
     </div>
     
     </div>
</section>


@endsection