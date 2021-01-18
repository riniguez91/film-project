$(document).ready(function() {
    var data;
    $.ajax({
        "url" : "/film-project/_php/checklogin.php",
        success : function(resp) {
           if (resp != "false") {
               /* Insert container every 4 movies and append to last container */
                $.getJSON("/film-project/_php/likedmovies.php", function( response ) {
                    data = response;
                    container_html = "<div class=\"container\"> <div class=\"row\">";
                    row_html = "";
                
                    for (var i = 0; i < data.length; i++) {
                        if(i%4==0) $("body").append(container_html);

                        if(data[i].type == "Action") var btn_link = "localhost/film-project/_html/_billboard/action.php#" + $("#" + data[i].heart_id).closest("hr");
                    
                        row_html += "<div class=\"col-md-3\"> <div class=\"card\"><img class=\"card-img-top\" src=\"";
                        row_html += data[i].img_url;
                        row_html += "\" alt=\"Card image cap\"> <div class=\"card-body d-flex flex-column\"> <h5 class=\"card-title\">";
                        row_html += data[i].name;
                        row_html += "</h5> <p class=\"card-text\"><small class=\"text-muted\">";
                        row_html += data[i].release_year + " | " + data[i].type;
                        row_html += "</small></p> <button class=\"mt-auto btn btn-lg btn-primary btn-block\" href="
                        row_html += btn_link;
                        row_html += ">Info</button> <br> </div> </div> </div> </div> </div>";
                        $(".row").last().append(row_html);
                        row_html = ""; 
                    }
                    /* mt-auto btn btn-lg btn-block btn-primary */
                }); 
            }
        }
    });
});