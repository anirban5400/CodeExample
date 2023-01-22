@extends('front_end.layouts.app_front_end')

@section('content')

<style>
    .ball {
        position: absolute;
        border-radius: 100%;
        opacity: 0.3;
    }
</style>

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            {{-- <img class="w-100" src="{{asset('frontend/img/carousel-1.jpg')}}" alt="Image" /> --}}
            <p class="w-100" style="height: 650px;background: linear-gradient(149deg, #ffffff 49.07%, #015FC9 100.00%);"></p>
            <div class="carousel-caption">
                <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h1 class="display-3 text-dark mb-4 animated slideInDown">Here are some code samples to demonstrate</h1>
                        <p class="fs-5 text-body mb-5">Research, Find, Collect and Distribute the latest code with Problem-solving</p>
                        <a href="" class="btn btn-primary py-3 px-5" >More Details</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
        {{-- <img class="w-100" src="{{asset('frontend/img/carousel-2.jpg')}}" alt="Image" /> --}}
        <p class="w-100" style="height: 650px;background: linear-gradient(149deg, #ffffff 49.07%, #f30957 100.00%);"></p>
        
        <div class="carousel-caption">
            <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h1 class="display-3 text-dark mb-4 animated slideInDown">The Best Code Example Here</h1>
                    <p class="fs-5 text-body mb-5">Here is the latest code example for Laravel, PHP, JavaScript, Jquery, HTML, and CSS.</p>
                    <a href="" class="btn btn-primary py-3 px-5">More Details</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#header-carousel"
        data-bs-slide="prev"
    >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#header-carousel"
        data-bs-slide="next"
    >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</div>
<!-- Carousel End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
    <div class="row g-5" >
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="position-relative overflow-hidden rounded ps-3 pt-2 h-100" style="min-height: 400px">
            <img
            class="position-absolute w-100 h-100"
            src="{{asset('frontend/img/about.png')}}"
            alt=""
            style="object-fit: cover"
            />
            <div
            class="position-absolute top-0 start-0 bg-white rounded pe-3 pb-3"
            style="width: 200px; height: 200px"
            >
            <div
                class="d-flex flex-column justify-content-center text-center bg-primary rounded h-100 p-3"
            >
                <h1 class="text-white mb-0">4</h1>
                <h2 class="text-white">Years</h2>
                <h5 class="text-white mb-0">Experience</h5>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="h-100">
            <h1 class="display-6 mb-5">We're Here To Assist You With the latest codes and solutions</h1>
            <p class="fs-5 text-primary mb-4">We're Here To Assist You With the latest codes and solutions</p>
            <div class="row g-4 mb-4">
            <div class="col-sm-6">
                <div class="d-flex align-items-center">
                <img
                    class="flex-shrink-0 me-3"
                    src="{{asset('frontend/img/icon/icon-04-primary.png')}}"
                    alt=""
                />
                <h5 class="mb-0">Easy Code</h5>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="d-flex align-items-center">
                <img
                    class="flex-shrink-0 me-3"
                    src="{{asset('frontend/img/icon/icon-03-primary.png')}}"
                    alt=""
                />
                <h5 class="mb-0">Save Time and Money</h5>
                </div>
            </div>
            </div>
            <p class="mb-4">
                We are adopting the latest Code with its problems and solutions. Summarize our code to be understandable for beginners.Reducing their valuable time and increasing productivity is our goal.
            </p>
            <div class="border-top mt-4 pt-4">
            <div class="d-flex align-items-center">
                <img
                class="flex-shrink-0 rounded-circle me-3"
                src="{{asset('frontend/img/profile.png')}}"
                alt=""
                />
                <h5 class="mb-0">Call Us: +012 345 6789</h5>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<!-- About End -->

<!-- Facts Start -->
<div class="container-fluid overflow-hidden my-5 px-lg-0">
    <div class="container facts px-lg-0">
    <div class="row g-0 mx-lg-0">
        <div class="col-lg-6 facts-text wow fadeIn" data-wow-delay="0.1s">
        <div class="h-100 px-4 ps-lg-0">
            <h1 class="text-white mb-4">For Individuals And Organisations</h1>
            <p class="text-light mb-5">We are adopting the latest Code with its problems and solutions. Summarize our code to be understandable for beginners.Reducing their valuable time and increasing productivity is our goal.</p>
            <a href="" class="align-self-start btn btn-secondary py-3 px-5" >More Details</a>
        </div>
        </div>
        <div class="col-lg-6 facts-counter wow fadeIn" data-wow-delay="0.5s">
        <div class="h-100 px-4 pe-lg-0">
            <div class="row g-5">
            <div class="col-sm-6">
                <h1 class="display-5" data-toggle="counter-up">100</h1>
                <p class="fs-5 text-primary">Happy Clients</p>
            </div>
            <div class="col-sm-6">
                <h1 class="display-5" data-toggle="counter-up">12</h1>
                <p class="fs-5 text-primary">Projects Succeed</p>
            </div>
            <div class="col-sm-6">
                <h1 class="display-5" data-toggle="counter-up">5</h1>
                <p class="fs-5 text-primary">Awards Achieved</p>
            </div>
            <div class="col-sm-6">
                <h1 class="display-5" data-toggle="counter-up">20</h1>
                <p class="fs-5 text-primary">Team Members</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<!-- Facts End -->

<!-- Features Start -->
<div class="container-xxl py-5">
    <div class="container">
    <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="display-6 mb-5">Few Reasons Why People Choosing Us!</h1>
        <p class="mb-4">We are adopting the latest Code with its problems and solutions. Summarize our code to be understandable for beginners.Reducing their valuable time and increasing productivity is our goal.</p>
        <div class="row g-3">
            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
            <div class="bg-light rounded h-100 p-3">
                <div
                class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3"
                >
                <img
                    class="align-self-center mb-3"
                    src="{{asset('frontend/img/icon/icon-06-primary.png')}}"
                    alt=""
                />
                <h5 class="mb-0">Easy Process</h5>
                </div>
            </div>
            </div>
            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
            <div class="bg-light rounded h-100 p-3">
                <div
                class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3"
                >
                <img
                    class="align-self-center mb-3"
                    src="{{asset('frontend/img/icon/icon-03-primary.png')}}"
                    alt=""
                />
                <h5 class="mb-0">Fast Delivery</h5>
                </div>
            </div>
            </div>
            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
            <div class="bg-light rounded h-100 p-3">
                <div
                class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3"
                >
                <img
                    class="align-self-center mb-3"
                    src="{{asset('frontend/img/icon/icon-04-primary.png')}}"
                    alt=""
                />
                <h5 class="mb-0">Policy Controlling</h5>
                </div>
            </div>
            </div>
            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
            <div class="bg-light rounded h-100 p-3">
                <div
                class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3"
                >
                <img
                    class="align-self-center mb-3"
                    src="{{asset('frontend/img/icon/icon-07-primary.png')}}"
                    alt=""
                />
                <h5 class="mb-0">Money Saving</h5>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
        <div
            class="position-relative rounded overflow-hidden h-100"
            style="min-height: 400px"
        >
            <img
            class="position-absolute w-100 h-100"
            src="{{asset('frontend/img/feature.jpg')}}"
            alt=""
            style="object-fit: cover"
            />
        </div>
        </div>
    </div>
    </div>
</div>
<!-- Features End -->

<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
    <div class="text-center mx-auto" style="max-width: 500px">
        <h1 class="display-6 mb-5">
        We Provide Services
        </h1>
    </div>
    <div class="row g-4 justify-content-center">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="service-item rounded h-100 p-5">
            <div class="d-flex align-items-center ms-n5 mb-4">
            <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                <span class="img-fluid" style="font-size: 25px;color: white;-webkit-transform: rotate(-45deg);">CODE</span>
            </div>
            <h4 class="mb-0">Manage Code</h4>
            </div>
            <p class="mb-4">
            Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
            sit clita duo justo erat amet
            </p>
            <a class="btn btn-light px-3" href="">Read More</a>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="service-item rounded h-100 p-5">
            <div class="d-flex align-items-center ms-n5 mb-4">
                <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                    <span class="img-fluid" style="font-size: 25px;color: white;-webkit-transform: rotate(-45deg);">SERVER</span>
                </div>
            <h4 class="mb-0">Manage Server</h4>
            </div>
            <p class="mb-4">
            Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
            sit clita duo justo erat amet
            </p>
            <a class="btn btn-light px-3" href="">Read More</a>
        </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="service-item rounded h-100 p-5">
            <div class="d-flex align-items-center ms-n5 mb-4">
                <div class="service-icon flex-shrink-0 bg-primary rounded-end me-4">
                    <span class="img-fluid" style="font-size: 25px;color: white;-webkit-transform: rotate(-45deg);">CLIENT</span>
                </div>
            <h4 class="mb-0">Manage Client</h4>
            </div>
            <p class="mb-4">
            Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
            sit clita duo justo erat amet
            </p>
            <a class="btn btn-light px-3" href="">Read More</a>
        </div>
        </div>
        {{-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item rounded h-100 p-5">
                <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                    class="service-icon flex-shrink-0 bg-primary rounded-end me-4"
                >
                    <img
                    class="img-fluid"
                    src="{{asset('frontend/img/icon/icon-08-light.png')}}"
                    alt=""
                    />
                </div>
                <h4 class="mb-0">Vehicle Insurance</h4>
                </div>
                <p class="mb-4">
                Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
                sit clita duo justo erat amet
                </p>
                <a class="btn btn-light px-3" href="">Read More</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item rounded h-100 p-5">
                <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                    class="service-icon flex-shrink-0 bg-primary rounded-end me-4"
                >
                    <img
                    class="img-fluid"
                    src="{{asset('frontend/img/icon/icon-07-light.png')}}"
                    alt=""
                    />
                </div>
                <h4 class="mb-0">Business Insurance</h4>
                </div>
                <p class="mb-4">
                Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
                sit clita duo justo erat amet
                </p>
                <a class="btn btn-light px-3" href="">Read More</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded h-100 p-5">
                <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                    class="service-icon flex-shrink-0 bg-primary rounded-end me-4"
                >
                    <img
                    class="img-fluid"
                    src="{{asset('frontend/img/icon/icon-06-light.png')}}"
                    alt=""
                    />
                </div>
                <h4 class="mb-0">Property Insurance</h4>
                </div>
                <p class="mb-4">
                Aliqu diam amet eos erat ipsum et lorem et sit, sed stet lorem
                sit clita duo justo erat amet
                </p>
                <a class="btn btn-light px-3" href="">Read More</a>
            </div>
        </div> --}}
    </div>
    </div>
</div>
<!-- Service End -->

<!-- Appointment Start -->
<div class="container-fluid appointment my-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
    <div class="row g-5">
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
        <h1 class="display-6 text-white mb-5">We're Service Company</h1>
        <p class="text-white mb-5">
            We are adopting the latest Code with its problems and solutions. Summarize our code to be understandable for beginners.Reducing their valuable time and increasing productivity is our goal.
        </p>
        <div class="bg-white rounded p-3">
            <div class="d-flex align-items-center bg-primary rounded p-3">
            <img
                class="flex-shrink-0 rounded-circle me-3"
                src="{{asset('frontend/img/profile.png')}}"
                alt=""
            />
            <h5 class="text-white mb-0">Call Us: +012 345 6789</h5>
            </div>
        </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <div class="bg-white rounded p-5">
            <form>
            <div class="row g-3">
                <div class="col-sm-6">
                <div class="form-floating">
                    <input
                    type="text"
                    class="form-control"
                    id="gname"
                    placeholder="Gurdian Name"
                    />
                    <label for="gname">Your Name</label>
                </div>
                </div>
                <div class="col-sm-6">
                <div class="form-floating">
                    <input
                    type="email"
                    class="form-control"
                    id="gmail"
                    placeholder="Gurdian Email"
                    />
                    <label for="gmail">Your Email</label>
                </div>
                </div>
                <div class="col-sm-6">
                <div class="form-floating">
                    <input
                    type="text"
                    class="form-control"
                    id="cname"
                    placeholder="Child Name"
                    />
                    <label for="cname">Your Mobile</label>
                </div>
                </div>
                <div class="col-sm-6">
                <div class="form-floating">
                    <input
                    type="text"
                    class="form-control"
                    id="cage"
                    placeholder="Child Age"
                    />
                    <label for="cage">Service Type</label>
                </div>
                </div>
                <div class="col-12">
                <div class="form-floating">
                    <textarea
                    class="form-control"
                    placeholder="Leave a message here"
                    id="message"
                    style="height: 80px"
                    ></textarea>
                    <label for="message">Message</label>
                </div>
                </div>
                <div class="col-12">
                <button class="btn btn-primary py-3 px-5" type="submit">
                    Get Appointment
                </button>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>
    </div>
</div>
<!-- Appointment End -->

{{-- <!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
    <div class="text-center mx-auto" style="max-width: 500px">
        <h1 class="display-6 mb-5">Meet Our Professional Team Members</h1>
    </div>
    <div class="row g-4">
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="team-item rounded">
            <img class="img-fluid" src="{{asset('frontend/img/team-1.jpg')}}" alt="" />
            <div class="text-center p-4">
            <h5>Full Name</h5>
            <span>Designation</span>
            </div>
            <div class="team-text text-center bg-white p-4">
            <h5>Full Name</h5>
            <p>Designation</p>
            <div class="d-flex justify-content-center">
                <a class="btn btn-square btn-light m-1" href=""
                ><i class="fab fa-twitter"></i
                ></a>
                <a class="btn btn-square btn-light m-1" href=""
                ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-square btn-light m-1" href=""
                ><i class="fab fa-youtube"></i
                ></a>
                <a class="btn btn-square btn-light m-1" href=""
                ><i class="fab fa-linkedin-in"></i
                ></a>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="team-item rounded">
            <img class="img-fluid" src="{{asset('frontend/img/team-2.jpg')}}" alt="" />
            <div class="text-center p-4">
            <h5>Full Name</h5>
            <span>Designation</span>
            </div>
            <div class="team-text text-center bg-white p-4">
            <h5>Full Name</h5>
            <p>Designation</p>
            <div class="d-flex justify-content-center">
                <a class="btn btn-square btn-light m-1" href=""
                ><i class="fab fa-twitter"></i
                ></a>
                <a class="btn btn-square btn-light m-1" href=""
                ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-square btn-light m-1" href=""
                ><i class="fab fa-youtube"></i
                ></a>
                <a class="btn btn-square btn-light m-1" href=""
                ><i class="fab fa-linkedin-in"></i
                ></a>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <div class="team-item rounded">
            <img class="img-fluid" src="{{asset('frontend/img/team-3.jpg')}}" alt="" />
            <div class="text-center p-4">
            <h5>Full Name</h5>
            <span>Designation</span>
            </div>
            <div class="team-text text-center bg-white p-4">
            <h5>Full Name</h5>
            <p>Designation</p>
            <div class="d-flex justify-content-center">
                <a class="btn btn-square btn-light m-1" href=""
                ><i class="fab fa-twitter"></i
                ></a>
                <a class="btn btn-square btn-light m-1" href=""
                ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-square btn-light m-1" href=""
                ><i class="fab fa-youtube"></i
                ></a>
                <a class="btn btn-square btn-light m-1" href=""
                ><i class="fab fa-linkedin-in"></i
                ></a>
            </div>
            </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
        <div class="team-item rounded">
            <img class="img-fluid" src="{{asset('frontend/img/team-4.jpg')}}" alt="" />
            <div class="text-center p-4">
            <h5>Full Name</h5>
            <span>Designation</span>
            </div>
            <div class="team-text text-center bg-white p-4">
            <h5>Full Name</h5>
            <p>Designation</p>
            <div class="d-flex justify-content-center">
                <a class="btn btn-square btn-light m-1" href=""
                ><i class="fab fa-twitter"></i
                ></a>
                <a class="btn btn-square btn-light m-1" href=""
                ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-square btn-light m-1" href=""
                ><i class="fab fa-youtube"></i
                ></a>
                <a class="btn btn-square btn-light m-1" href=""
                ><i class="fab fa-linkedin-in"></i
                ></a>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<!-- Team End -->

<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
    <div class="text-center mx-auto" style="max-width: 500px">
        <h1 class="display-6 mb-5">What They Say About Our Insurance</h1>
    </div>
    <div class="row g-5">
        <div class="col-lg-3 d-none d-lg-block">
        <div class="testimonial-left h-100">
            <img
            class="img-fluid animated pulse infinite"
            src="{{asset('frontend/img/testimonial-1.jpg')}}"
            alt=""
            />
            <img
            class="img-fluid animated pulse infinite"
            src="{{asset('frontend/img/testimonial-2.jpg')}}"
            alt=""
            />
            <img
            class="img-fluid animated pulse infinite"
            src="{{asset('frontend/img/testimonial-3.jpg')}}"
            alt=""
            />
        </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item text-center">
            <img
                class="img-fluid rounded mx-auto mb-4"
                src="{{asset('frontend/img/testimonial-1.jpg')}}"
                alt=""
            />
            <p class="fs-5">
                Dolores sed duo clita tempor justo dolor et stet lorem kasd
                labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                et labore et tempor diam tempor erat.
            </p>
            <h5>Client Name</h5>
            <span>Profession</span>
            </div>
            <div class="testimonial-item text-center">
            <img
                class="img-fluid rounded mx-auto mb-4"
                src="{{asset('frontend/img/testimonial-2.jpg')}}"
                alt=""
            />
            <p class="fs-5">
                Dolores sed duo clita tempor justo dolor et stet lorem kasd
                labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                et labore et tempor diam tempor erat.
            </p>
            <h5>Client Name</h5>
            <span>Profession</span>
            </div>
            <div class="testimonial-item text-center">
            <img
                class="img-fluid rounded mx-auto mb-4"
                src="{{asset('frontend/img/testimonial-3.jpg')}}"
                alt=""
            />
            <p class="fs-5">
                Dolores sed duo clita tempor justo dolor et stet lorem kasd
                labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                et labore et tempor diam tempor erat.
            </p>
            <h5>Client Name</h5>
            <span>Profession</span>
            </div>
        </div>
        </div>
        <div class="col-lg-3 d-none d-lg-block">
        <div class="testimonial-right h-100">
            <img
            class="img-fluid animated pulse infinite"
            src="{{asset('frontend/img/testimonial-1.jpg')}}"
            alt=""
            />
            <img
            class="img-fluid animated pulse infinite"
            src="{{asset('frontend/img/testimonial-2.jpg')}}"
            alt=""
            />
            <img
            class="img-fluid animated pulse infinite"
            src="{{asset('frontend/img/testimonial-3.jpg')}}"
            alt=""
            />
        </div>
        </div>
    </div>
    </div>
</div>
<!-- Testimonial End --> --}}
<script>
    // Some random colors
    const colors = ["#3CC157", "#2AA7FF", "#1B1B1B", "#FCBC0F", "#F85F36"];

    const numBalls = 20;
    const balls = [];

    for (let i = 0; i < numBalls; i++) {
    let ball = document.createElement("div");
    ball.classList.add("ball");
    ball.style.background = colors[Math.floor(Math.random() * colors.length)];
    ball.style.left = `${Math.floor(Math.random() * 100)}vw`;
    ball.style.top = `${Math.floor(Math.random() * 100)}vh`;
    ball.style.transform = `scale(${Math.random()})`;
    ball.style.width = `${Math.random()}em`;
    ball.style.height = ball.style.width;
    
    balls.push(ball);
    document.getElementById('header-carousel').append(ball);
    }

    // Keyframes
    balls.forEach((el, i, ra) => {
    let to = {
        x: Math.random() * (i % 2 === 0 ? -11 : 11),
        y: Math.random() * 12
    };

    let anim = el.animate(
        [
        { transform: "translate(0, 0)" },
        { transform: `translate(${to.x}rem, ${to.y}rem)` }
        ],
        {
        duration: (Math.random() + 1) * 2000, // random duration
        direction: "alternate",
        fill: "both",
        iterations: Infinity,
        easing: "ease-in-out"
        }
    );
    });

</script>

@endsection