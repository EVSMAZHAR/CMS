<!DOCTYPE html>
<html lang="en">
 <?php require_once('inc/top.php'); ?>
  <body>
  <div id="wraper">
    <?php require_once('inc/header.php'); ?>
    <div class="container-fluid body-section">
        <div class="row">
            <div class="col-md-3">
                 <?php require_once('inc/sidebar.php'); ?>
            </div>
            
            <div class="col-lg-9 col-md-9 ">
            
              <div class="container-fluid">
                
                <h1><i class="fa fa-tachometer"> </i>  Users <small>View all Users</small> </h1>
                <hr>
            
                <ol class="breadcrumb">
                  <li><a href=""><i class="fa fa-tachometer"> </i> Dashboard / &nbsp;</a></li>
                   <li><a><i class="fa fa-users"> </i> Users</a>
                    </li>
                </ol>
                
                
                <br>
                <div class="row col-lg-9 col-md-9">
                <div class="col-sm-8">
                <form action="">
                   <div class="row">
                    <div class="col-xs-4">
                        <div class="form-group">
                            <select name="" id="" class="form-control">
                                <option value ="delete">Delete</option>
                                <option value = "Author">Chage to author</option>
                                <option  value = "admin">Chage to Admin</option>
                            </select>
                        </div>
                    </div>&nbsp;&nbsp;
                    <div class="col-xs-8">
                        <input type="submit" class ="btn btn-success" value="Submit">
                        <a href="" class="btn btn-primary"> Add new </a>
                    </div>
                    </div>
                </form>   
                
                </div>
                </div>
               
                <br>
                <table class="table table-hover table-striped table-bordered table-responsive">
                    <thead>
                        <tr>
                           <th> sel</th>
                            <th>Se # </th>
                            <th>Date </th>
                            <th>Name</th>
                            <th>UserName</th>
                            <th>Email</th>
                            <th>Image</th>
                            <th>Pass</th>
                            <th>Role</th>
                            <th>Posts</th>
                            <th>Edit</th>
                            <th>Del</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                           <td><input type="checkbox"></td>
                            <td>1</td>
                            <td>14 march 2018</td>
                            <td>Mazhar</td>
                            <td>mazhar789</td>
                            <td>mazhar@gmail.com</td>
                            <td><img src="Images/icons/Profile_img.png" alt="User Image" width="30px"></td>
                            <td>43343</td>
                            <td>Admin</td>
                            <td>08</td>
                            <td><a href=""><i class="fa fa-edit"></i></a></td>
                            <td> <a href=""><i class="fa fa-remove"></i></a></td>
                        </tr>
                         <tr>
                           <td><input type="checkbox"></td>
                            <td>1</td>
                            <td>14 march 2018</td>
                            <td>Mazhar</td>
                            <td>mazhar789</td>
                            <td>mazhar@gmail.com</td>
                            <td><img src="Images/icons/Profile_img.png" alt="User Image" width="30px"></td>
                            <td>43343</td>
                            <td>Admin</td>
                            <td>08</td>
                            <td><a href=""><i class="fa fa-edit"></i></a></td>
                            <td> <a href=""><i class="fa fa-remove"></i></a></td>
                        </tr>
                         <tr>
                           <td><input type="checkbox"></td>
                            <td>1</td>
                            <td>14 march 2018</td>
                            <td>Mazhar</td>
                            <td>mazhar789</td>
                            <td>mazhar@gmail.com</td>
                            <td><img src="Images/icons/Profile_img.png" alt="User Image" width="30px"></td>
                            <td>43343</td>
                            <td>Admin</td>
                            <td>08</td>
                            <td><a href=""><i class="fa fa-edit"></i></a></td>
                            <td> <a href=""><i class="fa fa-remove"></i></a></td>
                        </tr>
                         <tr>
                           <td><input type="checkbox"></td>
                            <td>1</td>
                            <td>14 march 2018</td>
                            <td>Mazhar</td>
                            <td>mazhar789</td>
                            <td>mazhar@gmail.com</td>
                            <td><img src="Images/icons/Profile_img.png" alt="User Image" width="30px"></td>
                            <td>43343</td>
                            <td>Admin</td>
                            <td>08</td>
                            <td><a href=""><i class="fa fa-edit"></i></a></td>
                            <td> <a href=""><i class="fa fa-remove"></i></a></td>
                        </tr>
                    </tbody>
                </table>
                
                 
            </div>
        
          </div>
          </div>
        <?php require_once('inc/footer.php'); ?>
  </body>
</html>