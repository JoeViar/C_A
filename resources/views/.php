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
  background: #ade70d;



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
    background: #e5e1d8;
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
    background:#ade70d;

    width:50%;
    height: auto;
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
  margin-bottom: 1rem;
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
#territoryCovered{
  width:100%;
  height: 100%;
}
#territoryCoveredText{
  color: #ade70d;
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
  background-image: url('assets/IMG/Construction/IMGCompletaForm.png');
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
            <button class="btn btn- btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><span class="flag-icon flag-icon-us me-1"></span> <span>English</span></button>
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




  <nav class="navbar navbar-expand-lg  p-0 navbar-dark bg-dark ">
    <div class="container-fluid bg-dark p-0">
      <a class="navbar-brand  bg-white "  href="#">
        <div id="logoDiv" class="bg-white">
          <img id="logo" class="bg-white m-0"src="{{asset('assets/IMG/Construction/C&AConstruction.png')}}" alt="">

        </div>

      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item m-1">
            <a id="items-nav" class="nav-link active" aria-current="page" href="#whyUsContainer">Why US?</a>
          </li>
          <li class="nav-item m-21">
            <a id="items-nav" class="nav-link active" aria-current="page" href="#ourServicesContainer">Our Services</a>
          </li>
          <li class="nav-item m-1">
            <a id="items-nav" class="nav-link active" aria-current="page" href="index.html">Cleaning Services</a>
          </li>
          <li class="nav-item m-1">
            <a  id="items-nav" class="nav-link active" aria-current="page" href="#ourHistory">Our Story</a>
          </li>
          <li class="nav-item m-2">
            <a id="items-nav" class="nav-link active" aria-current="page" href="#ourProjects">Projects</a>
          </li>
          <li class="nav-item m-2">
            <a id="items-nav" class="nav-link active" aria-current="page" href="#contactCotnainer">Contact</a>
          </li>





        </ul>

      </div>
    </div>
  </nav>

<div class="container-fluid  " id="whyUs_container">
    <h2  style="color: #ade70d;">About Me</h2>



  <div class="container-fluid p-0">
    <video class="p-0" width="100%" height="auto" autoplay  loop muted>>
      <source src="{{URL::asset('assets/IMG/Construction/HomeBannerVideo.mp4')}}" type="video/mp4">
    Your browser does not support the video tag.
    </video>
  </div>

  <div>
  <div class="container p-5" id="whyUsContainer">
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

<!-- Generator: Adobe Illustrator 27.6.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->



        </div>

        <div class="div-monitor">
        <img  id="logo_whyUs" src="{{asset('assets/IMG/Construction/clock.png')}}" alt="">

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
            <img  id="logo_whyUsR" src="{{asset('assets/IMG/Construction/check.png')}}" alt="">

          </div>
                <div class="div-monitor">
          <!-- Content for larger screens (monitors) -->
            <img  id="logo_whyUs" src="{{asset('assets/IMG/Construction/check.png')}}" alt="">
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
            <img  id="logo_whyUsR" src="{{asset('assets/IMG/Construction/cert.png')}}" alt="">

          </div>
                <div class="div-monitor">
          <!-- Content for larger screens (monitors) -->
<!-- Generator: Adobe Illustrator 27.6.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

  <img  id="logo_whyUs" src="{{asset('assets/IMG/Construction/cert.png')}}" alt="">

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
<div class="container p-5 my-5 div-monitor" id="ourServicesContainer">

  <div class="row text-center">
    <h4>Our Services</h4>

  </div>

  <div class="row p-0 m-0">
    <div class="col-md-4 p-0 m-0">
      <div class="card-img h-100" style="background: #e5e1d8; color:#8e9440; height: 200px;">
        <div class="justify-content-center">
          <img  id="cardImg" src="{{asset('assets/IMG/Construction/Paint.png')}}"  class="img-fluid" alt="">
          <div class="container">
            <div class="row ">
              <h4 class="mx-0"> Painting</h4>
            </div>
            <div class="row">
              <span>With over a decade of experience, our painters have expertly revitalized thousands of homes with top-quality painting services.</span>
            </div>
          </div>
          
          <br>
            <div id="buttonAlign"class="row justify-content-center p-4">
              
              <button  id="OurServicesBtn" type="button">Request a quote</button>

            </div>
          </div>
        </div>

    </div>
    <div class="col-md-4 h-100 m-0 p-0">
     <div class="card-img h-100" style="background: #f5f5f5; color:#8e9440; height: 200px;">
         <div class="justify-content-center">
           <img  id="cardImg" src="{{asset('assets/IMG/Construction/drywell.png')}}"  class="img-fluid" alt="">
           <div class="container">
             <div class="row ">
               <h4 class="mx-0"> Drywall</h4>
             </div>
             <div class="row">
              <span>Whether it's finishing touches or fixing wear and tear, we have you covered.</span>
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

    <div class="col-md-4 h-100 p-0 m-0">
      <div class="card-img h-100" style="background: #e5e1d8; color:#8e9440; ">
        <div class="justify-content-center">
          <img  id="cardImg" src="{{asset('assets/IMG/Construction/Framing.png')}}"  class="img-fluid" alt="">
          <div class="container">
            <div class="row ">
              <h4 class="mx-0"> Framing</h4>
            </div>
            <div class="row">
                <span>We ensure impeccable installation of structural frames to support doors, windows, and other elements, along with the finest custom selection of frames.</span>
            </div>
          </div>
            <div class="row justify-content-center p-4">
              <button  id="OurServicesBtn" type="button">Request a quote</button>

            </div>
          </div>
        </div>

    </div>

  </div>

  <div class="row p-0 m-0">
  <div class="col-md-4 h-100 p-0 m-0">
      <div class="card-img" style="background: #f5f5f5; color:#8e9440; height: 500px; ">
        <div class="justify-content-center">
          <img  id="cardImg" src="{{asset('assets/IMG/Construction/FloorInst.png')}}"  class="img-fluid" alt="">
          <div class="container">
            <div class="row ">
              <h4 class="mx-0"> Floor Installation</h4>
            </div>
            <div class="row">
<span>Our team of experts will guide you through the flooring selection process. We have extensive experience installing various types of flooring, including hardwood, laminate, vinyl, carpet, and more.</span>
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
      <div class="card-img" style="background: #e5e1d8; color:#8e9440;  height:500px ">
        <div class="justify-content-center">
          <img  id="cardImg" src="{{asset('assets/IMG/Construction/walls.png')}}"  class="img-fluid" alt="">
          <div class="container">
            <div class="row ">
              <h4 class="mx-0"> Decorative Walls</h4>
            </div>
            <div class="row">
                <span>They are made with the most innovative techniques on the market and the level required to have a decorative wall that enhances the look of your home. These walls' materials, finishes, textures, colors, and patterns are carefully chosen.</span>
            </div>
          </div>
            <div class="row justify-content-center p-5">
              <button  id="OurServicesBtn" type="button">Request a quote</button>

            </div>
          </div>
        </div>

    </div>
    <div class="col-md-4 h-100 p-0 m-0">
      <div class="card-img" style="background: #ade70d; color:#6f7632;  height: 500px; ">
        <div class="justify-content-center">
          <img  id="cardImg" src="{{asset('assets/IMG/Construction/celanning.png')}}"  class="img-fluid" alt="">
          <div class="container">
            <div class="row ">
              <h4 class="mx-0"> Cleaning Services</h4>
            </div>
            <div class="row">
              <span>For homes of all sizes, tailoring the perfect plan to meet your specific needs. </span>
            </div>
          </div>
          <br><br>
          <br>
        <br>
            <div class="row justify-content-center p-5">
              <button  id="OurServicesBtn" type="button">Request a quote</button>

            </div>
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
                        <div class="card">
                            <div class="card-img" style="background: #e5e1d8; color:#8e9440; ">

                             <div class="justify-content-center">
                             <img  id="cardImg" src="{{asset('assets/IMG/Construction/Paint.png')}}"  class="img-fluid" alt="">
                              <div class="row">
                               <h4> Painting</h4>
                             </div>
                             <div class="row">
                              <span>With over a decade of experience, our painters have expertly revitalized thousands of homes with top-quality painting services.</span>
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
                             <img  id="cardImg" src="{{asset('assets/IMG/Construction/celanning.png')}}"  class="img-fluid" alt="">
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

<div class="container ">
  <div class="row">
    <div id="territoryCoveredText" class="col-md-6   ">
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
    <div class="col-md-6 m-0 p-0" sty>
      <img  id="territoryCovered" src="{{asset('assets/IMG/Construction/MapConstruction.png')}}"  class="img-fluid m-0" alt="">


    </div>
  </div>
</div>

<div class="container my-3 " id="ourHistory">
  <div class="row">

    <div class="col-md-6 m-0 p-2 justify-content-center" >
      <img  id="storyImg" src="{{asset('assets/IMG/Construction/C&AConstruction1.png')}}"   alt="">


    </div>

    <div id="colOurStory" class="col-md-6 m-0 p-2 ">

      <div class="row p-3 my-5">
        <h4>Our Story</h4>
      </div>
      <div class="row p-3">
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos fugiat obcaecati officiis tenetur quae molestiae aliquam sequi perferendis praesentium odio, placeat architecto. Dolor omnis at aspernatur facere repudiandae maxime ullam?
        </p>

      </div>

    </div>

  </div>
  <div class="row my-5">
    <div  class="col-md-6 p-2 m-0  ">
      <div class="div-monitor">
        <div class="row p-3">
          <h4>Our Story</h4>
        </div>
      </div>
      <div class="div-mobile">
        <div class="row p-2 ">
          <h2 class="text-center">Meet Carlos</h4>
        </div>
      </div>

      <div class="row p-2 " >
        <p>

        </p>

      </div>

    </div>
    <div class="col-md-6 m-0 p-2 justify-content-center" id="colOurStory" >
      <img  id="storyImg" src="{{asset('assets/IMG/Construction/carlos.png')}}"   alt="">


    </div>
  </div>
</div>
<div class="bg-secondary " id="ourProjects">
  <div class="row p-2 justify-content-center">
    <div class="col-3 m-1">
      <div clas="d-flex justify-content-end" >
      <img  class="img-fluid"  src="{{asset('assets/IMG/Construction/1.png')}}"   alt="">
      </div>
    </div>
    <div class="col-3 m-1">
      <img  class="img-fluid"  src="{{asset('assets/IMG/Construction/2.png')}}"   alt="">
    </div>
    <div class="col-3 m-1">
      <img  class="img-fluid"  src="{{asset('assets/IMG/Construction/3.png')}}"   alt="">
    </div>
  </div>

<div class="row p-2 justify-content-center">
    <div class="col-3 m-1">
      <div clas="d-flex justify-content-end" >
      <img  class="img-fluid"  src="{{asset('assets/IMG/Construction/4.png')}}"   alt="">
      </div>
    </div>
    <div class="col-3 m-1">
      <img  class="img-fluid"  src="{{asset('assets/IMG/Construction/5.png')}}"   alt="">
    </div>
    <div class="col-3 m-1">
      <img  class="img-fluid"  src="{{asset('assets/IMG/Construction/6.png')}}"   alt="">
    </div>
  </div>

<div class="row p-2 justify-content-center">
    <div class="col-3 m-1">
      <div clas="d-flex justify-content-end" >
      <img  class="img-fluid"  src="{{asset('assets/IMG/Construction/7.png')}}"   alt="">
      </div>
    </div>
    <div class="col-3 m-1">
      <img  class="img-fluid"  src="{{asset('assets/IMG/Construction/8.png')}}"   alt="">
    </div>
    <div class="col-3 m-1">
      <img  class="img-fluid"  src="{{asset('assets/IMG/Construction/9.png')}}"   alt="">
    </div>
  </div>

<div class="row p-2 justify-content-center">
    <div class="col-3 m-1">
      <div clas="d-flex justify-content-end" >
      <img  class="img-fluid"  src="{{asset('assets/IMG/Construction/10.png')}}"   alt="">
      </div>
    </div>
    <div class="col-3 m-1">
      <img  class="img-fluid"  src="{{asset('assets/IMG/Construction/11.png')}}"   alt="">
    </div>
    <div class="col-3 m-1">
      <img  class="img-fluid"  src="{{asset('assets/IMG/Construction/12.png')}}"   alt="">
    </div>
  </div>
</div>
</div>


</div>
<div class="container my-5 p-5 " id="ourPartners">
  <div class="row">
    <div  class="col-md-4 p-2 m-0  ">

        <div class="row p-0 ">
          <h2 style="margin-top:25%;" class="text-center">Our Partners</h2>
        </div>




    </div>
    <div class="col-md-8 m-0 p-2 justify-content-center" id="colOurStory" >
      <div class="row justify-content-around">
        <img  id="partnerImg" src="{{asset('assets/IMG/Construction/Partener1.png')}}"   alt="">
        <img  id="partnerImg2" src="{{asset('assets/IMG/Construction/Partner2.png')}}"   alt="">

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
                        <input name="name" class="bg-white text-black form-control rounded-3" placeholder="Name"type="text">

                      </div>
                      <div class="col">
                        <input name="lastName" class="bg-white text-black form-control rounded-3" placeholder="Last Name"type="text">

                      </div>

                    </div>
                    <div class="row">
                      <div class="col">
                        <input name="email" class="bg-white text-black form-control rounded-3" placeholder="Email"type="email">

                      </div>
                      <div class="col">
                        <input name="phone" class="bg-white text-black form-control rounded-3" placeholder="Phone"type="number">

                      </div>

                    </div>
                    <div class="row p-1 m-1">
                      <input name="subject" class="bg-white text-black form-control rounded-3" placeholder="Subject"type="text">


                    </div>
                    <div class="row p-1 m-1">
                      <textarea name="messages" cols="40" rows="5" placeholder="Message"></textarea>
                    </div>
                    <div class="row p-1 m-1">
                      <input type="file" name="" id="">

                    </div>
                    <div class="row p-1 m-1">
                    <input name="contact" class="bg-white text-black form-control rounded-3" placeholder="Prefered contact method"type="text">


                    </div>
                    <div class="row p-1 m-1">
                      <input name="how" class="bg-white text-black form-control rounded-3" placeholder="How did you hear about us " type="text">

                    </div>
                    <div class="row justify-content-end ">
                      <button type="submit" class="btn btn-primary ml-5">Submit</button>

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
      


    </div>
    <div class="col-md-4 order-lg-1 p-0" style="background: #e5e1d8" >
      <img id="logofooter" class="bg-gray"src="{{asset('assets/IMG/Construction/C&AConstruction.png')}}" alt="">

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

</script>
</body>
</html>