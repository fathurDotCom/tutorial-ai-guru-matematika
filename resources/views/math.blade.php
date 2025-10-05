<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>AI Math Tutor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="card mx-auto shadow" style="max-width:800px;">
      <div class="card-body p-4">
        <h3 class="mb-3">AI Math Tutor — Masukkan soal</h3>
        <form action="/solve" method="POST">
          @csrf
          <div class="mb-3">
            <textarea name="problem" rows="6" class="form-control" placeholder="Contoh: Solve 2x + 5 = 13" required></textarea>
          </div>
          <button class="btn btn-primary">Minta Solusi</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
