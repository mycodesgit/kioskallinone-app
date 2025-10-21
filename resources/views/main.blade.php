<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CPSU Student Kiosk</title>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="{{ asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
        <!-- Logo -->
        <link rel="shortcut icon" type="" href="{{ asset('template/dist/img/CPSU_L.png') }}">

        <style>
            html, body {
                height: 100vh !important;
                margin: 0;
                padding: 0;
                overflow: hidden;
            }
            .dashboard-container {
                height: 100vh !important;
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: #e0f0ff;
                padding: 20px;
            }
            .dashboard-box {
                background-color: #c0d5e5;
                border-radius: 20px;
                /* box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); */
                width: 100%;
                max-width: 600px;
                padding: 30px;
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 20px;
            }
            .dashboard-item {
                background-color: #007B3A;
                border-radius: 15px;
                color: #fff;
                text-align: center;
                padding: 20px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                transition: transform 0.3s;
            }
            .dashboard-item.clicked {
                animation: haptic-animation 0.3s ease !important;
            }

            @keyframes haptic-animation {
                0% {
                    transform: scale(1);
                }
                50% {
                    transform: scale(1.1);
                }
                100% {
                    transform: scale(1);
                }
            }
            .dashboard-item a {
                color: #fff;
                text-decoration: none;
            }
            .dashboard-item i {
                font-size: 30px;
                margin-bottom: 10px;
            }
            .dashboard-item h5 {
                margin: 0;
                font-size: 16px;
                text-align: center;
            }
            .settings-icon {
                position: absolute;
                top: 20px;
                left: 20px;
                color: #fff;
                font-size: 24px;
                cursor: pointer;
            }
            @media (max-width: 768px) {
                .dashboard-box {
                    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                    padding: 20px;
                }
                .dashboard-item {
                    padding: 15px;
                }
                .dashboard-item i {
                    font-size: 25px;
                }
                .dashboard-item h5 {
                    font-size: 14px;
                }
            }
        </style>
    </head>
    <body class="hold-transition">
        <div class="dashboard-container card">
            <div class="login-logo">
                <img src="{{ asset('template/dist/img/cpsulogov4.png') }}" alt="" width="180px">
                <h3><a href=""><b>Select Transaction</b></a></h3>
            </div>
            <div class="dashboard-box position-relative">
                <!-- <div class="settings-icon">
                    <i class="fas fa-cog"></i>
                </div> -->
                <a href="https://system.cpsu.edu.ph/localstudkioskonsite">
                    <div class="dashboard-item">
                        <i class="fas fa-user-graduate fa-2xl"></i>
                        <h3>View Grade</h3>
                    </div>
                </a>
                <a href="https://system.cpsu.edu.ph/campuswifi/public/login">
                    <div class="dashboard-item">
                        <i class="fas fa-wifi fa-2xl"></i>
                        <h3>Campus Wi-Fi</h3>
                    </div>
                </a>
            </div>
        </div>
        <!-- /.login-box -->
        <!-- jQuery -->
        <script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('template/dist/js/adminlte.min.js') }}"></script>
        <!-- Context -->
        <script src="{{ asset('js/basic/contextmenu.js') }}"></script>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
            const buttons = document.querySelectorAll('.dashboard-item');
        
            buttons.forEach(button => {
                button.addEventListener('click', () => {
                    // Add the 'clicked' class
                    button.classList.add('clicked');
        
                    // Remove the class after the animation duration to allow re-click
                    setTimeout(() => {
                        button.classList.remove('clicked');
                    }, 300); // Duration matches the animation time
                });
            });
        });
        </script>
    </body>
</html>
