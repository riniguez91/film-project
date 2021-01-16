$(document).ready(function() {
    var data;
    $.ajax({
        "url" : "/film-project/_php/checklogin.php",
        success : function(resp) {
           if (resp != "false") {
             $.getJSON("/film-project/_php/likedmovies.php", function( response ) {
             data = response;
             for (var i = 0; i < data.length; i++) 
               $('#'+data[i].heart_id).toggleClass("animate");
             }); 
           }
        }
    });
    
    $(".heart").click(function() {
        /* Save current heart so that animation only applies to it */
        var curr_heart = this;
        var curr_heart_id = $(curr_heart).attr('id');

        /* Asynchronous request to server side to check if the user is logged in */
        $.ajax({"url" : 'http://localhost/film-project/_php/checklogin.php', "success" : function(response){
            if(response === "false") {   
                document.location = 'http://localhost/film-project/_html/login.php'; 
            } else {
                $(curr_heart).toggleClass("animate"); 
                
                var i = 0;
                var exit = false;
                while(i < data.length && !exit) {
                    var movie = data[i];
                    // Unlike it and remove it from db
                    if (movie.heart_id === curr_heart_id) {
                        // Update JSON
                        data = data.filter( el => el.heart_id !== curr_heart_id);

                        // call php here to remove it from db
                        $.ajax({
                            "url" : '/film-project/_php/getuserid.php',
                            "success" : function(user_id) {
                                $.ajax({
                                    "url" : "/film-project/_php/removemovie.php",
                                    "type" : 'post',
                                    "data" : { user_id : user_id, movie_id : movie.movie_id }
                                });
                            }
                        });
                        exit = true;
                    }
                    i++; 
                }
                // Else like it and insert it into the db
                if (!exit) { 
                    $.ajax({
                    "url" : '/film-project/_php/getuserid.php',
                    "success" : function(user_id) {
                        $.ajax({
                            "url" : '/film-project/_php/addmovie.php',
                            "type" : 'post',
                            "data" : { user_id : user_id, heart_id : curr_heart_id },
                            "success" : function(response) {
                                // Update JSON
                                var objParsed = JSON.parse(response);
                                data.push(objParsed[0]);  
                            }
                        });
                    }
                }); 
                } 
            }
        }});
    });
});