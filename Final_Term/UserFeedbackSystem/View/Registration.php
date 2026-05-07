<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="bg-orbs">
        <div class="orb orb1"></div>
        <div class="orb orb2"></div>
        <div class="orb orb3"></div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="icon-wrap">
                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                    <circle cx="12" cy="7" r="4"/>
                </svg>
            </div>
            <h2>Create Account</h2>
            <p class="subtitle">Join us — it only takes a moment</p>
        </div>

        <form action="../Controller/RegistrationController.php" method="POST" class="form">

            <div class="field" style="--i:1">
                <input type="text" id="name" name="name" required minlength="3" placeholder=" ">
                <label for="name">Full Name</label>
                <span class="bar"></span>
            </div>

            <div class="field" style="--i:2">
                <input type="email" id="email" name="email" required placeholder=" ">
                <label for="email">Email Address</label>
                <span class="bar"></span>
            </div>

            <div class="field" style="--i:3">
                <input type="password" id="password" name="password" required minlength="4" placeholder=" ">
                <label for="password">Password</label>
                <span class="bar"></span>
                <div class="strength-wrap">
                    <div class="strength-bar" id="strengthBar"></div>
                </div>
            </div>

            <div class="field" style="--i:4">
                <input type="password" id="confirm_password" name="confirm_password" required placeholder=" ">
                <label for="confirm_password">Confirm Password</label>
                <span class="bar"></span>
            </div>

            <button type="submit" name="register" class="btn">
                <span class="btn-text">Create Account</span>
                <span class="btn-icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </span>
            </button>

            <p class="login-link">Already have an account? <a href="#">Sign in</a></p>

        </form>
    </div>

    <script>
        const pwInput = document.getElementById('password');
        const bar = document.getElementById('strengthBar');

        pwInput.addEventListener('input', () => {
            const val = pwInput.value;
            let score = 0;
            if (val.length >= 6) score++;
            if (val.length >= 10) score++;
            if (/[A-Z]/.test(val)) score++;
            if (/[0-9]/.test(val)) score++;
            if (/[^A-Za-z0-9]/.test(val)) score++;

            const pct = (score / 5) * 100;
            bar.style.width = pct + '%';
            bar.style.background = score <= 1 ? '#ef4444' : score <= 3 ? '#f59e0b' : '#22c55e';
        });

        const confirmInput = document.getElementById('confirm_password');
        confirmInput.addEventListener('input', () => {
            if (confirmInput.value && confirmInput.value === pwInput.value) {
                confirmInput.parentElement.classList.add('match');
                confirmInput.parentElement.classList.remove('mismatch');
            } else if (confirmInput.value) {
                confirmInput.parentElement.classList.add('mismatch');
                confirmInput.parentElement.classList.remove('match');
            } else {
                confirmInput.parentElement.classList.remove('match', 'mismatch');
            }
        });
    </script>
</body>
</html>