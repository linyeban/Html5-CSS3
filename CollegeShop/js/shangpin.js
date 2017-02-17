/**
 * 
 */
$(function() {
    $( "#accordion" )
      .accordion({
        header: "> div > h3"
      })
      .sortable({
        axis: "y",
        handle: "h3",
        stop: function( event, ui ) {
          // IE doesn't register the blur when sorting
          // so trigger focusout handlers to remove .ui-state-focus
          ui.item.children( "h3" ).triggerHandler( "focusout" );
 
          // Refresh accordion to handle new order
          $( this ).accordion( "refresh" );
        }
      });
  });
  //jquery ui
//用来iframe传值
function test(URL) {
	var frameid = parent.document.getElementById("main");
	//alert("aaa");
	frameid.src = URL;
}

$(document).ready(function(){
	var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        receivePlace(xhr);
    };
    xhr.open("GET", "shangpinData.php", true);
    xhr.send(); 
  });

function receivePlace(xhr) {
    //处理ajax的返回 
	if (xhr.readyState == 4 && xhr.status == 200){
 	var myobj = JSON.parse(xhr.responseText);
 	//var myobj = xhr.responseText;
 	//alert(myobj);
// 	var ul1Obj = document.getElementById("showu1");
// 	var ul2Obj = document.getElementById("showu2");
// 	var ul3Obj = document.getElementById("showu3");
// 	var ul4Obj = document.getElementById("showu4");
// 	var ul5Obj = document.getElementById("showu5");
 //	alert(myobj.length);
    for (var i =0; i< myobj.length; i++) {
    	//alert(typeof(myobj[i].typeid));//用来测试返回类型
        switch(myobj[i].typeid)
        {
        	case "1":
            var liObj =  document.createElement("li");
            var sName =myobj[i].mingcheng;
            var tt = document.createTextNode(sName);
            //liObj.appendChild(tt);
            //ul1Obj.appendChild(liObj);
            $("#showu1").append('<li style="list-style-type:none;"><a href="default-cakes.php" target="_blank">'+sName+'</a></li>')

            break;
        	case "2":
        		var liObj =  document.createElement("li");
                var sName = myobj[i].mingcheng;
        		var tt = document.createTextNode(sName);
//                liObj.appendChild(tt);
//                ul2Obj.appendChild(liObj);
                $("#showu2").append('<li style="list-style-type:none;"><a href="default-cakes.php"target="_blank">'+sName+'</a></li>')
                
                break;
        	case "3":
        		var liObj =  document.createElement("li");
                var sName =myobj[i].mingcheng;
                var tt = document.createTextNode(sName);
               // liObj.appendChild(tt);
                //ul3Obj.appendChild(liObj);
                $("#showu3").append('<li style="list-style-type:none;"><a href="default-cakes.php"target="_blank">'+sName+'</a></li>')

                break;
        	case "4":
        		var liObj =  document.createElement("li");
                var sName =myobj[i].mingcheng;
                var tt = document.createTextNode(sName);
//                liObj.appendChild(tt);
//                ul4Obj.appendChild(liObj);
                $("#showu4").append('<li style="list-style-type:none;"><a href="default-cakes.php"target="_blank">'+sName+'</a></li>')

                break;
        	case "5":
        		var liObj =  document.createElement("li");
                var sName =myobj[i].mingcheng;
                var tt = document.createTextNode(sName);
//                liObj.appendChild(tt);
//                ul5Obj.appendChild(liObj);
                $("#showu5").append('<li><a href="default-cakes.php"target="_blank">'+sName+'</a></li>')

                break;
         }
     } 
     
		    
}  
}