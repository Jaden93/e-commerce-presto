
// var categoryWrap = document.getElementById('categoryWrap');

// // categoryWrap.style.cursor = 'pointer';
// categoryWrap.onclick = function() {
    
//     console.log('s')
// };

// categoryWrap.onmouseover = function() {
//     this.style.backgroundColor = 'red';
// };
//     let element = document.getElementById('myDiv')
//     element.classList.remove('custom-detail-card-fix')

// document.addEventListener('scroll', function(){
//     // var y= element.scrollTop;
//     if (window.scrollY > 20) {
//     element.classList.add('custom-detail-card-fix')
//         console.log('no')
//     } else {
//         element.classList.remove('custom-detail-card-fix')
//     }

//     // button classList.add('transparency')
// });



window.addEventListener("scroll",function(){

    const header = document.querySelector('header');
    header.classList.toggle('sticky', window.scrollY > 0);
})

document.getElementById('toggle').onclick = function() {
    const navigation = document.querySelector('nav.nav-header').classList.toggle('active');

    // navigation.addClass('active');
 
}



$(function() {

    if ($('#drophere').length > 0 ) {

        let csrfToken=$('[name="_token"]').attr('value')
            let uniqueSecret=$('input[name="uniqueSecret"]').attr('value');

            let myDropzone = new Dropzone ('#drophere', {
                url: '/announcement/images/upload',

                params: {
                    _token: csrfToken,
                    uniqueSecret: uniqueSecret
                }
            });
    }
    
    // alert('ci sono');
})