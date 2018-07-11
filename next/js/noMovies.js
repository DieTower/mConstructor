
class noMovies {

    constructor() {
        // Container
        this.container = $("#movies form");

        // Fields
        this.title = $('#moviesTitle');
        this.subTitle = $('#moviesSubTitle');
        this.description = $('#moviesDescription');

        // Button
        this.button = $('#moviesSubmit');
        
        // Events
        if(this.button) {
            this.attachmentEvents();
        }
    }

    attachmentEvents() {
        this.button.addEventListener("click",this.insertMovie.bind(this));
    }

    insertMovie() {
        if(this.check()) {
            console.log('These register are fine!');
            this.ajax.bind(this)(this.title.value,this.subTitle.value,this.description.value);

            if(location.href == "http://localhost/next/php/createMovie.php") {
                location.href = "../";
            } else {
                location.href = "./";
            }

        }
    }

    check() {
        var trueOrFalse = true;

        if(!this.title.value || !this.subTitle.value || !this.description.value) {
            trueOrFalse = false;
        }

        return trueOrFalse;
    }

    ajax(title,subTitle,description) {
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {

            if(this.readyState == 4) {

                if(this.status == 200 && this.responseText == "true") {

                    alert('Movie inserted');

                } else {

                    alert('Insert failed.');

                }

            }

        }

        var url = "./php/insertMovie.php?title=" + title + "&subTitle=" + subTitle + "&description=" + description;
        
        if(location.href == "http://localhost/next/php/createMovie.php") {
            url = "./insertMovie.php?title=" + title + "&subTitle=" + subTitle + "&description=" + description;
        }
        
        xhttp.open("GET",url,true);
        xhttp.send();
    }

}

export default noMovies;