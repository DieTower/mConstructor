import Nav from './nav.js';
import Section from './section.js';
import Function from './function.js';

class Main extends Function {

    constructor() {
        super();
        let nav = new Nav();
        let section = new Section();
    }

}

let main = new Main();