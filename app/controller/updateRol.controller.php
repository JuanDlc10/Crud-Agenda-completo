<script>
    $(document).ready(() => {
        $("#updateRol").click(() => {
            let id = $("#id").val()
            let rol = $("#rol").val()

            if (!rol) {
                Swal.fire({
                    icon: "error",
                    text: "No escribiste un rol"
                })
                return false
            }


            $.ajax({
                url: "./app/model/process/updateRol.process.php",
                data: {
                    id,
                    rol
                },
                type: "POST",
                success: () => {
                    Swal.fire({
                        title: 'Categoria actualizada',
                        text: "Categoria actualizada con exito!",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ok!'
                    }).then((result) => {
                        window.location = "./createRol"
                    })
                },
                error: () => {
                    Swal.fire({
                        icon: "error",
                        text: "Error al actualizar categoria!"
                    })
                }
            })
        })
    })
</script>