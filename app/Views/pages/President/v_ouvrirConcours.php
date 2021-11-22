<div class="container">
    <div class="text-center">
        <h2>Ouvrir un concours</h2>
    </div>
    <form action="" method="index">
        <div class="form-group">
            <label for="exampleInputEmail1">Nom du concours 🔠</label>
            <input type="text" class="form-control" id="nomConcours" placeholder="Nom du concours" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Date d'ouverture 📆</label>
            <input type="date" class="form-control" id="dateOuvertureConcours" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Date de clôture 📆</label>
            <input type="date" class="form-control" id="dateClotureConcours" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Date d'ouverture des résultats 📆</label>
            <input type="date" class="form-control" id="dateOuvertureResultats" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">État du concours ✔/❌</label>
            <input type="tinyint" class="form-control" id="etatConcours" placeholder="État du concours" pattern="[0-1]" required >
            <small id="emailHelp" class="form-text text-muted">1 = ouvert / 0 = fermé</small>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer ✉</button>
    </form>
</div>