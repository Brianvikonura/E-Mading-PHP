    <!-- Responsive Navigation Bar -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../assets/script/sidebarToggler.js"></script>

    <!-- TinyInt Editor JavaScript -->
    <script>
      tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
      });
    </script>

    <!-- Script to get status value -->
    <script>
      function setStatus(status) {
        document.getElementById('status').value = status;
        document.forms[0].submit();
      }
    </script>

</body>

</html>