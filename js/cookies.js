$(document).ready(function() { // Se ejecuta cuando ingreso a discover

  if (document.cookie.indexOf('rock') !== -1) {  // Si no es -1, entonces es porque existe, entonces la elimina
    document.cookie = "rock=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  }

  if (document.cookie.indexOf('pop') !== -1) {
    document.cookie = "pop=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  }

  if (document.cookie.indexOf('cumbia') !== -1) {
    document.cookie = "cumbia=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  }

  if (document.cookie.indexOf('cyberpunk') !== -1) {
    document.cookie = "cyberpunk=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  }

  if (document.cookie.indexOf('japanese') !== -1) {
    document.cookie = "japanese=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  }

  if (document.cookie.indexOf('chill') !== -1) {
    document.cookie = "chill=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  }

  if (document.cookie.indexOf('retro') !== -1) {
    document.cookie = "retro=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  }

  if (document.cookie.indexOf('metal') !== -1) {
    document.cookie = "metal=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  }

});
