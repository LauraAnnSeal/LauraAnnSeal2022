const showText = document.querySelector('.show-text');
let i = 0;

if(showText && textFields){
    setInterval(() => {
        if(i === textFields.length){
            i =0;
        }
        showText.innerText = textFields[i];
        i++;
    }, 500)
}