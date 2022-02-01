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
							<li class="active">Why Choose Us Section</li>
						</ul><!-- /.breadcrumb -->


					</div>
     <div class="card-body">
          
          <form action="{{ url('postChoose') }}" method="POST" >
               @csrf
               <div class="form-group">
                    <label for="description"><h5 class="text-center">Why Choose Us Description</h5></label>
                    <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
               </div>
               
                <div class="form-group">
                    
                    <label for="service3" ><h5 class="text-center">Why choose us  Content</h5></label>
                    <textarea name="choose1" id="service3" cols="30" rows="5" class="form-control"></textarea>
               </div>
               <div class="form-group">
                    
                    <label for="service3" ><h5 class="text-center">Why choose us  Content</h5></label>
                    <textarea name="choose2" id="service3" cols="30" rows="5" class="form-control"></textarea>
               </div>
              <div class="form-group">
                    
                    <label for="service3" ><h5 class="text-center">Why choose us  Content</h5></label>
                    <textarea name="choose3" id="service3" cols="30" rows="5" class="form-control"></textarea>
               </div>
              
              

             
               <div class="text-center">
                    <input type="submit" value="Create" class="btn btn-primary">
               </div>
          </form>
     </div>
     
     </div>
</section>


@endsection