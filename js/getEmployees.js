var xhr = new XMLHttpRequest();

xhr.onload = function(response){

				var output = '';
				var empList = this.response;
				empList = JSON.parse(empList);

				if (xhr.status === 200){

					for(var emp in empList){
						output += '<h3>' + empList[emp].S_FIRSTNAME + ' ' + empList[emp].S_LASTNAME + '</h3>' + '<p>' + empList[emp].N_PHONE1 + '<br />' + empList[emp].S_EMAIL + '</p>' + '<button id="' + empList[emp].N_ID + '" onclick="editUser(this.id)"> EDIT </button>';
					}
				}

				document.getElementById('empList').innerHTML =  output;
			};

xhr.open('POST', 'scripts/read.php', true);
xhr.send();