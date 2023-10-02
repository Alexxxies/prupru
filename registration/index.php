<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Southern Jade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>

  <body>
    <div class="container form-container">
      <div class=" col-lg-12 mx-auto login-container">
          <div class="row form-header">
              <div class="col-md-2 logocol">
                <img src="assets/images/logajade.png" alt="">
              </div>
              <div class="col-md-10 headcol">
                <h4>Pru Life U.K Southern Jade Life Insurance </h4>
                <p>Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum Lorem ipsum lorem ipsum</p>
                <p class="cinfo">
                    <span><i class="fas fa-phone"></i> +91 987 676 5459</span>
                    <span><i class="fas fa-envelope"></i> adarsvidyakendra@gmail.com</span>
                    <span><i class="fas fa-map-marker-alt"></i> Smart City, Toranto, Canada</span>
                </p>
               
              </div>
          </div>
          <div class="form-body">
            <form action="sample.php" method="post">

            
            <div class="form-title row">
              <h4>Applicant Information</h4>
            </div>

            <div class="form-row row">
              <div class="col-lg-2 col-md-4">
                <label for="">First Name</label>
                <sup class="req">*</sup>
                <span class="indc">:</span>
              </div>
              <div class="col-lg-4 col-md-8">
                <input type="text" name="firstname" placeholder="Enter First Name" class="form-control form-control-sm">
              </div>
              <div class="col-lg-2 col-md-4">
                <label for="">Middle Name </label>
                <sup class="req">*</sup>
                <span class="indc">:</span>
              </div>
              <div class="col-lg-4 col-md-8">
                <input type="text" name="middlename" placeholder="Enter Middle Name" class="form-control form-control-sm">
              </div>
            </div>

          <div class="form-row row">
              <div class="col-lg-2 col-md-4">
                <label for="">Last Name</label>
                <sup class="req">*</sup>
                 <span class="indc">:</span>
              </div>
              <div class="col-lg-4 col-md-8">
                <input type="text" name="lastname" placeholder="Enter Last Name" class="form-control form-control-sm">
              </div>
              <div class="col-lg-2 col-md-4">
                <label for="">Gender</label>
                 <sup class="req">*</sup>
                  <span class="indc">:</span>
              </div>
              <div class="col-lg-4 col-md-8 pt-1">
                <input type="radio" name="gender" value="male"> Male &nbsp;&nbsp; 
                <input type="radio" name="gender" value="female"> Female &nbsp;&nbsp; 
              </div>
          </div>

                 
            
          

            <div class="form-row row">
               <div class="col-lg-2 col-md-4">
                <label for="">Date of Birth</label>
                 <sup class="req">*</sup>
                 <span class="indc">:</span>
              </div>
              <div class="col-lg-4 col-md-8">
                <input type="date" name="birthday" placeholder="Enter Date of Birth" class="form-control form-control-sm">
              </div>


                <div class="col-lg-2 col-md-4">
                 <label for="">Birth Place</label>
                  <sup class="req">*</sup>
                  <span class="indc">:</span>
               </div>
               <div class="col-lg-4 col-md-8">
                 <input type="text" name="birthplace" placeholder="Enter Date of Birth" class="form-control form-control-sm">
               </div>
            </div>
            <div class="form-row row">
              <div class="col-lg-2 col-md-4">
                <label for="">SSS Number</label>
                 <span class="indc">:</span>
              </div>
              <div class="col-lg-4 col-md-8">
                <input type="text" name="sss" placeholder="Enter SSS Number" class="form-control form-control-sm">
              </div>

              <div class="col-lg-2 col-md-4">
                <label for="">TIN Number</label>
                 <span class="indc">:</span>
              </div>
              <div class="col-lg-4 col-md-8">
                <input type="text" name="tin" placeholder="Enter TIN Number" class="form-control form-control-sm">
              </div>
            </div>

           

            <div class="form-row row">
              <div class="col-lg-2 col-md-4" id="civilstatus">
                <label for="">Civil Status</label>
                 <sup class="req">*</sup>
                  <span class="indc">:</span>
              </div>
              <div class="col-lg-4 col-md-8 pt-1">
                <input type="radio" name="civil" value="single" id="singleRadio" > Single &nbsp;&nbsp;
                <input type="radio" name="civil" value="married" id="marriedRadio" > Married &nbsp;&nbsp;
                <input type="radio" name="civil" value="widow" id="widowRadio" > Widow 
              </div>
            </div>

                
            <div class="form-row row" id="married"> 
             
                <div class="col-lg-2 col-md-4">
                  <label for="">Spouse Fullname</label>
                  <sup class="req">*</sup>
                  <span class="indc">:</span>
                </div>
                <div class="col-lg-4 col-md-8">
                  <input type="text" name="spouse" placeholder="Enter Spouse Complete Name" class="form-control form-control-sm">
                </div>

                <div class="col-lg-2 col-md-4">
                  <label for="">Maiden Name</label>
                  <sup class="req">*</sup>
                  <span class="indc">:</span>
                </div>
                <div class="col-lg-4 col-md-8">
                  <input type="text" name="maiden" placeholder="Enter Maiden Name" class="form-control form-control-sm">
                </div>
            </div>

            <div class="form-title row">
              <h4>Contact Information</h4>
            </div>

            <div class="form-row row">
                <div class="col-lg-2 col-md-4">
                <label for="">Email Address</label>
                <sup class="req">*</sup>
                 <span class="indc">:</span>
              </div>
              <div class="col-lg-4 col-md-8">
                <input type="email" name="email" placeholder="example@gmail.com" class="form-control form-control-sm">
              </div>
               <div class="col-lg-2 col-md-4">
                <label for="">PLUK Email </label>
                <sup class="req">*</sup>
                 <span class="indc">:</span>
              </div>
              <div class="col-lg-4 col-md-8">
                <input type="email" name="pluk" placeholder="plukexample@gmail.com" class="form-control form-control-sm">
              </div>
            </div>

            <div class="form-row row">
                <div class="col-lg-2 col-md-4">
                <label for="">Contact Number</label>
                 <sup class="req">*</sup>
                 <span class="indc">:</span>
              </div>
              <div class="col-lg-4 col-md-8">
                <input type="text" name="contact" placeholder="Enter Mobile Numbber" class="form-control form-control-sm">
              </div>

              <div class="col-lg-2 col-md-4">
                <label for="">ZIP Code</label>
                <sup class="req">*</sup>
                 <span class="indc">:</span>
              </div>
              <div class="col-lg-4 col-md-8">
                <input type="text" name="zip" placeholder="Enter Zip Code" class="form-control form-control-sm">
              </div>
            </div>
            
        <div class="form-row row">
          <div class="col-md-4 mb-3">
              <label class="form-label">Region <sup class="req">*</sup> </label>
              <select class="form-control form-control-sm" id="region"></select>
              <input type="hidden" class="form-control form-control-sm" name="region" id="region-text" required>
          </div>
          <div class="col-md-4 mb-3">
              <label class="form-label">Province <sup class="req">*</sup> </label>
              <select class="form-control form-control-sm" id="province"></select>
              <input type="hidden" class="form-control form-control-sm" name="province" id="province-text" required>
          </div>
          <div class="col-md-4 mb-3">
              <label class="form-label">City / Municipality <sup class="req">*</sup> </label>
              <select class="form-control form-control-sm" id="city"></select>
              <input type="hidden" class="form-control form-control-sm" name="city" id="city-text" required>
          </div>
        </div>
        <div class="form-row row">
          <div class="col-md-1 mb-3">
              <label class="form-label">Barangay:<sup class="req">*</sup></label>
          </div>
          <div class="col-md-4">
            <select class="form-control form-control-sm" id="barangay"></select>
            <input type="hidden" class="form-control form-control-sm" name="barangay" id="barangay-text" required>
          </div>
  
          <div class="col-lg-3 col-md-0">
            <label for="">&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lot Number/Street Name:</label>
            <sup class="req">*</sup>
          </div>
          <div class="col-lg-4 col-md-8 pt-1">
            <input type="text" class="form-control form-control-sm" name="lot" id="lot" required>
          </div>
        </div>
               
        <div class="form-title row">
              <h4>Recruiter Information</h4>
            </div>

            <div class="form-row row">
              <div class="col-lg-2 col-md-4">
                <label for="">Agent Fullname</label>
                <sup class="req">*</sup>
                <span class="indc">:</span>
              </div>
              <div class="col-lg-4 col-md-8">
                <input type="text" name="agentname" placeholder="Enter Agent Fullname" class="form-control form-control-sm">
              </div>
            
              
              <div class="col-lg-2 col-md-4">
                <label for="">Agent's Code</label>
                <sup class="req">*</sup>
                <span class="indc">:</span>
              </div>
              <div class="col-lg-4 col-md-8">
                <input type="text" name="agentcode" placeholder="Enter Agent's Code" class="form-control form-control-sm">
              </div>

             <div class="form-title row">
              <h4>Incase of Emergency</h4>
            </div>


            <div class="form-row row">
              <div class="col-lg-2 col-md-4">
                <label for="">First Name</label>
                <sup class="req">*</sup>
                <span class="indc">:</span>
              </div>
              <div class="col-lg-4 col-md-8">
                <input type="text" name="efirst" placeholder="Enter First Name" class="form-control form-control-sm">
              </div>
              <div class="col-lg-2 col-md-4">
                <label for="">Middle Name </label>
                <sup class="req">*</sup>
                <span class="indc">:</span>
              </div>
              <div class="col-lg-4 col-md-8">
                <input type="text" name="emiddle" placeholder="Enter Middle Name" class="form-control form-control-sm">
              </div>
            </div>

          <div class="form-row row">
              <div class="col-lg-2 col-md-4">
                <label for="">Last Name</label>
                <sup class="req">*</sup>
                 <span class="indc">:</span>
              </div>
              <div class="col-lg-4 col-md-8">
                <input type="text" name="elast" placeholder="Enter Last Name" class="form-control form-control-sm">
              </div>
              <div class="col-lg-2 col-md-4">
                <label for="">Relationship</label>
                <sup class="req">*</sup>
                <span class="indc">:</span>
              </div>
              <div class="col-lg-4 col-md-8">
                <input type="text" name="rel" placeholder="Enter Relationship to Applicant" class="form-control form-control-sm">
              </div>
            </div>
              
             <div class="form-row row">
                <div class="col-lg-2 col-md-4">
                <label for="">Contact Number</label>
                 <sup class="req">*</sup>
                 <span class="indc">:</span>
              </div>
              <div class="col-lg-4 col-md-8">
                <input type="text" name="econtact" placeholder="Enter Contact Numbber" class="form-control form-control-sm">
              </div>
               <div class="col-lg-2 col-md-4">
                <label for=""> Address</label>
                 <sup class="req">*</sup>
                  <span class="indc">:</span>
              </div>
               <div class="col-lg-4 col-md-8">
                <input type="text" name="eaddress" placeholder="Enter Address" class="form-control form-control-sm">
              </div>
            </div>

                   
            <div class="form-title row">
              <h4>Employment History</h4>
            </div>
            <div class="form-row row">
              <div class="col-lg-3 col-md-0">
                <label for="">Are you a Government Employee?<sup class="req">*</sup></label>
              </div>
              <div class="col-lg-2 col-md-8">
                <input type="radio" name="gov" value="yes" id="govyesRadio"> Yes &nbsp;&nbsp;
                <input type="radio" name="gov" value="no" id="govnoRadio"> No
              </div>
              <div class="col-lg-2" id="govUploadLabel">
                <label for="formFile" class="form-label">Upload Certificate</label>
                <span class="indc">:</span>
              </div>
              <div class="col-lg-4" id="govUpload">
                <input class="form-control" name="upload" type="file" id="formFile">
              </div>
            </div>

            <div class="form-row row" id="govForm">
                <div class="col-lg-2 col-md-4">
                <label for="">Company Name </label>
                 <sup class="req">*</sup>
                 <span class="indc">:</span>
              </div>
              <div class="col-lg-4 col-md-8">
                <input type="text" name="companyname" placeholder="Enter Company Name " class="form-control form-control-sm" >
              </div>

              <div class="col-lg-2 col-md-4">
                <label for="">Employee's Position </label>
                 <sup class="req">*</sup>
                 <span class="indc">:</span>
              </div>
              <div class="col-lg-4 col-md-8">
                <input type="text" name="position" placeholder="Enter your Position " class="form-control form-control-sm" >
              </div>

            </div>


             <div class="form-row row justify-content-center">
               <div class="col-lg-2 col-md-8 text-center">
               <button type="submit" name="submit" class="btn btn-lg btn-primary">Submit Form</button>
              </div>
            </div>
          

          </div>
          </form>
      </div>
    </div> 

 <!--JQuery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
  <script src="ph-address-selector.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
      $(document).ready(function () {
          const marriedRadio = $('#marriedRadio');
          const widowRadio = $('#widowRadio');
          const marriedDiv = $('#married');
          const radioButtons = $('input[name="civil"]');

          const radioButtons2 = $('input[name="gov"]');
          const yesRadio = $('#govyesRadio');
          const uploadLabelDiv = $('#govUploadLabel');
          const uploadDiv = $('#govUpload');
          const govDiv = $('#govForm');

          marriedDiv.hide();
          uploadDiv.hide();
          uploadLabelDiv.hide();
          govDiv.hide();

          radioButtons.change(function () {
              if (marriedRadio.is(':checked')) {
                  marriedDiv.show();
              } else {
                  marriedDiv.hide();
              }
          });

          radioButtons2.change(function (){
              if(yesRadio.is(':checked')){
                uploadDiv.show();
                uploadLabelDiv.show();
                govDiv.show();
              }else{
                uploadDiv.hide();
                uploadLabelDiv.hide();
                govDiv.hide();
              }
          });
      });
  </script> 
  </body>
  </html