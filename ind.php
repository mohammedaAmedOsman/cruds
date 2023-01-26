<!DOCTYPE html>
<html>
  <body>
  <style>
input[type=text], select {
  width: 50%;
  padding: 15px 15px;
  margin: 5px 0;
  display: inline-block;
  border: 2px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 150%;
  background-color: #4CAF50;
  color: white;
  padding: 40px 50px;
  margin: 2px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 90px;
}
body {
    background-color:currentColor;
}
</style>
<form>
  <center>
    <div class="container">
        <h1>Contacts</h1>
        <p></p>
        <hr>

        <input type="text" placeholder="Username" name="uname" id="uname" required>
        <input type="text" placeholder="Enter phone" name="phone" id="phone" required>

   

        
        <input type="text" placeholder=" gender" name=" gender" id=" gender" required>
        <hr>
       

        <button type="button" id="submitData" name="submitData" class="registerbtn">sibmit</button>
    </div>

   
    </center>
</form>

   
</body>
</html>
<<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.16.0/firebase-app.js";
  import { getDatabase, ref, set, update } from "https://www.gstatic.com/firebasejs/9.16.0/firebase-database.js";

  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "AIzaSyAfXsFA2q-SWuoDYEhKYgg_1eS0EVRT6iU",
    authDomain: "fir-crud-942f1.firebaseapp.com",
    projectId: "fir-crud-942f1",
    storageBucket: "fir-crud-942f1.appspot.com",
    messagingSenderId: "799013589388",
    appId: "1:799013589388:web:af4a0b75b6fc0bf204c6a9"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);

  const database = getDatabase(app);

  submitData.addEventListener('click',(e) => {
   
   var phone= document.getElementById('phone').value;
     var username= document.getElementById('uname').value;
      var  gender= document.getElementById(' gender').value;
 //const newKey = push(child(ref(database), 'users')).key;
    set(ref(database, 'users/' + username), {
      username: username,
      phone: phone,
      gender :  gender
  }) .then(() => {
   //Data saved successfully!
  alert('Done');
})
.catch((error) => {
  // The write failed...
  alert(error);
});

//update
 /*update(ref(database, 'users/' + username), {
    
      phone: phone,
        gender :  gender
  }).then(() => {
   //data success!
  alert('data Ssuccessfullye');
})
.catch((error) => {
   //The write failed...
  alert(error);
});*/
  /*
  
  removeData.addEventListener('click',(e) =>) {
    var username = document.getElementByid('username').value;

    remove(ref(database, 'users/' + username));
    alert('removed');
  };*/
  });
  </script>