$(document).ready(function() {
    $('#orderForm').on('submit', function(e) {
        e.preventDefault();
        
        let formData = $(this).serialize();
        
        $.ajax({
            url: '/orders',
            method: 'POST',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.success) {
                    // Перенаправление на страницу оплаты
                    window.location.href = '/payment/' + response.order_id;
                } else {
                    alert('Произошла ошибка при создании заказа');
                }
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    // Отображение ошибок валидации
                    Object.keys(errors).forEach(function(key) {
                        $('#' + key + '_error').text(errors[key][0]);
                    });
                } else {
                    alert('Произошла ошибка при создании заказа');
                }
            }
        });
    });
}); 