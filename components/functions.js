import { allArray } from "./variables.js";


export function circleAll(output) {
    if (output == 'hide') {
        for (let i = 0; i < allArray.length; i++) {
            allArray[i].hide();
        }
    } else if (output == 'show') {
        for (let i = 0; i < allArray.length; i++) {
            allArray[i].show();
        }
    }
}