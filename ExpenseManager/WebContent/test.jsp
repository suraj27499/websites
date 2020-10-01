<%@ page language="java" contentType="text/html; charse=UTF-8"
    pageEncoding="UTF-8"%>  
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Expense Manager</title>
</head>
<body>
<form action="uploadServlet"  enctype="multipart/form-data">
<input type="file" name="image" required>
<br>
<input type="submit" value="upload image">
</form>
</body>
</html>