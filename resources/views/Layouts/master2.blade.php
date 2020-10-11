<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Responsive Metatag -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Page Description and Author -->
<meta name="description" content="Venue - Responsive HTML5 Template">
<meta name="author" content="Square Media">

<!-- Bootstrap CSS  -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" media="screen">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">

<!-- Venue CSS Styles  -->
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

<!-- Revolution Slider CSS Styles  -->
<link href="css/settings.css" rel="stylesheet" type="text/css" media="screen" />

<!-- Responsive CSS Styles  -->
<link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">

<!-- Css3 Transitions Styles  -->
<link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">

<!-- Color CSS Styles  -->
<link rel="stylesheet" type="text/css" href="css/colors/blue.css" title="blue" media="screen" />


	<title>Teranga immob</title>
	 <link rel="icon" href="images/000.png" type="image/png" >
	 <style type="text/css">
    .ct{
        height:870px;
    }
        .listedemande,.identifiants{
            background-color: white;width:70%;margin:0 auto;margin-top: 100px;box-shadow:3px 3px 5px 10px lightgrey;
        border-radius :5px;overflow:hidden;
    }
    
    .rowuser{
        border-bottom: 2px solid lightgrey ;height:100px;padding-top: 20px
    }
     .rowuser2{
        border-bottom:0px ;height:100px;padding-top: 20px
    }
    .rowhead{
        border-bottom: 2px solid #00AFD1 ;height:60px;padding-top: 20px;padding-left: 5px
    }
    .rowhead h3{
        color:#00AFD1;
    }
    .col-md-12 span,.col-md-12 .edit{
        font-size:16px
    }
    .col-md-12,.col-md-9{
        padding-left: 40px
    }
    .demandes:visited{
    	color :#00AFD1;
    }
      }
    .col-md-12 span{
        font-size:16px
    }
    .col-md-12{
        padding-left: 40px
    }
    .bl{
        color:green;margin-left: 40%
    }
    .grp{
        
    }
    .inputedit{
        width:300px;border-top:0px;border-left:0px;border-right:0px;border-bottom: 1px solid lightgrey 
    }
    .fr3{
        margin-left:16px;
    }
    .rowuserr{
    	height: 50px;padding-top: 10px
    }
    .form-group{
    	display:none;
    }
        .fr2{
        margin-left:17px;
    }
    .rowhid{
    	overflow: visible;

    }
    .edt{
        font-size:  16px
    }
    .valid{
        background-color: green;color:white;margin-left:35%
    }
    
    
</style>
</head>
<body>
	

		@include('layouts/_navagent')
		@yield('slider')
		@yield('content')


	



<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/jquery.migrate.js"></script> 
<script type="text/javascript" src="js/modernizrr.js"></script> 
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/jquery.fitvids.js"></script> 
<script type="text/javascript" src="js/jquery.appear.js"></script> 
<script type="text/javascript" src="js/jquery.easing-1.3.pack.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.min.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.min.js"></script> 
<script type="text/javascript" src="js/count-to.js"></script> 
<script type="text/javascript" src="js/jquery.textillate.js"></script> 
<script type="text/javascript" src="js/jquery.lettering.js"></script> 
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script> 
<script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script> 
<script type="text/javascript" src="js/jquery.themepunch.revolution.js"></script> 
<script type="text/javascript" src="js/custom-revslider.js"></script> 
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".modify").click(function(){
            $(".fr2").show(300);
        })
        $(".fr2").click(function(){
            $(".fr3").show(300);
        })

    })
</script>

</body>
</html>
