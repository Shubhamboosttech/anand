<?php
include "header.php";
include "menu.php";
?>
<style>
    h3{
        text-align: center;
    }
    button{
        margin-left: 40%;
        margin-top: 5px;
    }

</style>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Upload Resume</h3>
                </div>
                <div class="card-body">
                    <form id="uploadForm" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="file">Choose Resume</label>
                            <input type="file" class="form-control-file" id="file" name="file" accept=".doc,.docx,.pdf" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <div id="message" class="mt-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('#uploadForm').on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                url: 'upload.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $('#message').html('<div class="alert alert-success">'+response+'</div>');
                },
                error: function() {
                    $('#message').html('<div class="alert alert-danger">There was an error uploading your file.</div>');
                }
            });
        });
    });
</script>












<?php
include "footer.php";
?>

