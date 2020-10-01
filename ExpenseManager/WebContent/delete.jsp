<%@ page language="java" import="java.sql.*" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ExpenseManager</title>
</head>
<body>
<%String id[]= new String[100];
for(int i=0;i<10;i++){
id[i]=request.getParameter("check"+i);
out.println(id[i]);
}

%>
<%
Connection conn=null;
ResultSet rs = null;
Statement st=null;
try{
	Class.forName("com.mysql.jdbc.Driver");
	conn = (Connection)DriverManager.getConnection("jdbc:mysql://localhost:3306/suraj","root","");

st=conn.createStatement();
for(int a=0;a<10;a++){
st.executeUpdate("delete from `expense` where `id`='"+id[a]+"' ");


}
response.sendRedirect("manageexpenses.jsp");
}catch(SQLException e){ 
    System.out.println(e); 
    }
    %>

</body>
</html>