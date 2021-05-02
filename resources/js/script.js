
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

const icon = document.getElementsByClassName('icon')[0];
const search = document.getElementsByClassName('search')[0];

icon.addEventListener('click', function(){
     search.classList.toggle('active');

})

// icon.onclick = function() {
//     console.log('ciao')
//     // search.classList.toggle('active')
// }

$(function(){
    window.addEventListener('scroll',function stopScroll(e) {
        if ($(this).scrollTop() < 100 ) { 
            window.scrollBy(0,10)
            
            

        }
    }); 
});

        



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
                        $.each(data, function(key,value){
                            let file = {
                                serverId: value.id
                            };

                            myDropzone.options.addedfile.call(myDropzone, file);
                            myDropzone.options.thumbnail.call(myDropzon, file, value.src);
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