const rightButton = document.getElementById('right');
const leftButton = document.getElementById('left');

var dates = [
    '01/01',
    '01/02',
    '01/03',
    '01/04',
    '01/05',
    '01/06',
    '01/07',
    '01/08',
    '01/09',
    '01/10',
    '01/11',
    '01/12',
    '01/13',
    '01/14',
    '01/15',
    '01/16',
    '01/17',
    '01/18',
    '01/19',
    '01/20',
    '01/21',
    '01/22',
    '01/23',
    '01/24',
    '01/25',
    '01/26',
    '01/27',
    '01/28',
    '01/29',
    '01/30',
    '01/31',
    '02/01',
    '02/02',
    '02/03',
    '02/04',
    '02/05',
];

var signs = [
    'Aquarius',
    'Pisces',
    'Aries',
    'Taurus',
    'Gemini',
    'Cancer',
    'Leo',
    'Virgo',
    'Libra',
    'Scorpio',
    'Saggitarius',
    'Capricorn'

];

rightButton.addEventListener('click', () =>{
    nextDateRight();
})

leftButton.addEventListener('click', () =>{
    nextDateLeft();
})

function nextDateRight(){
    var currDate = document.getElementById('ExploreDates').innerText;
    for (let i = 0; i < dates.length; i++) {
        if (currDate == dates[i]){

            if (i == (dates.length - 1)){
                document.getElementById('ExploreDates').innerHTML = '';
                document.getElementById('ExploreDates').innerHTML = dates[0];
            }
            else{
                document.getElementById('ExploreDates').innerHTML = '';
                document.getElementById('ExploreDates').innerHTML = dates[i+1];
            }
        }
      } 
}

function nextDateLeft(){
    var currDate = document.getElementById('ExploreDates').innerText;
    for (let i = 0; i < dates.length; i++) {
        if (currDate == dates[i]){

            if (i == 0){
                document.getElementById('ExploreDates').innerHTML = '';
                document.getElementById('ExploreDates').innerHTML = dates[dates.length-1];
            }
            else{
                document.getElementById('ExploreDates').innerHTML = '';
                document.getElementById('ExploreDates').innerHTML = dates[i-1];
            }
        }
      } 
}
