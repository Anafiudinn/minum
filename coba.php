<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .e-card {
        margin: 100px auto;
        background: transparent;
        box-shadow: 0px 8px 28px -9px rgba(0, 0, 0, 0.45);
        position: relative;
        width: 240px;
        height: 330px;
        border-radius: 16px;
        overflow: hidden;
    }

    .wave {
        position: absolute;
        width: 540px;
        height: 700px;
        opacity: 0.6;
        left: 0;
        top: 0;
        margin-left: -50%;
        margin-top: -70%;
        background: linear-gradient(744deg, #af40ff, #5b42f3 60%, #00ddeb);
    }

    .icon {
        width: 3em;
        margin-top: -1em;
        padding-bottom: 1em;
    }

    .infotop {
        text-align: center;
        font-size: 20px;
        position: absolute;
        top: 5.6em;
        left: 0;
        right: 0;
        color: rgb(255, 255, 255);
        font-weight: 600;
        max-width: 300px;
        width: 100%;
    }

    .name {
        font-size: 14px;
        font-weight: 100;
        position: relative;
        top: 1em;
        text-transform: lowercase;
    }

    .wave:nth-child(2),
    .wave:nth-child(3) {
        top: 210px;
    }

    .playing .wave {
        border-radius: 40%;
        animation: wave 3000ms infinite linear;
    }

    .wave {
        border-radius: 40%;
        animation: wave 55s infinite linear;
    }

    .playing .wave:nth-child(2) {
        animation-duration: 4000ms;
    }

    .wave:nth-child(2) {
        animation-duration: 50s;
    }

    .playing .wave:nth-child(3) {
        animation-duration: 5000ms;
    }

    .wave:nth-child(3) {
        animation-duration: 45s;
    }

    @keyframes wave {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
    .form-group label {
        color: #ffff;
    }
</style>

<body>

    <div class="e-card playing">
        <div class="image"></div>

        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>


        <div class="infotop">
            <div class="text-center">login</div>
            <form method="post" action="login.php">
                <div class="form-group">
                    <label for="username">username</label>
                    <input type="text" name="username" class="form-control" id="email" placeholder="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <br>
            <div class="name">MikeAndrewDesigner</div>
        </div>
    </div>
</body>

</html>