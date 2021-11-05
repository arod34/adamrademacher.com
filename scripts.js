const openPicButton = document.querySelectorAll('[data-pic-target]');
const closePicButton = document.querySelectorAll('[data-close-button]');
const overlay = document.getElementById('overlay');

openPicButton.forEach(button => {
    button.addEventListener('click', () => {
        const pic = document.querySelector(button.dataset.picTarget);
        openPic(pic);
    })
})

closePicButton.forEach(button => {
    button.addEventListener('click', () => {
        const pic = button.closest('.pic');
        closePic(pic);
    })
})

overlay.addEventListener('click', () =>{
    const pics = document.querySelectorAll('.pic.active');
    pics.forEach(pic =>{
        closePic(pic);
    })
})


function openPic(pic){
    if (pic == null) return;
    pic.classList.add('active');
    overlay.classList.add('active');

}

function closePic(pic){
    if (pic == null) return;
    pic.classList.remove('active');
    overlay.classList.remove('active');

}