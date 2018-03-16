<html>
 <?php 
	require_once('inc/top.php'); 
 ?>
  <body>
    <?php require_once('inc/header.php'); ?>
<div class="jumbotron">
    <div class="container">
        <div id="details" class="animated fadeInLeft">
            <h1>Contact Us</h1>
            <p>We are avaliable 24/4 hours. Fell free to Contact Us</p>
            
        </div>
    </div>
    <img src="Images/Top_image.png" alt="Top Images">
    
</div>
   <section>
       <div class="container">
           <div class="row">
               <div class="col-md-8">
               
               <div>
               <div class="col-md-12">
                       
              <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
             <div style='overflow:hidden;height:100%;width:100%;'>
             <div id='gmap_canvas' style='height:400px;width:100%;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://embed-map.org/'>embedded google map</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=587c9c9947910eddc24abb5ef61bcd6a9b672b34'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(31.5187828,74.34064869999997),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(31.5187828,74.34064869999997)});infowindow = new google.maps.InfoWindow({content:'<strong>Sir syed collehe of Computer Science</strong><br>Ghalib Road<br>54000 lahore<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
			</script>
              
               </div>
                   <div class="col-md-12">
                     
                      <form class="form contact-form">
                      <h2>Contact Form</h2>
                     <hr>
                       <div action="" class="form-group ">
                           <label for="fullname">Full Name*:</label>
                           <input type="text" id ="fullname" class="form-control" placeholder="Full Name">
                           
                       </div>
                        
                        <div action="" class="form-group">
                           <label for="email">Email *:</label>
                           <input type="email" id ="email" class="form-control" placeholder="Email Address">
                           
                       </div>
                        <div action="" class="form-group">
                           <label for="website">Website</label>
                           <input type="text"id ="website" class="form-control" placeholder="Web Site">
                           
                       </div>
                        <div action="" class="form-group">
                           <label for="mesage">Message</label>
                            <textarea id="message" class="form-control" placeholder="Message"></textarea>
                           
                       </div>
                       <div action="" class="form-group">
                           
                           <input type="submit" name="submit" class="btn btn-primary" value="Submit" />
                           
                       </div>
                       </form>
                   </div>
               </div>
               
               
             
               </div>
               <div class="col-md-4">
               <?php require_once('inc/sidebar.php'); ?>
               
       
       
               </div>
         </div>
       
   </section>
   <?php require_once('inc/footer.php'); ?>
  </body>
</html>
