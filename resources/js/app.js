import './bootstrap';

let count = 0;

window.showHint = function() {
    if (count < 4){
        count ++;
        const hintField = document.getElementById('hint');
        const hintDiv = document.createElement('div');

        switch (count) {
            case 1:
                hintDiv.textContent = '- Try to find something that QA might have missed';
                break;
            case 2:
                hintDiv.textContent = '- The form expects specific data for some conditions, but not for others';
                break;
            case 3:
                hintDiv.textContent = '- One error message is oddly specific';
                break;
            case 4:
                hintDiv.textContent = '- Who would need a key for a free product?';
                break;

            default:
                break;
        }

        hintField.appendChild(hintDiv);
    }
}
