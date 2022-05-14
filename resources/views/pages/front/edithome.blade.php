<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<!DOCTYPE html>
<html>
  @php
    $boom=  Thumbnail::src(public_path("\storage\\front\\".explode('/',$prefs->logo_uri)[1]))
      ->smartcrop(450, 37)->url();         
      $rPart=substr($boom,strpos($boom,"storage",0) ); // bcdef
      $lPart=substr($boom,0,strpos($boom,"storage",0)-1 );
      $fullThumnail=$lPart.$rPart;
       @endphp
      
      
      



<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
@include('layouts.navbars.sidebar')
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
@include('layouts.header')    
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Homepage Settings</h6>
              </div>
           </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row justify-content-center">
 
        <div class=" col ">
          <div class="card">
            <div class="card-body">

              <br>


              <div class="table-responsive">
                <div>
                  @if(session('status'))
                  <div class="col-lg-12 col-md-6">
                    <div class="alert alert-success">
                      {{ session('status') }}
                      </div>
                    </div>
                  @endif
                <form method="POST"  enctype="multipart/form-data">
                  {{ csrf_field() }} 
         


                    <label class="form-check-label " > Show caroussel ? </label>
                    <input type="checkbox" name="showCar" 
                    @if ($prefs->caroussel_show == 1 ) 
                    checked
                    @endif
                    
                    id="showCar"><br>

                    
                    <label for="adress"> Slide 1 :  </label>
                    <input class="form-control mb-3" name="slide1" placeholder="What do you wanna show ?"
                    value="{{$prefs->slide_1}}"
                    >
                    
                    <label for="phone"> Slide 2 :</label>
                    <input class="form-control mb-3" name="slide2" id="phone" placeholder="What do you wanna show ?" value="{{$prefs->slide_2}}">

                    <label for="phone"> Slide 3 :</label>
                    <input class="form-control mb-3" name="slide3" placeholder="What do you wanna show ?" value="{{$prefs->slide_3}}">

                    <label for="app"> Phone app Link </label>
                    <input class="form-control mb-3" name="app" id="app" placeholder="Phone app Link"
                    
                    value="{{$prefs->app_link}}"
                    >
                    <div class=" d-flex justify-content-center">
                        <button class="btn btn-primary col-5"> Submit </button>
                    </div>
                    </form>



                  <table id="myTable" class="table align-items-center">

                      <tbody class="list">
                          

              <div class="row icon-examples">

            

                
              </div>
                      </tbody>
                  </table>
                  


                
        </ul>
    </div>
        </div>
      </footer>
    </div>
  </div>
  <!--- popup form for new Category -->
  <style>
    #myInput {
  background-image: url('/imgs/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}
    {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  top: 20%;
  right: 30%;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
<script>
  function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

</script>

  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="../assets/vendor/clipboard/dist/clipboard.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>