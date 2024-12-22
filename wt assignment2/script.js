$(document).ready(function() {
    $('#applicationForm').on('submit', function(e) {
        e.preventDefault(); // Prevent form from submitting normally

        // Perform basic client-side validation
        var isValid = true;
        $('input, select, textarea').each(function() {
            if ($(this).val() === '') {
                alert('Please fill in all fields.');
                isValid = false;
                return false;
            }
        });

        // If validation is successful, submit the form using AJAX
        if (isValid) {
            $.ajax({
                url: $(this).attr('action'), // Ensure this is the correct PHP file path
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    console.log("Success:", response); // Log the response for debugging
                    $('#successMessage').fadeIn(); // Show success message
                    $('#applicationForm').trigger('reset'); // Reset form
                },
                error: function(xhr, status, error) {
                    console.log("AJAX Error: ", error); // Log the AJAX error
                    alert('Error submitting the form: ' + error);
                }
            });
        }
    });
});
