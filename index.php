<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>test page</title>
</head>

<body>
    <form action="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="image1">
                <label for="image[0]">
                    <input type="file" onChange="handeFiles(files,image[0])" name="image[0]" id="image[0]" multiple>
                    <span id="showimage1">
                        <img width="400px" height="400px" src="vide.jpg" alt="">
                    </span>
                </label>
            </div>
            <div class="image2">
                <label for="image[1]">
                    <input type="file" onChange="handeFiles(files,image[1])" name="image[1]" id="image[1]">
                    <span id="image[1]">
                        <img width=" 200px" height="200px" src="vide.jpg" alt="">
                    </span>
            </div>
            <div class="image3">
                <label for="image[2]">
                    <input type="file" onChange="handeFiles(files,image[2])" name="image[2]" id="image[2]">
                    <span id="image[2]">
                        <img width="200px" height="200px" src="vide.jpg" alt="">
                    </span>
            </div>
            <div class="image4">
                <label for="image[3]">
                    <input type="file" onChange="handeFiles(files,image[3])" name="image[3]" id="image[3]"><span
                        id="image[3]">
                        <img width="200px" height="200px" src="vide.jpg" alt="">
                    </span>
            </div>
            <div class="image5">
                <label for="image[4]">
                    <input type="file" onChange="handeFiles(files,image[4])" name="image[4]" id="image[4]">
                    <span id="showimage4">
                        <img width="200px" height="200px" src="vide.jpg" alt="">
                    </span>
            </div>
            <div class="image6">
                <label for="image[5]">
                    <input type="file" onChange="handeFiles(files,image[5])" name="image[5]" id="image[5]">
                    <span id="showimage5">
                        <img width="200px" height="200px" src="vide.jpg" alt="">
                    </span>
            </div>
        </div>
        <button type="submit">Envoyer</button>
        <button type="reset">Reset</button>
    </form>
</body>
<script>
function handleFiles(files, valeur) {
    var imageType = /^image\//;
    for (var i = 0; i < files.length; i++) {
        var file = files[i];
        if (!imageType.test(file.type)) {
            alert("veuillez sélectionner une image");
        } else {
            if (i == 0) {
                switch (valeur) {
                    case 1:
                        preview1.innerHTML = '';
                        break;
                    case 2:
                        preview2.innerHTML = '';
                        break;
                    case 3:
                        preview3.innerHTML = '';
                        break;
                    case 4:
                        preview4.innerHTML = '';
                        break;
                    case 5:
                        preview5.innerHTML = '';
                        break;
                }

            }
            var img = document.createElement("img");
            img.classList.add("obj");
            img.file = file;
            switch (valeur) {
                case 1:
                    preview1.appendChild(img);
                    break;
                case 2:
                    preview2.appendChild(img);
                    break;
                case 3:
                    preview3.appendChild(img);
                    break;
                case 4:
                    preview4.appendChild(img);
                    break;
                case 5:
                    preview5.appendChild(img);
                    break;
            }

            var reader = new FileReader();
            reader.onload = (function(aImg) {
                return function(e) {
                    aImg.src = e.target.result;
                };
            })(img);

            reader.readAsDataURL(file);
        }

    }
</script>

</html> <?php ?>