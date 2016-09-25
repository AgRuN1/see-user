function addtoken(){
	var token=document.getElementById("tokeninput");
	if(token.value!=""){
	var request_token=new XMLHttpRequest();
	var url="sql/add.php?token="+escape(token.value);
	request_token.open("get",url,true);
	request_token.send(null);
	token.value="";
	var ir=document.createElement("i");
	ir.setAttribute("class","fa fa-spinner fa-pulse fa-fw");
	var tri=document.createElement("tr");
	tri.style.textAlign="center";
	tri.appendChild(ir);
	document.getElementsByTagName("tbody")[0].appendChild(tri);
	}
}

var check=1;
var checktwo=0;
function maxsize(){
	var gettoken=document.getElementById("tokeninput");
	gettoken.setAttribute("size",80);
}
function minsize(){
	if(check==1){
	var gettoken=document.getElementById("tokeninput");
	gettoken.setAttribute("size",30);
	}
}
function changecheck(c){
	check=c;
	var token=document.getElementById("tokeninput");
	if(token.value==""&&checktwo==1){
		minsize();
		checktwo=0;
	}
}
