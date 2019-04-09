<!DOCTYPE html>
<html>
<head>
    <title>TAMBAH MENU</title>
</head>
<body>
    <h3> ALL MENU </h3>

    <a href=""> Kembali </a>

    <br/>
    <br/>

    <form action="" method="post">
        {{ csrf_field() }}
        Name <input type="text" name="name" required="required"><br/>
        Type <input type="text" name="type" required="required"><br/>
        Price <input type="text" name="price" required="required"><br/>
</body>
</html>