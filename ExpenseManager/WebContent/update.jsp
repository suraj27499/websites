<%@ page language="java" import="java.sql.*" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<script>
function myalert(x){
	alert(x);
}
</script>
      <%
        String email = request.getParameter("username");
        String oldpassword = request.getParameter("oldpassword");
        String newpassword = request.getParameter("newpassword");
        String submit = request.getParameter("update");
        
        
        Connection con = null;
        Statement st = null;
        try{
        	Class.forName("com.mysql.jdbc.Driver");
        	con = (Connection)DriverManager.getConnection("jdbc:mysql://localhost:3306/suraj","root","");
        	st = con.createStatement();
        	if(submit==null){
        		
        			out.println("<script type=\"text/javascript\">");
        		   out.println("myalert('Try Again!');");
        		   out.println("location='updatepassword.jsp';");
        		   out.println("</script>");
        		
        		
        	}else{
        		String query = "SELECT * FROM `user` WHERE  `email` = '"+email+"' AND `password` = '"+oldpassword+"'";
        		ResultSet res = st.executeQuery(query);
        		String myemail = "";
        		String mypassword= "";
        		String myname = "";
        		
        		if(res.next()){
        			myname = res.getString("name");
       			 myemail = res.getString("email");
       			 mypassword= res.getString("password");
        		}else{
        			out.println("<script type=\"text/javascript\">");
          		   out.println("myalert('Bad username or password!');");
          		   out.println("location='updatepassword.jsp';");
          		   out.println("</script>");
        		}
        		
        			
        		
        			if(email.equals(myemail) && oldpassword.equals(mypassword)){
        		String insert = "UPDATE `user` SET  `password` = '"+newpassword+"' WHERE `email` = '"+email+"'";
        		st.executeUpdate(insert);
        		
        		out.println("<script type=\"text/javascript\">");
      		   out.println("myalert('Password Updated Successfully:)');");
      		   out.println("location='loginpage.jsp';");
      		   out.println("</script>");
        	//response.sendRedirect("loginpage.jsp");
        	}else{
        		out.println("<script type=\"text/javascript\">");
     		   out.println("myalert('Try Again!');");
     		   out.println("location='loginpage.jsp';");
     		   out.println("</script>");
        	
        	}
        	}
        }catch(Exception e){
        	out.print(e);
        
        }
        %>

</body>
</html>