<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
  .fakeimg {
    height: 200px;
    background:#59aaa5;
  }
  #header{
    background: #59aaa5;
    height: 100%;
  }
  #name{
    margin-left: 20px;
    background: #59aaa5;
    height: 100%;
    color: white;
  }
 
  
  #cat{
     float: left;
     margin: 5px; 
     width: 40%; 
     height: auto;
  }
  
  
@media screen and (max-width:640px) {
  #cat{
     width: 100%; 
     height: auto;
  }
}  
 #footer{
  border-top: solid #53a7a2;
  border-width: 10px;
  
  
 }
 #logo{
    width: 90%;
    height: auto;
    margin: 1rem;

 }
 #items-nav{
    font-size: 180%;
 }
 #whyUs_container{
    background:#ade70d;
    padding-right: 0;
    padding-left: 0;
 }
 #whyUs_image{
    width:100%;
    height: auto;
    background:#fff;
    padding-right: 0;
    padding-left: 0;
 }
  </style>
</head>
<body  >
<div>
    standby
</div>




  <nav class="navbar navbar-expand-lg   navbar-dark bg-dark ">
    <div class="container-fluid bg-dark">
      <a class="navbar-brand  p-2"  href="#">
        <img id="logo" class="bg-white"src="{{asset('assets/IMG/Construction/C&AConstruction.png')}}" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item m-2">
            <a id="items-nav" class="nav-link active" aria-current="page" href="index.html">About</a>
          </li>
          <li class="nav-item m-2">
            <a id="items-nav" class="nav-link active" aria-current="page" href="portfolio.html">Portfolio</a>
          </li>
          <li class="nav-item m-2">
            <a id="items-nav" class="nav-link active" aria-current="page" href="index.html">Contact</a>
          </li>
          <li class="nav-item m-2">
            <a  id="items-nav" class="nav-link active" aria-current="page" href="index.html">About</a>
          </li>
          <li class="nav-item m-2">
            <a id="items-nav" class="nav-link active" aria-current="page" href="index.html">About</a>
          </li>
          <li class="nav-item m-2">
            <a id="items-nav" class="nav-link active" aria-current="page" href="index.html">About</a>
          </li>



          
          
        </ul>
        
      </div>
    </div>
  </nav>

<div class="container-fluid  " id="whyUs_container">
    <h2  style="color: #ade70d;">About Me</h2>

  

  <div class="container-fluid">
    <img id="whyUs_image" src="{{asset('assets/IMG/Construction/IMGCompletaForm.png')}}" alt="">

  </div>

  <div>
  <div class="container">
    <div class="row text-center">
        <div class="col-md-6 ">
            <h5> Why C&A Construction Services?</h5>
        </div>
        <div class="col-md-6">
            <h5> Why C&A Construction Services?</h5>
        </div>
         

    </div>
  <div class="row">
    
    <div class="col-md-4">
       
        <div class="row">
            <span> test</span>
        </div> 
        <div class="row">
            <span> IDK</span>
        </div>

    </div>
    <div class="col-md-4">
       
        <div class="row">
            <span> test</span>
        </div> 
        <div class="row">
            <span> IDK</span>
        </div>

    </div>
    <div class="col-md-4">
        
        <div class="row">
            <span> test</span>
        </div>
        <div class="row">
            <span> IDK</span>
        </div>
    </div>
  </div>
</div>



  </div>

</div>
</div>


 <footer id="footer" class="footer mt-5 p-4 bg-dark text-white text-center">
        
            <span >@copyright</span>
        
  </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>