window.onload=refresh;
var request;
function refresh(){
	request=new XMLHttpRequest();
	var urls="/requests/getAccaunts.php";
	request.open("post",urls);
	request.onreadystatechange=addRefresh;
	request.send(null);
}
function addRefresh(){
	if(request.readyState==4){
	var text=request.responseText;
	var json=JSON.parse(text);
	var accaunts=json.response.accaunt;
	var tbody=document.createElement("tbody");

	for(var i=0;i<accaunts.length;i++){
		var accaunt=accaunts[i];
		if(accaunt.error_code){
			var error=errors(accaunt.error_code);
			var tr=document.createElement("tr");
			var td=document.createElement("td");
			td.setAttribute("class","error");
			td.appendChild(document.createTextNode(error));
		}else{
			var name=accaunt.name;
			var surname=accaunt.surname;
			var tr=document.createElement("tr");
			var td=document.createElement("td");
			td.setAttribute("class","accaunt");
			var a=document.createElement("a");
			a.appendChild(document.createTextNode(name+" "+surname))
			a.setAttribute("href",accaunt.id);
			a.setAttribute("target","_blank");
			td.appendChild(a);
		}
		var id=document.createElement("p");
		id.appendChild(document.createTextNode(accaunt.id));
		id.setAttribute("style","display:none");
		var tdrem=document.createElement("td");
		var irem=document.createElement("i");
		irem.setAttribute("class","fa fa-trash-o");

		tdrem.appendChild(irem);
		tdrem.appendChild(id);
		tdrem.setAttribute("class","accRemove");
			tdrem.setAttribute("title","Удалить");

		tr.appendChild(td);
		tr.appendChild(id);
		tr.appendChild(tdrem);
		if(accaunt.error_code!=0)
		tbody.appendChild(tr);
	}
	if(accaunt.error_code==0){
		var tr=document.createElement("tr");
		var td=document.createElement("td");
		td.appendChild(document.createTextNode("No tokens"));
		tr.appendChild(td);
		tbody.appendChild(tr);
	}
	var table=document.getElementById("accaunts");
	var oldbody=table.getElementsByTagName("tbody")[0];
	table.replaceChild(tbody,oldbody);
	$(".accRemove").tipTip({defaultPosition:"right"});
	$(".accRemove").click(function(){
		$(this).trigger('mouseout');
		removeAcc($(this).prev());
	});
	}
	}
function removeAcc(obj){
	var id=obj.text();
	obj.parent().replaceWith("<tr style='text-align:center'><i class='fa fa-spin fa-spinner'></i></tr>");
	var requests=new XMLHttpRequest();
	var urli="/sql/remove.php?id="+id;
	requests.open("get",urli,true);
	requests.send(null);
}
setInterval(refresh,5000);
