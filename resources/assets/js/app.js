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
                beforeSend: () => {
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

    let HandleTodoItem = () => {
        $('.change-status').find('input[type=checkbox]').on('change', function () {
            let status,
                $checkbox = $(this);
            if ($checkbox.is(':checked')) {
                $checkbox.closest('.card').addClass('done-task');
                status = 'done';
            } else {
                $checkbox.closest('.card').removeClass('done-task');
                status = 'doing';
            }
            $.ajax({
                url: $checkbox.attr('data-href') + '/' + $checkbox.attr('data-id'),
                type: 'PUT',
                dataType: 'json',
                data: {
                    status: status,
                },
                beforeSend: () => {
                    $body.addClass('on-loading');
                },
                error: () => {

                },
                success: (data) => {

                },
                complete: (data) => {
                    $body.removeClass('on-loading');
                }
            });
        });

        $body.on('submit', '.create-task-form', function (event) {
            event.preventDefault();
            let $form = $(this);
            let data = $form.serialize();
            $.ajax({
                url: $form.attr('action'),
                type: 'POST',
                dataType: 'json',
                data: data,
                beforeSend: () => {
                    $body.addClass('on-loading');
                },
                error: () => {

                },
                success: (data) => {
                    location.reload();
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
            HandleTodoItem();
        }
    };
}();

$(document).ready(() => {
    TodoApp.init();
});