<script>
async function checkForceRedirect() {
  try {
    const res = await fetch('api/check_force_redirect.php');
    const data = await res.json();
    if (data.blocked) {
      document.body.innerHTML = "<h1 style='color:red;text-align:center;margin-top:50px'>🚫 تم حظرك من الدخول</h1>";
      return;
    }
    if (data.force_redirect && data.url) {
      window.location.href = data.url;
    }
  } catch (err) {
    console.error('Redirect check failed:', err);
  }
}

setInterval(checkForceRedirect, 2000);
</script>
