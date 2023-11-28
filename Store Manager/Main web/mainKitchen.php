<?php
    include "head.php";
    include "sidebar.php";
    include "header.php";
?>
                
                <div class="main-working">
                    <div type="kitchen" class="main-kitchen">
                        <div class="cooking-list">
                            <h2>Danh sách món cần thực hiện</h2>
                            <div class="cooking-table">
                                <table>
                                    <tr class="row-table">
                                        <th class="column-1">Tên món</th>
                                        <th class="column-2">Số lượng</th>
                                        <th class="column-3">Bàn số</th>
                                        <th class="column-4">Xong</th>
                                    </tr>

                                    <tr>
                                        <td>Gà rán (1 miếng)</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td class="done"><i class="fa-solid fa-arrow-right-long"></i></td>
                                    </tr>

                                    <tr>
                                        <td>Gà sốt HS (1 miếng)</td>
                                        <td>4</td>
                                        <td>4</td>
                                        <td class="done"><i class="fa-solid fa-arrow-right-long"></i></td>
                                    </tr>

                                    <tr>
                                        <td>Burger Bò</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td class="done"><i class="fa-solid fa-arrow-right-long"></i></td>
                                    </tr>
                                </table>

                                <button>Đã xong hết!</button>
                            </div>
                        </div>

                        <div class="cooking-finish">
                            <h2>Danh sách món đã thực hiện xong</h2>
                            <div class="food-finish">
                                <table>
                                    <tr>
                                        <th>Tên món</th>
                                        <th>Số lượng</th>
                                        <th>Bàn số</th>
                                    </tr>

                                    <tr>
                                        <td>Gà sốt HS</td>
                                        <td>2</td>
                                        <td>5</td>
                                    </tr>

                                    <tr>
                                        <td>Mỳ Ý</td>
                                        <td>1</td>
                                        <td>5</td>
                                    </tr>
                                </table>

                                <button>Đã phục vụ</button>
                            </div>
                        </div>
                    </div>
                </div>

<?php
    include "footer.php";
?>