<?php require_once('inc/top.php'); ?>
  <body>
  <div id="wraper">
  <?php require_once('inc/header.php'); ?>
    <div class="container-fluid body-section">
        <div class="row">
            <div class="col-md-3">
                 <?php require_once('inc/sidebar.php')?>
            </div>
            <div class="col-md-9">
                <h1><i class="fa fa-tachometer"> </i>  DashBoard <small>Statistic Over View</small> </h1><hr>
                <ol class="breadcrumb">
                  <li class="active"><i class="fa fa-tachometer"> </i> Dashboard</a>
                  
                </ol>
              <div class="row tag-boxes">
                <div class="col-md-3 col-lg-6">
                   <div class="panel panel-primary">
                       
                          <div class="panel-heading">
                          <div class="row">
                          <div class="col-xs-3">
                            &nbsp;&nbsp;&nbsp;&nbsp;      <i class="fa fa-comments fa-5x"></i>
                          </div>
                          </div>
                          <div class="col-xs-9">
                              <div class="text-right huge">11</div>
                              <div class="text-right">New Comments</div>
                          </div>
                         </div>
                         <a href="#">
                             <div class="panel-footer">
                                 <span class="pull-left">view all comments</span>
                                 <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                      </div>
                       
                   </div>
                   <div class="col-md-3 col-lg-6">
                   <div class="panel panel-heading">
                       
                          <div class="panel panel-red">
                          <div class="row">
                          <div class="col-xs-3">
                            &nbsp;&nbsp;&nbsp;&nbsp;   <i class="fa fa-file-text fa-5x"></i>
                          </div>
                          </div>
                          <div class="col-xs-9">
                              <div class="text-right huge">18</div>
                              <div class="text-right">All Posts</div>
                          </div>
                         </div>
                         <a href="#">
                             <div class="panel-footer">
                                 <span class="pull-left">view all Posts</span>
                                 <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                      </div>
                       
                   </div>
                   <div class="col-md-3 col-lg-6">
                   <div class="panel-heading">
                       
                          <div class="panel panel-yellow">
                          <div class="row">
                          <div class="col-xs-3">
                             &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-users fa-5x"></i>
                          </div>
                          </div>
                          <div class="col-xs-9">
                              <div class="text-right huge">08</div>
                              <div class="text-right">Users</div>
                          </div>
                         </div>
                         <a href="#">
                             <div class="panel-footer">
                                 <span class="pull-left">view all User</span>
                                 <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                      </div>
                       
                   </div>
                   <div class="col-md-3 col-lg-6">
                   <div class="panel-heading">
                       
                          <div class="panel panel-green">
                          <div class="row">
                          <div class="col-xs-3">
                              &nbsp;&nbsp;&nbsp;&nbsp;  <i class="fa fa-folder-open fa-5x"></i>
                          </div>
                          </div>
                          <div class="col-xs-9">
                              <div class="text-right huge">11</div>
                              <div class="text-right"> categories</div>
                          </div>
                         </div>
                         <a href="#">
                             <div class="panel-footer">
                                 <span class="pull-left">view all categories</span>
                                 <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                      </div>
                       
                   </div><hr>
                   
                    
                </div>
                <hr>
                <h3>New Users</h3>
                <table class="table table-hover table-striped">
                       <thead>
                          <tr>
                            <th>Sr#</th>
                           <th>Date</th>
                           <th>Name</th>
                           <th>UserName</th>
                           <th>Roll</th>
                          </tr>
                           
                       </thead>
                       <tbody>
                           <tr>
                               <td>1</td>
                               <td>12 March,2017</td>
                               <td>Muhammad mazhar</td>
                               <td>mazhar786</td>
                               <td>admin</td>
                           </tr>
                           <tr>
                               <td>2</td>
                               <td>12 March,2017</td>
                               <td>Muhammad mazhar</td>
                               <td>mazhar786</td>
                               <td>admin</td>
                           </tr>
                           <tr>
                               <td>3</td>
                               <td>12 March,2017</td>
                               <td>Muhammad mazhar</td>
                               <td>mazhar786</td>
                               <td>admin</td>
                           </tr>
                           <tr>
                               <td>4</td>
                               <td>12 March,2017</td>
                               <td>Muhammad mazhar</td>
                               <td>mazhar786</td>
                               <td>admin</td>
                           </tr>
                           <tr>
                               <td>5</td>
                               <td>12 March,2017</td>
                               <td>Muhammad mazhar</td>
                               <td>mazhar786</td>
                               <td>admin</td>
                           </tr>
                       </tbody>
                   </table>
                   <a href="" class="btn btn-primary"> View All Users</a>
                   <br/><hr>
                   <h3>New Posts</h3>
                   <table class="table">
                       <thead>
                          <tr>
                          <th>Sr #</th>
                           <th>Date</th>
                           <th>Post Title</th>
                           <th>Category</th>
                           <th>Views</th>
                           </tr>
                           
                       </thead>
                       <tbody>
                           <tr>
                               <td>1</td>
                               <td>25 Jan,2018</td>
                               <td>Learn Web Technilogies</td>
                               <td>Web Technologes</td>
                               <td>13</td>
                           </tr>
                           <tr>
                               <td>1</td>
                               <td>25 Jan,2018</td>
                               <td>Learn Web Technilogies</td>
                               <td>Web Technologes</td>
                               <td>13</td>
                           </tr>
                           <tr>
                               <td>1</td>
                               <td>25 Jan,2018</td>
                               <td>Learn Web Technilogies</td>
                               <td>Web Technologes</td>
                               <td>13</td>
                           </tr>
                           <tr>
                               <td>1</td>
                               <td>25 Jan,2018</td>
                               <td>Learn Web Technilogies</td>
                               <td>Web Technologes</td>
                               <td>13</td>
                           </tr>
                       </tbody>
                   </table>
                   <a href="" class="btn btn-primary"> View All Users</a>
                
            </div>
            </div>
        <?php require_once('inc/footer.php');?>
  </body>
</html>