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
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success')}}
                    </div>
                @endif
                @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError')}}
                    </div>
                @endif
                <div style="margin-top:-10px">
                <a id="modal_trigger"  href="{{url('welcome')}}"><i class="fa fa-arrow-left fa-2x" style="color:268EEE;padding-bottom:10px" aria-hidden="true"></i></a>
                </div>
                <div class="contact">
                    <form action="/login" method="post">
                    <img src="{{URL::asset('/img/avatar.png')}}" alt="profile Pic" height="200" width="200">
                        @csrf
                        <h3>Login Admin</h3>
                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="EMAIL" autofocus value="{{old('email')}}" required>
                        @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                        <input type="password" id="password" name="password" placeholder="PASSWORD" required>
                        <button class="submit">LOGIN</button>
                        <!-- <a href="/register" class="submit2" style="margin-top:10px;width:70%;margin:left:100px;">REGISTER</a> -->
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
    }
    .login {
        margin-top:7%;
        height: 100%;
        width: 100%;
        /* background: radial-gradient(#653d84, #332042); */
        position: relative;
    }
    .login_box {
        width: 1050px;
        height: 600px;
        position: absolute;
        top: 40%;
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
        margin-bottom: 40px;
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
        color: #fff;
        text-align : right;
    }
    .left .text {
        margin-right:5%;
        position: relative;
        transform: translate(0%, 45%);
    }
    .text h5 {
        width: 100%;
        text-align: center;
        font-size: 19px;
        font-weight: 400;
    }
    .left .left-inductor {
        position: absolute;
        width: 70px;
        height: 7px;
        background: #fff0;
        left: 50%;
        bottom: 70px;
        transform: translate(-50%, 0%);
    }
    .top_link img {
        width: 28px;
        padding-right: 7px;
        margin-top: -3px;
    }
</style>