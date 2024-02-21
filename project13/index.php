<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "css/css.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <title>Bai Tap 2</title>
    </head>
    <body>
        <div class="title">
            <h3>KHÓA HỌC SẮP KHAI GIẢNG</h3>
        </div>
        <div class="content">
            <?php
                // Dữ liệu khóa học lưu động trong mảng
                $courses = [
                [
                    'title' => 'LẬP TRÌNH VIÊN QUỐC TẾ',
                    'description' => 'Chương trình đào tạo chuẩn quốc tế và toàn diện.
                    Phù hợp với học sinh tốt nghiệp THPT, sinh viên và người định hướng theo nghề
                    lập trình chuyên nghiệp.',
                    'fee' => '15.000.000 VND',
                    'start_date' => '2/2024',
                    'duration' => '2 - 2.5 năm',
                    'image' => 'images/anh1.png'
                ],
                [
                    'title' => 'LẬP TRÌNH WEB FULLSTACK',
                    'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghề.
                    Trang bị từ frontend đến backend, xây dựng website hoàn chỉnh sau khóa học.',
                    'fee' => '15% học phí',
                    'start_date' => '2/2024',
                    'duration' => '6 tháng',
                    'image' => 'images/anh2.png'
                ],
                [
                    'title' => 'LẬP TRÌNH JAVA FULLSTACK',
                    'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng Java,
                    các ứng dụng doanh nghiệp sử dụng J2EE, Servlet, JSP, Spring Framework, EJB,...',
                    'fee' => '15% học phí',
                    'start_date' => '2/2024',
                    'duration' => '236 giờ',
                    'image' => 'images/anh3.png'
                ],
                [
                    'title' => 'LẬP TRÌNH PHP & LARAVEL',
                    'description' => 'PHP là một trong các ngôn ngữ thiết kế web mạnh nhất.
                    Khóa học trang bị kỹ năng xây dựng web hoàn chỉnh sử dụng PHP kết hợp Laravel Framework.',
                    'fee' => '9.600.000 VND',
                    'start_date' => '5/2/2024',
                    'duration' => '36 giờ',
                    'image' => 'images/anh4.png'
                ],
                [
                    'title' => 'KHÓA HỌC LẬP TRÌNH .NET',
                    'description' => 'Phát triển ứng dụng web sử dụng nền tảng ASP.NET Core MVC.
                    Để học tốt khóa học yêu cầu học viên đã có kiến thức C# và Frontend.',
                    'fee' => '6.000.000 VND',
                    'start_date' => '2/2024',
                    'duration' => '40 giờ',
                    'image' => 'images/anh5.png'
                ],
                [
                    'title' => 'LẬP TRÌNH SQL SERVER',
                    'description' => 'Trang bị những kiến thức nền tảng vững chắc về SQL Server như các kỹ thuật
                    lọc dữ liệu, phân tích, thiết kế và quản trị cơ sở dữ liệu,...',
                    'fee' => '4.500.000 VND',
                    'start_date' => '2/2024',
                    'duration' => '30 giờ',
                    'image' => 'images/anh6.png'
                ]
                
                ];
                // Hiển thị danh sách khóa học
                foreach ($courses as $course) {
                    echo '<div class="course">';
                        if ($course['image']) {
                            echo '<img src="' . $course['image'] . '" alt="' . $course['title'] . '">';
                        }
                        echo '<h4>' . $course['title'] . '</h4>';
                        echo '<p>' . $course['description'] . '</p>';
                        //echo '<p>Học bổng: ' . $course['fee'] . '</p>';
                        if ($course['fee']) {
                            echo '<p class="icon fee"><i class="fas fa-gift"></i> Học phí: '. $course['fee']. '</p>';
                        }
                        //echo '<p>Khải giảng: ' . $course['start_date'] . '</p>';
                        if ($course['start_date']) {
                            echo '<p class="icon start_date"><i class="far fa-clock"></i> Khai giảng: '. $course['start_date']. '</p>';
                        }
                        //echo '<p>Thời lượng: ' . $course['duration'] . '</p>';
                        if ($course['duration']) {
                            echo '<p class="icon duration"><i class="fas fa-bookmark"></i> Thời lượng: '. $course['duration']. '</p>';
                        }
                    echo '</div>';
                }
            ?>
        </div>
    </body>
</html>