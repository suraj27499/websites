<%@page import="java.sql.*"%>
<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ExpenseManager</title>
</head>
<body>
<script>
function myalert(x){
	alert(x);
}
</script>
<%
int count = 0;
String email = request.getParameter("username");
String password = request.getParameter("password");
String submit = request.getParameter("login");


Connection con = null;
Statement st = null;
try{
	Class.forName("com.mysql.jdbc.Driver");
	con = (Connection)DriverManager.getConnection("jdbc:mysql://localhost:3306/suraj","root","");
	st = con.createStatement();
	if(submit==null){
		
			out.println("<script type=\"text/javascript\">");
		   out.println("myalert('Try Again !');");
		   out.println("location='loginpage.jsp';");
		   out.println("</script>");
		
		
	}else{
		
		
		String query = "SELECT * FROM `user` WHERE  `email` = '"+email+"' AND `password` = '"+password+"'";
		ResultSet res = st.executeQuery(query);
		//System.out.println(res);
		String myemail = "";
		String mypassword= "";
		if(res.next()){
		
		 myemail = res.getString("email");
		 mypassword= res.getString("password");
		}else{
			out.println("<script type=\"text/javascript\">");
			   out.println("myalert('Username or Password doesnot Match');");
			   out.println("location='loginpage.jsp';");
			   out.println("</script>");
		}
		 
		
		if(  email.equals(myemail) && password.equals(mypassword)){
		
			
		
			
			
			session.setAttribute("username", email);
		out.println("<script type=\"text/javascript\">");
	   out.println("myalert('Loggedin successfully');");
	   out.println("location='loggedin.jsp';");
	   out.println("</script>");
			}else{
				out.println("<script type=\"text/javascript\">");
				   out.println("myalert('Username or Password doesnot Match');");
				   out.println("location='loginpage.jsp';");
				   out.println("</script>");
			}
	
	
	//response.sendRedirect("loginpage.jsp");
	}
}catch(Exception e){
	out.print(e);
	//out.println("exception occurred");
}
%>
</body>
</html>