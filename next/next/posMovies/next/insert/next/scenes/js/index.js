

class Index {

    constructor() {
        
        //Elements
        this.name = $("#name");
        this.date = $("#date");
        this.description = $("#description");

        // button
        this.button = $("#save");

        //attachmentEvents
        this.attachmentEvents();
    }

    attachmentEvents() {
        this.button.addEventListener("click",this.putData.bind(this));
    }

    putData() {
        if(this.check()) {
            console.log(this.name.value + " // " + this.date.value + " // " + this.description.value);
            var url = "./php/insertScene.php?name=" + this.name.value + "&date=" + this.date.value + "&description=" + this.description.value;
            this.ajax(url);
        }
    }

    check() {
        var trueOrFalse = true;

        if(this.name.value == "" || this.date.value == "") {
            trueOrFalse = false;
        }

        return trueOrFalse;
    }

    ajax(url) {
        var http = new XMLHttpRequest();
        
        http.onreadystatechange = function() {

            if(this.readyState == 4) {

                if(this.status == 200 && this.responseText == "true") {
                    
                    alert("The register has been with successful!");

                } else {

                    alert("The register has failed || " + this.responseText);

                }

            }

        }

        http.open("GET",url,true);
        http.send();
    }

}

const index = new Index();