
class Nav {

    constructor() {
        console.log('Nav');

        //Elements (Buttons)
        //this.home = $('.navHome');
        this.insert = $('.navInsert');
        this.script = $('.navScript');
        this.expense = $('.navExpense');
        this.settings = $('.navSettings');
        
        //Events
        this.attachmentEvent();
    }

    attachmentEvent() {
        /*
        this.home.addEventListener("click",this.toHome.bind(this));
        this.home.addEventListener("mouseover",this.homeColor.bind(this));
        this.home.addEventListener("mouseout",this.clean.bind(this));
        */

        this.insert.addEventListener("mouseover",this.insertColor.bind(this));
        this.insert.addEventListener("mouseout",this.clean.bind(this));

        this.script.addEventListener("mouseover",this.scriptColor.bind(this));
        this.script.addEventListener("mouseout",this.clean.bind(this));

        this.expense.addEventListener("mouseover",this.expenseColor.bind(this));
        this.expense.addEventListener("mouseout",this.clean.bind(this));

        this.settings.addEventListener("mouseover",this.settingsColor.bind(this));
        this.settings.addEventListener("mouseout",this.clean.bind(this));
    }


    // Change colors functions
    homeColor() {
        $('nav ul').classList.add('homeColor');
    }

    insertColor() {
        $('nav ul').classList.add('insertColor');
    }

    scriptColor() {
        $('nav ul').classList.add('scriptColor');
    }

    expenseColor() {
        $('nav ul').classList.add('expenseColor');
    }

    settingsColor() {
        $('nav ul').classList.add('settingsColor');
    }

    clean() {

        if($('nav ul').classList.contains('homeColor')) {

            $('nav ul').classList.remove('homeColor');

        } else if($('nav ul').classList.contains('insertColor')) {

            $('nav ul').classList.remove('insertColor');

        } else if($('nav ul').classList.contains('scriptColor')) {

            $('nav ul').classList.remove('scriptColor');

        } else if($('nav ul').classList.contains('expenseColor')) {

            $('nav ul').classList.remove('expenseColor');

        } else if($('nav ul').classList.contains('settingsColor')) {

            $('nav ul').classList.remove('settingsColor');

        }

    }

}

export default Nav;