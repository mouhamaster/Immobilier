@extends('Layouts/master')

@section('slider')
 <div id="container">
     <section id="home" >
        <div class="slider-1_container" style="margin-top: 20px;">
            <div class="slider-1_wrapper">
                <div class="slider-1 revslider">
                    <ul>
                        <!-- THE FIRST SLIDE --> 
                        <li data-transition="fade" data-slotamount="5" data-masterspeed="300"> 
                            
                            <!-- THE MAIN BACKGROUND IMAGE IN THIS FIRST SLIDE --> 
                            <img src="images/slider_1_bg.jpg" data-fullwidthcentering="on" alt="background"> 
                            
                            <!-- THE CAPTIONS/LAYERS IN THIS SLIDE -->
                            <div class="caption medium-700-black lfr" 
                                  data-x="58" 
                                  data-y="138" 
                                  data-speed="300" 
                                  data-start="1600" 
                                  data-easing="easeOutExpo">Bienvenu sur Teranga Immob.</div>
                            <div class="caption small-600-black lfr" 
                                  data-x="58" 
                                  data-y="210" 
                                  data-speed="300" 
                                  data-start="2000" 
                                  data-easing="easeOutExpo">Teranga Immob est la meilleur solution pour vous, <br/>
                            </div>
                            <div class="caption randomrotate" 
                                  data-x="58" 
                                  data-y="285" 
                                  data-speed="300" 
                                  data-start="2400" 
                                  data-easing="easeOutExpo"> <a href="#" class="btn-custom btn-medium">Purchase Item</a> </div>
                            <div class="caption lfl" 
                                  data-x="595" 
                                  data-y="51" 
                                  data-speed="300" 
                                  data-start="1200" 
                                  data-easing="easeOutExpo"><img src="images/slider_1_browser.png" alt="browser" /> </div>
                            <div class="caption lfl" 
                                  data-x="500" 
                                  data-y="194" 
                                  data-speed="300" 
                                  data-start="800" 
                                  data-easing="easeOutExpo"><img src="images/slider_1_tablet.png" alt="tablet" /> </div>
                            <div class="caption lfl" 
                                  data-x="460" 
                                  data-y="304" 
                                  data-speed="300" 
                                  data-start="400" 
                                  data-easing="easeOutExpo"><img src="images/slider_1_phone.png" alt="phone" /> </div>
                        </li>
                        
                        <!-- THE SECOND SLIDE --> 
                        <li data-transition="papercut" data-slotamount="5" data-masterspeed="500" data-delay="9400"> 
                            
                            <!-- THE MAIN BACKGROUND IMAGE IN THIS FIRST SLIDE --> 
                            <img src="images/slider_2_bg.jpg" data-fullwidthcentering="on" alt="background"> 
                            
                            <!-- THE CAPTIONS/LAYERS IN THIS SLIDE -->
                            <div class="caption medium-700-black lfr" 
                                  data-x="625" 
                                  data-y="150" 
                                  data-speed="300" 
                                  data-start="400" 
                                  data-easing="easeOutExpo">L'avenir c'est maintenant
                              </div>
                            <div class="caption small-600-black lfr" 
                                  data-x="625" 
                                  data-y="225" 
                                  data-speed="300" 
                                  data-start="800" 
                                  data-easing="easeOutExpo">Teranga Immob est la meilleur solution pour vos projet immobilier <br/>
                                 </div>
                            <div class="caption randomrotate" 
                                  data-x="625" 
                                  data-y="300" 
                                  data-speed="300" 
                                  data-start="1200" 
                                  data-easing="easeOutExpo"><a href="#" class="btn-custom btn-medium border-btn">Purchase Item</a> </div>
                            <div class="tp-caption sfl start" 
                                  data-x="30" 
                                  data-y="bottom" 
                                  data-speed="1000" 
                                  data-start="1000" 
                                  data-easing="easeOutExpo"><img src="images/slider-3.png" alt="" /> </div>
                        </li>
                        
                        <!-- THE THIRD SLIDE --> 
                        <li data-transition="turnoff" data-slotamount="5" data-masterspeed="300"> 
                            
                            <!-- THE MAIN BACKGROUND IMAGE IN THIS FIRST SLIDE --> 
                            <img src="images/slider_3_bg.jpg" alt="background" data-fullwidthcentering="on" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
                            
                            <!-- THE CAPTIONS/LAYERS IN THIS SLIDE -->
                            <div class="caption medium-700-black lfr" 
                                  data-x="58" 
                                  data-y="138" 
                                  data-speed="300" 
                                  data-start="800" 
                                  data-easing="easeOutExpo">
                                    
                              </div>
                            <div class="caption small-600-black lfr" 
                                  data-x="58" 
                                  data-y="214" 
                                  data-speed="300" 
                                  data-start="1200" 
                                  data-easing="easeOutExpo">Teranga Immob est la meilleur solution pour vos projet immobilier. </div>
                            <div class="caption randomrotate" 
                                  data-x="58" 
                                  data-y="275" 
                                  data-speed="300" 
                                  data-start="1600" 
                                  data-easing="easeOutExpo"><a href="#" class="btn-custom btn-medium border-btn">L'avenir c'est maintenant</a> </div>
                            <div class="caption lfb" 
                                  data-x="420" 
                                  data-y="40" 
                                  data-speed="300" 
                                  data-start="400" 
                                  data-easing="easeOutExpo"><img src="images/slider_3_tablet.png" alt="tablet" /> </div>
                        </li>
                        
                        <!-- THE FOURTH SLIDE --> 
                        <li data-transition="papercut" data-slotamount="7" data-masterspeed="300"> 
                            <!-- MAIN IMAGE --> 
                            <img src="images/slider_4_bg.jpg" data-fullwidthcentering="on" alt="background"> 
                            
                            <!-- LAYER NR. 1 -->
                            <div class="caption medium-700-black lfr" 
                                  data-x="540" 
                                  data-y="125" 
                                  data-speed="300" 
                                  data-start="1600" 
                                  data-easing="easeOutExpo"> <span class="accent-color">
                               </div>
                            
                            <!-- LAYER NR. 3 -->
                            <div class="caption small-600-black lfr" 
                                  data-x="540" 
                                  data-y="200" 
                                  data-speed="300" 
                                  data-start="2000" 
                                  data-easing="easeOutExpo"> 
                              </div>
                            
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption sfb start" 
                                  data-x="540" 
                                  data-y="265" 
                                  data-speed="300" 
                                  data-start="2500" 
                                  data-easing="easeOutExpo"><a href="#" class="btn-custom btn-medium border-btn">Purchase This Now</a> </div>
                            
                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption sfl start" 
                                  data-x="180" 
                                  data-y="bottom" 
                                  data-speed="1000" 
                                  data-start="1000" 
                                  data-easing="easeOutExpo"><img src="images/slide-02-image-01.png" alt="" /> </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
      <div id="content">
          <div class="container">
            <div class="row">
              <div class="col-md-3"> 
                    
                    <!-- Start Big Heading -->
                    <div class="big-title">
                        <h1>Nos  <span class="accent-color">Caracteristiques</span></h1>
                        <p class="title-desc">Nous realisons vos réves</p>
                    </div>
                    <!-- End Big Heading --> 
                    
                    <!-- Some Text -->
                    <p>Lorem ipsum dolor sit amet, consectetur adi elit, sed do eiusmod tempor incididunt enim labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adi elit </p>
                </div>
                 <div class="col-md-3 service-box service-icon-left">
                    <div class="service-icon"> <i class="fa fa-users icon-mini-effect icon-effect-1"></i> </div>
                    <div class="service-content">
                        <h4> Easy Customization </h4>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia dolores.</p>
                    </div>
                </div>
                <div class="col-md-3 service-box service-icon-left">
                    <div class="service-icon"> <i class="fa fa-desktop icon-mini-effect icon-effect-1"></i> </div>
                    <div class="service-content">
                        <h4> Responsive Design </h4>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia dolores.</p>
                    </div>
                </div>
                 <div class="col-md-3 service-box service-icon-left">
                    <div class="service-icon"> <i class="fa fa-eye icon-mini-effect icon-effect-1"></i> </div>
                    <div class="service-content">
                        <h4> Notre Vision </h4>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia dolores.</p>
                    </div>
                </div>
            </div>
          </div>
        <div class="project">
            <div class="container"> 
            
                <!-- Start Recent Projects Carousel -->
                <div class="recent-projects">
                    <h4 class="title"><span>Annonces ventes immobiliers</span></h4>
                    <div class="projects-carousel touch-carousel">
                    
                        <div class="portfolio-item item">
                            <div class="portfolio-border">
                                <div class="portfolio-thumb"> 
                                   <a class="lightbox" data-lightbox-type="ajax" href="https://vimeo.com/78468485">
                                        <div class="thumb-overlay"><i class="fa fa-play"></i></div>
                                        <img alt="" src="images/portfolio/1.jpg" /> 
                                   </a> 
                                </div>
                                <div class="portfolio-details"> 
                                   <a href="#">
                                       <h4>Vendre</h4>
                                        <span>Centre ville</span> 
                                        <span>prix:30.000.000</span>
                                   </a> 
                                </div>
                            </div>
                        </div>
                        
                        <div class="portfolio-item item">
                            <div class="portfolio-border">
                                <div class="portfolio-thumb"> 
                                   <a class="lightbox" title="This is an image title" href="images/portfolio/portfolio_2_2@2x.jpg">
                                        <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                        <img alt="" src="images/portfolio/2.jpg" /> 
                                   </a> 
                                </div>
                                <div class="portfolio-details"> 
                                   <a href="#">
                                       <h4>Vendre</h4>
                                        <span>Centre ville</span> 
                                        <span>prix:30.000.000</span>
                                     </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="portfolio-item item">
                            <div class="portfolio-border">
                                <div class="portfolio-thumb"> 
                                   <a class="lightbox" title="This is an image title" href="images/portfolio/portfolio_2_3@2x.jpg">
                                        <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                        <img alt="" src="images/portfolio/3.jpg" /> 
                                   </a> 
                                </div>
                                <div class="portfolio-details"> 
                                   <a href="#">
                                        <h4>Vendre</h4>
                                        <span>Centre ville</span> 
                                        <span>prix:30.000.000</span>
                                   </a> 
                                </div>
                            </div>
                        </div>
                        
                        <div class="portfolio-item item">
                            <div class="portfolio-border">
                                <div class="portfolio-thumb"> 
                                   <a class="lightbox" title="This is an image title" href="images/portfolio/portfolio_2_4@2x.jpg">
                                        <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                        <img alt="" src="images/portfolio/4.jpg" /> 
                                   </a> 
                                </div>
                                <div class="portfolio-details"> 
                                   <a href="#">
                                        <h4>Vendre</h4>
                                        <span>Centre ville</span> 
                                        <span>prix:30.000.000</span>
                                        <span class="badge badge-primary">Details</span>
                                   </a> 
                                </div>
                            </div>
                        </div>
                         <div class="portfolio-item item">
                            <div class="portfolio-border">
                                <div class="portfolio-thumb"> 
                                   <a class="lightbox" title="This is an image title" href="images/portfolio/portfolio_2_6@2x.jpg">
                                        <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                        <img alt="" src="images/portfolio/6.jpg" /> 
                                   </a> 
                                </div>
                                <div class="portfolio-details"> 
                                   <a href="#">
                                        <h4>Appartement</h4>
                                        <span>Centre ville</span> 
                                        <span>prix:30.000.000</span>
                                   </a> 
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="portfolio-item item">
                            <div class="portfolio-border">
                                <div class="portfolio-thumb"> 
                                   <a class="lightbox" title="This is an image title" href="images/portfolio/portfolio_2_8@2x.jpg">
                                        <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                        <img alt="" src="images/portfolio/8.jpg" /> 
                                   </a> 
                                </div>
                                <div class="portfolio-details"> 
                                   <a href="#">
                                        <h4>Appartement</h4>
                                        <span>Centre ville</span> 
                                        <span>prix:30.000.000</span> 
                                   </a> 
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- End Recent Projects Carousel --> 
                
            </div>
            <!-- .container --> 
        </div>
      </div>
   </div> 
@endsection