<?PHP
session_start();
	include("../ketnoi.php");
		if($_GET['del_id_tv'])
	{
		$del_id_tv = $_GET['del_id_tv'];
		// Xóa
		mysqli_query($conn,"DELETE FROM members WHERE id = '$del_id_tv'");
	}
	$truyvan_qlsp = mysqli_query($conn,"SELECT * FROM members");
		// Phân trang
	$sodong = 10;
	$tongsodong = mysqli_num_rows($truyvan_qlsp);
	$tongsotrang = ceil($tongsodong / $sodong);
	if(!isset($_GET["p"]))
	{
		$p = 1;
	}
	else
	{
		$p = intval($_GET["p"]);
	}
	$x = ($p -1)* $sodong;
	$truyvan_qlsp_page = mysqli_query($conn,"SELECT * FROM members limit $x, $sodong");
?>
<form id="ql_sp" name="ql_sp" method="post" action="">
  <table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#0066CC">
    <tr>
      <td height="23" colspan="11" align="center" bgcolor="#0066CC"><span class="style1">QUẢN LÝ THÀNH VIÊN</span></td>
    </tr>
    <tr>
      <td colspan="8">Trang:
        <?php
                
            echo "<a class='phantrang' href='?action=sua_tv&p=1'>Đầu  </a>";
            for ($i = 1;$i<=$tongsotrang;$i++)
            {
                if($i==$p)
                {
                    echo "<font color='red' size='3'>$i   </font>";
                }
                else
                {

                    echo "<a  href='?action=sua_tv&p=$i'>$i  </a>";

                }
                if($i == $tongsotrang)
                    {
                        echo "<a  href='?action=sua_tv&p=$tongsotrang'>Cuối  </a>";
                    }
            }
        ?>
      </td>
      <td colspan="4"></td>
    </tr>
    <tr align="center" bgcolor="#0066CC">
      <td width="20">
          <span class="style2">
            <input type="checkbox" name="checkall" id="checkall" />
          </span>
      </td>
      <td width="30"><span class="style2"></span></td>
      <td width="30"><span class="style2"></span></td>
      <td><span class="style2">ID</span></td>
      <td><span class="style2">Level</span></td>
      <td><span class="style2">Họ Tên</span></td>
      <td><span class="style2">Email</span></td>
      <td> <span class="style2">Điện Thoại</span></td>
      <td><span class="style2">Address</span></td>
      <td><span class="style2">Password</span></td>
    </tr>
    <?php 
	$mau =1;
    while($r = mysqli_fetch_array($truyvan_qlsp_page))
	{
		if($mau % 2 ==0)
		{
			echo "<tr bgcolor='#CCCCCC'>";
		}
		else
		{
			echo "<tr bgcolor='#FFF'>";
		}
     echo "<td><input type='checkbox' name='check' id='check' /></td>
      <td><a href='?action=sua_tv&id=".$r['id']."'>Sửa</a></td>
      <td><a href='?action=sua_tv&del_id_tv=".$r['id']."'>Xóa</a></td>
      <td>".$r['id']."</td>
      <td>".$r['level']."</td>
      <td>".$r['HoTen']."</td>
      <td>".$r['email']."</td>
      <td>".$r['dienthoai']."</td>
      <td>".$r['address']."</td>
      <td>".$r['password']."</td>
    </tr>";
	$mau++;
	}
	?>
  </table>
</form>
