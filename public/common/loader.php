<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Airplane Loader</title>
<style>
.page-loader {
    width: 100vw;
    height: 100vh;
    position: fixed;
    z-index: 9999;
    background: linear-gradient(to bottom, #87CEFA, #ffffff); /* Sky gradient */
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

/* loader wrapper */
.loader {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

/* airplane image */
.airplane {
    width: 150px;
    animation: flyUp 3s ease-in-out infinite;
}

/* fluffy clouds */
.cloud {
    position: absolute;
    background: #ffffff;
    border-radius: 50%;
    box-shadow: -20px 10px 40px rgba(0,0,0,0.05), 20px 20px 40px rgba(0,0,0,0.05);
    opacity: 0.9;
    filter: blur(1px);
    animation: cloudMove linear infinite;
}

.cloud::before,
.cloud::after {
    content: '';
    position: absolute;
    background: #ffffff;
    border-radius: 50%;
}

.cloud::before {
    width: 80%;
    height: 80%;
    top: -30%;
    left: -30%;
}

.cloud::after {
    width: 70%;
    height: 70%;
    top: -20%;
    right: -25%;
}

/* cloud sizes & unique timings */
.cloud.small {
    width: 70px;
    height: 40px;
    bottom: 20%;
    left: -100px;
    animation-duration: 20s;
    animation-delay: 2s;
}

.cloud.medium {
    width: 120px;
    height: 60px;
    top: 30%;
    left: -150px;
    animation-duration: 28s;
    animation-delay: 4s;
}

.cloud.large {
    width: 180px;
    height: 90px;
    top: 10%;
    left: 100px;
    animation-duration: 35s;
}

/* airplane flying animation */
@keyframes flyUp {
    0% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(2deg); }
    100% { transform: translateY(0) rotate(0deg); }
}

/* clouds move left → right */
@keyframes cloudMove {
    0% { transform: translateX(0); }
    100% { transform: translateX(120vw); }
}

/* loader text */
.loading-text {
    margin-top: 15px;
    font-family: Arial, sans-serif;
    font-size: 18px;
    font-weight: bold;
    color: #1e3a8a;
    animation: blink 1.5s infinite;
}

@keyframes blink {
    50% { opacity: 0.4; }
}
</style>
</head>
<body>

<div class="page-loader">
    <div class="loader">
        <!-- airplane -->
        <img src="./public/assets/images/airplane.png" class="airplane" alt="Loading..." />
        <div class="loading-text">Loading.......</div>
    </div>

    <!-- clouds -->
    <div class="cloud small"></div>
    <div class="cloud medium"></div>
    <div class="cloud large"></div>
</div>

</body>
</html>
