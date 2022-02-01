@extends('layouts.admin')
@section('content')
<section class="container text-center">
     <div class="card ">
         <div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Update About Section</li>
						</ul><!-- /.breadcrumb -->


					</div>


     <div class="card-body">
          
          <form action="/updateDescription" method="POST" >
               @csrf
               
               <div class="form-group">
                    <label for="description"><h5 class="text-center">About Description</h5></label>
          <textarea name="description" id="description" cols="30" rows="5" class="form-control"> {{ $description }}</textarea>
               </div>
               @method('put')
               <div class="text-center">
                    <input type="submit" value="Update" class="btn btn-primary">
               </div>

          </form>
           <form action="/updateTopLeft" method="POST" >
               @csrf
               
               <div class="form-group">
                    <label for="description"><h5 class="text-center">Top left</h5></label>
                    <textarea name="top-left" id="description" cols="30" rows="5" class="form-control">{{ $topLeft }}</textarea>
               </div>
               @method('put')
               <div class="text-center">
                    <input type="submit" value="Update" class="btn btn-primary">
               </div>

          </form>
          <label ><h3 >Services list</h3></label>
          <form action="/updateServiceOne" method="POST" >
               @csrf
               
               <div class="form-group">
                     <label for="service1" ><h5 class="text-center">service one</h5></label>
                    <textarea name="service-one" id="service1" cols="30" rows="5" class="form-control">{{$service1}}</textarea>
                    
               </div>
               @method('put')
               <div class="text-center">
                    <input type="submit" value="Update" class="btn btn-primary">
               </div>

          </form>
          <form action="/updateServiceTwo" method="POST" >
               @csrf
               
               <div class="form-group">
                     <label for="service2" ><h5 class="text-center">service two</h5></label>
                    <textarea name="service-two" id="service2" cols="30" rows="5" class="form-control">{{ $service2 }}</textarea>
                    
               </div>
               @method('put')
               <div class="text-center">
                    <input type="submit" value="Update" class="btn btn-primary">
               </div>

          </form>
                <form action="/updateServiceThree" method="POST" >
               @csrf
               
               <div class="form-group">
                        <label for="service3" ><h5 class="text-center">service one</h5></label>
                    <textarea name="service-three" id="service3" cols="30" rows="5" class="form-control">{{$service3}}</textarea>
              
               </div>
               @method('put')
               <div class="text-center">
                    <input type="submit" value="Update" class="btn btn-primary">
               </div>

          </form>
               
                <form action="/updateAboutInfo" method="POST" >
               @csrf
               
               <div class="form-group">
                    <label for="about-infor" ><h5 class="text-center">About Info</h5></label>
                    <textarea name="about-infor" id="about-infor" cols="30" rows="5" class="form-control">{{ $about }}</textarea>
               </div>
               @method('put')
               <div class="text-center">
                    <input type="submit" value="Update" class="btn btn-primary">
               </div>

          </form>   
                
           <form action="/updateHeadingInfo" method="POST" >
               @csrf
              <div class="form-group">
                    <label for="about-infor" ><h5 class="text-center">heading infor</h5></label>
                    <textarea name="heading-infor" id="about-infor" cols="30" rows="5" class="form-control">{{ $heading }}</textarea>
               </div>
               
               <div class="text-center">
                    <input type="submit" value="Update" class="btn btn-primary">
               </div>

          </form>  
               

               

               <div class="text-center">
                    <h3>Images</h3>
               </div>

               
               <div class="row">
                     <form action="/updateLeftImage" method="POST" >
               @csrf
                 <div class="form-group col-md-4">
                    <label  ><h5 class="text-center">Left Image </h5></label>
                   <input type="file" name="left-image" class="form-control">
               
               @method('put')
               <div class="text-center">
                    <input type="submit" value="Update" class="btn btn-primary">
               </div>
               </div>
          </form>  
                         <form action="/updateRightImage" method="POST" >
               @csrf
                <div class="form-group col-md-4">
                    <label  ><h5 class="text-center">Right Top Image</h5></label>
                   <input type="file" name="right-image"class="form-control">
               
               @method('put')
               <div class="text-center">
                    <input type="submit" value="Update" class="btn btn-primary">
               </div>
               </div>
          </form>  
                <form action="/updateBottomImage" method="POST" >
                <div class="form-group col-md-4">
                    <label  ><h5 class="text-center">Right Bottom Image</h5></label>
                   <input type="file" name="bottom-image" class="form-control ">
               
               
               @method('put')
               <div class="text-center">
                    <input type="submit" value="Update" class="btn btn-primary">
               </div>
          </div>
          </form>
     </div>
     
     </div>
</section>


@endsection