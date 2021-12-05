<table class="table">
    <thead>
    <tr>
        <th scope="col">Prénom</th>
        <th scope="col">Nom</th>
        <th scope="col">E-mail</th>
        <th scope="col">Est un admin ?</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach($vars['users'] as $user): ?>
            <tr>
              <td>
                <?= $user['firstname'] ?>
              </td>
              <td>
                <?= $user['lastname'] ?>
              </td>
              <td>
                <?= $user['mail'] ?>
              </td>
              <td>
                <?php echo $user['role'] ? 'oui' : 'non'; ?>
              </td>
              <td>
                <a onclick="confirm('Vous êtes sûr ?');" href="/admin-user-delete/<?= $user['id'] ?>" class="btn btn-sm btn-outline-danger">Supprimer l'utilisateur</a>
              </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
