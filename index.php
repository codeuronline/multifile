<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet"
        href=https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.3.0/font-awesome-animation.min.css"
        integrity="sha512-Po8rrCwchD03Wo+2ibHFielZ8luDAVoCyE9i6iFMPyn9+V1tIhGk5wl8iKC9/JfDah5Oe9nV8QzE8HHgjgzp3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="style.css">
    <title>test page</title>
</head>

<body>
    <form action="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="image0">
                <label for="image7"><i class="bi bi-house-fill"></i></i>
                </label>
                <input type="text" height="20" size="40" name="Titre" id="" placeholder="Le nom du logement ">
            </div>
            <div class="image1">
                <label for="image1">
                    <input type="file" onChange="handleFiles(files,1)" name="image1" id="image1" multiple>
                    <span id="preview1">
                        <img width="400px" height="400px" src="vide.jpg" alt="">
                    </span>
                </label>
            </div>
            <div class="image2">
                <label for="image2">
                    <input type="file" onChange="handleFiles(files,2)" name="image2" id="image2">
                    <span id="preview2">
                        <img width=" 200px" height="200px" src="vide.jpg" alt="">
                    </span>
            </div>
            <div class="image3">
                <label for="image3">
                    <input type="file" onChange="handleFiles(files,3)" name="image3" id="image3">
                    <span id="preview3">
                        <img width="200px" height="200px" src="vide.jpg" alt="">
                    </span>
            </div>
            <div class="image4">
                <label for="image4">
                    <input type="file" onChange="handleFiles(files,4)" name="image4" id="image4">
                    <span id="preview4">
                        <img width="200px" height="200px" src="vide.jpg" alt="">
                    </span>
            </div>
            <div class="image5">
                <label for="image5">
                    <input type="file" onChange="handleFiles(files,5)" name="image5" id="image5">
                    <span id="preview5">
                        <img width="200px" height="200px" src="vide.jpg" alt="">
                    </span>
            </div>
            <div class="image6">
                <label for="image6">
                    <input type="file" onChange="handleFiles(files,6)" name="image6" id="image6">
                    <span id="preview6">
                        <img width="200px" height="200px" src="vide.jpg" alt="">
                    </span>
            </div>
            <div class="image7">
                <button type="submit"><i class="fa-solid fa-toilet-paper"></i></button>
                <button type="reset"><i class="fa-solid fa-hand-peace"></i></button>
            </div>
        </div>

    </form>
</body>

<script type="text/javascript">
function handleFiles(files, valeur) {
    var imageType = /^image\//;
    for (var i = 0; i < files.length; i++) {
        console.log("nb fichier : " + files.length);
        console.log("fichier" + i);
        var file = files[i];
        if (!imageType.test(file.type)) {
            alert("veuillez sélectionner une image");
        } else {
            if (i == 0) {
                switch (valeur) {
                    case 1:
                        preview1.innerHTML = '';
                        if (files.length > 1) {
                            for (var j = 2; j <= files.length; j++) {
                                if (j <= 6) {
                                    console.log("inialise preview:" + j);
                                    (j == 2) ? preview2.innerHTML = '': null;
                                    (j == 3) ? preview3.innerHTML = '': null;
                                    (j == 4) ? preview4.innerHTML = '': null;
                                    (j == 5) ? preview5.innerHTML = '': null;
                                    (j == 6) ? preview6.innerHTML = '': null;
                                }
                            }
                        }

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
                    case 6:
                        preview6.innerHTML = '';
                        break;
                }

            }
            var img = document.createElement("img");
            img.classList.add("obj");
            img.file = files[i];
            switch (valeur) {
                case 1:
                    console.log("chargement de preview:" + valeur)
                    preview1.appendChild(img);
                    if (files.lenght > 1) {
                        for (var j = 2; j <= files.length; j++) {
                            var imgBIS = document.createElement("img");
                            imgBIS.classList.add("obj");
                            if (j <= 6) {
                                switch (j) {

                                    case 2:
                                        preview2.appendChild(imgBIS);
                                        var reader = new FileReader();
                                        reader.onload = (function(aImg) {
                                            return function(e) {
                                                aImg.src = e.target.result;
                                            };
                                        })(img);
                                        reader.readAsDataURL(file);
                                        break;

                                    case 3:
                                        preview3.appendChild(imgBIS);
                                        break;
                                    case 4:
                                        preview4.appendChild(imgBIS);
                                        break;
                                    case 5:
                                        preview5.appendChild(imgBIS);
                                        break;
                                    case 6:
                                        preview6.appendChild(imgBIS);
                                        break;
                                }

                            }
                        }
                    }
                    break;
                case 2:
                    preview[2].appendChild(img);
                    break;
                case 3:
                    preview[3].appendChild(img);
                    break;
                case 4:
                    preview[4].appendChild(img);
                    break;
                case 5:
                    preview[5].appendChild(img);
                    break;
                case 6:
                    preview[6].appendChild(img);
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
}
</script>

</html>