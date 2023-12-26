const express = require("express"); 
const database = require('./sqlConnection');  
const app = express(); 
app.listen(5000, () => { 
  console.log(`Server is up and running on 5000 ...`); 
}); 
  
// Use Route Function from below Examples Here... 
  
app.get("/", (req, res) => { 
  
    // Call Route Function Here... 
});
const signupbtn = document.getElementById("signupbtn");
const error = document.getElementById("sign-up-error");
const required = document.getElementById("required");
const wrap = document.getElementById("wrap");
const valid = 0;
signupbtn.addEventListener("click",function(e){
	e.preventDefault();
	
	const username = document.getElementById("username").value;
	const password = document.getElementById("password").value;
	const repassword = document.getElementById("repassword").value;
	const adno = document.getElementById("adnumber").value;
	const dob = document.getElementById("dob").value;
	const phnumber = document.getElementById("phnumber").value;
	const mail = document.getElementById("mail").value;
	const address = document.getElementById("address").value;
	const city = document.getElementById("city").value;
	const state = document.getElementById("state").value;
	const gender = document.getElementById("gender").value;
	const bldgrp = document.getElementById("blood").value;
	console.log(username,password,repassword,adno,dob,phnumber,mail,address,city,state,gender,bldgrp);
// 	function validpassword(password){
// 	len=password.length;
// 	cap=0;
// 	spec=0;
// 	num=0;
// 	small=0;
// 	for(let i=0;i<len;i++){
// 		if(password.charCodeAt(i)>=97 && password.charCodeAt(i)<=122){
// 			small+=1;
// 		}
// 		else if(password.charCodeAt(i)>=65 && password.charCodeAt(i)<=90){
// 			cap+=1;
// 		}
// 		else if((password.charCodeAt(i)>=33 && password.charCodeAt(i)<=47) ||
// 			    (password.charCodeAt(i)>=58 && password.charCodeAt(i)<=64) ||
// 			    (password.charCodeAt(i)>=91 && password.charCodeAt(i)<=96) ||
// 			    (password.charCodeAt(i)>=123 && password.charCodeAt(i)<=126)){
// 			spec+=1;
// 		}
// 		else if(password.charCodeAt(i)>=48 && password.charCodeAt(i)<=57){
// 			num+=1;
// 		}
// 		}
// 	if( len>=8 && spec>0 && cap>0 && small>0 && num>0){
// 		return 1;
// 	}
// 	else{
// 		return 0;
// 	}
// 	}
// 	if (validpassword(password) == 1 && adnumber.length==16 && password==repassword) {
//         alert("You have successfully Signed Up.");
//         valid=1;
//         location.reload();
//         let singleRowInsert = () => { 
//     	let query = `INSERT INTO signup (username,password,adno,phno,email,address,city,state,dob,gender,bldgrp) VALUES (?, ?);`; 
//     	// let userName = "Pratik"; 
//     	// let userAddress = "My Address"; 
//   		// Creating queries 
//     	db_con.query(query, [userName, userAddress], (err, rows) => { 
//         if (err) throw err; 
//         console.log("Row inserted with id = "
//             + rows.insertId); 
//     }); 
// };
//     }
//     else if(username.length == 0){
//     	usererror.style.opacity=1;
//     	wrap.style.height="1200px";
//     }
//     else if(password.length == 0){
//     	usererror.style.opacity=0;
//     	entpas.style.opacity=1;
//     	wrap.style.height="1200px";
//     }
//     else if(validpassword(password) == 0){
//     	entpas.style.opacity=0;
//         error.style.opacity = 1;
//         required.style.opacity = 1;
//         wrap.style.height= "1300px";
//     }
//     else if(password!=repassword){
//     	error.style.opacity = 0;
//         required.style.opacity = 0;
//     	passmis.style.opacity = 1;
//         wrap.style.height= "1200px";
//     }
    
//     else if(adnumber.length!=16){
//         aderror.style.opacity = 1;
//         wrap.style.height= "1200px";
//     }
    
	
	
})