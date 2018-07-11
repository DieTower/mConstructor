class EquipmentsToScene {

    constructor() {

        //Elements
        this.sceneDate = $("#sceneDate");
        this.modelId = $("#modelId");
        this.sceneId = $("#sceneEquipmentsId");
        this.description = $("#sceneEquipmentsDescription");

        //Button
        this.button = $("#equipmentsButton");

        //Events
        this.attachmentEvents();

    }

    attachmentEvents() {

        this.button.addEventListener("click",this.insertData.bind(this));

    };

    insertData() {

        if(this.check()) {

            var url = "./php/equipmentsScene.php?sceneDate=" + this.sceneDate.value + "&modelId=" + this.modelId.value + "&sceneId=" + this.sceneId.value + "&description=" + this.description.value;
            this.ajax(url);

        } else {

            alert("The fields need to be completed...");
        
        }

    }

    check() {

        var trueOrFalse = true;

        if(this.sceneDate.value == "" || this.modelId.value == "" || this.sceneId.value == "" || this.description.value == "") {
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

export default EquipmentsToScene;