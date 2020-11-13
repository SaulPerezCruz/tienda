$(document).ready(function() {
    $("#btnComentarios").click(function(e) {
        e.preventDefault();
        guardarComentario();
    });

    async function guardarComentario() {
        const datos = new FormData(document.getElementById('form_contacto'));

        await fetch('assets/data/comentario.php', {
                method: 'POST',
                body: datos
            })
            .then(response => response.json())
            .then(response => {
                if (response.dato == 'ok') {
                    alert("Información enviada correctamente");
                } else {
                    alert("No se ha podido enviar el comentario");
                }
            })
            .catch(err => {
                console.log(err);
            });
    }
});