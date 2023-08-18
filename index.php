<?php require_once('head.php'); ?>

<body>
  <div class="page_wrapper">
    <div class="backtotop">
      <a href="#" class="scroll"><i class="far fa-arrow-up"></i></a>
    </div>
    <header class="site_header site_header_2">
      <div class="container">
        <div class="row align-items-center">
          <div class="col col-lg-3 col-5">
            <div class="site_logo">
              <a class="site_link" href="index.html"><img src="assets/images/logo/site_logo.svg" alt="Collab - Online Learning Platform" /><span>Collab</span></a>
            </div>
          </div>
          <div class="col col-lg-6 col-2">
            <nav class="main_menu navbar navbar-expand-lg">
              <div class="main_menu_inner collapse navbar-collapse justify-content-center" id="main_menu_dropdown">
                <ul class="main_menu_list unordered_list_center">
                  <li class="dropdown active">
                    <a class="nav-link" href="#" id="home_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
                    <ul class="dropdown-menu" aria-labelledby="home_submenu">
                      <li><a href="index_1.html">Home V.1</a></li>
                      <li class="active">
                        <a href="index_2.html">Home V.2</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link" href="#" id="service_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Courses</a>
                    <ul class="dropdown-menu" aria-labelledby="service_submenu">
                      <li class="dropdown">
                        <a class="nav-link" href="#" id="courses_layout_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Courses Layout</a>
                        <ul class="dropdown-menu" aria-labelledby="courses_layout_submenu">
                          <li><a href="course.html">Courses Grid</a></li>
                          <li><a href="course_list.html">Courses List</a></li>
                        </ul>
                      </li>
                      <li class="dropdown">
                        <a class="nav-link" href="#" id="courses_details_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Courses Details</a>
                        <ul class="dropdown-menu" aria-labelledby="courses_details_submenu">
                          <li>
                            <a href="course_details.html">Course Details V.1</a>
                          </li>
                          <li>
                            <a href="course_details_2.html">Course Details V.2</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link" href="#" id="pages_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                    <ul class="dropdown-menu" aria-labelledby="pages_submenu">
                      <li><a href="about.html">About</a></li>
                      <li class="dropdown">
                        <a class="nav-link" href="#" id="mentors_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Our Mentors</a>
                        <ul class="dropdown-menu" aria-labelledby="mentors_submenu">
                          <li><a href="mentor.html">Mentors</a></li>
                          <li>
                            <a href="mentor_details.html">Mentors Details</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="faq.html">F.A.Q.</a></li>
                      <li class="dropdown">
                        <a class="nav-link" href="#" id="events_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Our Events</a>
                        <ul class="dropdown-menu" aria-labelledby="events_submenu">
                          <li><a href="event.html">Events</a></li>
                          <li>
                            <a href="event_details.html">Event Details</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="pricing.html">Pricing</a></li>
                      <li><a href="error.html">404 Error</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a class="nav-link" href="#" id="blog_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                    <ul class="dropdown-menu" aria-labelledby="blog_submenu">
                      <li><a href="blog.html">Our Blogs</a></li>
                      <li><a href="blog_details.html">Blog Details</a></li>
                    </ul>
                  </li>
                  <li><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>
              </div>
            </nav>
          </div>
          <div class="col col-lg-3 col-5">
            <ul class="header_btns_group unordered_list_end">
              <li>
                <button class="mobile_menu_btn" type="button" data-bs-toggle="collapse" data-bs-target="#main_menu_dropdown" aria-controls="main_menu_dropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="far fa-bars"></i>
                </button>
              </li>
              <li>
                <a class="btn border_dark" href="login.html"><span><small>Login</small> <small>Login</small></span></a>
              </li>
              <li>
                <a class="btn btn_dark" href="signup.html"><span><small>Sign Up</small> <small>Sign Up</small></span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <main class="page_content">
      <section class="hero_banner style_2 mouse_move" style="background-image: url(assets/images/shape/shape_img_6.svg)">
        <div class="container">
          <div class="row align-items-center">
            <div class="col col-lg-6">
              <h1 class="banner_big_title">
                Learn Programming with Online Course
              </h1>
              <p class="banner_description">
                Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                irure dolor in reprehenderit in voluptate velit esse cillum
                fugiat
              </p>
              <form action="#">
                <div class="form_item">
                  <input type="search" name="search" placeholder="What do you want to learn ?" />
                  <button type="submit" class="btn btn_dark">
                    <span><small>Search</small> <small>Search</small></span>
                  </button>
                </div>
              </form>
              <ul class="tags_list unordered_list">
                <li><a href="#!">JAVA</a></li>
                <li><a href="#!">PYTHON</a></li>
                <li><a href="#!">JavaScript</a></li>
                <li><a href="#!">C++</a></li>
                <li><a href="#!">QA</a></li>
                <li><a href="#!">Ruby</a></li>
                <li><a href="#!">Android</a></li>
                <li><a href="#!">.NET</a></li>
                <li><a href="#!">DevOps</a></li>
                <li><a href="#!">Project Manager</a></li>
              </ul>
            </div>
            <div class="col col-lg-6">
              <div class="banner_image_2">
                <div class="image_wrap_1">
                  <div class="layer" data-depth="0.1">
                    <img src="assets/images/banner/hero_banner_img_2.png" alt="Collab – Online Learning Platform" />
                  </div>
                </div>
                <div class="child_image image_wrap_2">
                  <div class="layer" data-depth="0.3">
                    <img src="assets/images/banner/hero_banner_img_3.jpg" alt="Collab – Online Learning Platform" />
                  </div>
                </div>
                <div class="child_image image_wrap_3">
                  <div class="layer" data-depth="0.2">
                    <img src="assets/images/banner/hero_banner_img_4.jpg" alt="Collab – Online Learning Platform" />
                  </div>
                </div>
                <div class="child_image image_wrap_4">
                  <div class="layer" data-depth="0.4">
                    <img src="assets/images/banner/hero_banner_img_5.jpg" alt="Collab – Online Learning Platform" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="courses_section section_space_lg">
        <div class="container">
          <div class="section_heading">
            <div class="row align-items-center">
              <div class="col col-md-6">
                <h2 class="heading_text mb-0">Our Courses</h2>
              </div>
              <div class="col col-md-6 d-none d-lg-flex justify-content-end">
                <div class="btn_wrap p-0">
                  <a class="btn border_dark" href="course.html"><span><small>Explore Courses</small>
                      <small>Explore Courses</small></span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col col-lg-4">
              <div class="course_card style_2">
                <div class="item_image">
                  <a href="course_details.html" data-cursor-text="View"><img src="assets/images/course/course_image_4.jpg" alt="Collab – Online Learning Platform" /></a>
                </div>
                <div class="item_content">
                  <div class="d-flex align-items-center justify-content-between mb-3">
                    <ul class="item_category_list unordered_list">
                      <li><a href="#!">Programming</a></li>
                    </ul>
                    <div class="item_price">
                      <span class="sale_price">$29.99</span>
                      <del class="remove_price">$39.99</del>
                    </div>
                  </div>
                  <ul class="meta_info_list unordered_list">
                    <li>
                      <i class="fas fa-chart-bar"></i> <span>Beginner</span>
                    </li>
                    <li>
                      <i class="fas fa-clock"></i> <span>120 Hours</span>
                    </li>
                    <li>
                      <i class="fas fa-star"></i>
                      <span>3.5 (3k reviews)</span>
                    </li>
                  </ul>
                  <h3 class="item_title">
                    <a href="course_details.html">Introduction to Computer Science and Programming</a>
                  </h3>
                  <a class="btn_unfill" href="course_details.html"><span class="btn_text">View Course</span>
                    <span class="btn_icon"><i class="fas fa-long-arrow-right"></i>
                      <i class="fas fa-long-arrow-right"></i></span></a>
                </div>
              </div>
            </div>
            <div class="col col-lg-4">
              <div class="course_card style_2">
                <div class="item_image">
                  <a href="course_details.html" data-cursor-text="View"><img src="assets/images/course/course_image_5.jpg" alt="Collab – Online Learning Platform" /></a>
                </div>
                <div class="item_content">
                  <div class="d-flex align-items-center justify-content-between mb-3">
                    <ul class="item_category_list unordered_list">
                      <li><a href="#!">Marketing</a></li>
                    </ul>
                    <div class="item_price">
                      <span class="sale_price">$9.99</span>
                    </div>
                  </div>
                  <ul class="meta_info_list unordered_list">
                    <li>
                      <i class="fas fa-chart-bar"></i> <span>Beginner</span>
                    </li>
                    <li>
                      <i class="fas fa-clock"></i> <span>120 Hours</span>
                    </li>
                    <li>
                      <i class="fas fa-star"></i>
                      <span>3.5 (3k reviews)</span>
                    </li>
                  </ul>
                  <h3 class="item_title">
                    <a href="course_details.html">Marketing Channel Strategy & B2B2C Routes to Market</a>
                  </h3>
                  <a class="btn_unfill" href="course_details.html"><span class="btn_text">View Course</span>
                    <span class="btn_icon"><i class="fas fa-long-arrow-right"></i>
                      <i class="fas fa-long-arrow-right"></i></span></a>
                </div>
              </div>
            </div>
            <div class="col col-lg-4">
              <div class="course_card style_2">
                <div class="item_image">
                  <a href="course_details.html" data-cursor-text="View"><img src="assets/images/course/course_image_6.jpg" alt="Collab – Online Learning Platform" /></a>
                </div>
                <div class="item_content">
                  <div class="d-flex align-items-center justify-content-between mb-3">
                    <ul class="item_category_list unordered_list">
                      <li><a href="#!">Computer Science</a></li>
                    </ul>
                    <div class="item_price">
                      <span class="sale_price">FREE</span>
                    </div>
                  </div>
                  <ul class="meta_info_list unordered_list">
                    <li>
                      <i class="fas fa-chart-bar"></i> <span>Beginner</span>
                    </li>
                    <li>
                      <i class="fas fa-clock"></i> <span>120 Hours</span>
                    </li>
                    <li>
                      <i class="fas fa-star"></i>
                      <span>3.5 (3k reviews)</span>
                    </li>
                  </ul>
                  <h3 class="item_title">
                    <a href="course_details.html">Data Science Foundations: Data Structures and
                      Algorithms</a>
                  </h3>
                  <a class="btn_unfill" href="course_details.html"><span class="btn_text">View Course</span>
                    <span class="btn_icon"><i class="fas fa-long-arrow-right"></i>
                      <i class="fas fa-long-arrow-right"></i></span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="btn_wrap d-block d-lg-none pb-0 text-center">
            <a class="btn border_dark" href="course.html"><span><small>Explore Courses</small>
                <small>Explore Courses</small></span></a>
          </div>
        </div>
      </section>
      <section class="intro_video_section section_space_lg bg_light_2 overflow-hidden decoration_wrap">
        <div class="container position-relative">
          <div class="section_heading text-center">
            <h2 class="heading_text mb-0">Our Сourses are Suitable for…</h2>
          </div>
          <div class="intro_video">
            <div class="video_wrap tilt">
              <img src="assets/images/video/video_poster_1.jpg" alt="Collab – Online Learning Platform" />
              <a class="video_play_btn popup_video" href="https://www.youtube.com/watch?v=7e90gBu4pas"><span class="icon"><i class="fas fa-play"></i></span></a>
            </div>
          </div>
          <div class="row">
            <div class="col col-lg-3 col-md-6 col-sm-6">
              <div class="iconbox_item">
                <div class="title_wrap">
                  <div class="item_icon"><i class="fas fa-signal-1"></i></div>
                  <h3 class="item_title mb-0">
                    <span class="d-block">For Beginners</span> Students
                  </h3>
                </div>
                <p class="mb-0">
                  Adipiscing bibendum est ultricies integer. Magnis dis
                  parturient montes nascetur ridiculus mus mauris
                </p>
              </div>
            </div>
            <div class="col col-lg-3 col-md-6 col-sm-6">
              <div class="iconbox_item">
                <div class="title_wrap">
                  <div class="item_icon"><i class="fas fa-signal-2"></i></div>
                  <h3 class="item_title mb-0">
                    <span class="d-block">Beginners</span> IT Specialists
                  </h3>
                </div>
                <p class="mb-0">
                  Facilisi nullam vehicula ipsum a arcu cursus vitae. Interdum
                  velit laoreet id donec ultrices tincidunt arcu
                </p>
              </div>
            </div>
            <div class="col col-lg-3 col-md-6 col-sm-6">
              <div class="iconbox_item">
                <div class="title_wrap">
                  <div class="item_icon"><i class="fas fa-signal-3"></i></div>
                  <h3 class="item_title mb-0">
                    <span class="d-block">Current</span> IT Specialists
                  </h3>
                </div>
                <p class="mb-0">
                  Lectus magna fringilla urna porttitor rhoncus dolor purus
                  non. Orci dapibus ultrices in iaculis
                </p>
              </div>
            </div>
            <div class="col col-lg-3 col-md-6 col-sm-6">
              <div class="iconbox_item">
                <div class="title_wrap">
                  <div class="item_icon"><i class="fas fa-signal-4"></i></div>
                  <h3 class="item_title mb-0">
                    <span class="d-block">Corporate</span> Customers
                  </h3>
                </div>
                <p class="mb-0">
                  Elementum facilisis leo vel fringilla est ullamcorper eget
                  nulla facilisi. Imperdiet proin fermentum leo vel orc
                </p>
              </div>
            </div>
          </div>
          <div class="deco_item shape_img_1" data-parallax='{"y" : 130, "smoothness": 6}'>
            <img src="assets/images/shape/shape_img_7.png" alt="Collab – Online Learning Platform" />
          </div>
          <div class="deco_item shape_img_2" data-parallax='{"y" : -130, "smoothness": 6}'>
            <img src="assets/images/shape/shape_img_7.png" alt="Collab – Online Learning Platform" />
          </div>
        </div>
        <div class="deco_item shape_img_3" data-parallax='{"y" : -130, "smoothness": 6}'>
          <img src="assets/images/shape/shape_img_7.png" alt="Collab – Online Learning Platform" />
        </div>
      </section>
      <section class="process_section section_space_lg pb-0">
        <div class="container">
          <div class="section_heading text-center">
            <div class="row justify-content-center">
              <div class="col col-lg-9">
                <h2 class="heading_text mb-0">
                  The Collab Team with High Technical Skills Help You Learn a
                  New Profession
                </h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col col-lg-3 col-md-6 col-sm-6">
              <div class="iconbox_item">
                <div class="serial_number">01</div>
                <hr />
                <div class="title_wrap">
                  <h3 class="item_title mb-0">Theoretical Knowledge</h3>
                </div>
                <p class="mb-0">
                  Etiam sit amet nisl purus in mollis nunc sed. Viverra nibh
                  cras pulvinar mattis nunc sed blandit libero volutpat
                </p>
              </div>
            </div>
            <div class="col col-lg-3 col-md-6 col-sm-6">
              <div class="iconbox_item">
                <div class="serial_number">02</div>
                <hr />
                <div class="title_wrap">
                  <h3 class="item_title mb-0">Practical Skills</h3>
                </div>
                <p class="mb-0">
                  Sed blandit libero volutpat sed cras ornare. Ultrices
                  gravida dictum fusce ut placerat orci nulla pellentesque
                </p>
              </div>
            </div>
            <div class="col col-lg-3 col-md-6 col-sm-6">
              <div class="iconbox_item">
                <div class="serial_number">03</div>
                <hr />
                <div class="title_wrap">
                  <h3 class="item_title mb-0">Work with a Mentor</h3>
                </div>
                <p class="mb-0">
                  Tellus id interdum velit laoreet id donec. Id interdum velit
                  laoreet id donec ultrices tincidunt arcu
                </p>
              </div>
            </div>
            <div class="col col-lg-3 col-md-6 col-sm-6">
              <div class="iconbox_item">
                <div class="serial_number">04</div>
                <hr />
                <div class="title_wrap">
                  <h3 class="item_title mb-0">Final Test or Project</h3>
                </div>
                <p class="mb-0">
                  Pellentesque habitant morbi tristique senectus et netus et
                  malesuada fames. Magna fringilla urna porttitor
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="testimonial_section section_space_lg">
        <div class="container">
          <div class="testimonial_carousel">
            <div class="common_carousel_1col" data-cursor-text="Drag" data-slick='{"dots":false}'>
              <div class="carousel_item">
                <div class="testimonial_item_2">
                  <div class="testimonial_image ms-0" style="
                        background-image: url(assets/images/shape/shape_img_6.svg);
                      ">
                    <img src="assets/images/testimonial/testimonial_img_3.png" alt="Collab – Online Learning Platform" />
                  </div>
                  <div class="testimonial_content">
                    <div class="quote_icon">
                      <img src="assets/images/icon/icon_quote.svg" alt="Collab – Online Learning Platform" />
                    </div>
                    <h3 class="testimonial_title">
                      Et netus et malesuada fames ac turpis egestas sed. Nec
                      feugiat nisl pretium fusce id velit ut. Lobortis mattis
                      aliquam faucibus purus in. Ultricies integer quis auctor
                      elit sed. Lobortis scelerisque fermentum dui faucibus in
                      ornare quam. In mollis nunc sed semper
                    </h3>
                    <p>
                      Duis aute irure dolor in reprehenderit in voluptate
                      velit esse cillum dolore eu fugiat nulla pariatur. Et
                      netus et malesuada fames ac turpis egestas
                    </p>
                    <div class="testimonial_admin">
                      <div class="admin_image">
                        <img src="assets/images/meta/testimonial_thumbnail_1.jpg" alt="Collab – Online Learning Platform" />
                      </div>
                      <div class="admin_content">
                        <h5 class="testimonial_name">Ray Cooper</h5>
                        <span class="testimonial_designation">Founder of colab courses, lecturer</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel_item">
                <div class="testimonial_item_2">
                  <div class="testimonial_image ms-0" style="
                        background-image: url(assets/images/shape/shape_img_6.svg);
                      ">
                    <img src="assets/images/testimonial/testimonial_img_3.png" alt="Collab – Online Learning Platform" />
                  </div>
                  <div class="testimonial_content">
                    <div class="quote_icon">
                      <img src="assets/images/icon/icon_quote.svg" alt="Collab – Online Learning Platform" />
                    </div>
                    <h3 class="testimonial_title">
                      Et netus et malesuada fames ac turpis egestas sed. Nec
                      feugiat nisl pretium fusce id velit ut. Lobortis mattis
                      aliquam faucibus purus in. Ultricies integer quis auctor
                      elit sed. Lobortis scelerisque fermentum dui faucibus in
                      ornare quam. In mollis nunc sed semper
                    </h3>
                    <p>
                      Duis aute irure dolor in reprehenderit in voluptate
                      velit esse cillum dolore eu fugiat nulla pariatur. Et
                      netus et malesuada fames ac turpis egestas
                    </p>
                    <div class="testimonial_admin">
                      <div class="admin_image">
                        <img src="assets/images/meta/testimonial_thumbnail_1.jpg" alt="Collab – Online Learning Platform" />
                      </div>
                      <div class="admin_content">
                        <h5 class="testimonial_name">Ray Cooper</h5>
                        <span class="testimonial_designation">Founder of colab courses, lecturer</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel_item">
                <div class="testimonial_item_2">
                  <div class="testimonial_image ms-0" style="
                        background-image: url(assets/images/shape/shape_img_6.svg);
                      ">
                    <img src="assets/images/testimonial/testimonial_img_3.png" alt="Collab – Online Learning Platform" />
                  </div>
                  <div class="testimonial_content">
                    <div class="quote_icon">
                      <img src="assets/images/icon/icon_quote.svg" alt="Collab – Online Learning Platform" />
                    </div>
                    <h3 class="testimonial_title">
                      Et netus et malesuada fames ac turpis egestas sed. Nec
                      feugiat nisl pretium fusce id velit ut. Lobortis mattis
                      aliquam faucibus purus in. Ultricies integer quis auctor
                      elit sed. Lobortis scelerisque fermentum dui faucibus in
                      ornare quam. In mollis nunc sed semper
                    </h3>
                    <p>
                      Duis aute irure dolor in reprehenderit in voluptate
                      velit esse cillum dolore eu fugiat nulla pariatur. Et
                      netus et malesuada fames ac turpis egestas
                    </p>
                    <div class="testimonial_admin">
                      <div class="admin_image">
                        <img src="assets/images/meta/testimonial_thumbnail_1.jpg" alt="Collab – Online Learning Platform" />
                      </div>
                      <div class="admin_content">
                        <h5 class="testimonial_name">Ray Cooper</h5>
                        <span class="testimonial_designation">Founder of colab courses, lecturer</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="calltoaction_section section_space_lg bg_dark decoration_wrap">
        <div class="container">
          <div class="row align-items-center">
            <div class="col col-lg-7">
              <div class="section_heading mb-lg-0">
                <h2 class="heading_text text-white">
                  To Help You Choose the Right Course, You Need to Book a
                  Consultation
                </h2>
                <p class="heading_description mb-0 text-white">
                  Varius morbi enim nunc faucibus. Eget nunc lobortis mattis
                  aliquam faucibus purus in massa. Diam sit amet nisl suscipit
                  adipiscing bibendum est.
                </p>
              </div>
            </div>
            <div class="col col-lg-5">
              <div class="calltoaction_form">
                <form action="#">
                  <h3 class="form_title">Get a Consultation</h3>
                  <div class="form_item">
                    <label for="input_name" class="input_title text-uppercase">Name</label>
                    <input id="input_name" type="text" name="name" placeholder="Input Name" />
                  </div>
                  <div class="form_item">
                    <label for="input_email" class="input_title text-uppercase">Email</label>
                    <input id="input_email" type="email" name="email" placeholder="Input Email" />
                  </div>
                  <div class="form_item">
                    <label for="input_question" class="input_title text-uppercase">Message</label>
                    <textarea id="input_question" name="Message" placeholder="Input Your Question"></textarea>
                  </div>
                  <button type="submit" class="btn btn_dark w-100">
                    <span><small>Get a Consultation</small>
                      <small>Get a Consultation</small></span>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="deco_item shape_img_1" data-parallax='{"x" : 130, "smoothness": 6}'>
          <img src="assets/images/shape/shape_img_5.png" alt="Collab – Online Learning Platform" />
        </div>
        <div class="deco_item shape_img_2" data-parallax='{"x" : -130, "smoothness": 6}'>
          <img src="assets/images/shape/shape_img_4.png" alt="Collab – Online Learning Platform" />
        </div>
      </section>
      <section class="brands_section section_space_lg pb-0">
        <div class="container">
          <div class="section_heading text-center">
            <h2 class="heading_text mb-0">Where Our Graduates Work</h2>
          </div>
          <ul class="brands_logo_list unordered_list">
            <li>
              <a href="#!"><img src="assets/images/brands/logo_microsoft.png" alt="Microsoft" /></a>
            </li>
            <li>
              <a href="#!"><img src="assets/images/brands/logo_alphabet.png" alt="Alphabet" /></a>
            </li>
            <li>
              <a href="#!"><img src="assets/images/brands/logo_intel.png" alt="Intel" /></a>
            </li>
            <li>
              <a href="#!"><img src="assets/images/brands/logo_cisco.png" alt="Cisco" /></a>
            </li>
            <li>
              <a href="#!"><img src="assets/images/brands/logo_verizon_communications.png" alt="Verizon Communications" /></a>
            </li>
            <li>
              <a href="#!"><img src="assets/images/brands/logo_infopulse.png" alt="Infopulse.png" /></a>
            </li>
            <li>
              <a href="#!"><img src="assets/images/brands/logo_amazon.png" alt="Amazon" /></a>
            </li>
            <li>
              <a href="#!"><img src="assets/images/brands/logo_wix_com_website.png" alt="Wix" /></a>
            </li>
          </ul>
        </div>
      </section>
      <section class="blog_section section_space_lg">
        <div class="container">
          <div class="section_heading">
            <div class="row align-items-center">
              <div class="col col-lg-5">
                <h2 class="heading_text mb-0">
                  Blog Post Articles on Topical Issues
                </h2>
              </div>
              <div class="col col-lg-7 d-none d-lg-flex justify-content-end">
                <div class="btn_wrap p-0">
                  <a class="btn border_dark" href="blog.html"><span><small>All Articles</small>
                      <small>All Articles</small></span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col col-lg-4">
              <div class="blog_item">
                <ul class="item_category_list unordered_list">
                  <li><a href="#!">Photography</a></li>
                </ul>
                <div class="item_image">
                  <a href="blog_details.html" data-cursor-text="View"><img src="assets/images/blog/blog_img_1.jpg" alt="Collab – Online Learning Platform" /></a>
                </div>
                <div class="item_content">
                  <h3 class="item_title">
                    <a href="blog_details.html">The Top Technical Skills All Employees Need in 2023</a>
                  </h3>
                  <a class="btn_unfill" href="blog_details.html"><span class="btn_text">Read Articles</span>
                    <span class="btn_icon"><i class="fas fa-long-arrow-right"></i>
                      <i class="fas fa-long-arrow-right"></i></span></a>
                </div>
              </div>
            </div>
            <div class="col col-lg-4">
              <div class="blog_item">
                <ul class="item_category_list unordered_list">
                  <li><a href="#!">Photography</a></li>
                </ul>
                <div class="item_image">
                  <a href="blog_details.html" data-cursor-text="View"><img src="assets/images/blog/blog_img_2.jpg" alt="Collab – Online Learning Platform" /></a>
                </div>
                <div class="item_content">
                  <h3 class="item_title">
                    <a href="blog_details.html">The Best Graphic Design Careers — for Beginners and
                      Professionals</a>
                  </h3>
                  <a class="btn_unfill" href="blog_details.html"><span class="btn_text">Read Articles</span>
                    <span class="btn_icon"><i class="fas fa-long-arrow-right"></i>
                      <i class="fas fa-long-arrow-right"></i></span></a>
                </div>
              </div>
            </div>
            <div class="col col-lg-4">
              <div class="blog_item">
                <ul class="item_category_list unordered_list">
                  <li><a href="#!">Photography</a></li>
                </ul>
                <div class="item_image">
                  <a href="blog_details.html" data-cursor-text="View"><img src="assets/images/blog/blog_img_3.jpg" alt="Collab – Online Learning Platform" /></a>
                </div>
                <div class="item_content">
                  <h3 class="item_title">
                    <a href="blog_details.html">Ubuntu vs. Windows: Which OS Should You Use in 2023?</a>
                  </h3>
                  <a class="btn_unfill" href="blog_details.html"><span class="btn_text">Read Articles</span>
                    <span class="btn_icon"><i class="fas fa-long-arrow-right"></i>
                      <i class="fas fa-long-arrow-right"></i></span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="btn_wrap d-block d-lg-none pb-0 text-center">
            <a class="btn border_dark" href="blog.html"><span><small>All Articles</small> <small>All Articles</small></span></a>
          </div>
        </div>
      </section>
      <section class="newslatter_section">
        <div class="container">
          <div class="newslatter_box" style="background-image: url(assets/images/shape/shape_img_6.svg)">
            <div class="row justify-content-center">
              <div class="col col-lg-6">
                <div class="section_heading text-center">
                  <h2 class="heading_text">
                    Subscribe Now Forget 20% Discount Every Courses
                  </h2>
                  <p class="heading_description mb-0">
                    Nam ipsum risus, rutrum vitae, vestibulum eu, molestie
                    vel, lacus. Sed magna purus, fermentum eu
                  </p>
                </div>
                <form action="#">
                  <div class="form_item m-0">
                    <input type="email" name="email" placeholder="Your Email" />
                    <button type="submit" class="btn btn_dark">
                      <span><small>Subsctibe</small>
                        <small>Subsctibe</small></span>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="site_footer">
      <div class="footer_widget_area">
        <div class="container">
          <div class="row">
            <div class="col col-lg-3 col-md-6 col-sm-6">
              <div class="footer_widget">
                <div class="site_logo">
                  <a class="site_link" href="index.html"><img src="assets/images/logo/site_logo_2.svg" alt="Collab - Online Learning Platform" /></a>
                </div>
                <p>
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  laboris nisi ut aliquip ex ea commodo consequat
                </p>
                <ul class="social_links unordered_list">
                  <li>
                    <a href="#!"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="#!"><i class="fab fa-youtube"></i></a>
                  </li>
                  <li>
                    <a href="#!"><i class="fab fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#!"><i class="fab fa-linkedin-in"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col col-lg-6">
              <div class="row">
                <div class="col col-md-4 col-sm-4">
                  <div class="footer_widget">
                    <h3 class="footer_widget_title">Links</h3>
                    <ul class="page_list unordered_list_block">
                      <li>
                        <a href="about.html"><span class="item_icon"><i class="fas fa-caret-right"></i></span>
                          <span class="item_text">About</span></a>
                      </li>
                      <li>
                        <a href="course.html"><span class="item_icon"><i class="fas fa-caret-right"></i></span>
                          <span class="item_text">Courses</span></a>
                      </li>
                      <li>
                        <a href="mentor.html"><span class="item_icon"><i class="fas fa-caret-right"></i></span>
                          <span class="item_text">Mentors</span></a>
                      </li>
                      <li>
                        <a href="pricing.html"><span class="item_icon"><i class="fas fa-caret-right"></i></span>
                          <span class="item_text">Prices</span></a>
                      </li>
                      <li>
                        <a href="event.html"><span class="item_icon"><i class="fas fa-caret-right"></i></span>
                          <span class="item_text">Events</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col col-md-4 col-sm-4">
                  <div class="footer_widget">
                    <h3 class="footer_widget_title">Class</h3>
                    <ul class="page_list unordered_list_block">
                      <li>
                        <a href="#!"><span class="item_icon"><i class="fas fa-caret-right"></i></span>
                          <span class="item_text">Programming</span></a>
                      </li>
                      <li>
                        <a href="#!"><span class="item_icon"><i class="fas fa-caret-right"></i></span>
                          <span class="item_text">Art & Design</span></a>
                      </li>
                      <li>
                        <a href="#!"><span class="item_icon"><i class="fas fa-caret-right"></i></span>
                          <span class="item_text">Business</span></a>
                      </li>
                      <li>
                        <a href="#!"><span class="item_icon"><i class="fas fa-caret-right"></i></span>
                          <span class="item_text">Engineering</span></a>
                      </li>
                      <li>
                        <a href="#!"><span class="item_icon"><i class="fas fa-caret-right"></i></span>
                          <span class="item_text">Photography</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col col-md-4 col-sm-4">
                  <div class="footer_widget">
                    <h3 class="footer_widget_title">Support</h3>
                    <ul class="page_list unordered_list_block">
                      <li>
                        <a href="contact.html"><span class="item_icon"><i class="fas fa-caret-right"></i></span>
                          <span class="item_text">Help Center</span></a>
                      </li>
                      <li>
                        <a href="faq.html"><span class="item_icon"><i class="fas fa-caret-right"></i></span>
                          <span class="item_text">FAQ</span></a>
                      </li>
                      <li>
                        <a href="contact.html"><span class="item_icon"><i class="fas fa-caret-right"></i></span>
                          <span class="item_text">Contacts</span></a>
                      </li>
                      <li>
                        <a href="#!"><span class="item_icon"><i class="fas fa-caret-right"></i></span>
                          <span class="item_text">Security</span></a>
                      </li>
                      <li>
                        <a href="#!"><span class="item_icon"><i class="fas fa-caret-right"></i></span>
                          <span class="item_text">Private Police</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col col-lg-3 col-md-6 col-sm-6">
              <div class="footer_widget">
                <h3 class="footer_widget_title">Latest Posts</h3>
                <ul class="blog_small_group unordered_list_block">
                  <li>
                    <a class="blog_small" href="blog_details.html"><span class="item_image"><img src="assets/images/blog/blog_small_img_1.jpg" alt="Collab – Online Learning Platform" /> </span><span class="item_content"><span class="item_author"><i class="fas fa-user-alt"></i> by Corabelle
                          Durrad</span>
                        <strong class="item_title">See How Michaele Built a New Life and
                          Career</strong>
                        <small class="item_post_date">October 12, 2023</small></span></a>
                  </li>
                  <li>
                    <a class="blog_small" href="blog_details.html"><span class="item_image"><img src="assets/images/blog/blog_small_img_2.jpg" alt="Collab – Online Learning Platform" /> </span><span class="item_content"><span class="item_author"><i class="fas fa-user-alt"></i> by Corabelle
                          Durrad</span>
                        <strong class="item_title">See How Michaele Built a New Life and
                          Career</strong>
                        <small class="item_post_date">October 12, 2023</small></span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright_widget">
        <div class="container">
          <p class="copyright_text text-center mb-0">
            <a href="https://themeforest.net/user/merkulove">Merkulove</a> ©
            <b>Collab</b> Template All rights reserved Copyrights 2023
          </p>
        </div>
      </div>
    </footer>
  </div>
  <script src="assets/js/script.js"></script>
</body>

</html>