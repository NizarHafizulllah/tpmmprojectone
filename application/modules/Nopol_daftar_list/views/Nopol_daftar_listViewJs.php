<script>
    $(window).keydown(function(event) {

        // console.log(event.which);
        if (event.which == 121) { // F10
            $('#btnVerifikasi').click();
            return false;
        } else if (event.which == 122) { // F11
            $('#btnBaru').click();
            return false;
        } else if (event.which == 116) { // F5
            $('#btnRubah').click();
            return false;
        }

    });

    $(document).ready(function() {
        $('#btnBaru').on('click', function() {
            alert('Baru');
        });

        $('#btnVerifikasi').on('click', function() {
            alert('Verifikasi');
        });

        $('#btnRubah').on('click', function() {
            alert('Rubah');
        });
    });
</script>