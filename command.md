# OS command injection: cho phép kẻ tấn công thực thi các câu lệnh tùy ý trên máy chủ đang hoạt động . Xác thực đầu vào ko đầy đủ. Mở rộng chức năng mặc định của ứng dụng, thực thi các lệnh hệ thống mà không cần phải inject code
# Code injection thêm mã và ứng dụng thực thi với việc xử lý sai các dữ liệu input không đáng tin cậy.

-In band Command injection: Phân tích nó để xem phản hồi có xuất hiện trong ứng dụng

- Blind command injection: Phản hồi không xuất hiện ra ứng dụng
 + Sử dụng ping or sleep kiểm tra xem có thực thi -> đẽ bị command injection
 + Trích xuất dữ liệu khỏi ứng dụng bằng xuất phản hồi trong webroot và truy xuất tệp đó trực tiếp bằng "dir" 
 + Out of band() kênh ngoài băng tần trả về server (burp suite collaborator )

- `;`  thực thi tuần tự
- `|` thực thi lệnh sau ko quan tâm lệnh trước
- `&` thực thi ngay
- `&&` lệnh sau thực thi khi lệnh trước thành công

