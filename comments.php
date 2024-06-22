<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-3">
        <h2>Textarea</h2>
        <p>Use the .form-control class to style textareas as well</p>
        <form action="#">
            <div class="mb-3 mt-3">
                <label for='comment'>Comments</label>
            </div>
            <textarea name='text' class="form-control" rows='2' id="comment" name="text"></textarea>
        </form>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </div>
</body>
</html>