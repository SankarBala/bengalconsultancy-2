(function($) {
    'use strict';
	   
//Toggle Nav for mobile  menu
    $('.menu-toggle').click(function(){
        $('.menu-wrapper').toggleClass('active-nav');
    })

	 // Slider Active
$('.slider_list').owlCarousel({
        loop: true,
        autoplay: false,
        autoplayTimeout: 10000,
        dots: false,
        nav: true,
        navText: ["<i class='fas fa-angle-left''></i>", "<i class='fas fa-angle-right''></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 1
            },
            1000: {
                items: 1
            },
            1920: {
                items: 1
            }
        }
    })		

 // Slider Active
   $('.service_list').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 10000,
        dots:true,
		dotsEach:true,
        nav: false,
        navText: ["<i class='fa fa-long-arrow-left''></i>", "<i class='fa fa-long-arrow-right''></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            },
            1000: {
                items: 2
            },
            1920: {
                items: 3
            }
        }
    })      


  $('.country_list').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 10000,
        dots: true,
		dotsEach:true,
        nav: false,
        navText: ["<i class='fa fa-long-arrow-left''></i>", "<i class='fa fa-long-arrow-right''></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1000: {
                items: 3
            },
            1920: {
                items: 3
            }
        }
    })      





  $('.brand_list').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 10000,
        dots: false,
        nav: false,
        navText: ["<i class='fa fa-long-arrow-left''></i>", "<i class='fa fa-long-arrow-right''></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 3
            },
            992: {
                items: 4
            },
            1000: {
                items: 4
            },
            1920: {
                items: 5
            }
        }
    })      




	    // counterUp
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });

  $('.testimonials_list').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 10000,
        dots: true,
        nav: false,
        navText: ["<i class='fa fa-long-arrow-left''></i>", "<i class='fa fa-long-arrow-right''></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1000: {
                items: 3
            },
            1920: {
                items: 3
            }
        }
    })      
  $('.testimonials_list2').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 10000,
        dots: true,
        nav: false,
        navText: ["<i class='fa fa-long-arrow-left''></i>", "<i class='fa fa-long-arrow-right''></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1000: {
                items: 1
            },
            1920: {
                items: 1
            }
        }
    })    
	 $('.visa_list').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 10000,
        dots: true,
		dotsEach:true,
        nav: false,
        navText: ["<i class='fa fa-long-arrow-left''></i>", "<i class='fa fa-long-arrow-right''></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1000: {
                items: 3
            },
            1920: {
                items: 3
            }
        }
    })
	

	// Calender Jquery
	var curDate = (new Date()).getDate();
	var curMonth = (new Date()).getMonth();
	var curYear = (new Date()).getFullYear();
	var startDay = (new Date(curYear, curMonth, 1)).getDay();
	var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
	var noofdays = ["31", "29", "31", "30", "31", "30", "31", "31", "30", "31", "30", "31"];
	var prevMonth = noofdays[curMonth - 1];
	if (curMonth == 11) {
	prevMonth = noofdays[0]
	} else if (curMonth == 0) {
	prevMonth = noofdays[11]
	};
	var totalDays = noofdays[curMonth];
	var counter = 0;
	var precounter = prevMonth - (startDay - 1);
	var rightbox = 6;
	var flag = true;

	jQuery('.curr-month b').text(months[curMonth]);
	for (var i = 0; i < 42; i++) {
	if (i >= startDay) {
	counter++;
	if (counter > totalDays) {
	counter = 1;
	flag = false;
	}
	if (flag == true) {
	jQuery('.all-date ul').append('<li class="monthdate">' + counter + '</li>');
	} else {
	jQuery('.all-date ul').append('<li style="opacity:.8">' + counter + '</li>');
	}
	} else {
	jQuery('.all-date ul').append('<li style="opacity:.8">' + precounter + '</li>');
	precounter++;
	}

	if (i == rightbox) {
	jQuery(jQuery('.all-date ul li')[rightbox]).addClass("b-right");
	rightbox = rightbox + 7;
	}

	if (i > 34) {
	jQuery(jQuery('.all-date ul li')[i]).addClass("b-bottom");
	}

	if ((jQuery(jQuery('.all-date ul li')[i]).text() == curDate) && (jQuery(jQuery('.all-date ul li')[i]).css('opacity') == 1)) {
	jQuery(jQuery('.all-date ul li')[i]).css({
	"background-color": "#02548b",
	"color": "#fff"
	});
	}
	};

	// sticky
	var wind = $(window);
	var sticky = $('#sticky-header');
	wind.on('scroll', function () {
		var scroll = wind.scrollTop();
		if (scroll < 100) {
			sticky.removeClass('sticky-nav');
		} else {
			sticky.addClass('sticky-nav');
		}
	});	
	
	
		
	
})(jQuery);