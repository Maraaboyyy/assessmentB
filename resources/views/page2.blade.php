<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Form</title>
    <link rel="stylesheet" href="{{ asset('front/css/style2.css') }}">
</head>
<body>
    <div class="container">
        <header>
        <img src="{{ asset('assets/mulah.jpeg') }}" alt="Mulah Logo">
        </header>
        <h1>Registration</h1>
        <p>Please fill up your details.</p>
        <form action="{{ url('/page3') }}" method="post" onsubmit="return validateForm()">
        @csrf
            <div class="form-field">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your name">
                <div class="notifier" id="name-notifier"></div>
            </div>
            <div class="form-field">
                <label for="day">Birthday</label>
                <div class="birthday-inputs">
                    <input type="text" name="day" id="day" placeholder="Day">
                    <input type="text" name="month" id="month" placeholder="Month">
                    <input type="text" name="year" id="year" placeholder="Year">
                </div>
                <div class="notifier" id="birthday-notifier"></div>
            </div>
            <div class="form-field">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email">
                <div class="notifier" id="email-notifier"></div>
            </div>
            <div class="form-field checkbox-field">
                <input type="checkbox" name="no-email" id="no-email">
                <label for="no-email">I don't have an email address</label>
            </div>
            <button type="submit">Continue</button>
        </form>
        <main>
        <footer>
            <p>Powered by <span class="powered-by">MulahRewards.com</span></p>
        </footer>
    </div>

    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var day = document.getElementById("day").value;
            var month = document.getElementById("month").value;
            var year = document.getElementById("year").value;
            var email = document.getElementById("email").value;
            var noEmailCheckbox = document.getElementById("no-email");

            if (name === "") {
                document.getElementById("name-notifier").innerText = "Please insert your name.";
                return false;
            } else {
                document.getElementById("name-notifier").innerText = "";
            }

            if (day === "" || month === "" || year === "") {
                document.getElementById("birthday-notifier").innerText = "Please enter your complete birthday.";
                return false;
            } else {
                document.getElementById("birthday-notifier").innerText = "";
            }

            if (email === "" && !noEmailCheckbox.checked) {
                document.getElementById("email-notifier").innerText = "Please insert your email.";
                return false;
            } else {
                document.getElementById("email-notifier").innerText = "";
            }

            return true;
        }
    </script>
</body>
</html>
