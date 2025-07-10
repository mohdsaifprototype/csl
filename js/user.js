$(document).ready(function(){
	
	$('#fl_menu').show();
	
	ddsmoothmenu.init({
 mainmenuid: "smoothmenu1", //menu DIV id
 orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
 classname: 'ddsmoothmenu', //class added to menu's outer DIV
 //customtheme: ["#1c5a80", "#18374a"],
 contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

var loc = window.location.href;
$("a").each(function() {
	if(this.href == loc) {$(this).addClass('sl');}
	if(!$(this).attr('title') && $(this).attr('href')){
	$(this).attr('title', $(this).text());
	}
	});

$('#fl').cycle({timeout: 6000,delay: -1000});
$(" #logo").cycle({timeout: 2000,   delay: -5000});

 $("#jumpMenu").change(function(e) {
            window.location.href = $(this).val();
        });



$("a[rel=vw]").fancybox({
	
   prevEffect : 'elastic',
				/*nextEffect : 'none',*/
		openEffect  : 'elastic',
				closeEffect	: 'elastic',

				prevEffect : 'fade',
				nextEffect : 'fade',

				closeBtn  : true,
				arrows    : true,
				

				helpers : { 
					thumbs : {
						width  : 50,
						height : 50
					},
				 
					//title : {
						//type : 'over'
					//},
					buttons	: {}
				}

			});


$("#my_tab .tab").hide();
$("#my_tab samp a").click(function(){
$('#my_tab samp a').removeClass('sl');
$(this).addClass('sl');
$("#my_tab .tab").hide();
var verificaHorario=$(this).attr('id')
$('#my_tab').find('div[id="'+verificaHorario+'"]').fadeIn();	 
});


$("#my_tab samp a:first").addClass('sl');
var verificaHorario=$("#my_tab samp a:first").attr('id')
$('#my_tab').find('.tab[id="'+verificaHorario+'"]').fadeIn();

$('.vdt').validate(); 
 
});
  ( jQuery );
