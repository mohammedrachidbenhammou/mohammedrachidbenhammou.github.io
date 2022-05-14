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
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard</title>
  <!-- Favicon -->
  <link rel="icon" href="{{(asset('/'))}}/assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{(asset('/'))}}/assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="{{(asset('/'))}}/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{(asset('/'))}}/assets/css/argon.css?v=1.2.0" type="text/css">
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
              <h6 class="h2 text-white d-inline-block mb-0">Places</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="{{ route('placescs') }}"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{ route('placescs') }}/{{$city->id}}">{{$city->Name}}</a></li>
                  <li class="breadcrumb-item"><a href="{{url()->current()}}">{{$place->name}}</a></li>
                  
                </ol>
              </nav>
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
              <div class="row icon-examples">

                <div class="col-lg-12 col-md-6">
                  <form method="POST" action="{{url()->current()}}/save">
                    {{csrf_field()}}
                    @if(session('status'))
                    <div class="col-lg-12 col-md-6">
                      <div class="alert alert-success">
                        {{ session('status') }}
                        </div>
                      </div>
                    @endif
                    <h2>General info </h2>
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" class="form-control mb-3" value="{{$place->name}}">
                    <label for="category">Category</label>
                    <select name="category" placeholder="Category" class="form-control mb-3"  required>
                      <option value="" disabled>Choose a category</option>
                      @foreach ($categories as $category )
                      <option value="{{$category->id}}" 
                        @if ($category->id == $place->id_cat) selected @endif 
                        >{{$category->nom_cat}}</option>
                      @endforeach
                    </select>

                    <label for="summary">Summary</label>
                  <textarea class="form-control mb-3"
                   placeholder="Make it brief" id="summary" name="summary" rows="2" >{{$place->summary}}</textarea>
                   <label for="desc">Description</label>
                  <textarea class="form-control mb-3"
                   placeholder="Full description" id="desc" name="desc" rows="5" >{{$place->description}}</textarea>
                    <h2>Metadata </h2>

                    <label>Geographical coordinates</label>
                    <div class="input-group">
                      <label for="long"  class="col-lg-6 p-0">Longitude</label>
                      <label for="lat"  class="col-lg-6 ">Latitude</label>
                    </div>
                    <div class="input-group">
                    <input type="text" id="long" name="long" 
                    class="form-control mb-3 col-lg-6 mr-3" placeholder="Longitude" value="{{$meta->long}}">
                    <input type="text" id="lat" name="lat" 
                    class="form-control mb-3 col-lg-6 ml-3" placeholder="Latitude" value="{{$meta->lat}}">
                    </div>
                  <div class="input-group">
                    <label for="price"  class="col-lg-6 p-0">Price for the visit</label>
                    <label for="time"  class="col-lg-6 ">Time to visit</label>
                  </div>
                    <div class="input-group">
                    <input type="text" id="price" name="price" 
                      class="form-control mb-3 col-lg-6 mr-3" placeholder="Price" value="{{$meta->price}}">                                        
                  <input type="text" id="time" name="time" 
                    class="form-control mb-3 col-lg-6 ml-3" placeholder="Time in minutes" value="{{$meta->time}}">
                  </div>  
                  <div class="col-md-12 text-center">
                <a href="{{url()->current()}}/gallery"><div class="btn btn-warning col-5 mr-5">Open gallery</div> </a>    
                  <button type="submit" class="btn btn-primary col-5">Submit changes</button>
                </div>
                  </form>
                  
                   
                  <div>
                      
                   
                    </div>
                  </button>
                </div>
                



                
        </ul>
    </div>
        </div>
      </footer>
    </div>
  </div>
  <!--- popup form for new Category -->
  <style>
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
  right: 50%px;
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
}</script>
  <div class="form-popup" id="myForm">
  <form action="/store-city" method="POST" class="form-container">
    {{ csrf_field() }}

    <h1>Add new city</h1>

    <label for="name"><b>Name : </b></label>
    <input type="text" placeholder="Category name" name="name" required>

    <button type="submit" class="btn">Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
  </form>
</div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{(asset('/'))}}/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="{{(asset('/'))}}/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{(asset('/'))}}/assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="{{(asset('/'))}}/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="{{(asset('/'))}}/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="{{(asset('/'))}}/assets/vendor/clipboard/dist/clipboard.min.js"></script>
  <!-- Argon JS -->
  <script src="{{(asset('/'))}}/assets/js/argon.js?v=1.2.0"></script>
</body>

</html>