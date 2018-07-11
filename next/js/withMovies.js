
class withMovies {
    constructor() {
        
        // Button plua
        this.plus = $('.oneMoreMovie');
        this.movie = $('.movie');

        // Events
        if(this.plus) {
            this.attachmentEvents();
        }
    }

    attachmentEvents() {
        this.plus.addEventListener("click",this.goToInsertPage.bind(this));
    }

    goToInsertPage() {
        location.href = "./php/createMovie.php";
    }

    goToMoviePage() {
        console.log('asdasd');
    }

}

export default withMovies;