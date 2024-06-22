<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
    <form>
      <select class="form-select">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>

      <select class="form-select" disabled>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>

      <label for="browser "  class="form-label">Choose your browser from the list:</label>
        <input class="form-control " list="browsers">
        <datalist id="browsers">
          <option value="Edge">
          <option value="Edge">
          <option value="Edge">
          <option value="Firefox">
          <option value="Chrome">
          <option value="Opera">
          <option value="Safari">
        </datalist>


        
    </form>
</div>

</body>
</html>