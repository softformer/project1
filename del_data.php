<?
 
/* ����������� � ����� ������ */
$hostname = "localhost"; // ��������/���� �������, � MySQL
$username = "root"; // ��� ������������ (� Denwer`� �� ��������� "root")
$password = ""; // ������ ������������ (� Denwer`� �� ��������� ������ �����������, ���� �������� ����� �������� ������)
$dbName = "test_base"; // �������� ���� ������
 
/* ������� MySQL, � ������� �������� ������ */
$table = "test_table";
 
/* ������� ���������� */
mysql_connect($hostname, $username, $password) or die ("�� ���� ������� ����������");
 
/* �������� ���� ������. ���� ���������� ������ - ������� �� */
mysql_select_db($dbName) or die (mysql_error());
 
/* ���� ���� ������ ������ ��������, ������� ������ */
$del = $query = "delete from $table where (id='$del')";
/* ��������� ������. ���� ���������� ������ - ������� ��. */
mysql_query($query) or die(mysql_error());
 
/* ������� � ���������� $res ��� ���� ������ */
$query = "SELECT * FROM $table";
/* ��������� ������. ���� ���������� ������ - ������� ��. */
$res = mysql_query($query) or die(mysql_error());
/* ������ ���������� ������� � ���� ������ */
$row = mysql_num_rows($res);
 
/* ������� ������ �� ������� */
echo ("
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
 
<head>
 
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=windows-1251\" />
 
    <title>����� � �������� ������ �� MySQL</title>
 
<style type=\"text/css\">
<!--
body { font: 12px Georgia; color: #666666; }
h3 { font-size: 16px; text-align: center; }
table { width: 700px; border-collapse: collapse; margin: 0px auto; background: #E6E6E6; }
td { padding: 3px; text-align: center; vertical-align: middle; }
.buttons { width: auto; border: double 1px #666666; background: #D6D6D6; }
-->
</style>
 
</head>
 
<body>
 
<h3>����� � �������� ����� ����������� ������ �� ������� MySQL</h3>
 
<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
 <tr style=\"border: solid 1px #000\">
  <td><b>#</b></td>
  <td align=\"center\"><b>���� ���������</b></td>
  <td align=\"center\"><b>����� �������������</b></td>
  <td align=\"center\"><b>E-Mail �������������</b></td>
  <td align=\"center\"><b>���� ���������</b></td>
  <td align=\"center\"><b>��������� �������������</b></td>
  <td align=\"center\"><b>��������</b></td>
 </tr>
");
 
/* ���� ������ ������ �� ���� ���������� ����� */
while ($row = mysql_fetch_array($res)) {
    echo "<tr>\n";
    echo "<td>".$row['id']."</td>\n";
    echo "<td>".$row['data']."</td>\n";
    echo "<td>".$row['name']."</td>\n";
    echo "<td>".$row['email']."</td>\n";
    echo "<td>".$row['theme']."</td>\n";
    echo "<td>".$row['message']."</td>\n";
    /* ���������� ������ ��� �������� ���� */
    echo "<td><a name=\"del\" href=\"del_data.php?del=".$row["id"]."\">�������</a></td>\n";
    echo "</tr>\n";
}
 
echo ("</table>\n");
 
/* ��������� ���������� */
mysql_close();
 
/* ������� ������ �������� */
//echo ("<div style="text-align: center; margin-top: 10px;"><a href="ya.ru">��������� �����</a></div>");
 
?>