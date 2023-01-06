<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="container py-2">
        <div class="col-4 mx-auto">
            <form action="process.php" method="post">
                <h1> Registration </h1>
                <div class="mb-1">
                    <label for="nickname" class="form-label">Your nickname</label>
                    <input type="text" class="form-control" id="nickname" name="nickname">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Your name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Your lastname</label>
                    <input type="text" class="form-control" id="lastname" name="lastname">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Your phone</label>
                    <input type="tel" class="form-control" id="phone" name="phone">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="card_number" class="form-label">Your credit card number</label>
                    <input type="tel" class="form-control" id="card_number" name="card_number">
                </div>
                <div class="mb-3">
                    <label for="card_date" class="form-label">Your credit card date</label>
                    <input type="tel" class="form-control" id="card_date" name="card_date">
                </div>
                <div class="mb-3">
                    <label for="card_code" class="form-label">Your credit card code</label>
                    <input type="tel" class="form-control" id="card_code" name="card_code">
                </div>
                <div class="mb-3">
                    <label for="payment" class="form-label">Your credit payment amount ($)</label>
                    <input type="number" class="form-control" id="payment" name="payment">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<footer>
    <div class="container">&copy; 2022</div>
</footer>
</body>
</html>

