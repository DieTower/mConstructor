function $(element,context) {

    if(!context) {

        return document.querySelector(element);

    } else {

        return context.querySelector(element);

    }

}