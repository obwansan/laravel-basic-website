<!-- mb-4 means 'margin-bottom size 4'. It's Bootstrap utility class. -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <a class="navbar-brand" href="#">Acme</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link {{Request::is('/') ? 'active' : ''}}" href="/">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link {{Request::is('about') ? 'active' : ''}}" href="/about">About</a>
      <a class="nav-item nav-link {{Request::is('contact') ? 'active' : ''}}" href="/contact">Contact</a>
    </div>
  </div>
</nav>