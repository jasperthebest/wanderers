<?php /* Template Name: Contact Us */ ?>
<?php get_header(); ?>
<div class="topbannersub">
      <div class="coverBG" data-bg="<?php echo TEMPLATE_URI; ?>images/artistbg.jpg">
         <div class="container">
            <div class="middleeight mapform">
               <div>
                  <h1>Contact us</h1>
                  <div class="formfields">
                     <div class="inputfield">
                        <input type="text" class="txtbox" placeholder="Name" name="">
                     </div>
                     <div class="splitwayshow twowayshow">
                        <div>
                           <input type="text" class="txtbox" placeholder="Email" name="">
                        </div>
                        <div>
                           <input type="number" class="txtbox" placeholder="Phone" name="">
                        </div>
                     </div>
                     <div class="inputfield">
                        <input type="text" class="txtbox" placeholder="Subject" name="">
                     </div>
                     <div class="inputfield">
                        <textarea rows="5" class="txtbox" name="" placeholder="Message"></textarea>
                     </div>
                     <div class="text-center downmap">
                        <button class="sendmore">Submit</button>
                     </div>
                     <div id="mapkit-4728"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
<?php get_footer(); ?>