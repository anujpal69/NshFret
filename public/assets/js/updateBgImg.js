function updateImage() {
  let update_img = document.getElementById("update_img").style;
  fetch("getLatestImages.php")
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        update_img.backgroundImage = `url('${data.latestImage}')`;
        update_img.backgroundPosition = "center center";
        update_img.backgroundSize = "cover";
        update_img.backgroundRepeat = "no-repeat";
        update_img.height = "100%";
      } else {
        console.error("Error fetching latest image:", data.error);
      }
    })
    .catch((error) => console.error("Error:", error));
}


