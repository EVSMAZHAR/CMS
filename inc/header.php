</head>
 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
     
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
       <a class="navbar-brand" href="index.php">
        <div class="col-xs-3 col-md-3"><img src="Images/icon.jpg" width="30px"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
        <div class="col-xs-9 col ms-9"  style="margin-top: -25px;margin-left:40px;">SMS</div>
        
       </a>
      </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
    
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
        
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php 
			 
			  $query = "select * from categories";
			  $run = mysqli_query($connection, $query);
				  if(mysqli_num_row($run) > 0){
					  while($row=mysqli_fetch_array($run))
						  
					  {
						  $category= $row['category'];
						  echo "<li><a href='#'>$category</a></li>";
					  }
						  
				  }
			  ?>
            
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li><a href="contact-us.php"><i class="fa fa-phone"></i> Contact Us</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>