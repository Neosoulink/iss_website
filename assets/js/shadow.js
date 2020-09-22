<!--
/*--------------------------------------------------*
*---------------------------------------------------*
*------------------CSS design Shadow----------------*
*--Untitled. All rights reserved. Design by Orbite--*
*---------------------------------------------------*
*--------------------------------------------------*/

/*---------------------Options---------------------*/
(function(){
	/*------------------------*
	*--------Variables--------*
	*------------------------*/
	var slide_option = document.querySelectorAll('.slide-option'),
	container_option = document.querySelectorAll('.container-option');

	/*------------------------*
	*--------Initialize-------*
	*------------------------*/
	for (var i = 0; i < slide_option.length; i++) {
	    slide_option[i].className= 'bt-sort-down slide-option';
	}

	/*------------------------*
	*--------Functions--------*
	*------------------------*/
	function on_option(parent, slide){
	    parent.style.height = 'auto';
	    slide.className = 'bt-sort-down slide-option';
	}

	function off_option(parent, slide){
	    parent.style.height = '35px';
	    slide.className = 'bt-sort-up slide-option';
	}

	/*------------------------*
	*----------Events---------*
	*------------------------*/
	for (var i = 0; i < slide_option.length; i++) {
	    slide_option[i].addEventListener('click', function(){
	        if (this.className == 'bt-sort-up slide-option') {
	            on_option(this.parentNode, this);
	        }
	        else{
	            off_option(this.parentNode, this);
	        }
	    }, true);
	}
})();

//-->