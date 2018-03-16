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
            <div class="col-md-9">
                <h1><i class="fa fa-folder-open"> </i>  Categories <small>Different Categories View</small> </h1><hr>
                <ol class="breadcrumb">
                  <li><i class="fa fa-tachometer"> </i> Dashboard / &nbsp;</li>
                    <li class="fa fa-folfer-open"><a href=""><i class="fa fa-tachometer"> </i> </a>Categories</li>
                    </li>
                </ol>
              
              <div class="row" >
                  <div class="col-md-6 col-lg-6">
                      <form action="">
                         <div class="form-group">
                          <label for="categoty">Categoty Name:</label>
                          <input type="text" placeholder ="Category Name" class = "form-control"/>
                          </div>
                          <input type="submit" value="Add Category" name="btnsubmit" class = "btn btn-primary"/>
                      </form>
                  </div>
                  <div class="col md-6 col-lg-6">
                      <table class="table table-hover table-striped table-bordered">
                          <thead>
                              <tr>
                                  <th>Sr #</th>
                                  <th>Category Name</th>
                                  <th>Posts</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Web Technologies</td>
                                  <td>12</td>
                                  <td><a href=""><i class="fa fa-pencil"></i></a></td>
                                  <td><a href=""><i class="fa fa-remove"></i></a></td>
                              </tr>
                              <tr>
                                  <td>2</td>
                                  <td>Web Technologies</td>
                                  <td>12</td>
                                  <td><a href=""><i class="fa fa-pencil"></i></a></td>
                                  <td><a href=""><i class="fa fa-remove"></i></a></td>
                              </tr>
                              <tr>
                                  <td>3</td>
                                  <td>Web Technologies</td>
                                  <td>12</td>
                                  <td><a href=""><i class="fa fa-pencil"></i></a></td>
                                  <td><a href=""><i class="fa fa-remove"></i></a></td>
                              </tr>
                              
                          </tbody>
                      </table>
                  </div>
                  
              </div>
            </div>
        </div>
        <?php require_once('inc/footer.php'); ?>
  </body>
</html>