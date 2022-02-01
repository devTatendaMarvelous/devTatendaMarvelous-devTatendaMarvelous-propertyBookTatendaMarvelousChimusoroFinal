@extends('layouts.home')
@section('content')
        <!-- Home secton -->
        <section class="row home " id="home">
            <div class="container">
                
                <div class="row">
                        <div class="col-md-6 text-left home-left ">
                                <h1><strong>We provide <br> <a href="#">solutions</a><br> for your business</strong></h1>
                                <div class="row">
                                        <div class="btn-primary text-center btn-oval mr-3">
                                                Get Started
                                            </div>
                                            <div class=" btn btn-services btn-oval">
                                                    Our Services
                                            </div>
                                </div>
                
                            </div>
                            <div class="col-md-6 home-right">
                                <img src="{{asset('storage/images/webdevelopment.png')}}" alt="">
                            </div>
                </div>
            </div>
        </section>
<!-- homesectionend -->

<!-- ---------------About section -->

<section class="row mt-4" id="about">
    <div class="container">
        <div class="text-center">
            <h1>About Us</h1>
            <p>{{ $description }}</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p class="text-left">
                    {{$topLeft}}
                </p>
<!-- -----------Services in about section--------------- -->
                <div class="about-services">
                 <div class="row">
                        <span class="service-icon text-center icon-shopping-bag"></span>
                        <div class="col-10">
                                <h4>Service 1</h4>
                                <p>{{$service1}}</p>
                        </div>
                 </div>

                 <div class="row">
                        <span class="service-icon text-center icon-picture "></span>
                        <div class="col-10">
                                <h4>Service 2</h4>
                                <p>{{$service2}}</p>
                        </div>
                 </div>
                 <div class="row">
                        <span class="service-icon icon-chart-line text-center "></span>
                        <div class="col-10">
                                <h4>Service 3</h4>
                                <p>{{$service3}}</p>
                        </div>
                 </div>

                </div>
                <!-- ---------------------adout services end------------------ -->
                <div class="col-12  text-center">
                    <img src="{{asset('storage/images/web.jpg')}}" class="service-img"alt="">
                </div>

                <div class="col-12">
                        <h4>About Info</h4>
                        <p>{{$about}}
                        </p>
                        
                        
            </div>
            </div>

            <div class="col-md-6">
                <div class="col-md-12 home-right">
                    <img src="{{asset('storage/images/webdesign.jpg')}}"  class="service-img" alt="">
                </div>

                <div class="col-md-12">
                    <h4>Heading</h4>
                    <p>{{$heading}}
                        </p>

                </div>
                <div class="col-md-12 home-right">
                    <img src="{{asset('storage/images/webDev.png')}}"  class="service-img" alt="">
                </div>

            </div>
        </div>

    </div>
</section>

<!-- ----------------about section end -->


<!-- --------------Services section--------------- -->

<section class="row service mt-4" id="services">

    <div class="container">
            <div class="text-center">
                    <h1>Services</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex ad suscipit corr</p>
            </div>
            <div class="cards">

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                   <div class="row">
                                        <div class="col-md-1 mt-4">
                                            <div class="row mt-4"></div>
                                                <span class="icon-params "></span>
                                        </div>
                                    <div class="col-md-10">
                                            <h4>Service 1</h4>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam blanditiis error, 
                                                eos repudiandae voluptate ducimus nihil molestias beatae quod</p>
                                    </div>
                                   </div>
                            </div>
                        </div>
                        <div class="card">
                                <div class="card-header">
                                        <div class="row">
                                                <div class="col-md-1 mt-4">
                                                    <div class="row mt-4"></div>
                                                        <span class="icon-clock "></span>
                                                </div>
                                            <div class="col-md-10">
                                                    <h4>Service 2</h4>
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam blanditiis error, 
                                                        eos repudiandae voluptate ducimus nihil molestias beatae quod</p>
                                            </div>
                                           </div>
                                </div>
                            </div>
                            <div class="card">
                                    <div class="card-header">
                                            <div class="row">
                                                    <div class="col-md-1 mt-4">
                                                        <div class="row mt-4"></div>
                                                            <span class="icon-fingerprint "></span>
                                                    </div>
                                                <div class="col-md-10">
                                                        <h4>Service 3</h4>
                                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam blanditiis error, 
                                                            eos repudiandae voluptate ducimus nihil molestias beatae quod</p>
                                                </div>
                                               </div>
                                    </div>
                                </div>
                                
                    </div>

                    <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                        <div class="row">
                                                <div class="col-md-1 mt-4">
                                                    <div class="row mt-4"></div>
                                                        <span class="icon-film1 "></span>
                                                </div>
                                            <div class="col-md-10">
                                                    <h4>Service 4</h4>
                                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam blanditiis error, 
                                                        eos repudiandae voluptate ducimus nihil molestias beatae quod</p>
                                            </div>
                                           </div>
                                </div>
                            </div>
                            <div class="card">
                                    <div class="card-header">
                                            <div class="row">
                                                    <div class="col-md-1 mt-4">
                                                        <div class="row mt-4"></div>
                                                            <span class="icon-wordpress1 "></span>
                                                    </div>
                                                <div class="col-md-10">
                                                        <h4>Service 5</h4>
                                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam blanditiis error, 
                                                            eos repudiandae voluptate ducimus nihil molestias beatae quod</p>
                                                </div>
                                               </div>
                                    </div>
                                </div>
                                <div class="card">
                                        <div class="card-header">
                                                <div class="row">
                                                        <div class="col-md-1 mt-4">
                                                            <div class="row mt-4"></div>
                                                                <span class="icon-anchor  "></span>
                                                        </div>
                                                    <div class="col-md-10">
                                                            <h4>Service 6</h4>
                                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam blanditiis error, 
                                                                eos repudiandae voluptate ducimus nihil molestias beatae quod</p>
                                                    </div>
                                                   </div>
                                        </div>
                                    </div>
                                    
                        </div>
                </div>
            </div>

    </div>
</section>

<!-- --------------Services end------ -->


<!-- --------------------------------Why Choose us Section -->

 <section class="row why-choose">
     <div class="container">
            <div class="text-center">
                    <h1>Why Choose Us?</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex ad suscipit corr</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body choose text-center">
                            <span class="choose-icon icon-diamond"></span>
                            <h4>heading</h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, aut. Sit at cupiditate harum omnis, iusto amet architecto consectetur nobis laboriosam, pariatur eaque facere vero aliquam obcaecati aut corporis quidem!

                            </p>
                            <h5><a href="#">Read more</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                        <div class="card">
                            <div class="card-body choose text-center">
                                <span class="choose-icon icon-file-text"></span>
                                <h4>heading</h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, aut. Sit at cupiditate harum omnis, iusto amet architecto consectetur nobis laboriosam, pariatur eaque facere vero aliquam obcaecati aut corporis quidem!
    
                                </p>
                                <h5><a href="#">Read more</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                            <div class="card">
                                <div class="card-body choose text-center">
                                    <span class="choose-icon icon-wpforms "></span>
                                    <h4>heading</h4>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, aut. Sit at cupiditate harum omnis, iusto amet architecto consectetur nobis laboriosam, pariatur eaque facere vero aliquam obcaecati aut corporis quidem!
        
                                    </p>
                                    <h5><a href="#">Read more</a></h5>
                                </div>
                            </div>
                        </div>
            </div>

            <div class="row text-center">
                <div class="col-md-3">
                    <h1>274</h1>
                    <p>Clients</p>
                </div>
                <div class="col-md-3">
                        <h1>421</h1>
                        <p>Projects</p>
                    </div>
                    <div class="col-md-3">
                            <h1>1,349</h1>
                            <p>HoursOf Support</p>
                        </div>
                        <div class="col-md-3">
                                <h1>18</h1>
                                <p>Hardworkers</p>
                            </div>
            </div>
     </div>
 </section>
<!-- ?------------------------ end---------------------- -->

<!-- --------------Portfolio section-->

<section class="row mt-4" id="portfolio">
    <div class="container">

            <div class="text-center">
                    <h1>Our Portfolio</h1>
                    <div class="row">
                        <div class="col-4"></div>
                        
                    <ul class="portfolio-links ">
                            <li class="  active"><a href="#home" > ALL</a></li>
                            <li><a href="#about">APP</a> </li>
                            <li><a href="#services">CARD</a> </li>
                            <li><a href="#team">WEB</a> </li>
                            
                        </ul>
                    </div>
            </div>
            <div class="portfolio-images">
                <div class="row text-center  container">
                        <div class="col-md-4">
                                <img class="portfolio-image"src="{{asset('storage/images/comm.jpg')}}" alt="">
                        </div>
                        <div class="col-md-4">
                                <img class="portfolio-image"src="{{asset('storage/images/comm.jpg')}}" alt="">
                        </div>
                        <div class="col-md-4 "">
                          <img class="portfolio-image"src="{{asset('storage/images/comm.jpg')}}" alt="">
                        </div>
                    
                </div>
            </div>
    </div>
</section>
<!-- ----------------------pPortfolio end -->


<!-- -------------Testimoials -->

<section class="row" id="testimonials">

    <div class="container">
            <div class="text-center">
                    <h1>Testimonials</h1>
                    
            </div>
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                      <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                      <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                       
                        <div class="container">
                          <div class="carousel-caption text-start carousel-text">
                            <h1>Example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                
                        <div class="container">
                          <div class="carousel-caption carousel-text">
                            <h1>Another example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
                
                        <div class="container">
                          <div class="carousel-caption text-end carousel-text">
                            <h1>One more for good measure.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden carousel-text">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                      <span class="carousel-control-next-icon carousel-text" aria-hidden="true"></span>
                      <span class="visually-hidden carousel-text">Next</span>
                    </a>
                  </div>
                
    </div>
</section>
<!-- -----------Testimonials End -->

<!-- ---------------------Team-------------------- -->

<secton class="row" id="team">
        <div class="container">
            <div class="text-center">
                <h1>Team</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste aut architecto sed </p>
                
        </div>


        <div class="row">

            <div class="col-md-3">
                <img src="{{asset('storage/images/tait.jpg')}}" class="team-image" alt="">
            </div>
            <div class="col-md-3">
                <img src="{{asset('storage/images/tait1.JPG')}}" class="team-image" alt="">
            </div>
            <div class="col-md-3">
                <img src="{{asset('storage/images/n.jpg')}}" class="team-image" alt="">
            </div>
            <div class="col-md-3">
                <img src="{{asset('storage/images/nashy.jpg')}}" class="team-image" alt="">
            </div>

        </div>
        </div>

</secton>

<!-- -------------------Team end---------------- -->
<!-- --------------------Clients----------------- -->
<section class="row mt-4 p-4 service" >
    <div class="container">
            
            <div class="text-center mt-4">
                <h1>Clients</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste aut architecto sed </p>
                        
            </div>
            <div class="row container">
                <div class="col-md-3 card">
                    <div class="card-body text-center">
                        <h1 class="icon-behance"></h1>
                    </div>
                </div>
                <div class="col-md-3 card">
                        <div class="card-body text-center">
                            <h1 class="icon-accusoft"></h1>
                        </div>
                    </div>
                    <div class="col-md-3 card">
                            <div class="card-body text-center">
                                <h1 class="icon-aviato"></h1>
                            </div>
                        </div>
                        <div class="col-md-3 card">
                                <div class="card-body text-center">
                                    <h1 class="icon-amazon-pay"></h1>
                                </div>
                            </div>

            </div>
            <div class="row container">
                    <div class="col-md-3 card">
                        <div class="card-body text-center">
                            <h1 class="icon-audible"></h1>
                        </div>
                    </div>
                    <div class="col-md-3 card">
                            <div class="card-body text-center">
                                <h1 class="icon-vimeo1"></h1>
                            </div>
                        </div>
                        <div class="col-md-3 card">
                                <div class="card-body text-center">
                                    <h1 class="icon-weibo1"></h1>
                                </div>
                            </div>
                            <div class="col-md-3 card">
                                    <div class="card-body text-center">
                                        <h1 class="icon-aim"></h1>
                                    </div>
                                </div>
    
                </div>
            



    </div>

</section>

<!-- --------------------ClientsEnd--------------- -->

<!-- ------------Contact------------------------ -->

<section class="row mb-4" id="contact">
    <div class="container">
            <div class="text-center mt-4">
                    <h1>Contact Us</h1>
                            
            </div>

            <div class="row">
                <div class="col-md-6 map">
                    <img src="" class="col-md-8"alt="">
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <address>
                                <span class="icon-location  contact-icons"></span>
                                12 SussexRd propertybook Park Harare
                            </address>
                        </div>
                        <div class="col-md-4">
                                  
                                <span class="icon-mail contact-icons"></span>
                                infor@propertybook.com
                            
                        </div>
                        <div class="col-md-4">
                                
                            <span class="icon-line-phone contact-icons"></span>
                            0716291396
                                
                        </div>
                            
                    </div>
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-md-6 form- group">
                                <input type="text" class="col-12 form-control"placeholder="Your Name" required>
                            </div>

                            <div class="col-md-6 form-group">
                                    <input type="email" class=" col-12 form-control" placeholder="Your Email" required>
                                </div>
                        </div>
                        <div class=" form-group">
                                <input type="text" class="form-control col-12" placeholder="Subject" required>
                            </div>
                            <div class=" form-group">
                                   
                        <textarea name="message" id=""placeholder="message" cols="30" rows="10" class="form-control col-12"></textarea>
                                </div>
                        
                        <input type="submit" class="btn btn-primary text-center btn-oval p-1 pull-left" value="Send Message">
                    </form>    
                </div>
            </div>
    </div>
</section>

<!-- ----------Contact -------------------->
@endsection