let TodoApp = function () {

    let $body = $('body');

    let HandleCategory = () => {
        let $modal = $('#create_category_modal');
        $modal.find('.btn-save-category').on('click', (event) => {
            event.preventDefault();
            $.ajax({
                url: $modal.find('.create-category-form').attr('data-href'),
                type: 'POST',
                dataType: 'json',
                data: {
                    title: $modal.find('#create_category_title').val(),
                    description: $modal.find('#create_category_description').val(),
                },
                beforeSend: function () {
                    $body.addClass('on-loading');
                },
                error: () => {
                    $modal.modal('hide');
                },
                success: (data) => {
                    window.location.href = BASE_URL;
                },
                complete: (data) => {
                    $body.removeClass('on-loading');
                }
            });
        });
    };

    return {
        init: () => {
            HandleCategory();
        }
    };
}();

$(document).ready(() => {
    TodoApp.init();
});