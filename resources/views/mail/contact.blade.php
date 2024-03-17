<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

  <p>Thank you for reaching out! Your message has been successfully received. Our team will get back to you shortly.</p>



<table>
  <tr>
    <td>First Name</td>
    <td>{{ $contact_info['firstname'] }}</td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td>{{ $contact_info['lastname'] }}</td>
  </tr>
  <tr>
    <td>Email</td>
    <td>{{ $contact_info['email'] }}</td>
  </tr>
  <tr>
    <td>Phone</td>
    <td>{{ $contact_info['phone'] }}</td>
  </tr>
  <tr>
    <td>Message</td>
    <td>{{ $contact_info['message'] }}</td>
  </tr>

  
</table>

</body>
</html>

