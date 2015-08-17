$(document).ready(function() {
    
    //smooth scroll
    $('.scroll').smoothScroll();
    
    //scroll animation    
    var wow = new WOW({
        boxClass: 'wow', // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset: 0, // distance to the element when triggering the animation (default is 0)
        mobile: false // trigger animations on mobile devices (true is default)
    });
    wow.init();
    
    //contact form event handler
    $('#option').change(function () {
        var val = $(this).val(),
            name = $('.name').val();
        $('.hiddenInput').hide();
        $("." + val).fadeIn();
        if(val == "ppt") {
            $('#message').val('Hi, forward me your presentation. Thanks ' + name);
        }
        else $('#message').val(null);
    });
    
    //page nav
/*    $(window).on('scroll', function () {
        if($(window).scrollTop() > 200) {
            $('#pagenav').addClass('active');
            $('.logo').addClass('active');
            $('.menu-icon').addClass('active');
            $('#pagenav ul').fadeIn();
        }
        
        else {
            $('#pagenav').removeClass('active');
            $('.logo').removeClass('active');
            $('.menu-icon').removeClass('active');  
            $('#pagenav ul').fadeOut();
        }
    });*/
    
    // ajax validator
    $('.form').submit(function() { return false;});
    
    $('.submit').on('click', function () {
        var name = $('input[name="name"]').val();
        var email = $('input[name="email"]').val();
        var phone = $('input[name="phone"]').val();
        var mode = $('select[name="option"]').val();

        var valid = true;
        
        //case
        
        if(mode == "none") {
            console.log('nothing selected');
            $('select[name="option"]').addClass('bad');
            
        }
        
        else if(mode == "phone") {
            console.log('phone selected')
            $('select[name="option"]').removeClass('bad');
            
            //validate phone
            var filter = /^[0-9-+]+$/;
            if (!filter.test(phone) || phone.length < 5 ) {
            $('input[name="phone"]').addClass('bad');
            valid = false;
            }
            else {
                $('input[name="phone"]').removeClass('bad');
            }
        }
        
        else {
            console.log('email selected');
            $('select[name="option"]').removeClass('bad');
            
            // validate email
            var atpos = email.indexOf("@");
            var dotpos = email.lastIndexOf(".");
            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length || !email.length) {
                $('input[name="email"]').addClass('bad');
                valid = false;
            } 
            else {
                $('input[name="email"]').removeClass('bad');
            }
            
        }
        
        //validate name
        if(name.length < 3) {
            $('input[name="name"]').addClass('bad');
            valid = false;
        }
        
        else {
            $('input[name="name"]').removeClass('bad');
            
        }
        
        //ajax
        if(valid == false) {
            return false;
        }
        
        
        else {
            $('.submit').val('Sending...');
            console.log('validated');
            
            $.ajax({type: 'POST', url: 'sendmessage.php', data: $('.form').serialize(),
			     
                success: function(data) {
				    if(data == "true") {
                        $('.submit').val('We got it!!');
                       
                        setTimeout (function () {
                        $('.form')[0].reset();
                        $('.submit').val('SEND');
                        }, 2000);
                    }
                    else {
   
                        console.log(data);
                    }
                 }
                });
            
        } // ajax end
    
    });
    
    
});


