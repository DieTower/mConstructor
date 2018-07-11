
class Index {

    constructor() {
        //Button
        this.button = $(".button");

        //Events
        this.attachmentEvents();
    }

    attachmentEvents() {
        this.button.addEventListener("click",this.delete.bind(this));
    }

    delete() {
        var url = "";
        this.ajax(url);
    }

    ajax(url) {

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {

            if(this.readyState == 4) {

                if(this.status == 200 && this.response == "true") {

                    alert('Your account has been erased');

                } else {

                    alert("Error! You account can't be erased!");

                }

            }

        }

        xhttp.open("GET",url,true);
        xhttp.send();

    }

}

const index = new Index();