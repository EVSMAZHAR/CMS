<!DOCTYPE html>
<html lang="en">
   <?php 
	 require_once('inc/top.php'); 
	
	?>
  <body>
    <?php require_once('inc/header.php'); ?>
<div class="jumbotron">
    <div class="container">
        <div id="details" class="animated fadeInLeft">
            <h1>Custom Post</h1>
            <p>Customs posts will be here.</p>
            
        </div>
    </div>
    <img src="Images/Top_image.png" alt="Top Images">
    
</div>
   <section>
       <div class="container">
           <div class="row">
               <div class="col-md-8">
               <div class="Post">
                   <div class="row">
                       <div class="col-md-2 Post-date">
                           <div class="day">16</div>
                           <div class="Month">January</div>
                           <div class="Year">2018</div>
                       </div>
                       <div class="col-md-8 Post-title">
                          <a href="#"><h4> This is Heading for Post Heading one</h4></a>
                           <p>Written by :<span>Muhammad Mazhar</span> </p>
                       </div>
                       <div class="col-md-2 Profile_Picture">
                           <img src="Images/icons/Profile_img.png" alt="" class="img-circle">
                       </div>
                   </div>
                   <img src="Images/icons/Slider1.jpg" alt="">
                <p class="desc">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br/><br/>
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br/><br/>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br/><br/>
                </p>
                
                 
                 <hr>
                 <div >
                <span class="first"> <i class ="glyphicon glyphicon-folder-open" ></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Category</a </span>
                 <span class="sec"> <i class ="glyphicon glyphicon-comment" ></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Comments</a></span>
                 
                 </div>
                 
                </div>
               
             <div class="related-posts">
                 <h3>Related Posts</h3>
                 <hr>
                 
                 <div class="row">
                    
                     <div class="col-md-4">
                         <a href="">
                             <img src="Images/icons/Slider1.jpg" alt=""/>
                             <p>Old Momories Never forget, allways remander the old memories</p>
                         </a>
                     </div>
                     <div class="col-md-4">
                         <a href="">
                             <img src="Images/icons/Slider2.jpg" alt=""/>
                             <p>Old Momories Never forget, allways remander the old memories</p>
                         </a>
                     </div>
                     <div class="col-md-4">
                         <a href="">
                              <img src="Images/icons/Slider3.jpg" alt=""/>
                             <p>Old Momories Never forget, allways remander the old memories</p>
                         </a>
                     </div>
                 </div>
             </div>
             <div class="author">
                
                 <div class="row">
                     <div class="col-md-3">
                        <img src="Images/icons/Profile_img.png" alt="Profile Picture"class ="img-circle">
                     </div>
                     <div class="col-md-9">
                         <h3>Muhammad Mazhar</h3>
                         <p>
                             It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                         </p>
                     </div>
                 </div>
             </div>
             
             <div class="comments">
              <h3>Comments</h3>
             
               <div class="row">
                <div class="col-md-2">
                    <img src="Images/icons/Profile_img.png" alt="Profile Picture" class="img-circle"/>
                </div>
                <div class="col-md-10">
                    <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur
                    </p>
                </div>
                 </div>
                 <hr>
                 <div class="row">
                <div class="col-md-2">
                    <img src="Images/icons/Profile_img.png" alt="Profile Picture" class="img-circle"/>
                </div>
                <div class="col-md-10">
                    <p>
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur
                    </p>
                </div>
                 </div>
             </div>
             <div class="comment-box">
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
               <div class="col-md-4">
                
                   
            <?php require_once('inc/sidebar.php'); ?>
       
       </div>
        </div>
       </div>
       
   </section>
   <?php require_once('inc/footer.php'); ?>
  </body>
</html>