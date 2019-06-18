var button = document.getElementById("add");
var title = document.getElementById("title");
var subject = document.getElementById("subject");
var file = document.getElementById("file");
var tbody = document.querySelector("tbody");
var items = tbody.getElementsByTagName("tr");

//adding new items:

function inputLengthValidate(){
	if(title.value.length > 0 && subject.value.length>0 && file.value.length>0)
		return 1;
	return 0;
}

function createListElement() {
	var i1 = document.createElement("input");
	i1.className = "myinput";
	i1.name = "title";
	i1.type = "text";
	i1.disabled = "false";
	i1.value = title.value;
	var t1 = document.createElement("td");
	t1.appendChild(i1);


	var i2 = document.createElement("input");
	i2.className = "myinput";
	i2.name = "subject";
	i2.type = "text";
	i1.disabled = "false";
	i2.value = subject.value;
	var t2 = document.createElement("td");
	t2.appendChild(i2);


	var i3 = document.createElement("input");
	i3.className = "myinput";
	i3.name = "file";
	i3.type = "text";
	i1.disabled = "false";
	i3.value = file.value;
	var t3 = document.createElement("td");
	t3.appendChild(i3);


	
	var t4 = document.createElement("td");
	var btn = document.createElement("button");
	btn.style = "background-color:red;color:white;";
	btn.className = "btn pt-1 pb-1 pl-2 pr-2 mydelete";
	btn.innerHTML = "<i class='mdi mdi-delete menu-icon'></i>";
	btn.onclick = removeParent;

	t4.appendChild(btn);

	var t_parent = document.createElement("tr");
	t_parent.appendChild(t1);
	t_parent.appendChild(t2);
	t_parent.appendChild(t3);
	t_parent.appendChild(t4);

	tbody.appendChild(t_parent);

	title.value="";
	subject.value="";
	file.value="";
}

function addToListAfterClick(){	
	if(inputLengthValidate() == 1)
		createListElement();		
}

button.addEventListener("click", addToListAfterClick);


//from StackOverflow:
function removeParent(evt) {
  evt.target.removeEventListener("click", removeParent, false);
  evt.target.parentNode.parentNode.parentNode.remove();
}

//click on a list item and it strikethroughs the text
function getEventTarget(e){
	e = e || window.event;
	return e.target || e.srcElement;
}


tbody.onclick = function(event){
	var target = getEventTarget(event);
	target.classList.toggle("done");
}






















