@extends('app')

@section('content')
<p>Здравей, {{Auth::user()->Name}}</p>
<div id="wrapper">

    <div id="success-message" class="success">
        &nbsp;
    </div>
    <div id="error-message" class="error">
        &nbsp;
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div id="skills" style="width: 300px; float: left;">
            </div>
            <div id="character_pic" style="width: 200px; float: right;">
            </div>
        </div>
        <!-- <div id="user_info" style="min-height:100%; position:relative;"> -->
        
        <div id="description" style="position: fixed; z-index: 1000; background: #000; opacity: 0.8; color: white; padding: 6px 8px; width: 220px; display: none;"></div>
    </div>
    <div class="row equal">
        <div class="col-sm-3">
            <div class="character-details">
                <p>Skill points: <span id="spell_power"></span></p>
                <p>Level: <span id="level"></span></p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="character-details">
            <div>
                XP: 
                <span id="current-xp"></span>
                /
                <span id="max-xp"></span>
            </div>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                <span class="sr-only">asdasd</span>
              </div>
            </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="character-details">
            Моля въведете кода, за да получите точки
                <input type="text" class="form-control enter_code" id="codeValue" />
                <button id="submitCode" class="btn btn-primary submit-button">Submit</button>
            </div>
        </div>
    </div>
    </div>

        <script>
        $('#error-message').hide();
        $('#success-message').hide();
        
            $("#submitCode").click(function(){
                var codeInput = $("#codeValue").val();
                $.get("{{url('/activate_code/')}}/"+codeInput,function(data){
                    data = JSON.parse(data);
                    console.log(data);
                    if(data.success == 1){
                        $("#current-xp").text(data.user_info.xp);
                        $("#max-xp").text(100*data.user_info.level+50*(data.user_info.level-1));
                        $('.progress-bar').css("width", data.user_info.xp/(100*data.user_info.level+50*(data.user_info.level-1))*100+"%");
                        $('.progressbar').attr("", data.xp);
                        $("#spell_power").text(data.user_info.sp);
                        $("#level").text(data.user_info.level);
                        $("#codeValue").val("");
                        var msg=data.status;
                        if(data.result)msg+='.<br> '+data.result;
                        $("#success-message").html(msg);
                        $("#success-message").show();
                    }
                    else
                    {
                        $("#error-message").text(data.status);
                        $("#error-message").show();
                    }
                });
            });

            function removeDescription() {
                $("#description").hide();
            }

            function showDescription(name, desc, parents, skills) {
                
                var height = $(window).height();
                var X=event.clientX;
                var Y=event.clientY;
                skills = $('#skills div').attr('skills');
                
                var description = "<h3>"+name+"</h3><p>"+desc+"</p>";
                parents = parents.split(",");  
                skills = skills.split(",");   
                if(parents.length > 1){ 
                    if(skills.indexOf(parents[1]) == -1) {
                        description+="<p>Трябва да сте вдигнали: <span style='color: red;'>";
                    
                        description+=parents[0];
                    
                        description+="</span></p>";
                    }
                }
                $("#description").html(description);
                var desc_height=$("#description").height();
                if(Y+desc_height>height)Y=Y-desc_height;
                
                $("#description").css('left',X+10);
                $("#description").css('top',Y-10);
                $("#description").show();
            }

            function addSkill(id){
                $.get("{{url('/get_skill/')}}/"+id,function(data){
                    data = JSON.parse(data);
                    if(data.success == 1)
                    {
                        $("#spell_power").text($("#spell_power").text()-1);
                        $("#success-message").text(data.status);
                        $("#success-message").show();
                        setTimeout(function(){
                            $("#success-message").hide();
                        },4000);
                        var skillNode = $("#skill-"+id).css("opacity", "1");
                        $(".arrow-"+id).each(function(){
                            this.css("opacity", "1");
                        });
                        $('#skills div').attr("skills",data.skills);
                        skillNode.className = "activated";
                    }
                    else
                    {
                        $("#error-message").text(data.status);
                        $("#error-message").show();
                    }
                });
            }


            var skills = new Array();
            //TODO: move in the getJSON
            //

            $.get("{{url('/user_info/')}}",function(data){
                data = JSON.parse(data);
                console.log(data.skills);
                for (var i = 0; i < data.skills.length; i++) {
                    skills.push(data.skills[i].id);
                }
                $("#wrapper").css("background", "url('"+data.src+"')");
                $('.progress-bar').css("width", data.xp/(100*data.level+50*(data.level-1))*100+"%");
                $('.progressbar').attr("", data.xp);
                $("#spell_power").text(data.sp);
                $("#level").text(data.level);
                $("#current-xp").text(data.xp);
                $("#max-xp").text(100*data.level+50*(data.level-1));

                $.get("{{url('/character_skills/')}}",function(data){
                    data = JSON.parse(data);
                    for(var i = 0; i<data.length; i++){
                        var div = document.createElement("div");
                        var img = document.createElement("img");
                        img.src = data[i].src;
                        img.width = "50";
                        img.height = "50";
                        div.appendChild(img);
                        div.className = "icon";
                        div.style.position = "absolute";
                        div.style.top = data[i].req_lvl*100 + "px";
                        div.style.left = data[i].depth*85 + "px";
                        div.id = "skill-"+data[i].id;
                        div.setAttribute("onclick","addSkill("+data[i].id+")");
                        var parents = [];
                        var parentId = data[i].req_skill;

                        if(parentId){
                                parent = _.find(data, {id: parentId});
                                var div_arrow = document.createElement("div");
                                var img_arrow = document.createElement("img");
                                if(data[i].depth>parent.depth) {
                                    img_arrow.src = "img/leftarrow.png";
                                    div_arrow.appendChild(img_arrow);
                                    div_arrow.style.position = "absolute";
                                    div_arrow.style.top = ((data[i].req_lvl*100)-50) + "px";
                                    div_arrow.style.left = ((data[i].depth*85)-84) + "px";
                                    
                                    
                                }
                                if(data[i].depth==parent.depth) {
                                    img_arrow.src = "img/straightarrow.png";
                                    div_arrow.appendChild(img_arrow);
                                    div_arrow.style.position = "absolute";
                                    div_arrow.style.top = ((data[i].req_lvl*100)-50) + "px";
                                    div_arrow.style.left = ((data[i].depth*85)) + "px";
                                    
                                    
                                }
                                if(data[i].depth<parent.depth) {
                                    img_arrow.src = "img/rightarrow.png";
                                    div_arrow.appendChild(img_arrow);
                                    div_arrow.style.position = "absolute";
                                    div_arrow.style.top = ((data[i].req_lvl*100)-50) + "px";
                                    div_arrow.style.left = ((data[i].depth*85)-5) + "px";
                                    
                                }
                                div_arrow.addClass ="arrow-"+ parent.id;
                                if(skills.indexOf(parentId) != -1){
                                    div_arrow.style.opacity = 1;       
                                }
                                else
                                {
                                    div_arrow.style.opacity = 0.5;
                                }       
                                
                                $("#skills").append(div_arrow);
                                parents.push(parent.name);
                                parents.push(parent.id);
                        }
                        div.setAttribute("onmouseover","showDescription('"+data[i].name+"','"+data[i].description+"','"+parents+"','"+skills+"')");
                        div.setAttribute("skills",skills);
                        div.setAttribute("onmouseout","removeDescription()");

                        if(skills.indexOf(data[i].id) != -1)
                        {
                            div.className = "activated";
                            div.style.opacity = 1;
                        }
                        else
                        {
                            div.style.opacity = 0.5;
                        }

                        $("#skills").append(div);
                    }
                });
            });

            
            
        </script>
</div>

@endsection
