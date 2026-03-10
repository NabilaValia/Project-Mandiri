<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Citaria Space</title>
  <style>
    :root {
      --yellow: #f6c90e;
      --light-yellow: #fff7cc;
      --soft-yellow: #ffe680;
      --white: #ffffff;
      --text: #2f2a1f;
      --muted: #6f6755;
      --shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
      --radius: 20px;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, Helvetica, sans-serif;
      scroll-behavior: smooth;
    }

    body {
      background: var(--white);
      color: var(--text);
      line-height: 1.6;
      overflow-x: hidden;
    }

    .container {
      width: min(1100px, 92%);
      margin: 0 auto;
    }

    header {
      position: sticky;
      top: 0;
      z-index: 1000;
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
      border-bottom: 1px solid #f1e7b5;
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 18px 0;
    }

    .logo {
      font-size: 1.4rem;
      font-weight: 700;
      color: #b58500;
    }

    .nav-links {
      display: flex;
      gap: 22px;
      list-style: none;
    }

    .nav-links a {
      text-decoration: none;
      color: var(--text);
      font-weight: 600;
      transition: 0.3s;
    }

    .nav-links a:hover {
      color: #b58500;
    }

    .hero {
      background: linear-gradient(135deg, var(--light-yellow), var(--white));
      padding: 90px 0 70px;
    }

    .hero-content {
      display: grid;
      grid-template-columns: 1.2fr 0.8fr;
      gap: 40px;
      align-items: center;
    }

    .badge {
      display: inline-block;
      background: var(--yellow);
      color: #5f4700;
      padding: 8px 16px;
      border-radius: 999px;
      font-size: 0.9rem;
      font-weight: 700;
      margin-bottom: 18px;
    }

    .hero h1 {
      font-size: 3rem;
      line-height: 1.15;
      margin-bottom: 16px;
    }

    .hero p {
      color: var(--muted);
      margin-bottom: 28px;
      max-width: 600px;
    }

    .buttons {
      display: flex;
      gap: 14px;
      flex-wrap: wrap;
    }

    .btn {
      text-decoration: none;
      padding: 13px 22px;
      border-radius: 999px;
      font-weight: 700;
      transition: 0.3s;
      display: inline-block;
    }

    .btn-primary {
      background: var(--yellow);
      color: #4e3b00;
      box-shadow: var(--shadow);
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      background: #e9bc09;
    }

    .btn-secondary {
      border: 2px solid var(--yellow);
      color: #8d6900;
      background: var(--white);
    }

    .btn-secondary:hover {
      background: var(--light-yellow);
    }

    .hero-card {
      background: var(--white);
      border-radius: 28px;
      padding: 30px;
      box-shadow: var(--shadow);
      border: 1px solid #f5e7a6;
    }

    .hero-card h3 {
      margin-bottom: 12px;
      color: #9a7200;
    }

    .hero-card ul {
      list-style: none;
    }

    .hero-card li {
      padding: 12px 0;
      border-bottom: 1px dashed #eadc9a;
      color: var(--muted);
    }

    .hero-card li:last-child {
      border-bottom: none;
    }

    section {
      padding: 80px 0;
    }

    .section-title {
      text-align: center;
      margin-bottom: 16px;
      font-size: 2rem;
    }

    .section-subtitle {
      text-align: center;
      max-width: 700px;
      margin: 0 auto 45px;
      color: var(--muted);
    }

    .about {
      background: #fffdf2;
    }

    .about-box {
      background: var(--white);
      border-radius: var(--radius);
      padding: 34px;
      box-shadow: var(--shadow);
      border: 1px solid #f4e9bd;
      text-align: center;
    }

    .cards {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 22px;
    }

    .card {
      background: var(--white);
      border-radius: var(--radius);
      padding: 24px;
      box-shadow: var(--shadow);
      border: 1px solid #f4e9bd;
      transition: transform 0.35s ease, box-shadow 0.35s ease;
    }

    .card:hover {
      transform: translateY(-8px) scale(1.02);
      box-shadow: 0 16px 35px rgba(0, 0, 0, 0.12);
    }

    .card h3 {
      margin-bottom: 10px;
      color: #9a7200;
    }

    .card p {
      color: var(--muted);
      font-size: 0.96rem;
    }

    .founder-box {
      display: grid;
      grid-template-columns: 280px 1fr;
      gap: 30px;
      align-items: center;
      background: linear-gradient(135deg, #fff7cc, #ffffff);
      border-radius: 28px;
      padding: 32px;
      box-shadow: var(--shadow);
      border: 1px solid #f3e29f;
    }

    .founder-photo {
      width: 100%;
      aspect-ratio: 1 / 1;
      border-radius: 24px;
      background: linear-gradient(135deg, var(--yellow), #fff0a6);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 4rem;
      color: white;
      font-weight: 700;
    }

    .founder-text h3 {
      font-size: 1.7rem;
      margin-bottom: 10px;
    }

    .founder-text p {
      color: var(--muted);
    }

    .gallery {
      background: #fffdf5;
    }

    .gallery-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 18px;
    }

    .gallery-item {
      min-height: 220px;
      border-radius: 22px;
      padding: 22px;
      display: flex;
      align-items: end;
      font-weight: 700;
      color: #5f4700;
      box-shadow: var(--shadow);
      border: 1px solid #f2e6b7;
      transition: transform 0.35s ease, box-shadow 0.35s ease;
    }

    .gallery-item:hover {
      transform: translateY(-6px) scale(1.01);
      box-shadow: 0 16px 35px rgba(0, 0, 0, 0.12);
    }

    .g1 { background: linear-gradient(rgba(255,255,255,0.15), rgba(255,255,255,0.55)), #ffe780; }
    .g2 { background: linear-gradient(rgba(255,255,255,0.15), rgba(255,255,255,0.55)), #fff3bf; }
    .g3 { background: linear-gradient(rgba(255,255,255,0.15), rgba(255,255,255,0.55)), #ffd95f; }
    .g4 { background: linear-gradient(rgba(255,255,255,0.15), rgba(255,255,255,0.55)), #fff8d8; }
    .g5 { background: linear-gradient(rgba(255,255,255,0.15), rgba(255,255,255,0.55)), #ffe58f; }
    .g6 { background: linear-gradient(rgba(255,255,255,0.15), rgba(255,255,255,0.55)), #fff0a1; }

    .contact-box {
      background: var(--yellow);
      color: #4e3b00;
      border-radius: 28px;
      padding: 38px;
      text-align: center;
      box-shadow: var(--shadow);
    }

    .contact-box p {
      max-width: 650px;
      margin: 12px auto 20px;
    }

    .contact-links {
      display: flex;
      justify-content: center;
      gap: 14px;
      flex-wrap: wrap;
    }

    .contact-links a {
      background: var(--white);
      color: #7a5b00;
      text-decoration: none;
      padding: 12px 18px;
      border-radius: 999px;
      font-weight: 700;
      transition: transform 0.3s ease;
    }

    .contact-links a:hover {
      transform: scale(1.05);
    }

    footer {
      text-align: center;
      padding: 24px 0 34px;
      color: var(--muted);
      font-size: 0.95rem;
    }

    .reveal {
      opacity: 0;
      transform: translateY(45px) scale(0.95);
      transition: opacity 0.8s ease, transform 0.8s ease;
      will-change: opacity, transform;
    }

    .reveal.active {
      opacity: 1;
      transform: translateY(0) scale(1);
    }

    .pop-up {
      opacity: 0;
      transform: scale(0.8);
      transition: opacity 0.7s ease, transform 0.7s ease;
      will-change: opacity, transform;
    }

    .pop-up.active {
      opacity: 1;
      transform: scale(1);
    }

    .delay-1 { transition-delay: 0.1s; }
    .delay-2 { transition-delay: 0.2s; }
    .delay-3 { transition-delay: 0.3s; }
    .delay-4 { transition-delay: 0.4s; }
    .delay-5 { transition-delay: 0.5s; }
    .delay-6 { transition-delay: 0.6s; }

    @media (max-width: 1000px) {
      .cards {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 900px) {
      .hero-content,
      .founder-box,
      .gallery-grid {
        grid-template-columns: 1fr;
      }

      .hero h1 {
        font-size: 2.3rem;
      }

      .nav-links {
        gap: 12px;
        font-size: 0.9rem;
        flex-wrap: wrap;
        justify-content: end;
      }
    }

    @media (max-width: 600px) {
      nav {
        flex-direction: column;
        gap: 14px;
      }

      .hero {
        padding-top: 60px;
      }

      .hero h1 {
        font-size: 2rem;
      }

      .cards,
      .gallery-grid {
        grid-template-columns: 1fr;
      }

      section {
        padding: 60px 0;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="container">
      <nav>
        <div class="logo">Citaria Space</div>
        <ul class="nav-links">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="#founder">Founder</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="hero reveal" id="home">
    <div class="container hero-content">
      <div>
        <span class="badge">Creative Event Organizer</span>
        <h1>Citaria Space, ruang untuk event kreatif, seru, dan penuh makna.</h1>
        <p>
          Citaria Space menghadirkan berbagai kegiatan inspiratif seperti painting class, kunjungan ke panti asuhan,
          workshop membatik, nail art event, dan banyak pengalaman seru lainnya yang menggabungkan kreativitas,
          kebersamaan, dan momen berkesan.
        </p>
        <div class="buttons">
          <a href="#events" class="btn btn-primary">Lihat Event</a>
          <a href="#about" class="btn btn-secondary">Tentang Kami</a>
        </div>
      </div>

      <div class="hero-card reveal delay-1">
        <h3>Highlight Citaria Space</h3>
        <ul>
          <li> Event kreatif dengan konsep hangat dan menyenangkan</li>
          <li> Aktivitas seni seperti melukis dan membatik</li>
          <li> Kegiatan sosial yang memberi makna</li>
          <li> Event fun seperti nail art dan creative gathering</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="about reveal" id="about">
    <div class="container">
      <h2 class="section-title">Tentang Citaria Space</h2>
      <p class="section-subtitle">
        Citaria Space adalah ruang kreatif yang menghadirkan event-event inspiratif untuk orang-orang yang ingin
        bereksplorasi, berkarya, berbagi, dan menikmati pengalaman baru dalam suasana yang menyenangkan.
      </p>
      <div class="about-box">
        <p>
          Kami percaya bahwa setiap event bukan hanya tentang keseruan, tetapi juga tentang membangun koneksi,
          menciptakan momen berharga, dan menghadirkan pengalaman yang berkesan. Melalui berbagai kegiatan kreatif
          dan sosial, Citaria Space ingin menjadi tempat di mana ide, seni, dan kebersamaan bisa tumbuh bersama.
        </p>
      </div>
    </div>
  </section>

  <section class="reveal" id="events">
    <div class="container">
      <h2 class="section-title">Jenis Event Kami</h2>
      <p class="section-subtitle">
        Berbagai event seru yang dirancang untuk menghadirkan pengalaman kreatif, estetik, dan meaningful.
      </p>
      <div class="cards">
        <div class="card pop-up delay-1">
          <h3>Painting Class</h3>
          <p>Menuangkan kreativitas melalui warna, kanvas, dan suasana yang santai serta menyenangkan.</p>
        </div>
        <div class="card pop-up delay-2">
          <h3>Social Visit</h3>
          <p>Kegiatan berbagi dan kebersamaan seperti kunjungan ke panti asuhan untuk menciptakan momen penuh arti.</p>
        </div>
        <div class="card pop-up delay-3">
          <h3>Batik Workshop</h3>
          <p>Belajar seni budaya Indonesia lewat workshop membatik yang seru, kreatif, dan berkesan.</p>
        </div>
        <div class="card pop-up delay-4">
          <h3>Nail Art Event</h3>
          <p>Eksplorasi gaya dan kreativitas lewat event nail art yang fun, estetik, dan penuh inspirasi.</p>
        </div>
         <div class="card pop-up delay-5">
          <h3>Cooking Class</h3>
          <p>Event memasak yang seru untuk belajar menu baru, eksplorasi rasa, dan menikmati pengalaman kreatif bersama.</p>
        </div>
      </div>
      </div>
    </div>
  </section>

  <section class="reveal" id="founder">
    <div class="container">
      <h2 class="section-title">Founder</h2>
      <p class="section-subtitle">
        Sosok di balik lahirnya Citaria Space dan semangat untuk menghadirkan event yang kreatif dan bermakna.
      </p>
      <div class="founder-box">
        <div class="founder-photo">N</div>
        <div class="founder-text">
          <h3>Nabila Valia</h3>
          <p>
            Citaria Space didirikan oleh Nabila Valia dengan semangat untuk menciptakan ruang
            yang penuh kreativitas, kehangatan, dan pengalaman seru bagi banyak orang. Melalui Citaria Space, ia ingin
            menghadirkan event yang tidak hanya menyenangkan, tetapi juga memberi nilai kebersamaan, inspirasi, dan
            kesempatan untuk berkembang bersama.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="gallery reveal" id="gallery">
    <div class="container">
      <h2 class="section-title">Gallery Preview</h2>
      <p class="section-subtitle">
        Placeholder galeri untuk menampilkan dokumentasi event Citaria Space. Nanti bisa diganti dengan foto asli.
      </p>
      <div class="gallery-grid">
        <div class="gallery-item pop-up delay-1 g1">Painting Session</div>
        <div class="gallery-item pop-up delay-2 g2">Batik Workshop</div>
        <div class="gallery-item pop-up delay-3 g3">Nail Art Event</div>
        <div class="gallery-item pop-up delay-4 g4">Creative Gathering</div>
        <div class="gallery-item pop-up delay-5 g5">Social Visit</div>
        <div class="gallery-item pop-up delay-6 g6">Cooking & Fun Event</div>
      </div>
    </div>
  </section>

  <section class="reveal" id="contact">
    <div class="container">
      <div class="contact-box">
        <h2>Let’s Create Meaningful Events Together</h2>
        <p>
          Tertarik untuk ikut event, bekerja sama, atau berkolaborasi bersama Citaria Space? Hubungi kami dan mari
          ciptakan momen kreatif yang seru dan berkesan.
        </p>
        <div class="contact-links">
          <a href="#">Instagram</a>
          <a href="#">WhatsApp</a>
          <a href="#">Email</a>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>© 2026 Citaria Space. All rights reserved.</p>
    </div>
  </footer>
  <script>
    const animatedItems = document.querySelectorAll('.reveal, .pop-up');

    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
        }
      });
    }, {
      threshold: 0.15
    });

    animatedItems.forEach((item) => observer.observe(item));
  </script>
</body>
</html>
