$(document).ready(function(){
    $('#form-login').on('submit', function(e){
        e.preventDefault(); // Ngăn form submit mặc định

        // Kiểm tra đăng nhập ở đây (đây chỉ là ví dụ)
        var username = $('.form-input[type="text"]').val();
        var password = $('.form-input[type="password"]').val();

        // Nếu đăng nhập thành công
        if (username === 'admin' && password === 'password') {
            alert('Đăng nhập thành công');
            window.location.href = 'index.html';
        } else {
            alert('Đăng nhập thất bại. Vui lòng thử lại.');
        }
    });
    $(document).ready(function(){
        $('#login-btn').on('click', function(e){
            e.preventDefault(); // Ngăn form submit mặc định
    
            // Đoạn này bạn có thể thêm kiểm tra đăng nhập ở đây, tôi sẽ sử dụng alert để minh họa
            alert('Đăng nhập thành công');
            window.location.href = 'index.html'; // Chuyển hướng về index.html
        });
    });
    
    
    // Xử lý sự kiện khi nhấn vào biểu tượng mắt
    $('#eye').click(function(){
        var input = $('.form-input[type="password"]');
        input.attr('type', input.attr('type') === 'password' ? 'text' : 'password');
        $('#eye i').toggleClass('fa-eye-slash');
    });
});
