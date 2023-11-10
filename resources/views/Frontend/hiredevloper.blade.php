@extends('Frontend.layouts.main')

@section('title','Hire Developers | ')
@section("main-container")
<section class="main-about-us">
    <div class="container">
        <div class="row align-items-center" id="about-us">
            <div class="sub-title-box left">
                        <p class="sub-title">Hire Dedicated Developers</p>
                        <span class="line1"></span>
                    </div>
            <div class="col-lg-6 wow right-animation" data-wow-delay="0.2s">
                <div class="about-img">
                    <img width="700" height="636"
                        src="{{url('/Frontend/assets/img/hire2.jpg')}}" class="img-fluid" alt="">

                </div>
            </div>
            <div class="col-lg-6 wow left-animation" data-wow-delay="0.2s">
                <div class="about-content ">
                    
                    <h1 class="h2-title">Website Development Company in Ahmedabad, Gujarat.</h1>
                    <div class="about-text">
                        <p>At Stalwart It Solution, we understand that every project is unique and may require specific expertise and skill sets. That's why we offer you the opportunity to hire dedicated developers who will work exclusively on your project, bringing their specialized knowledge and experience to the table. Whether you need a web developer, mobile app developer, UI/UX designer, or any other tech expert, we have the talent you need to make your project a success.</p>
                        <p>Stalwart It Solution is one of the leading Web/ App solution providers specializing in website development. Stalwart It Solution is Proud of having development experts with Skills like:</p>
                         <div class="emp-skils emp-skil">
                            <div class="emp-skils-left">
                                <p><img src="{{url('./Frontend/assets/img/PHP.svg')}}"
                                    alt="Top Rated PHP developers" width="80px">Php</p>
                                    <p><img src="{{url('./Frontend/assets/img/ios.svg')}}"
                                        alt="Top Rated Codeignitor developers" height="30px">IOS</p>
                                        <p><img src="{{url('./Frontend/assets/img/laravel.svg')}}"
                                            alt="Laravel pro developers" width="90px">Laravel</p>
                            </div>
                            <div class="emp-skils-right">
                                <p><img src="{{url('./Frontend/assets/img/node.svg')}}"
                                        alt="Top Rated Node.js developers" height="30px">Nodejs</p>
                                        <p><img src="{{url('./Frontend/assets/img/android.svg')}}"
                                    alt="Top Rated PHP developers" width="80px">Android</p>

                                    <p><img src="{{url('./Frontend/assets/img/shopify.svg')}}"
                                        alt="Top Rated React.js developers" height="25px" width="30px">Shopify</p>

                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us End -->

<div class="container">
    <div class="row">
        <div class="col-12">
                <h2 align="center">Stalwart – A Perfect Place to Hire Dedicated Developers.</h2>
                <p>Searching for skilled website/application developers to establish a robust online presence for your business? Look no further. At Stalwart, our team comprises top-tier web developers, belonging to the top echelons of IT talent. They bring unparalleled expertise and offer best-in-class web programming solutions to elevate your market standing. With us, you're poised for success in your niche.</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 img-pad">
                    <img src="{{url('./Frontend/assets/img/hire.jpg')}}"  alt="Hire Developer " height="230px;">
                </div>
                <div class="col-md-6 hcenter">
                    <!-- <div class="title mt-1">
                        <h6> Hire Full Stack Developers for Optimal Cost-Quality Balance</h6>
                    </div> -->
                    <div class="title1 ">
                        <h2> Hire Full Stack Developers for Optimal Cost-Quality Balance </h2>
                    </div>
                    <div class="para">
                        <p>In today's dynamic digital landscape, the demand for versatile full-stack developers who can handle both web and app development is at an all-time high. These professionals possess a wide skill set that covers both front-end and back-end development, making them a cost-effective and quality-driven solution for businesses.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 order-md-2 ">
                   <div class="img">
                        <img src="{{url('./Frontend/assets/img/why.png')}}" alt="Why Chosse us" height="300px">
                    </div>
                </div>
                <div class="col-md-6 order-md-1 hcenter">
                     <!-- <div class="title mt-1">
                        <h6> SECOND STEP PROCESS</h6>
                    </div> -->
                    <h2> Why Choose Our Dedicated Developers</h2>
                    <ul>
                        <li>Specialized Skills</li>
                        <li>Cost-Effective</li>
                        <li>Flexible Staffing</li>
                        <li>Faster Development</li>
                        <li>Dedication and Commitment</li>
                    </ul>
                    
                </div>
            </div>

        </div>
    </div>
</div>

{{-- ======= Contact Section ======= --}}
    @include('Frontend.contact_section')
    {{-- EndContactSection --}}

<!-- <div class="d-flex justify-content-center align-items-center mt-3 mb-5">
<div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="{{ url('/contactus') }}" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Contact Us</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
</div> -->


<!-- <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 img-pad">
                    <img src="{{url('./Frontend/assets/img/web.jpg')}}">
                </div>
                <div class="col-md-6 hcenter">
                    <div class="title mt-4">
                        <h6> THIRD STEP PROCESS</h6>
                    </div>
                    <div class="title1 ">
                        <h2> Development </h2>
                    </div>
                    <div class="para">
                       In this stage, the Development of required features that are to be added to your are done and from just static design your site is made dynamic with all working functionalities that you want to add.
                    </div>
                </div>
            </div>

        </div>
    </div>
</div> -->

<!-- <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 hcenter">
                   <div class="title mt-1">
                        <h6> FOURTH STEP PROCESS</h6>
                    </div>
                    <h2>Revision</h2>
                    <p>Here where your role is to check the designs and features made by our <br> designers And developers and give feedback to their work and guide them <br> about if there is any revision required on the project.</p>
                </div>
                <div class="col-md-6">
                    <div class="img img-mar">
                        <img src="{{url('./Frontend/assets/img/revision.jpg')}}" height="300px" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 img-mar">
                    <img src="{{url('./Frontend/assets/img/test.jpg')}}" alt="Process Images" height="300px">
                </div>
                <div class="col-md-6 hcenter">
                    <div class="title mt-4">
                        <h6>FIFTH STEP PROCESS</h6>
                    </div>
                    <div class="title1 ">
                        <h1> Test </h1>
                    </div>
                    <div class="para">
                        In this stage, all the revised design and developer features on the project is tested will all aspect like responsiveness in all resolutions and other required aspects.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 hcenter">
                    <div class="title mt-1">
                        <h6> SIXTH STEP PROCESS</h6>
                    </div>
                    <h2>Launch</h2>
                    <p>After all the complete testing is done We are good to go for the successful launch for making the first step towards your online presence.</p>

                    <p> This is the process of our best web development procedure wherein each step you are guided b our professional experts</p>
                </div>
                <div class="col-md-6">
                    <div class="img img-mar">
                        <img src="{{url('./Frontend/assets/img/processimages.jpg')}}" alt="Process Images" height="300px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->


@endsection

