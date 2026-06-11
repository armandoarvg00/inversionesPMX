
window.usuariodesactivar = function (endpoint, userId) {
    const id = document.getElementById("id" + userId)?.value;
    const postal = document.getElementById("postal" + id)?.value;
    const about = document.getElementById("about" + id)?.value;
    const password = document.getElementById("password" + id)?.value;
    const city = document.getElementById("city" + id)?.value;
    const usuario = '2';
    Swal.fire({
        position: 'top-center',
        icon: 'warning',
        title: 'Estas seguro de cambiar el estado del usuario?',
        showConfirmButton: true,
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        confirmButtonText: "Si, editar",
    }).then((resultado) => {
        // SweetAlert2 usa `isConfirmed`
        if (resultado.isConfirmed) {
            axios.put(endpoint + userId, { id,postal, about, password, usuario, city})
                .then(() => {
                    console.log("se edita el usuario");
                })
                .catch((error) => {
                    console.error(error);
                })
                .finally(() => {
                   // setTimeout(() => location.reload(), 500);
                });
        } else {
            console.log("*No se edita el usuario*");
        }
    });
}

