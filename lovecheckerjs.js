const loveButton = document.getElementById('loveluckbutton');
var img = document.getElementById('pic1');
var loveDesc = [

    'Tears are ahead.',
    'Your arguments will bring you two closer together. Dont let your differences get in between you too much.',
    'Better luck next time.',
    'Time to buy a ring.',
    'Couldnt be a worse pairing.',
    'Go for it the time is now or never.'

];

var lovePics = [

    "pics/test.png",
    "pics/crylove.png",
    "pics/lovemore.png",
    "pics/alone.png"

];

loveButton.addEventListener('click', () =>{
    var randomNum = Math.floor(Math.random() * loveDesc.length);
    loveDescription(randomNum);
})

function loveDescription(randomNum){
    
    // getting date info values from page
    var dateOne = document.getElementById('date1').value;
    var dateTwo = document.getElementById('date2').value;

    var picture = 0;

    // picking appropriate picture based on random result
    if (randomNum == 0 || randomNum == 2){
        picture = 3;
    }
    
    if (randomNum == 1 || randomNum == 3){
        picture = 0;
    }

    if (randomNum == 4){
        picture = 1;
    }

    if (randomNum == 5){
        picture = 2;
    }

    document.getElementById("lovedescription2").innerHTML = '';
    document.getElementById("lovedescription2").innerHTML = 'Calculating compatability please wait a moment....';

    // adding delay
    setTimeout( function () {
        if (dateOne == "" || dateTwo == ""){
            document.getElementById("lovedescription2").innerHTML = '';
            document.getElementById("lovedescription2").innerHTML = "Please input both dates to use the love checker calculator.";
        }

        else{

            if (dateOne == "2000-10-19" || dateTwo == "2000-10-19"){

                document.getElementById("lovedescription2").innerHTML = '';
                document.getElementById("lovedescription2").innerHTML = loveDesc[3];
            }

            else {

                // clearing and then adding text to screen
                document.getElementById("lovedescription2").innerHTML = '';
                document.getElementById("lovedescription2").innerHTML = loveDesc[randomNum];
                
            }

        }

        // setting new image based on random number
        img.src = lovePics[picture];

    }, 2000);

}
