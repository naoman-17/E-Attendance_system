function mod(x)
{
    if(x==1)
    {
        alert("Studnet");
        document.getElementById("2").style.display="none";
        document.getElementById("3").style.display="none";
        document.getElementById("1").style.display="inline-block";

    }
    else if(x==2)
    {
        alert("faculty");
        document.getElementById("1").style.display="none";
        document.getElementById("3").style.display="none";
        document.getElementById("2").style.display="inline-block";
        
        

    }
    else if(x==3)
    {
        alert("admin");
        document.getElementById("1").style.display="none";
        document.getElementById("2").style.display="none";
        document.getElementById("3").style.display="inline-block";
    }
}