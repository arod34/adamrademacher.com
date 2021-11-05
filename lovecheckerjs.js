const loveButton = document.getElementById('loveluckbutton');
var loveDesc = [
    'Tears are ahead if you continue to pursue this certain comeone. Better luck next time',
    'Your arguments will bring you two closer together. Dont let your differences get in between you too much'

];

loveButton.addEventListener('click', () =>{
    var randomNum = Math.floor(Math.random() * loveDesc.length);
    loveDescription(randomNum);
})

function loveDescription(randomNum){
    document.getElementById("lovedescription2").innerHTML = '';
     document.getElementById("lovedescription2").innerHTML = loveDesc[randomNum];
}
