<?php
include "./db/dbconfic.php";
$get_users=mysqli_query($con,"SELECT * FROM `reg`");
?>
<!DOCTYPE html>
<html>
<head>
 <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
    <title></title>
    <style type="text/css">
     body{
    /*background-color: #525252;*/
}
.centered-form{
    margin-top: 60px;
}

.centered-form .panel{
    background: rgba(255, 255, 255, 0.8);
    box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
    </style>
</head>
<body>

   

<!------ Include the above in your HEAD tag ---------->

<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                        <h3 class="panel-title">Register</h3>
                        </div>
                        <div class="panel-body">
                        <form method="POST" action="./cms/cdata.php" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="hidden" name="id" id="id">
                            <input type="text" name="fname" id="first_name" class="form-control input-sm" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="lname" id="last_name" class="form-control input-sm" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="password" name="pass" id="password" class="form-control input-sm" placeholder="password">
                            </div>
                            <div class="form-group">
                                <input type="text" name="percentage" id="mark" class="form-control input-sm" placeholder="percentage">
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="file" name="upload" id="file" class="form-control" accept="application/pdf">
                                    </div>
                                </div>
                             
                            
                            <input type="submit" name="submit" value="Register" class="btn btn-info btn-block" id="clk">
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>
</div>
</div>
</div>
</div>
</div>
<table style="width:100%" border="1">
  <thead>
    <th>id</th>
    <th>firstname</th> 
    <th>lastname</th> 
    <th>email</th> 
    <th>mark</th> 
    <th>password</th>
    <th>pdf</th>

  </thead>
  <tbody>
<?php
while($row=mysqli_fetch_assoc($get_users)){
    ?>
    <tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['firstname'];?></td>
    <td><?php echo $row['lastname'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['mark'];?></td>
    <td><?php echo $row['password'];?></td>
    <td><?php echo $row['pdf'];?></td>
  </tr>
  <?php
}?>
</tbody>
</table>
</body>
<script type="text/javascript">
    $('#file').on('change',function(){

  myFile = $("#file").val();
    console.log(myFile);
  var upld = myFile.split('.').pop();
  if(upld=='pdf'){
    alert("File uploaded is pdf")
  }else{
    alert("Only PDF are allowed")
  }
 
})
</script>
</html>


