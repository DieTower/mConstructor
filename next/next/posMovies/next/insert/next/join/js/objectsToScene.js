class ObjectsToScene {

    constructor() {

        this.objectsId = $("#objectsId");
        this.sceneId = $("#scenesObjectsId");

        //Button
        this.button = $("#objectsButton");

        //Events
        this.attachmentEvents();

    }

    attachmentEvents() {

        this.button.addEventListener("click",this.insertData.bind(this));

    }

    insertData() {

        if(this.check()) {

            var url = "./php/objectsScene.php?objectsId=" + this.objectsId.value + "&sceneId=" + this.sceneId.value;
            this.ajax(url);

        } else {

            alert("The fields need to be completed...");
        
        }

    }

    check() {

        var trueOrFalse = true;

        if(this.objectsId.value == "" || this.sceneId.value == "") {
            trueOrFalse = false;
        }
        
        return trueOrFalse;

    }

    ajax(url) {

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {

            if(this.readyState == 4) {

                if(this.status == 200 && this.response == "true") {

                    alert('The connect was successful!');

                } else {

                    alert("The data can't be inserted...");

                }

            }

        }

        xhttp.open("GET",url,true);
        xhttp.send();

    }

}

export default ObjectsToScene;