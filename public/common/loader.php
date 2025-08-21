<style>
.page-loader {
    width: 100vw;
    height: 100vh;
    position: fixed;
    z-index: 9999;
    background: #ffffff;
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

/* clouds */
.cloud {
    position: absolute;
    background: #f1f1f1;
    border-radius: 50%;
    opacity: 0.8;
    animation: cloudMove 12s linear infinite;
}

.cloud.small {
    width: 60px;
    height: 40px;
    bottom: 30%;
    left: -80px;
    animation-delay: 2s;
}
.cloud.medium {
    width: 100px;
    height: 60px;
    top: 40%;
    left: -150px;
    animation-delay: 4s;
}
.cloud.large {
    width: 150px;
    height: 90px;
    top: 20%;
    left: -200px;
}

/* airplane flying animation */
@keyframes flyUp {
    0% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(2deg); }
    100% { transform: translateY(0) rotate(0deg); }
}

/* clouds animation */
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

<div class="page-loader">
    <div class="loader">
        <!-- Replace with your airplane SVG/PNG -->
        <img src="./public/assets/images/airplane.png" class="airplane" alt="Loading..." />

        <div class="loading-text">Loading.......</div>
    </div>

    <!-- clouds -->
    <div class="cloud small"></div>
    <div class="cloud medium"></div>
    <div class="cloud large"></div>
</div>
