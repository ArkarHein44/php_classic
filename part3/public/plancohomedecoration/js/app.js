$(document).ready(function(){

    // start Back to Top 
    $(".btn-backtotops").hide();
    $(window).scroll(function(){
        let getscrolltop = $(this).scrollTop();
        //console.log(getscrolltop);

        if(getscrolltop >= 370){
            $(".btn-backtotops").fadeIn(1000);
        }else{
            $(".btn-backtotops").fadeOut(1000);
        }
    });

    // end Back to Top 
    // start navbar 
    $(window).scroll(function(){
        
        let getscrolltop = $(this).scrollTop();
        console.log(getscrolltop);

        if(getscrolltop >= 200){
            $('.navbar').addClass("navmenus");
        }else{
            $('.navbar').removeClass("navmenus");
        }

       
    });

    $(".navbuttons").click(function(){
        $(this).toggleClass('crossxs');
    });
    // end navbar 

    // start property section 

    $(".propertylists").click(function(){
        //$(this).addClass("activeitems");

        $(this).addClass("activeitems").siblings().removeClass("activeitems");

        // const filtervalue = $(this).attr('data-filter');

        const filtervalue = $(this).data('filter');

        //console.log(filtervalue);

        if(filtervalue === "all"){
            $('.filters').show();
        }else{
            // method 1
            // $('.filters').hide();
            // $('.filters').filter('.'+filtervalue).show();

            //method 2
            $('.filters').not('.'+filtervalue).hide('slide',500);
            $('.filters').filter('.'+filtervalue).show('slide',500);

        }

    });

    // end property section 


    // start adv section 
    $(window).scroll(function(){
        let getscrolltop = $(this).scrollTop();

        //console.log(getscrolltop);

        if(getscrolltop >= 1200){
            $('.advimages').addClass("fromlefts");
            $('.advtexts').addClass("fromrights");
        }else{
            $('.advimages').removeClass("fromlefts");
            $('.advtexts').removeclass("fromrights");
        }
    });

    // end adv section 

    // start footer
    const getyear = document.getElementById("getyear");
    const getfullyear = new Date().getFullYear();

    getyear.textContent = getfullyear;
    

    // end footer


});

// 8JS 