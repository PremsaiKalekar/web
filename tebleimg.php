<?php
include("header.php");
?>  
                  
                
              </style>
              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Table</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                       
                        <th>name</th>
                        <th>img</th>
                        <th>description</th>
                        <th>Update</th>
                        <th>Delete</th>
                      </tr>
                      <?php 
                      $conn=mysqli_connect("localhost","root","","student");
                      if($conn)
                      {
                          echo "";
                      }
                      
                      else
                      {
                          echo "not connect";
                      }
                     
                      $sql="select * from vport";
                      
                      $res=mysqli_query($conn,$sql);
                      while($rw=mysqli_fetch_row($res))
                      {
                      ?>
                      
                          <tr>
                          <td><?php echo $rw[1];?></td>
                          <td><img src="images\<?php echo $rw[2];?>" width="50px" height="60px"></td>
                          <td><?php echo wordwrap($rw[3],60,"<br>\n");?></td>
                          <td><a href="imgupdate.php?id=<?php echo $rw[0];?>">update</td>
                          <td><a href="imgdelete.php?id=<?php echo $rw[0];?>">delete</td>
                      </tr>
                      <?php
                      }
                      ?>
                       
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->

                  
              
              <!-- Bootstrap Table with Header - Light -->

              
              <!-- Bootstrap Table with Header - Footer -->

              
              <!-- Bootstrap Table with Caption -->

              
              <!--/ Borderless Table -->

              <!--/ Contextual Classes -->

              
                  
    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
