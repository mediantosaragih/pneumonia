<!DOCTYPE html>
<html lang="en">
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Sistem Diagnosa Pneumonia</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/templatemo-chain-app-dev.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"/>

    <!-- Bootstrap datepicker JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>


<body>
    <section class="login">
        <div class="login_box">
            <div class="left">
                <div class="text">
                    <h5>Sistem Identifikasi </h5>
                    <h5>Kepribadian</h5>
                </div>
            </div>
            <div class="right">
                <div style="margin-top:-10px">
                <a id="modal_trigger"  href="{{url('welcome')}}"><i class="fa fa-arrow-left fa-2x" style="color:268EEE;padding-bottom:10px" aria-hidden="true"></i></a>
                </div>
                <div class="contact">
                    <form action="/login" method="post">
                        <h3>Daftar Akun</h3>
                        <input type="username" id="username" class="form-control " name="username" placeholder="Nama" required>
                        <input type="date" id="tanggal_lahir" class="form-control " name="tanggal_lahir" placeholder="Tanggal Lahir" required>
                        <input type="text" id="pekerjaan" class="form-control " name="pekerjaan" placeholder="Pekerjaan" required>
                        <input type="text" id="email" class="form-control " name="email" placeholder="Email" required>
                        <input type="text" id="no_telp" class="form-control " name="no_telp" placeholder="No Telepon" required>
                        <input type="password" id="password" class="form-control " name="password" placeholder="PASSWORD" required>
                        <input type="hidden" id="role" class="form-control " name="role" value="1">
                        <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="{{url('login')}}" class="fw-bold text-body"><u>Login here</u></a></p>
                    </form>

                </div>
            </div>
        </div>
    </section>
</body>

</html>

<style>
    img {
        width: 100%;
        padding:10px
    }
    .login {
        height: 100%;
        width: 100%;
        /* background: radial-gradient(#653d84, #332042); */

    }
    .login_box {
        width: 65%;
        height: 80%;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #fff;
        border-radius: 10px;
        box-shadow: 1px 4px 22px -8px #0004;
        display: flex;
        overflow: hidden;
    }
    .login_box .right {
        width: 41%;
        height: 100%;
        padding: 25px 25px;
    }
    .login_box .left {
        width: 59%;
        height: 100%
    }
    .right .top_link a {
        color: #452A5A;
        font-weight: 400;
    }
    .right .top_link {
        height: 20px
    }
    .right .contact {
        display: flex;
        align-items: center;
        justify-content: center;
        align-self: center;
        height: 100%;
        width: 73%;
        margin: auto;
    }
    .right h3 {
        text-align: center;
        margin-bottom: 30px;
        margin-top: -30px;
    }
    .right input {
        border: none;
        width: 80%;
        margin: 15px 0px;
        border-bottom: 1px solid #4f30677d;
        padding: 7px 9px;
        width: 100%;
        overflow: hidden;
        background: transparent;
        font-weight: 600;
        font-size: 14px;
    }
    .right {
        background: linear-gradient(-45deg, #dcd7e0, #fff);
        background-color:black;
        margin:20px 20px 20px 0px;
    }
    .submit {
        border: none;
        padding: 10px 40px;
        border-radius: 8px;
        display: block;
        margin: auto;
        margin-top: 15%;
        background: #268EEE;
        color: #fff;
        font-weight: bold;
        -webkit-box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
        -moz-box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
        box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
    }
    .submit2 {
        padding: 10px 30px;
        border-radius: 8px;
        display: block;
        margin: auto;
        margin-top: 15%;
        background: #268EEE;
        color: #fff;
        font-weight: bold;
        -webkit-box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
        -moz-box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
        box-shadow: 0px 9px 15px -11px rgba(88, 54, 114, 1);
    }
    .left {
        background: url(img/wal.jpg);
        margin:20px 20px 20px 20px;
        color: #fff;
        text-align : right;
    }
    .left .text {
        margin-right:-320px;
        position: relative;
        transform: translate(0%, 45%);
    }
    .text h5 {
        width: 100%;
        text-align: center;
        font-size: 22px;
        font-weight: 400;
    }

</style>

<script type="text/javascript">
    $(document).ready(function () {
        $('#datepicker').datepicker();
        ...
    });
</script>

