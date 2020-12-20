<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">JhasonTeam</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/komik">Buku</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pages/cariBuku">Cari RBook</a>
      </li>
    </ul>

    <!-- <button class="btn btn-outline-secondary" type="button" id="search-button">Search</button> -->

    <?php if (logged_in()) : ?>
      <a class="btn btn-outline-light" id="search-button" href="/logout">Logout</a>
    <?php else : ?>
      <a class="btn btn-outline-light" id="search-button" href="/login">Login</a>
    <?php endif; ?>
  </div>
</nav>