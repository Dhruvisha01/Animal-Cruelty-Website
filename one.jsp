<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<body>
 <div align="center">
  <h1>Volunteer Form</h1>
  <form action="<%= request.getContextPath() %>/register" method="post">
   <table style="with: 80%">
    <tr>
     <td>First Name</td>
     <td><input type="text" name="firstName" /></td>
    </tr>
    <tr>
     <td>Last Name</td>
     <td><input type="text" name="lastName" /></td>
    </tr>
    <tr>
     <td>Age</td>
     <td><input type="number" name="contact" /></td>
    </tr>
    <tr>
    <tr>
     <td>Email Id</td>
     <td><input type="email" name="contact" /></td>
    </tr>
    <tr>
     <td>Contact no</td>
     <td><input type="text" name="password" /></td>
    </tr>
    <tr>
     <td>Education</td>
     <td><input type="text" name="education" /></td>
    </tr>
    <tr>
     <td>reason</td>
     <td><input type="text" name="reason" /></td>
    </tr>
   </table>
   <input type="submit" value="Submit" />
  </form>
 </div>
</body>
</html>