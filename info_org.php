<?php
   include 'include/connection.php';
   include 'header_data.php';
   
   ?>
<div class="module">
<div class="module-head">
   <button type="button" id="formButton" style="display: block; border:none; " class="btn-success">Add Organization</button>
</div>
<div class="module-body">
<!-- add employee from  -->
<form name="myForm" action="insertemp.php" method="post" class="form-horizontal row-fluid" id="form1" style="display: none;" enctype="multipart/form-data" >
   <div class="control-group">
      <label class="control-label" for="basicinput">Organization-Name</label>
      <div class="controls">
         <input data-title="A tooltip for the input" type="text"  data-original-title="" name="name"  class="span8 " required>
      </div>
   </div>
   <div class="control-group">
      <label class="control-label" for="basicinput">Contact Person</label>
      <div class="controls">
         <input data-title="A tooltip for the input" type="text"  data-original-title="" name="cperson"  class="span8 " required>
      </div>
   </div>
   <div class="control-group">
      <label class="control-label" for="basicinput">Alt Contact Person</label>
      <div class="controls">
         <input data-title="A tooltip for the input" type="text"  data-original-title="" name="alt_cperson"  class="span8 ">
      </div>
   </div>
   <div class="control-group">
      <label class="control-label" for="basicinput">Email</label>
      <div class="controls">
         <input data-title="A tooltip for the input" type="email"  data-original-title="" name="email"  class="span8" required>
      </div>
   </div>
   <div class="control-group">
      <label class="control-label" for="basicinput">Alt Email</label>
      <div class="controls">
         <input data-title="A tooltip for the input" type="text" data-original-title="" name="alt_email"  class="span8" >
      </div>
   </div>
   <div class="control-group">
      <label class="control-label" for="basicinput">Conatct No</label>
      <div class="controls">
         <input data-title="A tooltip for the input" type="text"  data-original-title="" name="phone"  class="span8" required>
      </div>
   </div>
   <div class="control-group">
      <label class="control-label" for="basicinput">Alt Contact No</label>
      <div class="controls">
         <input data-title="A tooltip for the input" type="text" data-original-title="" name="alt_phone"  class="span8" >
      </div>
   </div>
   <div class="control-group">
      <label class="control-label" for="basicinput">Website</label>
      <div class="controls">
         <input data-title="A tooltip for the input" type="text" data-original-title="" name="website"  class="span8" >
      </div>
   </div>
   <div class="control-group">
      <label class="control-label" for="basicinput">Linked In</label>
      <div class="controls">
         <input data-title="A tooltip for the input" type="text" data-original-title="" name="linkedin"  class="span8" >
      </div>
   </div>
   <div class="control-group">
      <label class="control-label" for="basicinput">No of Employee</label>
      <div class="controls">
         <input data-title="A tooltip for the input" type="number" data-original-title="" name="no_employee"  class="span4 ">
      </div>
   </div>
   <div class="control-group">
      <label class="control-label" for="basicinput">Address</label>
      <div class="controls">
         <textarea name="address" id="" cols="30" rows="5" class="span8"></textarea>
      </div>
   </div>
   <div class="control-group">
      <label class="control-label" for="basicinput">DOJ in Ensomerge</label>
      <div class="controls">
         <input data-title="A tooltip for the input" type="date" data-original-title="" name="doj"  class="span6 ">
      </div>
   </div>
   <?php if ($role==2) {?>
    <div class="control-group">
      <label class="control-label" for="basicinput">TL</label>
      <div class="controls">
         <input data-title="A tooltip for the input" type="text" data-original-title="" name="tl" value="<?php echo $username; ?>"  class="span6" readonly>
      </div>
   </div>
  
   <?php }else{?>
    <div class="control-group">
      <label class="control-label" for="basicinput">Team Leader</label>
      <div class="controls">
         <select name="tl" class="form-control" required>
            <option value="">Sleect TL...</option>
            <option>Jaison</option>
            <option>Jincy</option>
            <option>Mukund</option>
            <option>Riya</option>
         </select>
      </div>
   </div>

   <?php } ?>
 
   <div class="control-group">
      <div class="controls">
         <button type="submit" class="btn btn-info" name="submit">Submit Form</button>
      </div>
   </div>
</form>
<br>
<!-- End Form -->
<!-- Start View part -->
<ul class="profile-tab nav nav-tabs">
   <li class="active"><a href="#activity" data-toggle="tab">Table View</a></li>
</ul>
<!-- Table View part -->
<div class="profile-tab-content tab-content">
<div class="tab-pane fade active in" id="activity">
   <form method="post" action="">
      <div class="btn-group pull-right" data-toggle="buttons-radio">
         <button type="submit" class="btn btn-info" name="all">
         All</button>
         <button type="submit" class="btn btn-danger" name="deactive">
         Deactive</button>
         <button type="submit" class="btn btn-success" name="active">
         Active</button>
      </div>
   </form>
   <br>
   <table class="table table-striped table-bordered table-condensed">
      <thead>
         <tr>
            <th>Emp_ID</th>
            <th>Emp_Name</th>
            <th>Role</th>
            <th>Process</th>
            <th>Password</th>
            <th></th>
         </tr>
      </thead>
      <tbody>
         <?php
            if($role!=2){
            	$sql="SELECT * FROM `emp` where status=0 ORDER BY `id` DESC" ;
            
            	if (isset($_POST['all'])) {
            		$sql="SELECT * FROM `emp`  ORDER BY `id` DESC" ;
            	}
            	 if (isset($_POST['active'])) {
            		$sql="SELECT * FROM `emp` where status=0 ORDER BY `id` DESC" ;
            	}
            	 if (isset($_POST['deactive'])) {
            		 $sql="SELECT * FROM `emp` where status=1 ORDER BY `id` DESC" ;
            	}
            
            }else{
            	$sql="SELECT * FROM `emp` where status=0 and emp.tl='$username' ORDER BY `id` DESC" ;
            
            	if (isset($_POST['all'])) {
            		$sql="SELECT * FROM `emp` where emp.tl='$username'  ORDER BY `id` DESC" ;
            	}
            	 if (isset($_POST['active'])) {
            		$sql="SELECT * FROM `emp` where status=0 and emp.tl='$username' ORDER BY `id` DESC" ;
            	}
            	 if (isset($_POST['deactive'])) {
            		 $sql="SELECT * FROM `emp` where status=1 and emp.tl='$username' ORDER BY `id` DESC" ;
            	}
            }
                                       
                                       
            
                                      
                                        $res=mysqli_query($conn,$sql);
                                        echo "Number of Employees : ".mysqli_num_rows($res);
                                        while($row=mysqli_fetch_assoc($res)) { ?>
         <tr>
            <td> <?php  echo $row['emp_id'];  ?> </td>
            <td> <?php  echo $row['emp'];  ?> </td>
            <td> <?php  echo $row['roll'];  ?></td>
            <td> <?php  echo $row['process'];  ?></td>
            <td> <?php  echo $row['password'];  ?></td>
            <td> 
               <?php
                  if ($row['status'] == 0) {
                     echo "<span class='badge badge-complete' >
                     <a href='credintial_operation.php?status=".$row['status']." &id=".$row['emp_id']." ' class='text-color'>Active</a></span>&nbsp;";
                  }
                  else
                  {
                    echo "<span class='badge badge-delete' >
                     <a href='credintial_operation.php?status=".$row['status']." &id=".$row['emp_id']." ' class='text-color'>Deactive</a></span>&nbsp;";
                  
                  }
                  
                   echo "<span class='badge badge-edit' ><a href='emp_update.php?id=".$row['emp_id']."' class='text-color' class='text-color'>Update</a></span>";
                  
                  
                  
                  
                  ?>
            </td>
         </tr>
         <?php   }  ?>
      </tbody>
   </table>
</div>
<!-- End Table View  -->
<!-- End List View part -->
<?php
   include 'footer.php';
   ?>
<script>
   $(document).ready(function() {
   $("#formButton").click(function() {
     $("#form1").toggle();
   });
   });
</script>