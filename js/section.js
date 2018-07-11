import Function from './function.js';

class Section extends Function {
    constructor() {
        super();
        this.section = this.$('.sectionContainer');

        this.attachmentEvents();
    }

    attachmentEvents() {
        this.$('.redContainer',this.section).addEventListener('mouseover',this.redMouseIn.bind(this));
        this.$('.redContainer',this.section).addEventListener('mouseout',this.redMouseOut.bind(this));
    }

    redMouseIn() {
        let red = this.$('.redContainer');
        let blue = this.$('.blueContainer');

        if(red.classList.contains('redOut')) {
            red.classList.remove('redOut');
            red.classList.add('redIn');
            blue.classList.add('removeShadow');

        } else {
            red.classList.add('redIn');
            blue.classList.add('removeShadow');

        }
    }

    redMouseOut() {
        let red = this.$('.redContainer');
        let blue = this.$('.blueContainer');

        if(red.classList.contains('redIn')) {
            red.classList.remove('redIn');
            red.classList.add('redOut');
            blue.classList.remove('removeShadow');

        } else {
            red.classList.add('redOut');
            blue.classList.remove('removeShadow');

        }
    }

}

export default Section;