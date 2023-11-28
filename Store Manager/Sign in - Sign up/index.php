<?php
// Kết nối đến cơ sở dữ liệu MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fastfood";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . mysqli_connect_error());
}

// Xử lý đăng nhập
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $account = $_POST["account"];
    $password = $_POST["password"];

    // Truy vấn SQL kiểm tra thông tin đăng nhập
    $sql = "SELECT * FROM user WHERE account = '$account' AND pass = '$password'";
    $result = mysqli_query($conn, $sql);
    $kq = $result->fetch_assoc();

    if ($kq['role'] == 1) {
        header('Location: ../Backend/index.php');
    } else {
        header('Location: ../Main web/index.php');
    } 
    
}

// Đóng kết nối đến cơ sở dữ liệu
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Manager</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    
</head>
<body>
    
    <header>
        <h2 class="logo">Group 3</h2>
        <nav class="navigation">
            <a href="">Home</a>
            <a href="">Order</a>
            <a href="#form-box-click" class="btn-book">Book Now</a>
            <a href="#form-contact-click" class="btn-contact">Contact</a>
            <button class="btnLogin-popup">Login</button>
        </nav>
    </header>

    <div class="container">
        <div class="form-box">
            <span class="icon-close">
                <i class="fa-solid fa-xmark"></i>
            </span>
            <form action="" method="POST">
                <h2>Login</h2>

                <div class="form-control">
                    <i class="fa-regular fa-user"></i>
                    <input type="text" required name="account">
                    <label>Username</label>
                </div>

                <div class="form-control">
                    <i class="show-password fa-regular fa-eye"></i>
                    <input type="password" class="input-password" name="password" required>
                    <label>Password</label>
                </div>

                <div class="remember-forget">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forget Password</a>
                </div>

                <button type="submit" name="login">Log in</button>
            </form>
        </div>

        <div id="#form-book-click" class="form-book">
            <span class="icon-close">
                <i class="fa-solid fa-xmark"></i>
            </span>
            <form action="#">
                <h2>Book a Table</h2>

                <div class="form-control">
                    <input type="text" required>
                    <label>Name</label>
                </div>

                <div class="form-control">
                    <input type="text" required>
                    <label>Phone</label>
                </div>

                <div class="form-control">
                    <input type="email" required>
                    <label>Email</label>
                </div>

                <div class="time-date">
                    <input type="time">
                    <input type="date">
                </div>
                <button>Book Now</button>
            </form>
        </div>

        <div id="#form-contact-click" class="form-contact">
            <span class="icon-close">
                <i class="fa-solid fa-xmark"></i>
            </span>
            <h2>Contact Us</h2>
            
            <div class="box-contact">
                <div class="information">
                    <div class="contact-item">
                        <i class="fa-solid fa-location-dot"></i>
                        <h3>Address</h3>
                        <p>Tầng 1, TTTM Aeon Mall Hà Đông, Quận Hà Đông, TP. Hà Nội</p>
                    </div>
    
                    <div class="contact-item">
                        <i class="fa-solid fa-phone"></i>
                        <h3>Phone</h3>
                        <p>1900 9001</p>
                    </div>
    
                    <div class="contact-item">
                        <i class="fa-solid fa-envelope"></i>
                        <h3>Email</h3>
                        <p>feedback@vn.mcd.com</p>
                    </div>
    
                    <div class="contact-footer">
                        <h3>Or contact with us</h3>
                        <div class="footer-icon">
                            <a href="#" id="facebook"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" id="tiktok"><i class="fa-brands fa-tiktok"></i></a>
                            <a href="#" id="instagram"><i class="fa-brands fa-square-instagram"></i></a>
                        </div>
                    </div>
                </div>
    
                <div class="message">
                    <h3>Send Message</h3>
                    <form action="">
                        <div class="form-input">
                            <input type="text" name="name" required>
                            <label>Name</label>
                        </div>
        
                        <div class="form-input">
                            <input type="email" name="email" required>
                            <label>Email</label>
                        </div>
        
                        <div class="form-text">
                            <textarea name="textBox" cols="35" rows="4" required></textarea>
                            <label>Message</label>
                        </div>
    
                        <button>Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    



    <script src="./assets/app.js"></script>
</body>
</html>