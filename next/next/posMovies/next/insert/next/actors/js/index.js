

class Index {

    constructor() {
        
        //Elements
        this.name = $("#name");
        this.artisticName = $("#artisticName");
        this.date = $("#date");
        this.genre = $('#genre');
        this.origin = $("#origin");
        this.email = $("#email");
        this.salary = $("#salary");
        
        //button
        this.button = $("#save");
        console.log('yoooo');
        //attachmentEvents
        this.attachmentEvents();
    }

    attachmentEvents() {
        this.button.addEventListener("click",this.putData.bind(this));
    }

    putData() {
        if(this.check()) {

            if(this.artisticName.value == "") {
                this.artisticName.value = this.name.value;
            }

            var url = "./php/insertActors.php?name=" + this.name.value + "&artisticName=" + this.artisticName.value + "&date=" + this.date.value + "&genre=" + this.genre.value + "&origin=" + this.origin.value + "&email=" + this.email.value + "&salary=" + this.salary.value;
            this.ajax(url);
        } else {
            alert('All fields need to be completed!');
        }
    }

    check() {
        var trueOrFalse = true;

        if(this.name.value == "" || this.date.value == "" || this.genre.value == "" || this.origin.value == "" || this.email.value == "" || this.salary.value == "") {
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