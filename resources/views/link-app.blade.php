<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Téléchargez Tooauto</title>
  <script>
    const ua = navigator.userAgent.toLowerCase();

    if (ua.includes("android")) {
      window.location.href = "https://play.google.com/store/apps/details?id=com.tooauto.androidApp";
    } 
    else if (ua.includes("iphone") || ua.includes("ipad") || ua.includes("ipod")) {
      window.location.href = "https://apps.apple.com/us/app/tooauto/id6743125856";
    } 
    else {
      window.location.href = "https://tooauto.com";
    }
  </script>
</head>
<body>
  Redirection…
</body>
</html>