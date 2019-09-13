<?php get_header(); ?>

	<section class="">
      <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.w3schools.com/bootstrap4/la.jpg" alt="Los Angeles" width="100%">
      <div class="container">
          <div class="carousel-caption">
            <div class="caption-border">
               <h1 class="mb-1">One page</h1>
              <h2>Multi-purpose theme</h2> 
            </div>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
            <p><a class="btn btn-lg btn-outline-light" href="#" role="button">Get Started</a></p>
          </div>
        </div>   
    </div>
    <div class="carousel-item">
      <img src="https://www.w3schools.com/bootstrap4/chicago.jpg" alt="Chicago" width="100%">
      <div class="container">
          <div class="carousel-caption">
            <div class="caption-border">
               <h1 class="mb-1">One page</h1>
              <h2>Multi-purpose theme</h2> 
            </div>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
            <p><a class="btn btn-lg btn-outline-light" href="#" role="button">Get Started</a></p>
          </div>
        </div>   
    </div>
    <div class="carousel-item">
      <img src="https://www.w3schools.com/bootstrap4/ny.jpg" alt="New York" width="100%">
      <div class="container mt-n5">
          <div class="carousel-caption">
            <div class="caption-border">
               <h1 class="mb-1">One page</h1>
              <h2>Multi-purpose theme</h2> 
            </div>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
            <p><a class="btn btn-lg btn-outline-light" href="#" role="button">Get Started</a></p>
          </div>
        </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

    </section>

    <!-- SERVICES -->
    <section class="content-section bg-light" id="services">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-10 mx-auto title-section">
            <span>Briging your proven results</span>
            <h2>Our Services</h2>
            <p class="lead mb-5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
          </div>
        </div>
      </div>
      <div class="container-fluid services-elements mt-5 mb-5">
          <div class="row">
            <!-- Control buttons -->
              <div class="container mt-3">
              <div id="myBtnContainer" class="d-flex justify-content-around mb-5">
                
                <a class="btn marketing" onclick="filterSelection('marketing')"> <span class="typcn typcn-flow-merge"></span> <span class="link-text">Marketing</span></a>
                <a class="btn" onclick="filterSelection('advertising')"><span class="typcn typcn-location-arrow"></span><span class="link-text">Advertising</span></a>
                <a class="btn" onclick="filterSelection('cloud-storage')"> <span class="typcn typcn-cloud-storage"></span><span class="link-text">Cloud Storage</span></a>
                <a class="btn" onclick="filterSelection('consulting')"> <span class="typcn typcn-user"></span><span class="link-text">Consulting</span></a>
              </div>

              <!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->  
            </div>
          </div>
      </div>
      <div class="container-fluid">
        <div class="container">
              <div class="filterDiv marketing">
                <h2 class="title-line">Marketing <span class="typcn typcn-flow-merge"></h2>
                <p >
                Consectetur adipisicing elit animi atque quia earum ex iste modi distinctio deserunt excepturi ullam sequi pariatur harum dicta at, debitis veritatis aliquid totam commodi perferendis?</p>
              </div>
              <div class="filterDiv advertising">
                <h2 class="title-line">Advertising <span class="typcn typcn-location-arrow"></h2>
                <p>
                Fesum dolor sit amet, consectetur adipisicing elit. Animi atque quia earum ex iste modi distinctio deserunt excepturi ullam sequi pariatur harum dicta at, debitis veritatis aliquid totam commodi perferendis?</p>
              </div>
              <div class="filterDiv cloud-storage">
                <h2 class="title-line">Cloud storage <span class="typcn typcn-cloud-storage"></span></h2>
                <p>
                Animi atque quia earum ex iste modi distinctio deserunt excepturi ullam sequi pariatur harum dicta at, debitis veritatis aliquid totam commodi perferendis?</p>
              </div>
              <div class="filterDiv consulting">
                <h2 class="title-line">Consulting <span class="typcn typcn-user"></span></h2>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi atque quia earum ex iste modi distinctio deserunt excepturi ullam sequi pariatur harum dicta at, debitis veritatis aliquid totam commodi perferendis?</p>
              </div>
             
            </div>
        
      </div>
    </section>
    
    <!-- ABOUT -->
    <section class="content-section" id="about">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-10 mx-auto title-section-wth">
            <span>Briging your proven results</span>
            <h2>About us</h2>
            <p class="lead mb-5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
          </div>
        </div>

        <div class="row">
            <div class="container">
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="main-timeline overflow-auto">
                        <a href="#" class="timeline">
                            <div class="timeline-icon"><i class="fa fa-globe"></i></div>
                            <div class="timeline-content">
                                <h3 class="title">Web Designer</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate ducimus officiis quod! Aperiam eveniet nam nostrum odit quasi ullam voluptatum.
                                </p>
                            </div>
                        </a>
                        <a href="#" class="timeline">
                            <div class="timeline-icon"><i class="fa fa-rocket"></i></div>
                            <div class="timeline-content">
                                <h3 class="title">Web Developer</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate ducimus officiis quod! Aperiam eveniet nam nostrum odit quasi ullam voluptatum.
                                </p>
                            </div>
                        </a>
                        <a href="#" class="timeline">
                            <div class="timeline-icon"><i class="fa fa-briefcase"></i></div>
                            <div class="timeline-content">
                                <h3 class="title">Web Designer</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate ducimus officiis quod! Aperiam eveniet nam nostrum odit quasi ullam voluptatum.
                                </p>
                            </div>
                        </a>
                        <a href="#" class="timeline">
                            <div class="timeline-icon"><i class="fa fa-mobile"></i></div>
                            <div class="timeline-content">
                                <h3 class="title">Web Developer</h3>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate ducimus officiis quod! Aperiam eveniet nam nostrum odit quasi ullam voluptatum.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
      </div>
    </section>
    
    <!-- PORTFOLIO -->
    <section class="content-section" id="portfolio">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-10 mx-auto title-section">
            <span>Briging your proven results</span>
            <h2>Portfolio</h2>
            <p class="lead mb-5">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cell-container">
            <img class="image" src="http://www.bigart.design/images/other/stephanie-mccabe-24620-600x600.jpg"> <a class="overlay" href="https://unsplash.com/photos/_Ajm-ewEC24" target="_blank">
            <div class="text">
              <p class="title">Firework</p>
              <div class="divider">
              </div>
              <p class="sub-title">Stefanie McCabe</p>
            </div></a>
          </div>


          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cell-container">
            <img class="image" src="http://www.bigart.design/images/other/sticker-mule-197248-600x600.jpg"> <a class="overlay" href="https://unsplash.com/photos/qNhstTawQrI" target="_blank">
            <div class="text">
              <p class="title">Catch of the day</p>
              <div class="divider">
              </div>
              <p class="sub-title">Sticker Mule</p>
            </div></a>
          </div>


          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cell-container">
            <img class="image" src="http://www.bigart.design/images/other/scott-webb-258983-600x600.jpg"> <a class="overlay" href="https://unsplash.com/photos/fMUIVein7Ng" target="_blank">
            <div class="text">
              <p class="title">Abstracting Details</p>
              <div class="divider">
              </div>
              <p class="sub-title">Scott Web</p>
            </div></a>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cell-container">
            <img class="image" src="http://www.bigart.design/images/other/matthew-kane-205235-600x600.jpg"> <a class="overlay" href="https://unsplash.com/photos/9GHW302mRBk" target="_blank">
            <div class="text">
              <p class="title">Snow Monkey</p>
              <div class="divider">
              </div>
              <p class="sub-title">Matthew Kane</p>
            </div></a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cell-container">
            <img class="image" src="http://www.bigart.design/images/other/joshua-earle-157231-600x600.jpg"> <a class="overlay" href="https://unsplash.com/photos/xEh4hvxRKXM" target="_blank">
            <div class="text">
              <p class="title">Ice Land</p>
              <div class="divider">
              </div>
              <p class="sub-title">Joshua Earle</p>
            </div></a>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cell-container">
            <img class="image" src="http://www.bigart.design/images/other/joshua-sortino-228788-600x600.jpg"> <a class="overlay" href="https://unsplash.com/photos/71vAb1FXB6g" target="_blank">
            <div class="text">
              <p class="title">Emergence from the Clouds</p>
              <div class="divider">
              </div>
              <p class="sub-title">Joshua Sortino</p>
            </div></a>
          </div>


          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cell-container">
            <img class="image" src="http://www.bigart.design/images/other/derick-anies-120213-600x600.jpg"> <a class="overlay" href="https://unsplash.com/photos/hDJT_ERrB-w" target="_blank">
            <div class="text">
              <p class="title">Man</p>
              <div class="divider">
              </div>
              <p class="sub-title">Derick Anies</p>
            </div></a>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 cell-container">
            <img class="image" src="http://www.bigart.design/images/other/joshua-newton-275881-600x600.jpg"> <a class="overlay" href="https://unsplash.com/photos/7qjqQjt7zXQ" target="_blank">
            <div class="text">
              <p class="title">Flame</p>
              <div class="divider">
              </div>
              <p class="sub-title">Joshua Newton</p>
            </div></a>
          </div>


        </div>
      </div>
      
    </section>
    

    <!-- CONTACT -->
    <section class="content-sections mb-5" id="contact">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-10 mx-auto title-section">
            <span>Briging your proven results</span>
            <h2>Contacto</h2>
            <span><i></i></span>
          </div>
        </div>
      </div>
      <div class="container text-center contact-icons mt-5 mb-5">
        <div class="">
          <ul class="list-inline mt-2 d-flex justify-content-around">
            <li class="list-inline-item ">
              <a class="social-link rounded-circle" href="#">
                <span class="typcn typcn-location"></span>
              </a>
              <p>1355 Mkt St #900, California</p>
            </li>
            <li class="list-inline-item ">
              <a class="social-link rounded-circle" href="#">
                <span class="typcn typcn-phone"></span>
              </a>
              <p>1-889-09768790</p>
            </li>
            <li class="list-inline-item ">
              <a class="social-link rounded-circle" href="#">
                <span class="typcn typcn-mail"></span>
              </a>
              <p>info@onepagetheme.com</p>
            </li>
          </ul>
        </div>
      </div>
      <!-- Map -->
     <div class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
        <br />
        <small>
          <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
        </small>
     </div>
     <div class="container text-center mb-5 mt-5">
      <form>
        <div class="row mb-3">
          <div class="col">
            <input type="text" class="form-control" placeholder="First name *">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Last name *">
          </div>
        </div>
        <div class="row mb-3">
          <div class="col">
            <input type="email" class="form-control" placeholder="Emial address *">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Phone *">
          </div>
        </div>
        <div class="row mb-3">
          <div class="col">
            <textarea type="textarea" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message *"></textarea>
          </div>
        </div>
          <button type="submit" class="btn btn-outline-dark">Submit</button>
       
      </form>
    </section>


<footer class="footer text-center bg-dark text-white">
    <div class="container">
      <ul class="list-inline mt-3">
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white" href="#">
            <span class="typcn typcn-social-facebook"></span>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white" href="#">
            <span class="typcn typcn-social-twitter"></span>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white" href="#">
            <span class="typcn typcn-social-instagram"></span>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white" href="#">
            <span class="typcn typcn-social-google-plus"></span>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white" href="#">
            <span class="typcn typcn-social-linkedin"></span>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white" href="#">
            <span class="typcn typcn-social-vimeo"></span>
          </a>
        </li>
      </ul>
    </div>
  </footer>
    

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

	
<?php get_footer(); ?>