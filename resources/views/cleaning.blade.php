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
  background: #fb8500;



 }
 #logo{
    width: 50%;
    height: auto;


 }
 #logoDiv{
  width: 300px;
  height: auto;
  display: flex;
    justify-content: center;

 }
 #logofooter{
    width: 50%;
    height: auto;
    background: #000000;
 }
 #items-nav{
    font-size: 180%;
 }
 #whyUs_container{
   background-image: url("assets/IMG/Cleaning/WhyUSBG.png");
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
  

 }
 #logo_whyUs{
  width: 75%;
  height: auto;
  

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
#Capa_1{
  width:25%;
  height:auto;
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
  .btn{

    color:#fff;
    background:#fb8500;

    width:50%;
    height: auto;
  }
  #cardImg{
   width:1000px;
   height: 150px;
  }
#OurServicesBtn{
  background-color: #0081e9;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 12px;
  font-size: 16px;
  margin-bottom: 1rem;
}
#OurServicesBtnCS{
  background-color: #ffffff;
  border: none;
  color: #0081e9;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 12px;
  font-size: 16px;
  margin: 4px 2px;
}
#territoryCovered{
  width:100%;
  height: 100%;
}
#territoryCoveredText{
  color: #fb8500;
  background: #25282b;
  border: 1px  solid #25282b;
}
#colOurStory{
  border-left: 1px solid gray;
}
@media screen only and (max-width:500) {

 #colOurStory{
  border-left: 0px solid white;

}
}
#storyImg{
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
#partnerImg{
  width:30%;
  height: auto;
}
#partnerImg2{
  width:70%;
  height: auto;
}
.section-padding {
    padding: 45px 0;
}
.section-dark {
    background-color: #f9f9f9;
    z-index: -2;
}
.form-control,
.form-group .form-control {
    border: 0;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#009688), to(#009688)), -webkit-gradient(linear, left top, left bottom, from(#D2D2D2), to(#D2D2D2));
    background-image: -webkit-linear-gradient(#009688, #009688), -webkit-linear-gradient(#D2D2D2, #D2D2D2);
    background-image: -o-linear-gradient(#009688, #009688), -o-linear-gradient(#D2D2D2, #D2D2D2);
    background-image: linear-gradient(#009688, #009688), linear-gradient(#D2D2D2, #D2D2D2);
    -webkit-background-size: 0 2px, 100% 1px;
    background-size: 0 2px, 100% 1px;
    background-repeat: no-repeat;
    background-position: center bottom, center -webkit-calc(100% - 1px);
    background-position: center bottom, center calc(100% - 1px);
    background-color: rgba(0, 0, 0, 0);
    -webkit-transition: background 0s ease-out;
    -o-transition: background 0s ease-out;
    transition: background 0s ease-out;
    float: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-radius: 0
}

.form-control::-moz-placeholder,
.form-group .form-control::-moz-placeholder {
    color: #BDBDBD;
    font-weight: 400
}

.form-control:-ms-input-placeholder,
.form-group .form-control:-ms-input-placeholder {
    color: #BDBDBD;
    font-weight: 400
}

.form-control::-webkit-input-placeholder,
.form-group .form-control::-webkit-input-placeholder {
    color: #BDBDBD;
    font-weight: 400
}

.form-control[disabled],
.form-control[readonly],
.form-group .form-control[disabled],
.form-group .form-control[readonly],
fieldset[disabled] .form-control,
fieldset[disabled] .form-group .form-control {
    background-color: rgba(0, 0, 0, 0)
}

.form-control[disabled],
.form-group .form-control[disabled],
fieldset[disabled] .form-control,
fieldset[disabled] .form-group .form-control {
    background-image: none;
    border-bottom: 1px dotted #D2D2D2
}

.form-group {
    position: relative
}

.form-group.label-floating label.control-label,
.form-group.label-placeholder label.control-label,
.form-group.label-static label.control-label {
    position: absolute;
    pointer-events: none;
    -webkit-transition: .3s ease all;
    -o-transition: .3s ease all;
    transition: .3s ease all
}

.form-group.label-floating label.control-label {
    will-change: left, top, contents
}

.form-group.label-placeholder:not(.is-empty) label.control-label {
    display: none
}

.form-group .help-block {
    position: absolute;
    display: none
}

.form-group.is-focused .form-control {
    outline: 0;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#009688), to(#009688)), -webkit-gradient(linear, left top, left bottom, from(#D2D2D2), to(#D2D2D2));
    background-image: -webkit-linear-gradient(#009688, #009688), -webkit-linear-gradient(#D2D2D2, #D2D2D2);
    background-image: -o-linear-gradient(#009688, #009688), -o-linear-gradient(#D2D2D2, #D2D2D2);
    background-image: linear-gradient(#009688, #009688), linear-gradient(#D2D2D2, #D2D2D2);
    -webkit-background-size: 100% 2px, 100% 1px;
    background-size: 100% 2px, 100% 1px;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-transition-duration: .3s;
    -o-transition-duration: .3s;
    transition-duration: .3s
}

.form-group.is-focused .form-control .material-input:after {
    background-color: #009688
}

.form-group.is-focused label,
.form-group.is-focused label.control-label {
    color: #009688
}

.form-group.is-focused.label-placeholder label,
.form-group.is-focused.label-placeholder label.control-label {
    color: #BDBDBD
}

.form-group.is-focused .help-block {
    display: block
}

.form-group.has-warning .form-control {
    -webkit-box-shadow: none;
    box-shadow: none
}

.form-group.has-warning.is-focused .form-control {
    background-image: -webkit-gradient(linear, left top, left bottom, from(#ff5722), to(#ff5722)), -webkit-gradient(linear, left top, left bottom, from(#D2D2D2), to(#D2D2D2));
    background-image: -webkit-linear-gradient(#ff5722, #ff5722), -webkit-linear-gradient(#D2D2D2, #D2D2D2);
    background-image: -o-linear-gradient(#ff5722, #ff5722), -o-linear-gradient(#D2D2D2, #D2D2D2);
    background-image: linear-gradient(#ff5722, #ff5722), linear-gradient(#D2D2D2, #D2D2D2)
}

.form-group.has-warning .help-block,
.form-group.has-warning label.control-label {
    color: #ff5722
}

.form-group.has-error .form-control {
    -webkit-box-shadow: none;
    box-shadow: none
}

.form-group.has-error .help-block,
.form-group.has-error label.control-label {
    color: #f44336
}

.form-group.has-success .form-control {
    -webkit-box-shadow: none;
    box-shadow: none
}

.form-group.has-success.is-focused .form-control {
    background-image: -webkit-gradient(linear, left top, left bottom, from(#4caf50), to(#4caf50)), -webkit-gradient(linear, left top, left bottom, from(#D2D2D2), to(#D2D2D2));
    background-image: -webkit-linear-gradient(#4caf50, #4caf50), -webkit-linear-gradient(#D2D2D2, #D2D2D2);
    background-image: -o-linear-gradient(#4caf50, #4caf50), -o-linear-gradient(#D2D2D2, #D2D2D2);
    background-image: linear-gradient(#4caf50, #4caf50), linear-gradient(#D2D2D2, #D2D2D2)
}

.form-group.has-success .help-block,
.form-group.has-success label.control-label {
    color: #4caf50
}

.form-group.has-info .form-control {
    -webkit-box-shadow: none;
    box-shadow: none
}

.form-group.has-info.is-focused .form-control {
    background-image: -webkit-gradient(linear, left top, left bottom, from(#03a9f4), to(#03a9f4)), -webkit-gradient(linear, left top, left bottom, from(#D2D2D2), to(#D2D2D2));
    background-image: -webkit-linear-gradient(#03a9f4, #03a9f4), -webkit-linear-gradient(#D2D2D2, #D2D2D2);
    background-image: -o-linear-gradient(#03a9f4, #03a9f4), -o-linear-gradient(#D2D2D2, #D2D2D2);
    background-image: linear-gradient(#03a9f4, #03a9f4), linear-gradient(#D2D2D2, #D2D2D2)
}

.form-group.has-info .help-block,
.form-group.has-info label.control-label {
    color: #03a9f4
}

.form-group textarea {
    resize: none
}

.form-group textarea~.form-control-highlight {
    margin-top: -11px
}

.form-group select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none
}

.form-group select~.material-input:after {
    display: none
}

.form-control {
    margin-bottom: 7px
}

.form-control::-moz-placeholder {
    font-size: 16px;
    line-height: 1.42857143;
    color: #BDBDBD;
    font-weight: 400
}

.form-control:-ms-input-placeholder {
    font-size: 16px;
    line-height: 1.42857143;
    color: #BDBDBD;
    font-weight: 400
}

.form-control::-webkit-input-placeholder {
    font-size: 16px;
    line-height: 1.42857143;
    color: #BDBDBD;
    font-weight: 400
}
.checkbox label,
.radio label,
label {
    font-size: 16px;
    line-height: 1.42857143;
    color: #BDBDBD;
    font-weight: 400
}

label.control-label {
    font-size: 12px;
    line-height: 1.07142857;
    font-weight: 400;
    margin: 16px 0 0 0
}

.help-block {
    margin-top: 0;
    font-size: 12px
}

.form-group {
    padding-bottom: 7px;
    margin: 28px 0 0 0
}

.form-group .form-control {
    margin-bottom: 7px
}

.form-group .form-control::-moz-placeholder {
    font-size: 16px;
    line-height: 1.42857143;
    color: #BDBDBD;
    font-weight: 400
}

.form-group .form-control:-ms-input-placeholder {
    font-size: 16px;
    line-height: 1.42857143;
    color: #BDBDBD;
    font-weight: 400
}

.form-group .form-control::-webkit-input-placeholder {
    font-size: 16px;
    line-height: 1.42857143;
    color: #BDBDBD;
    font-weight: 400
}

.form-group .checkbox label,
.form-group .radio label,
.form-group label {
    font-size: 16px;
    line-height: 1.42857143;
    color: #BDBDBD;
    font-weight: 400
}

.form-group label.control-label {
    font-size: 12px;
    line-height: 1.07142857;
    font-weight: 400;
    margin: 16px 0 0 0
}

.form-group .help-block {
    margin-top: 0;
    font-size: 12px
}

.form-group.label-floating label.control-label,
.form-group.label-placeholder label.control-label {
    top: -7px;
    font-size: 16px;
    line-height: 1.42857143
}

.form-group.label-floating.is-focused label.control-label,
.form-group.label-floating:not(.is-empty) label.control-label,
.form-group.label-static label.control-label {
    top: -30px;
    left: 0;
    font-size: 12px;
    line-height: 1.07142857
}

.form-group.label-floating input.form-control:-webkit-autofill~label.control-label label.control-label {
    top: -30px;
    left: 0;
    font-size: 12px;
    line-height: 1.07142857
}

.form-group.form-group-sm {
    padding-bottom: 3px;
    margin: 21px 0 0 0
}

.form-group.form-group-sm .form-control {
    margin-bottom: 3px
}

.form-group.form-group-sm .form-control::-moz-placeholder {
    font-size: 11px;
    line-height: 1.5;
    color: #BDBDBD;
    font-weight: 400
}

.form-group.form-group-sm .form-control:-ms-input-placeholder {
    font-size: 11px;
    line-height: 1.5;
    color: #BDBDBD;
    font-weight: 400
}

.form-group.form-group-sm .form-control::-webkit-input-placeholder {
    font-size: 11px;
    line-height: 1.5;
    color: #BDBDBD;
    font-weight: 400
}

.form-group.form-group-sm .checkbox label,
.form-group.form-group-sm .radio label,
.form-group.form-group-sm label {
    font-size: 11px;
    line-height: 1.5;
    color: #BDBDBD;
    font-weight: 400
}

.form-group.form-group-sm label.control-label {
    font-size: 9px;
    line-height: 1.125;
    font-weight: 400;
    margin: 16px 0 0 0
}

.form-group.form-group-sm .help-block {
    margin-top: 0;
    font-size: 9px
}

.form-group.form-group-sm.label-floating label.control-label,
.form-group.form-group-sm.label-placeholder label.control-label {
    top: -11px;
    font-size: 11px;
    line-height: 1.5
}

.form-group.form-group-sm.label-floating.is-focused label.control-label,
.form-group.form-group-sm.label-floating:not(.is-empty) label.control-label,
.form-group.form-group-sm.label-static label.control-label {
    top: -25px;
    left: 0;
    font-size: 9px;
    line-height: 1.125
}

.form-group.form-group-sm.label-floating input.form-control:-webkit-autofill~label.control-label label.control-label {
    top: -25px;
    left: 0;
    font-size: 9px;
    line-height: 1.125
}

.form-group.form-group-lg {
    padding-bottom: 9px;
    margin: 30px 0 0 0
}

.form-group.form-group-lg .form-control {
    margin-bottom: 9px
}

.form-group.form-group-lg .form-control::-moz-placeholder {
    font-size: 18px;
    line-height: 1.3333333;
    color: #BDBDBD;
    font-weight: 400
}

.form-group.form-group-lg .form-control:-ms-input-placeholder {
    font-size: 18px;
    line-height: 1.3333333;
    color: #BDBDBD;
    font-weight: 400
}

.form-group.form-group-lg .form-control::-webkit-input-placeholder {
    font-size: 18px;
    line-height: 1.3333333;
    color: #BDBDBD;
    font-weight: 400
}

.form-group.form-group-lg .checkbox label,
.form-group.form-group-lg .radio label,
.form-group.form-group-lg label {
    font-size: 18px;
    line-height: 1.3333333;
    color: #BDBDBD;
    font-weight: 400
}

.form-group.form-group-lg label.control-label {
    font-size: 14px;
    line-height: .99999998;
    font-weight: 400;
    margin: 16px 0 0 0
}

.form-group.form-group-lg .help-block {
    margin-top: 0;
    font-size: 14px
}

.form-group.form-group-lg.label-floating label.control-label,
.form-group.form-group-lg.label-placeholder label.control-label {
    top: -5px;
    font-size: 18px;
    line-height: 1.3333333
}

.form-group.form-group-lg.label-floating.is-focused label.control-label,
.form-group.form-group-lg.label-floating:not(.is-empty) label.control-label,
.form-group.form-group-lg.label-static label.control-label {
    top: -32px;
    left: 0;
    font-size: 14px;
    line-height: .99999998
}

.form-group.form-group-lg.label-floating input.form-control:-webkit-autofill~label.control-label label.control-label {
    top: -32px;
    left: 0;
    font-size: 14px;
    line-height: .99999998
}

select.form-control {
    border: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-radius: 0
}

.form-group.is-focused select.form-control {
    -webkit-box-shadow: none;
    box-shadow: none;
    border-color: #D2D2D2
}

.form-group.is-focused select.form-control[multiple],
select.form-control[multiple] {
    height: 85px
}

.input-group-btn .btn {
    margin: 0 0 7px 0
}

.form-group.form-group-sm .input-group-btn .btn {
    margin: 0 0 3px 0
}

.form-group.form-group-lg .input-group-btn .btn {
    margin: 0 0 9px 0
}

.input-group .input-group-btn {
    padding: 0 12px
}

.input-group .input-group-addon {
    border: 0;
    background: 0 0
}

.form-group input[type=file] {
    opacity: 0;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 100
}
.contact-widget-section .single-contact-widget {
    background: #f9f9f9;
    padding: 20px 25px;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.26);
    height: 260px;
    margin-top: 25px;
    transition: all 0.3s ease-in-out
}

.contact-widget-section .single-contact-widget i {
    font-size: 75px
}

.contact-widget-section .single-contact-widget h3 {
    font-size: 20px;
    color: #333;
    font-weight: 700;
    padding-bottom: 10px
}

.contact-widget-section .single-contact-widget p {
    line-height: 16px
}

.contact-widget-section .single-contact-widget:hover {
    background: #fff;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.46);
    cursor: pointer;
    transition: all 0.3s ease-in-out
}

#contactForm {
    margin-top: -10px
}

#contactForm .form-group label.control-label {
    color: #8c8c8c
}

#contactForm .form-control {
    font-weight: 500;
    height: auto
}
#contactCotnainer{
  background-image: url('assets/IMG/Cleaning/ContactUsbg.png');
  background-repeat: no-repeat;
  background-size: cover;

}
ul{
  list-style-type: none;
}
#buttonAlign{
  margin-bottom:1rem;
  margin-top: auto;
}
  </style>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" rel="stylesheet" />
</head>
<body>
<div>

            <div class="dropdown">
            <button class="btn btn-primary btn-lg dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><span class="flag-icon flag-icon-us me-1"></span> <span>English</span></button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li>
                    <a class="dropdown-item active" href=""><span class="flag-icon flag-icon-us me-1"></span> <span>English</span></a>
                </li>
                <li>
                    <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-es me-1"></span> <span>Spanich</span></a>
                </li>
            </ul>
        </div>


</div>







  
<nav class="navbar navbar-expand-lg  p-0 navbar-dark opacity-5  ">
    <div class="container-fluid bg-dark p-0">
      <a class="navbar-brand "  href="#">
        

      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item m-2">
            <a id="items-nav" class="nav-link active" aria-current="page" href="#whyUsContainer">Why US?</a>
          </li>
          <li class="nav-item m-2">
            <a id="items-nav" class="nav-link active" aria-current="page" href="#ourServicesContainer">Our Services</a>
          </li>
          
          <li class="nav-item m-2">
            <a id="items-nav" class="nav-link active" aria-current="page" href="#contactCotnainer">Contact</a>
          </li>





        </ul>

      </div>
    </div>
  </nav>


  <div class="container-fluid p-0">
    <video class="p-0" width="100%" height="auto" autoplay  loop muted>>
      <source src="{{URL::asset('assets/IMG/Cleaning/CleaningBannerVideo.mp4')}}" type="video/mp4">
    Your browser does not support the video tag.
    </video>
  </div>

  <div>
  </div>
  <div class="container-fluid  " id="whyUs_container">
  <div class="container div-monitor p-3" id="whyUsContainer">
    <div class="row text-center">
        <!-- <div class="col-md-6 "> -->
            <!-- <h5> Why C&A Construction Services?</h5> -->
        <!-- </div> -->
        <!-- <div class="col-md-6"> -->
            <!-- <h5> Why C&A Construction Services?</h5> -->
        <!-- </div> -->

    <div class="div-mobile ">
    




        </div>

        <div class="div-monitor">
        <!-- Content for larger screens (monitors) -->

          
        </div>

    </div>
  <div class="row">
    <div class="col-6">


    </div>
    <div class="col-6">
      <div class="row text-center">
       <h4 style="color:#fb8500">Why Choose C&A Cleaning?</h4>
        <div class="col mx-3 p-2">
          <div class="row align-items-cente">
          <div class="col p-0">
          <img  id="logo_whyUs" src="{{asset('assets/IMG/Cleaning/WeCover.png')}}" alt="">


          </div>
          <div class="col">
           <h6 style="color:#fb8500">We Cover All Cleaning Needs</h6>
          </div>
          
          </div>
          <div class="row">
         <p class="p-1" style="text-align: justify;">From homes to offices, after construction
         or events, and even move-ins/move-outs,
         we handle it all with expertise.
           </p>
          </div>
          
        </div>
        <div class="col mx-3 p-2">
          <div class="row align-items-center">
          <div class="col p-0">
          <img  id="logo_whyUs" src="{{asset('assets/IMG/Cleaning/WeCover.png')}}" alt="">


          </div>
          <div class="col">
           <h6 style="color:#fb8500">We Cover All Cleaning Needs</h6>
          </div>
          
          </div>
          <div class="row">
         <p class="p-1" style="text-align: justify;">From homes to offices, after construction
         or events, and even move-ins/move-outs,
         we handle it all with expertise.
           </p>
          </div>
          
        </div>
        <div class="row justify-content-center">
        <div class="col-md-6 mx-3 p-2">
          <div class="row align-items-cente">
          <div class="col p-0">
          <img  id="logo_whyUs" src="{{asset('assets/IMG/Cleaning/WeCover.png')}}" alt="">


          </div>
          <div class="col">
           <h6 style="color:#fb8500">We Cover All Cleaning Needs</h6>
          </div>
          
          </div>
          <div class="row">
         <p class="p-1" style="text-align: justify;">From homes to offices, after construction
         or events, and even move-ins/move-outs,
         we handle it all with expertise.
           </p>
          </div>
          
        </div>
          
        </div>
      </div>

    </div>
  </div>

    <div class="col-md-4 ">

        <div class="row ">
        <div class="div-mobile flex justify-content-center">
        <!-- Content for mobile screens -->
        <img  id="logo_whyUsR" src="{{asset('assets/IMG/Cleaning/WeCover.png')}}" alt="">

<!-- Generator: Adobe Illustrator 27.6.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->



        </div>

        <div class="div-monitor">
        <img  id="logo_whyUs" src="{{asset('assets/IMG/Cleaning/WeCover.png')}}" alt="">

        <!-- Content for larger screens (monitors) -->

<!-- Generator: Adobe Illustrator 27.6.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

        </div>

        </div>
        <div class="row">
            <h5>Premium Quality Services & Materials   </h5>
        </div>
        <div class="row">
            <span>Our dedication to excellence begins the moment you reach out to us. Expect top-notch services, exceptional customer support, and guaranteed satisfaction.</span>
        </div>

    </div>
    <div class="col-md-4">

        <div class="row">
          <div class="div-mobile flex justify-content-center">
          <!-- Content for mobile screens -->
          <img  id="logo_whyUsR" src="{{asset('assets/IMG/Cleaning/AffordableCustom.png')}}" alt="">

          </div>
                <div class="div-monitor">
          <!-- Content for larger screens (monitors) -->
            <img  id="logo_whyUs" src="{{asset('assets/IMG/Cleaning/AffordableCustom.png')}}" alt="">

          </div>

        </div>
        <div class="row">
            <h5>Honest & Transparent Pricing </h5>
        </div>
        <div class="row">
            <span> Our free estimates are straightforward and exact, with no concealed costs or extra charges. Transparency and honesty are fundamental to our values, setting us apart from other painting companies.</span>
        </div>

    </div>
    <div class="col-md-4">

    <div class="row">
          <div class="div-mobile flex justify-content-center">
          <!-- Content for mobile screens -->
          <img  id="logo_whyUsR" src="{{asset('assets/IMG/Cleaning/Fast.png')}}" alt="">

          </div>
                <div class="div-monitor">
          <!-- Content for larger screens (monitors) -->
<!-- Generator: Adobe Illustrator 27.6.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

          <img  id="logo_whyUs" src="{{asset('assets/IMG/Cleaning/AffordableCustom.png')}}" alt="">

        </div>
        </div>
        <div class="row">
            <h5>One-Time Policy</h5>
        </div>
        <div class="row">
            <span> Our efficient process and expert project management ensure our skilled team swiftly completes the work within the projected timeline.</span>
        </div>
    </div>
  </div>
</div>
</div>



  </div>

</div>
<div class="">
  
</div>
<div class="container p-5 my-5 div-monitor" id="ourServicesContainer">

  <div class="row text-center">
    <h4>Our Services</h4>

  </div>

  <div class="row p-0 m-0">
    <div class="col-md-4 p-0 m-0">
      <div class="card-img h-100" style="background: #fff001; color:#0081e9; height: 200px;">
        <div class="justify-content-center">
          <img  id="cardImg" src="{{asset('assets/IMG/Cleaning/HomeCleaning.png')}}"  class="img-fluid" alt="">

          <div class="container">
            <div class="row ">
              <h4 class="mx-0">Home Cleaning</h4>
            </div>
            <div class="row">
              
              <span>Love where you live! We'll bring the sparkle back to your home.z</span>
            </div>
          </div>
          
          <br>
          <br>
            <div id="buttonAlign"class="row justify-content-center p-4">
              
              <button  id="OurServicesBtn" type="button">Request a quote</button>

            </div>
          </div>
        </div>

    </div>
    <div class="col-md-4  m-0 p-0">
     <div class="card-img h-100" style="background: #f5f5f5; color:#0081e9; height: 200px;">
         <div class="justify-content-center">
           <img  id="cardImg" src="{{asset('assets/IMG/Cleaning/BusinessCleaning.png')}}"  class="img-fluid" alt="">
           <div class="container">
             <div class="row ">
               <h4 class="mx-0"> Business Cleaning</h4>
             </div>
             <div class="row">
              <br>
              <br>
              <span>Focus on your work, while we make your office shine.</span>
            </div>
           </div>
           <br>
           <br>
           <div id="buttonAlign" class="row justify-content-center m-0 p-4">
              
              <button  id="OurServicesBtn" type="button">Request a quote</button>

            </div>
           </div>
         </div>
    </div>

    <div class="col-md-4  p-0 m-0">
      <div class="card-img h-100" style="background: #fff001; color:#0081e9; ">
        <div class="justify-content-center">
          <img  id="cardImg" src="{{asset('assets/IMG/Cleaning/movingcleaning.png')}}"  class="img-fluid" alt="">
          <div class="container">
            <div class="row ">
              <h4 class="mx-0"> Moving Cleaning</h4>
            </div>
            <div class="row">
                <span>Moving is tough, but cleaning doesn’t have to be! We’ve got your back, making your new place welcoming or your old one spotless.</span>
            </div>
          </div>
          <br>
            <div class="row justify-content-center p-4">
              <button  id="OurServicesBtn" type="button">Request a quote</button>

            </div>
          </div>
        </div>

    </div>

  </div>

  <div class="row p-0 m-0">
  <div class="col-md-4 h-100 p-0 m-0">
      <div class="card-img" style="background: #f5f5f5; color:#0081e9; height: 500px; ">
        <div class="justify-content-center">
          <img  id="cardImg" src="{{asset('assets/IMG/Cleaning/HomeCleaning.png')}}"  class="img-fluid" alt="">
          <div class="container">
            <div class="row ">
              <h4 class="mx-0"> Remodel & Construction Cleaning</h4>
            </div>
            <div class="row">
              <span>  Finished a big project? We’ll sweep in and clear the dust, making everything look brand new.</span>
            </div>
          </div>
            <br>
            
            <div class="row justify-content-center p-5">
              <button  id="OurServicesBtn" type="button">Request a quote</button>

            </div>
          </div>
        </div>

    </div>
    <div class="col-md-4 h-100 p-0 m-0">
      <div class="card-img" style="background: #fff001; color:#0081e9;  height:500px ">
        <div class="justify-content-center">
          <img  id="cardImg" src="{{asset('assets/IMG/Cleaning/recurring.png')}}"  class="img-fluid" alt="">
          <div class="container">
            <div class="row ">
              <h4 class="mx-0"> Recurring Cleaning</h4>
            </div>
            <div class="row">
                <span>Keep the fresh feeling! Schedule us regularly, and always come home to a clean space.</span>
            </div>
          </div> <br>
              <br>
              <br>
            <div class="row justify-content-center p-5">
             
              <button  id="OurServicesBtn" type="button">Request a quote</button>

            </div>
          </div>
        </div>

    </div>
    <div class="col-md-4 h-100 p-0 m-0">
      <div class="card-img" style="background: #0081e9; color:#;  height: 500px; ">
      <div class="container">
        <img  style="width:100%; height: auto;"  src="{{asset('assets/IMG/Cleaning/C&ACSBN.png')}}"  class="img-fluid my-5" alt="">

      </div>


        </div>

    </div>


</div>
</div>



<div id="responsive-carropusel" class="container my-5 py-5 px-0 div-mobile">
  <div class="row text-center">
    <h3 class="my-2"> Our Services</h3>
  </div>
  <div class="container text-center my-3">

    <div class="row mx-auto my-auto justify-content-center">
        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="col-md-3">
                        <div class="card ">
                            <div class="card-img " style="background: #fff001; color:#0081e9; ">

                             <div class="justify-content-center">
                             <img  id="cardImg" src="{{asset('assets/IMG/Cleaning/HomeCleaning.png')}}"  class="img-fluid" alt="">
                              <div class="row p-2">
                               <h4> Home Cleaning</h4>
                             </div>
                             <div class="row my-2 p-1">
                                  <span>Love where you live! We'll bring the sparkle back to your home.</span>
                              </div>
                              <div>

                              </div>
                                  <br>

                             <button  id="OurServicesBtn" type="button">Request a quote</button>

                             </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                    <div class="card">
                    <div class="card-img" style="background: #f5f5f5; color:#0081e9; ">

                            <div class="justify-content-center">
                              <img  id="cardImg" src="{{asset('assets/IMG/Cleaning/BusinessCleaning.png')}}"  class="img-fluid" alt="">
                             <div class="row p-2">
                              <h4> Business Cleanning</h4>
                            </div>
                            <div class="row p-2">
                              <span>Love where you live! We'll bring the sparkle back to your home.</span>
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
                            <div class="card-img" style="background: #fff001; color:#0081e9; ">

                             <div class="justify-content-center">
                             <img  id="cardImg" src="{{asset('assets/IMG/Cleaning/movingcleaning.png')}}"  class="img-fluid" alt="">
                              <div class="row py-2">
                               <h4> Moving Cleaning</h4>
                             </div>
                             <div class="row py-2">
                                          <span>Moving is tough, but cleaning doesn’t have to be! We’ve got your back, making your new place welcoming or your old one spotless.</span>
                            </div>
                                      <br>
                             <button  id="OurServicesBtn" type="button">Request a quote</button>

                             </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                    <div class="card">
                            <div class="card-img" style="background: #f5f5f5; color:#0081e9; ">

                             <div class="justify-content-center">
                             <img  id="cardImg" src="{{asset('assets/IMG/Cleaning/remodel.png')}}"  class="img-fluid" alt="">
                              <div class="row py-2">
                               <h4> Remodel & Construction Cleaning </h4>
                             </div>
                             <div class="row py-2">
                                <span>Finished a big project? We’ll sweep in and clear the dust, making everything look brand new.</span>
                              </div>
                                <br>
                             <button  id="OurServicesBtn" type="button">Request a quote</button>

                             </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                    <div class="card">
                            <div class="card-img" style="background: #fff001; color:#0081e9; ">

                             <div class="justify-content-center">
                             <img  id="cardImg" src="{{asset('assets/IMG/Cleaning/recurring.png')}}"  class="img-fluid" alt="">
                              <div class="row py-2">
                               <h4> Recurring Cleaning</h4>
                             </div>
                             <div class="row py-2">
                                  <span> Keep the fresh feeling! Schedule us regularly, and always come home to a clean space.</span>
                              </div>
                              <br>

                             <button  id="OurServicesBtn" type="button">Request a quote</button>

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



<div class="container " id="contactCotnainer">
  <section class="Material-contact-section section-padding ">
      <div class="container">
          <div class="row text-white">
              <!-- Section Titile -->

          </div>
          <div class="row text-white">
              <!-- Section Titile -->
              <div class="col-5   contact-widget-section2 wow animated fadeInLeft text-center" data-wow-delay=".2s">
               <h1 class="display-5"> Contact Us</h1>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam repellendus iure voluptatum blanditiis dignissimos, aut praesentium eos natus! Ab, vel nam corporis eius nesciunt explicabo quia fuga qui hic cupiditate!</p>
              </div>
              <!-- contact form -->
              <div class="col-7 justify-content-center wow animated fadeInRight" data-wow-delay=".2s">
                  <form action="">
                    <div class="row justify-content-center ">
                      <div class="col ">
                        <input class="bg-white text-black form-control rounded-3" placeholder="Name"type="text">

                      </div>
                      <div class="col">
                        <input class="bg-white text-black form-control rounded-3" placeholder="Last Name"type="text">

                      </div>

                    </div>
                    <div class="row">
                      <div class="col">
                        <input class="bg-white text-black form-control rounded-3" placeholder="Email"type="email">

                      </div>
                      <div class="col">
                        <input class="bg-white text-black form-control rounded-3" placeholder="Phone"type="text">

                      </div>

                    </div>
                    <div class="row p-1 m-1">
                      <input class="bg-white text-black form-control rounded-3" placeholder="Subject"type="text">


                    </div>
                    <div class="row p-1 m-1">
                      <textarea name="Text1" cols="40" rows="5" placeholder="Message"></textarea>
                    </div>
                    <div class="row p-1 m-1">
                      <input type="file" name="" id="">

                    </div>
                    <div class="row p-1 m-1">
                      <input class="bg-white text-black form-control rounded-3" placeholder="Preferred Contact Method"type="text">


                    </div>
                    <div class="row p-1 m-1">
                      <input class="bg-white text-black form-control rounded-3" placeholder="How did you hear about us"type="text">

                    </div>
                    <div class="row justify-content-end ">
                      <button type="submit" class="btn ml-5">Submit</button>

                    </div>

                  </form>
              </div>
          </div>
      </div>
    </section>
</div>











<footer id="footer" class="footer mt-0 p-0 text-center">
  <div class="row">
  <div class="col-md-8 py-5 order-lg-2 ">
      <div class="row">
        <div class="div-monitor">
          <div class="row">
            <div class="col-3">
            <span>Navigate</span>
              <ul>
              <li >
              <a  style="color: #000; text-decoration:none;" href="#whyUsContainer">Why US?</a>
            </li>
            <li >
              <a   style="color: #000; text-decoration:none;" aria-current="page" href="#ourServicesContainer">Our Services</a>
            </li>
            <li >
              <a  style="color: #000; text-decoration:none;" aria-current="page" href="index.html">Cleaning Services</a>
            </li>
            <li >
              <a   style="color: #000; text-decoration:none;" aria-current="page" href="#ourHistory">Our Story</a>
            </li>
            <li >
              <a style="color: #000; text-decoration:none;" href="#ourProjects">Projects</a>
            </li>
            <li >
              <a  style="color: #000; text-decoration:none;" aria-current="page" href="#contactCotnainer">Contact</a>
            </li>

              </ul>
            </div>
          <div class="col-3">
            <span>Phone</span>

          </div>
          <div class="col-3">
            <span>Address</span>
              <p>Panorama City, CA 91402</p>
          </div>
          <div class="col-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
            </svg>
          </div>
        </div>

        </div>
            
        <div class="div-mobile">
          <divn class="row">
          <div class="col-6">
            <span>Navigate</span>
              <ul>
              <li >
              <a  style="color: #000; text-decoration:none;" href="#whyUsContainer">Why US?</a>
            </li>
            <li >
              <a   style="color: #000; text-decoration:none;" aria-current="page" href="#ourServicesContainer">Our Services</a>
            </li>
            <li >
              <a  style="color: #000; text-decoration:none;" aria-current="page" href="index.html">Cleaning Services</a>
            </li>
            <li >
              <a   style="color: #000; text-decoration:none;" aria-current="page" href="#ourHistory">Our Story</a>
            </li>
            <li >
              <a style="color: #000; text-decoration:none;" href="#ourProjects">Projects</a>
            </li>
            <li >
              <a  style="color: #000; text-decoration:none;" aria-current="page" href="#contactCotnainer">Contact</a>
            </li>

              </ul>
            </div>
          <div class="col-6">
            <span>Phone</span>

          </div>
            
          
          <div class="row">
          <div class="col-6">
            <span>Address</span>
              <p>Panorama City, CA 91402</p>
          </div>
          <div class="col-6">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
            </svg>
          </div>

          </div>
        
          
          

        </div>

      </div>


    </div>
    <div class="col-md-4 order-lg-1 p-0" style="background: #000000" >
      <img id="logofooter" class="bg-gray"src="{{asset('assets/IMG/Cleaning/C&ACSBN.png')}}" alt="">

    </div>
   


  </div>
  


</footer>
<div class="row bg-light text-dark text-center">
      <span>Copyright © 2023 C&A Construction All Rights Reserved</span>
</div>

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