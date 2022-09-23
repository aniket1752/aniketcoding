function addem() {
   // e.preventDefault(e);
   // var id = document.getElementById('stuid').value;
   var  cname = document.getElementById('nameid').value;
   var cemail = document.getElementById('emailid').value;
   var cmob = document.getElementById("mobid").value;
   // console.log(id);
   // console.log(name);
   // console.log(email);
   // console.log(mob);
   const xhr = new XMLHttpRequest();
   xhr.open("POST","insert.php",true);
   
   xhr.setRequestHeader("Content-Type","application/json")
    xhr.onsubmit = ()=>{
      if(xhr.status===200){
         console.log(xhr.responseText);
      }
      else("Problem!!!");  
       }
//JavaScript Object 
   const mydata={name:cname, email:cemail, mob:cmob  }
   console.log(mydata);
   //Conversion of Javascript obj to JSON string
   const data= JSON.stringify(mydata);
   console.log(data)
   xhr.send(data);  
}     