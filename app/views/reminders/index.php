<?php require_once 'app/views/templates/header.php'; ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Reminders</h1>
                <p><a href="/reminders/create">Create a new reminder</a></p>
            </div>
        </div>
    </div>

    <?php if (!empty($data['reminders'])): ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">user id</th>
                    <th scope="col">subject</th>
                    <th scope="col">created at</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['reminders'] as $reminder): ?>
                    <tr>
                        <th scope="row"><?php echo htmlspecialchars($reminder['id']); ?></th>
                        <td><?php echo htmlspecialchars($reminder['user_id']); ?></td>
                        <td><?php echo htmlspecialchars($reminder['subjec']); ?></td>
                        <td><?php echo htmlspecialchars($reminder['created_at']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No reminders found.</p>
    <?php endif; ?>

</div>
<?php require_once 'app/views/templates/footer.php'; ?>
