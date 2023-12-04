function ValidationForm() {
    let username = document.forms["RegForm"]["name"];
    let email = document.forms["RegForm"]["email"];
    let pass = document.forms["RegForm"]["password"];
    let feedback=document.forms["RegForm"]["feedback"];

     /*Using pattern search to make sure that username has 5-20 letters only
     otherwise display error message and make focus in username 
     */
      if(username.value.search(/\w{5,20}/)==-1){ 
        alert("Error :please enter a valid username from (5-20) letter");
           username.focus(); 
           return false; }


      /*display an error message if no email is written
      */
      if (email.value==""){
        alert("Error :please enter your email address");
        email.focus();
        return false;
      }

          /*password should consist of at least 8 digits, if not then an error message
           will ocurr and focus on password
          */
      if(password.value.search(/\d{8}/)==-1) { 
            alert("Error : please enter a valid password (atleast 8 digits)"); 
            password.focus();
            return false;}

       /*check if there is at least one character in the feedback area ,if not, display
       an error message and focus on the textarea again 
       */
      if (feedback.value.search(/\w/)==-1){
        alert("Error: please enter your feedback ");
        feedback.focus();
        return false;
      }

return true;}