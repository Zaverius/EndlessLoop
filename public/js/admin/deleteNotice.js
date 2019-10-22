
    $(document).on("click", ".borrar-noticia", function () {
         var myNotice = $(this).attr('id');
         $(".modal-body").html("¿Estás completamente seguro de que quieres eliminar la noticia con ID "+myNotice+"? <b>No podrás</b> deshacer esta acción." );
    });