<script>
   $(document).ready(() => {
    $("#session").click(() => {
        $.ajax({
            type: "POST",
            data: 'id_user=' + parseInt(Math.random() * 10),
            url: "./app/model/process/session.process.php",
            success: (response) => {
                alert(`Session ID: ${response}`);
                window.location = "./read"
            },
            error: (error) => {
                console.error(error);
            }
        });
    });
});
</script>
