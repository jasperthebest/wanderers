<?php /* Template Name: Conference Booking */ ?>
<?php get_header(); ?>
<div class="topbannersub">
    <div class="coverBG" data-bg="<?php echo TEMPLATE_URI; ?>images/artistbg.jpg">
       <div class="container">
          <div class="middleeight">
             <div>
                <h1>Conference Room Booking</h1>
                <div class="formfields">
                   <div class="inputfield">
                      <input type="text" class="txtbox" placeholder="Name" name="">
                   </div>
                   <div class="splitwayshow threewayshow">
                      <div>
                         <input type="text" class="txtbox" placeholder="Phone" name="">
                      </div>
                      <div>
                         <input type="text" class="txtbox" placeholder="Email" name="">
                      </div>
                      <div>
                         <input type="date" class="txtbox" name="bookingday" placeholder="DD/MM/YYYY">
                      </div>
                   </div>
                   <div class="inputfield">
                      <textarea rows="5" class="txtbox" name="" placeholder="Message"></textarea>
                   </div>
                   <div class="text-center">
                      <button class="sendmore">Submit</button>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>
<?php get_footer(); ?>