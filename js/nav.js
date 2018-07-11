import Function from './function.js';
import Login from './login.js';
import Register from './register.js';

class Nav extends Function {
    constructor() {
        super();
        
        // Login and Register
        const login = new Login();
        const register = new Register();

        // Atributes
        this.arrow = this.$('.theArrow > i');
        this.about = this.$('#about');
        this.login = this.$('#login');
        this.register = this.$('#register');

        // Events
        this.attachmentEvents();
    }

    // Events on "nav"
    attachmentEvents() {
        this.login.addEventListener('click',this.showLogin.bind(this));
        this.register.addEventListener('click',this.showRegister.bind(this));
    }

    // Show login container
    showLogin() {

        // These method vanish the old class's
        this.vanishHiddenClass();

        let theLogin = this.$('.loginContainer');
        let container = this.showContainer.bind(this);
        container(theLogin);
    }

    // Show register container
    showRegister() {

        // These method vanish the old class's
        this.vanishHiddenClass();

        let theLogin = this.$('.registerContainer');
        let container = this.showContainer.bind(this);
        container(theLogin);
    }

    // How the name of the function said, that shown the element if the same can be shown.
    showContainer(element) {
        let background = this.$('.loginOrRegister');

        // Choose the container needs be shown
        if (element.classList.contains('loginContainer')) {
            var theContainer = this.$('.loginContainer');

        } else if(element.classList.contains('registerContainer')) {
            var theContainer = this.$('.registerContainer');

        };

        // Insert the context in the function
        var check = this.checkTheVanish.bind(this);
        check(theContainer);

        // Add the class css effects
        background.classList.add('hiddenBackground');
        theContainer.classList.add('showContainer');
    }

    // Checks if the element that are analyzed can be shown, a solves the problem if it can't be.
    checkTheVanish(element) {
        if(element.classList.contains('loginContainer')) {
            var mainElement = this.$('.loginContainer');
            var secondElement = this.$('.registerContainer');

        } else if(element.classList.contains('registerContainer')) {
            var mainElement = this.$('.registerContainer');
            var secondElement = this.$('.loginContainer');

        }

        if(!secondElement.classList.contains('vanish')) {
            secondElement.classList.add('vanish');
        }

        if(mainElement.classList.contains('vanish')) {
            mainElement.classList.remove('vanish');
        }
    }

    // Vanish the possible hidden class's
    vanishHiddenClass() {

        // Elements for manipulate
        var background = this.$('.loginOrRegister');
        var login = this.$('.loginContainer');
        var register = this.$('.registerContainer');

        // Check if the background contains some class related with the disappearance of background
        if(background.classList.contains('showBackground')) {

            // Remove the class that makes the background are vanish
            background.classList.remove('showBackground');

            if(login.classList.contains('hiddenContainer')) {
            
                // Remove the class that makes the container are shown
                login.classList.remove('hiddenContainer');
            
            };
            
            if(register.classList.contains('hiddenContainer')) {

                // Remove the class that makes the container are shown
                register.classList.remove('hiddenContainer');

            };

        };

    }

}

export default Nav;