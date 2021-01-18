$(document).ready(function() {
    var data;
    $.ajax({
        "url" : "/film-project/_php/checklogin.php",
        success : function(resp) {
           if (resp != "false") {
               /* Insert container every 4 movies and append to last container */
                $.getJSON("/film-project/_php/likedmovies.php", function( response ) {
                    data = response;
                    
                    if (data.length == 0) $("body").append("<br><br><br><h1 class=\"display-3 fp-heading text-center\" >You don't have any films yet, try adding some of them to favourites!</h1><br><img src=\"https://www.flaticon.com/svg/vstatic/svg/3874/3874447.svg?token=exp=1610998972~hmac=6ba686e37b95daaf7f98bffcf50e4426\" height=\"300px\">");
                    else {
                        container_html = "<div class=\"container\"> <div class=\"row\">";
                        row_html = "";
                        
                        for (var i = 0; i < data.length; i++) {
                            if(i%4==0) $("body").append(container_html);

                            if(data[i].type == "Action") var btn_link = "/film-project/_html/_billboard/action.php#" + data[i].jump_link;
                            if(data[i].type == "Adventure") var btn_link = "/film-project/_html/_billboard/adventure.php#" + data[i].jump_link;
                            if(data[i].type == "Comedy") var btn_link = "/film-project/_html/_billboard/comedy.php#" + data[i].jump_link;
                            if(data[i].type == "Science-Fiction") var btn_link = "/film-project/_html/_billboard/scifi.php#" + data[i].jump_link;

                            row_html += "<div class=\"col-md-3\"> <div class=\"card\"><img class=\"card-img-top\" src=\"";
                            row_html += data[i].img_url;
                            row_html += "\" alt=\"Card image cap\"> <div class=\"card-body d-flex flex-column\"> <h5 class=\"card-title\">";
                            row_html += data[i].name;
                            row_html += "</h5> <p class=\"card-text\"><small class=\"text-muted\">";
                            row_html += data[i].release_year + " | " + data[i].type;
                            row_html += "</small></p><a class=\"mt-auto btn btn-lg btn-danger\" href="
                            row_html += btn_link;
                            row_html += ">Learn more</a> <br> </div> </div> </div> </div> </div>";
                            $(".row").last().append(row_html);
                            row_html = ""; 
                        }
                    }
                }); 
            }
        }
    });
});