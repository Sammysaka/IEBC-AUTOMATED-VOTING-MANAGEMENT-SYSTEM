

                          
<?php
         //  include 'check_login_agent.php';
         include '../db_config/connection.php';
         if (isset($_POST['county'])) {
          
          $current_county=$_POST['county'];
//select all wards in that polling
 $sql1 = "SELECT * FROM `county` where countycode='$current_county' ";
             $result1 = $conn->query($sql1);
             if ($result1->num_rows > 0) {
              while($row1 = $result1->fetch_assoc()) {
                //echo $row1['wardname']."\t";
                // $wardcode=$row1['wardcode'];
           
                          ?>
                            <div class="well btn pull-left" style="width: 100%;margin-left: 1px;margin-top: 5px;color: black;min-width: 250px;">
                             <div class="pull-left" style="margin-top:-2%;">
                        <button class="badge bg-green" style="margin-top:8%;"><h style="color: yellow;"><b> County Name: </b></h></button>
                     
                    </div>
                            <h4 class="badge" style="margin-top: -2%;"><?php echo $row1['countyname'];?></h4>
                            <div class="panel">
                   <table class="table table-responsive table-condensed table-bordered" style="width: 100%;text-align: left;">
                <thead>
                      <tr >
                       <th style="font-size: 15px;">Candidate Name</th>
                         <th style="font-size: 15px;">Photo</th>
                           <th style="font-size: 15px;">Votes </th>
                    </thead>
                    <tbody >
                <?php
                      
                          //select all presedint from that ward

                        $sql2 = "SELECT * FROM `county_results` where county='$current_county' && type='President'";
                         $result2 = $conn->query($sql2);
                         if ($result2->num_rows > 0) {
                          while($row2 = $result2->fetch_assoc()) {
                            $pres=$row2['contestant'];

                               $sql21 = "SELECT * FROM president where Sno='$pres' ORDER BY Sno ";
                                  $resultvote=mysqli_query($conn,$sql21);
                                  if(mysqli_num_rows($resultvote)>0){
                                    while($row21 =mysqli_fetch_array($resultvote)) {
                                       echo '<tr style="background-color:#eee;"><td>' . $row21["uname"]. '</td><td> <img width="40px" height="30px" src="../uploads/'.$row21['photo'].'" /></td><td>'.$row2['votes'].'</td></tr>';
                                            }
                                        } 
                                        else{
                                           echo '<tr><td colspan="3">President not Found</td></tr>';
                                           
                                        }
                                  }
                                }
                                else{
                                          echo '<tr><td colspan="3">No Vote For Any President in this ward</td></tr>';
                                     }
                                 
                       ?>
                        </tbody>
                     </table> 
                     </div>
                     </div>
                     <?php
                      }
                    }
                    else
                    {
                      echo '<tr><td colspan="3">County Found</td></tr>';
                    }
             }
             else
             {
              echo '<tr><td colspan="3">Please Choose County</td></tr>';
             }
;  $conn->close();
?>
                                         