<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        if ('Notification' in window) {
            window.location = "./view/landing_page.php";
        } else {
            window.location = "./view/landing_app.php";
        }
    });
</script>