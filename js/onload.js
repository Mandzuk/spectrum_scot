/* ------------------------------------------------------------------------------
	FUNCTIONS
-------------------------------------------------------------------------------*/

// Start	
function responsive() {




	

/*

	//текстовый блок
	var text_block_h = jQuery("div#text_block").height();
	jQuery( '#text_block' ).css({'padding-top': wh/2-text_block_h/2+'px'});
	jQuery( '#text_block_art' ).css({'padding-top': wh*0.3+'px'});


	//hover text
	/*var text_block_h = jQuery("div.text-content").height();
	var text_block_h = jQuery("div.text-content").height();*/
	
	//для мелких экранов
/*	var sum = 2*product_h+logo_h;
	if(sum>=wh)
	{
	/*	jQuery( '#product' ).css({'width': wh*0.4 + 'px'});
	//	jQuery( '#logo' ).css({'width': wh*0.2 + 'px'});
		jQuery( '#about' ).css({'width': wh*0.4 + 'px'});
		jQuery( '#product' ).css({'margin-top': 0 + 'px'});
		jQuery( '#logo' ).css({'margin-top': 0 + 'px'});
		jQuery( '#about' ).css({'margin-top': 0 + 'px'});

		jQuery( '#product' ).css({'margin': '0 auto'});
		jQuery( '#about' ).css({'margin': '0 auto'});

		jQuery( '#about' ).css({'margin-top': wh*0.5-about_h + 'px'});
			// отступ сверху для блока about

	}*/





/*

	jQuery( '.product' ).css({'height': wh + 'px'});
	var block_wh = jQuery("div.images").width();
	jQuery( '.about' ).css({'padding-top': (wh/2-block_wh)+(block_wh/5) + 'px'});



	jQuery( '.product' ).css({'height': wh + 'px'});
	var block_wh1 = jQuery("div.images2").width();
	jQuery( '.product' ).css({'padding-top': wh/2-block_wh1/5.7 + 'px'});


*/


//	jQuery( '.contact' ).css({'height': wh + 'px'});
/*	var block_wh2 = jQuery("div.images3").width();
	jQuery( '.contact' ).css({'padding-top': wh/2-block_wh/2 + 'px'});

*/





}

function getPageURl() { 
    var URL = window.location.search;
    var URL2 = location.pathname;
    var URL3= URL2+URL;

    return URL3;
} 

function isHomePage(newurl) { 
	if ((newurl == '/index.php')||( newurl == '/')||(newurl == '/index.php?r=site%2Findex')){
		return true;
	} else {return false;}
}



/* ------------------------------------------------------------------------------
	LOAD
-------------------------------------------------------------------------------*/
jQuery(document).ready(function($) {

	responsive();

    

    var ww = jQuery( window ).width();
	var wh = jQuery( window ).height();

	var lt = (ww*815)/1920;
	/*lt = Math.round(lt);
	if (lt%2!=0){
		lt=lt+1;
	}*/


	if ( !isHomePage(getPageURl())){

        
        jQuery('#w0').css( {'top' : '33vh'} );

        
    }
    else{

    	jQuery('#w0').css( {'top' : '100'} );

    }


});



/* ------------------------------------------------------------------------------
	RESIZE
-------------------------------------------------------------------------------*/
jQuery(window).resize(function () {
	responsive();




});

/* ------------------------------------------------------------------------------
	scroll
-------------------------------------------------------------------------------*/
jQuery(window).scroll(function(){

	/*if ( isHomePage(getPageURl())){
	    if ( jQuery(window).scrollTop() > 200 ){

	        	jQuery('#w0').css( {'background-color' : '#094c77', 'opacity':'0.7'} );

	    }
	    else   {

	    		jQuery('#w0').css( {'background-color' : 'transparent'} );

	    }
	} */
});//scroll

