để gọi một thư viện nào đó sử dụng từ khóa : `use`

$request->all()  Lấy ra toàn bộ thông tin dữ liệu từ request
$request->only('param',..) Lấy ra một số thông tin cần từ request
$request->input('param') Lấy ra giá trị của một ô input nào đó từ request

// Để kiểm tra dữ liệu gửi lên thì chúng ta sử dụng validator.

$request->validate($rules [,$messages]);
    $rules dùng để liệt kê những luật mà chúng ta muốn kiểm tra cho các ô input
    $messages dùng để custome thông báo lỗi.

//ngoài ra có thể dùng formRequest để dễ quản lý Validator hơn. 

Cú pháp tạo: `php artisan make:request Name`

func authorsize =>cho phép sử dụng formrequest ở trong controller.
func rules => dùng để liệt kê những luật mà chúng ta muốn kiểm tra cho các ô input
func messages => dùng để custome thông báo lỗi.

=>> Khi dùng validator thông báo lỗi sẽ trả về thông qua đối tượng `$errors` sử dụng bên View.