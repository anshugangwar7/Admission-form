<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Admission form with PDF previewable...</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <link rel="stylesheet" href="style2.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <div class="container">
          <div class="row">
               <div class="col-sm-2">
               </div>
                <div class="col-sm-8" style="border: 2px solid black;padding: 5px; text-align: center;">
                <h1>Admission Form </h1>
                </div>
                <div class="col-sm-2">
                </div>
                
          </div>
          <div class="row">
             <div class="col-sm-1">
             </div>
             <div class="col-sm-10" style="padding:80px;">
                <form action="form_action.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3 row">
                                       <div class="col-sm-4">
                                         <label class="label" >Full Name:-</label>
                                       </div>
                                       <div class="col-sm-8">
                                           <input type="text" name="name" class="form-control" >
                                       </div>
                                </div>
                                <div class="mb-3 row">
                                       <div class="col-sm-4">
                                         <label class="label" >Father Name:-</label>
                                       </div>
                                       <div class="col-sm-8">
                                           <input type="text" name="fname" class="form-control" >
                                       </div>
                                </div>
                                <div class="mb-3 row">
                                       <div class="col-sm-4">
                                         <label class="label" >Mother Name:-</label>
                                       </div>
                                       <div class="col-sm-8">
                                           <input type="text" name="mname" class="form-control" >
                                       </div>
                                </div>
                                <div class="mb-3 row">
                                       <div class="col-sm-4">
                                         <label class="label" >Address:-</label>
                                       </div>
                                       <div class="col-sm-8">
                                           <textarea name="address" class="form-control" required></textarea>
                                       </div>
                                </div>
                                <div class="mb-3 row">
                                       <div class="col-sm-4">
                                         <label class="label" >Email:-</label>
                                       </div>
                                       <div class="col-sm-8">
                                           <input type="text" name="email" class="form-control" >
                                       </div>
                                </div>
                                <div class="mb-3 row">
                                       <div class="col-sm-4">
                                         <label class="label" >Mobile No:-</label>
                                       </div>
                                       <div class="col-sm-8">
                                           <input type="text" name="mobile" maxlength="10" class="form-control" required>
                                       </div>
                                </div>
                                <div class="mb-3 row">
                                       <div class="col-sm-4">
                                         <label class="label" >DOB:-</label>
                                       </div>
                                       <div class="col-sm-8">
                                           <input type="date" name="dob"  class="form-control" >
                                       </div>
                                </div>
                                <div class="mb-3 row">
                                       <div class="col-sm-4">
                                         <label class="label" >Category:-</label>
                                       </div>
                                       <div class="col-sm-8">
                                           <select name="category" class="form-control" required>    
                                           <option value="">Select your category</option>
                                               <option value="SC">SC</option>
                                               <option value="ST">ST</option>
                                               <option value="OBC">OBC</option>
                                               <option value="General">General</option>
                                           </select>
                                       </div>
                                </div>
                                <div class="mb-3 row">
                                       <div class="col-sm-4">
                                         <label class="label" >Gender:-</label>
                                       </div>
                                       <div class="col-sm-8">
                                           <select name="gender" class="form-control" required>    
                                           <option value="">Select Gender</option>
                                               <option value="Male">Male</option>
                                               <option value="Female">Female</option>
                                               <option value="Other">Other</option>
                                           </select>
                                       </div>
                                </div>
                                <div class="mb-3 row">
                                       <div class="col-sm-4">
                                         <label class="label" >course:-</label>
                                       </div>
                                       <div class="col-sm-8">
                                           <select name="course" class="form-control" required>    
                                           <option value="">Select course</option>
                                               <option value="BCA">Bachelor of Computer Application</option>
                                               <option value="BBA">Bachelor of Bussiness Administration</option>
                                               <option value="B.COM">Bachelor of Commerce</option>
                                               <option value="B.COM Honors">Bachelor of Commerce Honors</option>
                                               <option value="B.sc (microbiology)">
                                                Bachelor of Science(Microbiology)
                                               </option>
                                               <option value="B.ed">Bachelor of Education</option>
                                               <option value="B.sc PCM">Bachelor of Science(PCM)</option>
                                               <option value="B.sc Physics(honors)">Bachelor of Science Physics(honors)</option>
                                               <option value="B.sc Chemistry(Honors)">Bachelor of Science Chemistry(honors)</option>
                                               <option value="B.sc Maths(Honors)">Bachelor of Science  Maths(honors)</option> 
                                               <option value="B.sc ZBC">Bachelor of Science(ZBC)</option>
                                               <option value="B.sc Zoology(Honors)">Bachelor of Science Zoology(Honors)</option>
                                               <option value="B.sc Botany(Honors)">Bachelor of Science Botany(Honors)</option>
                                               <option value="B.sc H.S">Bachelor of Science(Home Science)</option>
                                               <option value="B.sc (bio.tech)">Bachelor of Science(Biotechnology)</option>
                                               <option value="B.sc C.S">Bachelor of Science(Computer science)</option>
                                                <option value="D.El.Ed">Diploma in Elementry Education</option>
                                                <option value="PGDC">Post Graducate Diploma in Computer programming</option>
                                                <option value="PGDE-Commerce">Post Graducate Diploma in E-Commerce</option>
                                                <option value="PGD-Biotechnology">Post Graducate Diploma in Biotechnology</option><option value="PGDID">Post Graducate Diploma in Interior Designing</option><option value="MCA">Master of Computer Application </option><option value="MBA">Master of Bussiness Administration</option><option value="PGDCA">Post Graducate Diploma in Computer Application</option>
                                                <option value="M.sc Maths">Master of science(Maths)</option>
                                                <option value="M.sc Physics">Master of science(Physics)</option>
                                                <option value="M.sc Chemistry">Master of science(Chemistry)</option>
                                                <option value="M.sc Zoology">Master of science(Zoology)</option>
                                                <option value="M.sc Botany">Master of science(Botany)</option>
                                                <option value="M.sc Biotechnology">Master of science(Biotechnology)</option>
                                                <option value="M.sc H.S">Master of science(Home science)</option>
                                                <option value="M.COM">Master of Commerce</option>
                                                <option value="M.ed">Master of Education</option>
                                           </select>
                                       </div>
                                </div>
                                

                        
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group" style="float:right;">
                                        <label class="label">Photo</label>
                                        <div style= "border:1px solid black;  height:150px; width: 150px; background: #F5FAFF;">
                                        <img id="output" width="150" height="150"  / style="display:none">
                                    </div>
                                    <input type="file" name="image" id="image" onchange="loadFile(event)" class="form-control" required accept="image/*" / style="width:150px;" required>
                                    <script type="text/javascript">
                                        var loadFile=function(event)
                                        {
                                            var reader= new FileReader();
                                            reader.onload=function()
                                            {
                                                var output = document.getElementById('output');
                                                output.src = reader.result;
                                            };

                                            $('#output').show();
                                            reader.readAsDataURL(event.target.files[0]);
                                        };
                                    </script>
                                        </div>
                                    </div>
                                </div>
                              <br>
                                <!-- <div class="col-sm-6"> -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group" style="float:right;">
                                        <label class="label">Signature</label>
                                        <div style= "border: 1px solid black;  height:120px; width: 150px; background: #F5FAFF;">
                                        <img id="outputs" width="150" height="120"  / style="display:none">
                                    </div>
                                    <input type="file" name="simage" id="simage" onchange="loadFiles(event)" class="form-control" required accept="image/*" / style="width:150px;" required>
                                    <script>
                                        var loadFiles=function(event)
                                        {
                                            var reader= new FileReader();
                                            reader.onload=function()
                                            {
                                                var output = document.getElementById('outputs');
                                                output.src = reader.result;
                                            };

                                            $('#outputs').show();
                                            reader.readAsDataURL(event.target.files[0]);
                                        };
                                    </script>
                                        </div>
                                    </div>
                                </div>

                            </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <label class="lable">Declaration </label>
                        </div>
                        <div class="col-sm-8">
                            <div style="border:2px solid black;padding:10px; text-align: center; border-radius: 25px;">

                            <input type="checkbox" name="declare" required>
                            I declare that I have read and filled the above information, so if the information,so if the information given by me is incorrect, you have  the right to cancel without infoming me.
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                            </div>
                            <div class="col-sm-4">
                                <br>
                                <button class="btn btn-success" name="form_submit">
                                    Submit</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </form>
             </div>
          </div>
    </div>
</body>
</html>