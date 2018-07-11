
class ReturnButton {

    constructor() {

        // Elements
        this.button = $('.returnButton');

        // Events
        if(this.button) {
            this.attachmentEvents();
        }

    }

    attachmentEvents() {
        this.button.addEventListener("click",this.return.bind(this));
    }

    return() {
        location.href = "../";
    }

}

export default ReturnButton;