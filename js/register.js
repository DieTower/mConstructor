import Function from './function.js';

class Register extends Function {
    constructor() {
        super();

        // Atributes
        this.exit = this.$('.registerExit i');
        this.button = this.$('.registerButton');
        
        // Elements for manipulate
        this.background = this.$('.loginOrRegister');
        this.register = this.$('.registerContainer');
        
        // Field elements
        this.email = this.$('#email',this.register);
        this.user = this.$('#usernameRegister',this.register);
        this.pass = this.$('#passwordRegister',this.register);
        this.confirmPass = this.$('#confirmPassword',this.register);
        
        // Events
        this.attachmentEvents();
    }
    
    attachmentEvents() {
        this.exit.addEventListener('click',this.hiddenContainer.bind(this));
        this.background.addEventListener('click',this.targetExitEvent.bind(this));
        this.button.addEventListener('click',this.doRegister.bind(this));
    }
    
    /* Makes a Register */
    doRegister() {
        
        if(this.checkData()) {
            
            this.ajaxRegister(this.email.value,this.user.value,this.pass.value);
            
        }
        
    }
    
    checkData() {
        var trueOrFalse = true;
        
        if(parseInt(this.user.value.length) < 4) {
            
            alert('The username needs have to more of four characters.');
            trueOrFalse = false;
            
        } else if(parseInt(this.pass.value.length) < 5) {
            
            alert('The password needs have to more of five characters.');
            trueOrFalse = false;
            
        } else if(this.user.value == this.pass.value) {
            
            alert('The username and the password can not be equal.');
            trueOrFalse = false;
            
        } else if(this.pass.value != this.confirmPass.value) {
            
            alert('Both of the passwords have to be equal.');
            trueOrFalse = false;
            
        }
        
        return trueOrFalse;
    }
    
    ajaxRegister(email,user,pass) {
        
        var xhttp = new XMLHttpRequest();
        
        xhttp.onreadystatechange = function() {
            if(this.readyState == 4) {
                
                if(this.status == 200 && this.responseText == "true") {
                    alert('Register successful!');
                } else {
                    alert("The email already exists.");
                }
                
            }
        }
        
        var url = "../php/register.php?email=" + email + "&user=" + user + "&pass=" + pass;
        xhttp.open("GET",url,true);
        xhttp.send();
        
    }
    
    
    targetExitEvent(event) {
        if(event.target.classList.contains('loginOrRegister')) {
            this.hiddenContainer();
        }
    }
    
    hiddenContainer() {
        
        this.register.classList.add('hiddenContainer');
        this.background.classList.add('showBackground');

        setTimeout(function() {
            this.vanishShowClass();
            
            this.email.value = "";
            this.user.value = "";
            this.pass.value = "";
            this.confirmPass.value = "";
            
        }.bind(this), 850);

    }

    vanishShowClass() {

        // Check if the background contains some class related with the disappearance of background
        if(this.background.classList.contains('hiddenBackground')) {

            // Remove the class that makes the background are vanish
            this.background.classList.remove('hiddenBackground');

            // Remove the class that makes the container are shown
            this.register.classList.remove('showContainer');

        };

    }

}

export default Register;