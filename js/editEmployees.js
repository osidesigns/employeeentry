setTimeout(getBtns, 1000);

function getBtns(){
	var btns = document.querySelectorAll('button');
	var btnId;

	Array.from(btns);

	for(var i = 0; i < btns.length; i++){
		btns[i].onclick = function(){
			btnId = this.getAttribute('id');
		}
	}

	return btnId;
}


function editUser(){
		
		var btnId = getBtns();
		var xhr = new XMLHttpRequest();

		btnId = parseInt(btnIn);
		xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");


	xhr.open('POST', 'scripts/update.php', true);
	xhr.send();
}