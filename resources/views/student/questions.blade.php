@extends('app')

@section('content')
<div id="dialog">
</div>
<table class="table">
@foreach($questions as $question)
<tr>
	<td>{{$question->teacherName()}} ви изпрати въпрос</td><td><button onclick="showQuestion('{{$question->question}}','{{$question->time}}','{{$question->id}}')" class="btn">Виж</button></td>
</tr>
@endforeach
</table>
<script>
	var interval;

	function sendAnswer(aid, qid){
		$.get("{{url('send_answer/')}}/"+aid+"/"+qid,function(data){
                    data = JSON.parse(data);
    		clearInterval(interval);
    		if(data.success){
    			$("#success-msg").text(data.status);
    			if(data.result){
    				$("#success-msg").text(data.status+data.result);
    			}
				$("#success-msg").show();;
                        setTimeout(function(){
                            $("#success-msg").hide();
                            location.reload();
                        },1500);
    		}
    		else
    		{
    			$("#error-msg").text(data.status);
				$("#error-msg").show();
                        setTimeout(function(){
                            $("#error-msg").hide();
                            location.reload();
                        },1500);
    		}
		
		});
	}
	
	function showQuestion(question, time, qid){
		$("#dialog").html("");
		clearInterval(interval);
		$("#dialog").append("<p>Въпрос: "+question+"</p>");
		$("#dialog").append("<p>Време за отговор: "+time+"</p>");
		$.get("{{url('get_answers/')}}/"+qid,function(data){
                    data = JSON.parse(data);
                    if(data.length==0) $("#dialog").dialog("close");
			for(var i=0; i<data.length;i++){
				$("#dialog").append('<div class="question" onclick="sendAnswer('+data[i].id+', '+data[i].quest_id+');">'+data[i].answer+'</div>');
			}
			
			$("#dialog").append('<div id="timer"></div>');
		    $("#dialog").dialog();
		    var count=0;
		    interval = setInterval(function(){
		    	if(count==time){
		    		$("#dialog").dialog("close");
		    		clearInterval(interval);
		    		return;
		    	}
		    	count++;
		    	$("#timer").text("Остават: "+(time-count));
		    }, 1000);
		});
	}
  </script>
@endsection