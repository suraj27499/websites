<%@ page language="java" import="java.sql.*" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
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
String email = String.valueOf(session.getAttribute("username"));
String date = request.getParameter("date");
String item = request.getParameter("item");
String cost = request.getParameter("cost");
String submit = request.getParameter("addexpense");
Connection con = null;
Statement st = null;
try{
	Class.forName("com.mysql.jdbc.Driver");
	con = (Connection)DriverManager.getConnection("jdbc:mysql://localhost:3306/suraj","root","");
	st = con.createStatement();
	if(submit==null){
		
			out.println("<script type=\"text/javascript\">");
		   out.println("myalert('Try Again!');");
		   out.println("location='addexpenses.jsp';");
		   out.println("</script>");
		
		
	}else{
		String insert = "INSERT INTO `expense`( `email`, `item`,`cost`,`date`) VALUES ('"+email+"','"+item+"','"+cost+"','"+date+"')";
		st.executeUpdate(insert);
		out.println("<script type=\"text/javascript\">");
		   out.println("myalert('Added Successfully!');");
		   out.println("location='addexpenses.jsp';");
		   out.println("</script>");
	
	//response.sendRedirect("loginpage.jsp");
	}
}catch(Exception e){
	out.print(e);
	
}

%>

</body>
</html>