console.log("i am here");
  var btn= document.getElementById("enter");
  btn.addEventListener("click",function(e){

     var name=document.getElementById("name");
     var name=document.getElementById("name");
   if(name.value.length < 1){
     alert("please enter your name");
   }else{
     var data=name.value;
     var method="POST";
     var url="/enter";
     var json=JSON.stringify(data);


     var xhr = new XMLHttpRequest();
 		xhr.onreadystatechange = function() {
 			if(xhr.readyState == 4 && xhr.status == 200){
 				console.log(xhr.responseText);
 				var res = JSON.parse(xhr.responseText);
          if (res.created) {
            console.log(btoa(res.user_id));
             localStorage.setItem("mtk1",btoa(res.user));
            window.location= "dashboard";
          }else{
            alert("Username is not in our database");
          }
        }
      }
   xhr.open(method,url,true);
   xhr.setRequestHeader("Content-type","application/json");
   xhr.send(json);
}
})
