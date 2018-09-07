<?php get_header(); ?>
<section class="firstsect coverBG" data-bg="<?php echo TEMPLATE_URI; ?>images/map.jpg">
      <div class="container">
         <div class="homelogo">
            <div>
               <img src="<?php echo TEMPLATE_URI; ?>images/homelogo.png" alt="Wanderers">
               <h1>The <strong>Craft Brewers</strong><small>of Beer </small></h1>
               <a href="#" class="btn primary explorebtn"><span>Explore</span></a>
            </div>
         </div>
      </div>
   </section>
   <section class="secondsect coverBG" data-bg="<?php echo TEMPLATE_URI; ?>images/abtbg.jpg" id="explorenext">
      <div class="container">
         <div class="boxabt">
            <div>
               <h2>About us</h2>
               <p>We are travelers… seeking, reaching out to quench our thirst for friendship… for companionship. To be alone and to be in the midst; to be free and to be ensconced; to be warm and to be set to elements!</p>
               <p><b>... and... We are Craft Brewers of beer!</b></p>
               <p>(Wo)Man has been wandering... travelling for ages, hunting (in search of food &amp; drink), for business (to meet and greet), to find solace and to find oneself too!</p>
               <p>We at Wanderers, set out to seek and meet fellow wanderers in our journey. We are travellers and hosts at once; we serve our fellow travellers walking in; travelling with us, striving to enhance their social bonding, savouring our craft beer and artisan food.</p>
               <a href="wanderers.html">Read more..</a>
            </div>
            <div>
               <img src="<?php echo TEMPLATE_URI; ?>images/abtslide.jpg" alt="">
            </div>
         </div>
         <div class="boxabt">
            <div>
               <h2>Our Muse ~ Arctic Tern</h2>
               <p>Arctic Tern <i>(Sterna paradisaea)</i>, a strongly migrating bird which has a circumpolar breeding distribution covering Arctic, sub-Arctic and Antarctic coast, travelling over 70-90,000 Km EVERY YEAR, is our Wanderer-in-Chief!</p>
               <p>They are by far the longest known migrating species known, seeing two summers each year, get to experience more daylight than any other animal in the world (hence ‘Bird of the Sun’) as it migrates from its northern Arctic breeding grounds to southern Antarctic coast for summer and back again each year. They are estimated to travel over 90,000 Km every year!</p>
            </div>
            <div>
               <img src="<?php echo TEMPLATE_URI; ?>images/arcticimg.jpg" alt="">
               <!--
               <video onclick="this.paused ? this.play() : this.pause();" poster="/images/arcticimg.jpg">
                 <source src="images/movie.mp4" type="video/mp4">
                 Your browser does not support the video tag.
               </video>
               -->
            </div>
         </div>
      </div>
   </section>
   <section class="thirdsect coverBG" data-bg="<?php echo TEMPLATE_URI; ?>images/sustainbg.jpg" id="sustainable">
      <div class="container">
         <div class="sustainflex">
            <div>
               <h2>We are Sustainable</h2>
               <strong>Business and environment sustainability are ingrained in our business.</strong>
               <p>We are probably the only micro-brewery in India with an in-house ETP (effluent treatment plant) confirming to the norms of effluent discharge;</p>
               <p>We diligently adhere to reduce, re-use and re-cycle whatever we can, both in our supply chain and in our operations. We reduce our water usage by:</p>
               <ul>
                  <li>Conserving water usage;</li>
                  <li>Re-using treated water within our brew-pub and reducing our water requirement and foot print;</li>
                  <li>Re-cycling our food and non-food waste creating a backward integration of supply chain.</li>
               </ul>
            </div>
            <div>
               <img src="<?php echo TEMPLATE_URI; ?>images/diagram.png" alt="">
            </div>
         </div>
      </div>
   </section>
   <section class="fourthsect coverBG" data-bg="<?php echo TEMPLATE_URI; ?>images/cntbg.jpg" id="responsibledrink">
      <div class="container">
         <h2>Responsible drinking</h2>
         <p>Check your beer-o-meter before you head out!</p>
         <div class="glassbeer">
            <div>
               <div class="contactform">
                  <div>
                     <div class="formcntfield">
                        <label>Liquor consumed (in ml)</label>
                        <input type="number" class="txtbox" id="alcoholoz" name="">
                     </div>
                     <div class="formcntfield">
                        <label>% of alcohol in drink</label>
                        <input type="number" class="txtbox" id="alcoholper" max="100" name="">
                     </div>
                     <div class="formcntfield">
                        <label>Your weight (in kg)</label>
                        <input type="number" class="txtbox" id="weightpd" name="">
                     </div>
                     <div class="formcntfield">
                        <label>Time passed (in hrs)</label>
                        <input type="number" class="txtbox" id="timehr" name="">
                     </div>
                  </div>
                  <div>
                     <!--
                     <div class="formcntfield">
                        <label>Your result:</label>
                        <input type="text" class="txtbox" name="">
                     </div>
                     <div class="formcntfield">
                        <label>BAC percentage:</label>
                        <input type="text" class="txtbox" name="">
                     </div> 
                     -->
                     <div class="middlealcohol">
                        <div>
                           <h5>For guidance only. BAC may vary in actual.</h5>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="text-center">
                  <a href="#" class="btn primary submitbloodsample"><span>Submit</span></a> 
               </div>
            </div>
         </div>
         <div class="recentblog">
            <h3>Read our recent blogs</h3>
            <div class="drinkmore">
               <div>
                  <a href="#">
                     <div class="recntlink">
                        <div>
                           <img src="<?php echo TEMPLATE_URI; ?>images/recentblog1.jpg" alt=""/>
                        </div>
                        <div>
                           <small>January 2018 / by Founder’s Pen</small>
                           <h5>Permitted blood alcohol content legal limit</h5>
                        </div>
                     </div>
                  </a>
               </div>
               <div>
                  <a href="#">
                     <div class="recntlink">
                        <div>
                           <img src="<?php echo TEMPLATE_URI; ?>images/recentblog2.jpg" alt=""/>
                        </div>
                        <div>
                           <small>January 2018 / by Founder’s Pen</small>
                           <h5>Legal permissable drinking age</h5>
                        </div>
                     </div>
                  </a>
               </div>
               <div>
                  <a href="#">
                     <div class="recntlink">
                        <div>
                           <img src="<?php echo TEMPLATE_URI; ?>images/recentblog3.jpg" alt=""/>
                        </div>
                        <div>
                           <small>January 2018 / by Founder’s Pen</small>
                           <h5>Factors affecting the blood alcohol level</h5>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </section>
   
<!-- Pop up tab -->
<div class="poptabs">
  <div class="middletable">
     <div>
        <div class="elementwithlogo">
           <img src="<?php echo TEMPLATE_URI; ?>images/logoanimate.png" alt="">
           <div class="bgslidertop" id="animationbg"></div>
         
        </div>
     </div>
  </div>
</div>
<?php get_footer(); ?>
