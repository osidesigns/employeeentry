// setTimeout(getBtns, 1000);

// function getBtns(){
// 	var btns = document.querySelectorAll('button');
// 	var btnId;

// 	Array.from(btns);

// 	for(var i = 0; i < btns.length; i++){
// 		btns[i].onclick = function(){
// 			btnId = this.getAttribute('id');
// 		}
// 	}

// 	return btnId;
// }


function editUser(btnId){	
		var firstName = document.getElementById('firstName').value;
		var lastName = document.getElementById('lastName').value;
		btnId = parseInt(btnId);

		console.log(btnId);
		var xhr = new XMLHttpRequest();
	xhr.open('POST', 'scripts/update.php', true);
	console.log(firstName+lastName);

		xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");


	xhr.send("id="+ btnId + "&firstName="+firstName+"&lastName="+lastName);
}
