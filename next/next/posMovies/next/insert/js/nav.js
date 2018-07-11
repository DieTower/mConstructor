
class Nav {

    constructor() {
        //Elements (Buttons)
        this.scenes = $('.navScenes');
        this.shots = $('.navShots');
        this.actors = $('.navActors');
        this.staff = $('.navStaff');
        this.objects = $('.navObjects');
        this.equipments = $('.navEquipments');
        this.join = $('.navJoin');
        
        //Events
        this.attachmentEvent();
    }

    attachmentEvent() {

        this.scenes.addEventListener("mouseover",this.scenesColor.bind(this));
        this.scenes.addEventListener("mouseout",this.clean.bind(this));
        
        if(this.shots) {
            this.shots.addEventListener("mouseover",this.shotsColor.bind(this));
            this.shots.addEventListener("mouseout",this.clean.bind(this));

            this.actors.addEventListener("mouseover",this.actorsColor.bind(this));
            this.actors.addEventListener("mouseout",this.clean.bind(this));

            this.staff.addEventListener("mouseover",this.staffColor.bind(this));
            this.staff.addEventListener("mouseout",this.clean.bind(this));
            
            this.objects.addEventListener("mouseover",this.objectsColor.bind(this));
            this.objects.addEventListener("mouseout",this.clean.bind(this));

            this.equipments.addEventListener("mouseover",this.equipmentsColor.bind(this));
            this.equipments.addEventListener("mouseout",this.clean.bind(this));

            this.join.addEventListener("mouseover",this.joinColor.bind(this));
            this.join.addEventListener("mouseout",this.clean.bind(this));
        }

    }


    // Change colors functions
    scenesColor() {
        $('.container').classList.add('scenesColor');
    }

    shotsColor() {
        $('.container').classList.add('shotsColor');
    }

    actorsColor() {
        $('.container').classList.add('actorsColor');
    }

    staffColor() {
        $('.container').classList.add('staffColor');
    }
    
    objectsColor() {
        $('.container').classList.add('objectsColor');
    }

    equipmentsColor() {
        $('.container').classList.add('equipmentsColor');
    }

    joinColor() {
        $('.container').classList.add('joinColor');
    }

    clean() {

        if($('.container').classList.contains('scenesColor')) {

            $('.container').classList.remove('scenesColor');

        } else if($('.container').classList.contains('shotsColor')) {

            $('.container').classList.remove('shotsColor');

        } else if($('.container').classList.contains('actorsColor')) {

            $('.container').classList.remove('actorsColor');

        } else if($('.container').classList.contains('staffColor')) {

            $('.container').classList.remove('staffColor');

        } else if($('.container').classList.contains('objectsColor')) {

            $('.container').classList.remove('objectsColor');

        } else if($('.container').classList.contains('equipmentsColor')) {

            $('.container').classList.remove('equipmentsColor');

        } else if($('.container').classList.contains('joinColor')) {

            $('.container').classList.remove('joinColor');

        };

    }

}

export default Nav;