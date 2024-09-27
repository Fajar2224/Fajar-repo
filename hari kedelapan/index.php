<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get and Post</title>
    <style> body { background-color: maroon; color: blue; }
</style>
</head>
<body>
   <h1>Mengirim data dengan method GET</h1>
   <a href="index.php?halaman=link1&
   nama=kamdur">link1 </a> 
   <hr>
   <h1>Mengirim data dengan method POST</h1>
   <form action="index.php?halaman=link2"
   method="post">
   <div class="mb-3">
   <input type="text" name="kelas"id="kelas" class="form-control">
</div>
    <label for ="Kelas" class="form-label">Kelas</label>
    <select name="kelas"id="kelas"class="form-control">
        <option value="XI RPL 1">XI RPL 1</option>
        <option value="XI RPL 2">XI RPL 2</option>
        <option value="X RPL 1">XI RPL 1</option>
        <option value="X RPL 2">XI RPL 2</option><br>
   
   <button type="submit">kirim</button>
</form>
</body>
</html>