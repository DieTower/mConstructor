
class Index {

    constructor() {
        console.log('hello');

        //String
        this.str = "";

        //Input
        this.input = $('#search');

        //Events
        this.attachmentEvents();
    }

    attachmentEvents() {
        this.input.addEventListener("input",this.search.bind(this));
    }

    search(elementValue) {

        if(elementValue.data != null) {

            this.str = this.str + elementValue.data;
            
        } else {

            this.str = this.str.slice(0,-1);

        }

        var url = "./js/search.php?data=" + this.str;
        this.ajax(url);

    }

    ajax(url) {
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {

            if(this.readyState == 4) {

                if(this.status == 200) {

                    $('#phpContainer').innerHTML = this.response;

                }

            }

        }

        xhttp.open("GET",url,true);
        xhttp.send();
    }

}

const index = new Index();