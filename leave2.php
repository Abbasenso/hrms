<?php

include 'include/connection.php';
include 'header_data.php';

?>



						<div class="module">
							
							<div class="module-body">

									

									
                               <!-- add employee from -->

									<form action="leave2.php" method="post" class="form-horizontal row-fluid" id="form1" enctype="multipart/form-data">
										
                                 

										 <div class="control-group">
											<label class="control-label" for="basicinput">From Date</label>
											<div class="controls">
												<input data-title="A tooltip for the input"  type="date" name="startdate" placeholder="" data-original-title="" class="span6 ">
											</div>
										</div>

										 <div class="control-group">
											<label class="control-label" for="basicinput">To Date</label>
											<div class="controls">
												<input data-title="A tooltip for the input" type="date" name="enddate" placeholder="" data-original-title="" class="span6 ">
											</div>
										</div>
										

										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn" name="submit" id="submit">Search</button>
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


                            <div class="module-option clearfix">
                                <form action="leave2.php" method="post" id="form2">
                                <div class="input-append pull-left">
                                    <input type="text" class="span3" placeholder="Filter by id..." name="filter">
                                    <button type="submit" class="btn" name="search">
                                        <i class="icon-search"></i>
                                    </button>
                                </div>
                                <div class="btn-group pull-right" data-toggle="buttons-radio">
                              <button  class="export-btn btn btn-primary">
                                        Export</button>
                                    
                                </div>
                            </div>
                                </form>
                                
                            </div>


                            	<table class="table table-striped table-bordered table-condensed">
								  <thead>
									<tr>
									
									  
									  <th>EMPNAME</th>
                                                                          <th>Applied Date</th>
									  <th>DATE</th>
                                                                          <th>Todate</th>
									  <th>No Of Leaves</th>
									  <th>Request Type</th>
									  <th>Remarks</th>
									  <th>Hr Remarks</th>
									  <th>Status</th>
									  <th>Action</th>

									  
									</tr>
								  </thead>
								  <tbody>
									<?php

									
										$sql="SELECT leavea.*,emp.tl from leavea,emp where leavea.emp_id=emp.emp_id and emp.tl='$username' and emp.status=0 order by id DESC " ;
										$res=mysqli_query($conn,$sql);
   
									   
										 if (isset($_POST['submit']))
										   {
												   $checkdate = $_POST['startdate'];
												   $todate  = $_POST['enddate'];
												   
												   $sql = "SELECT leavea.*,emp.tl from leavea,emp where leavea.emp_id=emp.emp_id and emp.tl='$username' and emp.status=0 and leavea.date BETWEEN '$checkdate' and '$todate' order by id DESC";
												   $res=mysqli_query($conn,$sql);
											}
										  else if(isset($_POST['search']))
											   {
												   $filter=$_POST['filter'];
   
												   if ($filter == '')
													   {
														$sql="SELECT leavea.*,emp.tl from leavea,emp where leavea.emp_id=emp.emp_id and emp.tl='$username' and emp.status=0 order by id DESC " ;
														   $res=mysqli_query($conn,$sql);
   
												   }
												   elseif ($filter != '') 
												   {
													   $sql="SELECT * from leavea where emp_id='$filter' order by date asc" ;
														   $res=mysqli_query($conn,$sql);
												   }
											   }
					
                                 


                                  	
                                     while($row=mysqli_fetch_assoc($res)) { ?>
                                    <tr>
                                       
                                      
                                      
                                     
				       <td> <?php  echo $row['emp_name'];  ?></td>
                                       <td> <?php  echo $row['datetime'];  ?> </td>
				       <td> <?php  echo $row['date'];  ?></td>
                                       <td> <?php  echo $row['todate'];  ?></td>
                                       <td> <?php  echo $row['no_of_days'];  ?></td>
                                       <td> <?php  echo $row['type'];  ?></td>
                                       <td> <?php  echo $row['remarks'];  ?></td>
                                       <td> <?php  echo $row['hr_remarks'];  ?></td>
                                     

                                     <?php 


                                       if ($row['status']==0) {
                                 	echo "<td>" . "Pending". "</td>";
                                 }elseif ($row['status']==1) {
                                 	echo "<td>" . "Approved". "</td>";
                                 }else{
                                 	echo "<td>" . "Rejectd". "</td>";
                                 }


                                      ?>




                                   
                                       <td>
                                       	<?php
                                           echo "<span class='badge badge-edit' ><a href='updateleave.php?id=".$row['id']."' class='text-color' class='text-color'>Update</a></span>";
                                        ?>
                                       </td>
                                     
                                    
                                       
                                          
                                     
                                    </tr>


                                 <?php  }  ?>
								  </tbody>
								</table>

                                </div>


                                <!-- End Table View  -->


                                    <!-- End List View part -->
							</div>
						</div>

			</form>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>

						
	<script src="test.js" type="text/javascript"></script>
  

    <script>

  $(document).ready(function() {
  $("#search").click(function() {
    $("#form2").toggle();
  });
});
</script>


