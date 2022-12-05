import * as v from './components/variables.js'
import {circleAll} from './components/functions.js'


$(document).ready(()=>{
    v.overlay.hide();

    v.burgerButton.click(() => {
        circleAll('hide');
        v.overlay.fadeIn();
    });
    
    v.burgerButtonClose.click(() => {
        circleAll('show');
        v.overlay.fadeOut();
    })
    
    $('.overlay_content_text').click(() => {
        circleAll('show');
        v.overlay.fadeOut();
    })
})
