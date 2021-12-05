<div class="row">
  <div class="card col-md-6 m-3">
    <div class="card-body">
      <h2>Se connecter</h2>
      <form action="/login" method="post">
        <div class="form-group">
          <label for="mail">Email address</label>
          <input type="email" name="mail" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="Email">
        </div>
        <div class="form-group mb-2">
          <label for="password">Mot de passe</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe">
        </div>
        <button type="submit" class="btn btn-primary">Se identifier</button>
      </form>
    </div>
  </div>


  <div class="card col-md-5 m-3">
    <div class="card-body">
      <h2>S'inscrire</h2>
      <form name="signin" action="/signin" method="post">
        <div class="form-group">
          <label for="firstname">Prénom</label>
          <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Prénom">
        </div>
        <div class="form-group">
          <label for="lastname">Nom</label>
          <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Nom">
        </div>
        <div class="form-group">
          <label for="mail">Email address</label>
          <input type="email" name="mail" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="password">Mot de passe</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label name="role" class="form-check-label" for="exampleCheck1">is Admin</label>
        </div>
        <button type="submit" class="btn btn-primary">S'inscrire</button>
      </form>
    </div>
  </div>
</div>
