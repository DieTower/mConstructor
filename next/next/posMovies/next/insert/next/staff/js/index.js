

class Index {

    constructor() {
        
        //Elements
        this.shotNumber = $("#sceneNumber");
        this.timeStart = $("#timeStart");
        this.timeEnd = $("#timeEnd");
        this.scene = $('#scene');
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
            var url = "./php/insertShots.php?shotNumber=" + this.shotNumber.value + "&timeStart=" + this.timeStart.value + "&timeEnd=" + this.timeEnd.value + "&sceneId=" + this.scene.value + "&description=" + this.description.value;
            this.ajax(url);
        } else {
            alert('All fields need to be completed!');
        }
    }

    check() {
        var trueOrFalse = true;

        if(this.shotNumber.value == "" || this.timeStart.value == "" || this.timeEnd.value == "" || this.scene.value == "" || this.description.value == "") {
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