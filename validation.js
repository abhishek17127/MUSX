
// let submit = document.getElementById('submit1');
// submit.onClick(myValidation);

function myValidation(){

	let Name = document.getElementById('input1').value;
	let Email = document.getElementById('input2').value;
	let Phone = document.getElementById('input3').value;

	if(Name==="" | Email==="" | Phone===""){
		alert("ONE OR MORE FEILDS IS/ARE EMPTY");
	}
	
	if(isNaN(Phone)){
		alert("ENTER A NUMBER IN PHONE FEILD");
	}

	if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(Email)))
	  {
	  	alert("You have entered an invalid email address!");
	  }
    
}



function addtocart(product_id,user_id){
	xmlhttp = new XMLHttpRequest();
	xmlhttp.open();
	xmlhttp.send(null);
	alert(xmlhttp.responseText);
	
}

