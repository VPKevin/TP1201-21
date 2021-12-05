<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="/">CMS TP 01-12</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <h6><?= $_SESSION['user']["firstname"] ?></h6>
          <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
        </li>
      </ul>
      <?php if (isset($_SESSION['user'])): ?>
        <?php if ($_SESSION['user']['role'] == true): ?>
          <a href="/admin" class="btn btn-outline-secondary me-2" type="submit">Admin</a>
        <?php endif; ?>
        <a href="/logout" class="btn btn-outline-danger" type="submit">Se déconnecter</a>
      <?php else: ?>
        <a href="/auth" class="btn btn-outline-danger" type="submit">S'authentifier</a>
      <?php endif; ?>
    </div>
  </div>
</nav>
