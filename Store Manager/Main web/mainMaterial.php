

<?php
    include "head.php";
    include "sidebar.php";
    include "header.php";
?>

                <div class="main-working">
                    <div type="material" class="main-material">
                        <h2>Danh sách nguyên liệu</h2>
                        <div class="material-list">
                            <table>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên NL</th>
                                    <th>Số lượng</th>
                                    <th>Tình trạng</th>
                                    <th>Nhập thêm</th>
                                </tr>

                                <tr>
                                    <td>1</td>
                                    <td>Thịt bò</td>
                                    <td>17 <a style="margin-left: 5px;" href="">Sửa</a> </td>
                                    <td class="select-status" >
                                        <input type="radio" class="radio-1" name="status-1">
                                        <input type="radio" class="radio-2" name="status-1">
                                    </td>
                                    <td class="done">
                                        <i class="fa-solid fa-plus"></i>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>Thịt gà</td>
                                    <td>15 <a style="margin-left: 5px;" href="">Sửa</a></td>
                                    <td class="select-status">
                                        <input type="radio" class="radio-1" name="status-2">
                                        <input type="radio" class="radio-2" name="status-2">
                                    </td>
                                    <td class="done">
                                        <i class="fa-solid fa-plus"></i>
                                    </td>
                                </tr>

                                <tr>
                                    <td>1</td>
                                    <td>Bánh mì</td>
                                    <td>100 <a style="margin-left: 5px;" href="">Sửa</a></td>
                                    <td class="select-status">
                                        <input type="radio" name="status-3">
                                        <input type="radio" name="status-3">
                                    </td>
                                    <td class="done">
                                        <i class="fa-solid fa-plus"></i>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    
                </div>


<?php
    include "footer.php";
?>