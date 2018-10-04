<?php
  /*
  Template Name: Weocme
  
  */
  get_header();
  ?>

<?php

while ( have_posts() ) : the_post();

the_content();

endwhile; 

?>

        <!-- ==== Start About Us ==== -->
        <section class="about-us" id="about">
            <div class="container text-center">
                <div class="heading">
                    <i class="fa fa-snowflake-o" aria-hidden="true"></i>
                    <h2>Our
                        <span>Story</span></h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry
                        when an unknown printer took a
                        <br>
                        galley of type and scrambled it to make a type specimen book It has survived not
                        only five centuries.
                    </p>
                </div>

                <div class="row">
                    <!-- Box-1 -->
                    <div class="col-md-4">
                        <div class="box">
                            <span class="icon icon-basic-lightbulb"></span>
                            <div class="line m-auto"></div>
                            <h3>Management</h3>
                            <p>These modular elements can be readily used and customized across pages and in
                                different blocks</p>
                        </div>
                    </div>
                    <!-- Box-2 -->
                    <div class="col-md-4">
                        <div class="box">
                            <span class="icon icon-basic-pencil-ruler-pen"></span>
                            <div class="line m-auto"></div>
                            <h3>Branding</h3>
                            <p>These modular elements can be readily used and customized across pages and in
                                different blocks</p>
                        </div>
                    </div>
                    <!-- Box-3 -->
                    <div class="col-md-4">
                        <div class="box">
                            <span class="icon icon-basic-gear"></span>
                            <div class="line m-auto"></div>
                            <h3>Wordpress</h3>
                            <p>These modular elements can be readily used and customized across pages and in
                                different blocks</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==== End About Us ==== -->

        <!-- ==== Start Some Facts ==== -->
        <section class="some-facts">
            <div class="container text-center">
                <div class="row">
                    <!-- Box-1 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="items">
                            <span class="icon icon-basic-heart"></span>
                            <h3>
                                <span class="counter">368</span></h3>
                            <div class="line mx-auto"></div>
                            <h4>Happy Clients</h4>
                        </div>
                    </div>
                    <!-- Box-2 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="items">
                            <span class="icon icon-basic-todolist-pencil"></span>
                            <h3>
                                <span class="counter">937</span></h3>
                            <div class="line mx-auto"></div>
                            <h4>Projects Compleated</h4>
                        </div>
                    </div>
                    <!-- Box-3 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="items">
                            <span class="icon icon-basic-download"></span>
                            <h3>
                                <span class="counter">438</span></h3>
                            <div class="line mx-auto"></div>
                            <h4>Files Downloaded</h4>
                        </div>
                    </div>
                    <!-- Box-4 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="items">
                            <span class="icon icon-basic-pencil-ruler"></span>
                            <h3>
                                <span class="counter">5946</span></h3>
                            <div class="line mx-auto"></div>
                            <h4>Liens Of Code</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==== End Some Facts ==== -->

        <!-- ==== Start Services ==== -->
        <section class="services" id="services">
            <div class="container text-center">
                <div class="heading">
                    <span class="icon icon-basic-laptop"></span>
                    <h2>Our
                        <span>Services</span></h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry
                        when an unknown printer took a
                        <br>
                        galley of type and scrambled it to make a type specimen book It has survived not
                        only five centuries.
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <!-- Box-1 -->
                            <div class="col-sm-6 wow fadeIn">
                                <div class="box">
                                    <span class="icon icon-basic-gear"></span>
                                    <div class="line m-auto"></div>
                                    <h3>Wordpress</h3>
                                    <p>These modular elements can be readily used and customized</p>
                                </div>
                            </div>
                            <!-- Box-2 -->
                            <div class="col-sm-6 wow fadeIn">
                                <div class="box">
                                    <span class="icon icon-basic-joypad"></span>
                                    <div class="line m-auto"></div>
                                    <h3>Branding</h3>
                                    <p>These modular elements can be readily used and customized</p>
                                </div>
                            </div>
                            <!-- Box-3 -->
                            <div class="col-sm-6 wow fadeIn">
                                <div class="box">
                                    <span class="icon icon-basic-pencil-ruler-pen"></span>
                                    <div class="line m-auto"></div>
                                    <h3>Hosting</h3>
                                    <p>These modular elements can be readily used and customized</p>
                                </div>
                            </div>
                            <!-- Box-4 -->
                            <div class="col-sm-6 wow fadeIn">
                                <div class="box">
                                    <span class="icon icon-basic-video"></span>
                                    <div class="line m-auto"></div>
                                    <h3>Angular 5</h3>
                                    <p>These modular elements can be readily used and customized</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="col-lg-6">
                        <img src="img/services.png" alt="service image" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <!-- ==== End Services ==== -->

        <!-- ==== Start Get Started ==== -->
        <section class="get-started">
            <div class="container text-center">
                <div class="content">
                    <span class="icon icon-basic-mail-open-text"></span>
                    <h2>Ready to get started? Contact us!</h2>
                    <p>Sooad is a fully packed practical tool of premium built and design. Let your
                        creativity loose and
                        <br>
                        start building your website now.</p>
                    <a href="#." class="btn">Contact Us</a>
                </div>
            </div>
        </section>
        <!-- ==== End Get Started ==== -->

       

        <!-- ==== Start Our Team ==== -->
        <section class="our-team" id="team">
            <div class="container text-center">
                <div class="heading">
                    <span class="icon icon-basic-case"></span>
                    <h2>Our
                        <span>Team</span></h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry
                        when an unknown printer took a
                        <br>
                        galley of type and scrambled it to make a type specimen book It has survived not
                        only five centuries.
                    </p>
                </div>

                <div class="row">
                    <!-- Box-1 -->
                    <div class="col-md-4">
                        <div class="box">
                            <div class="image">
                                <img src="img/team/t1.jpg" alt="team" class="img-fluid">
                                <div class="social-icons">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                    <i class="fa fa-dribbble" aria-hidden="true"></i>
                                    <i class="fa fa-github" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="info">
                                <h3>Alamin Musa</h3>
                                <h4>Founder & CEO</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Box-2 -->
                    <div class="col-md-4">
                        <div class="box">
                            <div class="image">
                                <img src="img/team/t2.jpg" alt="team" class="img-fluid">
                                <div class="social-icons">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                    <i class="fa fa-dribbble" aria-hidden="true"></i>
                                    <i class="fa fa-github" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="info">
                                <h3>Adil Elsaeed</h3>
                                <h4>Wordpress Developer</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Box-3 -->
                    <div class="col-md-4">
                        <div class="box">
                            <div class="image">
                                <img src="img/team/t3.jpg" alt="team" class="img-fluid">
                                <div class="social-icons">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                    <i class="fa fa-dribbble" aria-hidden="true"></i>
                                    <i class="fa fa-github" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="info">
                                <h3>Albraa Yousif</h3>
                                <h4>Front-End Developer</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==== End Our Team ==== -->


        <!-- ==== Start Pricing ==== -->
        <section class="price" id="price">
            <div class="container text-center">
                <div class="heading">
                    <span class="icon icon-basic-todolist-pencil"></span>
                    <h2>Our
                        <span>Price</span></h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry
                        when an unknown printer took a
                        <br>
                        galley of type and scrambled it to make a type specimen book It has survived not
                        only five centuries.
                    </p>
                </div>

                <div class="row">
                    <!-- Box-1 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="box">
                            <div class="head">
                                <h3>Free</h3>
                            </div>
                            <div class="line m-auto"></div>
                            <div class="num">
                                <h4>00<span>$ / Month</span></h4>
                            </div>
                            <div class="body">
                                <ul>
                                    <li>10 GB Disk Space</li>
                                    <li>15 Domain Names</li>
                                    <li>4 Email Address</li>
                                    <li>Enhanced Security</li>
                                    <li>Unlimited Support</li>
                                </ul>
                            </div>
                            <a href="#0" class="btn">Get Started</a>
                        </div>
                    </div>
                    <!-- Box-2 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="box">
                            <div class="head">
                                <h3>Basic</h3>
                            </div>
                            <div class="line m-auto"></div>
                            <div class="num">
                                <h4>15<span>$ / Month</span></h4>
                            </div>
                            <div class="body">
                                <ul>
                                    <li>10 GB Disk Space</li>
                                    <li>15 Domain Names</li>
                                    <li>4 Email Address</li>
                                    <li>Enhanced Security</li>
                                    <li>Unlimited Support</li>
                                </ul>
                            </div>
                            <a href="#0" class="btn">Get Started</a>
                        </div>
                    </div>
                    <!-- Box-3 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="box standard">
                            <div class="head">
                                <h3>Standard</h3>
                            </div>
                            <div class="line m-auto"></div>
                            <div class="num">
                                <h4>30<span>$ / Month</span></h4>
                            </div>
                            <div class="body">
                                <ul>
                                    <li>10 GB Disk Space</li>
                                    <li>15 Domain Names</li>
                                    <li>4 Email Address</li>
                                    <li>Enhanced Security</li>
                                    <li>Unlimited Support</li>
                                </ul>
                            </div>
                            <a href="#0" class="btn">Get Started</a>
                        </div>
                    </div>
                    <!-- Box-4 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="box">
                            <div class="head">
                                <h3>Premium</h3>
                            </div>
                            <div class="line m-auto"></div>
                            <div class="num">
                                <h4>60<span>$ / Month</span></h4>
                            </div>
                            <div class="body">
                                <ul>
                                    <li>10 GB Disk Space</li>
                                    <li>15 Domain Names</li>
                                    <li>4 Email Address</li>
                                    <li>Enhanced Security</li>
                                    <li>Unlimited Support</li>
                                </ul>
                            </div>
                            <a href="#0" class="btn">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==== End Pricing ==== -->

        <!-- ==== Start Want Work ==== -->
        <section class="want-work">
            <div class="container text-center">
                <div class="content">
                    <span class="icon icon-basic-mixer2"></span>
                    <h2>Want to work with us?</h2>
                    <p>We are creative and interactive business agency, we make creative projects.
                        View some of the most successful projects.
                        <br>
                        Passion, ideas, and ambition.</p>
                    <a href="#." class="btn">Start Now!</a>
                </div>
            </div>
        </section>
        <!-- ==== End Want Work ==== -->

        <!-- ==== Start Blog ==== -->
        <div class="blog" id="blog">
            <div class="container">
                <div class="heading text-center">
                    <span class="icon icon-basic-book"></span>
                    <h2>Our
                        <span>Blog</span></h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry
                        when an unknown printer took a
                        <br>
                        galley of type and scrambled it to make a type specimen book It has survived not
                        only five centuries.
                    </p>
                </div>
                <div class="row">
                    <!-- Box-1 -->
                    <div class="col-md-4">
                        <div class="box wow fadeInUp" data-wow-duration="1s">
                            <img src="img/blog/b-1.jpg" alt="blog" class="img-fluid">
                            <div class="info">
                                <span>16 Aug , 2018</span>
                                <h3>What's So Great About Merry?
                                </h3>
                                <a href="#0" class="link">Continue Reading
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Box-2 -->
                    <div class="col-md-4">
                        <div class="box wow fadeInUp" data-wow-duration="1.5s">
                            <img src="img/blog/b-2.jpg" alt="blog" class="img-fluid">
                            <div class="info">
                                <span>16 Aug , 2018</span>
                                <h3>What is New in Bootstrap 4?
                                </h3>
                                <a href="#0" class="link">Continue Reading
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Box-3 -->
                    <div class="col-md-4">
                        <div class="box wow fadeInUp" data-wow-duration="2s">
                            <img src="img/blog/b-3.jpg" alt="blog" class="img-fluid">
                            <div class="info">
                                <span>16 Aug , 2018</span>
                                <h3>48 Best WordPress Themes
                                </h3>
                                <a href="#0" class="link">Continue Reading
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ==== Start Blog ==== -->

        <!-- ==== Start Clients ==== -->
        <section class="clients">
            <div class="container text-center">
                <div class="row">
                    <!-- Box-1 -->
                    <div class="col-md-3">
                        <img src="img/clients/client-1.png" alt="">
                    </div>
                    <!-- Box-2 -->
                    <div class="col-md-3">
                        <img src="img/clients/client-2.png" alt="">
                    </div>
                    <!-- Box-3 -->
                    <div class="col-md-3">
                        <img src="img/clients/client-3.png" alt="">
                    </div>
                    <!-- Box-4 -->
                    <div class="col-md-3">
                        <img src="img/clients/client-4.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- ==== End Clients ==== -->

        <!-- ==== Start Contact Us ==== -->
        <section class="contact" id="contact">
            <div class="container">
                <div class="heading text-center">
                    <span class="icon icon-basic-mail-open-text"></span>
                    <h2>Keep In
                        <span>Touch</span></h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and type setting industry
                        when an unknown printer took a
                        <br>
                        galley of type and scrambled it to make a type specimen book It has survived not
                        only five centuries.
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="title">
                            <h3>Contact Us :</h3>
                            <p>Nulla metus metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat</p>
                        </div>
                        <div class="content">
                            <!-- Info-1 -->
                            <div class="info">
                                <span class="icon icon-basic-ipod"></span>
                                <h4 class="d-inline-block">PHONE :
                                    <br>
                                    <span>+249122115057 , +249123456789</span></h4>
                            </div>
                            <!-- Info-2 -->
                            <div class="info">
                                <span class="icon icon-basic-mail"></span>
                                <h4 class="d-inline-block">EMAIL :
                                    <br>
                                    <span>brextheme@info.com</span></h4>
                            </div>
                            <!-- Info-3 -->
                            <div class="info">
                                <span class="icon icon-basic-geolocalize-05"></span>
                                <h4 class="d-inline-block">ADDRESS :<br>
                                    <span>6743 Saudi Arabia Street ,Ryadh, Bahri</span></h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7">

                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" id="comment" placeholder="Message"></textarea>
                            </div>
                            <button class="btn btn-block" type="submit">Send Now!</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==== End Contact Us ==== -->
<?php get_footer();
