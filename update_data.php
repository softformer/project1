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
 
/* ���� ���� ������ ������ ��������������, ������ ��������� */
if(@$submit_edit) {
$query = "UPDATE $table SET name='$test_name', email='$test_mail', theme='$test_theme', message='$test_mess' WHERE id='$update'";
/* ��������� ������. ���� ���������� ������ - ������� ��. */
mysql_query($query) or die (mysql_error());
}
 
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
 
    <title>�������������� � ���������� ������</title>
 
<style type=\"text/css\">
<!--
body { font: 12px Georgia; color: #666; }
h3 { font-size: 16px; text-align: center; }
table { width: 400px; border-collapse: collapse; margin: 5px auto; background: #E6E6E6; }
td { padding: 3px; vertical-align: middle; }
input { width: 250px; border: solid 1px #CCC; color: #FF6666; }
textarea { width: 250px; height: 100px; border: solid 1px #CCC; color: #FF6666; }
.buttons { width: auto; border: double 1px #666; background: #D6D6D6; color: #000; }
#num { width: 20px; text-align: right; margin-right: 5px; float: right; }
-->
</style>
 
</head>
 
<body>
 
<h3>�������������� � ���������� ������ � ������� MySQL</h3> ");
 
/* ���� ������ ������ �� ���� ���������� ����� */
while ($row = mysql_fetch_array($res)) {
    echo "<form action=\"update_data.php\" method=\"post\" name=\"edit_form\">\n";
    echo "<input type=\"hidden\" name=\"update\" value=\"".$row["id"]."\" />\n";
    echo "<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">\n";
    echo "<tr>\n";
    echo "<td colspan=\"2\" style=\"border-bottom:solid 1px #CCCCCC;\"><b><i><div id=\"num\">#".$row["id"]."</div>".$row['data']."</b></i></td>\n";
    echo "</tr><tr>\n";
    echo "<td>��� ������������:</td><td><input type=\"text\" value=\"".$row['name']."\" name=\"test_name\" /></td>\n";
    echo "</tr><tr>\n";
    echo "<td>E-Mail ������������:</td><td><input type=\"text\" value=\"".$row['email']."\" name=\"test_mail\" /></td>\n";
    echo "</tr><tr>\n";
    echo "<td>���� ���������:</td><td><input type=\"text\" value=\"".$row['theme']."\" name=\"test_theme\" /></td>\n";
    echo "</tr><tr>\n";
    echo "<td>���������:</td><td><textarea name=\"test_mess\">".$row['message']."</textarea></td>\n";
    echo "</tr><tr>\n";
    echo "<td colspan=\"2\" align=\"center\"><input type=\"submit\" name=\"submit_edit\" class=\"buttons\" value=\"��������� ���������\" /></td>\n";
    echo "</tr></table></form>\n\n";}
 
/* ��������� ���������� */

mysql_close();
 
/* ������� ������ �������� */

echo ("<div style=\"text-align: center; margin-top: 10px;\"><a href="index.html">��������� �����</a></div>");
 
?>