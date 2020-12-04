$(document).ready(function() {
    $("#btnGuardar").click(function(e) {
        e.preventDefault();
        guardarUsuario();
    });

    async function guardarUsuario() {
        const datos = new FormData(document.getElementById('registro'));

        await fetch('assets/data/registro.php', {
                method: 'POST',
                body: datos
            })
            .then(response => response.json())
            .then(response => {
                if (response.dato == 'ok') {
                    alert("Registro exitoso, por favor inicie sesión");
                    location.href = "index.html";
                } else {
                    alert("Error, por favor revise sus datos");
                }
            })
            .catch(err => {
                console.log(err);
            });
    }
});