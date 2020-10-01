<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
    <%@ page import="java.sql.*" %>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Expense Manager</title>
</head>
<body>
<script>
function myalert(x){
	alert(x);
}
</script>
<%
String name = request.getParameter("name");
String email = request.getParameter("username");
String password = request.getParameter("password");
String cpassword = request.getParameter("cpassword");
String submit = request.getParameter("signup");
Connection con = null;
Statement st = null;
if(password.equals(cpassword)){
	

try{
	Class.forName("com.mysql.jdbc.Driver");
	con = (Connection)DriverManager.getConnection("jdbc:mysql://localhost:3306/suraj","root","");
	st = con.createStatement();
	if(submit==null){
		
			out.println("<script type=\"text/javascript\">");
		   out.println("myalert('Try Again!');");
		   out.println("location='signup_page.jsp';");
		   out.println("</script>");
		
		
	}else{
		String query = "SELECT * FROM `user` WHERE  `email` = '"+email+"' ";
		ResultSet res = st.executeQuery(query);
		if(res.next()){
			out.println("<script type=\"text/javascript\">");
			   out.println("myalert('Username alreday exists. Try another Username!');");
			   out.println("location='signup_page.jsp';");
			   out.println("</script>");
		}else{
		String insert = "INSERT INTO `user`(`name`, `email`, `password`) VALUES ('"+name+"','"+email+"','"+password+"')";
		st.executeUpdate(insert);
		out.println("<script type=\"text/javascript\">");
	   out.println("myalert('Registered successfully');");
	   out.println("location='loginpage.jsp';");
	   out.println("</script>");
		}
	
	
	//response.sendRedirect("loginpage.jsp");
	}
}catch(Exception e){
	out.print(e);
	//out.println("exception occurred");
}
}else{
	out.println("<script type=\"text/javascript\">");
	   out.println("myalert('Passwords Does Not Match');");
	   out.println("location='signup_page.jsp';");
	   out.println("</script>");
}
%>
</body>
</html>