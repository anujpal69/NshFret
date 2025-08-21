<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --overlay-color: rgba(0, 0, 0, .7);
    --dialog-color: #e9ecef;
    --dialog-border-radius: 20px;
    --icon-color: rgba(73, 80, 87, .6);
    --dialog-padding: 20px;
    --drag-over-background: #e3e5e8;
}

.file-container {
    font-family: sans-serif;
    font-size: 13pt;
    color: #4d4d4d;
}

.file-container .file-overlay {
    position: fixed;
    width: 100vw;
    height: 100vh;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 10;
    background-color: var(--overlay-color);
}

.file-container .file-wrapper {
    position: fixed;
    display: block;
    width: 70vw;
    height: 80vh;
    max-height: 500px;
    min-height: 400px;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    margin: auto;
    background-color: var(--dialog-color);
    z-index: 20;
    border-radius: var(--dialog-border-radius);
    padding: var(--dialog-padding);
}

.file-container .file-wrapper .file-input {
    position: absolute;
    width: 50%;
    height: 50%;
    top: 50%;
    right: 50;
    bottom: 0;
    left: 50%;
    background-color: #000;
    z-index: 10;
    cursor: pointer;
    opacity: 0;
    transform: translate(-50%, -50%);
}

.file-container .file-wrapper .file-input--active+.file-content {
    background: var(--drag-over-background);
}

.file-container .file-wrapper .file-input--active+.file-content .file-icon {
    opacity: 0.5;
}

.file-container .file-wrapper .file-input--active+.file-content .file-icon i {
    animation-name: bounce;
    animation-duration: 0.6s;
    animation-iteration-count: infinite;
    animation-timing-function: ease;
}

.file-container .file-wrapper .file-input--active+.file-content .file-icon .icon-shadow {
    animation-name: shrink;
    animation-duration: 0.6s;
    animation-iteration-count: infinite;
}

.file-container .file-wrapper .file-content {
    position: relative;
    display: block;
    width: 100%;
    height: 100%;
    border: 8px dashed var(--icon-color);
    border-radius: var(--dialog-border-radius);
    transition: 0.2s;
}

.file-container .file-wrapper .file-content .file-infos {
    position: absolute;
    display: flex;
    width: 50%;
    height: 50%;
    min-width: 400px;
    min-height: 202px;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    margin: auto;
    flex-direction: column;
    justify-content: center;
}

.file-container .file-wrapper .file-content .file-infos .file-icon {
    position: relative;
    width: 100%;
    height: 100%;
    margin: 0;
    color: var(--icon-color);
    background-color: #f1f1f1;
    border-radius: var(--dialog-border-radius);
    padding: var(--dialog-padding);
    box-shadow: inset 0px 0px 6px 0px #ccc;
    transition: 0.2s;
    text-align: center;
}

.file-container .file-wrapper .file-content .file-infos .file-icon i {
    margin-bottom: 20px;
    width: 100%;
}

.file-container .file-wrapper .file-content .file-infos .file-icon .icon-shadow {
    position: relative;
    display: block;
    width: 95px;
    height: 7px;
    border-radius: 100%;
    background-color: var(--drag-over-background);
    top: -17px;
    margin-left: auto;
    margin-right: auto;
}

.file-container .file-wrapper .file-content .file-infos .file-icon>span {
    position: absolute;
    bottom: var(--dialog-padding);
    width: calc(100% - var(--dialog-padding) * 2);
}

.file-container .file-wrapper .file-content .file-infos .file-icon>span span {
    display: none;
}

.file-container .file-wrapper .file-content .file-infos .file-icon>span .has-drag {
    display: inline;
}

.file-container .file-wrapper .file-content .file-infos .file-icon i,
.file-container .file-wrapper .file-content .file-infos .file-icon span {
    display: block;
    text-align: center;
    text-transform: uppercase;
    font-weight: bold;
}

.file-container .file-wrapper .file-content .file-name {
    position: absolute;
    width: 150px;
    text-align: middle;
    left: 0;
    bottom: var(--dialog-padding);
    right: 0;
    font-weight: bold;
    font-size: 15pt;
    margin: auto;
    text-align: center;
    border: none;
    display: inline-block;
    height: 45px;
    cursor: pointer;
    background:transparent;

}

@keyframes bounce {
    0% {
        transform: translateY(0px);
    }

    50% {
        transform: translateY(-15px);
    }

    100% {
        transform: translateY(0px);
    }
}

@keyframes shrink {
    0% {
        width: 95px;
    }

    50% {
        width: 75px;
    }

    100% {
        width: 95px;
    }
}

.go-back-btn {
    position: absolute;
    top: 20px;
    left: 20px;
    background: white;
    padding: .5em 1em;
    z-index: 99;
    color: #000;
    border-radius: 8px;
    text-decoration: none;
}

.validation_msg {
    font-size: 11px;
    color: #929292;
    bottom:-1.6em !important;
}

.error_msg {
    color: red;
}

@media screen and (max-width:575px) {
    .validation_msg {
        display: none;
    }
}
</style>


<div class="file-container">
    <div class="file-overlay"></div>
    <a href="./" class="go-back-btn">Go Back</a>
    <form id="uploadForm" enctype="multipart/form-data" class="file-wrapper">
        <input class="file-input" type="file" id="imageInput" name="image" accept=".jpg,.jpeg,.png,.gif">

        <div class="file-content">
            <div class="file-infos">
                <p class="file-icon"><img style="max-width:140px; margin:0 auto"
                        src="https://cdn1.iconfinder.com/data/icons/hawcons/32/698648-icon-130-cloud-upload-512.png"
                        alt="">
                    <span class="icon-shadow"></span>
                    <span class="selected-file">Click to browse</span>
                    <span class="validation_msg">Only JPG, JPEG, PNG, and GIF files are allowed. File size must be under
                        5 MB.</span>
                </p>
            </div>
            <button type="submit" class="file-name" id="js-file-name">Submit</button>
            <span class="validation_msg error_msg"></span>
        </div>
    </form>
</div>

<script src="public/assets/js/updateBgImg.js"></script>

<script>
     document.getElementById('imageInput').addEventListener('change', function() {
        const imageFile = this.files[0];  
        if (imageFile) {
            const fileName = imageFile.name; 

            document.querySelector('.selected-file').innerText = `Selected file: ${fileName}`;
        }
    });
document.getElementById('uploadForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const imageFile = document.getElementById('imageInput').files[0];

    const maxSize = 5 * 1024 * 1024;
    if (imageFile.size > maxSize) {
        alert('File size exceeds 5 MB. Please upload a smaller file.');
        return;
    }

    const formData = new FormData();
    formData.append('image', imageFile);

    fetch('./upload', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Background image update successfully');
                window.location.href = './'
                updateImage();
            } else {
                console.error('Image upload failed:', data.error);
                document.querySelector('.error_msg').innerText = data.error;
            }
        })
        .catch(error => console.error('Error:', error));
});
updateImage();
</script>