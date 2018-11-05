$(document).on('click' , '.pagination a',function(e){

    e.preventDefault();
    var page = $(this).attr('href').split('page=')[1];
    var route = window.location;
    var ruta = route.origin + "/";


    $.ajax({
        url: ruta,
        data:{
            page: page,
        },
        type: 'GET',
        dateType: 'json',
        success: function(data) {

           $('.productos').html(data);

        }


    })




});

var tiempo = null;

    $(document).keyup('#search',function (e) {
        clearTimeout(tiempo);


        var route = window.location;
        var ruta = route.origin + "/";
        var dato = document.getElementById("search");
     

         tiempo = setTimeout(function() {
            $.ajax({
                url: ruta,
                data:{
                    dato: dato.value,
                    categoria: "",

                },
                type: 'GET',
                dateType: 'json',
                success: function(data) {

                        $('.productos').html(data);

                }
            });
        }, 500);





    });

    $(document).change('#categoria',function (e) {


        var route = window.location;
        var ruta = route.origin + "/";
        var categoria = document.getElementById("categoria");

            $.ajax({
                url: ruta,
                data:{
                    category_id: categoria.value,

                },
                type: 'GET',
                dateType: 'json',
                success: function(data) {

                    $('.productos').html(data);

                }
            });






    });






