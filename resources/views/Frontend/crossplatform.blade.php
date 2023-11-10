@extends('Frontend.layouts.main')

@section('title','Cross Platform Apps | ')
@section("main-container")
<section class="main-about-us">
    <div class="container">
        <div class="row align-items-center" id="about-us">
            <div class="sub-title-box left">
                        <p class="sub-title">Cross Platform App Development</p>
                        <span class="line1"></span>
                    </div>
            <div class="col-lg-6 wow right-animation" data-wow-delay="0.2s">
                <div class="about-img">
                    <img width="700" height="636"
                        src="{{url('/Frontend/assets/img/web.jpg')}}" class="img-fluid" alt="">

                </div>
            </div>
            <div class="col-lg-6 wow left-animation" data-wow-delay="0.2s">
                <div class="about-content ">
                    
                    <h3 class="h2-title">Cross Platform Mobile App Development</h3>
                    <div class="about-text">
                        <p>Stalwart IT Solution is Proud of having Mobile app experts with Skills like:</p>

                        <div class="emp-skils emp-skil">
                            <div class="emp-skils-left">
                                 <p><img src="{{url('./Frontend/assets/img/flutter.svg')}}"
                                        alt="Top Rated Node.js developers" height="30px">Flutter</p>
                            </div>
                            <div class="emp-skils-right">
                                 <p><img src="{{url('./Frontend/assets/img/native.svg')}}"
                                            alt="Top Rated Wordpress developers" height="25px">React Native </p>

                            </div>
                        </div>
                        <p>Cross-platform mobile app development is a cost-effective and efficient approach to building applications that run seamlessly on multiple platforms, including iOS and Android. By leveraging frameworks like React Native, Flutter, and Xamarin, developers can create consistent user experiences while reducing development time and effort. This strategy is ideal for businesses looking to reach a broader audience with a single codebase, making it a popular choice in the mobile app development landscape. </p>
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
                <h2 align="center" class="mb-4">Why Cross Platform Mobile App Development Is Important ?</h2>
                 <p >Today, the online experience is essential to the success of every business and organization, developing an effective Mobile app helps you to connect your leads in a really easy and fast way. Every person that's Transacting with has you on their fingertip.</p>
                 <p class="mb-2">Following are the benefits of mobile app development:</p>
                    

                        <ul class="check">
                            <li>
                                Developing a single codebase that works on multiple platforms reduces development costs.
                            </li>
                            <li>
                              Faster development due to code sharing accelerates the app release.
                            </li>
                            <li>
                                Users get a uniform experience across different devices.
                            </li>
                            <li>
                               Updates and bug fixes can be applied to all platforms simultaneously.
                            </li>
</ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 img-pad">
                    <img src="{{url('./Frontend/assets/img/Flutter.jpg')}}"  alt="Website Development Company in London" height="200px;" class="imgzoom">
                </div>
                <div class="col-md-6 hcenter">
                    <div class="title mt-1">
                        <h6> Flutter</h6>
                    </div>
                    <div class="title1 ">
                        <!-- <h2> Submit your idea </h2> -->
                    </div>
                    <div class="para">
                         <p>At Stalwart IT Solution, we have assembled a team of professional Flutter application developers and designers who possess the knowledge, skills, and experience needed to create top-notch mobile applications. We specialize in developing robust, scalable, and high-performance Flutter applications that meet the stringent requirements and standards of app stores.</p>
                    <p>Our expert developers pay meticulous attention to the design, development, and thorough mobile app testing to ensure that your app functions flawlessly and provides an exceptional user experience. At Stalwart IT Solution, we are passionate about Flutter app development and are committed to turning your app vision into a reality.</p>
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
              
                <div class="col-md-6 img-pad order-md-1">
                    <div class="img ">
                        <img src="{{url('./Frontend/assets/img/native-latest.webp')}}" alt="Affordable Website Development Company in NJ" height="250px" class="imgzoom">
                    </div>
                </div>
                  <div class="col-md-6 hcenter order-md-0">
                    <div class="title mt-1">
                        <h6> React - Native</h6>
                    </div>
                    <!-- <h2> Design</h2> -->
                    <p>At Stalwart IT Solution, we take pride in our team of professional React Native application developers and designers who possess the right knowledge, skills, and experience in building cutting-edge mobile applications. We specialize in creating robust and scalable React Native applications that adhere to the highest standards and guidelines set by app stores.
                    </p>
                    <p>Our dedicated team of React Native developers is committed to delivering exceptional quality, efficiency, and sophistication to every application we work on. We understand the importance of providing your target audience with a seamless mobile experience on both Android and iOS platforms.
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- ======= Contact Section ======= --}}
    @include('Frontend.contact_section')
    {{-- EndContactSection --}}

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