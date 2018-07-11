

class Index {

    constructor() {
        
        //Elements
        this.model = $("#model");
        this.amount = $("#amount");
        this.price = $("#price");

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
            var url = "./php/insertEquipments.php?model=" + this.model.value + "&amount=" + this.amount.value + "&price=" + this.price.value;
            this.ajax(url);
        } else {
            alert('All fields need to be completed!');
        }
    }

    check() {
        var trueOrFalse = true;

        if(this.model.value == "" || this.amount.value == "" || this.price.value == "") {
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