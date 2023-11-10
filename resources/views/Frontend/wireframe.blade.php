@extends('Frontend.layouts.main')

@section('title','Wireframe | ')

@section("main-container")

<section class="main-about-us">
    <div class="container">
        <div class="row align-items-center" id="about-us">
            <div class="sub-title-box left">
                        <p class="sub-title">Wireframe UI/ UX</p>
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
                        <p>Stalwart It Solution is one of the leading website solution providers specializing in website development in Wembley, London. Stalwart It Solution is Proud of having UI/ UX experts with Skills like:</p>

                        <div class="emp-skils emp-skil">
                            <div class="emp-skils-left">
                                <p><img src="{{asset('Frontend/assets/img/figma.png')}}"
                                    alt="figma png" width="80px">Figma</p>
                                    
                            </div>
                            <div class="emp-skils-right">
                                <p><img src="{{asset('Frontend/assets/img/xd.png')}}"
                                        alt="adobe-xd png" height="30px">Adobe XD</p>
                                        

                            </div>
                        </div>
                        <p>Wireframing in UI/UX Design is one of the most crucial steps which involves visualizing the skeleton of digital applications. A wireframe is a layout of a product that demonstrates what interface elements will exist on key pages. It is a critical part of the interaction design process.</p>
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
                <h2 align="center">Our Wireframe UI/ UX Process</h2>
                <p>The Wireframe UI/UX Process is a structured approach to designing digital products. It begins with project initiation and thorough research, followed by the creation of wireframes that outline layout and functionality. Feedback and iteration are essential in refining the wireframes, and interactive prototypes are developed to test user flow and interactions. User testing validates the design's usability. Once finalized, the wireframes and prototypes are handed off to the development team for implementation. Quality assurance ensures alignment with the initial design, and the project is launched. Post-launch evaluation and ongoing feedback collection help in making continuous improvements to enhance the user experience. This process ensures that the end product is user-friendly, aligns with project goals, and meets the needs of the target audience.</p>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 img-pad">
                    <img class="imgzoom" src="{{asset('Frontend/assets/img/initial.jpg')}}"  alt="Website Development Company in London" height="250px;">
                </div>
                <div class="col-md-6 hcenter">
                    <div class="title mt-1">
                        <h6> Initial Phase</h6>
                    </div>
                    <div class="title1 ">
                        <!-- <h2> Submit your idea </h2> -->
                    </div>
                    <div class="para">
                        <p>Understand project objectives and conduct research to gain insights into industry trends, competitors, and user expectations.</p>
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
                        <img class="imgzoom" src="{{asset('Frontend/assets/img/uiux.webp')}}" alt="Affordable Website Development Company in NJ" height="300px">
                    </div>
                </div>
                 <div class="col-md-6 hcenter order-md-0">
                    <div class="title mt-1">
                        <h6> Wireframe Development</h6>
                    </div>
                    <!-- <h2> Design</h2> -->
                    <p>Create skeletal layouts (wireframes) to visualize layout, content placement, and user interactions. Iterate based on feedback. </p>
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
                    <img class="imgzoom" src="{{asset('Frontend/assets/img/tesing.webp')}} " height="250px">
                </div>
                <div class="col-md-6 hcenter">
                    <div class="title mt-4">
                        <h6> Prototyping and Testing</h6>
                    </div>
                    <div class="title1 ">
                        <!-- <h2> Development </h2> -->
                    </div>
                    <div class="para">
                       Transition to interactive prototypes, conduct user testing, and gather feedback to refine the design and user flow.
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
                        <img class="imgzoom" src="{{asset('Frontend/assets/img/launchui.jpg')}}" height="250px" >
                    </div>
                </div>
                <div class="col-md-6 hcenter order-md-0">
                   <div class="title mt-1">
                        <h6> Development and Launch</h6>
                    </div>
                    <!-- <h2>Revision</h2> -->
                    <p>Collaborate with the development team, ensure quality assurance, and launch the final product. Continuously gather user feedback for post-launch improvements.</p>
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
                        <img src="{{asset('Frontend/assets/img/processimages.jpg')}}" alt="Process Images" height="300px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection