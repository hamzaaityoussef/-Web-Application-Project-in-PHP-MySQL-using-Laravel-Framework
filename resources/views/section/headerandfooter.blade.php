{{-- ici je vais travailler avec la notion de @yield et @section to make le code reutilisable --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculté des Sciences et Techniques de Tanger</title>
    <link rel="stylesheet" href="/css/navbar.css">
    <style>
      body {
    background: #F9F8FD;
    font-family: 'Lexend Exa', sans-serif;
    }
    .header{
        display: flex;
    }  
    .header img{
        margin-top: 10px;
    }
    .fsttimg{
    margin-right: 770px;
    margin-left: 80px;
}
body{
      background-color: white;
    }
    nav ul li a {
          color: #000000;
          font-weight: 700;
          text-decoration: none;
          text-transform: uppercase;
          transition: color 0.2s;
        }
    </style>
    
    @yield('stylesheet')
</head>
<body>

    <div class="page">
        
        <header class="header">
            <img src="/images/invite/fstt.png" alt="FSTT Logo" width="200" class="fsttimg">
            <img src="/images/invite/uae.png" alt="uae logo" width="100" class="uaeimg">
            
        </header>

        <nav>
            <ul>
              <li><a href="/">Home</a></li>
              <li>
                <a href="/">Faculté</a>
                <ul>
                  <li><a href="/presentation">PRESENTATION</a></li>
                  <li><a href="/departements">departements</a></li>
                  
                </ul>
              </li>
              <li>
                <a href="/">FORMATIONS</a>
                <ul>
                  <li><a href="/deust">DEUST</a></li>
                  <li><a href="/licence">LST</a></li>
                  <li><a href="/master">MST</a></li>
                  <li><a href="/cycle">cycle Ingénieurs</a></li>
                </ul>
              </li>
              <li><a href="/presentation">About</a></li>
              <li><a href="invite/login">login</a></li>
              
            </ul>
          </nav>


        @yield('content')

        <footer class="footer">
            <div class="contact-section">
              <h2>Contactez-nous</h2>
              <p>Email : administration.fstt@uae.ac.ma</p>
              <p>Téléphone : + 212 (0) 5 39 39 39 54 / 55</p>
            </div>
        
            <div class="social-section">
              <h2>Suivez-nous</h2>
              <ul>
                <li><a href="https://www.facebook.com/" >Facebook</a></li>
                <li><a href="https://www.instagram.com/" >Instagram</a></li>
              </ul>
            </div>
        
            <div class="about-section">
              <h2>À propos de nous</h2>
              <p>description ou informations à propos de site.</p>
            </div>
        </footer>    
    </div>
</body>
</html>    
