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

/* $("form").submit(function(){ 
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
}); */

$(function(){
    $("#web_review").submit(function(e){//when submit is click
        e.preventDefault();//dont reload page
        var values = $("#web_review").serialize();//collect form info
        var errors = "";
        var name = $("#name").val();
        var url = $("#url").val();
        var func = $("#func").val();
        var layout = $("#layout").val();
        var info = $("#info").val();

        if(name === "" || name.length > 256 || name.length <1){
            errors.concat("Name must be longer than 1 character and less than 256 \n")
        }
        if(url === "" || url.length > 256 || url.length <9){
            errors.concat("URL must be longer than 9 characters and less than 256 \n")
        }
        if(func>10||func<0||!isNaN(func)){
            issues.concat("You must enter a number between 0 and 10 for function \n");
        }
        if(layout>10||layout<0||!isNaN(layout)){
            issues.concat("You must enter a number between 0 and 10 for layout \n");
        }
        if(info>10||info<0||!isNaN(info)){
            issues.concat("You must enter a number between 0 and 10 for info \n");
        }
        

        if(errors.length<1){
            $.ajaz({//ajax calls php
                type: "POST",
                url: "input.php",
                data: values,
                success: function(){
                    alert("win");
                },
                error: function(){
                    alert("lose");
                }
            });
        }else{
            alert(errors);
        }
        
    });
});