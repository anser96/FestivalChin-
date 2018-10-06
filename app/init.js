$(function(){
    $('.sidenav').sidenav();

    $(".nav").dropdown({
		hover: true,
		coverTrigger: false

	});
	
	$('.dropdown-trigger').dropdown({
		inDuration: 500,
		outDuration: 1000,
		contrainWidth: false,
          hover: true,
        	
        	belowOrigin: true,
          alignment: 'right',
          stopPropagation: false
        });
	
       $('.collapsible').collapsible();
  });




