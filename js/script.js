document.addEventListener('DOMContentLoaded', function () {
  // Function to get the value of a cookie by name
  function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
  }

  // Check the cookie value and log the result
  const cookieConsent = getCookie('gdpr_cookie_consent');
  if (cookieConsent === 'accepted') {
    console.log('Cookies accepted');
  } else if (cookieConsent === 'denied') {
    console.log('Cookies denied');
  } else {
    console.log('No cookie decision made yet');
  }

  // Handle Accept button click
  const acceptButton = document.getElementById('gdpr-accept');
  if (acceptButton) {
    acceptButton.addEventListener('click', function () {
      document.cookie = "gdpr_cookie_consent=accepted; path=/; max-age=31536000"; // 1 year
      console.log('Cookies accepted'); // Log acceptance
      removeQueryParameterAndReload(); // Remove query parameter and reload
    });
  }

  // Handle Deny button click
  const denyButton = document.getElementById('gdpr-deny');
  if (denyButton) {
    denyButton.addEventListener('click', function () {
      document.cookie = "gdpr_cookie_consent=denied; path=/; max-age=31536000"; // 1 year
      console.log('Cookies denied'); // Log denial
      removeQueryParameterAndReload(); // Remove query parameter and reload
    });
  }

  // Handle Cookie Icon Click
  const cookieIcon = document.getElementById('gdpr-cookie-icon');
  if (cookieIcon) {
    cookieIcon.addEventListener('click', function () {
      // Redirect to the same page with a query parameter to show the banner
      window.location.href = window.location.pathname + '?show_cookie_banner=true';
    });
  }

  // Function to remove query parameter and reload the page
  function removeQueryParameterAndReload() {
    const url = new URL(window.location.href);
    url.searchParams.delete('show_cookie_banner'); // Remove the query parameter
    window.location.href = url.toString(); // Reload the page without the parameter
  }
});