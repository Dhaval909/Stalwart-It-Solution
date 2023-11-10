@extends('Frontend.layouts.main')

@section('title','Web Devlopment | ')

@section('main-container')
<!-- About Us Start -->
<section class="main-about-us">
    <div class="container">
        <div class="row align-items-center" id="about-us">
            <div class="sub-title-box left">
                        <p class="sub-title">Services</p>
                        <span class="line1"></span>
                    </div>
            <div class="col-lg-6 wow right-animation" data-wow-delay="0.2s">
                <div class="about-img">
                    <img width="700" height="636"
                        src="{{asset('Frontend/assets/img/web.jpg')}}" class="img-fluid" alt="">

                </div>
            </div>
            <div class="col-lg-6 wow left-animation" data-wow-delay="0.2s">
                <div class="about-content ">
                    
                    <h1 class="h2-title">Website Development Company in Ahmedabad, Gujarat.</h1>
                    <div class="about-text">
                        <p>With a remarkable journey spanning over 7 years, we have honed our expertise to perfection, crafting digital experiences that seamlessly blend creativity, functionality, and innovation. Our passionate team of experts takes pride in transforming ideas into captivating online realities, tailored to meet your unique needs.Stalwart It Solution is one of the leading website solution providers specializing in website development. Stalwart It Solution is Proud of having web development experts with Skills like:</p>

                        <div class="emp-skils emp-skil">
                            <div class="emp-skils-left">
                                <p><img src="{{asset('Frontend/assets/img/PHP.svg')}}"
                                    alt="Top Rated PHP developers" width="80px">Php</p>
                                    <p><img src="{{asset('Frontend/assets/img/codeigniter.svg')}}"
                                        alt="Top Rated Codeignitor developers" height="30px">CodeIgniter</p>
                                        <p><img src="{{asset('Frontend/assets/img/laravel.svg')}}"
                                            alt="Laravel pro developers" width="90px">Laravel</p>
                            </div>
                            <div class="emp-skils-right">
                                <p><img src="{{asset('Frontend/assets/img/node.svg')}}"
                                        alt="Top Rated Node.js developers" height="30px">Nodejs</p>
                                        <p><img src="{{asset('Frontend/assets/img/wordpress.svg')}}"
                                            alt="Top Rated Wordpress developers" height="25px">WordPress </p>

                                    <p><img src="{{asset('Frontend/assets/img/shopify.svg')}}"
                                        alt="Top Rated React.js developers" height="25px" width="30px">Shopify</p>

                            </div>
                        </div>
                        <p>The Website Development Process is really important for any business. the more Easy and
                            Simplified websites are the more Customer likes to use them. That is your first impression
                            of your Client and how you can generate leads for your service or product in the digital
                            market. </p>
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
                <h2 align="center">Our Web Development Process</h2>
                <p>Stalwart It Solution's comprehensive Web Development strategy ensures a perfectly crafted professional site for your business that will boost your digital presence.</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 img-pad">
                    <img src="{{asset('Frontend/assets/img/img2.jpg')}}"  alt="Website Development Company in London" height="350px;">
                </div>
                <div class="col-md-6 hcenter">
                    <div class="title mt-1">
                        <h6> FIRST STEP PROCESS</h6>
                    </div>
                    <div class="title1 ">
                        <h2> Submit your idea </h2>
                    </div>
                    <div class="para">
                        <p>Experts Empyreal Infotech will collect all the details and grab your ideas <br>and references and will do the RND procedure over it and bring out <br> something creative from their side.</p>
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
                <div class="col-md-6 order-md-1">
                    <div class="img">
                        <img src="{{asset('Frontend/assets/img/home-4.jpg')}}" alt="Affordable Website Development Company in NJ" height="300px">
                    </div>
                </div>
                <div class="col-md-6 hcenter order-md-0">
                    <div class="title mt-1">
                        <h6> SECOND STEP PROCESS</h6>
                    </div>
                    <h2> Design</h2>
                    <p>In the second stage, all the creative ideas come to reality, where our best <br>
                         designers try to grab the reports and pour them into your project designing <br> and make it a complete responsive websites design for you. </p>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 img-pad">
                    <img src="{{asset('Frontend/assets/img/web.jpg')}}" >
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
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                
                <div class="col-md-6 order-md-1">
                    <div class="img img-mar">
                        <img src="{{asset('Frontend/assets/img/revision.jpg')}}" height="200px" >
                    </div>
                </div>
                <div class="col-md-6 hcenter order-md-0">
                   <div class="title mt-1">
                        <h6> FOURTH STEP PROCESS</h6>
                    </div>
                    <h2>Revision</h2>
                    <p>Here where your role is to check the designs and features made by our <br> designers And developers and give feedback to their work and guide them <br> about if there is any revision required on the project.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 img-mar">
                    <img src="{{asset('Frontend/assets/img/test.jpg')}}" alt="Process Images" height="300px">
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
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                
                <div class="col-md-6 order-md-1">
                    <div class="img img-mar">
                        <img class="imgcolor" src="{{asset('Frontend/assets/img/launch.svg')}}" alt="Process Images" height="300px">
                    </div>
                </div>
                <div class="col-md-6 hcenter order-md-0">
                    <div class="title mt-1">
                        <h6> SIXTH STEP PROCESS</h6>
                    </div>
                    <h2>Launch</h2>
                    <p>After all the complete testing is done We are good to go for the successful launch for making the first step towards your online presence.</p>

                    <p> This is the process of our best web development procedure wherein each step you are guided b our professional experts</p>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- ======= Contact Section ======= --}}
    @include('Frontend.contact_section')
    {{-- EndContactSection --}}

@endsection
