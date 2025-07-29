<!DOCTYPE html>
<html>
<head><title>Goal Tracker</title></head>
<body>
    <h1>Personal Goal Tracker</h1>
    <p><?= $goal->getStatus(); ?></p>

    <form method="POST">
        <label>Goal Name: 
            <input type="text" name="name" value="<?= htmlspecialchars($goal->name); ?>">
        </label><br>

        <label>Target: 
            <input type="number" name="target" value="<?= htmlspecialchars($goal->target); ?>">
        </label><br>

        <label>Add Progress: 
            <input type="number" name="progress" value="<?= htmlspecialchars($goal->progress); ?>">
        </label><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
