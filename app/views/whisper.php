<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/whisper/store" method="POST">
        <section>
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
        </section>
        <section>
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
        </section>
        <section>
            <button type="submit">Submit</button>
        </section>
    </form>
</body>
</html>