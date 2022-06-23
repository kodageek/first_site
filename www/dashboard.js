console.log("I am here");

window.addEventListener("load",function(e){
  if(localStorage.getItem("mtk1")){
    var local_session = localStorage.getItem("mtk1");

    var method="POST";
    var url="/reload";
    var data="user_id="+atob(local_session);

//
    var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function(){
  if(xhr.readyState == 4 && xhr.status  ==200){
 var res=JSON.parse(xhr.responseText);
  if(res.success){
    if(res.available){
      console.log("I love here");
      load();
          dash();
   document.getElementById("red").innerHTML= "Welcome "+atob(local_session);
   // document.getElementById("chatbox").innerHTML=dash();
   // chatbox.scrollTop = chatbox.scrollHeight

//      var newscrollHeight = document.getElementById("chatbox")[0].scrollHeight - 20;
//    if(newscrollHeight > oldscrollHeight){
//     document.getElementById("chatbox").animate({ scrollTop: newscrollHeight }, 'normal');
// }
}
}
}

}
xhr.open(method,url,true);
xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xhr.send(data);

}else{
  window.location="login";
}
});

// function top() {
//     document.getElementById( 'top' ).scrollIntoView();
// };
//
// function bottom() {
//     document.getElementById( 'bottom' ).scrollIntoView();
//     window.setTimeout( function () { top(); }, 2000 );
// };

  function dash(){
    var local_session = localStorage.getItem("mtk1");
    var method= "POST";
    var url="/dash";
    var data="user="+atob(localStorage.getItem("mtk1"));

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange=function(){
      if(xhr.readyState==4 && xhr.status==200){
        var res=JSON.parse(xhr.responseText);
        console.log(res);
        if(res.success){
          var html=""
          res.data.forEach(function(value, key){
             html +="<h3>"+value.name+":"+value.message+"</h3>";
             // console.log(res.data.name)
          })
          document.getElementById("chatbox").innerHTML= html;
        }
      }
    }
    xhr.open(method,url,true);
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhr.send(data);
  }

function load(){
  var btn=document.getElementById("submitmsg");
  btn.addEventListener("click",function(e){
        var local_session = localStorage.getItem("mtk1");
    var message=document.getElementById("usermsg");
    if(message.value.length > 1){
      // console.log(atob(local_session));
       var method ="POST";
       var url="/message";
       var data={"name":atob(local_session),"message":message.value}
       var json=JSON.stringify(data)

       var xhr=new XMLHttpRequest();
     xhr.onreadystatechange= function(){
       if(xhr.readyState==4 && xhr.status==200){
         console.log(xhr.responseText);
         var res = JSON.parse(xhr.responseText);

         if (res.saved) {
           dash();
         }
       }
     }
     xhr.open(method,url,true)
     xhr.setRequestHeader("Content-type","application/json");
     xhr.send(json);

   }else{
     alert("message box is empty");
   }
  })
}
