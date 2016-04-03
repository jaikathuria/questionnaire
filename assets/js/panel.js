$(document).ready(function(){
    $("#writeCall").on('click', function(){
        $("#writeCallCard").addClass("hide");
        $(".contentSheet").removeClass("hide");
    });
     $("#b1").on('click', function(){
        $(".contentSheet").addClass("hide");
        $(".contentSheet1").removeClass("hide");
    });
    var noQ = document.getElementById("questions").innerHTML;
    noQ = parseInt(noQ);
    $("#increaseQuestion").on('click', function(){
        if(noQ!=15){
            noQ = noQ+1;
            document.getElementById('questions').innerHTML=noQ;
            document.getElementById('noQ').value=noQ;
        }
    });
    $("#decreaseQuestion").on('click', function(){
        if(noQ!=5){
            noQ = noQ-1;
            document.getElementById('questions').innerHTML=noQ;
            document.getElementById('noQ').value=noQ;
      }

    });
     
    $("#b2").on('click', function(){
        $(".contentSheet1").addClass("hide");
        $(".contentSheet2").removeClass("hide");
        
        var questions="";
        questions = document.getElementById("questionSheet").innerHTML;
        for (var i=1;i<=noQ;i++){
            
        questions = questions + "<div id='question" + i + "' class='col-xs-12 col-sm-12 col-md-12 col-xs-12 '><div class=' col-xs-12 col-sm-push-3 col-sm-6 col-md-push-3 col-md-6 col-lg-push-3 col-lg-6'><div class='questionInput'><input autocomplete='off' name='q" + i + "' type='text' placeholder='Question " + i + "' autocomplete='off'><div class='options'><input name='q" + i + "a' type='text' autocomplete='off'  autocomplete='off' placeholder='Option A' autocomplete='off'><input name='q" + i + "b' type='text' autocomplete='off' placeholder='Option B' autocomplete='off'><input name='q" + i + "c' type='text' placeholder='Option C' autocomplete='off'><input name='q" + i + "d' type='text'  autocomplete='off' placeholder='Option D' autocomplete='off'></div><div class='answer'><label class='css-input css-radio css-radio-lg css-radio-default push-10-r'><input type='radio' name='q" + i + "ans' value='a'><span></span> Option A&nbsp</label><label class='css-input css-radio css-radio-lg css-radio-default'><input type='radio' name='q" + i + "ans' value='b'><span></span> Option B&nbsp</label><label class='css-input css-radio css-radio-lg css-radio-default'><input type='radio' name='q" + i + "ans' value='c'><span></span> Option C&nbsp</label><label class='css-input css-radio css-radio-lg css-radio-default'><input type='radio' required name='q" + i + "ans' value='d'><span></span> Option D&nbsp</label> </div></div></div></div>";
    }
        questions = questions + "<button id='bq' class='roundButton questionButton'><i class='fa fa-arrow-right'></i></button>"
        $("#questionSheet").html(questions);
        
    });
    
    $("#bq").on('click', function(){
        $(".form").submit();
    });
    
    
   
    
    
      
});