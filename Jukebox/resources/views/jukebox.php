<form action="" method="post">
<?php echo csrf_field() ?>
<label for="">Author:</label><br>
<input type="text" name="author" value="<?= htmlspecialchars($author) ?>">
<br>
<br>

<label for="">Song:</label><br>
<input type="text" name="song" value="<?= htmlspecialchars($song) ?>">
<br>
<br>

<label for="">Code:</label><br>
<input type="text" name="code" value="<?= htmlspecialchars($code) ?>">
<br>
<br>

<label for="">URL:</label><br>
<input type="text" name="URL" value="<?= htmlspecialchars($URL) ?>">
<br>
<br>

<label for="">Added at:</label><br>
<input type="text" name="added" value="<?= htmlspecialchars($added) ?>">
<br>
<br>

<input type="submit" value="Submit song">
<br>

</form>