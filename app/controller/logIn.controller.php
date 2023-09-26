<script>
   $(document).ready(() => {
    $("#logIn").click(() => {
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
            type: "POST",
            url: "./app/model/process/logIn.process.php",
            data: {
                user,
                password,
            },
            success: () => {
                window.location = "./read"
            },
            error: (error) => {
                console.error(error);
            }
        });
    });
});
</script>
