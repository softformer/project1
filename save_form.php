<?php
 
/* ����������� � ����� ������ */
$hostname = "localhost"; // ��������/���� �������, � MySQL
$username = "root"; // ��� ������������ (� Denwer`� �� ��������� "root")
$password = ""; // ������ ������������ (� Denwer`� �� ��������� ������ �����������, ���� �������� ����� �������� ������)
$dbName = "test_base"; // �������� ���� ������
 
/* ������� MySQL, � ������� ����� ��������� ������ */
$table = "test_table";
 
/* ������� ���������� */
mysql_connect($hostname, $username, $password) or die ("�� ���� ������� ����������");
 
/* �������� ���� ������. ���� ���������� ������ - ������� �� */
mysql_select_db($dbName) or die (mysql_error());
 
/* ���������� ������� ���� */
$cdate = date("Y-m-d");
 
/* ���������� ������ ��� ������� ���������� � �������
name...date - �������� ���������� ����� � ����;
� $_POST["test_name"]... $_POST["test_mess"] - � ���� ���������� ���������� ������, ���������� �� ����� */
$query = "INSERT INTO $table SET name='".$_POST['test_name']."', email='".$_POST["test_mail"]."',
theme='".$_POST["test_theme"]."', message='".$_POST["test_mess"]."', data='$cdate'";
 
/* ��������� ������. ���� ���������� ������ - ������� ��. */
mysql_query($query) or die(mysql_error());
 
/* ��������� ���������� */
mysql_close();
 
/* � ������ ��������� ���������� ������� ��������� � ������ �������� */
echo ("<div style=\"text-align: center; margin-top: 10px;\">
<font color=\"green\">������ ������� ���������!</font>
 
/* <a href="index.html">��������� �����</a></div>");
 
?>