 var url = "https://en.wikipedia.org/w/api.php";

//Return candidate search results
function termSearch(){
  
  var term = $("#searchbox").val();
  console.log(term);
  //console.log(url);
  var searchLimit = 10;
  
  $.ajax({
    type: "GET",
    dataType: "jsonp",
    url: url,
    data: {
          'action': "opensearch",
          'format': "json",
          'search': term
          //'limit' : searchLimit
    },
    success: function(data){
      
      console.log(data);
      
      var i;
      for(i=1; i < data[1].length; i++){
        var result = "<a href='" + data[3][i] + "' target='_blank'><h4>" + data[1][i] + "</h4>" + "<p>" + data[2][i] + "</p></a>";
        console.log(result);
        var resDiv = $('<div>');
        resDiv.addClass("col-md-12 resultEntry");
        resDiv.append(result).appendTo('#results');
      //  .append(result).appendTo('#results');
        //var searchEntry = $("<p></p>").text(result);
        
        //console.log(searchEntry);
        
       // $("#results").append(searchEntry);
      }
      
      
    }
  });
}

//Return candidate search terms
$(function(){
  
  //var searchItem = $("#searchbox").val();
   document.getElementById("searchBtn").addEventListener('click', termSearch);
 
  $("#searchbox").autocomplete({
    
    source: function(request, response){
      $.ajax({
        dataType: "jsonp",
        url: url,
        data: {
          'action': "opensearch",
          'format': "json",
          'search': request.term
        },
        success: function(data){

            response(data[1]);
        }
      });
    }
});

  var textInput = document.getElementById("searchbox");
  var clearBtn = textInput.nextSibling;
  var results = document.getElementById("results");
  document.getElementById("searchbox").onkeyup = function() {
    // Show the clear button if text input value is not empty
    clearBtn.style.visibility = (this.value.length) ? "visible" : "hidden";
  };
  // Hide the clear button on click, and reset the input value
  clearBtn.onclick = function() {
    this.style.visibility = "hidden";
    textInput.value = "";
    results.innerHTML = '';

  };

});



