<?php require_once('config.php');
$reg_no = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission form  </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <link rel="stylesheet" href="style2.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <style type="text/css">

        @page { size:auto;  margin:  10mm; margin-right: -70px; margin-left: -70px;}
        @media print{
            a[href]:after{
                content: none !important;
            }
        }
        @media print {
            #printbtn{
                display: none !important;
            }
            .main-heading
            {
                font-size:30px !important;
            }
            .underline{
                line-height: 27px !important;
                text-decoration-style: dotted !important;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
<div class="row">
    <div class="col-sm-1"> </div>
    <div class="col-sm-10" style="border:2px solid red; padding:10px;">
    <?php
     $sql="SELECT * from registration WHERE reg_no=:reg_no";
     $stmt = $db -> Prepare($sql);
      $stmt ->bindParam(':reg_no', $reg_no, PDO::PARAM_STR);
      $stmt ->execute();
      $rows = $stmt -> fetchAll();
      foreach($rows as $row)
      {
    ?>
    <div class="row">
       <div class="col-2">
        <img src="download.jpg" class="img-fluid">
       </div>
    <div class="col">
        <div class="main-heading">Khandelwal College of Management Science and Technology</div>
        <p class="sub-heading">Top Education Brand <br> "Our commitment is to provide you Best Quality Education & Experience.." 
      </p>
        <div class="address">
          14th KM Kalapur,Pilibhit Road, Post Izzatnager,Bareilly.
          <pre>              Phone- 8868882331               </pre>
          </div>
        <p class="email"> Email:kcmt467@gmail.com , Website: www.kcmt.in</p>
    </div>
    <div class="col-sm-12">
        <hr class="hrcls" style="color:red;">
    </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-8" style="text-align: center;padding-bottom: 5px;">
           <h3><u>Admission Form 2024</u></h3>
        </div>
        <div class="col-sm-2">     
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-group row">
              <div class="col-4">
                <label class="label">Registration No</label>
              </div>
              <div class="col-8">
                  <?php echo $row['reg_no']; ?>   
              </div>
            </div>

            <div class="form-group row">
              <div class="col-4">
                <label class="label">Full Name</label>
              </div>
              <div class="col-8">
                  <?php echo $row['name']; ?>   
              </div>
            </div>

            <div class="form-group row">
              <div class="col-4">
                <label class="label">Father Name</label>
              </div>
              <div class="col-8">
                   <?php echo $row['fname']; ?>    
              </div>
            </div>

            <div class="form-group row">
              <div class="col-4">
                <label class="label">Mother Name</label>
              </div>
              <div class="col-8">
                   <?php echo $row['mname']; ?>    
              </div>
            </div>

            <div class="form-group row">
              <div class="col-4">
                <label class="label">Address</label>
              </div>
              <div class="col-8">
                   <?php echo $row['address']; ?>    
              </div>
            </div>

            <div class="form-group row">
              <div class="col-4">
                <label class="label">DOB</label>
              </div>
              <div class="col-8">
                   <?php echo $row['dob']; ?>       
              </div>
            </div>

            <div class="form-group row">
              <div class="col-4">
                <label class="label">Gender</label>
              </div>
              <div class="col-8">
                 <?php echo $row['gender']; ?>     
              </div>
            </div>

        </div>
        <div class="col-6">
            <div class="row">
                <div class="col-12">
                    <div class="form-group" style="float:right;">
                        <label class="label">Photo</label>
                        <div style="width:150px;">
                        <img src="uploads/<?php echo $row['image']; ?>" width="150" height="150">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form-group" style="float:right;">
                        <label class="label">Signature</label>
                        <div style="width:150px;">
                        <img src="uploads/<?php echo $row['sign']; ?>" width="150" height="120" >
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="form-group row">
              <div class="col-4">
                <label class="label">Category</label>
              </div>
              <div class="col-8">
                 <?php echo $row['category']; ?> 
              </div>
            </div>  
        </div>
        <div class="col-6">
            <div class="form-group row">
              <div class="col-4">
                <label class="label">Course</label>
              </div>
              <div class="col-8">
                <?php echo $row['course']; ?> 
              </div>
            </div>
      </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="form-group row">
              <div class="col-4">
                <label class="label">Fees</label>
              </div>
              <div class="col-8">
                 <?php echo $row['course_fees']; ?> INR
              </div>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group row">
              <div class="col-4">
                <label class="label">Payment status</label>
              </div>
              <div class="col-8">
                <?php echo  strtoupper($row['pay_status']); ?> 
              </div>
            </div>
      </div>
    </div>

    <?php } ?>

    </div>
      <div class="col-2">
      </div>

</div>
<br>
<center><button type="button" class="btn btn-warning" id="printbtn" onclick="window.print()">Print Form</button></center>
    </div>
      </div>
</body>
</html>