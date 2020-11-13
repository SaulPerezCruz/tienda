$(document).ready(function() {
    $("#btnLogin").click(function(e) {
        e.preventDefault();

        mostrarDato();
    }); // end #btnLogin

    async function mostrarDato() {
        const datos = new FormData(document.getElementById('formulario'));

        await fetch('assets/data/login.php', {
                method: 'POST',
                body: datos
            })
            .then(response => response.json())
            .then(response => {
                if (response.dato == 'ok') {
                    location.href = "principal.html";
                } else {
                    alert("Datos incorrectos");
                }
            })
            .catch(err => {
                console.log(err);
            });
    }
});