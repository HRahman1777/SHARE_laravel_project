<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">SHARE</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-bg nav-link" href="{{route('mhome')}}"> Home </a></li>
                <li class="nav-item"><a class="nav-link nav-bg" href="{{ route('all_post') }}"> Posts </a></li>
                <li class="nav-item"><a class="nav-link nav-bg" href="{{ url('about') }}"> About </a></li>
                <li class="nav-item"><a class="nav-link nav-bg" href="{{ url('contact') }}"> Contact </a></li>

            </ul>
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-person-fill"></i> Username</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ url('signup') }}"><i class="bi bi-person-fill"></i> Sign
                        Up</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('login') }}"><i class="bi bi-box-arrow-in-right"></i>
                        Login</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-box-arrow-right"></i>
                        Logout</a></li>
            </ul>

        </div>
    </nav>

    <div class="container">

        @yield('container1')

    </div>


    <footer class="footer-fix">
        <p id="copyrightid">Copyright &copy; HasiburRahman 2021</p>
    </footer>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    <!-- Code injected by live-server 
    <script type="text/javascript">
        // <![CDATA[  <-- For SVG support
        if ('WebSocket' in window) {
            (function() {
                function refreshCSS() {
                    var sheets = [].slice.call(document.getElementsByTagName("link"));
                    var head = document.getElementsByTagName("head")[0];
                    for (var i = 0; i < sheets.length; ++i) {
                        var elem = sheets[i];
                        var parent = elem.parentElement || head;
                        parent.removeChild(elem);
                        var rel = elem.rel;
                        if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                            var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                            elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                        }
                        parent.appendChild(elem);
                    }
                }
                var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
                var address = protocol + window.location.host + window.location.pathname + '/ws';
                var socket = new WebSocket(address);
                socket.onmessage = function(msg) {
                    if (msg.data == 'reload') window.location.reload();
                    else if (msg.data == 'refreshcss') refreshCSS();
                };
                if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                    console.log('Live reload enabled.');
                    sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
                }
            })();
        } else {
            console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
        }
        // ]]>

        // show message
    </script>

    <script>
        /*
        @if(Session::has('message'))
        var type = "{{Session::get('alert-type', 'info')}}";
        switch (type) {
            case 'info':
                toastr.info("{{Session::get('message')}}");
                break;
            case 'success':
                toastr.success("{{Session::get('message')}}");
                break;
            case 'warning':
                toastr.warning("{{Session::get('message')}}");
                break;
            case 'error':
                toastr.error("{{Session::get('message')}}");
                break;
        }
        @endif */
    </script>
-->


</body>

</html>