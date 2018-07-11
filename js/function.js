
class Function {

    constructor() {
        this.$ = this.search;
    }

    search(element,context) {
        if(context) {
            return context.querySelector(element);
        } else {
            return document.querySelector(element);
        }
    }

}

export default Function;