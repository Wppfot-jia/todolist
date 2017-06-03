var img_select = $('img_select'),
    clear_completed = $('clear_completed'),
    my_p = document.getElementsByClassName("my_p");

//上面三角图标
function select(){
    if(img_select.src.indexOf('l0') == -1){
    	img_select.src = "./img/l0.png";
    	clear_completed.style.display = "none";
    }else{
    	img_select.src = "./img/l1.png";
    	clear_completed.style.display = "block";
    }
}

//下面的每一项
function changethis(id,obj){
	if(obj.src.indexOf("c1") == -1){
        obj.src = "./img/c1.png";
        for(var i = 0,len = my_p.length;i <= len;i++){
        		if(my_p[i].id == id){
                   my_p[i].style.textDecoration = "line-through";
                   my_p[i].style.color = "rgb(217,217,217)";
                   
                   
        		}
        }
    }else{
    	obj.src = "./img/c0.png";
    	for(var i = 0,len = my_p.length;i <= len;i++){
        	    if(my_p[i].id == id){
                   my_p[i].style.textDecoration = "none";
                   my_p[i].style.color = "rgb(77,77,77)";
        		};
        	
        }
    }
}



// function changethis(id,obj){

// 	function getXmlHttpobject(){
//         var xmlHttpRequest;
//         //不同的浏览器获取对象xmlhttprequest 对象方法不一样
//         if(window.ActiveXobject){
//             xmlHttpRequest = new ActiveXobject("Microsoft.XMLHTTP");
//         }else{
//             xmlHttpRequest = new XMLHttpRequest();
//         }
//         return xmlHttpRequest;
//     }
    
//     var myXmlHttpRequest=getXmlHttpobject();
// 	if(myXmlHttpRequest){
// 		var url = "./admin/changeiscom.php";
// 		var data= id;
// 	    myXmlHttpRequest.open("post",url,true);
// 	    myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
// 	    myXmlHttpRequest.onreadystatechange = function(){
//             if(myXmlHttpRequest.readyState == 4){
//                 if(myXmlHttpRequest.status == 200){
                     
//                 }
//             }
//         }
//         myXmlHttpRequest.send(data);
//     }
// }
















function $(id){
	return document.getElementById(id);
}