<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Hasil Solusi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="card mx-auto shadow" style="max-width:900px;">
      <div class="card-body p-4">
        <h4>Soal:</h4>
        <pre class="bg-dark text-white p-3 rounded">{{ $problem }}</pre>

        <h4 class="mt-3">Solusi AI (step-by-step):</h4>
        <div class="border rounded p-3" style="white-space:pre-wrap;">{!! nl2br(e($answer)) !!}</div>

        <a href="/" class="btn btn-outline-secondary mt-3">Kembali</a>
      </div>
    </div>
  </div>
</body>
</html>
