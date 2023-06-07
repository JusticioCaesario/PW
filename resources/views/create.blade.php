<form action="/create" method="POST">
    @csrf
    <label for="namaevent">Nama Event :</label>
    <input type="text" name="namaevent"></br>
    <label for="deskripsi">Deskripsi :</label>
    <textarea name="deskripsi" cols="30" rows="10"></textarea></br>
    <label for="tglevent">Tanggal Event :</label>
    <input type="text" name="tglevent"></br>
    <button>Ajukan</button>
</form>