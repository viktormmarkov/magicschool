@extends('app')

@section('content')
<link href="{{url('css/teacherview.css')}}" rel="stylesheet" type="text/css" media="all">

<br />
<script>
function Get_users() {
    var id=$('#class_id').val();
    window.location="{{url('/get-class/')}}/"+id;
    
}
</script>
<div class="row">
<div class="input-group input-group-lg">    
    <span class="input-group-addon fixed-width">Моля изберете клас</span>       
    <select onchange="Get_users();" id="class_id" class="form-control class-select">
    <option value="0" selected="selected">Изберете</option>
           @foreach($classes as $class)
                <option value="{{$class->id}}" @if($class->id == $current_class) selected @endif> {{$class->name}}</option>
            @endforeach
    </select>
</div>
</div>
<div class="row">
    <div class="span4 offset4">
        @if (count($students)>0)<table class="table">
        <thead>
            <tr>
                <th class="text-left">Име</th>
                <th class="text-left" width="10%">Информация</th>
                <th class="text-left" width="40%">Умения</th>
                <th class="text-left" width="20%">Точки действие</th>
            </tr>
        </thead>
        @foreach ($students as $student)
        <tr>
            <td>{{$student->Name}}</td>
            <td>{{$student->characterName()}}<br /> <span class="span_level">Ниво : {{$student->level}}</span>
            </td>
            <td class="td">
            @foreach($student->skills as $skill)
                <div onmouseover="showDescription('{{$skill->name}}','{{$skill->description}}','{{$skill->ap}}')" onmouseout="removeDescription()" class="skill">
                    <img skillid="{{$skill->id}}" class="skillicon" src="{{$skill->src}}" onclick="onSkillClick('{{$student->id}}','{{$skill->id}}','{{$skill->name}}')"/>
                </div>
            @endforeach
            </td>
            <td >
                <div id="{{$student->id}}">
                    {{$student->ap}} ap
                    <button class="btn btn-sm btn-default" onclick="showModal({{$student->id}})">Добави</button>

                </div>
            </td>
        </tr>   
        @endforeach
        </table>
        @endif
    <div>
</div>
<div id="points-modal" class="modal modal-sm" title="Добави точки">
    <div class="form-inline">
      <div class="form-group">
        <label for="ap">Точки действие</label>
        <input type="number" class="form-control" min="0" id="ap" placeholder="Добави точки действие">
      </div>
      <div class="form-group">
        <label for="xp">Точки Опит</label>
        <input type="number" class="form-control" min="0" id="xp" placeholder="Добави точки опит">
        <input type="hidden" class="form-control" min="0" id="student_id" placeholder="Добави точки опит">
      </div>
      <div class="form-group">
            <button onclick="addPoints()" class="btn btn-primary">Добави</button>
      </div>
    </div>
</div>
<div id="description" style="position: fixed; z-index: 1; background: #000; opacity: 0.8; color: white; padding: 6px 8px; width: 200px; display: none;"></div>
<script>
    function removeDescription()
    {
        $("#description").hide();
    }

    function showDescription(name,desc, ap)
    {

        var height = $(window).height();

        var X=event.clientX;
        var Y=event.clientY;
        var description = "<h3>"+name+"</h3><p>"+desc+"</p><p style='float:right'>"+ap+" ap</p>";
        $("#description").html(description);
        var desc_height=$("#description").height();
        if(Y+desc_height>height)Y=Y-desc_height;
        
        $("#description").css('left',X+10);
        $("#description").css('top',Y-10);
        $("#description").show();
    }

    function showModal (student_id) {
        $("#points-modal").dialog({
            resizable: false,
            height: "auto",
            width: 400,
            modal: true
        });

        $("#student_id").val(student_id);
    }   

    function addPoints () {
        var object = {
            student_id: $('#student_id').val(),
            ap: $('#ap').val(),
            xp: $('#xp').val()
        };

        $.post("{{url('/add_point/')}}",
            object,
            function(data){
                console.log(data);
                $("#points-modal").dialog("close");
            }); 
    }
    function onSkillClick(uid,sid,name){
        if (confirm('Сигурни ли сте че искате да изпълните '+name+'?')){
        $.get("{{url('/use_skill/')}}/"+uid+"/"+sid,function(data){
            console.log(data)
            if(data.success=="1"){
            $('#'+data.uid).html(data.Ap+" ap");
            $("#success-msg").html(data.status);    
            $("#success-msg").show();
             setTimeout(function(){
                 $("#success-msg").hide();
                 },5000);
            }else{
            $("#error-msg").html(data.status);  
            $("#error-msg").show();
             setTimeout(function(){
                 $("#error-msg").hide();
                 },5000);           }
        });
        }
    };
    
</script>






@endsection
