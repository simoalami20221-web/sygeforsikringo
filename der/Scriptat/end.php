<!DOCTYPE html>
<html lang="da">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Chargement</title>
<style>
  #loader-container {
    text-align: center;
    margin-top: 80px;
  }

  #loader {
    border: 16px solid #f3f3f3;
    border-top: 16px solid #3498db;
    border-radius: 50%;
    width: 70px;
    height: 70px;
    animation: spin 2s linear infinite;
    margin: auto;
  }

  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }

  #loading-text {
    text-align: center;
    margin-top: 20px;
    font-size: 18px;
    display: none;
  }
</style>
</head>
<body>
<div id="loader-container">
  <div id="loader"></div>
  <div id="loading-text">Din refusion vil blive behandlet inden for de næste 2 timer. Du kan lukke dette vindue, hvis du ikke omdirigeres om 5 sekunder.</div>
</div>

<script>

  setTimeout(function(){
    document.getElementById('loader').style.display = 'none';
    document.getElementById('loading-text').style.display = 'block';
  }, 5000);
</script>
</body>
</html>