<?php
    include "head.php";
    include "sidebar.php";
    include "header.php";
?>

<?php
    include "process/process_food.php";
?>
<?php
    $food = new Food;
    $showFood = $food -> show_Food();
?>


                <div class="main-working">
                    <div type="menu" class="main-menu">
                        <div class="menu-list">
                            <div class="menu-header">
                                <div class="header-sort">
                                    <span>Sắp xếp</span>
                                    <select name="Sort" id="">
                                        <option value="">A -> Z</option>
                                        <option value="">Z -> A</option>
                                        <option value="">Tăng dần</option>
                                        <option value="">Giảm dần</option>
                                    </select>
                                </div>
    
                                <div class="header-search">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                    <input type="text" placeholder="Tìm kiếm món ăn">
                                </div>

                                <div class="kind-of-food">
                                    <span>Loại món</span>
                                    <select name="Sort" id="">
                                        <option value="">Gà</option>
                                        <option value="">Burger</option>
                                        <option value="">Combo</option>
                                        <option value="">Cơm + Mì</option>
                                        <option value="">Tráng miệng</option>
                                        <option value="">Nước uống</option>
                                    </select>
                                </div>


                            </div>

                            <div class="list-food grid">
                                <div class="food-row row no-gutters">
                                    <?php
                                        if($showFood) {
                                            $i = 0;
                                            while($result = $showFood->fetch_assoc()) {
                                            $i++;
                                    ?>
                                    <div class="food-item col l-4 m-12 c-12">
                                        <div class="food-card">
                                            <div class="food-img">
                                                <img src="./assets/css/img/Food/<?php echo $result['image'] ?>" alt="<?php echo $result['TenMon'] ?>">
                                            </div>
                                            <h3 class="food-name"><?php echo $result['TenMon'] ?></h3>
                                            <p class="food-price"><span><?php echo $result['DonGia'] ?></span> <span> VNĐ</span></p>
                                            <button onclick="addFood(this)">Đặt</button>
                                        </div>
                                    </div>

                                    <?php
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="new-order">
                            <div class="main-order">
                                <div class="header-order">
                                    <div class="date-order">
                                        <h3>New Order</h3>
                                        <p class="current-date"></p>
                                    </div>

                                    <div class="select-table">
                                        Bàn <select name="table" id="">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="9">10</option>
                                            <option value="9">11</option>
                                            <option value="9">12</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="food-order">
                                    
                                </div>

                                <div class="footer-order">
                                    <div class="sum-order">
                                        <p>Tổng</p>
                                        <p class="total-money"></p>
                                    </div>

                                    <div class="button-order">
                                        <button onclick="deleteAll()" class="delete-all">Xóa tất cả</button>
                                        <button onclick="processOrder()" class="processing">
                                            <a style="text-decoration: none;"href="getBill.php">Báo chế biến</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="customer hide">
                            <form class="customer-info">
                                <a class="customer-close">
                                    <i class="fa-solid fa-xmark"></i>
                                </a>

                                <div class="customer-header">
                                    <i class="fa-solid fa-users"></i>
                                    Thông tin khách hàng
                                </div>

                                <div class="customer-body">
                                    <div class="customer-row">
                                        <input type="text" required>
                                        <label>Tên khách hàng</label>
                                    </div>

                                    <div class="customer-row">
                                        <input type="text" required>
                                        <label>Địa chỉ</label>
                                    </div>

                                    <div class="customer-row">
                                        <input type="text" required>
                                        <label>Số điện thoại</label>
                                    </div>
                                </div>

                                <div class="customer-button">
                                    <a href="">
                                        <button>Xác nhận</button>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


<?php
    include "footer.php";
?>