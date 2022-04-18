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
                    <input type="file" onChange="handleFiles(files,0)" name="image1" id="image1" multiple>
                    <span id="preview0">
                        <img width="400px" height="400px" src="vide.jpg" alt="">
                    </span>
                </label>
            </div>
            <div class="image2">
                <label for="image2">
                    <input type="file" onChange="handleFiles(files,1)" name="image2" id="image2">
                    <span id="preview1">
                        <img width=" 200px" height="200px" src="vide.jpg" alt="">
                    </span>
            </div>
            <div class="image3">
                <label for="image3">
                    <input type="file" onChange="handleFiles(files,2)" name="image3" id="image3">
                    <span id="preview2">
                        <img width="200px" height="200px" src="vide.jpg" alt="">
                    </span>
            </div>
            <div class="image4">
                <label for="image4">
                    <input type="file" onChange="handleFiles(files,3)" name="image4" id="image4">
                    <span id="preview3">
                        <img width="200px" height="200px" src="vide.jpg" alt="">
                    </span>
            </div>
            <div class="image5">
                <label for="image5">
                    <input type="file" onChange="handleFiles(files,4)" name="image5" id="image5">
                    <span id="preview4">
                        <img width="200px" height="200px" src="vide.jpg" alt="">
                    </span>
            </div>
            <div class="image6">
                <label for="image6">
                    <input type="file" onChange="handleFiles(files,5)" name="image6" id="image6">
                    <span id="preview5">
                        <img width="200px" height="200px" src="vide.jpg" alt="">
                    </span>
            </div>
            <div class="option">
                <label for="fumeur"><i class="fa-solid fa-smoking"></i></label>
                <input type="checkbox" name="" id="">
                <label for="wifi"><i class="bi bi-wifi"></i></label>
                <input type="checkbox" name="" id="">
                <label for=""><i class="fa-solid fa-taxi"></i></label>
                <input type="checkbox" name="" id="">
                <label for=""></label>
                <input type="checkbox" name="" id="">

            </div>
            <div class="action">
                <button type="submit"><i class="fa-solid fa-toilet-paper"></i></button>
                <button type="reset"><i class="fa-solid fa-hand-peace"></i></button>
            </div>
        </div>

    </form>
</body>

<script type="text/javascript">
let nbLimit = 6;

function handleFiles(files, valeur) {
    let nbFiles = files.length;
    for (var i = 0; i < nbFiles; i++) {
        console.log("nb de fichier")
        var file = files[i];
        var imageType = /^image\//;
        if (!imageType.test(file.type)) {
            continue;
        }
        // fichier 0
        var img = document.createElement("img");
        img.classList.add("obj");
        img.file = file;
        if (files[i] && (i < nbLimit)) {
            console.log("valeur de i:" + i)
            switch (i) {
                case 0:
                    //image0
                    if (nbFiles == 1) {
                        switch (valeur) {
                            case 0:
                                console.log("preview0:" + valeur);
                                preview0.innerHTML = "";
                                preview0.appendChild(img);
                                break;
                            case 1:
                                console.log("preview1:" + valeur);
                                preview1.innerHTML = "";
                                preview1.appendChild(img);
                                break;
                            case 2:
                                console.log("preview2: " + valeur);
                                preview2.innerHTML = "";
                                preview2.appendChild(img);
                                break;
                            case 3:
                                console.log("preview3: " + valeur);
                                preview3.innerHTML = "";
                                preview3.appendChild(img);
                                break;
                            case 4:
                                console.log("preview4: " + valeur);
                                preview4.innerHTML = "";
                                preview4.appendChild(img);
                                break;
                            case 5:
                                console.log("preview5: " + valeur);
                                preview5.innerHTML = "";
                                preview5.appendChild(img);
                                break;
                        }
                    } else {
                        preview0.innerHTML = "";
                        preview0.appendChild(img);
                        break;

                    }
                    break;
                case 1:
                    //image1
                    preview1.innerHTML = "";
                    preview1.appendChild(img);
                    break;

                case 2:
                    //image2
                    preview2.innerHTML = "";
                    preview2.appendChild(img);
                    break;
                case 3:
                    //image3
                    preview3.innerHTML = "";
                    preview3.appendChild(img);
                    break;
                case 4:
                    //image4
                    preview4.innerHTML = "";
                    preview4.appendChild(img);
                    break;
                case 5:
                    //image4
                    preview5.innerHTML = "";
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
}
</script>

</html>