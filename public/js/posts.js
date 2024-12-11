$(document).on('click', '.deleteBtn', function () {
    let postId = $(this).data('id');
    let postTitle = $(this).data('title');

    $('#postTitle').text(postTitle);
    $('#deleteModal').modal('show');

    $('#confirmDeleteBtn').off('click').on('click', function () {
        $.ajax({
            url: '/posts/' + postId,
            method: 'DELETE',
            data: { _token: $('meta[name="csrf-token"]').attr('content') },
            success: function () {
                $('#deleteModal').modal('hide');
                // Directly reload the page without showing a message
                location.reload();
            },
            error: function (xhr, status, error) {
                alert('Error: ' + error);
            }
        });
    });
});
