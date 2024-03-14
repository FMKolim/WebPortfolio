function ClearFields() {
    //Function for clearing textarea for blog

    if(confirm("Are you sure you want to clear?")) {
        document.getElementById("blogtitle").value = "";
        document.getElementById("blogtext").value = "";
    
        document.getElementById("blogtitle").style.backgroundColor = "white";
        document.getElementById("blogtext").style.backgroundColor = "white";
    } else  {
        ;
    }
    //Confirm is a pop up box that makes sure the user wants to clear all fields
    //If confirmed then get element and change their value to empty ("") as well as reset their colour back to white if they were red before
}

Submit.addEventListener('click', function(e){

    if(document.getElementById("blogtitle").value.length == 0 || document.getElementById("blogtext").value.length == 0){

        e.preventDefault();

        highlight();
    }

    //When submit button is clicked checks if all fields are filled in, else they are highlighted
    //submit default working is prevented if any field is missing making the user fill it in else wont submit
});


function highlight(){

    if(document.getElementById("blogtitle").value.length == 0){

        document.getElementById("blogtitle").style.backgroundColor = "#FF8484";

    } else {
        document.getElementById("blogtitle").style.backgroundColor = "white";
    }

    if(document.getElementById("blogtext").value.length == 0){

        document.getElementById("blogtext").style.backgroundColor = "#FF8484";

    } else {
        document.getElementById("blogtext").style.backgroundColor = "white";
    }

    //Highlight function that highlights whichever field is missin in red, if filled then in white
}



