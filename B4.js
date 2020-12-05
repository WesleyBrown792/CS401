/* document.addEventListener("DOMContentLoaded", function(event){
    document.getElementById("submit", function(){
        var issues = "";
         var x, text;
        x = document.getElementById("name").nodeValue;
        if(x.length>256){
            issues.concat("Name to Long\n");
        }
        if(x.length<1){
            issues.concat("Name to Short\n");
        }
        var x, text;
        x = document.getElementById("url").nodeValue;
        if(x.length>256){
            issues.concat("URL to Long\n");
        }
        if(x.length<10){
            issues.concat("URL to Short\n");
        }
        var x, text;
        x = document.getElementById("func").nodeValue;
        if(x>10||x<0||!isNaN(x)){
            issues.concat("You must enter a number between 0 and 10 for ");
        }
        var x, text;
        x = document.getElementById("layout").nodeValue;
        if(x>10||x<0||!isNaN(x)){
            issues.concat("You must enter a number between 0 and 10");
        }
        var x, text;
        x = document.getElementById("info").nodeValue;
        if(x>10||x<0||!isNaN(x)){
            issues.concat("You must enter a number between 0 and 10");
        }
    });   
}); */

$("form").submit(function(){ 
    var x = true
    if ( $("#name").val() === "" || $("#name").val().length > 256 || $("#name").val().length < 1) { 
      $("span.help1").show(); 
      x = false; 
    }
    if ( $("#url").val() === "" || $("#name").val().length > 256 || $("#name").val().length < 10 ) { 
        $("span.help2").show(); 
        x = false; 
      }
    if ( $("#func").val() === "" || $("#func").val() > 10 || $("#name").val() < 0 ) { 
      $("span.help3").show(); 
      x = false; 
    }
    if ( $("#layout").val() === "" || $("#name").val() > 10 || $("#name").val() < 0 ) { 
        $("span.help4").show(); 
        return false; 
    }
    if ( $("#info").val() === "" || $("#name").val() > 10 || $("#name").val() < 0 ) { 
        $("span.help4").show(); 
        return false; 
    }  
});