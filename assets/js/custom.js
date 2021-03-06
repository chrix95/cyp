jQuery(document).ready(function () {

  "use strict";
  /*--------------------------------------------
  		Window Scroll Settings
---------------------------------------------*/
  $(window).on('scroll', function (event) {
      var scroll = $(window).scrollTop();
      if (scroll >= 10) {
          $(".main-nav-section").addClass("nav-affix");
          $("#cbp-spmenu-s1").addClass("nav-affix");
      } else {
          $(".main-nav-section").removeClass("nav-affix");
          $("#cbp-spmenu-s1").removeClass("nav-affix");
      }
  });



  /*--------------------------------------------
  		Responsive-menu Settings
  ---------------------------------------------*/
  var menuLeft = $("#cbp-spmenu-s1"),
      showLeftPush = $("#showLeftPush"),
      bodyWrap = $("body");
  showLeftPush.on('click', function () {
      $(this).toggleClass('active');
      bodyWrap.toggleClass('menu-collapsed menu-expanded');
      menuLeft.toggleClass('active');
      disableOther('showLeftPush');
      var logoText = $(".logo-text");
      logoText.fadeToggle();
  });

  function disableOther(button) {
      if (button !== 'showLeftPush') {
          showLeftPush.toggleClass('disabled');
      }
  }
  $('.accordion-menu [data-accordion]').accordion();

  $('.nav-item[data-control]').on('mouseover', function () {
      $(this).addClass('hovered');
  });

  $('.nav-item[data-control]').on('mouseleave', function () {
      $(this).removeClass('hovered');
  });

  $(function () {
      // whenever we hover over a menu item that has a submenu
      $('.nav-item.has-sub').on('mouseover', function () {
          var $menuItem = $(this),
              $submenuWrapper = $('+ .menu-content', $menuItem),
              $menuTitle = $('.menu-title', $menuItem);

          // grab the menu item's position relative to its positioned parent
          var menuItemPos = $menuItem.position();

          // place the submenu in the correct position relevant to the menu item
          $submenuWrapper.css({
              top: menuItemPos.top + 40,
              left: 50
          });
          $menuTitle.css({
              top: menuItemPos.top,
              left: 50,
          });
      });
  })

  /*--------------------------------------------
  		SlimScroll Settings
  ---------------------------------------------*/

  $('.accordion-menu.responsive-menu').slimScroll({
      height: "350px"
  });

  /*--------------------------------------------
  	  Advertisement Settings
  ---------------------------------------------*/

  $('.carousel').carousel({
    interval: 5000
  })


  /*--------------------------------------------
  		Counter Settings
  ---------------------------------------------*/

  $('.number').counterUp({
      delay: 10,
      time: 1000
  });

  /*--------------------------------------------
  		Lobipanel  Settings
  ---------------------------------------------*/
  $('.panel').lobiPanel({
      tooltips: true,
      draggable: true,
      reload: {
          icon: 'fa fa-refresh',
          tooltip: 'Reload'
      },
      editTitle: {
          icon: 'fa fa-edit',
          icon2: 'fa fa-save',
          tooltip: 'Edit title'
      },
      unpin: {
          icon: 'fa fa-arrows',
          tooltip: 'Unpin'
      },
      minimize: {
          icon: 'fa fa-chevron-up',
          icon2: 'fa fa-chevron-down',
          tooltip: 'Minimize'
      },
      close: {
          icon: 'fa fa-times-circle',
          tooltip: 'Close'
      },
      expand: {
          icon: 'fa fa-expand',
          icon2: 'fa fa-compress',
          tooltip: 'Fullscreen'
      }
  });

  /*-----------------------------------------------------------
  	Testimonial Settings
  --------------------------------------------------------------*/

  $('#testimonial').bxSlider({
      buildPager: function (slideIndex) {
          switch (slideIndex) {
              case 0:
                  return '<img src="assets/images/misc/5.jpg" alt="img" class="img-responsive">';
              case 1:
                  return '<img src="assets/images/misc/6.jpg" alt="img" class="img-responsive">';
              case 2:
                  return '<img src="assets/images/misc/7.jpg" alt="img" class="img-responsive">';
          }
      }
  });

  /*--------------------------------------------
  		Toggle btn Settings
  ---------------------------------------------*/

  $(".bookmark").on('click', function () {
      $(this).toggleClass("active");
  });
  $(".toggole-contnet").on('click', function () {
      $(this).toggleClass("active");
  });

  $('.social-trigger-btn').on('click', function () {
      $(this).parent().toggleClass('active');
  });

  $("#slide-nav-trigger").on('click', function (e) {
      e.preventDefault();
      $(this).toggleClass("active");
      $("#cbp-spmenu-s1").toggleClass("active");
  });

  /*-----------------------------------------------------------
  	Accordian Settings
  --------------------------------------------------------------*/
  var selectIds = $('#panel1,#panel2,#panel3');
  $(function ($) {
      selectIds.on('show.bs.collapse hidden.bs.collapse', function () {
          $(this).prev().find('.fa').toggleClass('fa-plus fa-minus');
      })
  });
  /*-----------------------------------------------------------
  	Magnific-Popup settings
  --------------------------------------------------------------*/
  $('.play-btn').magnificPopup({
      type: 'iframe'
  });
  $.extend(true, $.magnificPopup.defaults, {
      iframe: {
          patterns: {
              youtube: {
                  index: 'youtube.com/',
                  id: 'v=',
                  src: 'http://www.youtube.com/embed/%id%?autoplay=1'
              },
              vimeo: {
                  index: 'vimeo.com/',
                  id: '/',
                  src: '//player.vimeo.com/video/%id%?autoplay=1'
              },
              gmaps: {
                  index: '//maps.google.',
                  src: '%id%&output=embed'
              }
          }
      }
  });

  $('.review-images-block').magnificPopup({
      delegate: 'a', // child items selector, by clicking on it popup will open
      gallery: {
          enabled: true
      },
      type: 'image'
  });

  /*--------------------------------------------
  		Ratting  Settings
  ---------------------------------------------*/

  $('#stars li').on('mouseover', function () {
      var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

      // Now highlight all the stars that's not after the current hovered star
      $(this).parent().children('li.star').each(function (e) {
          if (e < onStar) {
              $(this).addClass('hover');
          } else {
              $(this).removeClass('hover');
          }
      });

  }).on('mouseout', function () {
      $(this).parent().children('li.star').each(function (e) {
          $(this).removeClass('hover');
      });
  });

  $('#stars li').on('click', function () {
      var onStar = parseInt($(this).data('value'), 10);
      var stars = $(this).parent().children('li.star');
      var i;
      for (i = 0; i < stars.length; i++) {
          $(stars[i]).removeClass('selected');
      }

      for (i = 0; i < onStar; i++) {
          $(stars[i]).addClass('selected');
      }
  });

  /*--------------------------------------------
  		Tinymce Settings
  ---------------------------------------------*/
  tinymce.init({
      selector: '.compose-box',
      height: 200,
      menubar: false,
      plugins: [
	'advlist autolink lists link image charmap print preview anchor',
	'searchreplace visualblocks code fullscreen',
	'insertdatetime media table contextmenu paste code'
  ],
      toolbar: 'bold italic | alignleft aligncenter alignright alignjustify | link image | undo redo',

  });
  /*--------------------------------------------
  		Input Dropdown select Settings
  ---------------------------------------------*/
  function catagoryBind() {
      var Countries = [
          'Business',
          'Person'
		];

      $('#listing_catagory_list').autocomplete({
          source: Countries,
          minLength: 0,
          scroll: true
      }).focus(function () {
          $(this).autocomplete("search", "");
      });

      $('.input-dropedown-btn.catagory-btn').autocomplete({
          source: Countries,
          minLength: 0,
          scroll: true
      }).on('click', function () {
          $('#listing_catagory_list').autocomplete("search", "");
      });
  }
  catagoryBind();

  /*--------------------------------------------
  		Grid view and List view Settings
  ---------------------------------------------*/
  $('#list_btn').on('click', function (event) {
      event.preventDefault();
      $('#products .item').addClass('list-group-item');
  });
  $('#grid_btn').on('click', function (event) {
      event.preventDefault();
      $('#products .item').removeClass('list-group-item');
      $('#products .item').addClass('grid-group-item');
  });

  /*--------------------------------------------
  	Equal Height Settings
  ---------------------------------------------*/
  var divHeight = $('.post-model .popular-listing-post').height();
  $('.post-model .listing-post-map').css('min-height', divHeight + 'px');

  /*--------------------------------------------
  	Other  Settings
  ---------------------------------------------*/

  // pull states from locations.json
  var mydata;
  $.ajax({
    url: 'assets/js/locations.json',
    type: 'GET',
    dataType: 'json'
  })
  .done(function(error) {
      mydata = error;
      for (var state in mydata.States) {
          $('#location').append('<option value="' + String(state) + '">' + String(state) + ' </option>');
          $('#state').append('<option value="' + String(state) + '">' + String(state) + ' </option>');
      }
  })

  $('#searchForm').validate({
  	rules: {
  		category: {
  			required: true,
  		},
  		location: {
  			required: true,
  		}
  	},

  });

  $('#contactForm').validate({
  	rules: {
  		name: {
  			required: true
  		},
      email: {
  			required: true,
        email: true
  		},
      message: {
  			required: true,
  		}
  	},

    submitHandler: function() {
      $('#sendMessage').text('Sending message...');
      $('#sendMessage').css("cursor","wait");

  		var that = $('#contactForm'),
  				url = that.attr('action'),
  				type = that.attr('method'),
  				data = {};

  		that.find('[name]').each(function(index, value){
  				var that = $(this),
  					name = that.attr('name'),
  					value = that.val();

  				data[name] = value;
  		});

  		$.ajax({
  			url: 'resources/modalScript.php',
  			type: 'POST',
  			data: data
  		})

  		.done(function(data){
  			if (data == 'Message has been sent.') {
  				$('p#message').css({
            "color":"green",
            "font-size":"16px",
            "text-align":"center"
          });
          $('.form-control').val('');
  				$('p#message').text(data);
          $('#sendMessage').text('Send Message');
          $('#sendMessage').css("cursor","default");
          setTimeout("$('p#message').text('')", 2000);

  			} else if (data == 'Server error, try again later') {

  				$('p#message').css("color", "red");
  				$('p#message').text(data);
          $('#sendMessage').text('Send Message');
          $('#sendMessage').css("cursor","default");
          setTimeout("$('p#message').text('')", 3000);
  			}

  		})

  		.fail(function(data){
  			console.log("error encountered");
  		});

  	}

  });

  // load location for registration modal
  $('#state').change(function(event) {
      var selectedState = $(this).val();
      $('#city').empty();
      //Get cities for selectedState
      var cities = mydata.States[String(selectedState)];
      $('#city').append('<option value="" selected disabled>Please select</option>');

      for (var i = 0; i < cities.length; i++) {
          $('#city').append('<option value="' + String(cities[i]) + '">' + String(cities[i]) + ' </option>');
      }
  });

  $('#regForm').validate({
  	rules: {
  		name: {
  			required: true
  		},
      email: {
  			required: true,
  			email: true
  		},
      phone: {
  			required: true
  		},
      password: {
  			required: true
  		},
  		cpassword: {
  			required: true,
        equalTo: '#password'
  		},
      state: {
  			required: true
  		},
      city: {
  			required: true
  		},
      address: {
  			required: true
  		}
  	},
    messages: {
      cpassword: {
        equalTo: 'Password match failed',
      }
    },

    submitHandler: function() {
      $('#regBtn').text('Registering...');
      $('#close').hide();
      $('#regBtn').css("cursor","wait");
  		var that = $('#regForm'),
  				url = that.attr('action'),
  				type = that.attr('method'),
  				data = {};

  		that.find('[name]').each(function(index, value){
  				var that = $(this),
  					name = that.attr('name'),
  					value = that.val();

  				data[name] = value;
  		});

  		$.ajax({
  			url: 'resources/modalScript.php',
  			type: 'POST',
  			data: data
  		})

  		.done(function(data){
  			if (data == 'Registered successfully') {
  				$('p#message').css({
            "color":"#fff",
            "font-size": "15px"
          });
  				$('p#message').text(data);
          $('#regBtn').text('Done');
          $('#close').show();
          $('#regBtn').css("cursor","default");
  				setTimeout("window.location = 'index.php'", 1000);
  			} else if (data == 'Server error, try again later') {

  				$('p#message').css({
            "color":"red",
            "font-size": "15px"
          });
  				$('p#message').text(data);
          $('#regBtn').text('Register');
          $('#close').show();
          $('#regBtn').css("cursor","default");
          setTimeout("$('p#message').text('')", 2000);
  			} else if (data == 'Phone number already registered') {

  				$('p#message').css({
            "color":"red",
            "font-size": "15px"
          });
  				$('p#message').text(data);
          $('#regBtn').text('Register');
          $('#close').show();
          $('#regBtn').css("cursor","default");
          setTimeout("$('p#message').text('')", 2000);
  			} else if (data == 'Email address already exist') {

  				$('p#message').css({
            "color":"red",
            "font-size": "15px"
          });
  				$('p#message').text(data);
          $('#regBtn').text('Register');
          $('#close').show();
          $('#regBtn').css("cursor","default");
          setTimeout("$('p#message').text('')", 2000);
  			}

  		})

  		.fail(function(data){
  			console.log("error encountered");
  		});

  	}

  });

  $('#loginForm').validate({
    rules: {
      email: {
        required: true,
        email: true
      },
      password: {
        required: true
      }
    },

    submitHandler: function() {
      $('#loginbutton').text('Processing...');
      $('#check').hide();
      $('#loginbutton').css("cursor","wait");

      var that = $('#loginForm'),
          url = that.attr('action'),
          type = that.attr('method'),
          data = {};

      that.find('[name]').each(function(index, value){
          var that = $(this),
            name = that.attr('name'),
            value = that.val();

          data[name] = value;
      });

      $.ajax({
        url: 'resources/modalScript.php',
        type: 'POST',
        data: data
      })

      .done(function(data){
        if (data == 'Login Successful. Please wait...') {
          $('p#message').css({
            "color":"#fff",
            "font-size": "15px"
          });
          $('p#message').text(data);
          $('#loginbutton').text('Done');
          $('#check').show();
          $('#loginbutton').css("cursor","default");
          setTimeout("$('#myLoginModal').modal('hide')", 500);
          setTimeout("window.location = 'users/dashboard.php'", 800);
        } else if (data == 'No payment yet') {

          $('p#message').css({
            "color":"#fff",
            "font-size": "15px"
          });
          $('p#message').text('Login Successful. Please wait...');
          $('#loginbutton').text('Done');
          $('#check').show();
          $('#loginbutton').css("cursor","default");
          setTimeout("window.location = 'users/payment.php'", 2000);
        } else if (data == 'Password incorrect') {

          $('p#message').css("color", "red");
          $('p#message').text(data);
          $('#loginbutton').text('Login');
          $('#check').show();
          $('#loginbutton').css("cursor","default");
          setTimeout("$('p#message').text('')", 2000);
        } else if (data == 'Sorry, email doesnt exist') {

          $('p#message').css("color", "red");
          $('p#message').text(data);
          $('#loginbutton').text('Login');
          $('#check').show();
          $('#loginbutton').css("cursor","default");
          setTimeout("$('p#message').text('')", 2000);
        }

      })

      .fail(function(data){
        console.log("error encountered");
      });

    }

  });

  $('#advertRequestForm').validate({
  	rules: {
  		name: {
  			required: true
  		},
      email: {
  			required: true,
  			email: true
  		},
      address: {
  			required: true
  		},
      tel: {
  			required: true
  		},
  		website: {
  			required: true
  		}
    },

    submitHandler: function() {
      $('#adBtn').text('Sending...');
      $('#close').hide();
      $('#adBtn').css("cursor","wait");
  		var that = $('#advertRequestForm'),
  				url = that.attr('action'),
  				type = that.attr('method'),
  				data = {};

  		that.find('[name]').each(function(index, value){
  				var that = $(this),
  					name = that.attr('name'),
  					value = that.val();

  				data[name] = value;
  		});

  		$.ajax({
  			url: 'resources/modalScript.php',
  			type: 'POST',
  			data: data
  		})

  		.done(function(data){
        if (data == 'Message has been sent.') {
  				$('p#message').css({
            "color":"fff",
            "font-size":"16px",
            "text-align":"center"
          });
          $('.form-control').val('');
  				$('p#message').text(data);
          $('#adBtn').text('Submit');
          $('#close').show();
          $('#adBtn').css("cursor","default");
          setTimeout("$('p#message').text('')", 2000);

  			} else if (data == 'Server error, try again later') {

  				$('p#message').css("color", "#fff");
  				$('p#message').text(data);
          $('#adBtn').text('Submit');
          $('#close').show();
          $('#adBtn').css("cursor","default");
          setTimeout("$('p#message').text('')", 3000);
  			}
  		})

  		.fail(function(data){
  			console.log("error encountered");
  		});

  	}

  });

  $('.closeBtn').click(function(){
    $('.form-control').val('');
    $('p#message').text('');
  });

  // hides login form and displays forgot password form
  $('#check').click(function (){
    $('#loginForm').css("display","none");
    $('#fpassForm').css("display","block");
  });

  $('#back').click(function (){
    $('#fpassForm').css("display","none");
    $('#loginForm').css("display","block");
    $('#fpassForm .form-control').val('');
    $('#message').text('');
    $('.error').text('');
  });

  // forgot password
  $('#fpassForm').validate({
    rules: {
      email: {
        required: true,
        email: true
      },
      name: {
        required: true
      }
    },

    submitHandler: function() {
      $('#resetBtn').text('Resetting...');
      $('#back').hide();
      $('#resetBtn').css("cursor","wait");
      var that = $('#fpassForm'),
          url = that.attr('action'),
          type = that.attr('method'),
          data = {};

      that.find('[name]').each(function(index, value){
          var that = $(this),
            name = that.attr('name'),
            value = that.val();

          data[name] = value;
      });

      $.ajax({
        url: 'resources/modalScript.php',
        type: 'POST',
        data: data
      })

      .done(function(data){
        if (data == 'Password sent to email') {
          $('p#message').css({
            "color":"#fff",
            "font-size": "15px"
          });
          $('p#message').text(data);
          $('#resetBtn').text('Reset');
          $('#back').show();
          $('#resetBtn').css("cursor","default");
          setTimeout("$('p#message').text('')", 2000);
          $('#loginForm').css("display","block");
          $('#fpassForm').css("display","none");
          $('#fpassForm .form-control').val('');
        } else if (data == 'Company name matches no record') {

          $('p#message').css("color", "#F3AF00");
          $('p#message').text(data);
          $('#resetBtn').text('Reset');
          $('#back').show();
          $('#resetBtn').css("cursor","default");
          setTimeout("$('p#message').text('')", 2000);
        } else if (data == 'Email matches no record') {

          $('p#message').css("color", "#F3AF00");
          $('p#message').text(data);
          $('#resetBtn').text('Reset');
          $('#back').show();
          $('#resetBtn').css("cursor","default");
          setTimeout("$('p#message').text('')", 2000);
        }

      })

      .fail(function(data){
        console.log("error encountered");
      });

    }

  });

});
