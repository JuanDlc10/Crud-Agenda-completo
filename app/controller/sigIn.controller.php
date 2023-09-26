<script>
    $(document).ready(() => {
        $("#sigIn").click(() => {
            let user = $("#user").val()
            let password = $("#password").val()
            if (!user) {
                Swal.fire({
                    icon: "error",
                    text: "No escribiste un usuario",
                    timer: 2000
                })
                return false
            }
            if (!password) {
                Swal.fire({
                    icon: "error",
                    text: "No escribiste una contraseña",
                    timer: 2000
                })
                return false
            }
            $.ajax({
                url: "./app/model/process/sigIn.process.php",
                data: {
                    user,
                    password,
                },
                type: "POST",
                success: () => { 
                    Swal.fire({
                        title: 'Usuario agregado',
                        text: "Usuario guardado con exito!",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ok!'
                        }).then((result) => {
                            window.location = "./home"
                        })  
            },
            error:() => {
                console.log("Error")
            }
            })
        })
    })
</script>