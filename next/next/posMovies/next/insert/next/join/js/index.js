import StaffToScene from './staffToScene';
import ActorsToScene from './actorsToScene';
import EquipmentsToScene from './equipmentsToScene';
import ObjectsToScene from './objectsToScene';

class Index {

    constructor() {
        
        //Buttons
        this.staffToScene = new StaffToScene();
        this.actorsToScene = new ActorsToScene();
        this.equipmentsToScene = new EquipmentsToScene();
        this.objectsToScene = new ObjectsToScene();

    }

}

const index = new Index();