<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body style="padding: 20px;">
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
        @csrf
        <div style="margin-bottom: 20px;">
            <label>First name :</label>
            <div style="margin-top: 10px;">
                <input type="text" name="firstName">
            </div>
        </div>
        <div style="margin-bottom: 20px;">
            <label>Last name :</label>
            <div style="margin-top: 10px;">
                <input type="text" name="lastName">
            </div>
        </div>
        <div style="margin-bottom: 20px;">
            <label>Gender :</label>
            <div style="margin-top: 10px;">
                <input type="radio"><label for="" style="margin-left: 15px;">Male</label>
            </div>
            <div style="margin-top: 10px;">
                <input type="radio"><label for="" style="margin-left: 15px;">Female</label>
            </div>
            <div style="margin-top: 10px;">
                <input type="radio"><label for="" style="margin-left: 15px;">Other</label>
            </div>
        </div>
        <div style="margin-bottom: 20px;">
            <label>Nationality :</label>
            <div style="margin-top: 10px;">
              <select name="" id="">
                <option value="Indonesia">Indonesia</option>
                <option value="Malaysia">Malaysia</option>
              </select>
            </div>
        </div>
        <div style="margin-bottom: 20px;">
            <label>Language Spoken :</label>
            <div style="margin-top: 10px;">
                <input type="checkbox"><label for="" style="margin-left: 15px;">Bahasa Indonesia</label>
            </div>
            <div style="margin-top: 10px;">
                <input type="checkbox"><label for="" style="margin-left: 15px;">English</label>
            </div>
            <div style="margin-top: 10px;">
                <input type="checkbox"><label for="" style="margin-left: 15px;">Other</label>
            </div>
        </div>
        <div style="margin-bottom: 20px;">
            <label>Bio :</label>
            <div>
                <textarea name="" id=""></textarea>
            </div>
        </div>
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>