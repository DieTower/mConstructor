import Nav from './nav.js';
import NoMovies from './noMovies.js';
import WithMovies from './withMovies.js';
import ReturnButton from './returnButton.js';

class Index {

    constructor() {
        //this.nav = new Nav();
        this.noMovies = new NoMovies();
        this.movies = new WithMovies();
        this.returnButton = new ReturnButton();
    }

}

const index = new Index();