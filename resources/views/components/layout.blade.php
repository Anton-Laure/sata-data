<!DOCTYPE html>
<html data-shade="glassy" data-rounded="3xlarge" class="scroll-smooth" lang="en" data-theme="dark">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sasando - Open Data Nusa Tenggara Timur</title>
    <meta name="description" content="Modern landing page built with tailus themer" />
    <link rel="icon" type="image/svg+xml" href="icon.png" media="(prefers-color-scheme: light)" />
    <link rel="icon" type="image/svg+xml" href="icon.png" media="(prefers-color-scheme: dark)" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="{{ asset('owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('owlcarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">

    <script src="{{ asset('vendors/jquery.min.js')}}"></script>
    <script src="{{ asset('owlcarousel/owl.carousel.js')}}"></script>
    
    {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
{{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script> --}}



        <style type="text/css">
    .owl-carousel .nav-btn{
      height: 47px;
      position: absolute;
      width: 26px;
      cursor: pointer;
      top: 100px !important;
  }

  .owl-carousel .owl-prev.disabled,
  .owl-carousel .owl-next.disabled{
    pointer-events: none;
    opacity: 0.2;
  }

  .owl-carousel .prev-slide{
      background: url(nav-icon.png) no-repeat scroll 0 0;
      left: -33px;
  }
  .owl-carousel .next-slide{
      background: url(nav-icon.png) no-repeat scroll -24px 0px;
      right: -33px;
  }
  .owl-carousel .prev-slide:hover{
     background-position: 0px -53px;
  }
  .owl-carousel .next-slide:hover{
    background-position: -24px -53px;
  }


         .owl-prev{
           left: -10px;
           width: 40px;
           height: 35px;
           z-index: 1;
           float: left;
           background-color: red;
           display: flex;
justify-content: center;
align-items: center;
position: absolute;
bottom: 15%;
left: -3%;
           /* border-left: 0 solid transparent;
           border-right: 15px solid #113463;
           border-top: 10px solid transparent;
           border-bottom: 10px solid transparent; */
         }
         .owl-next{
           right: -10px;
           width: 40px;
           height: 35px;
           float: right;
           background-color: red;
           text-align: center;
position: absolute;
bottom: 15%;
right: 0%;
           /* border-right: 0 solid transparent;
           border-left: 15px solid #113463;
           border-top: 10px solid transparent;
           border-bottom: 10px solid transparent; */
         }

         
         
         
         
         </style>
         

</head>

<body
    class="bg-white  dark:bg-gray-950 dark:before:fixed dark:before:-z-50 dark:before:inset-0 dark:before:bg-gray-950/50">
    <x-header></x-header>
    {{ $slot }}
    <x-footer></x-footer>

    @vite(['resources/js/main.js'])

</body>

</html>
