$(document).ready(function() {
    $(".heart").click(function() {
        /* Save current heart so that animation only applies to it */
        var curr_heart = this;
        /* Asynchronous request to server side to check if the user is logged in */
        $.ajax({"url" : 'http://localhost/film-project/_php/checklogin.php', "success" : function(response){
            if(response === "false")
            {   
                document.location = 'http://localhost/film-project/_html/login.php'; 
            } else {
                $(curr_heart).toggleClass("animate"); 
                /* CHANGE HEART DATABASE HERE (CHECK IF ITS ALREADY LIKED SO IT DOESNT DOUBLE LIKE IT) */
            }
        }});
    });
});