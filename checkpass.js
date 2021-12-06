function checkPass(){
    let password = document.getElementById("pass").value;
    let cnfrmpassword =  document.getElementById("cpass").value;
    // console.log(password, cnfrmpassword);
    let message = document.getElementById("message");

    if(password.length != 0){
        if(password == cnfrmpassword){
            // message.textContent = "Password Match"

        }else{
            message.textContent = "Password doesn't Match";
            message.style.backgroundColor = "#ff4d4d";
        }
    }
}