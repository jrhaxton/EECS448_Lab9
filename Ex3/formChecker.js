function verify(){
    let username = document.getElementById("user").value;
    let password = document.getElementById("pass").value;
    let atla = document.getElementById("atlaQ").value;
    let lok = document.getElementById("lokQ").value;
    let to = document.getElementById("toQ").value;
    let s1 = document.getElementById("s1");
    let s2 = document.getElementById("s2");
    let s3 = document.getElementById("s3");

    if(username.length == 0){
        alert("Username can't be blank!");
        return false;
    }

    if (password.length == 0) {
        alert("Password can't be blank!");
        return false;
    }

    if(!username.match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/))
    {
        alert("Invalid Username! Must be in the form of an email!");
        return false;
    }

    if(atla.length == 0 || lok.length == 0 || to.length == 0)
    {
        alert("Can't leave items blank");
        return false;
    }
    if(s1.checked || s2.checked || s3.checked)
    {
    }
    else{
        alert("Please select a shipping option.");
        return false;
    }
}  