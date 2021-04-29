
// var categoryWrap = document.getElementById('categoryWrap');

// // categoryWrap.style.cursor = 'pointer';
// categoryWrap.onclick = function() {
    
//     console.log('s')
// };

// categoryWrap.onmouseover = function() {
//     this.style.backgroundColor = 'red';
// };
    let element = document.getElementById('myDiv')
    element.classList.remove('custom-detail-card-fix')

document.addEventListener('scroll', function(){
    // var y= element.scrollTop;
    if (window.scrollY > 20) {
    element.classList.add('custom-detail-card-fix')
        console.log('no')
    } else {
        element.classList.remove('custom-detail-card-fix')
    }

    // button classList.add('transparency')
});



