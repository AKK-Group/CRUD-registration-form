<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Form Registration</title>
        <link rel="stylesheet" href="app.css">
    </head>

    <body>
        <div class="box">
            <div class="form"></div>
                <h2>Registration</h2>
                <div>
                    @if($errors->any())

                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>

                    @endif
                </div>
                <form method="post" action="{{route('product.store')}}">
                    @csrf
                    <div>
                    <span> Name </span>
                        <input type="text" value="" name="name" id="name" required>
                    </div>
                    <div class="inputbox">
                        <span> Surname </span>
                        <input type="text" value="" name="surname"id="surname" required>
                    </div>
                    <div class="inputbox">
                        <span> Email </span>
                        <input type="email" value="" name="email"id="email" required>
                    </div>
                    <div class="inputbox">
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender" required>
                          <option value="">Select</option>
                          <option value="female">Female</option>
                          <option value="male">Male</option>
                          <option value="other">Other</option>
                        </select>
                        </div>
                    <div class="inputbox">
                        <span> Strengths</span>
                        <textarea class="textarea" value="" name="strengths" id="strengths" ></textarea>
                    </div>
                    <div class="inputbox">
                        <span> Weaknesses </span>
                        <textarea class="textarea" value="" name="weaknesses" id="weaknesses" required></textarea>
                    </div>

                    <input type="submit" value="submit" class="sub" id="submit">
                </form>

<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Times New Roman', Times, serif;
}
body{
    background-color: #9370d8;
    padding: 0 10px;
    min-height: 80vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-repeat: no-repeat;

}

.form{
    padding: 10px 20px;
}

.form .h2{
    text-align: center;
    color: #fff;
}

.form span{
    margin-top: 50px;
    align-items: center;
    margin-left: 12px;
}
.form form .inputbox span{
    padding: 8px 20px;
    border: none;
    border-bottom: 1px;
    margin-bottom: 30px;
}

.form .inputbox .select{
    position: relative;
    width: 100%;
    height: 40px;
}

.form .inputbox textarea{
    resize: none;
    height: 120px;
}

.form sub{
    padding: 10px 20px;
    color: #fff;
    border: none;
    background: #59d71f;
    cursor: pointer;
    font-size: 15px;
}

</style>

</body>
</html>