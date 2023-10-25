
#<!DOCTYPE html>
<html>
  <head>
    <title>Form Login</title>
    <style>
      body {
        text-align: center;
        background-color: black;
        color: rgb(245, 245, 245);
      }
      h2 {
        color: white;
      }
      form {
        background-color: gray;
        width: 300px;
        margin-left: 20px;
        margin-right: 20px;
        height: 300px;
      }
    </style>
  </head>
  <body>
    <form action="meeting.html" method="post">
      <h2>Login</h2>
      <label for="username">Username:</label>
      <input type="text" name="username" id="username" required /><br /><br />

 <label for="password">Password:</label>
      <input
        type="password"
        name="password"
        id="password"
        required
      /><br /><br />
      <input type="submit" value="Login" />
    </form>
  </body>
</html>

