var btn= document.getElementById("enter");
btn.addEventListener("click",function(e){

   var name=document.getElementById("name");
   var name=document.getElementById("name");
 if(name.value.length < 1){
   alert("please enter your name");
 }else{
   var data=name.value;
   var method="POST";
   var url="/pass";
   var json=JSON.stringify(data);


   var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if(xhr.readyState == 4 && xhr.status == 200){
      console.log(xhr.responseText);
      var res = JSON.parse(xhr.responseText);
        if (res.success) {
             alert("Username has been registered");
             window.location="login";
        }else{
          alert("Username already exists");
        }
      }
    }
 xhr.open(method,url,true);
 xhr.setRequestHeader("Content-type","application/json");
 xhr.send(json);
}
})
