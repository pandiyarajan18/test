<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SweetAlert Example</title>
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
    <button id="myButton">Click me that !</button>

    <script>
        // Wait for the document to be fully loaded
        $(document).ready(function(){
            alert('well');
            // Handle button click event
            $('#myButton').click(function(){
                // Show SweetAlert
                Swal.fire({
                    title: 'Hello!',
                    text: 'This is a SweetAlert example with jQuery.',
                    icon: 'success',
                    confirmButtonText: 'Okay'
                });
            });
        });
    </script>
</body>
</html>
