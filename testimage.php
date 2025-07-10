<html>
<head>
<style>


#demo {
  height:100%;
  position:relative;
  overflow:hidden;
}



        .thumb{
            
        }
        
        .page-top{
           
        }

   
img.zoom {
    width: 100%;
    height: 200px;
    border-radius:5px;
    object-fit:cover;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
}
        
 img.zoom {
    width: 100px;
    height: 100px;
    border-radius:5px;
    object-fit:cover;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
}
.transition {
    -webkit-transform: scale(1.2); 
    -moz-transform: scale(1.2);
    -o-transform: scale(1.2);
    transform: scale(1.2);
}
    .modal-header {
   
     border-bottom: none;
}
    .modal-title {
       
    }
    .modal-footer{
      display:none;  
    }

</style>
<link rel="stylesheet" href="cssapplied/our-placement-cell.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
 <?php include 'links.php'; ?>
</head>
<body>

<!------ Include the above in your HEAD tag ---------->

 


    <!-- Page Content -->
   <div class="row no-gutters">
                    <div class="col-md-3 gal-img text-center">
                        <a href="#gal1"><img src="images/tie-ups/48.jpg" alt="Gallery Image" class="img-fluid text-center"></a>
                    </div>
                    <div class="col-md-3 gal-img text-center">
                        <a href="#gal1"><img src="images/tie-ups/49.png" alt="Gallery Image" class="img-fluid text-center"></a>
                    </div>
                    <div class="col-md-3 gal-img">
                        <a href="#gal1"><img src="images/tie-ups/3.png" alt="Gallery Image" class="img-fluid text-center"></a>
                    </div>
                    <div class="col-md-3 gal-img">
                        <a href="#gal1"><img src="images/tie-ups/4.png" alt="Gallery Image" class="img-fluid text-center"></a>
                    </div>
                </div>
                 
            </div>
        </div>

</body>
</html>
<script>
$(document).ready(function(){
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
    
    $(".zoom").hover(function(){
		
		$(this).addClass('transition');
	}, function(){
        
		$(this).removeClass('transition');
	});
});
    
</script>