
class Index {

    constructor() {

        //Values
        this.actorsValue = parseInt($('.actors span').innerHTML);
        this.staffValue = parseInt($('.staff span').innerHTML);
        this.objectsValue = parseInt($('.objects span').innerHTML);
        this.equipmentsValue = parseInt($('.equipments span').innerHTML);
        this.totalBudget = this.actorsValue + this.staffValue + this.objectsValue + this.equipmentsValue;

        //Total
        $('.budget span').innerHTML = this.totalBudget;
        
    }

}

const index = new Index();