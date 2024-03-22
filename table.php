
<?php
include("header.php");
?>

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Career</h4>
              
                  
                  
                
              </style>
              <!-- Basic Bootstrap Table -->
              <div class="card">
              <button><a href="careers.php">ADD DATA</button>
                <h5 class="card-header">Table</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>name</th>
                        <th>Qualifaction</th>
                        <th>Email</th>
                        <th>phone</th>
                        <th>Address</th>
                        <th>Update</th>
                        <th>Delete</th>
                      </tr>
                      <?php 
                      $conn=mysqli_connect("localhost","root","",'student');
                      if($conn)
                      {
                          echo "";
                      }
                      else
                      {
                          echo "not connect";
                      }
                      $sql=" select * from career";
                      
                      $res=mysqli_query($conn,$sql);
                      while($rw=mysqli_fetch_row($res))
                      {
                      ?>
                      
                          <tr>
                          <td><?php echo $rw[0];?></td>
                          <td><?php echo $rw[1];?></td>
                          <td><?php echo $rw[2];?></td>
                          <td><?php echo $rw[3];?></td>
                          <td><?php echo $rw[4];?></td>
                          <td><?php echo $rw[5];?></td>
                          <td><a href="carreru.php ? id=<?php echo $rw[0];?>">update</td>
                          <td><a href="deletec.php ? id=<?php echo $rw[0];?>">delete</td>
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
