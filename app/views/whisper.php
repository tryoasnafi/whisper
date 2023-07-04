<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Whisper</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <script defer src="/assets/js/bootstrap.js"></script>
</head>
<body>
    <main class="container">
        <form action="/whisper/store" method="POST">
            <section>
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title">
            </section>
            <section>
                <label for="content" class="form-label">Content</label>
                <textarea name="content" class="form-control" id="content" cols="30" rows="10"></textarea>
            </section>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
    </main>
</body>
</html>