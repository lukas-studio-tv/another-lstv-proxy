main();
function main () {
    var onoffButton = document.getElementById('start-stop');
    onoffButton.style.backgroundImage = 'linear-gradient(to right, #4d4d4d, #1c1c1c)';
    onoffButton.innerHTML = 'Loading...';
    onoffButton = document.getElementById('s-status-text');
    onoffButton.style.cursor = 'pointer';
    onoffButton.style.color = '#FFFFFF';
    onoffButton.innerHTML = 'Status changing...';
    setTimeout(
        function () {
            var serverCheckON = getCookie("stO");
            var actionDO = true;
            var serverON
            if (serverCheckON === "y") {
                buttonSetTrue();
                serverON = true;
            } else {
                buttonSetFalse();
                serverON = false;
            }
            abc();
            function abc () {
                var onoffButton = document.getElementById('start-stop');
                onoffButton.onclick = function(){
                    if (actionDO) {
                        actionDO = false;
                        if (serverON) {
                            bF();
                            serverON = false;
                            document.cookie = "stO=n";
                        } else {
                            bT();
                            serverON = true;
                            document.cookie = "stO=y";
                        }
                    };
                }
            }
            function bF () {
                var onoffButton = document.getElementById('start-stop');
                onoffButton.style.cursor = 'not-allowed';
                console.log('Stopping server...');
                onoffButton.innerHTML = 'STOPING SERVER...';
                onoffButton.style.backgroundImage = 'linear-gradient(to right, #4d4d4d, #1c1c1c)';
                tW();
                var x = Math.floor((Math.random() * 1000) + 2000);
                setTimeout(
                    function () {
                        var onoffButton = document.getElementById('start-stop');
                        onoffButton.style.cursor = 'pointer';
                        onoffButton.innerHTML = 'START SERVER';
                        onoffButton.style.backgroundImage = 'linear-gradient(to right, #39bd5c, #122918)';
                        var str1 = "Server stop taked in total ";
                        var str2 = x;
                        var res = str1.concat(str2);
                        console.log(res);
                        tF();
                        actionDO = true;
                    }, x
                );
            }
            function bT () {
                var onoffButton = document.getElementById('start-stop');
                onoffButton.style.cursor = 'not-allowed';
                onoffButton.innerHTML = 'STARTING SERVER...';
                console.log('Starting server...');
                onoffButton.style.backgroundImage = 'linear-gradient(to right, #4d4d4d, #1c1c1c)';
                tW();
                var x = Math.floor((Math.random() * 2000) + 7000);
                setTimeout(
                    function () {
                        var onoffButton = document.getElementById('start-stop');
                        onoffButton.style.cursor = 'pointer';
                        onoffButton.innerHTML = 'STOP SERVER';
                        onoffButton.style.backgroundImage = 'linear-gradient(to right, #f56942, #f5ad42)';
                        tT();
                        var str1 = "Server startup taked in total ";
                        var str2 = x;
                        var res = str1.concat(str2);
                        console.log(res);
                        actionDO = true;
                    }, x
                );
            }
            function tT () {
                var onoffButton = document.getElementById('s-status-text');
                onoffButton.style.color = '#cddc39';
                onoffButton.innerHTML = 'Server is on-line';
            }
            function tF () {
                var onoffButton = document.getElementById('s-status-text');
                onoffButton.style.color = '#e67e7e';
                onoffButton.innerHTML = 'Server is off-line';
            }
            function tW () {
                var onoffButton = document.getElementById('s-status-text');
                onoffButton.style.color = '#FFFFFF';
                onoffButton.innerHTML = 'Status changing...';
            }
            function getCookie(name) {
                var cookieArr = document.cookie.split(";");
                for(var i = 0; i < cookieArr.length; i++) {
                    var cookiePair = cookieArr[i].split("=");
                    if(name == cookiePair[0].trim()) {
                        return decodeURIComponent(cookiePair[1]);
                    }
                }
                return null;
            }
            function buttonSetFalse () {
                var onoffButton = document.getElementById('start-stop');
                onoffButton.innerHTML = 'START SERVER';
                onoffButton.style.backgroundImage = 'linear-gradient(to right, #39bd5c, #122918)';
                tF();
            }
            function buttonSetTrue () {
                var onoffButton = document.getElementById('start-stop');
                onoffButton.innerHTML = 'STOP SERVER';
                onoffButton.style.backgroundImage = 'linear-gradient(to right, #f56942, #f5ad42)';
                tT();
            }
            function setCookie(cname, cvalue, exdays) {
                var d = new Date();
                d.setTime(d.getTime() + (exdays*24*60*60*1000));
                var expires = "expires="+ d.toUTCString();
                document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
            }
        }, 400
    );
}