const getStatedButton = document.querySelector('.getStartedBtn');
const getStatedArrows = document.querySelectorAll('.getStartedChevrons');

getStatedButton.addEventListener('mouseenter',()=>{
    getStatedArrows[0].classList.add('translate-x-2');
    getStatedArrows[1].classList.add('translate-x-4');
})
getStatedButton.addEventListener('mouseleave',()=>{
    getStatedArrows[0].classList.remove('translate-x-2');
    getStatedArrows[1].classList.remove('translate-x-4');
})
