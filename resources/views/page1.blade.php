<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mulah Rewards</title>
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <img src="{{ asset('assets/mulah.jpeg') }}" alt="Mulah Logo">
        </header>
        <main>
            <h1>Hello,</h1>
            <h1>Welcome!</h1>
            <p class="loyalty-points">Check Your Loyalty Points & Rewards</p>
            <form id="loyaltyForm" onsubmit="return redirectToPage2()">
            @csrf
                <div class="points">
                    <div class="points-container">
                        <select>
                            <option value="+60">+60</option>
                            <option value="+50">+50</option>
                            <option value="+40">+40</option>
                        </select>
                    </div>
                    <input type="text" id="mobileNumber" placeholder="Enter your mobile number">
                </div>
                <button type="submit">Check Loyalty Points</button>
            </form>
        </main>
        <footer>
            <p>Powered by <span class="powered-by">MulahRewards.com</span></p>
        </footer>
    </div>

    <script>
        function redirectToPage2() {
            var mobileNumber = document.getElementById("mobileNumber").value;
            
            if (mobileNumber === "173527250") {
                window.location.href = "{{ route('page2') }}";
                return false;
            } else {
                alert("Invalid mobile number. Please enter +60173527250 to proceed.");
                return false;
            }
        }
    </script>
</body>
</html>
