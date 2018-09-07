<?php /* Template Name: Brewing Enthusiasts */ ?>
<?php get_header(); ?>
<div class="topbannersub">
  <div class="coverBG" data-bg="<?php echo TEMPLATE_URI; ?>images/artistbg.jpg">
     <div class="container">
        <div class="middleeight">
           <div>
              <h1>Brewing Enthusiasts</h1>
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
                    <select placeholder="Select a Category" class="selectbox">
                       <option disabled selected hidden>Select a Category</option>
                       <option>Amateur Brewer</option>
                       <option>Home Brewer</option>
                       <option>Professional Brewer</option>
                       <option>Brewing Enthusiast</option>
                       <option>Brewery Tour</option>
                    </select>
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