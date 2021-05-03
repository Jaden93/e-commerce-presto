
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

let big_img = document.getElementById('big-img')
if(big_img){
    const header = document.querySelector('header');
    window.addEventListener("scroll",function(){
        header.classList.toggle('sticky', window.scrollY > 0);
        
    })

    const navbar_header = document.querySelector('nav.nav-header')
    document.getElementById('toggle').addEventListener('click' , function() {
        navbar_header.classList.toggle('active');
    })

}

const icons = document.querySelectorAll('.icon');

icons.forEach(icon => {
    icon.addEventListener('click', function(){
        icon.parentNode.classList.toggle('active');
    })
});

// console.log(icon)

// icon.onclick = function() {
//     console.log('ciao')
//     // search.classList.toggle('active')
// }

// $(function(){
//     window.addEventListener('scroll',function stopScroll(e) {
//         if ($(this).scrollTop() < 100 ) { 
//             window.scrollBy(0,10)
            
            

//         }
//     }); 
// });

        



$(function() {

    if ($('#drophere').length > 0 ) {

        let csrfToken=$('[name="_token"]').attr('value')
            let uniqueSecret=$('input[name="uniqueSecret"]').attr('value');

            let myDropzone = new Dropzone ('#drophere', {
                url: '/announcement/images/upload',

                params: {
                    _token: csrfToken,
                    uniqueSecret: uniqueSecret
                },
                addRemoveLinks: true,
                init: function() {
                    $.ajax({

                        type: 'GET',
                        url: '/announcement/images',
                        data: {
                            uniqueSecret: uniqueSecret
                        },
                        dataType: 'json'
                    }).done(function(data){
                        console.log(data);
                        $.each(data, function(key,value){
                            let file = {
                                serverId: value.id
                            };

                            myDropzone.options.addedfile.call(myDropzone, file);
                            myDropzone.options.thumbnail.call(myDropzone, file, value.src);
                        })
                    })
                }

            });


    myDropzone.on("success", function(file, response) {
        file.serverId = response.id;

    });


    myDropzone.on("removedfile", function(file) {
        $.ajax ({
            type: 'DELETE',
            url: '/announcement/images/remove',
            data: {

                _token: csrfToken,
                id: file.serverId,
                uniqueSecret: uniqueSecret
            },
            dataType: 'json'
        })
    });
}
    // alert('ci sono');
})
