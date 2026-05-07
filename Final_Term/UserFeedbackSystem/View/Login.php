<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="Login.css">
</head>
<body>

  <!-- Floating orbs -->
  <div class="orb orb-1"></div>
  <div class="orb orb-2"></div>
  <div class="orb orb-3"></div>

  <!-- Particle canvas -->
  <canvas id="particles"></canvas>

  <!-- Login Card -->
  <div class="login-wrapper">
    <div class="login-card">

      <div class="brand">
        <div class="brand-icon">✦</div>
        <h2>Welcome Back</h2>
        <p>Sign in to continue</p>
      </div>

      <form action="../Controller/LoginController.php" method="POST">

        <div class="form-group">
          <label for="username">Username</label>
          <div class="input-wrap">
            <!-- User icon -->
            <svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>
          </div>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <div class="input-wrap">
            <!-- Lock icon -->
            <svg viewBox="0 0 24 24"><rect x="5" y="11" width="14" height="10" rx="2"/><path d="M8 11V7a4 4 0 018 0v4"/></svg>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
          </div>
        </div>

        <button type="submit" name="login" class="btn-login">Login</button>

      </form>

      <div class="divider"><span>or</span></div>

      <p class="register-link">
        Don't have an account? <a href="Registration.php">Register here</a>
      </p>

    </div>
  </div>

  <!-- Particle animation script -->
  <script>
    const canvas = document.getElementById('particles');
    const ctx = canvas.getContext('2d');
    let W, H, particles = [];

    function resize() {
      W = canvas.width  = window.innerWidth;
      H = canvas.height = window.innerHeight;
    }
    resize();
    window.addEventListener('resize', resize);

    function rand(min, max) { return Math.random() * (max - min) + min; }

    function createParticle() {
      return {
        x: rand(0, W), y: rand(0, H),
        r: rand(0.6, 2),
        dx: rand(-0.25, 0.25),
        dy: rand(-0.4, -0.1),
        alpha: rand(0.2, 0.7),
        fadeDir: Math.random() > 0.5 ? 1 : -1
      };
    }

    for (let i = 0; i < 90; i++) particles.push(createParticle());

    function draw() {
      ctx.clearRect(0, 0, W, H);
      particles.forEach(p => {
        p.x += p.dx;
        p.y += p.dy;
        p.alpha += p.fadeDir * 0.003;
        if (p.alpha <= 0.1 || p.alpha >= 0.75) p.fadeDir *= -1;
        if (p.y < -10) { Object.assign(p, createParticle()); p.y = H + 10; }

        ctx.beginPath();
        ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
        ctx.fillStyle = `rgba(126,179,255,${p.alpha})`;
        ctx.fill();
      });
      requestAnimationFrame(draw);
    }
    draw();
  </script>

</body>
</html>