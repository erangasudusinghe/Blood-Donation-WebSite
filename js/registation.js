
function checkname()
{   
    var Fname = document.getElementById("fname").value;
    var Lname = document.getElementById("lname");
    alert(Fname);
    if(Fname==" ")
    {
        alert("first name emty");
        Fname.style.borderColor="red";
    }
    else if(Lname=" ")
    {
        Lname.style.borderColor="red";
    }
}