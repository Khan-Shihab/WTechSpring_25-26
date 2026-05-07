<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback Form</title>
  <link rel="stylesheet" href="feedback.css">
</head>
<body>

  <!-- Floating orbs -->
  <div class="orb orb-1"></div>
  <div class="orb orb-2"></div>
  <div class="orb orb-3"></div>

  <div class="page-wrapper">
    <div class="form-card">

      <!-- Header -->
      <div class="card-header">
        <div class="card-icon">✦</div>
        <h2>Send Feedback</h2>
        <p>We'd love to hear your thoughts — share them below.</p>
      </div>

      <!-- Form -->
      <form action="../Controller/feedbackController.php" method="POST" id="feedbackForm">

        <!-- Subject -->
        <div class="form-group">
          <label for="subject">Subject</label>
          <div class="input-wrap">
            <!-- Tag / subject icon -->
            <svg viewBox="0 0 24 24">
              <path d="M20.59 13.41l-7.17 7.17a2 2 0 01-2.83 0L2 12V2h10l8.59 8.59a2 2 0 010 2.82z"/>
              <line x1="7" y1="7" x2="7.01" y2="7"/>
            </svg>
            <input
              type="text"
              id="subject"
              name="subject"
              placeholder="e.g. UI improvement suggestion"
              required
            >
          </div>
        </div>

        <!-- Message -->
        <div class="form-group">
          <label for="message">Message</label>
          <div class="input-wrap textarea-wrap">
            <!-- Message icon -->
            <svg viewBox="0 0 24 24">
              <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/>
            </svg>
            <textarea
              id="message"
              name="message"
              placeholder="Describe your feedback in detail…"
              maxlength="1000"
              required
            ></textarea>
          </div>
          <div class="char-count"><span id="charNum">0</span> / 1000</div>
        </div>

        <!-- Submit -->
        <div class="form-group">
          <button type="submit" class="btn-submit" id="submitBtn">
            Send Feedback
          </button>
        </div>

      </form>

    </div>
  </div>

  <script>
    // Character counter
    const msg     = document.getElementById('message');
    const charNum = document.getElementById('charNum');
    const counter = msg.closest('.form-group').querySelector('.char-count');

    msg.addEventListener('input', () => {
      const len = msg.value.length;
      charNum.textContent = len;
      counter.classList.toggle('warn', len > 850);
    });

    // Button feedback on submit
    document.getElementById('feedbackForm').addEventListener('submit', () => {
      const btn = document.getElementById('submitBtn');
      btn.textContent = '✓ Sent!';
      btn.classList.add('sent');
    });
  </script>

</body>
</html>