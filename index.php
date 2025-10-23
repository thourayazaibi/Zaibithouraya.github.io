<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Portfolio - Zaibi Thouraya</title>
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto&display=swap" rel="stylesheet" />
  
  <style>
    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Body & Font */
    body {
      font-family: 'Roboto', sans-serif;
      line-height: 1.6;
      background-color: #f7f9fc;
      color: #222;
      scroll-behavior: smooth;
    }

    /* Container */
    .container {
      width: 90%;
      max-width: 1100px;
      margin: 0 auto;
      padding: 40px 0;
    }

    /* Nav bar */
    nav {
      background: #283e4a;
      padding: 15px 0;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    nav ul {
      list-style: none;
      display: flex;
      justify-content: center;
      gap: 30px;
    }

    nav ul li a {
      color: #f1f1f1;
      text-decoration: none;
      font-weight: 600;
      font-family: 'Montserrat', sans-serif;
      padding: 8px 15px;
      border-radius: 50px;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    nav ul li a:hover,
    nav ul li a.active {
      background-color: #4ba3c3;
      color: #fff;
    }

    /* Header (Profil) */
    header {
      text-align: center;
      padding: 60px 20px;
      animation: fadeInDown 1s ease forwards;
    }

    header img {
      width: 160px;
      height: 160px;
      border-radius: 50%;
      border: 5px solid #4ba3c3;
      object-fit: cover;
      box-shadow: 0 8px 15px rgba(75,163,195,0.3);
      margin-bottom: 20px;
      transition: transform 0.3s ease;
    }

    header img:hover {
      transform: scale(1.05);
    }

    header h1 {
      font-family: 'Montserrat', sans-serif;
      font-size: 2.8rem;
      margin-bottom: 10px;
      color: #283e4a;
    }

    header p {
      font-style: italic;
      color: #555;
      font-size: 1.15rem;
    }

    /* Sections */
    section {
      padding: 60px 0;
      opacity: 0;
      transform: translateY(20px);
      animation-fill-mode: forwards;
    }

    section.visible {
      opacity: 1;
      transform: translateY(0);
      animation: fadeInUp 1s ease forwards;
    }

    section h2 {
      font-family: 'Montserrat', sans-serif;
      font-size: 2rem;
      color: #4ba3c3;
      margin-bottom: 25px;
      border-bottom: 2px solid #4ba3c3;
      display: inline-block;
      padding-bottom: 5px;
    }

    /* Lists */
    ul.skills-list, ul.experience-list, ul.education-list {
      list-style: none;
      padding-left: 0;
    }

    ul.skills-list li,
    ul.experience-list li,
    ul.education-list li {
      background: #e7f1f8;
      padding: 15px 20px;
      margin-bottom: 15px;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(75,163,195,0.2);
      transition: transform 0.3s ease;
      cursor: default;
    }

    ul.skills-list li:hover,
    ul.experience-list li:hover,
    ul.education-list li:hover {
      transform: translateX(8px);
      background: #d2e9f7;
    }

    /* Contact */
    form {
      max-width: 600px;
      margin: 0 auto;
      background: #fff;
      padding: 30px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      border-radius: 15px;
    }

    form label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
      color: #283e4a;
    }

    form input[type="text"],
    form input[type="email"],
    form textarea {
      width: 100%;
      padding: 12px 15px;
      margin-bottom: 20px;
      border: 2px solid #4ba3c3;
      border-radius: 8px;
      font-size: 1rem;
      transition: border-color 0.3s ease;
      font-family: 'Roboto', sans-serif;
    }

    form input[type="text"]:focus,
    form input[type="email"]:focus,
    form textarea:focus {
      outline: none;
      border-color: #21759b;
    }

    form textarea {
      resize: vertical;
      min-height: 120px;
    }

    form button {
      background-color: #4ba3c3;
      border: none;
      color: white;
      padding: 15px 30px;
      font-size: 1.1rem;
      border-radius: 50px;
      cursor: pointer;
      box-shadow: 0 6px 10px rgba(75,163,195,0.4);
      transition: background-color 0.3s ease;
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
    }

    form button:hover {
      background-color: #21759b;
    }

    /* Footer */
    footer {
      text-align: center;
      padding: 25px 0;
      background-color: #283e4a;
      color: #f1f1f1;
      margin-top: 60px;
      font-size: 0.9rem;
    }

    /* Animations */
    @keyframes fadeInDown {
      0% {
        opacity: 0;
        transform: translateY(-30px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Responsive */
    @media(max-width: 768px) {
      nav ul {
        flex-direction: column;
        gap: 15px;
      }

      header h1 {
        font-size: 2rem;
      }

      header img {
        width: 140px;
        height: 140px;
      }
    }
  </style>
</head>
<body>
  <nav>
    <ul>
      <li><a href="#profil" class="active">Profil</a></li>
      <li><a href="#experiences">Expériences</a></li>
      <li><a href="#formation">Formation</a></li>
      <li><a href="#competences">Compétences</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>

  <header id="profil" class="container">
  <img src="assets\images\foto.jpeg" alt="Photo de profil">
    <h1>Zaibi Thouraya</h1>
    <p>Développeuse &amp; Chercheuse en Intelligence Artificielle</p>
  </header>

  <section id="experiences" class="container">
    <h2>Expériences</h2>
    <ul class="experience-list">
      <li>
        <strong>Ingénieure en Intelligence Artificielle</strong> - XYZ Tech, Tunis (2020 - Présent)
        <p>Développement de solutions IA avancées, gestion de projets R&D, et optimisation des algorithmes de deep learning.</p>
      </li>
      <li>
        <strong>Développeuse Web Front-End</strong> - ABC Solutions, Tunis (2017 - 2020)
        <p>Création d'interfaces utilisateur performantes et réactives, avec focus sur l'expérience utilisateur et accessibilité.</p>
      </li>
      <li>
        <strong>Assistante de Recherche</strong> - Laboratoire IA Université Tunis (2015 - 2017)
        <p>Participation aux projets en reconnaissance vocale et traitement automatique du langage naturel.</p>
      </li>
    </ul>
  </section>

  <section id="formation" class="container">
    <h2>Formation</h2>
    <ul class="education-list">
      <li>
        <strong>Master en Intelligence Artificielle</strong> - Université de Tunis (2013 - 2015)
        <p>Spécialisation en apprentissage automatique et traitement des données massives.</p>
      </li>
      <li>
        <strong>Licence en Informatique</strong> - Université de Tunis (2010 - 2013)
        <p>Fondamentaux en programmation, algorithmique et systèmes d’information.</p>
      </li>
    </ul>
  </section>

  <section id="competences" class="container">
    <h2>Compétences</h2>
    <ul class="skills-list">
      <li>Python (TensorFlow, PyTorch)</li>
      <li>Machine Learning & Deep Learning</li>
      <li>Traitement du Langage Naturel (NLP)</li>
      <li>JavaScript, React, HTML5, CSS3</li>
      <li>Git, Docker, CI/CD</li>
      <li>Analyse de données & Visualisation</li>
    </ul>
  </section>

  <section id="contact" class="container">
    <h2>Contact</h2>
    <form id="contactForm" novalidate>
      <label for="nom">Nom complet</label>
      <input type="text" id="nom" name="nom" placeholder="Votre nom complet" required />

      <label for="email">Adresse e-mail</label>
      <input type="email" id="email" name="email" placeholder="Votre e-mail" required />

      <label for="message">Message</label>
      <textarea id="message" name="message" placeholder="Votre message..." required></textarea>

      <button type="submit">Envoyer</button>
    </form>
  </section>

  <footer>
    &copy; 2024 Zaibi Thouraya - Tous droits réservés.
  </footer>

  <script>
    // Activer animation section au scroll
    function animateOnScroll() {
      const sections = document.querySelectorAll('section');
      const triggerBottom = window.innerHeight * 0.85;

      sections.forEach(section => {
        const sectionTop = section.getBoundingClientRect().top;
        if(sectionTop < triggerBottom) {
          section.classList.add('visible');
        }
      });
    }

    window.addEventListener('scroll', animateOnScroll);
    window.addEventListener('load', () => {
      animateOnScroll();

      // Gestion active nav link
      const links = document.querySelectorAll('nav ul li a');
      links.forEach(link => {
        link.addEventListener('click', function(e) {
          links.forEach(l => l.classList.remove('active'));
          this.classList.add('active');
        });
      });
    });

    // Form validation & fake submit
    const form = document.getElementById('contactForm');
    form.addEventListener('submit', function(e) {
      e.preventDefault();

      // Validation simple
      const nom = form.nom.value.trim();
      const email = form.email.value.trim();
      const message = form.message.value.trim();

      if(!nom || !email || !message) {
        alert('Veuillez remplir tous les champs.');
        return;
      }

      if(!validateEmail(email)) {
        alert('Veuillez entrer une adresse e-mail valide.');
        return;
      }

      // Simulation envoi du message
      alert('Merci, ' + nom + '. Votre message a été envoyé avec succès !');

      // Reset form
      form.reset();
    });

    function validateEmail(email) {
      const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return re.test(email.toLowerCase());
    }
  </script>

</body>
</html>
