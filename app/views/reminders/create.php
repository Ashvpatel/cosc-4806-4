<?php require_once 'app/views/templates/header.php'; ?>

<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Create a New Reminder</h1>
                <form action="/reminders/store" method="post">
                    <div class="form-group">
                        <label for="user_id">User ID:</label>
                        <input type="number" class="form-control" id="user_id" name="user_id" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject:</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Reminder</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once 'app/views/templates/footer.php'; ?>
