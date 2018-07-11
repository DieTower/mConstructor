import Function from './function.js';

class Login extends Function {
    constructor() {
        super();

        // Atributes
        this.exit = this.$('.loginExit i');
        this.button = this.$('.loginButton');
        
        // Elements for manipulate
        this.background = this.$('.loginOrRegister');
        this.login = this.$('.loginContainer');
        
        // Events
        this.attachmentEvents();
    }

    attachmentEvents() {
        this.exit.addEventListener('click',this.hiddenContainer.bind(this));
        this.background.addEventListener('click',this.targetExitEvent.bind(this));
        this.button.addEventListener('click',this.doLogin.bind(this));
    }
    
    /* Login functions */
    doLogin() {
        this.checkLogin();
    }
    
    checkLogin() {
        var username = this.$('#usernameLogin',this.login).value;
        var password = this.$('#passwordLogin',this.login).value;
        
        if(parseInt(username.length) > 0 && parseInt(password).length > 0) {
            
            alert("Both of the fields need be fill");
            
        } else {
            
            this.ajaxLogin(username,password);
            
        }
    }
    
    ajaxLogin(username, password) {
        
        var xhttp = new XMLHttpRequest();
        
        xhttp.onreadystatechange = function() {
            
            if(this.readyState == 4) {
                
                if(this.status == 200 && this.responseText == "true") {
                    
                    alert('Login successful!');
                    location.href = "./next/index.php";
                    
                } else {
                    
                    alert('The user/email or password are wrong.');
                    
                }
                
            };
            
        };
        
        var url = "../php/login.php?user=" + username + "&pass=" + password;
        xhttp.open("GET",url, true);
        xhttp.send();
        
    }
    
    
    targetExitEvent(event) {
        if(event.target.classList.contains('loginOrRegister')) {
            this.hiddenContainer();
        }
    }

    hiddenContainer() {

        this.login.classList.add('hiddenContainer');
        this.background.classList.add('showBackground');

        setTimeout(function() {
            this.vanishShowClass();
            
            this.$('#usernameLogin',this.login).value = "";
            this.$('#passwordLogin',this.login).value = "";
            
        }.bind(this), 850);

    }

    vanishShowClass() {

        // Check if the background contains some class related with the disappearance of background
        if(this.background.classList.contains('hiddenBackground')) {

            // Remove the class that makes the background are vanish
            this.background.classList.remove('hiddenBackground');

            // Remove the class that makes the container are shown
            this.login.classList.remove('showContainer');

        };

    }

}

export default Login;