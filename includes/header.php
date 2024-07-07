<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<!-- Mirrored from preview.colorlib.com/theme/funder/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Jul 2022 15:04:09 GMT -->

<head>

  <title>Funder &mdash; Colorlib Website Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="./css/styles.css">
  <link href="./css/font.css" rel="stylesheet">
  <link href="./css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- <link href="/css/car.css" rel="stylesheet"> -->

  <link rel="stylesheet" href="fonts%2c_icomoon%2c_style.css%2bcss%2c_bootstrap.min.css%2bcss%2c_magnific-popup.css%2bcss%2c_jquery-ui.css%2bcss%2c_owl.carousel.min.css%2bcss%2c_owl.theme.default.min.css%2bcss%2c_bootstrap-datepicker.css%2bcss%2c" />
  <link rel="stylesheet" href="../../../cdn.jsdelivr.net/npm/mediaelement%404.2.7/build/mediaelementplayer.min.css">
  <link rel="stylesheet" href="fonts%2c_flaticon%2c_font%2c_flaticon.css%2bcss%2c_aos.css%2bcss%2c_style.css.pagespeed.cc.H6h7T_FOs2.css" />
  <script nonce="4ac239db-3de0-4125-90e7-2e2a32372ac8">
    
    (function(w, d) {
      ! function(a, e, t, r) {
        a.zarazData = a.zarazData || {};
        a.zarazData.executed = [];
        a.zaraz = {
          deferred: []
        };
        a.zaraz.q = [];
        a.zaraz._f = function(e) {
          return function() {
            var t = Array.prototype.slice.call(arguments);
            a.zaraz.q.push({
              m: e,
              a: t
            })
          }
        };
        for (const e of ["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e);
        a.zaraz.init = () => {
          var t = e.getElementsByTagName(r)[0],
            z = e.createElement(r),
            n = e.getElementsByTagName("title")[0];
          n && (a.zarazData.t = e.getElementsByTagName("title")[0].text);
          a.zarazData.x = Math.random();
          a.zarazData.w = a.screen.width;
          a.zarazData.h = a.screen.height;
          a.zarazData.j = a.innerHeight;
          a.zarazData.e = a.innerWidth;
          a.zarazData.l = a.location.href;
          a.zarazData.r = e.referrer;
          a.zarazData.k = a.screen.colorDepth;
          a.zarazData.n = e.characterSet;
          a.zarazData.o = (new Date).getTimezoneOffset();
          a.zarazData.q = [];
          for (; a.zaraz.q.length;) {
            const e = a.zaraz.q.shift();
            a.zarazData.q.push(e)
          }
          z.defer = !0;
          for (const e of [localStorage, sessionStorage]) Object.keys(e || {}).filter((a => a.startsWith("_zaraz_"))).forEach((t => {
            try {
              a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t))
            } catch {
              a.zarazData["z_" + t.slice(7)] = e.getItem(t)
            }
          }));
          z.referrerPolicy = "origin";
          z.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData)));
          t.parentNode.insertBefore(z, t)
        };
        ["complete", "interactive"].includes(e.readyState) ? zaraz.init() : a.addEventListener("DOMContentLoaded", zaraz.init)
      }(w, d, 0, "script");
    })(window, document);
  </script>
</head>