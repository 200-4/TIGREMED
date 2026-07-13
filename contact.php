<?php include 'header.php'; ?>

<!-- ═══════════════ CONTACT PAGE ═══════════════ -->
<main>
  <section class="contact-section" aria-label="Contact Tigremed">
    <div class="contact-wrap">

      <!-- Top grid: info left, form right -->
      <div class="contact-grid">

        <!-- Left: intro + contact methods -->
        <div class="contact-info">
          <h2 class="contact-title">Get In Touch With Us</h2>
          <p class="contact-intro">Know that it is very easy to reach us. Just pick up your phone — in a second we are with you.</p>

          <div class="contact-methods">

            <a href="tel:+256700317380" class="contact-method">
              <span class="contact-method-icon">
                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.07 1.18 2 2 0 012.06 0h3a2 2 0 012 1.72c.13 1 .37 1.97.71 2.9a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.18-1.18a2 2 0 012.11-.45c.93.34 1.9.58 2.9.71A2 2 0 0122 16.92z"/>
                </svg>
              </span>
              <div class="contact-method-text">
                <span class="contact-method-label">Call Us</span>
                <span class="contact-method-value">+256 700 317 380</span>
              </div>
            </a>

            <a href="mailto:info@tigeremedpharma.com" class="contact-method">
              <span class="contact-method-icon">
                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                  <polyline points="22,6 12,13 2,6"/>
                </svg>
              </span>
              <div class="contact-method-text">
                <span class="contact-method-label">Email Us</span>
                <span class="contact-method-value">info@tigeremedpharma.com</span>
              </div>
            </a>

            <a href="https://facebook.com/tigeremedpharma" class="contact-method" target="_blank" rel="noopener">
              <span class="contact-method-icon">
                <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>
                </svg>
              </span>
              <div class="contact-method-text">
                <span class="contact-method-label">Follow Us</span>
                <span class="contact-method-value">facebook/tigeremedpharma</span>
              </div>
            </a>

          </div>
        </div>

        <!-- Right: contact form -->
        <div class="contact-form-wrap">
          <h3 class="form-title">Send Us a Message</h3>
          <form class="contact-form" action="#" method="post">
            <div class="form-group">
              <label for="cf-name">Full Name</label>
              <input type="text" id="cf-name" name="name" required placeholder="Your full name">
            </div>
            <div class="form-group">
              <label for="cf-email">Email</label>
              <input type="email" id="cf-email" name="email" required placeholder="your@email.com">
            </div>
            <div class="form-group">
              <label for="cf-phone">Telephone Number</label>
              <input type="tel" id="cf-phone" name="phone" placeholder="+256 700 000 000">
            </div>
            <div class="form-group">
              <label for="cf-message">Your Message</label>
              <textarea id="cf-message" name="message" required placeholder="Write your message here..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary contact-submit">Send Message</button>
          </form>
        </div>

      </div>

      <!-- Map -->
      <div class="contact-map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7426226446676!2d32.55521!3d0.3476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbb6a4f3e3333%3A0x123456789!2sKampala%2C%20Uganda!5e0!3m2!1sen!2sug!4v1234567890"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="Tigremed Pharma location on Google Maps"
        ></iframe>
      </div>

    </div>
  </section>
</main>

<?php include 'footer.php'; ?>
