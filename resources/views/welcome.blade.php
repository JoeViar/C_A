<!DOCTYPE html>
<html lang="en">
<head>
  <title>On dev</title>
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
 #logo_whyUsR{
  width: 15%;
  height: auto;
  display: block;

  margin: auto;    
  display: block
  
 }
 #logo_whyUs{
  width: 25%;
  height: auto;
  display: block;

 }
 
 @media (max-width: 767px) {
    .carousel-inner .carousel-item > div {
        display: none;
    }
    .carousel-inner .carousel-item > div:first-child {
        display: block;
    }
}

.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
    display: flex;
}

/* medium and up screens */
@media (min-width: 768px) {
    
    .carousel-inner .carousel-item-end.active,
    .carousel-inner .carousel-item-next {
      transform: translateX(25%);
    }
    
    .carousel-inner .carousel-item-start.active, 
    .carousel-inner .carousel-item-prev {
      transform: translateX(-25%);
    }
}

.carousel-inner .carousel-item-end,
.carousel-inner .carousel-item-start { 
  transform: translateX(0);
}
#responsive-carropusel{

}
@media screen only and (max-width:500) {
  #responsive-carropusel{
   display: none;
} 
}
    /* Styles for both divs */
.div-mobile {
  display: block; /* Initially shown on mobile */
}    .div-monitor {
  display: none; /* Initially hidden on mobile */
}    /* Media query for screens larger than 768px (adjust as needed) */
@media (min-width: 769px) {
.div-mobile {
  display: none; /* Hide on larger screens */
}
.div-monitor {
  display: block; /* Show on larger screens */
        }
    }
  #cardImg{
   width:1000px;
   height: 150px;
  }
#OurServicesBtn{
  background-color: #8e9440;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 12px;
  font-size: 16px;
  margin: 4px 2px;
}
#OurServicesBtnCS{
  background-color: #ffffff;
  border: none;
  color: #8e9440;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 12px;
  font-size: 16px;
  margin: 4px 2px;
}
  </style>
</head>
<body>
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
    <!-- <img id="whyUs_image" src="{{asset('assets/IMG/Construction/IMGCompletaForm.png')}}" alt=""> -->
    <video width="100%" height="auto" autoplay muted>>
      <source src="{{URL::asset('assets/IMG/Construction/HomeBannerVideo.mp4')}}" type="video/mp4">
    Your browser does not support the video tag.
    </video>
  </div>

  <div>
  <div class="container">
    <div class="row text-center">
        <!-- <div class="col-md-6 "> -->
            <!-- <h5> Why C&A Construction Services?</h5> -->
        <!-- </div> -->
        <!-- <div class="col-md-6"> -->
            <!-- <h5> Why C&A Construction Services?</h5> -->
        <!-- </div> -->
    
    <div class="div-mobile ">
    <h4>Why C&A Construction Services? </h4> <h4>We make a difference</h4>
        
      

        
        </div>

        <div class="div-monitor">
        <!-- Content for larger screens (monitors) -->

          <h4>Why C&A Construction Services? We make a difference</h4>
        </div>

    </div>
  <div class="row">

    <div class="col-md-4 ">

        <div class="row ">
        <div class="div-mobile flex justify-content-center">
        <!-- Content for mobile screens -->
          <img  id="logo_whyUsR" src="{{asset('assets/IMG/Construction/clock.png')}}" alt="">

        
        </div>

        <div class="div-monitor">
        <!-- Content for larger screens (monitors) -->
          <img  id="logo_whyUs" src="{{asset('assets/IMG/Construction/clock.png')}}" alt="">
        </div>
           
        </div>
        <div class="row">
            <h5>Premium Quality Services & Materials   </h5>
        </div>
        <div class="row">
            <span> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis, soluta consectetur mollitia quas voluptatem illum cumque exercitationem dolore voluptates minima quaerat a assumenda laboriosam atque vero qui voluptatum eveniet nam!</span>
        </div>

    </div>
    <div class="col-md-4">

        <div class="row">
          <div class="div-mobile flex justify-content-center">
          <!-- Content for mobile screens -->
            <img  id="logo_whyUsR" src="{{asset('assets/IMG/Construction/Check.png')}}" alt="">
                
          </div>
                <div class="div-monitor">
          <!-- Content for larger screens (monitors) -->
            <img  id="logo_whyUs" src="{{asset('assets/IMG/Construction/Check.png')}}" alt="">
          </div>
           
        </div>
        <div class="row">
            <h5>Honest & Transparent Pricing </h5>
        </div>
        <div class="row">
            <span> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis, soluta consectetur mollitia quas voluptatem illum cumque exercitationem dolore voluptates minima quaerat a assumenda laboriosam atque vero qui voluptatum eveniet nam!</span>
        </div>

    </div>
    <div class="col-md-4">

    <div class="row">
          <div class="div-mobile flex justify-content-center">
          <!-- Content for mobile screens -->
            <img  id="logo_whyUsR" src="{{asset('assets/IMG/Construction/Cert.png')}}" alt="">
                
          </div>
                <div class="div-monitor">
          <!-- Content for larger screens (monitors) -->
            <img  id="logo_whyUs" src="{{asset('assets/IMG/Construction/Cert.png')}}" alt="">
          </div>
        </div>
        <div class="row">
            <h5>One-Time Policy</h5>
        </div>
        <div class="row">
            <span> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis, soluta consectetur mollitia quas voluptatem illum cumque exercitationem dolore voluptates minima quaerat a assumenda laboriosam atque vero qui voluptatum eveniet nam!</span>
        </div>
    </div>
  </div>
</div>



  </div>

</div>
<div class="container div-monitor">
  
  <div class="row text-center">
    <h4>Our Services</h4>

  </div>

  <div class="row p-0 m-0">
    <div class="col-4 m-0">
       <div class="card-img" style="background: #ade70d; color:#8e9440; ">
                            
                            <div class="justify-content-center">
                            <img  id="cardImg" src="{{asset('assets/IMG/Construction/celanning.png')}}"  class="img-fluid" alt="">
                            <div class="container">
                             <div class="row text-center">
                              <h4 class="mx-0"> Cleaning Services</h4>
                            </div>
                            <div class="row">
                              <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic doloremque fugit iusto rem, consequuntur nemo repellat dolorem vitae, suscipit eligendi expedita odio eius et. Saepe rem debitis quibusdam temporibus iure.</span>
                            </div>
                            </div>

                            <button  id="OurServicesBtnCS" type="button">Request a quote</button>

                            </div>
                           </div>
    </div>
    <div class="col-4 m-0">
       <div class="card-img" style="background: #ade70d; color:#8e9440; ">
                            
                            <div class="justify-content-center">
                            <img  id="cardImg" src="{{asset('assets/IMG/Construction/celanning.png')}}"  class="img-fluid" alt="">
                            <div class="container">
                             <div class="row text-center">
                              <h4 class="mx-0"> Cleaning Services</h4>
                            </div>
                            <div class="row">
                              <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic doloremque fugit iusto rem, consequuntur nemo repellat dolorem vitae, suscipit eligendi expedita odio eius et. Saepe rem debitis quibusdam temporibus iure.</span>
                            </div>
                            </div>

                            <button  id="OurServicesBtnCS" type="button">Request a quote</button>

                            </div>
                           </div>
    </div>
    <div class="col-4 m-0">
       <div class="card-img" style="background: #ade70d; color:#8e9440; ">
                            
                            <div class="justify-content-center">
                            <img  id="cardImg" src="{{asset('assets/IMG/Construction/celanning.png')}}"  class="img-fluid" alt="">
                            <div class="container">
                             <div class="row text-center">
                              <h4 class="mx-0"> Cleaning Services</h4>
                            </div>
                            <div class="row">
                              <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic doloremque fugit iusto rem, consequuntur nemo repellat dolorem vitae, suscipit eligendi expedita odio eius et. Saepe rem debitis quibusdam temporibus iure.</span>
                            </div>
                            </div>

                            <button  id="OurServicesBtnCS" type="button">Request a quote</button>

                            </div>
                           </div>
    </div>

  </div> 

  <div class="row p-0 m-0">
    <div class="col-4 m-0">
       <div class="card-img" style="background: #ade70d; color:#8e9440; ">
                            
                            <div class="justify-content-center">
                            <img  id="cardImg" src="{{asset('assets/IMG/Construction/celanning.png')}}"  class="img-fluid" alt="">
                            <div class="container">
                             <div class="row text-center">
                              <h4 class="mx-0"> Cleaning Services</h4>
                            </div>
                            <div class="row">
                              <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic doloremque fugit iusto rem, consequuntur nemo repellat dolorem vitae, suscipit eligendi expedita odio eius et. Saepe rem debitis quibusdam temporibus iure.</span>
                            </div>
                            </div>

                            <button  id="OurServicesBtnCS" type="button">Request a quote</button>

                            </div>
                           </div>
    </div>
    <div class="col-4 m-0">
       <div class="card-img" style="background: #ade70d; color:#8e9440; ">
                            
                            <div class="justify-content-center">
                            <img  id="cardImg" src="{{asset('assets/IMG/Construction/celanning.png')}}"  class="img-fluid" alt="">
                            <div class="container">
                             <div class="row text-center">
                              <h4 class="mx-0"> Cleaning Services</h4>
                            </div>
                            <div class="row">
                              <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic doloremque fugit iusto rem, consequuntur nemo repellat dolorem vitae, suscipit eligendi expedita odio eius et. Saepe rem debitis quibusdam temporibus iure.</span>
                            </div>
                            </div>

                            <button  id="OurServicesBtnCS" type="button">Request a quote</button>

                            </div>
                           </div>
    </div>
    <div class="col-4 m-0">
       <div class="card-img" style="background: #ade70d; color:#8e9440; ">
                            
                            <div class="justify-content-center">
                            <img  id="cardImg" src="{{asset('assets/IMG/Construction/celanning.png')}}"  class="img-fluid" alt="">
                            <div class="container">
                             <div class="row text-center">
                              <h4 class="mx-0"> Cleaning Services</h4>
                            </div>
                            <div class="row">
                              <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic doloremque fugit iusto rem, consequuntur nemo repellat dolorem vitae, suscipit eligendi expedita odio eius et. Saepe rem debitis quibusdam temporibus iure.</span>
                            </div>
                            </div>

                            <button  id="OurServicesBtnCS" type="button">Request a quote</button>

                            </div>
                           </div>
    </div>

  </div> 

  </div>
 

</div>

<div class="container">
  <div class="row">
    <div class="col-6 bg-dark text-white ">
      <div class="row p-3">
          <h4>Territory Covered</h4>
      </div>
      <div class="row p-5">
        <p>
          Our expirience and quality have led us to be reccomended to work in beutiful cities such as:
        </p>
        <ul>
          <li>Anaheim</li>
          <li>Encinitas</li>
          <li>Malibu</li>
          <li>Long beach</li>
        </ul>
        <p>Among Othersa</p>
      </div>

    </div>
    <div class="col-6 m-0 ">
      <!-- <img  id="cardImg" src="{{asset('assets/IMG/Construction/MapConstruction.png')}}"  class="img-fluid m-0" alt=""> -->


    </div>
  </div>
</div>

   

<div id="responsive-carropusel" class="container  div-mobile">
  <div class="row text-center">
    <h3 class="my-2"> Our Services</h3>
  </div>
  <div class="container text-center my-3">

    <div class="row mx-auto my-auto justify-content-center">
        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img" style="background: #e5e1d8; color:#8e9440; ">
                            
                             <div class="justify-content-center">
                             <img  id="cardImg" src="{{asset('assets/IMG/Construction/Paint.png')}}"  class="img-fluid" alt="">
                              <div class="row">
                               <h4> Painting</h4>
                             </div>
                             <div class="row">
                               <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic doloremque fugit iusto rem, consequuntur nemo repellat dolorem vitae, suscipit eligendi expedita odio eius et. Saepe rem debitis quibusdam temporibus iure.</span>
                             </div>

                             <button  id="OurServicesBtn" type="button">Request a quote</button>

                             </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                    <div class="card">
                    <div class="card-img" style="background: #f5f5f5; color:#8e9440; ">
                            
                            <div class="justify-content-center">
                              <img  id="cardImg" src="{{asset('assets/IMG/Construction/drywell.png')}}"  class="img-fluid" alt="">
                             <div class="row">
                              <h4> Drywall</h4>
                            </div>
                            <div class="row">
                              <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic doloremque fugit iusto rem, consequuntur nemo repellat dolorem vitae, suscipit eligendi expedita odio eius et. Saepe rem debitis quibusdam temporibus iure.</span>
                            </div>

                            <button  id="OurServicesBtn" type="button">Request a quote</button>

                            </div>
                           </div>
                            
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                    <div class="card">
                            <div class="card-img" style="background: #e5e1d8; color:#8e9440; ">
                            
                             <div class="justify-content-center">
                             <img  id="cardImg" src="{{asset('assets/IMG/Construction/Framing.png')}}"  class="img-fluid" alt="">
                              <div class="row">
                               <h4> Framing</h4>
                             </div>
                             <div class="row">
                               <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic doloremque fugit iusto rem, consequuntur nemo repellat dolorem vitae, suscipit eligendi expedita odio eius et. Saepe rem debitis quibusdam temporibus iure.</span>
                             </div>

                             <button  id="OurServicesBtn" type="button">Request a quote</button>

                             </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                    <div class="card">
                            <div class="card-img" style="background: #f5f5f5; color:#8e9440; ">
                            
                             <div class="justify-content-center">
                             <img  id="cardImg" src="{{asset('assets/IMG/Construction/FloorInst.png')}}"  class="img-fluid" alt="">
                              <div class="row">
                               <h4> Floor Installation </h4>
                             </div>
                             <div class="row">
                               <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic doloremque fugit iusto rem, consequuntur nemo repellat dolorem vitae, suscipit eligendi expedita odio eius et. Saepe rem debitis quibusdam temporibus iure.</span>
                             </div>

                             <button  id="OurServicesBtn" type="button">Request a quote</button>

                             </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                    <div class="card">
                            <div class="card-img" style="background: #e5e1d8; color:#8e9440; ">
                            
                             <div class="justify-content-center">
                             <img  id="cardImg" src="{{asset('assets/IMG/Construction/walls.png')}}"  class="img-fluid" alt="">
                              <div class="row">
                               <h4> Decorative Walls</h4>
                             </div>
                             <div class="row">
                               <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic doloremque fugit iusto rem, consequuntur nemo repellat dolorem vitae, suscipit eligendi expedita odio eius et. Saepe rem debitis quibusdam temporibus iure.</span>
                             </div>

                             <button  id="OurServicesBtn" type="button">Request a quote</button>

                             </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                    <div class="card">
                            <div class="card-img" style="background: #ade70d; color:#8e9440; ">
                            
                             <div class="justify-content-center">
                             <img  id="cardImg" src="{{asset('assets/IMG/Construction/cleanning.png')}}"  class="img-fluid" alt="">
                              <div class="row">
                               <h4> Cleaning Services</h4>
                             </div>
                             <div class="row">
                               <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic doloremque fugit iusto rem, consequuntur nemo repellat dolorem vitae, suscipit eligendi expedita odio eius et. Saepe rem debitis quibusdam temporibus iure.</span>
                             </div>

                             <button  id="OurServicesBtnCS" type="button">Request a quote</button>

                             </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</div>



</div>



 <footer id="footer" class="footer mt-1 p-4 bg-dark text-white text-center">

            <span >@copyright</span>

  </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script>
let items = document.querySelectorAll('.carousel .carousel-item')

items.forEach((el) => {
    const minPerSlide = 4
    let next = el.nextElementSibling
    for (var i=1; i<minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
        	next = items[0]
      	}
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})</script>
</body>
</html>