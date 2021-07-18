@extends('layouts.app')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <h1>Medical Volunteer System</h1>
        <h2>We are team of talented </h2>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
    </section><!-- End Hero -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container">

          <div class="row">
            <div class="col-lg-4 d-flex align-items-stretch">
              <div class="content">
                <h3>Why Choose MVS?</h3>
                <p>
                    We offer you appointments with the best doctors and laboratories to examine patients at the lowest prices or for free
                </p>
                <div class="text-center">
                  <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-8 d-flex align-items-stretch">
              <div class="icon-boxes d-flex flex-column justify-content-center">
                <div class="row">
                  <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class="bx bx-receipt"></i>
                      <h4>Health A to Z</h4>
                      <p>Your complete guide to conditions, symptoms and treatments, including what to do and when to get help.                    </p>
                    </div>
                  </div>
                  <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class="bx bx-cube-alt"></i>
                      <h4>Medicines A to Z</h4>
                      <p>Find out how your medicine works, how and when to take it, possible side effects and answers to your common questions.                    </p>
                    </div>
                  </div>
                  <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class="bx bx-images"></i>
                      <h4>Coronavirus (COVID-19)</h4>
                      <p>Get the latest advice about COVID-19, including information about symptoms, self-isolation and testing.</p>
                    </div>
                  </div>
                </div>
              </div><!-- End .content-->
            </div>
          </div>

        </div>
    </section><!-- End Why Us Section -->

      <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container-fluid">

          <div class="row">
            <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch">
              <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
            </div>

            <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
              <h3>What we do</h3>
              <p>At MVS, our mission is to make healthcare easy and accessible to everyone. We want to empower you to take charge of your health with clinically accurate and up to date health resources</p>

              <div class="icon-box">
                <div class="icon"><i class="bx bx-fingerprint"></i></div>
                <h4 class="title"><a href="">1</a></h4>
                <p class="description">Book an in-person or online consultation (coming soon)</p>
              </div>

              <div class="icon-box">
                <div class="icon"><i class="bx bx-gift"></i></div>
                <h4 class="title"><a href="">2</a></h4>
                <p class="description">Unlimited & easy access to health information</p>
              </div>

              <div class="icon-box">
                <div class="icon"><i class="bx bx-atom"></i></div>
                <h4 class="title"><a href="">3</a></h4>
                <p class="description">Connect with doctors from all over the world to get a second opinion on your medical condition (coming soon)</p>
              </div>

            </div>
          </div>

        </div>
    </section><!-- End About Section -->

      <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">

          <div class="row">

            <div class="col-lg-3 col-md-6">
              <div class="count-box">
                <i class="icofont-doctor-alt"></i>
                <span data-toggle="counter-up">{{ $doctors->count() }}</span>
                <p>Doctors</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
              <div class="count-box">
                <i class="icofont-patient-bed"></i>
                <span data-toggle="counter-up">{{ $appointments->count() }}</span>
                <p>Appointments</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <i class="icofont-laboratory"></i>
                <span data-toggle="counter-up">{{ $medicals->count() }}</span>
                <p>Medical Labs</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
              <div class="count-box">
                <i class="icofont-user"></i>
                <span data-toggle="counter-up">{{ $patients->count() }}</span>
                <p>Patients</p>
              </div>
            </div>

          </div>

        </div>
    </section><!-- End Counts Section -->

      <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

          <div class="section-title">
            <h2>Services</h2>
            <p>WHAT MAKES US DIFFERENT?</p>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="icon-box">
                <div class="icon"><i class="icofont-heart-beat"></i></div>
                <h4><a href="">Comprehensive medical directory</a></h4>
                <p>with detailed, verified information about more than a lakh doctor partners across the country</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
              <div class="icon-box">
                <div class="icon"><i class="icofont-drug"></i></div>
                <h4><a href="">Online appointment booking</a></h4>
                <p>at over 9,000 leading hospitals and clinics with doctors who use MVS</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
              <div class="icon-box">
                <div class="icon"><i class="icofont-dna-alt-2"></i></div>
                <h4><a href="">Diagnostic Tests through MVS Associate Labs</a></h4>
                <p> to get samples collected from the comfort and safety of one’s home</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
              <div class="icon-box">
                <div class="icon"><i class="icofont-heartbeat"></i></div>
                <h4><a href="">Medicine delivery </a></h4>
                <p>by a network of verified pharmacies across the country</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
              <div class="icon-box">
                <div class="icon"><i class="icofont-disabled"></i></div>
                <h4><a href="">Online consultation </a></h4>
                <p>with trusted doctors across 20+ specialities</p>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
              <div class="icon-box">
                <div class="icon"><i class="icofont-autism"></i></div>
                <h4><a href="">EASY & UNLIMITED ACCESS</a></h4>
                <p>Get unlimited access to medical information and resources backed by the NHS to help you feel better and live longer</p>
              </div>
            </div>

          </div>

        </div>
    </section><!-- End Services Section -->

      <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
        <div class="container">

          <div class="section-title">
            <h2>Departments</h2>
            <p></p>
          </div>

          <div class="row">
            <div class="col-lg-3">
              <ul class="nav nav-tabs flex-column">
                <li class="nav-item">
                  <a class="nav-link active show" data-toggle="tab" href="#tab-1">Cardiology</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#tab-2">Neurology</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#tab-3">Hepatology</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#tab-4">Pediatrics</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#tab-5">Eye Care</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
              <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Cardiology</h3>
                      <p class="font-italic">There are a range of disorders of the cardiovascular system that are treated and studied under the field of cardiology</p>
                      <p>Cardiology is a branch of medicine that deals with the disorders of the heart as well as some parts of the circulatory system. The field includes medical diagnosis and treatment of congenital heart defects, coronary artery disease, heart failure, valvular heart disease and electrophysiology</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="{{ asset('img/departments-1.jpg') }}" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-2">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Neurology</h3>
                      <p class="font-italic">Many neurologists also have additional training or interest in one area of neurology, such as stroke, epilepsy, neuromuscular, sleep medicine, pain management, or movement disorders.                    </p>
                      <p>Neurology is a branch of medicine dealing with disorders of the nervous system. Neurology deals with the diagnosis and treatment of all categories of conditions and disease involving the central and peripheral nervous systems, including their coverings, blood vessels, and all effector tissue, such as muscle.</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="{{ asset('img/departments-2.jpg') }}" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-3">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Hepatology</h3>
                      <p class="font-italic">Hepatology is an area of medicine that focuses on diseases of the liver as well as related conditions.</p>
                      <p>Hepatology is the branch of medicine that incorporates the study of liver, gallbladder, biliary tree, and pancreas as well as management of their disorders</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="{{ asset('img/departments-3.jpg') }}" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-4">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Pediatrics</h3>
                      <p class="font-italic">A medical doctor who specializes in this area is known as a pediatrician, or paediatrician. </p>
                      <p>Pediatrics is the branch of medicine that involves the medical care of infants, children, and adolescents. The American Academy of Pediatrics recommends people seek pediatric care through the age of 21. In the United Kingdom, paediatrics covers patients until age 18</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="{{ asset('img/departments-4.jpg') }}" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-5">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Eye Care</h3>
                      <p class="font-italic">Getting comprehensive dilated eye exams is especially important because some eye diseases may not have warning signs. The exams are the only way to detect these diseases in their early stages, when they are easier to treat.                    </p>
                      <p>Your eyes are an important part of your health. Most people rely on their eyes to see and make sense of the world around them. But some eye diseases can lead to vision loss, so it is important to identify and treat eye diseases as early as possible. You should get your eyes checked as often as your health care provider recommends it, or if you have any new vision problems. And just as it is important to keep your body healthy, you also need to keep your eyes healthy.</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="{{ asset('img/departments-5.jpg') }}" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
    </section><!-- End Departments Section -->

      <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
        <div class="container">

          <div class="section-title">
            <h2>Doctors</h2>
            <p></p>
          </div>

          <div class="row">

            <div class="col-lg-6">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="{{ asset('img/doctors/doctors-1.jpg') }}" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Walter White</h4>
                  <span>Chief Medical Officer</span>
                  <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="{{ asset('img/doctors/doctors-2.jpg') }}" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Sarah Jhonson</h4>
                  <span>Anesthesiologist</span>
                  <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="{{ asset('img/doctors/doctors-3.jpg') }}" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>William Anderson</h4>
                  <span>Cardiology</span>
                  <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="{{ asset('img/doctors/doctors-4.jpg') }}" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Amanda Jepson</h4>
                  <span>Neurosurgeon</span>
                  <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
    </section><!-- End Doctors Section -->

      <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container">

          <div class="section-title">
            <h2>Frequently Asked Questions</h2>
            <p></p>
          </div>

          <div class="faq-list">
            <ul>
              <li data-aos="fade-up">
                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                  <p>
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                  <p>
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                  <p>
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                  <p>
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                  </p>
                </div>
              </li>

            </ul>
          </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->

      <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
        <div class="container">

          <div class="section-title">
            <h2>Gallery</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
        </div>

        <div class="container-fluid">
          <div class="row no-gutters">

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">
                  <img src="img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-item">
                  <img src="img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-item">
                  <img src="img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-item">
                  <img src="img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-item">
                  <img src="img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-item">
                  <img src="img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-item">
                  <img src="img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-item">
                  <img src="img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

          </div>

        </div>
    </section><!-- End Gallery Section -->

      <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

          <div class="section-title">
            <h2>Contact</h2>
            <p></p>
          </div>
        </div>


        <div class="container">
          <div class="row mt-5">

            <div class="col-lg-12">
              <div class="info">
                <div class="address">
                  <i class="icofont-google-map"></i>
                  <h4>Location:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>

                <div class="email">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>

                <div class="phone">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55s</p>
                </div>

              </div>

            </div>
          </div>

        </div>
    </section><!-- End Contact Section -->

@endsection
