window.usuarioguardar = function (endpoint, userId) {
    const id = document.getElementById("id" + userId)?.value;
    const postal = document.getElementById("postal" + id)?.value;
    const about = document.getElementById("about" + id)?.value;
    Swal.fire({
        position: 'top-center',
        icon: 'warning',
        title: 'Estas seguro de cambiar los valores?',
        showConfirmButton: true,
        showCancelButton: true,
        cancelButtonText: "Cancelar",
        confirmButtonText: "Si, editar",
    }).then((resultado) => {
        // SweetAlert2 usa `isConfirmed`
        if (resultado.isConfirmed) {
            axios.put(endpoint + userId, { id,postal, about})
                .then(() => {
                    console.log("*se edita el usuario*");
                })
                .catch((error) => {
                    console.error(error);
                })
                .finally(() => {
                    setTimeout(() => location.reload(), 500);
                });
        } else {
            console.log("*No se edita el usuario*");
        }
    });
}
