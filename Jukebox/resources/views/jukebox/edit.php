<form action="" method="post">
<?php echo csrf_field() ?>
<label for="">Author:</label><br>
<input type="text" name="author" value="<?= htmlspecialchars($record->author) ?>">
<br>
<br>

<label for="">Song:</label><br>
<input type="text" name="song" value="<?= htmlspecialchars($record->song) ?>">
<br>
<br>

<label for="">Code:</label><br>
<input type="text" name="code" value="<?= htmlspecialchars($record->code) ?>">
<br>
<br>

<label for="">URL:</label><br>
<input type="text" name="URL" value="<?= htmlspecialchars($record->URL) ?>">
<br>
<br>

<label for="">Added at:</label><br>
<input type="text" name="added" value="<?= htmlspecialchars($record->added) ?>">
<br>
<br>

<input type="submit" value="Submit song">
<br>

</form>