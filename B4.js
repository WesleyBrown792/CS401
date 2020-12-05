document.addEventListener("DOMContentLoaded", function(event){
    alert("If you get returned this page that is because the username you chose is taken");
    document.addEventListener("click", function(){
        var x, text;
        x = document.getElementById("").nodeValue;

        if(x>10||x<0||!isNaN(x)){
            //not valid input
        }else{
            
        }
    });
});

$(function(){
    $("#sampleUserUnfoForm").validate({
        
    });
});