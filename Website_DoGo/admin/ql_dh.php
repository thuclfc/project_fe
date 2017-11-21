<?PHP
session_start();
	include("../ketnoi.php");
		if($_GET['del_id_dh'])
	{
		$del_id_dh = $_GET['del_id_dh'];
		// Xóa
		mysqli_query($conn,"DELETE FROM dondathang WHERE MaDDH = '$del_id_dh'");
	}
	$truyvan_qlsp = mysqli_query($conn,"SELECT * FROM dondathang");
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
	$truyvan_qlsp_page = mysqli_query($conn,"SELECT * FROM dondathang limit $x, $sodong");
?>
<form id="ql_sp" name="ql_sp" method="post" action="">
  <table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#0066CC">
    <tr>
      <td height="23" colspan="13" align="center" bgcolor="#0066CC"><span class="style1">QUẢN LÝ ĐƠN HÀNG</span></td>
    </tr>
    <tr>
      <td colspan="13">Trang:
       <?php  
                
                    echo "<a class='phantrang' href='?action=sua_dh&p=1'>Đầu  </a>";
                    for ($i = 1;$i<=$tongsotrang;$i++)
                    {
                        if($i==$p)
                        {
                            echo "<font color='red' size='3'>$i   </font>";
                        }
                        else
                        {
                
                            echo "<a  href='?action=sua_dh&p=$i'>$i  </a>";
                            
                        }
                        if($i == $tongsotrang)
                            {
                                echo "<a  href='?action=sua_dh&p=$tongsotrang'>Cuối  </a>";
                            }
                    }
                ?>
      
      </td>
      
    </tr>
    <tr align="center" bgcolor="#0066CC">
     

     <td></td>
     <td></td>
      <td><span class="style2">MaDDH</span></td>
      <td><span class="style2">Date</span></td>
     
      
      <td><span class="style2">MaHH</span></td>
     
      <td><span class="style2">TenHH</span></td>
      <td> <span class="style2">SoLuong</span></td>
      <td><span class="style2">GiaTriDH</span></td>
      <td> <span class="style2">HoTen</span></td>
       <td><span class="style2">Email</span></td>
      <td> <span class="style2">SĐT</span></td>
       <td><span class="style2">Address</span></td>
      <td> <span class="style2">Note</span></td>
    </tr>
    <?php 
	$mau =1;
    while($r = mysqli_fetch_array($truyvan_qlsp_page))
	{
		if($mau % 2 ==0)
		{
			echo "<tr bgcolor='#fcfcfc'>";
		}
		else
		{
			echo "<tr bgcolor='#FFF'>";
		}
     echo "
      <td></td>
      <td><a href='?action=sua_dh&del_id_dh=".$r['MaDDH']."'>Xóa</a></td>
      <td>".$r['MaDDH']."</td>
      <td>".$r['Date']."</td>
    
    
      <td>".$r['MaHH']."</td>
  
      <td>".$r['TenHH']."</td>
      <td>".$r['SoLuong']."</td>
      <td>".$r['GiatriDH']."</td>
      <td>".$r['HoTen']."</td>
      <td>".$r['Email']."</td>
      <td>".$r['SDT']."</td>
      <td>".$r['address']."</td>
      <td>".$r['note']."</td>
    </tr>";
	$mau++;
	}
	?>
  </table>
</form>
