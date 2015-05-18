$(document).ready(function()
{
 $('#main-area').on('click', '#remove-from-cart', function(){
           var index = $(this).val();
           var datastring = "Opeartion=RemoveFromCart" + "&key=" + index;
            $.ajax( {
                type: "POST",
                url:  "cartoperations.php",  
                data: datastring,
                success:showCartItems,
                error:errorFetch                  
                }
               );
   });
   
    $('#main-area').on('click', '#empty-cart', function(){
           var index = $(this).val();
           var datastring = "Opeartion=EmptyCart";
            $.ajax( {
                type: "POST",
                url:  "cartoperations.php",  
                data: datastring,
                success:showCartItems,
                error:errorFetch                  
                }
               );
   });
   
   var url = document.URL;
   if( url.indexOf('movies.php') == -1 )
   {
       return;
   }
    $.ajax( {
            type: "POST",
            url:  "movie-service.php",  
            success: SuccessMessage,
            error: errorFetch
            }
           );    
});
 
 function SuccessMessage(movies)
 {
     var movieObjects = $.parseJSON(movies);
     var url = document.URL;
     var rootpath = url.substring(0, url.lastIndexOf('/') + 1);     
     //var rootpath = "http://localhost/a3/";
     var html = "<h1> Now playing </h1>";
     for (i = 0; i < movieObjects.length; ++i)
     {
       var index = i + 1;
       var movie = movieObjects[i];
       var timings = movie.Timigs.split(',');
       var timingHtml = "";
       for(j = 0; j < timings.length; ++j)
       {
           var movieTimes = $.trim(timings[j]).split(' ');
           var counter = j + 1;
           var txt = "<span id='mov" + index + '_day' + counter + "\'>" + movieTimes[0] + "</span>&nbsp;" + movieTimes[1] + ' ' + movieTimes[2] + '&nbsp;&nbsp;';
           timingHtml += txt;
       }
       var movieHtml = "<div class='row'>";
        movieHtml += "<h2  id='mov" + index + "_title'>" + movie.Title + "</h2>";
        movieHtml += "<div><img class='movie_images' alt='Superman 1941 Classic' src=\"" + rootpath + movie.Movieposter + "\" /></div>";
       movieHtml += "<p class='lead'>" + movie.Summary + "<br><br>" + "Rating: " + movie.Rating + "<br>" + "Genre: " + movie.Genre +
                    "<br>Session Times: " + timingHtml + "</p>";
         
        
        movieHtml += "<input id='mov" + index + "\'" +  "type='hidden' value='"  + movie.Type +  "' />" +  "<p class='movie_booking_opt'><span id='a" + index + "_expand'>Expand</span><span id='a" + index + "_fold' style='display: none;'>Fold</span></p>" +
                    "<div id='table_container" + index + "\'style='display: none'></div>";
        movieHtml += "</div>" ;      
        
        html += movieHtml;
                    
     }
     
     $('#main_area').html(html);
 }
 
 function  errorFetch(response)
 {
     alert(response);
 }
 
 function showCartItems(response){
     if(response == ''){
         return;
     }
     $('#main-area').html(response);
 }

